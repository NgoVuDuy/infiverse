@extends('layouts.basic')

@section('title', 'Dashboard')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/teacher/sidebar.css') }}" rel="stylesheet">



@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-3 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/teacher">Infiverse</a> -->
    <!-- <img src="{{ asset('images/icon/bell.png') }}" alt="Bootstrap" width="36" height="36"> -->
    <img class="notifi-icon" src="{{ asset('images/icon/bell.png') }}" alt="" width="30px" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

    <img class="d-md-none" src="{{ asset('images/icon/more.png') }}" alt="" width="30px" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

</header>

<div class="container-fluid">
    <div class="row">

        @include('includes.sidebar')

        <main class="ms-sm-auto col-lg-9 col-md-9 col-12">

            <div class="row">
                <div class="col-9 mt-5">

                    <div class="row">

                        <div class="col-4">

                            <button class="sum-btn sum-btn-item1">
                                <img src="{{ asset('images/icon/students.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Học viên</span>
                                <p>Tổng cộng: 203</p>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="sum-btn sum-btn-item2">
                                <img src="{{ asset('images/icon/books.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Khóa học</span>
                                <p>Tổng cộng: 12</p>
                            </button>

                        </div>
                        <div class="col-4">
                            <button class="sum-btn sum-btn-item3">
                                <img src="{{ asset('images/icon/comment.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Bình luận</span>
                                <p>Tổng cộng: 512</p>
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