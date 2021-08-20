<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session()->has('success'))
    <script>
        Swal.fire({
            text: '{{ session()->get('success') }}',
            icon: 'success',
            timer: 2000
        });
    </script>
@endif

@if (session()->has('failed'))
    <script>
        Swal.fire({
            text: '{{ session()->get('failed') }}',
            icon: 'error',
            timer: 2000
        });
    </script>
@endif
