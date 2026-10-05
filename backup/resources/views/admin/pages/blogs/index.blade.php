@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Blogs</h4>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Add Blog</a>
    </div>

    <!-- @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif -->

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Heading</th>
                        <th>Published</th>
                        <th>Updated</th>
                        <th style="width:180px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->heading }}</td>
                            <td>
                                <span class="badge bg-{{ $blog->is_published ? 'success' : 'secondary' }}">
                                    {{ $blog->is_published ? 'Yes' : 'No' }}
                                </span>
                            </td>
                            <td>{{ $blog->updated_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-sm btn-green"><i class="fas fa-edit"></i> Edit</a>

                                {{-- ✅ Delete form with SweetAlert --}}
                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center">No blogs found.</td></tr>
                    @endforelse
                </tbody>
            </table>
            {{ $blogs->links() }}
        </div>
    </div>
</div>
@endsection

{{-- ✅ SweetAlert --}}
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.btn-delete').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            let form = this.closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "This blog will be permanently deleted!",
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
