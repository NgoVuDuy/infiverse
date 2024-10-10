<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ResgiterController;
use App\Http\Controllers\EditFormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCourseController;
use App\Http\Middleware\RoleMiddleware;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')->middleware('login');
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

    Route::get('courses/{id}/course-details', 'show')->name('course-details');
});

Route::controller(LessionController::class)->group(function () {

    Route::get('/courses/{course}/lessions', 'index')->name('lessions');
});

Route::get('/admin', function () {

    return view('admin');
    
})->middleware('role:admin');

Route::get('/teacher', function () {

    return view('teacher.home');
    
})->middleware('role:teacher');


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

    Route::get('/load-edit-form', 'edit');

    Route::get('/user-details', 'show')->name('user-details');

    Route::get('/delete-user', 'destroy');


    Route::post('/update-user', 'update');

    Route::post('/change-username', 'changeUsername');
});

Route::get('/change-username', function() {

    return view('partials.change-username-form');
});

// Route::post('/change-username', [UserController::class, 'changeUsername']);

Route::get('/change-password', function() {

    return view('partials.change-password-form');
});
