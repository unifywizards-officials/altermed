@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Clients logo</h4>
        <a href="{{ route('admin.clients.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Add Client logo</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif -->
                
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>logo/Image</th>
                                <!-- <th>Name</th>
                                <th>URL</th>
                                <th>Description</th> -->
                                <th>Active</th>
                                <th>Order</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>
                                        @if($client->icon)
                                            <i class="{{ $client->icon }}" style="font-size: 24px; color: #007bff;"></i>
                                        @elseif($client->image_path)
                                            <img src="{{ asset('storage/'.$client->image_path) }}" alt="{{ $client->name }}" style="width: 50%; height: 50px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">No icon/image</span>
                                        @endif
                                    </td>
                                    <!-- <td>{{ $client->name }}</td> -->
                                    <!-- <td>
                                        @if($client->url)
                                            <a href="{{ $client->url }}" target="_blank" class="text-decoration-none">
                                                <i class="fas fa-external-link-alt"></i> Visit
                                            </a>
                                        @else
                                            <span class="text-muted">No URL</span>
                                        @endif
                                    </td> -->
                                    <!-- <td>
                                        @if($client->description)
                                            {{ Str::limit($client->description, 50) }}
                                        @else
                                            <span class="text-muted">No description</span>
                                        @endif
                                    </td> -->
                                    <td>
                                        <span class="badge bg-{{ $client->is_active ? 'success' : 'secondary' }}">
                                            {{ $client->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>{{ $client->display_order }}</td>
                                    <td>
                                        <a href="{{ route('admin.clients.edit', $client) }}" class="btn btn-sm btn-green">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger delete-client" data-id="{{ $client->id }}" data-name="{{ $client->name }}">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No clients found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{ $clients->links() }}
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

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Delete confirmation with SweetAlert
    document.querySelectorAll('.delete-client').forEach(button => {
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
                    form.action = `/admin/clients/${clientId}`;
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
