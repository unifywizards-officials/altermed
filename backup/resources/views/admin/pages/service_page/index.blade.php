@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Services Page</h4>
        <a href="{{ route('admin.service-pages.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Add Service Detail</a>
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
                            @forelse ($servicePages as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                   
                                    <td>{{ $service->service_banner_title }}</td>
                                  <td>{!! \Illuminate\Support\Str::limit(strip_tags($service->service_description), 50) !!}</td>

                                    <td>
                                        <span class="badge bg-{{ $service->is_active ? 'success' : 'secondary' }}">{{ $service->is_active ? 'Yes' : 'No' }}</span>
                                    </td>

                                    <td>

                                    <a href="{{ route('admin.service-pages.edit', ['service_page' => $service->slug]) }}" class="btn btn-sm btn-green"><i class="fas fa-edit"></i> Edit</a>

                                     <form action="{{ route('admin.service-pages.destroy', $service->slug) }}"
                                        method="POST"
                                        style="display:inline-block"
                                        onsubmit="return confirm('Delete this service?')">
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

                {{ $servicePages->links() }}
            </div>
        </div>
    </div>
</div>
@endsection




