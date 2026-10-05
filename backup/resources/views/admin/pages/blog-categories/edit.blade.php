{{-- resources/views/admin/blog_categories/edit.blade.php --}}
@extends('admin.layouts.app')

@section('content')
<div class="card card-elevated">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Edit Blog Category</h4>
        <a href="{{ route('admin.blog-categories.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to List
        </a>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.blog-categories.update', $blogCategory->id) }}" method="POST" novalidate>
            @csrf
            @method('PUT')
            

            <div class="mb-3">
                <label class="form-label">Category Name <span class="text-danger">*</span></label>
                <input type="text"
                       name="name"
                       value="{{ old('name', $blogCategory->name) }}"
                       class="form-control @error('name') is-invalid @enderror"
                       required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="1" {{ old('status', $blogCategory->status) ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $blogCategory->status) ? '' : 'selected' }}>Inactive</option>
                </select>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">
                    <i class="fas fa-check me-1"></i> Update
                </button>
                <a href="{{ route('admin.blog-categories.index') }}" class="btn btn-light border">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
