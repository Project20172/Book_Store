
<div class="header">
	<div class="container">
		<div class="header-grid">
			<div class="header-grid-left animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<ul>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:nh.giang261197@gmail.com">nh.giang261197@gmail.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>01658215007</li>
					@if (!session('UserLogin'))
					<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{ route('getLogin') }}">Đăng nhập</a></li>
					<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{ route('register') }}">Đăng ký</a></li>
					@endif
				</ul>
			</div>
			<div class="header-grid-right animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
				<ul class="social-icons">
					<li><a href="#" class="facebook"></a></li>
					<li><a href="#" class="twitter"></a></li>
					<li><a href="#" class="g"></a></li>
					<li><a href="#" class="instagram"></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="logo-nav">
			<div class="logo-nav-left animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
				<h1><a href="{{ route('home') }}">Best Store <span class="fix">Mua sách ở mọi nơi</span></a></h1>
			</div>
				{{-- <div class="logo-nav-left1">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{ route('home') }}" class="act">Home</a></li>	
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Men's Wear</h6>
													<li><a href="products.html">Clothing</a></li>
													<li><a href="products.html">Wallets</a></li>
													<li><a href="products.html">Shoes</a></li>
													<li><a href="products.html">Watches</a></li>
													<li><a href="products.html">Accessories</a></li>
												</ul>
											</div>
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Women's Wear</h6>
													<li><a href="products.html">Clothing</a></li>
													<li><a href="products.html">Wallets,Bags</a></li>
													<li><a href="products.html">Footwear</a></li>
													<li><a href="products.html">Watches</a></li>
													<li><a href="products.html">Accessories</a></li>
													<li><a href="products.html">Jewellery</a></li>
													<li><a href="products.html">Beauty &amp; Grooming</a></li>
												</ul>
											</div>
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Kid's Wear</h6>
													<li><a href="products.html">Kids Home Fashion</a></li>
													<li><a href="products.html">Boy's Clothing</a></li>
													<li><a href="products.html">Girl's Clothing</a></li>
													<li><a href="products.html">Shoes</a></li>
													<li><a href="products.html">Brand Stores</a></li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Furniture <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Home Collection</h6>
													<li><a href="furniture.html">Cookware</a></li>
													<li><a href="furniture.html">Sofas</a></li>
													<li><a href="furniture.html">Dining Tables</a></li>
													<li><a href="furniture.html">Shoe Racks</a></li>
													<li><a href="furniture.html">Home Decor</a></li>
												</ul>
											</div>
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Office Collection</h6>
													<li><a href="furniture.html">Carpets</a></li>
													<li><a href="furniture.html">Tables</a></li>
													<li><a href="furniture.html">Sofas</a></li>
													<li><a href="furniture.html">Shoe Racks</a></li>
													<li><a href="furniture.html">Sockets</a></li>
													<li><a href="furniture.html">Electrical Machines</a></li>
												</ul>
											</div>
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Decorations</h6>
													<li><a href="furniture.html">Toys</a></li>
													<li><a href="furniture.html">Wall Clock</a></li>
													<li><a href="furniture.html">Lighting</a></li>
													<li><a href="furniture.html">Top Brands</a></li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li><a href="short-codes.html">Short Codes</a></li>
								<li><a href="mail.html">Mail Us</a></li>
							</ul>
						</div>
					</nav>
				</div> --}}
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search sb-search-open">
							<div class="searchdiv">
								<form >
									<input class="sb-search-input" placeholder="Nhập sách cần tìm..." type="search" id="search">
									<div id="result">
										
									</div>
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
					</div>
					<!-- search-scripts -->

					<script src="{{ asset('js/classie.js') }}"></script>
					<script src="{{ asset('js/uisearch.js') }}"></script>
					<script >
						$(document).ready(function (){ 
							$('#search').on('keyup',function (){
								console.log($('#search').val());

								$.ajax({
									url:"{{ url('search') }}"+"/"+$('#search').val(),
									method: 'get',

									success: function(result){
										// console.log(result);
										// for(var i=0;i<result.length;i++){ 
										// 	console.log(result[i]['book_name']);
										// }
										var str='';
										if(result.length>0){
											str+='<ul>';
											for(var i=0;i<result.length;i++){
												str+='<li><a class="giang" href="{{ url('') }}/book_detail/'+result[i]["book_id"]+'" />'+result[i]["book_name"]+'</li>';
											}
											str+='</ul>';
										}

										document.getElementById("result").innerHTML=str;
									}
								});
							});
						});
					</script>
					<!-- <script>
						new UISearch( document.getElementById( 'sb-search' ) );
					</script> -->

					<!-- //search-scripts -->
				</div>
				<div class="header-right">
					@if (session('UserLogin'))
					
					<ul class="nav navbar-top-links navbar-right">
						<!-- /.dropdown -->
						<li class="dropdown">
							<a class="dropdown-toggle usericon" data-toggle="dropdown" href="#">

								<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li class="text-center" style="font-size: 15px"><b>{{ session('UserLogin')->first_name }} {{ session('UserLogin')->last_name }}</b>
								</li>
								<li><a href="#"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a>
								</li>
								<li class="divider"></li>
								<li><a href="{{ route('getLogout') }}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
								</li>
							</ul>
							<!-- /.dropdown-user -->
						</li>
						<!-- /.dropdown -->
					</ul>
					@endif
					<div class="cart box_1">
						<a href="{{ route('cart') }}">
							<h3> <div class="total">
								<span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)</div>
								<img src="{{ asset('images/bag.png') }}" alt="">
							</h3>
						</a>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
			<hr>
		</div>
	</div>
</div>