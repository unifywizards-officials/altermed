@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">View Business Counter</h4>
        <a href="{{ route('admin.business-counters.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <strong>Icon:</strong> {{ $businessCounter->icon }}
                    </div>
                    <div class="col-md-4">
                        <strong>Counter:</strong> {{ $businessCounter->counter }}
                    </div>
                    <div class="col-md-4">
                        <strong>Name:</strong> {{ $businessCounter->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection