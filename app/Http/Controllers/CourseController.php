<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
    }

    public function store(Request $request)
    {

    }

    public function show(string $id) {

        $course = Course::find($id);
        $user_id = Auth::user()->id;
        $isEnrolled = UserCourse::where('user_id', $user_id)->where('course_id', $id)->exists();

        $join_quatity = UserCourse::where('course_id', $id)->count();

        return view('mains.user.course-details', compact('course', 'isEnrolled', 'join_quatity'));
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