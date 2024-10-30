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
        //
        $courses = Course::all();

        return view('mains.user.home', ['courses' => $courses]);
    }

    public function index_teacher() {

        $teacher_id = Auth::user()->id; // Lấy ra id của giáo viên

        $courses = Course::where('teacher_id', $teacher_id)->with('users')->get(); // Lấy ra các khóa học thuộc về giáo viên cùng với các học viên thuộc về từng khóa học

        $courseCount = Course::where('teacher_id', $teacher_id)->count(); // Đếm xem có bao nhiêu khóa học thuộc về giáo viên

        $studentCount = $courses->sum(function($course) {
            return $course->users->count();
        });

        $reviewCount = $courses->sum(function($course) {
            return $course->reviews->count();
        });

        return view('mains.teacher.home', [

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
