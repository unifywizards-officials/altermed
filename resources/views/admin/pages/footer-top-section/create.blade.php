@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Create Footer Top Section</h1>
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
            <form action="{{ route('admin.footer-top-section.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Eyebrow Text</label>
                            <input type="text" name="eyebrow_text" value="{{ old('eyebrow_text', 'Get Started Today') }}" class="form-control" placeholder="e.g., Get Started Today">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Main Title</label>
                            <input type="text" name="main_title" value="{{ old('main_title', 'Credentialing with a') }}" class="form-control" placeholder="e.g., Credentialing with a">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Main Title Highlight</label>
                    <input type="text" name="main_title_highlight" value="{{ old('main_title_highlight', 'Competitive Edge') }}" class="form-control" placeholder="e.g., Competitive Edge">
                </div>

                <div class="form-group mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Description for the footer top section">{{ old('description', 'Our professional credential services are fast, accurate, and insurer-aligned, helping you avoid missed revenue.') }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Button Text</label>
                            <input type="text" name="button_text" value="{{ old('button_text', 'Book an Appointment') }}" class="form-control" placeholder="e.g., Book an Appointment">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>Button URL</label>
                            <input type="text" name="button_url" value="{{ old('button_url', '/contact') }}" class="form-control" placeholder="e.g., /contact">
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Section</button>
                    <a href="{{ route('admin.footer-top-section.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection