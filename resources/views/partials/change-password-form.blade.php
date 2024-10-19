<form class="form-change-password" action="/change-password" method="post">

    @csrf

    <h5 class="mb-4">Đổi mật khẩu</h5>

    <div class="row mb-3">
        <div class="col-2">
            <label for="">Mậu khẩu cũ</label>
        </div>
        <div class="col-10">
            <input type="password" name="old_password" id="">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Mật khẩu mới</lable>
        </div>
        <div class="col-10">
            <input type="password" name="password" id="">

            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Mật khẩu mới xác nhận</lable>
        </div>
        <div class="col-10">
            <input type="password" name="password_confirmation" id="">
            
            @error('password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <button class="change-password-btn mb-3" type="submit">Lưu lại</button>

</form>