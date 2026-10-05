@extends('layouts.app')

@section('title', 'Users')

@push('css')
	<link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/datatables.net/js/dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<script src="/assets/js/demo/table-manage-default.demo.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
		<li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Users</a></li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Users </h1>
	<!-- END page-header -->
	<!-- BEGIN panel -->
	<div class="panel panel-inverse">
		<!-- BEGIN panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title"> <a href="{{ route('admin.users.create') }}" class="btn btn-primary w-100px" title="Add User">Add User</a></h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<!-- END panel-heading -->
		<!-- BEGIN panel-body -->
		<div class="panel-body">
		@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
			<table id="data-table-default" width="100%" class="table table-striped table-bordered align-middle text-nowrap">
				<thead>
					<tr>
						<th width="1%"></th>
						<th width="1%" data-orderable="false"></th>
						<th class="text-nowrap">Name</th>
						<th class="text-nowrap">Email</th>
						<th class="text-nowrap">Phone</th>
						<th class="text-nowrap">Role</th>
						<th class="text-nowrap">Action</th>

					</tr>
				</thead>
				<tbody>
				@foreach ($users as $key => $user)
					<tr class="odd gradeX">
						<td width="1%" class="fw-bold">{{$key+1}}</td>
						<td width="1%" class="with-img">
							 @if($user->profile_image)
							<img class="rounded h-30px my-n1 mx-n1" src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="" />
							@else
								<img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" alt="" />
							@endif
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->phone }}</td>
						<td>{{ $user->roles->pluck('name')->join(', ') }}</td>
						<td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning" title="Edit User"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info" title="Show User"><i class="fas fa-eye"></i></a>

           <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
					              @csrf
					              @method('DELETE')
					              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete user?');" title="Delete User"><i class="fas fa-trash"></i></button>
					          </form>
                    </td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		<!-- END panel-body -->

	</div>
	<!-- END panel -->
@endsection
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault(); // Prevent default form submission

                const confirmation = confirm('Are you sure you want to delete this User?');

                if (confirmation) {
                    form.submit(); // Submit form if confirmed
                }
            });
        });
    });
</script>
@endsection
