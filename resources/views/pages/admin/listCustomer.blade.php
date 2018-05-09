@extends('pages.admin.frame')
@section('content')
<div class="col-lg-12">
	<h1 class="page-header">Khách hàng
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
		@foreach ($list as $customer)
		<tr class="odd gradeX" align="center">
			<td>{{ $customer->user_id }}</td>
			<td>{{ $customer->user_name }}</td>
			<td>{{ $customer->password }}</td>
			<td>{{ $customer->first_name }}</td>
			<td>{{ $customer->last_name }}</td>
			<td>{{ $customer->address }}</td>
			<td>{{ $customer->city }}</td>
			<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('getRemoveCustomer',$customer->user_id) }}"> Delete</a></td>
			<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('getEditCustomer',$customer->user_id) }}">Edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection