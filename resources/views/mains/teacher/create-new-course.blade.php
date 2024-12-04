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

        <main class="ms-sm-auto col-lg-12 col-md-9 col-12 mt-4">

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

                <div class="col-6">

                    <div class="row mt-2 mb-2">

                        <div class="col-2">
                            <center>

                                <a href="/create-new-course" style="text-decoration: none;">
                                    <img class="create-new-course-btn" src="{{ asset('images/icon/plus.png') }}" width="50%" alt="">
                                    <p class="nav-opt-text">Tạo mới</p>

                                </a>
                            </center>
                        </div>


                    </div>

                </div>


            </div>

            <div class="create-new-course-form">

                <hr>


                <form action="/create-new-course" method="post" class="edit-form" enctype="multipart/form-data">

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
                        <div class="col-2"><label for="">Tên khóa học <span style="color: red; font-size: 20px;">*</span></label></div>
                        <div class="col-6">
                            <input type="text" name="coursename" id="" value="">

                            @error('coursename')
                            <div class="mt-2 alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <lable>Mô tả sơ lược khóa học <span style="color: red; font-size: 20px;">*</span></lable>
                        </div>
                        <div class="col-6">
                            <textarea type="text" name="description" id="" value=""></textarea>

                            @error('description')
                            <div class="mt-2 alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2">
                            <lable>Mô tả chi tiết khóa học <span style="color: red; font-size: 20px;">*</span></lable>
                        </div>
                        <div class="col-6">
                            <textarea type="text" name="description_details" id="" value=""></textarea>

                            @error('description_details')
                            <div class="mt-2 alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-2">
                            <lable>Mật khẩu ghi danh</lable>
                        </div>
                        <div class="col-6"><input type="password" name="course_code" id="" value=""></div>
                    </div>

                    <button type="submit" class="finish-btn">Hoàn thành</button>
                </form>

                <script src="{{ asset('js/load-user-img.js') }}"></script>


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