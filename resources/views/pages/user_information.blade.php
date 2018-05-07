@extends('layout.master')
<!DOCTYPE html>
<html>
<head>
	<title>Book Store</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style_user_information.css') }}">
	<script href="{{ asset('js/jquery.min.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
	@section('container')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				@include('layout.elements.side_bar_userinfo')
			</div>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-xs-12 col-sm-9">
    				<form class="form-horizontal">
				      <div class="panel panel-default">
				        <div class="panel-heading">
				        <h4 class="panel-title">Thông tin tài khoản</h4>
				        </div>
				        <div class="panel-body">
				          <div class="form-group">
				            <label class="col-sm-2 control-label">Họ tên</label>
				            <div class="col-sm-10">
				              <input type="text" class="form-control">
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-sm-2 control-label">Số điện thoại</label>
				            <div class="col-sm-10">
				              <input type="text" class="form-control">
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-sm-2 control-label">Email</label>
				            <div class="col-sm-10">
				              <input type="text" class="form-control">
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-sm-2 control-label">Địa chỉ</label>
				            <div class="col-sm-10">
				              <input type="text" class="form-control">
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-sm-2 control-label">Số thẻ thanh toán</label>
				            <div class="col-sm-10">
				              <input type="text" class="form-control">
				            </div>
				          </div>
				          <div class="form-group">
				            <div class="col-sm-10 col-sm-offset-2">
				              <button type="submit" class="btn btn-primary">Cập nhật</button>
				            </div>
				          </div>
				        </div>
				      </div>


				      <div class="panel panel-default">
				        <div class="panel-heading">
				        <h4 class="panel-title">Đổi mật khẩu</h4>
				        </div>
				        <div class="panel-body">
				          <div class="form-group">
				            <label class="col-sm-2 control-label">Mật khẩu hiện tại</label>
				            <div class="col-sm-10">
				              <input type="password" class="form-control">
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-sm-2 control-label">Mật khẩu mới</label>
				            <div class="col-sm-10">
				              <input type="password" class="form-control">
				            </div>
				          </div>
				          <div class="form-group">
				            <div class="col-sm-10 col-sm-offset-2">
				              <button type="submit" class="btn btn-primary">Thay đổi</button>
				              <button type="reset" class="btn btn-default">Hủy</button>
				            </div>
				          </div>
				        </div>
				      </div>

    				</form>

  					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
</body>
</html>