@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Add Service</h4>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <!-- <label class="form-label">Slug</label> -->
                            <input type="hidden" name="slug" value="{{ old('slug') }}" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Details</label>
                            <textarea name="details" class="form-control" rows="4">{{ old('details') }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Icon</label>
                            <input type="text" name="icon" value="{{ old('icon') }}" class="form-control" placeholder="e.g., fa fa-briefcase">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Active</label>
                            <select name="is_active" class="form-select">
                                <option value="1" {{ old('is_active', 1) ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('is_active', 1) ? '' : 'selected' }}>No</option>
                            </select>
                        </div>
                        <!-- <div class="col-md-3">
                            <label class="form-label">Display Order</label>
                            <input type="number" name="display_order" value="{{ old('display_order', 0) }}" class="form-control" min="0">
                        </div> -->
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" style="background-color: #2b2b5e;border-color: #2b2b5e;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection





