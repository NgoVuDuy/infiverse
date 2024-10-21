@extends('layouts.basic')

@section('title', 'Quản lý khóa học')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/teacher/sidebar.css') }}" rel="stylesheet">
<link href="{{ asset('css/user/course.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/user/user.css') }}">





@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-2 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/teacher">Infiverse</a> -->

    <img class="d-md-none" src="{{ asset('images/icon/more.png') }}" alt="" width="4%" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

</header>

<div class="container-fluid">
    <div class="row">

        @include('includes.sidebar')

        <main class="ms-sm-auto col-lg-9 col-md-9 col-12 mt-4">

            <!-- <div class="row">

                <div class="col-6">

                    <div class="row">

                        <div class="col-2">
                            <center>
                                <img src="{{ asset('images/icon/plus.png') }}" width="50%" alt="">
                                <p>Tạo mới</p>
                            </center>
                        </div>
                    </div>

                    <hr>
                </div>


            </div>


            <div class="row g-2 course-row ">

                @foreach($courses as $course)

                <div class="col-lg-3 col-md-4 col-6 course-cover">

                    <div class="course">

                        <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">

                        <p class="course-name">{{ $course->course_name }}</p>

                        <a class="course-link" href="{{ route('course-details', $course->id) }}">

                            <button class="join-in-btn">Chi tiết</button>
                        </a>
                    </div>


                </div>

                @endforeach
            </div> -->
            <form action="/update-user" method="post" class="edit-form" enctype="multipart/form-data">

                @csrf
                <div class="row mb-3">


                    <div class="user-img-change-cover">

     
                        <img style="box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);" id="user-img" class="" src="{{ asset('images/icon/image.png')  }}" alt="" width="240px" height="150px">

                        <label class="mt-4 user-img-change-btn" for="user-img-input">Tải lên ảnh khóa học</label>

                        <input type="file" id="user-img-input" accept="image/*" class="d-none" name="user-img">
                    </div>

                </div>

                <hr>

                <div class="row mb-3">
                    <div class="col-2"><label for="">Tên khóa học</label></div>
                    <div class="col-10"><input type="text" name="coursename" id="" value=""></div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <lable>Mô tả sơ lược khóa học</lable>
                    </div>
                    <div class="col-10"><textarea type="text" name="description" id="" value=""></textarea></div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <lable>Mô tả chi tiết khóa học</lable>
                    </div>
                    <div class="col-10"><textarea type="text" name="description_details" id="" value=""></textarea></div>
                </div>

                <div class="row mb-3">
                    <div class="col-2">
                        <lable>Đặt mật khẩu</lable>
                    </div>
                    <div class="col-10"><input type="password" name="course_password" id="" value=""></div>
                </div>

                <button class="finish-btn">Hoàn thành</button>
            </form>


        </main>
    </div>
</div>

@if(session('message'))

<x-window-adv>

    <x-slot name="text">Bạn có chắc muốn đăng xuất không ?</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="cancelButton">false</x-slot>
    <x-slot name="path">/logout</x-slot>

</x-window-adv>
@endif

@endsection


@section('js')

<script src="{{ asset('js/load-user-img.js') }}"></script>


@endsection