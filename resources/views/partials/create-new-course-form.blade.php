<form action="/create-new-course" method="post" class="edit-form" enctype="multipart/form-data">
    
    @csrf
    <div class="row mb-3">


        <div class="user-img-change-cover">


            <img style="box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);" id="user-img" class="" src="{{ asset('images/icon/image.png')  }}" alt="" width="240px" height="150px">

            <label class="mt-4 user-img-change-btn" for="user-img-input">Tải lên ảnh khóa học</label>

            <input type="file" id="user-img-input" accept="image/*" class="d-none" name="course-img">
        </div>

    </div>

    <hr>

    <div class="row mb-3">
        <div class="col-2"><label for="">Tên khóa học <span style="color: red; font-size: 20px;">*</span></label></div>
        <div class="col-10"><input type="text" name="coursename" id="" value=""></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Mô tả sơ lược khóa học <span style="color: red; font-size: 20px;">*</span></lable>
        </div>
        <div class="col-10"><textarea type="text" name="description" id="" value=""></textarea></div>
    </div>
    <div class="row mb-3">
        <div class="col-2">
            <lable>Mô tả chi tiết khóa học <span style="color: red; font-size: 20px;">*</span></lable>
        </div>
        <div class="col-10"><textarea type="text" name="description_details" id="" value=""></textarea></div>
    </div>

    <div class="row mb-3">
        <div class="col-2">
            <lable>Mật khẩu ghi danh</lable>
        </div>
        <div class="col-10"><input type="password" name="course_code" id="" value=""></div>
    </div>

    <button type="submit" class="finish-btn">Hoàn thành</button>
</form>

<script src="{{ asset('js/load-user-img.js') }}"></script>
