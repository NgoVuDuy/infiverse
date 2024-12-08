$(document).ready(function() {

    $('.teacher-course').on('click', function() {


        $.ajax({

            url: "/teacher-course",
            type: "GET",
            success: function(response) {

                $('.course-row').html(response);
                
            },

            error: function(response) {

                console.log("Lỗi (Overview)")
            }
        })
    })

}) 