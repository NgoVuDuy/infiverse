@extends('layouts.main')

@section('title', 'Khóa học')

@section('css')

<link rel="stylesheet" href="{{ asset('css/user/course.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive/course.css') }}">

@endsection

@section('content')

<div class="container">


    <div class="row g-2 course-row mt-5">

    </div>
</div>
@endsection


@section('js')

<script>
    $(document).ready(function() {
        $.ajax({

            url: "/all-course",
            type: "GET",
            success: function(response) {

                $('.course-row').html(response);


            },

            error: function(response) {

                console.log("Topic error")
            }
        })
    })
</script>

<script src="{{ asset('js/ajax/topic.js') }}"></script>

@endsection