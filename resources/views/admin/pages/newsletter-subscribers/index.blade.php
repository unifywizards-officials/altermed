@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Newsletter Subscribers</h4>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Subscribed At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($subscribers as $subscriber)
                            <tr>
                                <td>{{ $subscriber->id }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td>
                                    {{ $subscriber->subscribed_at ? $subscriber->subscribed_at->format('d M Y H:i') : 'N/A' }}
                                </td>
                                <td>
                                    <form action="{{ route('admin.newsletter-subscribers.destroy', $subscriber) }}" 
                                          method="POST" 
                                          style="display:inline-block" 
                                          class="js-delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No subscribers found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- ✅ Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $subscribers->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    /* Custom Pagination Styling */
    .pagination {
        gap: 8px;
    }

    .pagination .page-link {
        border-radius: 50% !important;
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
        color: #2b2b5e;
        border: 1px solid #ddd;
        transition: all 0.3s ease;
    }

    .pagination .page-link:hover {
        background: #2b2b5e;
        color: #fff;
        border-color: #2b2b5e;
    }

    .pagination .active .page-link {
        background: #2b2b5e !important;
        border-color: #2b2b5e !important;
        color: #fff !important;
    }

    .pagination .disabled .page-link {
        background: #f1f1f1;
        color: #999;
    }
</style>
@endpush
