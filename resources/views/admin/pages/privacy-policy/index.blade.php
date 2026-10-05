@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Privacy Policy</h1>
        @if(!$privacyPolicy)
            <a href="{{ route('admin.privacy-policy.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Privacy Policy</a>
        @else
            <a href="{{ route('admin.privacy-policy.edit', $privacyPolicy->id) }}" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Edit Privacy Policy</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($privacyPolicy)
        <div class="card">
            <div class="card-body">
                <h5>Title: {{ $privacyPolicy->title ?? 'Not set' }}</h5>
                <div><strong>Content:</strong></div>
                <div>{!! $privacyPolicy->content !!}</div>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body text-center">
                <h5>No Privacy Policy Created Yet</h5>
                <p>Create your first Privacy Policy to manage legal content.</p>
                <a href="{{ route('admin.privacy-policy.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Now</a>
            </div>
        </div>
    @endif
</div>
@endsection