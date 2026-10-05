@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Add Team Member</h4>
        <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary"><i class='fas fa-arrow-left'></i> Back</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3" style="padding:20px;">

                           <div class="col-md-12">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Quote</label>
                            <textarea name="quote" class="form-control" rows="3">{{ old('quote') }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
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