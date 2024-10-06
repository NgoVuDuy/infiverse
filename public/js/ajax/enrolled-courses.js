$(document).ready(function() {


    $('#enrolled-courses').on('click', function() {

        $.ajax({

            url: "/load-courses",
            type: "GET",
            success: function(response) {
                $('.user-cover').html(response)
            },

            error: function() {
                console.log("Lỗi tải khóa học")
            }
        })
    })
})