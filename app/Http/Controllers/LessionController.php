<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lession;
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

        $lessions = $course->lessions;

        return view('mains.user.lession', compact('course', 'lessions'));
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
    public function update(Request $request, Lession $lession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lession $lession)
    {
        //
    }
}
