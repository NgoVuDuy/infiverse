@extends('layouts.basic')

@section('title', 'Đăng ký')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/user/form-register-login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive/login.css') }}">

@endsection

@section('content')
<div class="container">
    <x-register-form/>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/show-password.js') }}"></script>
@endsection
