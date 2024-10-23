@extends('layouts.basic')

@section('title', 'Quản lý khóa học')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/teacher/sidebar.css') }}" rel="stylesheet">
<link href="{{ asset('css/user/course.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/user/user.css') }}">

<link href="{{ asset('css/teacher/course-mgmt.css') }}" rel="stylesheet">


@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-2 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/teacher">Infiverse</a> -->

    <img class="d-md-none" src="{{ asset('images/icon/more.png') }}" alt="" width="4%" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

</header>

<div class="container-fluid">
    <div class="row">

        <x-sidebar>

            <x-slot name="home"></x-slot>
            <x-slot name="course"><img class="right-arrow" src="{{ asset('images/icon/left.png') }}" alt="Bootstrap" width="36" height="36"></x-slot>
            <x-slot name="student"></x-slot>
            <x-slot name="evaluate"></x-slot>
            <x-slot name="profile"></x-slot>

        </x-sidebar>

        <main class="ms-sm-auto col-lg-9 col-md-9 col-12 mt-4">

            <div class="row">

                <div class="col-6">

                    <div class="row">
                        <div class="col-2">
                            <center>
                                <a class="back-link" href="/courses-mgmt">

                                    <img class="create-new-course-btn" src="{{ asset('images/icon/back.png') }}" width="50%" alt="">
                                    <p class="nav-opt-text">Trở lại</p>
                                </a>
                            </center>
                        </div>

                        <div class="col-2">
                            <center>
                                <img class="create-new-course-btn" src="{{ asset('images/icon/plus.png') }}" width="50%" alt="">
                                <p class="nav-opt-text">Tạo mới</p>
                            </center>
                        </div>

                        <div class="col-2">
                            <center>
                                <a class="back-link" href="/courses-mgmt">

                                    <img class="create-new-course-btn" src="{{ asset('images/icon/padlock.png') }}" width="50%" alt="">
                                    <p class="nav-opt-text">Khóa</p>
                                </a>
                            </center>
                        </div>

                        <div class="col-2">
                            <center>
                                <a class="back-link" href="/courses-mgmt">

                                    <img class="create-new-course-btn" src="{{ asset('images/icon/trash-bin.png') }}" width="50%" alt="">
                                    <p class="nav-opt-text">Xóa</p>
                                </a>
                            </center>
                        </div>

                    </div>

                    <hr>
                </div>


            </div>

            <div class="create-new-course-form">

                <div class="row g-2 course-row ">

                    @foreach($courses as $course)

                    <div class="col-lg-3 col-md-4 col-6 course-cover">

                        <div class="course">

                            <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">

                            <p class="course-name">{{ $course->course_name }}</p>

                            <a class="course-link" href="{{ route('teacher-course-details', $course->id) }}">

                                <button class="join-in-btn">Chi tiết</button>
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

@endsection


@section('js')

<script src="{{ asset('js/ajax/add-course-form.js') }}"></script>



@endsection