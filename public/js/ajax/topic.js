$(document).ready(function () {



    $('.ltcs').on('click', function () {

        $.ajax({

            url: "/ltcs",
            type: "GET",
            success: function (response) {

                $('.course-row').html(response);


            },

            error: function (response) {

                console.log("Topic error")
            }
        })
    })


    $('.ltnc').on('click', function () {

        $.ajax({

            url: "/ltnc",
            type: "GET",
            success: function (response) {

                $('.course-row').html(response);


            },

            error: function (response) {

                console.log("Topic error")
            }
        })
    })


    $('.tt').on('click', function () {

        $.ajax({

            url: "/tt",
            type: "GET",
            success: function (response) {

                $('.course-row').html(response);


            },

            error: function (response) {

                console.log("Topic error")
            }
        })
    })


    $('.gqvd').on('click', function () {

        $.ajax({

            url: "/gqvd",
            type: "GET",
            success: function (response) {

                $('.course-row').html(response);


            },

            error: function (response) {

                console.log("Topic error")
            }
        })
    })


    $('.all-course').on('click', function () {

        $.ajax({

            url: "/all-course",
            type: "GET",
            success: function (response) {

                $('.course-row').html(response);


            },

            error: function (response) {

                console.log("Topic error")
            }
        })
    })


    $('.remaining').on('click', function () {

        $.ajax({

            url: "/remaining",
            type: "GET",
            success: function (response) {

                $('.course-row').html(response);


            },

            error: function (response) {

                console.log("Topic error")
            }
        })
    })

}) 