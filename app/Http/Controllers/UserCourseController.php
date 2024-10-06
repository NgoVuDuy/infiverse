<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, $course_id)
    {
        //
        $user_id = Auth::user()->id;

        $user = User::find($user_id);
        // echo $user;
        // echo $course_id;

        $user->courses()->attach($course_id);

        return redirect(route('course-details', $course_id));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        $courses = $user->courses;

        if($courses -> isEmpty()) {
            return "<h6 class='empty-courses-text'>Bạn chưa đăng ký khóa học nào</h6>";
        }

        return view('partials.enrolled-course', compact('courses'));
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
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $user->courses()->detach($id);

        $courses = $user->courses;

        if($courses -> isEmpty()) {
            return "<h6 class='empty-courses-text' >Bạn chưa đăng ký khóa học nào</h6>";
        }

        return view('partials.enrolled-course', compact('courses'));
    }
}
