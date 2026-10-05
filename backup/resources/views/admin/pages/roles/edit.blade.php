@extends('layouts.app')

@section('title', 'Edit Role')

@section('content')
    <h1>Edit Role</h1>

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Role Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" required>
        </div>
        
        <div class="mb-3">
            <label for="permissions" class="form-label">Permissions</label>
            <select class="form-select" id="permissions" name="permissions[]" multiple>
                @foreach ($permissions as $permission)
                    <option value="{{ $permission->id }}" {{ in_array($permission->id, $rolePermissions) ? 'selected' : '' }}>
                        {{ $permission->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Role</button>
    </form>
@endsection
