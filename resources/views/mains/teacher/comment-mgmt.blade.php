@extends('layouts.basic')

@section('title', 'Quản lý bình luận')

@section('css')

<link href="{{ asset('css/teacher/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/teacher/navbar.css') }}" rel="stylesheet">



@endsection

@section('content')

<header class="navbar sticky-top flex-md-nowrap p-2 shadow" data-bs-theme="dark">

    <a class="" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>

    <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/teacher">Infiverse</a> -->

    <img class="d-md-none" src="{{ asset('images/icon/more.png') }}" alt="" width="4%" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

</header>

<div class="container-fluid">
    <div class="row">

        @include('includes.sidebar')

        <main class="ms-sm-auto col-lg-9 col-md-9 col-12">

            <div class="row">

            </div>

        </main>
    </div>
</div>

@if(session('message'))

<x-window-adv>

    <x-slot name="text">Bạn có chắc muốn đăng xuất không ?</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="cancelButton">false</x-slot>
    <x-slot name="path">/logout</x-slot>

</x-window-adv>
@endif

@endsection


@section('js')


@endsection