<div>

    <script type="module">
        // import Swal from 'sweetalert2'

        Swal.fire({
            title: "Thông báo",
            text: "{{ $text }}",
            icon: "{{ $icon }}",
            showCancelButton: true,
            confirmButtonText: "OK",
            customClass: {
                confirmButton: 'main-btn', // Thêm lớp CSS tùy chỉnh cho nút "OK"
                cancelButton : 'btn btn-danger'
            }
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

                window.location.href = "{{ $path }}";
            }
        });
    </script>
</div>