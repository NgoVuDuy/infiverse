<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="45" height="45"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/courses">Khóa học</a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tài khoản
                    </a>

                    <ul class="dropdown-menu ">

                        <li><a class="dropdown-item" href="/user">{{ Auth::user()->username }}</a></li>
                        <!-- <li><a class="dropdown-item" href="/resgiter">Đăng ký</a></li> -->
                        <li><a class="dropdown-item" href="/logout-show">Đăng xuất</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" style="font-size:24px"></i></button>
            </form>
        </div>
    </div>
</nav>

@if(session('message-logout')) 

    <x-window-adv>

    <x-slot name="text">Bạn có chắc muốn đăng xuất không ?</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="cancelButton">false</x-slot>
    <x-slot name="path">/logout</x-slot>

    </x-window-adv>
@endif