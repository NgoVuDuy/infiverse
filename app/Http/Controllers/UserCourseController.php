<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

        $user->courses()->attach($course_id, [
            'created_at' => now(), // Thêm giá trị cho cột created_at
            'updated_at' => now(),  // Thêm giá trị cho cột updated_at nếu cần
        ]);

        return redirect(route('course-details', $course_id))->with('message-join-in', 'Chúc mừng bạn đã tham gia thành công khóa học');
    }

    public function code(Request $request, string $id)
    {

        $code = $request->input('code');

        // echo $id . $code;
        $course = Course::find($id);
        if ($course) {

            if ($course->code == $code) {

                return $this->store($request, $id);

            } else {

                return redirect(route('course-details', $id))->with('message-join-in', 'Mã code sai');
            }
        }
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

        if ($courses->isEmpty()) {
            return "<h6 class='empty-courses-text'>Bạn chưa đăng ký khóa học nào</h6>";
        }

        return view('mains.user.enrolled-course', compact('courses'));
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

        if ($courses->isEmpty()) {
            return "<h6 class='empty-courses-text' >Bạn chưa đăng ký khóa học nào</h6>";
        }

        return view('mains.user.enrolled-course', compact('courses'));
    }

    public function leaveCourseAlert(string $id) {

        return back()
        ->with('message-leave-course', 'Bạn có chắc muốn rời khỏi khóa học này không ?')
        ->with('id-leave-course', $id);
    }
}