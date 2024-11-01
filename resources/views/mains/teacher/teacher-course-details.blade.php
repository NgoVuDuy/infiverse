@extends('layouts.basic')

@section('title', 'Chi tiết khóa học')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/user/lession.css') }}">
<link rel="stylesheet" href="{{ asset('css/teacher/teacher-course-details.css') }}">
<link href="{{ asset('css/teacher/sidebar.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/user/user.css') }}">



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

                        @foreach($students as $student)

                        <tr>
                            <td>
                                <img src="{{ asset('images/users/default/groom.png') }}" alt="Bootstrap" width="30" height="30">

                                {{ $student->fullname }}

                            </td>
                            <td>
                                {{ $student->pivot->created_at }}

                            </td>
                            <td>
                                <button class="new-student-details">Chi tiết</button>

                            </td>
                        </tr>
                        @endforeach

                    </table>

                </div>
            </div>

            <hr>


            <div class="row">




                <div class="col-10">
                    <h4 class="content-title"><span>Danh sách bài học</span><i class="fa fa-sort-down down-arrow"></i></h4>
                </div>

                <div class="col-2 d-flex align-items-center justify-content-end">

                    <span style="margin-right: 8px;">Thêm </span>

                    <button type="button" class="add-lession-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="{{ asset('images/icon/add-button.png') }}" alt="Thêm bài học" width="36px" height="36px">
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog-centered modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm bài học</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('create-new-lession', $course->id) }}" method="post" class="edit-form" enctype="multipart/form-data">

                                    <div class="modal-body">

                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-3"><label for="">Tiêu đề</label></div>
                                            <div class="col-9"><input type="text" name="title-lession" id="" value=""></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-3">
                                                <lable>Mô tả bài học</lable>
                                            </div>
                                            <div class="col-9"><textarea type="text" name="desc-lession" id="" value=""></textarea></div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-3">
                                                <label for="file">Chọn file:</label>
                                            </div>

                                            <div class="col-9">
                                                <input type="file" name="file-lession" id="file" accept=".pdf" required>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                                        <button type="submit" class="finish-btn">Hoàn thành</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="lession-list col-12 mt-4">

                    @foreach($lessions as $lession)

                    <h6 class="fw-bold">{{ $lession->title }}</h6>

                    <a href="{{  asset( $lession->file) }}" target="_blank">
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
                    @if($reviews->isEmpty())

                    <p>Chưa có bình luận nào cho khóa học này</p>
                    @else

                    @foreach($reviews as $review)

                    <div class="evaluate-user-item">

                        <div class="user-name-img-cover">

                            <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                            <span>{{ $review->user->username }}</span>

                        </div>

                        <div class="user-cmt mt-2">
                            <div class="star-cover-user">



                                @php
                                $star_rating = $review->star_rating
                                @endphp

                                @switch($star_rating)

                                @case(1)
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                @break
                                @case(2)
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                @break
                                @case(3)
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                @break
                                @case(4)
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                @break
                                @case(5)
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                @break

                                @default
                                <p>Trống</p>
                                @break

                                @endswitch

                            </div>
                            <p>{{ $review->review }}</p>

                            @if($review->response != null)
                            <div>
                                <span style="font-size: 14px; font-weight:bold;">Đã trả lời:</span> {{ $review->response }}

                                <div class="edit-response">
                                    <img src="{{ asset('images/icon/marker.png') }}" alt="Chỉnh sửa" width="20px">

                                </div>

                                <div class="delete-response">
                                    <img src="{{ asset('images/icon/cancel.png') }}" alt="Xóa" width="20px">

                                </div>
                            </div>

                            @else


                            <form action="{{ route('response', $review->id) }}  " method="post" class="mt-3">

                                @csrf
                                <input name="response" class="rep-comment-input" type="text" placeholder="Nhập nội dung">
                                <button class="rep-comment-btn" type="submit">Gửi</button>
                            </form>

                            @endif
                        </div>

                    </div>
                    <hr>
                    @endforeach
                    @endif

                </div>
            </div>

            <hr>

        </main>
    </div>




</div>

@if(session('create-lession-message'))

<x-alert>

    <x-slot name="text">{{ session('create-lession-message') }}</x-slot>
    <x-slot name="color">green</x-slot>

</x-alert>
@endif




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