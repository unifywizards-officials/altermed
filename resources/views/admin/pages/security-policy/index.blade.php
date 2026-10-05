@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Security Policy</h1>
        @if(!$securityPolicy)
            <a href="{{ route('admin.security-policy.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Security Policy</a>
        @else
            <a href="{{ route('admin.security-policy.edit', $securityPolicy->id) }}" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Edit Security Policy</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($securityPolicy)
        <div class="card">
            <div class="card-body">
                <h5>Title: {{ $securityPolicy->title ?? 'Not set' }}</h5>
                <div><strong>Content:</strong></div>
                <div>{!! $securityPolicy->content !!}</div>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body text-center">
                <h5>No Security Policy Created Yet</h5>
                <p>Create your first Security Policy to manage legal content.</p>
                <a href="{{ route('admin.security-policy.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Now</a>
            </div>
        </div>
    @endif
</div>
@endsection