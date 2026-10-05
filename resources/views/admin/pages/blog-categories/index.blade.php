@extends('admin.layouts.app')

@section('content')
<div class="card card-elevated">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Blog Categories</h4>
        <a href="{{ route('admin.blog-categories.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>

    <div class="card-body">
       

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th style="width: 70px;">#</th>
                        <th>Name</th>
                        <th style="width: 120px;">Status</th>
                        <th style="width: 200px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ ($categories->firstItem() ?? 1) + $loop->index }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                @if($category->status)
                                    <span class="badge bg-success px-3 py-2">Active</span>
                                @else
                                    <span class="badge bg-danger px-3 py-2">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.blog-categories.edit', $category->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('admin.blog-categories.destroy', $category->id) }}"
                                      method="POST"
                                      class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger delete-btn" type="button">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                No categories found. Click <b>Add New</b> to create one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if(method_exists($categories, 'links'))
            <div class="mt-3">
                {{ $categories->links() }}
            </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            let form = this.closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "This category will be deleted permanently!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!',
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
@endpush
