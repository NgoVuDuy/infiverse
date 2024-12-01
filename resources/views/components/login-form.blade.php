<div class="row cover mb-5 justify-content-center">

    <div class="col-lg-10">

        <div class="row">

            <div class="col-lg-7 col-md-6 col-12">

                <div class="row">


                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4 col-3">
                            <img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="90px" height="90px">

                        </div>

                        <div class="col-lg-8 col-md-12 col-9 logo-form">
                            <div class="chat-robot">
                                <span>

                                    <!-- <p class="chat-text">
                
            </p> -->
                                    <h2 class="slogan">INFIVERSE</h2>
                                    <span style="color: white;">Free to use, easy to love</span>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mt-4">

                    <div class="col-8">
                        <img src="{{ asset('images/Launch.png') }}" alt="" width="100%">

                    </div>
                </div>



            </div>

            <div class="col-lg-5 col-md-6 col-12 form-cover">

                <h1 class="form-title mt-4">Login</h1>

                <hr>

                <form action="/login" method="post" class="form">

                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="name" name="username">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password">

                        <input class="mt-2 show-psw" type="checkbox" onclick="showPassword()"><span class="show-psw-text">Hiển thị mật khẩu</span>

                    </div>

                    <center>
                        <button type="submit" class="form-btn mb-3">Đăng nhập</button>

                        <div class="form-option">

                            <a style="text-decoration: none;" class="mb-5" href="/register">Đăng ký >></a>

                            <a style="text-decoration: none;" href="#">Quên mật khẩu >></a>
                        </div>
                    </center>

                </form>
            </div>
        </div>

    </div>


    @if(session('error'))

    <x-alert>

        <x-slot name="text">{{ session('error') }}</x-slot>
        <x-slot name="color">red</x-slot>

    </x-alert>

    @endif

    @if(session('delete-username-message'))

    <x-window>
        <x-slot name="text">{{ session('delete-username-message') }}</x-slot>
        <x-slot name="icon">success</x-slot>
        <x-slot name="button">OK</x-slot>
        <x-slot name="footer"></x-slot>

    </x-window>
    @endif
</div>