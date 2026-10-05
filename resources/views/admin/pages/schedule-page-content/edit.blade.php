@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Edit Schedule Page Content</h4>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back to Dashboard</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('admin.schedule-page-content.update', $schedulePageContent) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Heading</label>
                            <input type="text" name="heading" value="{{ old('heading', $schedulePageContent->heading) }}" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $schedulePageContent->description) }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Form Title</label>
                            <input type="text" name="form_title" value="{{ old('form_title', $schedulePageContent->form_title) }}" class="form-control" required>
                        </div>

                        <div class="col-12">
                            <h5>SEO Meta Information</h5>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ old('meta_title', $schedulePageContent->meta_title) }}" class="form-control" maxlength="255">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Keywords</label>
                            <textarea name="meta_keywords" class="form-control" rows="3">{{ old('meta_keywords', $schedulePageContent->meta_keywords) }}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3" maxlength="500">{{ old('meta_description', $schedulePageContent->meta_description) }}</textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update Content</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection