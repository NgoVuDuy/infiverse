@extends('layouts.main')

@section('title', 'Quản lý khóa học')

@section('css')

<!-- <link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet"> -->
<link href="{{ asset('css/user/course.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/user/user.css') }}">

<link href="{{ asset('css/teacher/course-mgmt.css') }}" rel="stylesheet">


@endsection

@section('content')


<div class="container">
    <div class="row">

        <main class="ms-sm-auto col-12 mt-4">

            <div class="row">

                <div class="navbar-child">

                    <a href="/">
                        Trang chủ
                    </a>

                    <span class="navbar-child-icon">
                        >
                    </span>

                    <a href="/courses-mgmt">
                        Quản lý khóa học
                    </a>


                </div>

                <div class="col-6">

                    <div class="row mt-2 mb-2">
                        <!-- <div class="col-2">
                            <center>
                                <a class="back-link" href="/courses-mgmt">

                                    <img class="create-new-course-btn" src="{{ asset('images/icon/back.png') }}" width="50%" alt="">
                                    <p class="nav-opt-text">Trở lại</p>
                                </a>
                            </center>
                        </div> -->

                        <div class="col-2">
                            <center>

                                <a href="/create-new-course" style="text-decoration: none;">
                                    <img class="create-new-course-btn" src="{{ asset('images/icon/plus.png') }}" width="44px" alt="">
                                    <p class="nav-opt-text">Tạo mới</p>

                                </a>
                            </center>
                        </div>


                    </div>

                </div>


            </div>

            <div class="create-new-course-form">


                <hr>

                <div class="row g-2 course-row ">


                    <h6 style="font-weight:600">Các khóa học của tôi</h6>


                    @foreach($courses as $course)

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 course-cover">

                        <div class="course">

                            <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">

                            <p class="course-name">{{ $course->course_name }}</p>

                            <a class="course-link" href="{{ route('teacher-course-details', $course->id) }}">

                                <button class="join-in-btn">Chi tiết</button>
                            </a>

                            <a class="delete-course" href="{{ route('delete-course-cfmt', $course->id) }}">

                                <button class="delete-course-btn">Xóa</button>

                            </a>
                        </div>


                    </div>

                    @endforeach
                </div>

            </div>


        </main>
    </div>
</div>

@if(session('message-logout'))

<x-window-adv>

    <x-slot name="text">{{ session('message-logout') }}</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="cancelButton">false</x-slot>
    <x-slot name="path">/logout</x-slot>

</x-window-adv>
@endif

@if(session('message-create-course'))

<x-alert>

    <x-slot name="text">{{ session('message-create-course') }}</x-slot>
    <x-slot name="color">green</x-slot>

</x-alert>

{{ session()->forget('message-create-course') }}

@endif

@if(session('message-delete-course'))

<x-window-adv>
    <x-slot name="text">{{ session('message-delete-course') }}</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="cancelButton">false</x-slot>
    <x-slot name="path">{{ route('delete-course', session('course-id')) }}</x-slot>
</x-window-adv>
@endif


@endsection


@section('js')


@endsection