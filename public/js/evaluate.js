$(document).ready(function() {

    // $('.star').hover(


    //     // Khi hover
    //     function() {

    //         $(this).prevAll('.star').addClass('hover')
    //         $(this).addClass('hover')

    //     },

    //     // Khi không hover
    //     function() {

    //         $(this).prevAll('.star').removeClass('hover')
    //         $(this).removeClass('hover')

    //     }

    // );

    $('.star').on('click', function() {

        $('.star').removeClass('yellow');
        $(this).prevAll('.star').addClass('yellow')
        $(this).addClass('yellow')

    })


})