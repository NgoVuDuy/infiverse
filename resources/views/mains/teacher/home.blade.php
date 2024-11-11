@extends('layouts.basic')

@section('title', 'Dashboard')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/teacher/sidebar.css') }}" rel="stylesheet">
<link href="{{ asset('css/user/user.css') }}" rel="stylesheet">



@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-3 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/teacher">Infiverse</a> -->
    <!-- <img src="{{ asset('images/icon/bell.png') }}" alt="Bootstrap" width="36" height="36"> -->
    <!-- <img class="notifi-icon" src="{{ asset('images/icon/bell.png') }}" alt="" width="30px" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"> -->

    <img class="d-md-none" src="{{ asset('images/icon/more.png') }}" alt="" width="30px" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

</header>

<div class="container-fluid">
    <div class="row">


        <x-sidebar>

            <x-slot name="home"><img class="right-arrow" src="{{ asset('images/icon/left.png') }}" alt="Bootstrap" width="36" height="36"></x-slot>
            <x-slot name="course"></x-slot>
            <x-slot name="student"></x-slot>
            <x-slot name="evaluate"></x-slot>
            <x-slot name="profile"></x-slot>

        </x-sidebar>

        <main class="ms-sm-auto col-lg-9 col-md-9 col-12">

            <div class="row">
                <div class="col-9 mt-5">

                    <div class="row">

                        <div class="col-4">

                            <button class="sum-btn sum-btn-item1">
                                <img src="{{ asset('images/icon/students.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Học viên</span>
                                <p>Tổng cộng: {{ $studentCount }}</p>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="sum-btn sum-btn-item2">
                                <img src="{{ asset('images/icon/books.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Khóa học</span>
                                <p>Tổng cộng: {{ $courseCount }}</p>
                            </button>

                        </div>
                        <div class="col-4">
                            <button class="sum-btn sum-btn-item3">
                                <img src="{{ asset('images/icon/comment.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Bình luận</span>
                                <p>Tổng cộng: {{ $reviewCount }}</p>
                            </button>

                        </div>

                    </div>
                    <div class="row mt-5">

                        <div class="new-student-table">

                            <div class="table-title mb-3">

                                <span>Học viên mới </span>
                                <img src="{{ asset('images/icon/new.png') }}" alt="Bootstrap" width="32" height="32">
                            </div>


                            <table>
                                <tr>
                                    <th style="width: 35%;">Tên học viên</th>
                                    <th style="width: 30%;">Khóa học đã tham gia</th>
                                    <th style="width: 20%;">Thời gian</th>
                                    <th style="width: 15%;">Chi tiết</th>
                                </tr>

                                @foreach ($courses as $course)
                                @foreach ($course->users as $student)
                                <tr>
                                    <td>
                                        <img src="{{ asset($student->user_img) }}" alt="Bootstrap" width="30" height="30">

                                        {{ $student->fullname }}

                                    </td>
                                    <td>
                                        {{ $course->course_name }}

                                    </td>
                                    <td>
                                        {{ $student->pivot->created_at }}

                                    </td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#{{ $student->id }}"><button class="new-student-details">Chi tiết</button></a>

                                    </td>
                                </tr>

                                <!-- Button trigger modal
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Launch demo modal
                                </button> -->

                                <!-- Modal -->
                                <div class="modal fade" id="{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin học viên</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="user-cover p-3">
    
                                                            <div class="col-12 mb-3 d-flex flex-column align-items-center">
    
                                                                <h5>{{ $student->fullname }}</h5>
    
                                                                <img class="rounded-circle" src="{{ asset($student->user_img) }}" alt="" width="100px" height="100px">
    
    
                                                            </div>
    
                                                            <hr>
    
                                                            <div class="col-12">
                                                                <div class="user-information">
    
    
                                                                    <div class="user-profile">
    
                                                                        <p><span>Số điện thoại</span>{{ $student->phone_number }}</p>
                                                                        <p><span>Địa chỉ Email</span>{{ $student->email }}</p>
                                                                        <p><span>Liên hệ</span><a href="{{ Auth::user()->contact }}">{{ Auth::user()->contact }}</a></p>
                                                                        <p><span>Mô tả bản thân</span>{{ $student->desc_user }}</p>
                                                                        <p><span>Thành tích</span>{{ $student->achievenment }}</p>
                                                                    </div>
    
                                                                </div>
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                                @endforeach

                            </table>


                        </div>

                    </div>

                </div>

                <div class="col-3 teacher-profile">
                    <img class="rounded-circle mt-3" src="{{ asset(Auth::user()->user_img) }}" alt="" width="100px" height="100px">
                    <p class="mt-2">{{ Auth::user()->fullname }}</p>

                    <div class="profile-under mt-5">
                        <p><span>Email: </span>{{ Auth::user()->email }}</p>
                        <p><span>Liên hệ: </span><a href="{{ Auth::user()->contact }}">{{ Auth::user()->contact }}</a></p>
                        <p><span>Thành tích: </span>{{ Auth::user()->achievenment }}</p>

                    </div>
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



@endsection


@section('js')


@endsection