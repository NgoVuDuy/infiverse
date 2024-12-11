
<div class="col-12">

    <div class="nav-course-mgmt">

        <span class="item">
            <h6 class="teacher-course" style="">Các khóa học của tôi</h6>

        </span>
        
        <span class="item">

            <h6 class="overview" style="color: #198754;">Tổng quan</h6>

        </span>
    </div>
    <div class="row">

        <main class="ms-sm-auto col-12">

            <div class="row">
                <div class="col-12 mt-5">

                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-md-4 col-7">

                            <button class="sum-btn sum-btn-item1">
                                <img src="{{ asset('images/icon/students.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Học viên</span>
                                <p> {{ $studentCount }}</p>
                            </button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-7">
                            <button class="sum-btn sum-btn-item2">
                                <img src="{{ asset('images/icon/books.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Khóa học</span>
                                <p> {{ $courseCount }}</p>
                            </button>

                        </div>
                        <div class="col-lg-4 col-md-4 col-7">
                            <button class="sum-btn sum-btn-item3">
                                <img src="{{ asset('images/icon/comment.png') }}" alt="Bootstrap" width="36" height="36">
                                <span>Bình luận</span>
                                <p> {{ $reviewCount }}</p>
                            </button>

                        </div>

                    </div>
                    <div class="row mt-5">

                        <div class="new-student-table">

                            <div class="table-title mb-3">

                                <span>Học viên mới </span>
                                <img src="{{ asset('images/icon/new.png') }}" alt="Bootstrap" width="32" height="32">
                            </div>


                            <div class="table-container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th style="width: 35%;">Tên học viên</th>
                                            <th style="width: 30%;">Khóa học đã tham gia</th>
                                            <th style="width: 20%;">Thời gian tham gia</th>
                                            <th style="width: 15%;">Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                        @foreach ($course->users as $student)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($student->user_img) }}" alt="Bootstrap" width="30" height="30">
                                                {{ $student->fullname }}
                                            </td>
                                            <td>
                                                {{ $course->course_name }}
                                            </td>
                                            <td>
                                                {{ $student->pivot->created_at }}
                                            </td>
                                            <td>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#{{ $student->id }}">
                                                    <button class="new-student-details">Chi tiết</button>
                                                </a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin học viên</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">

                                                            <div class="col-12">
                                                                <div class="user-cover p-3">

                                                                    <div class="col-12 mb-3 d-flex flex-column align-items-center">

                                                                        <h5>{{ $student->fullname }}</h5>

                                                                        <img class="rounded-circle" src="{{ asset($student->user_img) }}" alt="" width="100px" height="100px">


                                                                    </div>

                                                                    <hr>

                                                                    <div class="col-12">
                                                                        <div class="user-information">


                                                                            <div class="user-profile">

                                                                                <p><span>Số điện thoại</span>{{ $student->phone_number }}</p>
                                                                                <p><span>Địa chỉ Email</span>{{ $student->email }}</p>
                                                                                <p><span>Liên hệ</span><a href="{{ Auth::user()->contact }}">{{ Auth::user()->contact }}</a></p>
                                                                                <p><span>Mô tả bản thân</span>{{ $student->desc_user }}</p>
                                                                                <p><span>Thành tích</span>{{ $student->achievenment }}</p>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>

                    </div>

                </div>

            </div>



        </main>
    </div>
</div>

<script src="{{ asset('js/ajax/overview.js') }}"></script>
<script src="{{ asset('js/ajax/teacher-course.js') }}"></script>