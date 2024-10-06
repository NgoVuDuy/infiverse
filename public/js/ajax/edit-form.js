$(document).ready(function() {

    $('.icon-edit').on('click', function() {

        $.ajax({

            url: "/load-edit-form",
            type: "GET",
            success: function(response) {

                $('.user-cover').html(response);
            },

            error: function(response) {
                console.log("Lỗi tải edit form")
            }
        })
    })

}) 