<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ResgiterController;
use App\Http\Controllers\EditFormController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCourseController;
use App\Http\Middleware\RoleMiddleware;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')
    ->middleware('login')
    ->middleware('prevent_root');

    Route::get('/teacher', 'index_teacher')->middleware('role:teacher');

});

Route::controller(LoginController::class)->group(function () {

    Route::get('/login', 'index');

    Route::post('/login', 'store');
});

Route::controller(ResgiterController::class)->group(function () {

    Route::get('/resgiter', 'index');

    Route::post('/resgiter', 'store');
});

Route::controller(CourseController::class)->group(function () {

    Route::get('/courses', 'index');

    Route::get('/courses-mgmt', 'index_teacher');

    Route::get('/create-new-course', 'create');

    Route::post('/create-new-course', 'store');


    Route::get('courses/{id}/course-details', 'show')->name('course-details');

    Route::get('courses/{id}/teacher-course-details', 'show_teacher')->name('teacher-course-details');

});

Route::controller(LessionController::class)->group(function () {

    Route::get('/courses/{course}/lessions', 'index')->name('lessions');

    Route::post('/{course_id}/create-new-lession', 'store')->name('create-new-lession');
});

Route::get('/admin', function () {

    return view('mains.admin.home');
    
})->middleware('role:admin');

// Route::get('/teacher', function () {

//     return view('mains.teacher.home');
    
// })->middleware('role:teacher');

Route::controller(LogoutController::class)->group(function() {

    Route::get('/logout-show', 'index');
    Route::get('/logout', 'store');

});

Route::controller(UserCourseController::class)->group(function() {

    Route::get('/{course}/join-in-course', 'store')->name('join-in-course');

    Route::get('/load-courses', 'show');

    Route::get('/{id}/leave-course', 'destroy')->name('leave-course');

});

Route::controller(UserController::class)->group(function() {

    Route::get('/user', 'index');

    Route::get('/profile', 'index_teacher');


    Route::get('/load-edit-form', 'edit');

    Route::get('{user_id}/user-details', 'show')->name('user-details');

    Route::get('/delete-user', 'destroy');

    Route::post('/update-user', 'update');

    Route::post('/change-username', 'changeUsername');
    Route::post('/change-password', 'changePassword');

});

Route::get('/change-username', function() {

    return view('partials.change-username-form');
});


Route::get('/change-password', function() {

    return view('partials.change-password-form');
});

Route::get('/delete-user-confirmation', function() {

    return redirect('/user')->with('delete-user-confirmation', 'Bạn có chắc xóa tài khoản này không ?');
});

Route::get('/delete-user-profile', function() {

    return redirect('/profile')->with('delete-user-profile', 'Bạn có chắc xóa tài khoản này không ?');
});

Route::controller(ReviewController::class)->group(function() {

    Route::post('{course_id}/review', 'store')->name('review');

    Route::post('{course_id}/{review_id}/response', 'update')->name('response');

});
