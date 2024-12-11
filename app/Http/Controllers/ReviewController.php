<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
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
    public function store(Request $request, string $id)
    {

        $student_id = Auth::user()->id; // Lay id nguoi danh gia
        $review = $request->input('review'); // Lay ra text danh gia
        $star_rating = $request->input('star_rating'); // Lay ra so sao danh gia


        $isReview = Review::where('student_id', $student_id)->where('course_id', $id)->exists();

        if ($isReview) {

            $review_on_table = Review::where('student_id', $student_id)->where('course_id', $id)->first();
            if ($review_on_table) {

                $review_on_table->review = $review;
                $review_on_table->star_rating = $star_rating;

                $review_on_table->save();
            }
        } else {


            $review = Review::create([

                'student_id' => $student_id,
                'course_id' => $id,
                'review' => $review,
                'star_rating' => $star_rating
            ]);
        }







        return redirect()->to(route('course-details', $id) . '#review-title');
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
    public function update(Request $request, string $course_id, string $review_id)
    {
        $review = Review::find($review_id);
        //
        $response_teacher = $request->input('response');

        if ($review) {

            $review->response = $response_teacher;

            $review->save();
        }


        return redirect()->to(route('teacher-course-details', $course_id) . "#review-title")->with('display', 'block');
    }

    public function update_response(Request $request, string $course_id, string $review_id)
    {

        // echo $id;
        $response = $request->input('response');
        // echo $response;

        $review = Review::find($review_id);

        if ($review) {

            $review->response = $response;

            $review->save();
        }

        return redirect()->to(route('teacher-course-details', $course_id) . "#review-title")
            ->with('display', 'block')
            ->with('message-update-response', 'Cập nhật câu trả lời thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

    }

    public function destroy_response(string $course_id, string $review_id)
    {

        $review = Review::find($review_id);

        if ($review) {

            $review->response = null;

            $review->save();
        }


        return redirect()->to(route('teacher-course-details', $course_id) . "#review-title")
            ->with('display-review', 'block')
            ->with('message-delete-response', 'Xóa câu trả lời thành công');
    }
}
