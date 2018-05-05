@extends('layout.master')
@section('container')
<div class="container">
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="{{ asset('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ</a></li>
				<li class="active">Giỏ hàng</li>
			</ol>
		</div>
	</div>
</div>
<div class="checkout">
	<div class="container">
		<h3 class="animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">Your shopping cart contains: <span>{{ $cart ? $cart->totalQty : 0 }} Products</span></h3>
		<div class="checkout-right animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>SL No.</th>	
						<th style="width: 10%">Product</th>
						<th style="width: 40%">Product Name</th>
						<th>Quality</th>
						<th>Service Charges</th>
						<th>Price</th>
						<th>Remove</th>
					</tr>
				</thead>
				<tbody>
					@if($cart)
					@foreach($items as $book)
					<tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="single.html"><img src="{{$book['item']['picture']}}" alt=" " class="img-fluid"></a>
						</td>
						<td class="invert">{{$book['item']['book_name']}}</td>
						<td class="invert">
							<div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>{{$book['qty']}}</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">5,000 VNĐ</td>
						<td class="invert">{{number_format($book['price'], 0, '.', ',')}} VNĐ</td>
						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();

									});
								});	  
							});	</script>
						</td>
					</tr>
					@endforeach
					@else
					<tr class="rem1">
						Giỏ hàng trống
					</tr>

					@endif

					<!--quantity-->
					<script>
						$('.value-plus').on('click', function(){
							var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
							divUpd.text(newVal);
						});

						$('.value-minus').on('click', function(){
							var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
							if(newVal>=1) divUpd.text(newVal);
						});
					</script>
					<!--quantity-->
				</tbody>
			</table>
		</div>
		<div class="checkout-left">	
			<div class="checkout-left-basket animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<h4>Thông tin</h4>
				<ul>
					@if($cart)
					@foreach($items as $book)
						<li>{{$book['item']['book_name']}} <i>-</i> <span>{{number_format($book['price'], 0, '.', ',')}} VNĐ </span></li>
					@endforeach
						<li>Total Service Charges <i>-</i> <span>{{number_format($cart->totalQty * 5000, 0, '.', ',')}} VNĐ</span></li>
						<li>Total <i>-</i> <span>{{number_format($cart->totalPrice + $cart->totalQty * 5000, 0, '.', ',')}} VNĐ</span></li>
					@else
					<tr class="rem1">
						Giỏ hàng trống
					</tr>

					@endif

					{{-- <li>Total Service Charges <i>-</i> <span>$15.00</span></li>
					<li>Total <i>-</i> <span>$854.00</span></li> --}}


				</ul>
			</div>
			<div class="checkout-right-basket animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
				<a href="single.html" class="btn btn-primary">Chọn thêm</a>
				<a href="" class="btn btn-primary ">Xóa toàn bộ</a>
				<a href="" class="btn btn-primary">Cập nhật</a>
				<a href="" class="btn btn-primary">Thanh toán</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
@endsection