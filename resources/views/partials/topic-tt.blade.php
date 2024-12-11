<div class="col-12 mb-4">

    <div class="row course-topic-cover">
        <div class="col-2 course-topic all-course ">Tất cả khóa học</div>
        <div class="col-2 course-topic ltcs">Lập trình cơ sở</div>
        <div class="col-2 course-topic ltnc">Lập trình nâng cao</div>
        <div class="col-2 course-topic tt hovered">Thuật toán</div>
        <div class="col-2 course-topic gqvd">Giải quyết vấn đề</div>
        <div class="col-2 course-topic remaining ">Khác</div>

    </div>
</div>

@foreach($courses as $course)

<div class="col-lg-3 col-md-4 col-sm-6 col-8 course-cover">

    <div class="course">

        <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">

        <a href="{{ route('course-details', $course->id) }}" class="course-name">{{ $course->course_name }}</a>

        @if($course->has_joined)

        <p class="has-joined-text">Đã tham gia</p>

        @endif

        <a class="course-link" href="{{ route('course-details', $course->id) }}">

            <button class="join-in-btn">Chi tiết</button>
        </a>
    </div>


</div>

@endforeach

<script src="{{ asset('js/ajax/topic.js') }}"></script>
