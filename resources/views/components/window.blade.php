<div>

    <script type="module">
        // import Swal from 'sweetalert2'

        Swal.fire({

            title: 'Thông báo',
            text: '{{ $text }}',
            icon: '{{ $icon }}',
            confirmButtonText: '{{ $button }}',
            footer: '{{ $footer }}',
            customClass: {
                confirmButton: 'main-btn', // Thêm lớp CSS tùy chỉnh cho nút "OK"
            }
        })
    </script>
</div>