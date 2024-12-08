$(document).ready(function() {

    $('.overview').on('click', function() {

        $.ajax({

            url: "/overview",
            type: "GET",
            success: function(response) {

                $('.course-row').html(response);

            },

            error: function(response) {

                console.log("Lỗi (teacher-course)")
            }
        })
    })

}) 