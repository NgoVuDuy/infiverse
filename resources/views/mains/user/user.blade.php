@extends('layouts.main')

@section('title', 'Hồ sơ của tôi')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/user.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/course.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive/user.css') }}">


@endsection

@section('content')


<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8 col-12 mb-4">
            <div class="user-option">
                <div class="row">
                    <div class="col-3">
                        <a href="#" id="user-information" class="active option">
                            <p>Thông tin và liên hệ</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/change-username" id="change-username" class="option">
                            <p>Đổi tên tài khoản</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/change-password" id="change-password" class="option">
                            <p>Thay đổi mật khẩu</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/delete-user-confirmation" id="delete-user" class="option">
                            <p class="dlt-user">Xóa tài khoản</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-11">
            <div class="row">
                <div class="user-cover p-3">

                    <div class="col-1 mb-3">

                        <img class="rounded-circle" src="{{ asset(Auth::user()->user_img) }}" alt="" width="100px" height="100px">



                    </div>

                    <div class="col-11">
                        <div class="user-information">

                            <p><span>Họ tên</span>{{ Auth::user()->fullname }}</p>
                            <p><span>Số điện thoại</span>{{ Auth::user()->phone_number }}</p>
                            <p><span>Địa chỉ Email</span>{{ Auth::user()->email }}</p>
                            <p><span>Liên hệ</span><a href="{{ Auth::user()->contact }}">{{ Auth::user()->contact }}</a></p>
                            <p><span>Mô tả bản thân</span>{{ Auth::user()->desc_user }}</p>
                            <p><span>Thành tích</span>{{ Auth::user()->achievenment }}</p>

                        </div>
                    </div>

                    <div class="icon-edit">

                        <span>Cập nhật</span>
                        <img src="{{ asset('images/icon/edit.png') }}" alt="Edit">
                    </div>

                </div>
            </div>


        </div>

    </div>
</div>


@if(session('delete-user-confirmation'))

<x-window-adv>
    <x-slot name="text">{{ session('delete-user-confirmation') }}</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="path">/delete-user</x-slot>

</x-window-adv>
@endif


@endsection

@section('js')

<!-- <script>
    $(document).ready(function() {

        $('.user-option a').on('click', function() {

            $('.user-option a').removeClass('active')

            $(this).addClass('active')
        })
    })
</script> -->

<!-- <script>
    var urlUserDetails = "{{ route('user-details', Auth::user()->id) }}"
</script> -->

<!-- <script src="{{ asset('js/ajax/user-information.js') }}"></script> -->
<script src="{{ asset('js/ajax/edit-form.js') }}"></script>
<!-- <script src="{{ asset('js/ajax/enrolled-courses.js') }}"></script> -->
<!-- <script src="{{ asset('js/ajax/change-username.js') }}"></script> -->
<!-- <script src="{{ asset('js/ajax/change-password.js') }}"></script> -->



@endsection