<div class="row cover mb-5 justify-content-center">

    <div class="col-lg-10">

        <div class="row">

            <div class="col-lg-7 col-md-6 col-12">

                <div class="row">
                    <!-- <div class="col-lg-2 col-md-4 col-3 mb-2">
                <img src="{{ asset('images/robots/robot-login.png') }}" alt="Robot" width="100%">
    
            </div> -->

                    <div class="col-lg-10 col-md-12 col-9">
                        <div class="chat-robot">
                            <span>
                                <p class="chat-text">
                                    Chào mừng bạn đến với trang đăng nhập. <br>
                                    Vui lòng đăng ký để có thể trải nghiệm các tính năng tuyệt vời của chúng tôi.<br>
                                    Dễ dàng lưu trữ tiến trình học tập của người dùng trên nhiều thiết bị
                                </p>
                            </span>
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

                            <a class="mb-5" href="/resgiter">Đăng ký >></a>

                            <a href="#">Quên mật khẩu >></a>
                        </div>
                    </center>

                </form>
            </div>
        </div>

    </div>


    @if(session('error'))

    <x-alert>

        {{ session('error') }}

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