@extends('layouts.main')

@section('title', 'Trang chủ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/course.css') }}">

@endsection

@section('content')

<div class="container-fluid">

    <div class="row home-header">


        <h5 class="mb-5">Xin chào <span class="name-user">{{ Auth::user()->name }}</span> .Chào mừng bạn đến với Infiverse. Hãy cùng khám phá nhé !</h5>

        <div class="col-5 home-left">

            <div class="home-desc">
                <span><img src="{{ asset('images/home/remote-access.png') }}" alt="" width="6%">Cộng đồng học tập phong phú</span>
            </div>

            <div class="home-desc">
                <span><img src="{{ asset('images/home/bell.png') }}" alt="" width="6%">Thông báo nhắc nhở người dùng học tập</span>
            </div>

            <div class="home-desc">
                <span><img src="{{ asset('images/home/checklist.png') }}" alt="" width="6%">Theo dõi tiến độ học tập của người dùng</span>
            </div>

            <div class="home-desc">
                <span><img src="{{ asset('images/home/secured.png') }}" alt="" width="6%">Bảo vệ dữ liệu cá nhân</span>
            </div>

            <div class="home-desc">

                <span><img src="{{ asset('images/home/quality.png') }}" alt="" width="6%">Đánh giá quá trình học tập của người dùng</span>
            </div>

        </div>
        <div class="col-5 home-right">

        </div>
    </div>

</div>

<div class="container">

    <div class="row home-navbar">
        <div class="col-2">
            Khóa học nổi bật
        </div>
        <div class="col-2">
            Đang tham gia
        </div>
        <div class="col-2">
            Khóa học yêu thích
        </div>
    </div>

    <div class="row course-row">

        @foreach($courses as $course)

        <div class="col-lg-3 col-md-4 col-6 course-cover">

            <div class="course">

                <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">


                <p class="course-name">{{ $course->course_name }}</p>

                <!-- <a class="course-link" href="{{ route('lessions', $course->id) }}">
    
                    <button class="join-in-btn">Chi tiết</button>
                </a> -->
                <a class="course-link" href="{{ route('course-details', $course->id) }}">

                    <button class="join-in-btn">Chi tiết</button>
                </a>
            </div>

        </div>

        @endforeach
    </div>
</div>



@endsection