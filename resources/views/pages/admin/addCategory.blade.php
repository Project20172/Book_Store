@extends('pages.admin.frame')
@section('content')
<div class="col-lg-12">
	<h1 class="page-header">Thể loại
		<small>Thêm</small>
	</h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
	@if (count($errors)>0)
		@foreach ($errors->all() as $element)
			<div class="alert alert-danger">
				{{ $element }}
			</div>
			<br>
		@endforeach
	@endif
	@if (session('thongbao'))
	    <div class="alert alert-success">
	    	{{ session('thongbao') }}
	    </div>
	@endif
	<form action="{{ route('postAddCategory') }}" method="POST">
		<div class="form-group">
			<label>Tên thể loại</label>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input class="form-control" name="txtCateName" placeholder="Vui lòng nhập tên thể loại" />
		</div>
		<button type="submit" class="btn btn-default">Thêm thể loại</button>
		<button type="reset" class="btn btn-default">Nhập lại</button>
	<form>
</div>
@endsection