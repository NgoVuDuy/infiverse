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
                            <th style="width: 30%;">Thời gian tham gia</th>
                            <th style="width: 15%;">Chi tiết</th>
                        </tr>

                        @foreach($students as $student)

                        <tr>
                            <td>
                                <img src="{{ asset( $student->user_img ) }}" alt="Bootstrap" width="30" height="30">

                                {{ $student->fullname }}

                            </td>
                            <td>
                                {{ $student->pivot->created_at }}

                            </td>
                            <td>
                                <button class="new-student-details" data-bs-toggle="modal" data-bs-target="#student-{{ $student->id }}">Chi tiết</button>

                            </td>
                        </tr>

                        <div class="modal fade" id="student-{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                    <button type="button" class="add-lession-btn btn-primary" data-bs-toggle="modal" data-bs-target="#createLessionModal">
                        <img src="{{ asset('images/icon/add-button.png') }}" alt="Thêm bài học" width="36px" height="36px">
                    </button>




                </div>

                <div class="lession-list col-12 mt-4">

                    @if($lessions->isEmpty())
                    <p>Chưa có bài học nào dành cho khóa học này</p>
                    @else


                    @foreach($lessions as $lession)

                    <div class="lession-item">

                        <h6 class="fw-bold">{{ $lession->title }}</h6>

                        <a href="{{  asset( $lession->file) }}" target="_blank">
                            <img src="{{ asset('images/files/pdf.png') }}" alt="PDF" width="2.5%">
                        </a>

                        <p class="file_desc">{{ $lession->desc_file }}</p>

                        <hr>

                        <!-- Nút cài đặt -->
                        <div class="setting-response" data-bs-toggle="modal" data-bs-target="#optionLessionModal">
                            <img src="{{ asset('images/icon/setting.png') }}" alt="Cài đặt" width="24px">

                        </div>
                    </div>


                    @endforeach
                    @endif



                </div>
            </div>

            <hr>


            <div class="row lession-evaluate">


                <h4 class="content-title" id="review-title"><span>Bình luận</span><i class="fa fa-sort-down down-arrow"></i></h4>

                <hr style="margin-top:16px;">

                <div class="lession-evaluate-show mt-2" style="display: {{ session('display', 'none') }} !important;">

                    @if($reviews->isEmpty())

                    <p>Chưa có bình luận nào cho khóa học này</p>
                    @else

                    @foreach($reviews as $review)

                        <div class="evaluate-user-item">

                            <div class="user-name-img-cover">

                                <img class="rounded-circle" src="{{ asset( $review->user->user_img ) }}" alt="" width="40px" height="40px">
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

                                </div>

                                @else


                                <form action="{{ route('response',['course_id' => $course->id, 'review_id' => $review->id]) }}  " method="post" class="mt-3">

                                    @csrf
                                    <input name="response" class="rep-comment-input" type="text" placeholder="Nhập nội dung">
                                    <button class="rep-comment-btn" type="submit">Gửi</button>
                                </form>

                                @endif
                            </div>

                            <!-- Nút cài đặt -->
                            <div class="setting-response" data-bs-toggle="modal" data-bs-target="#settingModal{{$review->id}}">
                                <img src="{{ asset('images/icon/setting.png') }}" alt="Cài đặt" width="24px">

                            </div>


                        </div>
                        <hr>

                        <!-- Modal edit response-->
                        <x-modal>

                            <x-slot name="idModal">review{{ $review->id }}</x-slot>
                            <x-slot name="titleModal">Chỉnh sửa</x-slot>
                            <x-slot name="actionModal">{{ route('update-response',['course_id' => $course->id, 'review_id' => $review->id]) }}</x-slot>

                            <x-slot name="bodyModal">

                                <div class="row mb-3">

                                    <div class="col-3"><label for="">Câu trả lời</label></div>
                                    <div class="col-9"><input type="text" name="response" id="" value="" placeholder="Nhập câu trả lời mới"></div>
                                    <!-- <div class="col-9"><input type="text" value="{{ $review->id }}" class="d-none" name="review-id"></div> -->

                                </div>
                            </x-slot>
                            <x-slot name="footerModal">

                                <p class="back-btn-modal" data-bs-toggle="modal" data-bs-target="#settingModal{{$review->id}}">Trở lại</p>
                                <button type="submit" class="finish-btn">Gửi</button>

                            </x-slot>

                        </x-modal>

                        <!-- Modal option response-->
                        <x-modal>
                            <x-slot name="idModal">settingModal{{$review->id}}</x-slot>
                            <x-slot name="titleModal">Tùy chọn</x-slot>
                            <x-slot name="actionModal"></x-slot>
                            <x-slot name="bodyModal">

                                <div class="row mb-3">

                                    <center>
                                        <div style="width:50%">
                                            <p style="color: rgb(30, 30, 255);" data-bs-toggle="modal" data-bs-target="#review{{ $review->id }}">Chỉnh sửa câu trả lời</p>
                                            
                                            <a style="text-decoration: none;" href="{{ route('delete-response', ['course_id' => $course->id, 'review_id' => $review->id])}}"><p style="color:red">Xóa câu trả lời</p></a>
                                            

                                        </div>
                                    </center>
                                </div>
                            </x-slot>
                            <x-slot name="footerModal">

                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>


                            </x-slot>

                        </x-modal>
                    @endforeach


                    @endif

                </div>
            </div>


        </main>
    </div>

    <!-- Định nghĩa các modal -->
    <!-- Modal -->
    <!-- Modal create lession response-->
    <x-modal>
        <x-slot name="idModal">createLessionModal</x-slot>
        <x-slot name="titleModal">Thêm bài học</x-slot>
        <x-slot name="actionModal">{{ route('create-new-lession', $course->id) }} </x-slot>

        <x-slot name="bodyModal">

            <div class="row mb-3">
                <div class="col-3"><label for="">Tiêu đề <span style="color: red; font-size: 20px;">*</span></label></div>
                <div class="col-9"><input type="text" name="title-lession" id="" value=""></div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <lable>Mô tả bài học <span style="color: red; font-size: 20px;">*</span></lable>
                </div>
                <div class="col-9"><textarea type="text" name="desc-lession" id="" value=""></textarea></div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="file">Chọn file:</label><span style="color: red; font-size: 20px;">*</span>
                </div>

                <div class="col-9">
                    <input type="file" name="file-lession" id="file" accept=".pdf" required>

                </div>
            </div>
        </x-slot>
        <x-slot name="footerModal">

            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
            <button type="submit" class="finish-btn">Hoàn thành</button>

        </x-slot>


    </x-modal>


    <!-- Modal option lessions-->
    <x-modal>
        <x-slot name="idModal">optionLessionModal</x-slot>
        <x-slot name="titleModal">Tùy chọn</x-slot>
        <x-slot name="actionModal"></x-slot>
        <x-slot name="bodyModal">

            <div class="row mb-3">

                <center>
                    <div style="width:50%">
                        <p style="color: rgb(30, 30, 255);" data-bs-toggle="modal" data-bs-target="#editLessionModal">Chỉnh sửa bài học</p>
                        <p style="color:red">Xóa bài học</p>

                    </div>
                </center>
            </div>
        </x-slot>
        <x-slot name="footerModal">

            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>


        </x-slot>

    </x-modal>

    <!-- Modal edit lessions-->
    <x-modal>
        <x-slot name="idModal">editLessionModal</x-slot>
        <x-slot name="titleModal">Chỉnh sửa</x-slot>
        <x-slot name="actionModal"></x-slot>

        <x-slot name="bodyModal">

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
        </x-slot>
        <x-slot name="footerModal">

            <p class="back-btn-modal" data-bs-toggle="modal" data-bs-target="#optionLessionModal">Trở lại</p>
            <button type="submit" class="finish-btn">Hoàn thành</button>

        </x-slot>

    </x-modal>

</div>

@if(session('create-lession-message'))

<x-alert>

    <x-slot name="text">{{ session('create-lession-message') }}</x-slot>
    <x-slot name="color">green</x-slot>

</x-alert>
@endif

@if(session('message-delete-response'))

<x-alert>

    <x-slot name="text">{{ session('message-delete-response') }}</x-slot>
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