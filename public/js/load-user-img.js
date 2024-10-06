$(document).ready(function() {


    $('#user-img-input').on('change', function(event) {

        const file = event.target.files[0];

        if(file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                $('#user-img').attr('src', e.target.result)
            }

            reader.readAsDataURL(file)
        }

    })
})