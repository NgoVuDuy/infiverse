$(document).ready(function() {

    $('.leave-course-link').on('click', function() {

        var course_id = $(this).attr('data-id')

        $.ajax({

            url: "/" + course_id + "/leave-course",
            type: "GET",
            success: function(response) {

                $('.user-cover').html(response);
            },

            error: function(response) {
                console.log("Lỗi rời khỏi khóa học")
            }
        })
    })

}) 