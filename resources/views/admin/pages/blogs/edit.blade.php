@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h4 class="mb-3">Edit Blog</h4>

    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Fix the errors:</strong>
            <ul class="mb-0">
                @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select name="category_id" id="category_id" class="form-control" required>
        <option value="">-- Select Category --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" 
                {{ old('category_id', $blog->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

        <div class="card mb-3">
            <div class="card-body row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name (Author/Label)</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $blog->name) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Heading</label>
                    <input type="text" name="heading" class="form-control" value="{{ old('heading', $blog->heading) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Cover Image</label>
                    <input type="file" name="image" class="form-control">
                    @if($blog->image)
                        <img src="{{ asset('storage/'.$blog->image) }}" class="mt-2 rounded" width="140">
                    @endif
                </div>

                <div class="col-12">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="3">{{ old('short_description', $blog->short_description) }}</textarea>
                </div>

                <div class="col-12">
                    <label class="form-label">Long Description *</label>
                    <textarea id="long_description" name="long_description" class="form-control" rows="8" required>{{ old('long_description', $blog->long_description) }}</textarea>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">SEO</div>
            <div class="card-body row g-3">
                <div class="col-md-4">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title) }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $blog->meta_keywords) }}" placeholder="keyword1, keyword2">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Meta Description</label>
                    <input type="text" name="meta_description" class="form-control" value="{{ old('meta_description', $blog->meta_description) }}">
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">Publish</div>
            <div class="card-body row g-3">
                <div class="col-md-4">
                    <label class="form-label d-block">Published?</label>
                    <input type="checkbox" name="is_published" value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}> Yes
                </div>
                <div class="col-md-8">
                    <label class="form-label">Published At (optional)</label>
                    <input type="datetime-local" name="published_at" class="form-control"
                        value="{{ old('published_at', optional($blog->published_at)->format('Y-m-d\TH:i')) }}">
                </div>
            </div>
        </div>

        <div class="text-end">
            <button class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" />
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function(){
    $('#long_description').summernote({
        placeholder: 'Write blog content...',
        height: 300
    });
});
</script>
@endpush
