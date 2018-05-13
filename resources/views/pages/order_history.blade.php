@extends('layout.master')
<!DOCTYPE html>
<html>
<head>
	<title>Book Store</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style_user_information.css') }}">
	<script href="{{ asset('js/jquery.min.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <style type="text/css">
    	.table-responsive{margin-top:25px;}
    </style>
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
					<div>
						<center><h3>Đơn hàng của bạn</h3></center>
					</div>
		<div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Mã đơn hàng</th>
            <th>Ngày tạo</th>
            <th>Tổng tiền</th>
            <th>Phương thức thanh toán</th>
            <th>Trạng thái</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>12345</td>
            <td>11/2/2018</td>
            <td>$899.00</td>
            <td>Credit</td>
            <td><span class="label label-info">Processing</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td>123456</td>
            <td>19/4/2018</td>
            <td>$899.00</td>
            <td>Credit</td>
            <td><span class="label label-success">Shipped</span></td>
          </tr>
        </tbody>
      </table>
    </div>
	</div>
			</div>
		</div>
	</div>
	@endsection
</body>
</html>