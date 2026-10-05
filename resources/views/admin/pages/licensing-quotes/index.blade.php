@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Licensing Quote Submissions</h4>
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
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Requirement</th>
                                <th>Submitted At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($quotes as $quote)
                                <tr>
                                    <td>{{ $quote->id }}</td>
                                    <td>{{ $quote->name }}</td>
                                    <td>{{ $quote->mobile }}</td>
                                    <td>{{ $quote->email }}</td>
                                    <td>{{ Str::limit($quote->requirement, 50) }}</td>
                                    <td>{{ $quote->created_at->format('d M Y H:i') }}</td>
                                    <td>
                                        <form action="{{ route('admin.licensing-quotes.destroy', $quote) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No quote submissions found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $quotes->links() }}
            </div>
        </div>
    </div>
</div>
@endsection