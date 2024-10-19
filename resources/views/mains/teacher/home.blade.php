@extends('layouts.basic')

@section('title', 'Dashboard')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/teacher/navbar.css') }}" rel="stylesheet">



@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-2 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/teacher">Infiverse</a> -->

    <img class="d-md-none" src="{{ asset('images/icon/more.png') }}" alt="" width="4%" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

</header>

<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-3 p-0 bg-body-tertiary ">

            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Infiverse</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>

                <div class="nav-cover d-md-flex flex-column pt-lg-3 pb-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-option d-flex align-items-center gap-2" aria-current="page" href="#">

                                <img src="{{ asset('images/icon/books.png') }}" alt="Bootstrap" width="36" height="36">
                                Quản lý khóa học
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-option d-flex align-items-center gap-2" href="#">

                                <img src="{{ asset('images/icon/students.png') }}" alt="Bootstrap" width="36" height="36">
                                Quản lý học viên
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-option d-flex align-items-center gap-2" href="#">

                                <img src="{{ asset('images/icon/comment.png') }}" alt="Bootstrap" width="36" height="36">

                                Đánh giá
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-option d-flex align-items-center gap-2" href="#">

                                <img src="{{ asset('images/icon/profile.png') }}" alt="Bootstrap" width="36" height="36">

                                Hồ sơ
                            </a>
                        </li>
                        <hr class="my-3">

                        <li class="nav-item">
                            <a class="nav-option d-flex align-items-center gap-2" href="/logout-show">

                                <img src="{{ asset('images/icon/logout.png') }}" alt="Bootstrap" width="36" height="36">

                                Đăng xuất
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <main class="ms-sm-auto col-lg-9 col-md-9 col-12">

            <div class="row">
                <div class="col-9 mt-5">

                    <div class="row">

                        <div class="col-4">
                            <button class="sum-btn btn btn-warning student-btn">203 học viên</button>
                        </div>
                        <div class="col-4">
                            <button class="sum-btn btn btn-success">12 khóa học</button>

                        </div>
                        <div class="col-4">
                            <button class="sum-btn btn btn-danger">102 bình luận</button>

                        </div>

                    </div>
                    <div class="row mt-5">

                        <div class="new-student-table">

                            <table>
                                <tr>
                                    <th style="width: 55%;">Tên học viên</th>
                                    <th style="width: 30%;">Thời gian</th>
                                    <th style="width: 15%;">Chi tiết</th>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/users/default/groom.png') }}" alt="Bootstrap" width="30" height="30">

                                        NgoVuDuy

                                    </td>
                                    <td>
                                        T5-12-06-2024

                                    </td>
                                    <td>
                                        <button class="new-student-details">Chi tiết</button>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="{{ asset('images/users/default/groom.png') }}" alt="Bootstrap" width="30" height="30">

                                        NgoVuDuy

                                    </td>
                                    <td>
                                        T5-12-06-2024

                                    </td>
                                    <td>
                                        <button class="new-student-details">Chi tiết</button>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="{{ asset('images/users/default/groom.png') }}" alt="Bootstrap" width="30" height="30">


                                        NgoVuDuy

                                    </td>
                                    <td>
                                        T5-12-06-2024

                                    </td>
                                    <td>
                                        <button class="new-student-details">Chi tiết</button>

                                    </td>
                                </tr>

                            </table>
                        </div>


                    </div>

                </div>

                <div class="col-3 teacher-profile">
                    <img class="rounded-circle mt-3" src="{{ asset(Auth::user()->user_img) }}" alt="" width="100px" height="100px">
                    <p class="mt-2">Nguyễn Trọng Nghiệp</p>

                    <div class="profile-under mt-5">
                        <p><span>Chức danh:</span> Phó hiệu trưởng</p>
                        <p><span>Lĩnh vực:</span> Big data và trí tuệ nhân tạo</p>
                        <p><span>Thông tin liên hệ:</span> juenen</p>

                    </div>
                </div>
            </div>

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


@endsection