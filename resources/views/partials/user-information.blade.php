<div class="col-1 mb-3">

    <img class="rounded-circle" src="{{ asset('images/users/user.png') }}" alt="" width="100px" height="100px">
    <!-- <img class="rounded-circle" src="{{ asset('images/courses/cpp-course.png') }}" alt="" width="150px" height="150px"> -->



</div>

<div class="col-11">
    <div class="user-information">
        <p><span>Họ tên</span>{{ $user->name }}</p>
        <p><span>Số điện thoại</span></p>
        <p><span>Địa chỉ Email</span></p>
        <p><span>Quốc gia</span></p>
        <p><span>Liên hệ</span></p>
        <p><span>Mô tả bản thân</span></p>
        <p><span>Thành tích</span></p>

    </div>
</div>

<div class="icon-edit">


    <img src="{{ asset('images/icon/edit.png') }}" alt="Edit">
</div>

<script src="{{ asset('js/ajax/edit-form.js') }}"></script>