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

    public function show(string $id) {

        $course = Course::find($id);
        $user_id = Auth::user()->id;
        $isEnrolled = UserCourse::where('user_id', $user_id)->where('course_id', $id)->exists();

        $join_quatity = UserCourse::where('course_id', $id)->count();

        return view('mains.user.course-details', compact('course', 'isEnrolled', 'join_quatity'));
    }
}