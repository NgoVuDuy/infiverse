<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lession;
use App\Models\User;
use Illuminate\Http\Request;

class LessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($course_id)
    {
        //
        $course = Course::findOrFail($course_id);

        $teacher_id = $course->teacher_id;
        $teacher_name = User::find($teacher_id)->fullname;

        $lessions = $course->lessions;

        return view('mains.user.lession', compact('course', 'lessions',  'teacher_name'));
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
    public function store(Request $request, string $course_id)
    {
        //
        $title_lession = $request->input('title-lession');
        $desc_lession = $request->input('desc-lession');

        if ($request->hasFile('file-lession')) {

            $file = $request->file('file-lession');

            $time_code = uniqid();

            // $filename = $file->getClientOriginalName();
            $file->move(public_path('files/' . $time_code), $file->getClientOriginalName());

            $path = 'files/' . $time_code . '/' . $file->getClientOriginalName();

            // echo $file->getClientOriginalName();
        }

        $lession = Lession::create([
            'course_id' => $course_id,
            'title' => $title_lession,
            'file' => $path,
            'desc_file' => $desc_lession,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('create-lession-message', 'Tạo bài học thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lession $lession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lession $lession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $course_id, string $lession_id)
    {
        // echo $id;
        //
        $title_lession = $request->input('title-lession');
        $desc_lession = $request->input('desc-lession');

        if ($request->hasFile('file-lession')) {

            $file = $request->file('file-lession');

            $time_code = uniqid();

            // $filename = $file->getClientOriginalName();
            $file->move(public_path('files/' . $time_code), $file->getClientOriginalName());

            $path = 'files/' . $time_code . '/' . $file->getClientOriginalName();

            // echo $file->getClientOriginalName();
        }
        // echo $response;

        $lession = Lession::find($lession_id);

        if ($lession) {

            $lession->title = $title_lession;
            $lession->file = $path;
            $lession->desc_file = $desc_lession;

            $lession->save();
        }

        return redirect()->to(route('teacher-course-details', $course_id) . "#lession-title")
            ->with('display-lession', 'block')
            ->with('message-update-lession', 'Cập nhật bài học thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $course_id, string $lession_id)
    {
        //
        $lession = Lession::find($lession_id);

        if ($lession) {

            $lession->delete();
        }

        return redirect()->to(route('teacher-course-details', $course_id) . "#lession-title")
            ->with('display-lession', 'block')
            ->with('message-delete-lession', 'Xóa bài học thành công');
    }
}
