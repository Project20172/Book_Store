@extends('pages.admin.frame')
@section('content')
<div class="col-lg-12">
	<h1 class="page-header">Admin
		<small>Danh sách</small>
	</h1>
	@if (session('thongbao'))
	<div class="alert alert-success">
		{{ session('thongbao') }}
	</div>
	@endif
</div>

<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr align="center">
			<th>ID</th>
			<th>User_name</th>
			<th>Password</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>City</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($list as $admin)
		<tr class="odd gradeX" align="center">
			<td>{{ $admin->admin_id }}</td>
			<td>{{ $admin->user_name }}</td>
			<td>{{ $admin->password }}</td>
			<td>{{ $admin->first_name }}</td>
			<td>{{ $admin->last_name }}</td>
			<td>{{ $admin->address }}</td>
			<td>{{ $admin->city }}</td>
			<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('getRemoveAdmin',$admin->admin_id) }}"> Delete</a></td>
			<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('getEditAdmin',$admin->admin_id) }}">Edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection