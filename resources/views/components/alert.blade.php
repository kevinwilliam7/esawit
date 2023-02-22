@if (session()->has('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ session()->get("success") }}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif

@if (session()->has('error'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '{{ session()->get("error") }}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif
