<?php

namespace App\Http\Middleware;

use App\Models\UserCourse;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckCourseEnrollmentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = Auth::user()->id; // Lấy ID người dùng hiện tại
        $path = $_SERVER['REQUEST_URI'];

        // Tách các thành phần trong đường dẫn
        $segments = explode('/', $path);

        // Lấy ID từ phần tử thứ 3 (chỉ mục 2 trong mảng)
        $course_id = $segments[2];

        // Kiểm tra xem người dùng đã tham gia khóa học chưa
        $isEnrolled = UserCourse::where('user_id', $user_id)->where('course_id', $course_id)->exists();

        if (!$isEnrolled) {
            return back();
        }

        return $next($request);
    }
}
