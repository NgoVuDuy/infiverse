@extends('layouts.basic')

@section('title', 'Dashboard')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/teacher/sidebar.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/user/user.css') }}">
<link rel="stylesheet" href="{{ asset('css/teacher/profile-mgmt.css') }}">






@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-3 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/teacher">Infiverse</a> -->
    <!-- <img src="{{ asset('images/icon/bell.png') }}" alt="Bootstrap" width="36" height="36"> -->
    <img class="notifi-icon" src="{{ asset('images/icon/bell.png') }}" alt="" width="30px" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

    <img class="d-md-none" src="{{ asset('images/icon/more.png') }}" alt="" width="30px" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

</header>

<div class="container-fluid">
    <div class="row">


        <x-sidebar>

            <x-slot name="home"></x-slot>
            <x-slot name="course"></x-slot>
            <x-slot name="student"></x-slot>
            <x-slot name="evaluate"></x-slot>
            <x-slot name="profile"><img class="right-arrow" src="{{ asset('images/icon/left.png') }}" alt="Bootstrap" width="36" height="36"></x-slot>

        </x-sidebar>

        <main class="ms-sm-auto col-lg-9 col-md-9 col-12">

            <div class="row mt-5">
                <div class="col-4">
                    <div class="user-cover p-3">

                        <div class="col-12 mb-3 d-flex flex-column align-items-center">

                            <h5>{{ Auth::user()->fullname }}</h5>

                            <img class="rounded-circle" src="{{ asset(Auth::user()->user_img) }}" alt="" width="100px" height="100px">


                        </div>

                        <hr>

                        <div class="col-12">
                            <div class="user-information">


                                <div class="user-profile">

                                    <p><span>Số điện thoại</span>{{ Auth::user()->phone_number }}</p>
                                    <p><span>Địa chỉ Email</span>{{ Auth::user()->email }}</p>
                                    <p><span>Liên hệ</span><a href="{{ Auth::user()->contact }}">{{ Auth::user()->contact }}</a></p>
                                    <p><span>Mô tả bản thân</span>{{ Auth::user()->desc_user }}</p>
                                    <p><span>Thành tích</span>{{ Auth::user()->achievenment }}</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-7">
                    <div class="row">
                        <div class="user-option p-3">

                            <div id="user-information" class="d-flex flex-row justify-content-between">
                                <p class="profile-down">Thay đổi thông tin</p>
                                <i class="fa fa-angle-down profile-down" style="font-size:24px"></i>
                            </div>

                            <hr style="margin: 0px;">

                            <form class="edit-profile-form" action="/update-user" method="post" enctype="multipart/form-data">

                                @csrf

                                <div class="row">
                                    <div class="col-6">

                                        <div style="width: 100%" class="user-img-change-cover">

                                            <img id="user-img" class="rounded-circle" src="{{ asset(Auth::user()->user_img) }}" alt="" width="100px" height="100px">

                                            <label style="color:white; font-weight:100;" class="mt-3 upload-profile-img" for="user-img-input">Tải ảnh mới</label>

                                            <input type="file" id="user-img-input" accept="image/*" class="d-none" name="user-img">
                                        </div>

                                        <div><label for="">Tài khoản</label></div>
                                        <input type="text" name="username" value="{{ Auth::user()->username }}">

                                        <div><label for="">Mật khẩu cũ</label></div>
                                        <input type="password" name="old_password">

                                        <div><label for="">Mật khẩu mới</label></div>
                                        <input type="password" name="password">

                                        <div><label for="">Nhập lại mật khẩu</label></div>
                                        <input type="password" name="password_confirmation">
                                    </div>
                                    <div class="col-6">
                                        <div class="">
                                            <label for="">Tên người dùng</label>
                                        </div>
                                        <input type="text" name="fullname" value="{{ Auth::user()->fullname }}">

                                        <div class="">

                                            <label for="">Số điện thoại</label>
                                        </div>
                                        <input type="tel" name="phone-number" value="{{ Auth::user()->phone_number }}">

                                        <div class="">

                                            <label for="">Email</label>
                                        </div>
                                        <input type="email" name="email" value="{{ Auth::user()->email }}">

                                        <div class="">
                                            <label for="">Liên hệ</label>
                                        </div>
                                        <input type="text" name="contact" value="{{ Auth::user()->contact }}">

                                        <div class="">
                                            <label for="">Mô tả bản thân</label>
                                        </div>
                                        <textarea name="desc-user" id="">{{ Auth::user()->desc_user }}</textarea>

                                        <div class="">
                                            <label for="">Thành tích</label>
                                        </div>
                                        <textarea name="achievenment" id="">{{ Auth::user()->achievenment }}</textarea>

                                    </div>

                                    <span class="d-flex justify-content-end mt-5">
                                        <button class="finish-profile-btn" type="submit">Hoàn thành</button>

                                    </span>

                                </div>
                            </form>

                            <!-- <div id="change-username" class="d-flex flex-row justify-content-between">
                                <p>Đổi tên tài khoản</p>
                                <i class="fa fa-angle-down" style="font-size:24px"></i>
                            </div>

                            <div id="change-password" class="d-flex flex-row justify-content-between">
                                <p>Thay đổi mật khẩu</p>
                                <i class="fa fa-angle-down" style="font-size:24px"></i>
                            </div> -->

                            <a href="/delete-user-profile" id="delete-user">
                                <p class="dlt-user mt-3">Xóa tài khoản</p>
                            </a>
                        </div>
                    </div>


                </div>
            </div>

        </main>
    </div>
</div>

@if(session('message-logout'))

<x-window-adv>

    <x-slot name="text">{{ session('message-logout') }}</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="cancelButton">false</x-slot>
    <x-slot name="path">/logout</x-slot>

</x-window-adv>
@endif

@if(session('delete-user-profile'))

<x-window-adv>
    <x-slot name="text">{{ session('delete-user-profile') }}</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="path">/delete-user</x-slot>

</x-window-adv>
@endif



@endsection


@section('js')

<script>
    $(document).ready(function() {

        $('.profile-down').on('click', function() {

            $('.edit-profile-form').slideToggle('fast');

        })

    })
</script>

<script src="{{ asset('js/load-user-img.js') }}"></script>

@endsection