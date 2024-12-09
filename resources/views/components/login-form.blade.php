<div class="row cover mb-5 justify-content-center">

    <div class="col-lg-10">

        <div class="row justify-content-center">

            <div class="col-lg-7 col-12">

                <div class="row justify-content-center">


                    <div class="row align-items-center">
                        <div style="padding: 0px" class="col-lg-2 col-2">
                            <img src="{{ asset('images/logo/logo-infiverse.png') }}" alt="Bootstrap" width="100%">

                        </div>

                        <div class="col-lg-8 col-10 logo-form d-flex align-items-center">
                            <div class="chat-robot">
                                <span>

                                    <h2 class="slogan">INFIVERSE</h2>
                                    <span style="color: white;">Free to use, easy to love</span>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row mt-4 ">

                    <div class="col-lg-8 col-10 d-lg-block d-none">
                        <img src="{{ asset('images/Launch.png') }}" alt="" width="100%" height="100%">

                    </div>
                </div>



            </div>

            <div class="col-lg-5 col-md-12 col-sm-12 col-11 form-cover">

                <h1 class="form-title mt-4">Login</h1>

                <hr>

                <form action="/login" method="post" class="form">

                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="name" name="username" value="{{ old('username') }}">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password">

                        <div class="show-passwd-cover d-flex align-items-center mt-2">

                            <input id="showPassword" class="show-psw" type="checkbox" onclick="showPassword()">

                            <label for="showPassword" class="show-psw-text">Hiển thị mật khẩu</label>

                        </div>

                    </div>

                    <center>
                        <button type="submit" class="form-btn mb-3">Đăng nhập</button>

                        <div class="form-option">

                            <a style="text-decoration: none;" class="mb-5" href="/register">Đăng ký >></a>
                            <!-- <a style="text-decoration: none;" href="#">Quên mật khẩu >></a> -->

                        </div>
                    </center>

                </form>
            </div>
        </div>

    </div>


    @if(session('message-login-error'))

    <x-alert>

        <x-slot name="text">{{ session('message-login-error') }}</x-slot>
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

    @if(session('username_old'))

        <script>
            $(document).ready(function() {

                $('#name').val("{{ session('username_old') }}")
            })
        </script>
    @endif
</div>