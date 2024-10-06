@extends('layouts.basic')

@section('title', 'Đăng ký')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/form-resgiter-login.css') }}">
@endsection

@section('content')
<div class="container">
    <x-resgiter-form/>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/show-password.js') }}"></script>
@endsection
