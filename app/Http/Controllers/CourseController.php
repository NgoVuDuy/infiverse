<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use App\Models\User;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Exists;

class CourseController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $courses = Course::with('users') // Đưa thông tin người dùng tham gia khóa học
            ->get()
            ->map(function ($course) use ($user) {
                // Kiểm tra người dùng có tham gia khóa học không
                $course->has_joined = $course->users->contains($user);
                return $course;
            });

        return view('mains.user.course', compact('courses'));
    }

    public function index_teacher()
    {

        $teacher_id = Auth::user()->id; // Lấy ra id của giáo viên

        $courses = Course::where('teacher_id', $teacher_id)->get(); // Lấy ra các khóa học thuộc về giáo viên đó

        return view('mains.teacher.course-mgmt', ['courses' => $courses]); // Trả về trang quản lý khóa học cùng với các khóa học của giáo viên
    }

    public function create()
    {
        //
        return view('mains.teacher.create-new-course');
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
        $course_code = $request->input('course_code');

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
            'code' => $course_code,
            'created_at' => now(),
            'updated_at' => now()

        ]);

        if ($course) {
            return back()->with('message-create-course', 'Tạo khóa học thành công');
        } else {
            return back()->with('message-create-course', 'Tạo khóa học thất bại !');
        }
    }

    public function show(string $id)
    {



        $course = Course::find($id);
        $user_id = Auth::user()->id;

        $teacher_id = $course->teacher_id;

        $teacher_name = User::find($teacher_id)->fullname;

        // Kiểm tra người dùng đang đăng nhập có tham gia khóa học này hay không
        $isEnrolled = UserCourse::where('user_id', $user_id)->where('course_id', $id)->exists();

        $isReview = Review::where('student_id', $user_id)->where('course_id', $id)->exists();
        // Lấy tổng số lượng học viên đã tham gia khóa học này
        $join_quatity = UserCourse::where('course_id', $id)->count();

        //Lấy tổng các bài đánh giá
        $review_quatity = $course->reviews->count();

        // Lấy các bài đánh giá của khóa học này kèm theo thông tin của học viên
        $reviews = $course->reviews()->with('user')->orderBy('created_at', 'desc')->get();

        $star_rating_average = 0.0;

        if ($review_quatity != 0) {

            $star_rating_sum = 0;
            foreach ($reviews as $review) {
                $star_rating_sum += $review->star_rating;
            } // Tính tổng các xếp hạng sao

            $star_rating_average = round($star_rating_sum / $review_quatity, 1); // Tính trung bình xếp hạng sao

        }

        return view('mains.user.course-details', compact('course', 'isEnrolled', 'isReview', 'join_quatity', 'reviews', 'teacher_name', 'review_quatity', 'star_rating_average'));
    }


    public function show_teacher(string $id)
    {

        $course = Course::find($id); // Tìm khóa học theo id
        // $user_id = Auth::user()->id;
        $lessions = $course->lessions; // Lấy ra các bài học thuộc về khóa học đó

        $reviews = $course->reviews()->with('user')->orderBy('updated_at', 'desc')->get(); // Lấy ra các bài review của khóa học đi kèm theo thông tin của học viên

        $students = $course->users; // Lấy ra các học viên của khóa học

        return view('mains.teacher.teacher-course-details', compact('course', 'lessions', 'reviews', 'students'));
    }


    public function convertToSlug($string)
    {
        // Xóa khoảng trắng thừa
        $string = trim(preg_replace('/\s+/', ' ', $string));

        // Chuyển về chữ thường
        $string = strtolower($string);

        // Chuyển ký tự tiếng Việt thành tiếng Anh
        $vietnameseMap = [
            'à' => 'a',
            'á' => 'a',
            'ạ' => 'a',
            'ả' => 'a',
            'ã' => 'a',
            'â' => 'a',
            'ầ' => 'a',
            'ấ' => 'a',
            'ậ' => 'a',
            'ẩ' => 'a',
            'ẫ' => 'a',
            'ă' => 'a',
            'ằ' => 'a',
            'ắ' => 'a',
            'ặ' => 'a',
            'ẳ' => 'a',
            'ẵ' => 'a',
            'è' => 'e',
            'é' => 'e',
            'ẹ' => 'e',
            'ẻ' => 'e',
            'ẽ' => 'e',
            'ê' => 'e',
            'ề' => 'e',
            'ế' => 'e',
            'ệ' => 'e',
            'ể' => 'e',
            'ễ' => 'e',
            'ì' => 'i',
            'í' => 'i',
            'ị' => 'i',
            'ỉ' => 'i',
            'ĩ' => 'i',
            'ò' => 'o',
            'ó' => 'o',
            'ọ' => 'o',
            'ỏ' => 'o',
            'õ' => 'o',
            'ô' => 'o',
            'ồ' => 'o',
            'ố' => 'o',
            'ộ' => 'o',
            'ổ' => 'o',
            'ỗ' => 'o',
            'ơ' => 'o',
            'ờ' => 'o',
            'ớ' => 'o',
            'ợ' => 'o',
            'ở' => 'o',
            'ỡ' => 'o',
            'ù' => 'u',
            'ú' => 'u',
            'ụ' => 'u',
            'ủ' => 'u',
            'ũ' => 'u',
            'ư' => 'u',
            'ừ' => 'u',
            'ứ' => 'u',
            'ự' => 'u',
            'ử' => 'u',
            'ữ' => 'u',
            'ỳ' => 'y',
            'ý' => 'y',
            'ỵ' => 'y',
            'ỷ' => 'y',
            'ỹ' => 'y',
            'đ' => 'd',
            'À' => 'A',
            'Á' => 'A',
            'Ạ' => 'A',
            'Ả' => 'A',
            'Ã' => 'A',
            'Â' => 'A',
            'Ầ' => 'A',
            'Ấ' => 'A',
            'Ậ' => 'A',
            'Ẩ' => 'A',
            'Ẫ' => 'A',
            'Ă' => 'A',
            'Ằ' => 'A',
            'Ắ' => 'A',
            'Ặ' => 'A',
            'Ẳ' => 'A',
            'Ẵ' => 'A',
            'È' => 'E',
            'É' => 'E',
            'Ẹ' => 'E',
            'Ẻ' => 'E',
            'Ẽ' => 'E',
            'Ê' => 'E',
            'Ề' => 'E',
            'Ế' => 'E',
            'Ệ' => 'E',
            'Ể' => 'E',
            'Ễ' => 'E',
            'Ì' => 'I',
            'Í' => 'I',
            'Ị' => 'I',
            'Ỉ' => 'I',
            'Ĩ' => 'I',
            'Ò' => 'O',
            'Ó' => 'O',
            'Ọ' => 'O',
            'Ỏ' => 'O',
            'Õ' => 'O',
            'Ô' => 'O',
            'Ồ' => 'O',
            'Ố' => 'O',
            'Ộ' => 'O',
            'Ổ' => 'O',
            'Ỗ' => 'O',
            'Ơ' => 'O',
            'Ờ' => 'O',
            'Ớ' => 'O',
            'Ợ' => 'O',
            'Ở' => 'O',
            'Ỡ' => 'O',
            'Ù' => 'U',
            'Ú' => 'U',
            'Ụ' => 'U',
            'Ủ' => 'U',
            'Ũ' => 'U',
            'Ư' => 'U',
            'Ừ' => 'U',
            'Ứ' => 'U',
            'Ự' => 'U',
            'Ử' => 'U',
            'Ữ' => 'U',
            'Ỳ' => 'Y',
            'Ý' => 'Y',
            'Ỵ' => 'Y',
            'Ỷ' => 'Y',
            'Ỹ' => 'Y',
            'Đ' => 'D',
        ];

        $string = strtr($string, $vietnameseMap);

        return $string;
    }


    public function search(Request $request)
    {

        $text = $request->input('search-text');

        $textSlug = $this->convertToSlug($text);

        $courses = Course::whereRaw('LOWER(course_name) LIKE ?', ['%' . strtolower($textSlug) . '%'])->get();

        return view('mains.user.search', compact('courses', 'text'));

        // echo $courses;
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

     public function destroy_cfmt(string $id) {

        return redirect('/courses-mgmt')->with('message-delete-course', 'Bạn có muốn xóa khóa học này không ?')->with('course-id', $id);
     }




    public function destroy(string $id)
    {
        //
        $course = Course::find($id);
        $course->delete();

        $teacher_id = Auth::user()->id; // Lấy ra id của giáo viên
        $courses = Course::where('teacher_id', $teacher_id)->get(); // Lấy ra các khóa học thuộc về giáo viên đó

        return redirect('/courses-mgmt'); // Trả về trang quản lý khóa học cùng với các khóa học của giáo viên
    }
}
