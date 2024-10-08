<div class="row cover mb-5">

    <div class="col-lg-8 col-md-6 col-12">

        <div class="row">
            <div class="col-lg-2 col-md-4 col-3 mb-2">
                <img src="{{ asset('images/robots/robot-resgiter.png') }}" alt="Robot" width="100%">

            </div>

            <div class="col-lg-10 col-md-12 col-9">
                <div class="chat-robot">
                    <span>
                        <p class="chat-text">
                            Chào mừng bạn đến với trang đăng ký. <br>
                            Bạn đã có tài khoản chưa ? <br>
                            Nếu chưa ! Vui lòng đăng ký để có thể trải nghiệm các tính năng tuyệt vời của chúng tôi.
                        </p>
                    </span>
                </div>

            </div>
        </div>


    </div>

    <div class="col-lg-4 col-md-6 col-12 form-cover">

        <h1 class="form-title mt-4">Sign Up</h1>

        <hr>

        <form action="/resgiter" method="post" class="form">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" id="name" name="username" value="{{ old('username') }}">

                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">

                <input class="mt-2 show-psw" type="checkbox" onclick="showPassword()"><span class="show-psw-text">Hiển thị mật khẩu</span>

                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-again" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">

                <input class="mt-2 show-psw-cfmt" type="checkbox" onclick="showPassword()"><span class="show-psw-text">Hiển thị mật khẩu</span>

                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <center>
                <button type="submit" class="form-btn mb-3">Đăng ký</button>

                <div class="form-option">

                    <a class="mb-5" href="/login">Đăng nhập >></a>

                    <a href="#">Quên mật khẩu >></a>
                </div>


            </center>


        </form>
    </div>
</div>