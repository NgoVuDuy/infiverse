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
            <p class="course-teacher">{{ $teacher_name }}</p>
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

        <form action="{{ route('review', $course->id) }}" method="post" class="evaluate-form">

            @csrf

            <textarea name="review" class="col-12 mt-4 lession-evaluate-comment p-3" placeholder="Viết đánh giá của bạn"></textarea>

            <div class="star-cover mt-4">
                <i data-value="1" class="star fa fa-star" style="font-size:24px"></i>
                <i data-value="2" class="star fa fa-star" style="font-size:24px"></i>
                <i data-value="3" class="star fa fa-star" style="font-size:24px"></i>
                <i data-value="4" class="star fa fa-star" style="font-size:24px"></i>
                <i data-value="5" class="star fa fa-star" style="font-size:24px"></i>
            </div>

            <input type="hidden" name="star_rating" class="star_rating">

            <br>
            <button class="send-evaluate-btn mt-4" type="submit">Gửi đánh giá</button>
        </form>

        <h4 id="review-title" class="mt-5">Bình luận</h4>

        <div class="lession-evaluate-show mt-2">

            @if($reviews->isEmpty())

                <p>Chưa có bình luận nào cho khóa học này</p>
            @else

                @foreach($reviews as $review)
                    <!-- <p>{{ $review->review }}</p> -->

                    <div class="evaluate-user-item">
        
                        <div class="user-name-img-cover">
        
                            <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                            <span>{{ $review->user->username }}</span>
        
                        </div>
        
                        <div class="user-cmt mt-2">
                            <div class="star-cover-user">
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                                <i class="star fa fa-star" style="font-size:14px"></i>
                            </div>
                            {{ $review->review }}
                        </div>
        
                    </div>
                    <hr>
                @endforeach
            @endif

            <!-- <div class="evaluate-user-item">

                <div class="user-name-img-cover">

                    <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                    <span>NhatTruong</span>

                </div>

                <div class="user-cmt mt-2">
                    <div class="star-cover-user">
                        <i class="star fa fa-star" style="font-size:14px"></i>
                        <i class="star fa fa-star" style="font-size:14px"></i>
                        <i class="star fa fa-star" style="font-size:14px"></i>
                        <i class="star fa fa-star" style="font-size:14px"></i>
                    </div>
                    Tuyệt vời
                </div>
            </div>
            <hr>

            <div class="evaluate-user-item">

                <div class="user-name-img-cover">

                    <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="40px" height="40px">
                    <span class="">MinhNguyen</span>

                </div>

                <div class="user-cmt mt-2">
                    <div class="star-cover-user">
                        <i class="star fa fa-star" style="font-size:14px"></i>
                        <i class="star fa fa-star" style="font-size:14px"></i>
                        <i class="star fa fa-star" style="font-size:14px"></i>
                        <i class="star fa fa-star" style="font-size:14px"></i>
                        <i class="star fa fa-star" style="font-size:14px"></i>
                    </div>
                    Tôi rất thích khóa học này
                </div>
            </div>
            <hr> -->

        </div>
    </div>
</div>


@if(session('message-join-in'))

<x-alert>

    <x-slot name="text">{{ session('message-join-in') }}</x-slot>
    <x-slot name="color">green</x-slot>

</x-alert>

{{ session()->forget('message-join-in') }}

@endif

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