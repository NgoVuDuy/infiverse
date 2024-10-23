@extends('layouts.basic')

@section('title', 'Chi tiết khóa học')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/user/lession.css') }}">
<link rel="stylesheet" href="{{ asset('css/teacher/teacher-course-details.css') }}">
<link href="{{ asset('css/teacher/sidebar.css') }}" rel="stylesheet">


@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-3 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <img class="notifi-icon" src="{{ asset('images/icon/bell.png') }}" alt="" width="30px" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

    <img class="d-md-none" src="{{ asset('images/icon/more.png') }}" alt="" width="30px" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

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

        <main class="ms-sm-auto col-lg-9 col-md-9 col-12">

            <div class="row lession-header">


                <div class="col-8 lession-left">

                    <h1 class="course-name">{{ $course->course_name }}</h1>
                    <p class="course-description">{{ $course->description }}</p>

                    <!-- ??? -->


                </div>

                <div class="col-4 lession-right">

                    <img src="{{ asset($course->img) }}" alt="" width="100%">

                </div>
            </div>

            <div class="row lession-content mt-4">

                <h4 class="content-title"><span>Giới thiệu khóa học</span><i class="fa fa-sort-down down-arrow"></i></h4>

                <div class="col-12 mt-4">

                    <div class="content-text">{{ $course->description_details }}</div>

                </div>
            </div>

            <hr>

            <div class="row">

                <h4 class="content-title"><span>Danh sách học viên</span><i class="fa fa-sort-down down-arrow"></i></h4>


                <div class="col-12 mt-4">

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

                                NhatTruong

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


                                MinhNguyen

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

            <hr>


            <div class="row">

                <h4 class="content-title"><span>Danh sách bài học</span><i class="fa fa-sort-down down-arrow"></i></h4>

                <div class="col-10"></div>
                <div class="col-2 d-flex align-items-center justify-content-end">
                    <span style="margin-right: 8px;">Thêm </span><img src="{{ asset('images/icon/add-button.png') }}" alt="Thêm bài học" width="36px" height="36px">

                </div>

                <div class="lession-list col-12 mt-4">

                    @foreach($lessions as $lession)

                    <h6 class="fw-bold">{{ $lession->title }}</h6>

                    <a href="{{ asset('files/lab1.pdf') }}" target="_blank">
                        <img src="{{ asset('images/files/pdf.png') }}" alt="PDF" width="2.5%">
                    </a>

                    <p class="file_desc">{{ $lession->desc_file }}</p>

                    <hr>

                    @endforeach
                </div>
            </div>

            <hr>


            <div class="row lession-evaluate">


                <h4 class="content-title"><span>Bình luận</span><i class="fa fa-sort-down down-arrow"></i></h4>



                <div class="lession-evaluate-show mt-2">

                    <div class="evaluate-user-item">

                        <div class="user-name-img-cover">

                            <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                            <span>NgoVuDuy</span>


                        </div>

                        <div class="user-cmt mt-2">
                            <div class="star-cover-user">
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                            </div>
                            Khóa học này rất hay
                        </div>

                        <form action="" method="post" class="mt-3">
                            <input class="rep-comment-input" type="text" placeholder="Nhập nội dung">
                            <button class="rep-comment-btn" type="submit">Gửi</button>
                        </form>
                    </div>
                    <hr>

                    <div class="evaluate-user-item">

                        <div class="user-name-img-cover">

                            <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                            <span>NhatTruong</span>


                        </div>

                        <div class="user-cmt mt-2">
                            <div class="star-cover-user">
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                            </div>
                            Tuyệt vời
                        </div>

                        <form action="" method="post" class="mt-3">
                            <input class="rep-comment-input" type="text" placeholder="Nhập nội dung">
                            <button class="rep-comment-btn" type="submit">Gửi</button>
                        </form>
                    </div>
                    <hr>

                    <div class="evaluate-user-item">

                        <div class="user-name-img-cover">

                            <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                            <span class="">MinhNguyen</span>


                        </div>

                        <div class="user-cmt mt-2">
                            <div class="star-cover-user">
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                            </div>
                            Tôi rất thích khóa học này
                        </div>

                        <form action="" method="post" class="mt-3">
                            <input class="rep-comment-input" type="text" placeholder="Nhập nội dung">
                            <button class="rep-comment-btn" type="submit">Gửi</button>
                        </form>
                    </div>
                    <hr>

                </div>
            </div>

            <hr>

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

<script src="{{ asset('js/evaluate.js') }}"></script>

<script>
    $(document).ready(function() {

        $('.down-arrow').eq(0).on('click', function() {

            $('.content-text').slideToggle('fast');
        })

        $('.down-arrow').eq(1).on('click', function() {

            $('table').slideToggle('fast');
        })

        $('.down-arrow').eq(2).on('click', function() {

            $('.lession-list').slideToggle('fast');
        })

        $('.down-arrow').eq(3).on('click', function() {

            $('.lession-evaluate-show').slideToggle('fast');
        })
    })
</script>


@endsection