@extends('layouts.main')

@section('title', 'Tạo mới khóa học')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('css/teacher/sidebar.css') }}" rel="stylesheet"> -->
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

                    <span class="navbar-child-icon">
                        >
                    </span>

                    <a href="#">
                        Thêm khóa học
                    </a>

                </div>

                <div class="col-lg-6 col-md-6 col-8">

                    <div class="row mt-2 mb-2">

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


                <form action="/create-new-course" method="post" class="create-new-course-form" enctype="multipart/form-data">

                    @csrf
                    <div class="row mb-4">

                        <div class="user-img-change-cover">

                            <img style="box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);" id="user-img" class="" src="{{ asset('images/icon/image.png')  }}" alt="" width="240px" height="150px">

                            <label class="mt-4 user-img-change-btn" for="user-img-input">Tải lên ảnh khóa học</label>

                            <input type="file" id="user-img-input" accept="image/*" class="d-none" name="course-img">

                            @error('course-img')
                            <div class="mt-2 alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>


                    <div class="row mb-3">
                        <div class="col-lg-2 col-md-3 col-4"><label for="">Tên khóa học <span style="color: red; font-size: 20px;">*</span></label></div>
                        <div class="col-lg-6 col-md-6 col-8">
                            <input type="text" name="coursename" id="" value="">

                            @error('coursename')
                            <div class="mt-2 alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-2 col-md-3 col-4">
                            <lable>Mô tả sơ lược khóa học <span style="color: red; font-size: 20px;">*</span></lable>
                        </div>
                        <div class="col-lg-6 col-md-6 col-8">
                            <textarea type="text" name="description" id="" value=""></textarea>

                            @error('description')
                            <div class="mt-2 alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-2 col-md-3 col-4">
                            <lable>Mô tả chi tiết khóa học <span style="color: red; font-size: 20px;">*</span></lable>
                        </div>
                        <div class="col-lg-6 col-md-6 col-8">
                            <textarea type="text" name="description_details" id="" value=""></textarea>

                            @error('description_details')
                            <div class="mt-2 alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-2 col-md-3 col-4">
                            <lable>Mật khẩu ghi danh</lable>
                        </div>
                        <div class="col-lg-6 col-md-6 col-8"><input type="password" name="course_code" id="" value=""></div>
                    </div>

                    <button type="submit" class="finish-btn">Hoàn thành</button>
                </form>

                <script src="{{ asset('js/load-user-img.js') }}"></script>


            </div>


        </main>
    </div>
</div>


@if(session('message-create-course'))

<x-alert>

    <x-slot name="text">{{ session('message-create-course') }}</x-slot>
    <x-slot name="color">green</x-slot>

</x-alert>

{{ session()->forget('message-create-course') }}

@endif


@endsection


@section('js')


@endsection