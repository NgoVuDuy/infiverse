$(document).ready(function() {

    $('#user-information').on('click', function() {


        $.ajax({

            url: "/user-details",
            type: "GET",
            success: function(response) {

                $('.user-cover').html(response)
            },

            error: function() {

                console.log("Lỗi hiển thị chi tiết user")
            }
        })
    })
})