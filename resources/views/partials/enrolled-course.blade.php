<!-- <div class="row">

    @foreach($courses as $course)

    <div class="col-lg-3 col-md-4 col-6 course-cover">

        <div class="course">

            <img src="{{ asset($course->img) }}" alt="" width="100%" height="65%">

            <p class="course-name">{{ $course->course_name }}</p>

            <a class="course-link" href="{{ route('course-details', $course->id) }}">

                <button class="join-in-btn">Chi tiết</button>
            </a>

            <a class="leave-course-link" data-id="{{ $course->id }}">

                <button class="leave-course-btn">Rời khỏi</button>

            </a>
        </div>

    </div>

    @endforeach
</div>
<!-- 
<script>
    courseIdUrl = "{{ route('leave-course', $course->id) }}"
</script> -->

<script src="{{ asset('js/ajax/leave-course.js') }}"></script> -->