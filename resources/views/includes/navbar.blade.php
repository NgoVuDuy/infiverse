<style>
    @media (min-width: 1201px) {



        .navbar-close-btn {
            display: none;
        }

    }

    /* Kích thước giữa 576px và 992px */
    @media (min-width: 991.98px) and (max-width: 1200px) {


        .navbar-form {
            position: absolute;
            bottom: -60px;
            right: 20px;
            display: none;
        }

        .navbar-search-btn {
            display: block;
        }

    }


    @media (min-width: 0px) and (max-width: 991px) {

        .navbar-close-btn {
            display: none !important;
        }

        .navbar-form {
            width: 100% !important;
        }
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="70px" height="70px"><span style="margin-left: 8px; font-weight: bold; font-size: 20px; color: #2f3c7e;"></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mb-lg-0 mb-3" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'nav-active' : ' ' }}" aria-current="page" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('courses') ? 'nav-active' : ' ' }}" href="/courses">Tất cả khóa học</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('load-courses') ? 'nav-active' : ' ' }}" href="/load-courses">Khóa học đã tham gia</a>
                </li>

                @if(Auth::user()->role == 'teacher')

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('courses-mgmt') ? 'nav-active' : ' ' }}" href="/courses-mgmt">Quản lý khóa học</a>
                </li>


                @endif

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle {{ Request::is('user') ? 'nav-active' : ' ' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tài khoản
                    </a>

                    <ul class="dropdown-menu ">

                        <li><a class="dropdown-item" href="/user">{{ Auth::user()->username }}</a></li>
                        <!-- <li><a class="dropdown-item" href="/resgiter">Đăng ký</a></li> -->
                        <li><a class="dropdown-item" href="/logout-show">Đăng xuất</a></li>
                    </ul>
                </li>

            </ul>
            <form  class=" navbar-form width-400" role="search" action="/search" method="get">

                @csrf
                <input name="search-text" class="search-text form-control me-2" type="search" placeholder="Nhập tên khóa học" aria-label="Search">
                <button class="btn btn-success" type="submit"><i class="fa fa-search" style="font-size:24px"></i></button>
            </form>

            <button class="btn btn-outline-success navbar-search-btn"><i class="fa fa-search" style="font-size:24px"></i></button>
            <button class="btn btn-outline-danger navbar-close-btn "><i class="fa fa-close" style="font-size:24px"></i></i></button>


        </div>
    </div>
</nav>

@if(session('message-logout'))

<x-window-adv>
    <x-slot name="text">Bạn có chắc muốn đăng xuất không?</x-slot>
    <x-slot name="icon">question</x-slot>
    <x-slot name="cancelButton">false</x-slot>
    <x-slot name="path">/logout</x-slot>
</x-window-adv>
@endif

<script>
    $(document).ready(function() {


        $('.navbar-search-btn').on('click', function() {

            $('.navbar-form').addClass('d-flex');
            $('.navbar-form').addClass('width-400');


            $('.navbar-search-btn').addClass('d-none');
            $('.navbar-close-btn').addClass('d-block');




        })


        $('.navbar-close-btn').on('click', function() {

            $('.navbar-form').removeClass('d-flex');
            $('.navbar-form').removeClass('width-400');


            $('.navbar-search-btn').removeClass('d-none');
            $('.navbar-close-btn').removeClass('d-block');



        })


        $('.navbar-form').on('submit', function(event) {

            var search_text = $('.search-text').val().trim();

            if(!search_text) {

                event.preventDefault();
            }
        })
    })
</script>