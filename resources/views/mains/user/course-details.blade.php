@extends('layouts.main')

@section('title', 'Chi tiết khóa học')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/lession.css') }}">

@endsection

@section('content')

<div class="container">

    <div class="row lession-header">
        <div class="col-8 lession-left">

            <h1 class="course-name">{{ $course->course_name }}</h1>
            <p class="course-teacher">Ngo Vu Duy</p>
            <p class="course-description">{{ $course->description }}</p>

            @if($isEnrolled)

            <a class="course-link" href="{{ route('lessions', $course->id) }}">

                <button class="join-in-btn">Vào học ngay</button>
            </a><br>

            @else

            <a class="course-link" href="{{ route('join-in-course', $course->id) }}">

                <button class="join-in-btn">Tham gia miễn phí</button>
            </a><br>

            @endif

            <div class="student-synthetic student-quantity">

                <span><i class="fa fa-user"></i>{{ $join_quatity }} học viên</span>
            </div>

            <div class="student-synthetic student-evaluate">

                <span><i class="fa fa-user"></i>4.9 (203 bài đánh giá)</span>
            </div>

        </div>

        <div class="col-4 lession-right">

            <img src="{{ asset($course->img) }}" alt="" width="100%">

        </div>
    </div>

    <div class="row lession-content mt-4">

        <h4>Giới thiệu khóa học</h4>

        <div class="col-12 mt-4">

            <div class="content-text">{{ $course->description_details }}</div>


        </div>
    </div>


    <div class="row lession-evaluate mt-4">

        <h4>Đánh giá</h4>

        <div class="col-12 mt-4 lession-evaluate-sum">

            <div class="sum-cover p-3 mb-3">

                <span>
                    <h1>4.5<i class="star-sum fa fa-star yellow" style="font-size:36px"></i></h1>
                </span>

                <span>( 322 bài đánh giá )</span>
            </div>


        </div>

        <form action="" method="post" class="evaluate-form">

            <textarea class="col-12 mt-4 lession-evaluate-comment p-3" placeholder="Viết đánh giá của bạn"></textarea>

            <div class="star-cover mt-4">
                <i class="star fa fa-star" style="font-size:24px"></i>
                <i class="star fa fa-star" style="font-size:24px"></i>
                <i class="star fa fa-star" style="font-size:24px"></i>
                <i class="star fa fa-star" style="font-size:24px"></i>
                <i class="star fa fa-star" style="font-size:24px"></i>
            </div>

            <br>
            <button class="send-evaluate-btn mt-4" type="submit" disabled>Gửi đánh giá</button>
        </form>


        <div class="lession-evaluate-show mt-5">

            <div class="evaluate-user-item">

                <div class="user-name-img-cover">

                    <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                    <span>NgoVuDuy</span>


                </div>

                <div class="user-cmt mt-2">
                    Khóa học này rất hay
                </div>
            </div>
            <hr>

            <div class="evaluate-user-item">

                <div class="user-name-img-cover">

                    <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                    <span>NgoVuDuy</span>


                </div>

                <div class="user-cmt mt-2">
                    Khóa học này rất hay
                </div>
            </div>
            <hr>

            <div class="evaluate-user-item">

                <div class="user-name-img-cover">

                    <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                    <span class="">NgoVuDuy</span>


                </div>

                <div class="user-cmt mt-2">
                    Khóa học này rất hay
                </div>
            </div>
            <hr>

        </div>
    </div>
</div>

@endsection

@section('js')

<script src="{{ asset('js/evaluate.js') }}"></script>

@if(! $isEnrolled)

<script>
    $(document).ready(function() {

        $('.evaluate-form').addClass('d-none')
    })
</script>

@endif

@endsection