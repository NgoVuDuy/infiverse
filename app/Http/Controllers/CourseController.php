<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index() {

        $courses = Course::all();
        return view('mains.user.course', ['courses' => $courses]);

    }

    public function index_teacher() {

        $teacher_id = Auth::user()->id; // Lấy ra id của giáo viên

        $courses = Course::where('teacher_id', $teacher_id)->get(); // Lấy ra các khóa học thuộc về giáo viên đó

        return view('mains.teacher.course-mgmt', ['courses' => $courses]); // Trả về trang quản lý khóa học cùng với các khóa học của giáo viên
    }

    public function create()
    {
        //
        return view('partials.create-new-course-form');
    }

    public function store(Request $request)
    {
        $teacher_id = Auth::user()->id;
        $teacher_name = Auth::user()->username;

        $teacher = User::find($teacher_id);

        $coursename = $request->input('coursename');
        $description = $request->input('description');
        $description_details = $request->input('description_details');
        $course_password = $request->input('course_password');

        $path = null;

        if ($request->hasFile('course-img')) {

            // Lấy file
            $file = $request->file('course-img');

            // $path = $file->storeAs('images/users', $file->getClientOriginalName(), 'public');
            $file->move(public_path('images/courses/' . $teacher_id . "_" . $teacher_name), $file->getClientOriginalName());

            $path = 'images/courses/' . $teacher_id . "_" . $teacher_name . "/" . $file->getClientOriginalName();
        }

        $course = Course::insert([

            'course_name' => $coursename,
            'description' => $description,
            'description_details' => $description_details,
            'img' => $path,
            'teacher_id' => 2,
            'created_at' => now(),
            'updated_at' => now()

        ]);

        if($course) {
            return back()->with('message-create-course', 'Tạo khóa học thành công');
        } else {
            return back()->with('message-create-course', 'Tạo khóa học thất bại !');

        }


    }

    public function show(string $id) {

        $course = Course::find($id);
        $user_id = Auth::user()->id;

        $teacher_id = $course->teacher_id;

        $teacher_name = User::find($teacher_id)->fullname;

        // Kiểm tra người dùng đang đăng nhập có tham gia khóa học này hay không
        $isEnrolled = UserCourse::where('user_id', $user_id)->where('course_id', $id)->exists();

        // Lấy tổng số lượng học viên đã tham gia khóa học này
        $join_quatity = UserCourse::where('course_id', $id)->count();

        //Lấy tổng các bài đánh giá
        $review_quatity = $course->reviews->count();

        // Lấy các bài đánh giá của khóa học này kèm theo thông tin của học viên
        $reviews = $course->reviews()->with('user')->orderBy('created_at', 'desc')->get();

        $star_rating_sum = 0;
        foreach($reviews as $review) {
            $star_rating_sum += $review->star_rating;

        } // Tính tổng các xếp hạng sao

        $star_rating_average = round($star_rating_sum / $review_quatity,1) ; // Tính trung bình xếp hạng sao

        return view('mains.user.course-details', compact('course', 'isEnrolled', 'join_quatity', 'reviews', 'teacher_name', 'review_quatity', 'star_rating_average'));
    }


    public function show_teacher(string $id) {

        $course = Course::find($id); // Tìm khóa học theo id
        // $user_id = Auth::user()->id;
        $lessions = $course->lessions; // Lấy ra các bài học thuộc về khóa học đó

        $reviews = $course->reviews()->with('user')->orderBy('created_at', 'desc')->get(); // Lấy ra các bài review của khóa học đi kèm theo thông tin của học viên

        $students = $course->users; // Lấy ra các học viên của khóa học

        return view('mains.teacher.teacher-course-details', compact('course', 'lessions', 'reviews', 'students'));
    }

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