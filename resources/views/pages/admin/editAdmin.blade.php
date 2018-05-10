@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
                        <h1 class="page-header">Admin
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	@if (count($errors)>0)
                    		@foreach ($errors->all() as $err)
                    			<div class="alert alert-danger">
                    				{{ $err }}
                    			</div>
                    			<br>
                    		@endforeach
                    	@endif
                    	@if (session('thongbao'))
                    		<div class="alert alert-success">
                    			{{ session('thongbao') }}
                    		</div>
                    	@endif
                        <form action="{{ route('postEditAdmin') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            	<input type="hidden" name="admin_id" value="{{ $admin->admin_id }} }}">
                                <label>User Name</label>
                                <input class="form-control" name="user_name" readonly value="{{ $admin->user_name }}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" value="{{ $admin->password }}">
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="first_name" value="{{ $admin->first_name }}">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="last_name" value="{{ $admin->last_name }}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" value="{{ $admin->address }}">
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" name="city" value="{{ $admin->city }}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{ $admin->email }}">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" value="{{ $admin->phone }}">
                            </div>

                            <div class="form-group">
                                <label>Permission</label>
                                <input class="form-control" name="permission" value="{{ $admin->permission }}">
                            </div>

                            <button type="submit" class="btn btn-default">Sửa admin</button>
                            <button type="reset" class="btn btn-default">Nhập lại</button>
                        <form>
                    </div>
@endsection