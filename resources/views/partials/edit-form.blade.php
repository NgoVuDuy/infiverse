<form action="" class="edit-form">

    @csrf
    <div class="row mb-3">


        <div class="user-img-change-cover">

            <img id="user-img" class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="100px" height="100px">

            <label class="user-img-change-btn" for="user-img-input">Thay đổi</label>

            <input type="file" id="user-img-input" accept="image/*" class="d-none">
        </div>

    </div>

    <hr>

    <div class="row mb-3">
        <div class="col-2"><label for="">Họ tên</label></div>
        <div class="col-10"><input type="text" name="" id=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Số điện thoại</lable>
        </div>
        <div class="col-10"><input type="tel" name="" id=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Địa chỉ email</lable>
        </div>
        <div class="col-10"><input type="email" name="" id=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Quốc gia</lable>
        </div>
        <div class="col-10"><select name="" id="">
                <option value="">Vietnam</option>
                <option value="">Nhatban</option>

            </select></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Liên hệ</lable>
        </div>
        <div class="col-10"><input type="text" name="" id=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Mô tả bản thân</lable>
        </div>
        <div class="col-10"><textarea name="" id=""></textarea></div>
    </div>

    <div class="row mb-3">

        <div class="col-2">
            <lable>Thành tích</lable>
        </div>

        <div class="col-10">
            <textarea name="" id=""></textarea>

        </div>
    </div>
    <button class="finish-btn">Hoàn thành</button>
</form>

<script src="{{ asset('js/load-user-img.js') }}"></script>
