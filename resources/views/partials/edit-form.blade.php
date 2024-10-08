<form action="/update-user" method="post" class="edit-form" enctype="multipart/form-data">

    @csrf
    <div class="row mb-3">


        <div class="user-img-change-cover">

            <img id="user-img" class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="100px" height="100px">

            <label class="user-img-change-btn" for="user-img-input">Thay đổi</label>

            <input type="file" id="user-img-input" accept="image/*" class="d-none" name="user-img">
        </div>

    </div>

    <hr>

    <div class="row mb-3">
        <div class="col-2"><label for="">Họ tên</label></div>
        <div class="col-10"><input type="text" name="username" id=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Số điện thoại</lable>
        </div>
        <div class="col-10"><input type="tel" name="phone-number" id=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Địa chỉ email</lable>
        </div>
        <div class="col-10"><input type="email" name="email" id=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Liên hệ</lable>
        </div>
        <div class="col-10"><input type="text" name="contact" id=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Mô tả bản thân</lable>
        </div>
        <div class="col-10"><textarea name="desc-user" id=""></textarea></div>
    </div>

    <div class="row mb-3">

        <div class="col-2">
            <lable>Thành tích</lable>
        </div>

        <div class="col-10">
            <textarea name="achievenment" id=""></textarea>

        </div>
    </div>
    <button class="finish-btn">Hoàn thành</button>
</form>

<script src="{{ asset('js/load-user-img.js') }}"></script>
