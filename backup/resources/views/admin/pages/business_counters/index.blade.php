@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Manage Business Counters</h4>
        <!-- <a href="{{ route('admin.business-counters.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Add Counter</a> -->
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Icon</th>
                                <th>Counter</th>
                                <th>Counter Text</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($businessCounters as $counter)
                            <tr>
                                <td>{{ $counter->id }}</td>
                                <td>{{ $counter->icon }}</td>
                                <td>{{ $counter->counter }}</td>
                                <td>{{ $counter->counter_text }}</td>
                                <td>{{ $counter->name }}</td>
                                <td>
                                    <!-- <a href="{{ route('admin.business-counters.show', $counter) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> View</a> -->
                                    <a href="{{ route('admin.business-counters.edit', $counter) }}" class="btn btn-sm btn-green"><i class="fas fa-edit"></i> Edit</a>
                                    <!-- <form action="{{ route('admin.business-counters.destroy', $counter) }}" method="POST" style="display:inline-block" class="js-delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i> Delete</button> -->
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No business counters found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection