@extends('layouts.basic')

@section('title', 'Dashboard')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">


@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-0 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/teacher">Infiverse</a> -->

    <img class="d-md-none" src="{{ asset('images/icon/remote-access.png') }}" alt="" width="6%" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

</header>

<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-3 p-0 bg-body-tertiary">

            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Infiverse</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">

                                <img src="{{ asset('images/icon/books.png') }}" alt="Bootstrap" width="30" height="30">
                                Quản lý khóa học
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">

                                <img src="{{ asset('images/icon/students.png') }}" alt="Bootstrap" width="30" height="30">
                                Quản lý học viên
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">

                                <img src="{{ asset('images/icon/books.png') }}" alt="Bootstrap" width="30" height="30">

                                Đánh giá
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">

                                <img src="{{ asset('images/icon/profile.png') }}" alt="Bootstrap" width="30" height="30">

                                Hồ sơ
                            </a>
                        </li>
                        <hr class="my-3">

                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">

                                <img src="{{ asset('images/icon/logout.png') }}" alt="Bootstrap" width="30" height="30">

                                Đăng xuất
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <main class="ms-sm-auto col-9 px-md-4">

            <div class="row">
                <div class="col-10 mt-5">

                    <div class="row">

                        <div class="col-4">
                            <p>Số lượng học viên</p>
                        </div>
                        <div class="col-4">
                            <p>Số lượng học viên</p>

                        </div>
                        <div class="col-4">
                            <p>Số lượng học viên</p>

                        </div>

                    </div>
                    <div class="row">

                    </div>

                </div>

                <div class="col-2">
                    <p>Hồ sơ</p>
                </div>
            </div>

        </main>
    </div>
</div>

@endsection


@section('js')

<!-- <script src="{{ asset('js/teacher/home.js') }}"></script> -->

@endsection