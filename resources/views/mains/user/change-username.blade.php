@extends('layouts.main')

@section('title', 'Thay đổi tài khoản')

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
                        <a href="#" id="change-username" class="active option">
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
                    <div class="col-12">
                        <div class="row">
                            <div class="col-7">
                                <form class="form-change-username" action="/change-username" method="post">

                                    @csrf

                                    <h5 class="mb-4">Đổi tên tài khoản</h5>

                                    <label for="" class="change-username-text">Tên tài khoản</label>
                                    <input class="username" type="text" name="username" id="" value="{{ Auth::user()->username }}"> <br>

                                    @error('username')
                                    <div class="mt-2 alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <button class="change-username-btn mt-3" type="submit">Lưu lại</button>

                                </form>
                            </div>

                            <div class="col-5">

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

@if(session('change-username-message'))

<x-window>
    <x-slot name="text">{{ session('change-username-message') }}</x-slot>
    <x-slot name="icon">success</x-slot>
    <x-slot name="button">OK</x-slot>
    <x-slot name="footer"></x-slot>

</x-window>
@endif


@endsection

@section('js')

@endsection