@extends('layouts.main')

@section('title', 'Khóa học')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/course.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive/course.css') }}">

@endsection

@section('content')

<div class="container">


    <div class="row g-2 course-row mt-5">

        @foreach($courses as $course)

        <div class="col-lg-3 col-md-4 col-sm-6 col-8 course-cover">

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