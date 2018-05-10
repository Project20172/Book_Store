@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
                        <h1 class="page-header">Admin
                            <small>Thêm</small>
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
                        <form action="{{ route('postAddAdmin') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label>User Name</label>
                                <input class="form-control" name="user_name" placeholder="Vui lòng nhập user name" />
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Vui lòng nhập password" />
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="first_name" placeholder="Vui lòng nhập first_name" />
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="last_name" placeholder="Vui lòng nhập last_name" />
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" placeholder="Vui lòng nhập address" />
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" name="city" placeholder="Vui lòng nhập city" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Vui lòng nhập email" />
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" placeholder="Vui lòng nhập phone" />
                            </div>

                            <div class="form-group">
                                <label>Permission</label>
                                <input class="form-control" name="permission" placeholder="Vui lòng nhập permission" />
                            </div>

                            <button type="submit" class="btn btn-default">Thêm khách hàng</button>
                            <button type="reset" class="btn btn-default">Nhập lại</button>
                        <form>
                    </div>
@endsection