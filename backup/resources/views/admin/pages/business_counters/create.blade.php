@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Add Business Counter</h4>
        <a href="{{ route('admin.business-counters.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.business-counters.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">Icon</label>
                            <input type="text" name="icon" value="{{ old('icon') }}" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Counter</label>
                            <input type="text" name="counter" value="{{ old('counter') }}" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" style="background-color: #2b2b5e;border-color: #2b2b5e;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection