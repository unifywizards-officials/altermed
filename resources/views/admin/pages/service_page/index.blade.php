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
                                <th>Service Type</th>
                                <th>Detail</th>
                                <th>Show on Header</th>
                                <th>Show on Home</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($servicePages as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>

                                    <td>{{ $service->service_banner_title }}</td>
                                    <td>
                                        <span class="badge bg-primary">{{ $service->service_type }}</span>
                                    </td>
                                  <td>{!! \Illuminate\Support\Str::limit(strip_tags($service->service_description), 50) !!}</td>

                                    <td>
                                        @if($service->status == 1)
                                            <button type="button" class="btn btn-sm btn-success toggle-status" data-id="{{ $service->id }}" data-status="0">
                                                <i class="fas fa-eye"></i> Show
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-sm btn-secondary toggle-status" data-id="{{ $service->id }}" data-status="1">
                                                <i class="fas fa-eye-slash"></i> Hide
                                            </button>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        @if($service->show_on_home == 1)
                                            <button type="button" class="btn btn-sm btn-success toggle-show-on-home" data-id="{{ $service->id }}" data-show-on-home="0">
                                                <i class="fas fa-home"></i> Yes
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-sm btn-secondary toggle-show-on-home" data-id="{{ $service->id }}" data-show-on-home="1">
                                                <i class="fas fa-home"></i> No
                                            </button>
                                        @endif
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

                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg">
                            {{-- Previous Page Link --}}
                            @if ($servicePages->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo;</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $servicePages->appends(request()->query())->previousPageUrl() }}" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($servicePages->getUrlRange(1, $servicePages->lastPage()) as $page => $url)
                                @if ($page == $servicePages->currentPage())
                                    <li class="page-item active">
                                        <span class="page-link">{{ $page }}</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($servicePages->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $servicePages->appends(request()->query())->nextPageUrl() }}" rel="next">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">&raquo;</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('toggle-status')) {
                const button = e.target.closest('.toggle-status');
                const serviceId = button.getAttribute('data-id');
                const newStatus = button.getAttribute('data-status');

                fetch("{{ url('admin/service-pages') }}/" + serviceId + "/toggle-status", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ status: newStatus })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update button appearance
                        if (newStatus == '1') {
                            button.className = 'btn btn-sm btn-success toggle-status';
                            button.setAttribute('data-status', '0');
                            button.innerHTML = '<i class="fas fa-eye"></i> Show';
                        } else {
                            button.className = 'btn btn-sm btn-secondary toggle-status';
                            button.setAttribute('data-status', '1');
                            button.innerHTML = '<i class="fas fa-eye-slash"></i> Hide';
                        }
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while updating status. Please check the console for details.');
                });
            }
            
            
            if (e.target && e.target.classList.contains('toggle-show-on-home')) {
                const button = e.target.closest('.toggle-show-on-home');
                const serviceId = button.getAttribute('data-id');
                const newShowOnHome = button.getAttribute('data-show-on-home');

                fetch("{{ url('admin/service-pages') }}/" + serviceId + "/toggle-show-on-home", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ show_on_home: newShowOnHome })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update button appearance
                        if (newShowOnHome == '1') {
                            button.className = 'btn btn-sm btn-success toggle-show-on-home';
                            button.setAttribute('data-show-on-home', '0');
                            button.innerHTML = '<i class="fas fa-home"></i> Yes';
                        } else {
                            button.className = 'btn btn-sm btn-secondary toggle-show-on-home';
                            button.setAttribute('data-show-on-home', '1');
                            button.innerHTML = '<i class="fas fa-home"></i> No';
                        }
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while updating show on home. Please check the console for details.');
                });
            } 
            
        });
    });
</script>
@endpush
@endsection




