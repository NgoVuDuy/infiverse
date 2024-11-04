@extends('layouts.main')

@section('title', 'Người dùng')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/user.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/course.css') }}">

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
                <a href="/delete-user-confirmation" id="delete-user">
                    <p class="dlt-user">Xóa tài khoản</p>
                </a>

            </div>
        </div>

        <div class="col-10">
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

                        <img src="{{ asset('images/icon/edit.png') }}" alt="Edit">
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

@if(session('delete-user-confirmation'))

<x-window-adv>
    <x-slot name="text">{{ session('delete-user-confirmation') }}</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="path">/delete-user</x-slot>

</x-window-adv>
@endif


@endsection

@section('js')

<script>
    $(document).ready(function() {

        $('.user-option a').on('click', function() {

            $('.user-option a').removeClass('active')

            $(this).addClass('active')
        })
    })
</script>

<script>
    var urlUserDetails = "{{ route('user-details', Auth::user()->id) }}" 
</script>

<script src="{{ asset('js/ajax/user-information.js') }}"></script>
<script src="{{ asset('js/ajax/edit-form.js') }}"></script>
<script src="{{ asset('js/ajax/enrolled-courses.js') }}"></script>
<script src="{{ asset('js/ajax/change-username.js') }}"></script>
<script src="{{ asset('js/ajax/change-password.js') }}"></script>



@endsection