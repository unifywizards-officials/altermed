@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Edit Footer Top Section</h1>
        <a href="{{ route('admin.footer-top-section.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
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
            <form action="{{ route('admin.footer-top-section.update', $footerTopSection->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Eyebrow Text</label>
                            <input type="text" name="eyebrow_text" value="{{ old('eyebrow_text', $footerTopSection->eyebrow_text) }}" class="form-control" placeholder="e.g., Get Started Today">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Main Title</label>
                            <input type="text" name="main_title" value="{{ old('main_title', $footerTopSection->main_title) }}" class="form-control" placeholder="e.g., Credentialing with a">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Main Title Highlight</label>
                    <input type="text" name="main_title_highlight" value="{{ old('main_title_highlight', $footerTopSection->main_title_highlight) }}" class="form-control" placeholder="e.g., Competitive Edge">
                </div>

                <div class="form-group mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Description for the footer top section">{{ old('description', $footerTopSection->description) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Button Text</label>
                            <input type="text" name="button_text" value="{{ old('button_text', $footerTopSection->button_text) }}" class="form-control" placeholder="e.g., Book an Appointment">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Button URL</label>
                            <input type="text" name="button_url" value="{{ old('button_url', $footerTopSection->button_url) }}" class="form-control" placeholder="e.g., /contact">
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update Section</button>
                    <a href="{{ route('admin.footer-top-section.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection