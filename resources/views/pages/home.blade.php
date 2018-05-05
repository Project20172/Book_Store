@extends('layout.frame')
@section('content')
<br>
<br>
<div class="recommended_items left-sidebar"><!--recommended_items-->
	<h2 class="title text-center">Sách bán chạy</h2>
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="{{ route('book_detail') }}">
							<div class="productinfo text-center">
								<img src="images/home/bia-1-minh-la-ca.u5505.d20170803.t083606.108681.jpg" class="img-fluid" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="{{ route('book.addToCart', ['id'=>'1'])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="{{ route('book_detail') }}">
							<div class="productinfo text-center">
								<img src="images/home/bia-1-minh-la-ca.u5505.d20170803.t083606.108681.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="{{ route('book_detail') }}">
							<div class="productinfo text-center">
								<img src="images/home/bia-1-minh-la-ca.u5505.d20170803.t083606.108681.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="{{ route('book_detail') }}">
							<div class="productinfo text-center">
								<img src="images/home/bia-1-minh-la-ca.u5505.d20170803.t083606.108681.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="{{ route('book_detail') }}">
							<div class="productinfo text-center">
								<img src="images/home/bia-1-minh-la-ca.u5505.d20170803.t083606.108681.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="{{ route('book_detail') }}">
							<div class="productinfo text-center">
								<img src="images/home/bia-1-minh-la-ca.u5505.d20170803.t083606.108681.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>			
	</div>
</div>

<div class="recommended_items left-sidebar"><!--recommended_items-->
	<h2 class="title text-center">Sách mới</h2>
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="#">
							<div class="productinfo text-center">
								<img src="images/home/kheo-an-noi-se-co-duoc-thien-ha.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="#">
							<div class="productinfo text-center">
								<img src="images/home/kheo-an-noi-se-co-duoc-thien-ha.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="#">
							<div class="productinfo text-center">
								<img src="images/home/kheo-an-noi-se-co-duoc-thien-ha.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="#">
							<div class="productinfo text-center">
								<img src="images/home/kheo-an-noi-se-co-duoc-thien-ha.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="#">
							<div class="productinfo text-center">
								<img src="images/home/kheo-an-noi-se-co-duoc-thien-ha.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<a href="#">
							<div class="productinfo text-center">
								<img src="images/home/kheo-an-noi-se-co-duoc-thien-ha.jpg" alt="">
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>			
	</div>
</div>



<div class="category-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tshirt" data-toggle="tab">Tin học</a></li>
			<li><a href="#blazers" data-toggle="tab">Y học</a></li>
			<li><a href="#sunglass" data-toggle="tab">Điện tử</a></li>
			<li><a href="#kids" data-toggle="tab">Cơ khí</a></li>
			<li><a href="#poloshirt" data-toggle="tab">Khoa học</a></li>
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade active in" id="tshirt">
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/img976.u335.d20161212.t123014.937796.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/img976.u335.d20161212.t123014.937796.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/img976.u335.d20161212.t123014.937796.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/img976.u335.d20161212.t123014.937796.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="blazers">
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/bia-1---mac-ke-thien-ha.u5102.d20170323.t155756.324847.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/bia-1---mac-ke-thien-ha.u5102.d20170323.t155756.324847.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/bia-1---mac-ke-thien-ha.u5102.d20170323.t155756.324847.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/bia-1---mac-ke-thien-ha.u5102.d20170323.t155756.324847.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="sunglass">
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="kids">
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="poloshirt">
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="images/home/16251760_1410545275623495_793954523945388293_o-u84-d20170202-t201817-68266.u3059.d20170616.t102554.684110.jpg" alt="">
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection