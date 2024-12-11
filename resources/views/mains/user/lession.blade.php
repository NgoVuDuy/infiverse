@extends('layouts.main')

@section('title', 'Bài học')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/lession.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive/lesson.css') }}">


@endsection

@section('content')

<div class="container">

    <div class="row lession-header">
        <div class="col-lg-8 col-12 lession-left">

            <h1 class="course-name">{{ $course->course_name }}</h1>
            <p class="course-teacher"><span style="color: #cacaca; margin-right: 6px;">Tác giả </span>{{ $teacher_name }}</p>
            <p class="course-description">{{ $course->description }}</p>

        </div>

        <div class="col-lg-4 d-lg-block d-none lession-right">

            <img src="{{ asset($course->img) }}" alt="" width="100%">

        </div>
    </div>

    <!-- <div class="row lession-content mt-4">

        <h4>Thông báo</h4>

        <div class="col-12 mt-4">

            <p>Tuần này các em thi cuối kỳ kết thúc học phần</p>
        </div>
    </div> -->

    <div class="row lession-content mt-4">

        <h4>Nội dung khóa học</h4>

        <div class="col-12 mt-4">

            @foreach($lessions as $lession)

            <h6 class="fw-bold">{{ $lession->title }}</h6>

            <a href="{{ asset( $lession->file ) }}" target="_blank">
                <img class="pdf-file-icon" src="{{ asset('images/files/pdf.png') }}" alt="PDF" width="35px">
            </a>
            
            <p class="file_desc">{{ $lession->desc_file }}</p>

            <hr>

            @endforeach

        </div>
    </div>
</div>

@endsection