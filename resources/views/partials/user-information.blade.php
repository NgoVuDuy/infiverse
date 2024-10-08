<div class="col-1 mb-3">

    <img class="rounded-circle" src="{{ asset(Auth::user()->user_img) }}" alt="" width="100px" height="100px">
    <!-- <img class="rounded-circle" src="{{ asset('images/courses/cpp-course.png') }}" alt="" width="150px" height="150px"> -->



</div>

<div class="col-11">
    <div class="user-information">


        <p><span>Họ tên</span>{{ Auth::user()->fullname }}</p>
        <p><span>Số điện thoại</span>{{ Auth::user()->phone_number }}</p>
        <p><span>Địa chỉ Email</span>{{ Auth::user()->email }}</p>
        <p><span>Liên hệ</span>{{ Auth::user()->contact }}</p>
        <p><span>Mô tả bản thân</span>{{ Auth::user()->desc_user }}</p>
        <p><span>Thành tích</span>{{ Auth::user()->achievenment }}</p>

    </div>
</div>

<div class="icon-edit">


    <img src="{{ asset('images/icon/edit.png') }}" alt="Edit">
</div>

<script src="{{ asset('js/ajax/edit-form.js') }}"></script>