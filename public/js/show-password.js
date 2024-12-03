$(document).ready(function() {

    $(".show-psw").on('click', function() {

        var pswField = $("#password")

        if(pswField.attr('type') === 'password') {
            pswField.attr('type', 'text')
        } else {
            pswField.attr('type', 'password')
        }
        
    })

    $(".show-psw-cfmt").on('click', function() {

        var pswConfirmationField = $("#password_confirmation")

        if(pswConfirmationField.attr('type') === 'password') {
            pswConfirmationField.attr('type', 'text')
        } else {
            pswConfirmationField.attr('type', 'password')
        }
        
    })

    $(".show-psw-old").on('click', function() {

        var pswField = $("#old_password")

        if(pswField.attr('type') === 'password') {
            pswField.attr('type', 'text')
        } else {
            pswField.attr('type', 'password')
        }
        
    })
})