@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Team Members</h4>
        <a href="{{ route('admin.teams.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Add Team Member</a>
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
                                <th>Name</th>
                                <th>Title</th>
                                <th>Quote</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teams as $team)
                                <tr>
                                    <td>{{ $team->id }}</td>
                                    <td>
                                        @if($team->image)
                                            <img src="{{ asset('storage/'.$team->image) }}" alt="{{ $team->name }}" style="width: 70px; height: auto;">
                                        @endif
                                    </td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->title }}</td>
                                    <td>{{ Str::limit($team->quote, 50) }}</td>
                                    <td>{{ Str::limit($team->description, 50) }}</td>
                                    <td>
                                        <a href="{{ route('admin.teams.edit', $team) }}" class="btn btn-sm btn-green"><i class="fas fa-edit"></i> Edit</a>
                                        <form action="{{ route('admin.teams.destroy', $team) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this team member?')">
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

                {{ $teams->links() }}
            </div>
        </div>
    </div>
</div>
@endsection