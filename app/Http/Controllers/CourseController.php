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

        $teacher_id = Auth::user()->id;

        $courses = Course::where('teacher_id', $teacher_id)->get();

        return view('mains.teacher.course-mgmt', ['courses' => $courses]);
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

        // Lấy các bài đánh giá của khóa học này
        // $reviews = $course->reviews;
        $reviews = $course->reviews()->with('user')->orderBy('created_at', 'desc')->get();

        return view('mains.user.course-details', compact('course', 'isEnrolled', 'join_quatity', 'reviews', 'teacher_name'));
    }


    public function show_teacher(string $id) {

        $course = Course::find($id);
        $user_id = Auth::user()->id;

        $lessions = $course->lessions;

        $reviews = $course->reviews()->with('user')->orderBy('created_at', 'desc')->get();


        return view('mains.teacher.teacher-course-details', compact('course', 'lessions', 'reviews'));


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