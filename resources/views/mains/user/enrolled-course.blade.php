@extends('layouts.main')

@section('title', 'Khóa học')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/course.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive/course.css') }}">

@endsection

@section('content')

<!-- <h1>Danh sách các khóa học</h1> -->
<div class="container">


    <div class="row g-2 course-row mt-5 enroll-course-row">

        @if (isset($message_enrolled_course))
        <h5 style="text-align:center">{{ $message_enrolled_course }}</h5>
        @endif


        @foreach($courses as $course)

        <div class="col-lg-3 col-md-4 col-sm-6 col-8 course-cover">

            <div class="course">

                <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">

                <a href="{{ route('course-details', $course->id) }}" class="course-name">{{ $course->course_name }}</a>

                <a class="course-link" href="{{ route('course-details', $course->id) }}">

                    <button class="join-in-btn">Chi tiết</button>
                </a>
                <!-- 
                <a href="{{ route('leave-course', $course->id) }}" class="leave-course-link" data-id="{{ $course->id }}">

                    <button class="leave-course-btn">Rời khỏi</button>

                </a> -->


                <a href="{{ route('leave-course-show', $course->id) }}" class="leave-course-link" data-id="{{ $course->id }}">

                    <button class="leave-course-btn">Rời khỏi</button>

                </a>

            </div>

        </div>
        @endforeach
    </div>
</div>

@if(session('message-leave-course'))

<form id="leave-course-form" action="{{ route('leave-course', session('id-leave-course')) }}" method="post">
    @csrf
    @method('DELETE')
    <button style="display: none;" type="submit">Xóa</button>
</form>

<script type="module">
    Swal.fire({
        title: "Thông báo",
        text: "{{ session('message-leave-course') }}",
        icon: "question",
        showCancelButton: true,
        confirmButtonText: "OK",
        customClass: {
            confirmButton: 'main-btn', // Thêm lớp CSS tùy chỉnh cho nút "OK"
            cancelButton: 'btn btn-danger'
        }
    }).then((result) => {

        if (result.isConfirmed) {

            $('#leave-course-form').submit();
        }
    });
</script>
@endif

@endsection

@section('js')

<!-- <script src="{{ asset('js/ajax/leave-course.js') }}"></script> -->

@endsection