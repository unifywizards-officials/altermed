<!-- ================== BEGIN core-js ================== -->
<script src="/assets/js/vendor.min.js"></script>
<script src="/assets/js/app.min.js"></script>
<!-- ================== END core-js ================== -->

@stack('scripts')

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@php
    $hasErrors = $errors->any();
    $errorHtml = '';
    if ($hasErrors) {
        $errorHtml .= '<ul style="text-align:left; margin:0; padding-left:18px;">';
        foreach ($errors->all() as $err) {
            $errorHtml .= '<li>'.e($err).'</li>';
        }
        $errorHtml .= '</ul>';
    }
@endphp

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Global flash success / error alerts
    @if (session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: @json(session('success')),
        confirmButtonColor: '#3085d6'
    });
    @endif

    @if (session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: @json(session('error')),
        confirmButtonColor: '#d33'
    });
    @endif

    @if ($hasErrors)
    Swal.fire({
        icon: 'error',
        title: 'Validation errors',
        html: @json($errorHtml),
        confirmButtonColor: '#d33'
    });
    @endif

    // Delete confirmation using SweetAlert2
    document.querySelectorAll('form.js-delete-form').forEach(function(form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Delete this slider?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
</script>