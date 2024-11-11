<div class="sidebar border border-right col-3 p-0 bg-body-tertiary ">

    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Infiverse</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>

        <div class="side-cover d-md-flex flex-column pt-lg-3 pb-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="side-option d-flex align-items-center gap-2" aria-current="page" href="/teacher">

                        <span>

                            <img src="{{ asset('images/icon/home.png') }}" alt="Bootstrap" width="36" height="36">
                            Trang chủ
                        </span>
                        <!-- <img class="right-arrow" src="{{ asset('images/icon/right.png') }}" alt="Bootstrap" width="36" height="36"> -->

                        {{ $home }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="side-option d-flex align-items-center gap-2" aria-current="page" href="/courses-mgmt">

                        <span>

                            <img src="{{ asset('images/icon/books.png') }}" alt="Bootstrap" width="36" height="36">
                            Quản lý khóa học
                        </span>

                        {{ $course }}

                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="side-option d-flex align-items-center gap-2" href="/student-mgmt">

                        <span>

                            <img src="{{ asset('images/icon/students.png') }}" alt="Bootstrap" width="36" height="36">
                            Quản lý học viên

                        </span>

                        {{ $student }}

                    </a>
                </li>
                <li class="nav-item">
                    <a class="side-option d-flex align-items-center gap-2" href="/comment-mgmt">

                        <span>
                            <img src="{{ asset('images/icon/comment.png') }}" alt="Bootstrap" width="36" height="36">

                            Đánh giá

                        </span>

                        {{ $evaluate }}

                    </a>
                </li> -->


                <li class="nav-item">
                    <a class="side-option d-flex align-items-center gap-2" href="/profile">

                        <span>
                            <img src="{{ asset('images/icon/profile.png') }}" alt="Bootstrap" width="36" height="36">

                            Hồ sơ

                        </span>

                        {{ $profile }}

                    </a>
                </li>
                <hr class="my-3">

                <li class="nav-item">
                    <a class="side-option d-flex align-items-center gap-2" href="/logout-show">

                        <span>
                            <img src="{{ asset('images/icon/logout.png') }}" alt="Bootstrap" width="36" height="36">

                            Đăng xuất

                        </span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
