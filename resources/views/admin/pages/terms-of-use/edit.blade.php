@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Edit Terms of Use</h1>
        <a href="{{ route('admin.terms-of-use.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.terms-of-use.update', $termsOfUse->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ old('title', $termsOfUse->title) }}" class="form-control" placeholder="e.g., Terms of Use">
                </div>

                <div class="form-group mb-3">
                    <label>Content</label>
                    <textarea name="content" id="content" class="form-control summernote" rows="10" placeholder="Enter terms of use content">{{ old('content', $termsOfUse->content) }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update Terms of Use</button>
                    <a href="{{ route('admin.terms-of-use.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.summernote').summernote({
            placeholder: 'Write terms of use content...',
            tabsize: 2,
            height: 400,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
    });
</script>
@endpush
@endsection