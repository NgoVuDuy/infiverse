<div class="col-12">

    <div class="nav-course-mgmt">

        <span class="item">
            <h6 class="teacher-course" style="color: #198754;">Các khóa học của tôi</h6>

        </span>
        
        <span class="item">

            <h6 class="overview" style="">Tổng quan</h6>

        </span>
    </div>

    <div class="row teacher-course-cover">

        @foreach($courses as $course)


        <div class="col-lg-3 col-md-4 col-sm-6 col-8 course-cover">

            <div class="course">

                <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">

                <a href="{{ route('course-details', $course->id) }}" class="course-name">{{ $course->course_name }}</a>

                <a class="course-link" href="{{ route('teacher-course-details', $course->id) }}">

                    <button class="join-in-btn">Chi tiết</button>
                </a>

                <a class="delete-course" href="{{ route('delete-course-cfmt', $course->id) }}">

                    <button class="delete-course-btn">Xóa</button>

                </a>
            </div>


        </div>

        @endforeach
    </div>
</div>

<script src="{{ asset('js/ajax/overview.js') }}"></script>
<script src="{{ asset('js/ajax/teacher-course.js') }}"></script>