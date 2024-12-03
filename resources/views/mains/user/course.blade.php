@extends('layouts.main')

@section('title', 'Khóa học')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/course.css') }}">
@endsection

@section('content')

<!-- <h1>Danh sách các khóa học</h1> -->
<div class="container">

    <!-- <div class="row course-navbar mt-5 mb-5">
        <div class="col-2">
            Lập trình căn bản
        </div>
        <div class="col-2">
            Lập trình nâng cao
        </div>
        <div class="col-2">

        </div>
        <div class="col-2">

        </div>
    </div> -->

    <div class="row g-2 course-row mt-5">

        @foreach($courses as $course)

        <div class="col-lg-3 col-md-4 col-sm-6 col-12 course-cover">

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
</div>

@endsection