@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Footer Top Section</h1>
        @if(!$footerTopSection)
            <a href="{{ route('admin.footer-top-section.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Section</a>
        @else
            <a href="{{ route('admin.footer-top-section.edit', $footerTopSection->id) }}" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Edit Section</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($footerTopSection)
        <div class="card">
            <div class="card-body">
                <h5>Eyebrow Text: {{ $footerTopSection->eyebrow_text ?? 'Not set' }}</h5>
                <h5>Main Title: {{ $footerTopSection->main_title ?? 'Not set' }}</h5>
                <h5>Main Title Highlight: {{ $footerTopSection->main_title_highlight ?? 'Not set' }}</h5>
                <p><strong>Description:</strong> {{ $footerTopSection->description ?? 'Not set' }}</p>
                <p><strong>Button Text:</strong> {{ $footerTopSection->button_text ?? 'Not set' }}</p>
                <p><strong>Button URL:</strong> {{ $footerTopSection->button_url ?? 'Not set' }}</p>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body text-center">
                <h5>No Footer Top Section Created Yet</h5>
                <p>Create your first Footer Top Section to customize the footer call-to-action section.</p>
                <a href="{{ route('admin.footer-top-section.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Now</a>
            </div>
        </div>
    @endif
</div>
@endsection