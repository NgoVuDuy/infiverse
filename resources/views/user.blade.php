@extends('layouts.main')

@section('title', 'Người dùng')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user.css') }}">
<link rel="stylesheet" href="{{ asset('css/course.css') }}">

@endsection

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-2">
            <div class="user-option p-3">
                <a id="user-information" class="active">
                    <p>Thông tin và liên hệ</p>
                </a>
                <a id="enrolled-courses">
                    <p>Khóa học đã tham gia</p>
                </a>
                <a id="change-username">
                    <p>Đổi tên tài khoản</p>
                </a>
                <a id="change-password">
                    <p>Thay đổi mật khẩu</p>
                </a>
                <a id="delete-user">
                    <p class="dlt-user">Xóa tài khoản</p>
                </a>

            </div>
        </div>

        <div class="col-10">
            <div class="row">
                <div class="user-cover p-3">

                    <div class="col-1 mb-3">

                        <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="100px" height="100px">
                        <!-- <img class="rounded-circle" src="{{ asset('images/courses/cpp-course.png') }}" alt="" width="150px" height="150px"> -->



                    </div>

                    <div class="col-11">
                        <div class="user-information">
                            <p><span>Họ tên</span>{{ Auth::user()->name }}</p>
                            <p><span>Số điện thoại</span></p>
                            <p><span>Địa chỉ Email</span></p>
                            <p><span>Quốc gia</span></p>
                            <p><span>Liên hệ</span></p>
                            <p><span>Mô tả bản thân</span></p>
                            <p><span>Thành tích</span></p>

                        </div>
                    </div>

                    <div class="icon-edit">

                        <!-- <a href="/load-edit-form"> -->

                        <img src="{{ asset('images/icon/edit.png') }}" alt="Edit">
                        <!-- </a> -->
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    
    var userDetailsUrl = "{{ route('user-details', Auth::user()->id) }}";

</script>
<script>
    $(document).ready(function() {

        $('.user-option a').on('click', function() {

            $('.user-option a').removeClass('active')

            $(this).addClass('active')
        })
    })
</script>

<script src="{{ asset('js/ajax/user-information.js') }}"></script>
<script src="{{ asset('js/ajax/edit-form.js') }}"></script>
<script src="{{ asset('js/ajax/enrolled-courses.js') }}"></script>

@endsection