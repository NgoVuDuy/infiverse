<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCourseController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->group(function () {

    Route::get('/login', 'index');
    Route::post('/login', 'store');
});

Route::controller(RegisterController::class)->group(function () {

    Route::get('/register', 'index');
    Route::post('/register', 'store');
});

Route::middleware(['login'])->group(function () {


    Route::controller(HomeController::class)->group(function () {

        Route::get('/', 'index');

        // ->middleware('prevent_root');
        Route::get('/overview', 'overview');
    });

    Route::controller(CourseController::class)->group(function () {


        Route::middleware(['role:teacher'])->group(function () {

            Route::get('/courses-mgmt', 'index_teacher'); // gv

            Route::get('/teacher-course', 'teacher_course');

            Route::get('/create-new-course', 'create'); //gv

            Route::post('/create-new-course', 'store'); //gv

            Route::get('courses/{id}/teacher-course-details', 'show_teacher')->name('teacher-course-details'); //gv

            Route::get('{course_id}/delete-course-cfmt', 'destroy_cfmt')->name('delete-course-cfmt'); //gv

            Route::get('{course_id}/delete-course', 'destroy')->name('delete-course'); //gv





        });

        //Topic
        Route::get('/ltcs', 'ltcs');
        Route::get('/ltnc', 'ltnc');
        Route::get('/tt', 'tt');
        Route::get('/gqvd', 'gqvd');
        Route::get('/all-course', 'allCourse');
        Route::get('/remaining', 'remaining');


        Route::get('/courses', 'index');
        Route::get('courses/{id}/course-details', 'show')->name('course-details');

        Route::get('/search', 'search');
    });

    Route::controller(LessionController::class)->group(function () {

        Route::get('/courses/{course}/lessions', 'index')->name('lessions')->middleware('checkcourseenrollment');

        Route::post('/{course_id}/create-new-lession', 'store')->name('create-new-lession');

        Route::post('{course_id}/{lession_id}/update-lession', 'update')->name('update-lession');

        Route::get('{course_id}/{lession_id}/delete-lession', 'destroy')->name('delete-lession');
    });

    // Route::get('/admin', function () {

    //     return view('mains.admin.home');

    // })->middleware('role:admin');

    Route::controller(LogoutController::class)->group(function () {

        Route::get('/logout-show', 'index');


        Route::get('/logout', 'store');
    });

    Route::controller(UserCourseController::class)->group(function () {

        Route::post('/{course}/join-in-course', 'store')->name('join-in-course');

        Route::post('/{course}/course-code', 'code')->name('course-code');

        Route::get('/load-courses', 'show');

        Route::delete('/{id}/leave-course', 'destroy')->name('leave-course');

        Route::get('{id}/leave-course-show', 'leaveCourseAlert')->name('leave-course-show'); //?
    });

    Route::controller(UserController::class)->group(function () {

        Route::get('/user', 'index');

        // Route::get('/profile', 'index_teacher');

        Route::get('/load-edit-form', 'edit'); // 

        Route::get('{user_id}/user-details', 'show')->name('user-details');

        Route::delete('/delete-user', 'destroy');

        Route::post('/update-user', 'update');

        Route::post('/change-username', 'changeUsername');
        Route::post('/change-password', 'changePassword');
    });

    Route::get('/delete-user-confirmation', function () {

        return redirect('/user')->with('delete-user-confirmation', 'Bạn có chắc xóa tài khoản này không ?');
    });

    // Route::get('/delete-user-profile', function () {

    //     return redirect('/profile')->with('delete-user-profile', 'Bạn có chắc xóa tài khoản này không ?');
    // });

    Route::controller(ReviewController::class)->group(function () {

        Route::post('{course_id}/review', 'store')->name('review');

        Route::middleware(['role:teacher'])->group(function () {


            Route::post('{course_id}/{review_id}/response', 'update')->name('response');

            Route::post('{course_id}/{review_id}/update-response', 'update_response')->name('update-response');

            Route::delete('{course_id}/{review_id}/delete-response', 'destroy_response')->name('delete-response');
        });
    });

    Route::get('/change-username', function () {

        return view('mains.user.change-username');
    });

    Route::get('/change-password', function () {

        return view('mains.user.change-password');
    });
});
