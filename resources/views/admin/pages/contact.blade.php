@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Contacts</h4>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>
                                        @if($contact->message)
                                            {{ Str::limit($contact->message, 50) }}
                                        @else
                                            <span class="text-muted">No message</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger delete-contact"
                                                data-id="{{ $contact->id }}"
                                                data-name="{{ $contact->name }}">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Contact found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- ✅ Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $contacts->links('vendor.pagination.bootstrap-5') }}
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Delete Form (Hidden) -->
<form id="delete-form" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
@endsection

@push('css')
<style>
    /* Custom Pagination Styling */
    .pagination {
        gap: 8px;
    }

    .pagination .page-link {
        border-radius: 50% !important;
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
        color: #2b2b5e;
        border: 1px solid #ddd;
        transition: all 0.3s ease;
    }

    .pagination .page-link:hover {
        background: #2b2b5e;
        color: #fff;
        border-color: #2b2b5e;
    }

    .pagination .active .page-link {
        background: #2b2b5e !important;
        border-color: #2b2b5e !important;
        color: #fff !important;
    }

    .pagination .disabled .page-link {
        background: #f1f1f1;
        color: #999;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Delete confirmation with SweetAlert
    document.querySelectorAll('.delete-contact').forEach(button => {
        button.addEventListener('click', function() {
            const clientId = this.getAttribute('data-id');
            const clientName = this.getAttribute('data-name');
            
            Swal.fire({
                title: 'Are you sure?',
                text: `Do you want to delete "${clientName}"?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('delete-form');
                    form.action = `/admin/contact/${clientId}`;
                    form.submit();
                }
            });
        });
    });

    // Auto-hide success alerts after 3 seconds
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 3000);
});
</script>
@endpush
