<div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <!-- <script type="module">
        // import Swal from 'sweetalert2'

        Swal.fire({
            title: 'Đăng nhập thất bại !',
            text: 'Tên tài khoản hoặc mật khẩu không trùng khớp',
            icon: 'error',
            confirmButtonText: 'Cool'
        })
    </script> -->

    <script>
        Toastify({
            text: "This is a toast",
            duration: 10000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "#2f3c7e",
            },
            onClick: function() {} // Callback after click
        }).showToast();
    </script>

</div>