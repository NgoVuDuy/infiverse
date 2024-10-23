$(document).ready(function() {

    $('.create-new-course-btn').on('click', function() {

        $.ajax({

            url: "/create-new-course",
            type: "GET",
            success: function(response) {

                $('.create-new-course-form').html(response);
            },

            error: function(response) {
                console.log("Lỗi tải form tạo mới khóa học")
            }
        })
    })

}) 