@extends('layouts.main')

@section('title', 'Trang chủ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/course.css') }}">

<link rel="stylesheet" href="{{ asset('css/responsive/home.css') }}">


@endsection

@section('content')

<div class="container-fluid">

    <div class="row home-header">


        <h5 class="mb-5">Xin chào <span class="hightlight-text">{{ Auth::user()->fullname }}</span> .Chào mừng bạn đến với <span class="hightlight-text">Infiverse</span> . Hãy cùng khám phá nhé !</h5>

        <div class="col-lg-5 col-md-8 col-12 home-left">

            <div class="home-desc">
                <span><img src="{{ asset('images/icon/remote-access.png') }}" alt="" width="6%">Cộng đồng học tập phong phú</span>
            </div>

            <div class="home-desc">
                <span><img src="{{ asset('images/icon/bell.png') }}" alt="" width="6%">Thông báo nhắc nhở người dùng học tập</span>
            </div>

            <div class="home-desc">
                <span><img src="{{ asset('images/icon/checklist.png') }}" alt="" width="6%">Theo dõi tiến độ học tập của người dùng</span>
            </div>

            <div class="home-desc">
                <span><img src="{{ asset('images/icon/secured.png') }}" alt="" width="6%">Bảo vệ dữ liệu cá nhân</span>
            </div>

            <div class="home-desc">

                <span><img src="{{ asset('images/icon/quality.png') }}" alt="" width="6%">Đánh giá quá trình học tập của người dùng</span>
            </div>

        </div>
        <div class="col-lg-5 col-md-8 col-12 home-right">

        </div>
    </div>

</div>

<div class="container">

    <!-- iTEM1 -->

    <div class="row  mt-5 mb-2 justify-content-center">
        <div class="col-lg-6 col-md-8 col-11 home-title home-title-new d-flex justify-content-center align-items-center">
            <div class="">

                <img src="{{ asset('images/icon/new_1.png') }}" alt="new_icon" width="40px">
            </div>

            <h6>Khóa học mới nhất</h6>

            <div class="">

                <img src="{{ asset('images/icon/new_1.png') }}" alt="new_icon" width="40px">
            </div>


        </div>


    </div>

    <p class="for-more-courses"><a href="/courses">Xem thêm</a></p>

    <div class="row course-row justify-content-center">

        @foreach($newCourses as $course)

        <div class="col-lg-3 col-md-6 col-sm-6 col-8 course-cover">

            <div class="course">

                <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">


                <p class="course-name">{{ $course->course_name }}</p>

                @if($course->has_joined)

                <p class="has-joined-text">Đã tham gia</p>

                @endif

                <a class="course-link" href="{{ route('course-details', $course->id) }}">

                    <button class="join-in-btn">Chi tiết</button>
                </a>
            </div>

        </div>

        @endforeach
    </div>

    <p style="padding: 12px;" class="for-more-courses-bot"><a href="/courses">Xem thêm</a></p>

    <hr>

    <!-- iTEM2 -->


    <div class="row  mt-5 mb-2 justify-content-center">
        <div class="col-lg-6 col-md-8 col-11 home-title home-title-outstanding d-flex justify-content-center align-items-center">
            <div class="">

                <img src="{{ asset('images/icon/star_1.png') }}" alt="star_icon" width="40px">
            </div>
            <h6>Khóa học nổi bật</h6>

            <div class="">

                <img src="{{ asset('images/icon/star_1.png') }}" alt="star_icon" width="40px">
            </div>

        </div>
    </div>

    <p class="for-more-courses"><a href="/courses">Xem thêm</a></p>


    <div class="row course-row justify-content-center">

        @foreach($osdCourses as $course)

        <div class="col-lg-3 col-md-6 col-sm-6 col-8 course-cover">

            <div class="course">

                <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">


                <p class="course-name">{{ $course->course_name }}</p>
                @if($course->has_joined)

                <p class="has-joined-text">Đã tham gia</p>

                @endif
                <a class="course-link" href="{{ route('course-details', $course->id) }}">

                    <button class="join-in-btn">Chi tiết</button>
                </a>
            </div>

        </div>

        @endforeach
    </div>

    <p style="padding: 12px;" class="for-more-courses-bot"><a href="/courses">Xem thêm</a></p>

    <hr>


    <!-- iTEM3 -->


    <div class="row  mt-5 mb-2 justify-content-center">
        <div class="col-lg-6 col-md-8 col-11 home-title home-title-suggest d-flex justify-content-center align-items-center">
            <div class="">

                <img src="{{ asset('images/icon/notification.png') }}" alt="notification_icon" width="40px">
            </div>
            <h6>Khóa học gợi ý</h6>

            <div class="">

                <img src="{{ asset('images/icon/notification.png') }}" alt="notification_icon" width="40px">
            </div>

        </div>
    </div>

    <p class="for-more-courses"><a href="/courses">Xem thêm</a></p>


    <div class="row course-row justify-content-center">

        @foreach($suggestCourses as $course)

        <div class="col-lg-3 col-md-6 col-sm-6 col-8 course-cover">

            <div class="course">

                <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">


                <p class="course-name">{{ $course->course_name }}</p>

                @if($course->has_joined)

                <p class="has-joined-text">Đã tham gia</p>

                @endif

                <a class="course-link" href="{{ route('course-details', $course->id) }}">

                    <button class="join-in-btn">Chi tiết</button>
                </a>
            </div>

        </div>

        @endforeach
    </div>

    <p style="padding: 12px;" class="for-more-courses-bot"><a href="/courses">Xem thêm</a></p>


</div>



@endsection