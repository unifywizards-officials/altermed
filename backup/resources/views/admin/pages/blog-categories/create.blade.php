{{-- resources/views/admin/blog_categories/create.blade.php --}}
@extends('admin.layouts.app')

@section('content')
<div class="card card-elevated">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Add Blog Category</h4>
        <a href="{{ route('admin.blog-categories.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to List
        </a>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.blog-categories.store') }}" method="POST" novalidate>
            @csrf

            <div class="mb-3">
                <label class="form-label">Category Name <span class="text-danger">*</span></label>
                <input type="text"
                       name="name"
                       value="{{ old('name') }}"
                       class="form-control @error('name') is-invalid @enderror"
                       placeholder="e.g. Health, Wellness, News"
                       required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">
                    <i class="fas fa-save me-1"></i> Save
                </button>
                <a href="{{ route('admin.blog-categories.index') }}" class="btn btn-light border">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
