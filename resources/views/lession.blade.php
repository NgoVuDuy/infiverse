@extends('layouts.main')

@section('title', 'Bài học')

@section('css')

<link rel="stylesheet" href="{{ asset('css/lession.css') }}">

@endsection

@section('content')

<div class="container">

    <div class="row lession-header">
        <div class="col-8 lession-left">

            <h1 class="course-name">{{ $course->course_name }}</h1>
            <p class="course-teacher">Ngo Vu Duy</p>
            <p class="course-description">{{ $course->description }}</p>

        </div>

        <div class="col-4 lession-right">

            <img src="{{ asset($course->img) }}" alt="" width="100%">

        </div>
    </div>

    <div class="row lession-content mt-4">

        <h4>Thông báo</h4>

        <div class="col-12 mt-4">

            <p>Đây là thông báo của giáo viên thuộc về một khóa học</p>
        </div>
    </div>

    <div class="row lession-content mt-4">

        <h4>Nội dung khóa học</h4>

        <div class="col-12 mt-4">

            @foreach($lessions as $lession)

            <h6 class="fw-bold">{{ $lession->title }}</h6>

            <a href="{{ asset('files/lab1.pdf') }}" target="_blank">
                <img src="{{ asset('images/files/pdf.png') }}" alt="PDF" width="2.5%">
            </a>
            
            <p class="file_desc">Các sinh viên học môn Nguyên lý Hệ điều hành - Nhóm 3 kiểm tra kết quả tổng hợp của môn học trong file đính kèm. Các thắc mắc xin gởi mail về địa chỉ: nhviet@ctu.edu.vn đến hết buổi sáng ngày thứ 5 (25/05/2023). Sau thời gian này điểm sẽ công bố chính thức. </p>

            <hr>

            @endforeach
        </div>
    </div>
</div>

@endsection