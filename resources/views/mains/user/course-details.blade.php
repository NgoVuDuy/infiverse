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

            {{ $course->description_details }}
        </div>
    </div>


    <div class="row lession-evaluate mt-4">

        <h4>Đánh giá</h4>

        <div class="col-12 mt-4 lession-evaluate-sum">


        </div>

        <form action="" method="post">

            <textarea class="col-12 mt-4 lession-evaluate-comment" placeholder="Viết đánh giá của bạn"></textarea>

            <button type="submit">Gửi đánh giá</button>
        </form>
    </div>
</div>

@endsection