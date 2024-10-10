<div>


    <script type="module">
        // import Swal from 'sweetalert2'

        Swal.fire({
            title: "Thông báo",
            text: "{{ $text }}",
            icon: "{{ $icon }}",
            showCancelButton: "{{ $cancelButton }}",
            confirmButtonText: "OK",
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

                window.location.href = "{{ $path }}";
            }
        });
    </script>
</div>