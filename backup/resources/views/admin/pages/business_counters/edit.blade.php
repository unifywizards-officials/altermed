@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Edit Business Counter</h4>
        <a href="{{ route('admin.business-counters.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.business-counters.update', $businessCounter) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Icon</label>
                            <input type="text" name="icon" value="{{ old('icon', $businessCounter->icon) }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Counter</label>
                            <input type="text" name="counter" value="{{ old('counter', $businessCounter->counter) }}" class="form-control">
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Counter text</label>
                            <input type="text" name="counter_text" value="{{ old('counter', $businessCounter->counter_text) }}" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name', $businessCounter->name) }}" class="form-control">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" style="background-color: #2b2b5e;border-color: #2b2b5e;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection