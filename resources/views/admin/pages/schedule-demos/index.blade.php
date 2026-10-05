@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Schedule Demo Requests</h4>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Phone</th>
                                <th>Practice Type</th>
                                <th>Submitted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($scheduleDemos as $demo)
                            <tr>
                                <td>{{ $demo->id }}</td>
                                <td>{{ $demo->name }}</td>
                                <td>{{ $demo->email }}</td>
                                <td>{{ $demo->company_name }}</td>
                                <td>{{ $demo->mobile_number }}</td>
                                <td>{{ $demo->type_of_practice }}</td>
                                <td>{{ $demo->created_at->format('M d, Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('admin.schedule-demos.show', $demo) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <form action="{{ route('admin.schedule-demos.destroy', $demo) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this demo request?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">No demo requests found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($scheduleDemos->hasPages())
                <div class="d-flex justify-content-center mt-3">
                    {{ $scheduleDemos->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection