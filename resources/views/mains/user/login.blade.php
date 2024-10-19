@extends('layouts.basic')

@section('title', 'Đăng nhập')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/user/form-resgiter-login.css') }}">

@endsection

@section('content')
<div class="container">
    
    <x-login-form/>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/show-password.js') }}"></script>
@endsection
