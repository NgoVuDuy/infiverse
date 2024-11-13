@extends('layouts.main')

@section('title', 'Tìm kiếm')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/course.css') }}">
@endsection

@section('content')

<!-- <h1>Danh sách các khóa học</h1> -->
<div class="container">

    <div class="row mt-5 mb-5">
        <div class="col-12" style="text-align:center;">Kết quả tìm kiếm cho: <span style="color: #ff6f00; font-size: 22px; font-weight: bold;">{{ $text }}</span></div>
    </div>

    <div class="row g-2 course-row ">

        @if($courses->isEmpty())

            <h4 style="text-align: center;">Không có kết quả nào</h4>

        @else

            @foreach($courses as $course)

            <div class="col-lg-3 col-md-4 col-6 course-cover">

                <div class="course">

                    <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">

                    <p class="course-name">{{ $course->course_name }}</p>

                    <a class="course-link" href="{{ route('course-details', $course->id) }}">

                        <button class="join-in-btn">Chi tiết</button>
                    </a>
                </div>


            </div>

            @endforeach
        @endif

    </div>
</div>


@endsection