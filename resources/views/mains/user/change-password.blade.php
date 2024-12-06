@extends('layouts.main')

@section('title', 'Thay đổi mật khẩu')

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
                        <a href="/user" id="user-information" class=" option">
                            <p>Thông tin và liên hệ</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="/change-username" id="change-username" class=" option">
                            <p>Đổi tên tài khoản</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="#" id="change-password" class="active option">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <form class="form-change-password" action="/change-password" method="post">

                                        @csrf

                                        <h5 class="mb-4">Đổi mật khẩu</h5>

                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <label for="">Mậu khẩu cũ</label>
                                            </div>
                                            <div class="col-8">
                                                <input id="old_password" type="password" name="old_password" id="">

                                                <input  class="mt-2 show-psw-old" type="checkbox" onclick="showPassword()"><span class="show-psw-text">Hiển thị mật khẩu</span>

                                                @error('old_password')
                                                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <lable>Mật khẩu mới</lable>
                                            </div>
                                            <div class="col-8">
                                                <input id="password" type="password" name="password" id="">

                                                <input  class="mt-2 show-psw" type="checkbox" onclick="showPassword()"><span class="show-psw-text">Hiển thị mật khẩu</span>

                                                @error('password')
                                                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <lable>Mật khẩu mới xác nhận</lable>
                                            </div>
                                            <div class="col-8">
                                                <input  id="password_confirmation" type="password" name="password_confirmation" id="">

                                                <input class="mt-2 show-psw-cfmt" type="checkbox" onclick="showPassword()"><span class="show-psw-text">Hiển thị mật khẩu</span>

                                                @error('password_confirmation')
                                                <div class="mt-2 alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <button class="change-password-btn mb-3" type="submit">Lưu lại</button>

                                    </form>

                                </div>

                                <div class="col-lg-5 col-12">

                                    <div class="role">
                                        <p><i class="fa fa-circle" style="font-size:10px; margin-right:6px"></i>Độ dài từ 8 đến 16 ký tự</p>
                                        <p><i class="fa fa-circle" style="font-size:10px; margin-right:6px"></i>Không được chứa ký tự đặc biệt và khoảng trống</p>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>


@if(session('change-password-message-success'))

<x-window>
    <x-slot name="text">{{ session('change-password-message-success') }}</x-slot>
    <x-slot name="icon">success</x-slot>
    <x-slot name="button">OK</x-slot>
    <x-slot name="footer"></x-slot>

</x-window>
@endif

@if(session('change-password-message-error'))

<x-window>
    <x-slot name="text">{{ session('change-password-message-error') }}</x-slot>
    <x-slot name="icon">error</x-slot>
    <x-slot name="button">OK</x-slot>
    <x-slot name="footer"></x-slot>

</x-window>
@endif


@endsection

@section('js')

<script src="{{ asset('js/show-password.js') }}"></script>

@endsection