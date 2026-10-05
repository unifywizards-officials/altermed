@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Add Why Choose</h4>
        <a href="{{ route('admin.whychoose.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.whychoose.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
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
                            <label class="form-label">Icon (class or name)</label>
                            <input type="text" name="icon" value="{{ old('icon') }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">URL</label>
                            <input type="url" name="url" value="{{ old('url') }}" class="form-control">
                        </div>
                        <div class="col-md-3 d-flex align-items-center">
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" checked>
                                <label class="form-check-label" for="is_active">Active</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Display Order</label>
                            <input type="number" name="display_order" value="{{ old('display_order', 0) }}" class="form-control" min="0">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


