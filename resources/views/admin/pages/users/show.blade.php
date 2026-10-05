@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>

    <div class="card">
        <div class="card-header">
            <strong>Name:</strong> {{ $user->name }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $user->email }}</p>

            <h4>Permissions</h4>
            @if($permissions->isEmpty())
                <p>No permissions assigned.</p>
            @else
                <ul>
                    @foreach($permissions as $permission)
                        <li>{{ $permission->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
