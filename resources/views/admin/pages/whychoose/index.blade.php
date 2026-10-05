@extends('admin.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Why Choose</h4>
        <a href="{{ route('admin.whychoose.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Add Item</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <!-- <th>URL</th> -->
                                <th>Active</th>
                                <th>Order</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    @if($item->image_path)
                                        <img src="{{ asset('storage/'.$item->image_path) }}" alt="" style="height:40px; width:auto;" />
                                    @endif
                                </td>
                               <td style="font-size: 20px;">{!! $item->icon !!}</td>
                                <td>{{ $item->title }}</td>
                                <!-- <td>
                                    @if($item->url)
                                        <a href="{{ $item->url }}" target="_blank">{{ $item->url }}</a>
                                    @endif
                                </td> -->
                                <td>
                                    <span class="badge {{ $item->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $item->is_active ? 'Yes' : 'No' }}</span>
                                </td>
                                <td>{{ $item->display_order }}</td>
                                <td>
                                    <a href="{{ route('admin.whychoose.edit', $item) }}" class="btn btn-sm btn-green"><i class="fas fa-edit"></i> Edit</a>
                                    <form action="{{ route('admin.whychoose.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">No records found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $items->links() }}
                    
                    <div class="d-flex justify-content-center">
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-lg">
            {{-- Previous Page Link --}}
            @if ($items->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $items->appends(request()->query())->previousPageUrl() }}" rel="prev">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($items->getUrlRange(1, $items->lastPage()) as $page => $url)
                @if ($page == $items->currentPage())
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
            @if ($items->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $items->appends(request()->query())->nextPageUrl() }}" rel="next">&raquo;</a>
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
</div>
@endsection


