@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Services</h4>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Add Service</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif -->
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <!-- <th>Image</th> -->
                                <th>Title</th>
                                <th>Detail</th>
                               
                                <th>Active</th>
                            
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <!-- <td>
                                        @if($service->image_path)
                                            <img src="{{ asset('storage/'.$service->image_path) }}" alt="{{ $service->title }}" style="width: 70px; height: auto;">
                                        @endif
                                    </td> -->
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->details }}</td>
                                    <td>
                                        <span class="badge bg-{{ $service->is_active ? 'success' : 'secondary' }}">{{ $service->is_active ? 'Yes' : 'No' }}</span>
                                    </td>
                                    
                                    <td>
                                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-green"><i class="fas fa-edit"></i> Edit</a>
                                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this service?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No records found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
@endsection





