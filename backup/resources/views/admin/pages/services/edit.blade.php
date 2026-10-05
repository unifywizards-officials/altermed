@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Edit Service</h4>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" value="{{ old('title', $service->title) }}" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <!-- <label class="form-label">Slug</label> -->
                            <input type="hidden" name="slug" value="{{ old('slug', $service->slug) }}" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Details</label>
                            <textarea name="details" class="form-control" rows="4">{{ old('details', $service->details) }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                            @if($service->image_path)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$service->image_path) }}" alt="{{ $service->title }}" style="width: 150px; height: auto;">
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Icon</label>
                            <input type="text" name="icon" value="{{ old('icon', $service->icon) }}" class="form-control" placeholder="e.g., fa fa-briefcase">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Active</label>
                            <select name="is_active" class="form-select">
                                <option value="1" {{ old('is_active', $service->is_active) ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('is_active', $service->is_active) ? '' : 'selected' }}>No</option>
                            </select>
                        </div>
                        <!-- <div class="col-md-3">
                            <label class="form-label">Display Order</label>
                            <input type="number" name="display_order" value="{{ old('display_order', $service->display_order) }}" class="form-control" min="0">
                        </div> -->
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection





