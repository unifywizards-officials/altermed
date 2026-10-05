@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Terms of Use</h1>
        @if(!$termsOfUse)
            <a href="{{ route('admin.terms-of-use.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Terms of Use</a>
        @else
            <a href="{{ route('admin.terms-of-use.edit', $termsOfUse->id) }}" class="btn btn-success" style="background-color: #2b2b5e;border-color: #2b2b5e;">Edit Terms of Use</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($termsOfUse)
        <div class="card">
            <div class="card-body">
                <h5>Title: {{ $termsOfUse->title ?? 'Not set' }}</h5>
                <div><strong>Content:</strong></div>
                <div>{!! $termsOfUse->content !!}</div>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body text-center">
                <h5>No Terms of Use Created Yet</h5>
                <p>Create your first Terms of Use to manage legal content.</p>
                <a href="{{ route('admin.terms-of-use.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Create Now</a>
            </div>
        </div>
    @endif
</div>
@endsection