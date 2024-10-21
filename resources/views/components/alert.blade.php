<div>

    <script>
        Toastify({
            text: "{{ $text }}",
            duration: 10000,
            // destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "{{ $color }}",
            },
            onClick: function() {} // Callback after click
        }).showToast();
    </script>

</div>