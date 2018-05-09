@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
                        <h1 class="page-header">Khách hàng
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
                        <form action="{{ route('postEditCustomer') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            	<input type="hidden" name="user_id" value="{{ $customer->user_id }} }}">
                                <label>User Name</label>
                                <input class="form-control" name="user_name" readonly value="{{ $customer->user_name }}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" value="{{ $customer->password }}">
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="first_name" value="{{ $customer->first_name }}">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="last_name" value="{{ $customer->last_name }}">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" value="{{ $customer->address }}">
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" name="city" value="{{ $customer->city }}">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{ $customer->email }}">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" value="{{ $customer->phone }}">
                            </div>

                            <button type="submit" class="btn btn-default">Sửa tác giả</button>
                            <button type="reset" class="btn btn-default">Nhập lại</button>
                        <form>
                    </div>
@endsection