<div>

    

    <script type="module">
        // import Swal from 'sweetalert2'

        Swal.fire({

            title: 'Thông báo',
            text: '{{ $text }}',
            icon: '{{ $icon }}',
            confirmButtonText: '{{ $button }}',
            footer: '{{ $footer }}'
        })
    </script>
</div>