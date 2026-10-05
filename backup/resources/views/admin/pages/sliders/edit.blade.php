@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Edit Slider</h4>
        <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" value="{{ old('title', $slider->title) }}" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Slug</label>
                            <input type="hidden" name="slug" value="{{ old('slug', $slider->slug) }}" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4">{{ old('description', $slider->description) }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Button Text</label>
                            <input type="text" name="button_text" value="{{ old('button_text', $slider->button_text) }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Button URL</label>
                            <input type="url" name="button_url" value="{{ old('button_url', $slider->button_url) }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                            @if($slider->image_path)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$slider->image_path) }}" alt="{{ $slider->title }}" style="width: 150px; height: auto;">
                            </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Active</label>
                            <select name="is_active" class="form-select">
                                <option value="1" {{ old('is_active', $slider->is_active) ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('is_active', $slider->is_active) ? '' : 'selected' }}>No</option>
                            </select>
                        </div>
                    
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


