@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Schedule Demo Details</h4>
        <a href="{{ route('admin.schedule-demos.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Demo Request #{{ $scheduleDemo->id }}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <th width="150">Name:</th>
                                <td>{{ $scheduleDemo->name }}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number:</th>
                                <td>{{ $scheduleDemo->mobile_number }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $scheduleDemo->email }}</td>
                            </tr>
                            <tr>
                                <th>Company Name:</th>
                                <td>{{ $scheduleDemo->company_name }}</td>
                            </tr>
                            <tr>
                                <th>Number of Providers:</th>
                                <td>{{ $scheduleDemo->number_of_providers }}</td>
                            </tr>
                            <tr>
                                <th>Type of Practice:</th>
                                <td>{{ $scheduleDemo->type_of_practice }}</td>
                            </tr>
                            <tr>
                                <th>Submitted At:</th>
                                <td>{{ $scheduleDemo->created_at->format('M d, Y H:i:s') }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Requirement:</label>
                            <div class="border p-3 bg-light">
                                {{ $scheduleDemo->requirement }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="mailto:{{ $scheduleDemo->email }}" class="btn btn-primary me-2">
                        <i class="fas fa-envelope"></i> Email Client
                    </a>
                    <a href="tel:{{ $scheduleDemo->mobile_number }}" class="btn btn-success me-2">
                        <i class="fas fa-phone"></i> Call Client
                    </a>
                    <form action="{{ route('admin.schedule-demos.destroy', $scheduleDemo) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Are you sure you want to delete this demo request?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Delete Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection