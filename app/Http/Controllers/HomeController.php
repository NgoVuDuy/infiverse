<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user(); // Lấy thông tin người dùng hiện tại

        // Lấy ra top 4 khóa học có thời gian tạo mới nhất (Khóa học mới nhất)
        $newCourses = Course::orderBy('created_at', 'desc')->take(4)->get();


        //Lấy ra top 4 khóa học có trung bình đánh giá cao nhất (Khóa học nổi bật)
        $osdCourses = Course::withAvg('reviews', 'star_rating')->orderByDesc('reviews_avg_star_rating')->take(4)->get();


        //Lấy ra top 4 khóa học có số lượng học viên tham gia nhiều nhất
        $suggestCourses = Course::withCount('users')->orderByDesc('users_count')->take(4)->get();

        // Kiểm tra người dùng có tham gia khóa học nào không
        $newCourses = $newCourses->map(function ($course) use ($user) {
            $course->has_joined = $course->users->contains($user);
            return $course;
        });

        $osdCourses = $osdCourses->map(function ($course) use ($user) {
            $course->has_joined = $course->users->contains($user);
            return $course;
        });

        $suggestCourses = $suggestCourses->map(function ($course) use ($user) {
            $course->has_joined = $course->users->contains($user);
            return $course;
        });

        return view('mains.user.home', compact('newCourses', 'osdCourses', 'suggestCourses'));
    }

    public function overview()
    {

        $teacher_id = Auth::user()->id; // Lấy ra id của giáo viên

        $courses = Course::where('teacher_id', $teacher_id)->with('users')->get(); // Lấy ra các khóa học thuộc về giáo viên cùng với các học viên thuộc về từng khóa học

        $courseCount = Course::where('teacher_id', $teacher_id)->count(); // Đếm xem có bao nhiêu khóa học thuộc về giáo viên

        $studentCount = $courses->sum(function ($course) {
            return $course->users->count();
        });

        $reviewCount = $courses->sum(function ($course) {
            return $course->reviews->count();
        });

        return view('partials.overview', [

            'courses' => $courses,
            'courseCount' => $courseCount,
            'studentCount' => $studentCount,
            'reviewCount' => $reviewCount
        ]); // Trả về trang quản lý khóa học cùng với các khóa học của giáo viên
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
