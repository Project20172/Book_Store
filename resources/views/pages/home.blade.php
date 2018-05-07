@extends('layout.frame')
@section('content')


<br>
<br>
<div class="recommended_items bk">
	<h2 class="title text-center">Sách Văn Học</h2>
	<div class="row" id="vanhoc">
		<div id="hoanggiang">
			<div id="nhieusach" hoanggiangnext="{{ $listBook[2]->book_id }}" hoanggiangprev="{{ $listBook[0]->book_id }}">
				@foreach ($listBook as $book)
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products book_choose">
							<a href="{{ route("getBookDetail",["id"=>$book->book_id]) }}">
								<div class="productinfo text-center">
									<img src="{{ asset($book->picture) }}" class="img-fluid" alt="" width="120" height="150">
									<h2>${{ $book->price }}</h2>
									<p>{{ $book->book_name }}</p>
									<a href="{{ route('book.addToCart', ['id'=>$book->book_id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div>
		<button class="left recommended-item-control" id="left" value="{{ $listBook[0]->book_id }}">
			<i class="fa fa-angle-left"></i>
		</button>
		<button class="right recommended-item-control" id="right" value="{{ $listBook[2]->book_id }}">
			<i class="fa fa-angle-right"></i>
		</button>
	</div>
</div>

{{-- <div class="recommended_items left-sidebar"><!--recommended_items-->
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
</div> --}}



<div class="category-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tshirt" data-toggle="tab">Văn Học</a></li>
			<li><a href="#blazers" data-toggle="tab">Giáo Dục</a></li>
			<li><a href="#sunglass" data-toggle="tab">Thiếu Nhi</a></li>
			<li><a href="#kids" data-toggle="tab">Teen</a></li>
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade active in" id="tshirt">
			<div class="row" id="tabVanHoc" vanhocdau="{{ $listVanHoc[0]->book_id }}" vanhoccuoi="{{ $listVanHoc[3]->book_id }}">
				@foreach ($listVanHoc as $book)
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products book_choose">
							<a href="{{ route("getBookDetail",["id"=>$book->book_id]) }}">
								<div class="productinfo text-center">
									<img src="{{ asset($book->picture) }}" alt="" class="img-fluid" width="100" height="145">
									<h2>${{ $book->price }}</h2>
									<p>
										@php
										if (strlen($book->book_name)>27) {
											echo substr($book->book_name, 0,23).'...';
										}
										else{
											echo $book->book_name;
										}
										@endphp
									</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
								</div>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div >
				
				<button id="vanhocright" class="btn btn-primary pull-right"><i class="fa fa-angle-right"></i></button>

				<button id="vanhocleft" class="btn btn-primary pull-right"><i class="fa fa-angle-left"></i></button>
			</div>
		</div>




		<div class="tab-pane fade" id="blazers">
			@if (count($listGiaoDuc)>0)
			<div class="row" id="tabGiaoDuc" giaoducdau="{{ $listGiaoDuc[0]->book_id }}" giaoduccuoi="{{ $listGiaoDuc[3]->book_id }}">
				@foreach ($listGiaoDuc as $book)
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products book_choose">
							<a href="{{ route("getBookDetail",["id"=>$book->book_id]) }}">
								<div class="productinfo text-center">
									<img src="{{ asset($book->picture) }}" alt="" class="img-fluid" width="100" height="145">
									<h2>${{ $book->price }}</h2>
									<p>{{ $book->book_name }}</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div >
				
				<button id="giaoducright" class="btn btn-primary pull-right"><i class="fa fa-angle-right"></i></button>

				<button id="giaoducleft" class="btn btn-primary pull-right"><i class="fa fa-angle-left"></i></button>
			</div>
			@endif
			
		</div>
		<div class="tab-pane fade" id="sunglass">
			@if (count($listThieuNhi)>0)
			<div class="row" id="tabThieuNhi" thieunhidau="{{ $listGiaoDuc[0]->book_id }}" thieunhicuoi="{{ $listThieuNhi[3]->book_id }}">
				@foreach ($listThieuNhi as $book)
				<div class="col-sm-3">
					<div class="product-image-wrapper ">
						<div class="single-products book_choose">
							<a href="{{ route("getBookDetail",["id"=>$book->book_id]) }}">
								<div class="productinfo text-center">
									<img src="{{ asset($book->picture) }}" alt="" class="img-fluid" width="100" height="145">
									<h2>${{ $book->price }}</h2>
									<p>{{ $book->book_name }}</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div >
				
				<button id="thieunhiright" class="btn btn-primary pull-right"><i class="fa fa-angle-right"></i></button>

				<button id="thieunhileft" class="btn btn-primary pull-right"><i class="fa fa-angle-left"></i></button>
			</div>
			@endif
		</div>

		<div class="tab-pane fade" id="kids">
			@if (count($listTeen)>0)
			<div class="row" id="tabTeen" teendau="{{ $listTeen[0]->book_id }}" teencuoi="{{ $listTeen[3]->book_id }}">
				@foreach ($listTeen as $book)
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products book_choose">
							<a href="{{ route("getBookDetail",["id"=>$book->book_id]) }}">
								<div class="productinfo text-center">
									<img src="{{ asset($book->picture) }}" alt="" class="img-fluid" width="100" height="145">
									<h2>${{ $book->price }}</h2>
									<p>{{ $book->book_name }}</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div >
				
				<button id="teenright" class="btn btn-primary pull-right"><i class="fa fa-angle-right"></i></button>

				<button id="teenleft" class="btn btn-primary pull-right"><i class="fa fa-angle-left"></i></button>
			</div>
			@endif
		</div>

	</div>
</div>

<script>
	$(document).ready(function(){
		$('#right').on('click',function(e){
			e.preventDefault();
			$.ajax({
				url: "{{ url('/admin/next3book') }}"+"/"+$('#nhieusach').attr('hoanggiangnext'),
				method: 'get',
				data: {
					book_id: $('#nhieusach').attr('hoanggiangnext')
				},
				success: function(result){
					var str="";
					for(var i=0;i<result.length;i++)
					{
						str+='<div class="col-sm-4">';
						str+='<div class="product-image-wrapper">';
						str+='<div class="single-products book_choose">';
						str+='<a href="book_detail/'+result[i]["book_id"]+'">';
						str+='<div class="productinfo text-center">';
						str+='<img src="{{ url('') }}'+'/'+result[i]['picture']+'" class="img-fluid" alt="" width="120" height="150">';
						str+='<h2>$'+result[i]['price']+'</h2>'	;			
						if(result[i]["book_name"].length>27){
							var t=result[i]["book_name"];
							t=t.substr(0,24);
							t+="...";
							str+='<p>'+t+'</p>';
						}else{
							str+='<p>'+result[i]["book_name"]+'</p>';
						}				
						str+='<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';			
						str+="</div>"	;		
						str+="</a>"		;
						str+="</div>"	;	
						str+="</div>"	;
						str+="</div>";
					}
					document.getElementById("nhieusach").setAttribute("hoanggiangnext",result[2]["book_id"]);
					document.getElementById("nhieusach").setAttribute("hoanggiangprev",result[0]["book_id"]);
					document.getElementById("nhieusach").innerHTML=str;
				}});
		});

		$('#left').on('click',function(e){
			e.preventDefault();
			$.ajax({
				url: "{{ url('/admin/prev3book') }}"+"/"+$('#nhieusach').attr('hoanggiangprev'),
				method: 'get',
				data: {
					book_id: $('#nhieusach').attr('hoanggiangprev')
				},
				success: function(result){
					console.log(result[0]["book_id"]);
					var str="";
					for(var i=0;i<result.length;i++)
					{
						console.log(result[i]['book_name']);
						str+='<div class="col-sm-4">';
						str+='<div class="product-image-wrapper">';
						str+='<div class="single-products book_choose">';
						str+='<a href="book_detail/'+result[i]["book_id"]+'">';
						str+='<div class="productinfo text-center">';
						str+='<img src="{{ url('') }}'+'/'+result[i]['picture']+'" class="img-fluid" alt="" width="120" height="150">';
						str+='<h2>$'+result[i]['price']+'</h2>'	;			
						if(result[i]["book_name"].length>27){
							var t=result[i]["book_name"];
							t=t.substr(0,24);
							t+="...";
							str+='<p>'+t+'</p>';
						}else{
							str+='<p>'+result[i]["book_name"]+'</p>';
						}					
						str+='<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';			
						str+="</div>"	;		
						str+="</a>"		;
						str+="</div>"	;	
						str+="</div>"	;
						str+="</div>";
					}
					console.log(str);
					document.getElementById("nhieusach").setAttribute("hoanggiangprev",result[0]["book_id"]);
					document.getElementById("nhieusach").setAttribute("hoanggiangprev",result[0]["book_id"]);
					document.getElementById("nhieusach").innerHTML=str;
					console.log(result);
				}});
		});

		$('#vanhocright').on('click',function(e){
			e.preventDefault();
			$.ajax({
				url: "{{ url('/admin/nexttabvanhoc') }}"+"/"+$('#tabVanHoc').attr('vanhoccuoi'),
				method: 'get',
				data: {
					book_id: $('#tabVanHoc').attr('vanhoccuoi')
				},
				success: function(result){
					var str="";
					for(var i=0;i<result.length;i++)
					{
						str+='<div class="col-sm-3">';
						str+='<div class="product-image-wrapper">';
						str+='<div class="single-products book_choose">';
						str+='<div class="productinfo text-center">';
						str+='<img src="{{ url('') }}'+'/'+result[i]["picture"]+'" alt="" class="img-fluid" width="100" height="145" >';
						str+='<h2>$'+result[i]["price"]+'</h2>';
						if(result[i]["book_name"].length>27){
							var t=result[i]["book_name"];
							t=t.substr(0,23);
							t+="...";
							str+='<p>'+t+'</p>';
						}else{
							str+='<p>'+result[i]["book_name"]+'</p>';
						}
						
						str+='<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
						str+='</div>'
						str+='</div>';
						str+='</div>';
						str+='</div>';
					}
					document.getElementById("tabVanHoc").setAttribute("vanhoccuoi",result[3]["book_id"]);
					document.getElementById("tabVanHoc").setAttribute("vanhocdau",result[0]["book_id"]);
					document.getElementById("tabVanHoc").innerHTML=str;
				}});
		});


		$('#vanhocleft').on('click',function(e){
			e.preventDefault();
			$.ajax({
				url: "{{ url('/admin/prevtabvanhoc') }}"+"/"+$('#tabVanHoc').attr('vanhocdau'),
				method: 'get',
				data: {
					book_id: $('#tabVanHoc').attr('vanhocdau')
				},
				success: function(result){
					var str="";
					for(var i=0;i<result.length;i++)
					{
						str+='<div class="col-sm-3">';
						str+='<div class="product-image-wrapper">';
						str+='<div class="single-products book_choose">';
						str+='<div class="productinfo text-center">';
						str+='<img src="{{ url('') }}'+'/'+result[i]["picture"]+'" alt="" class="img-fluid" width="100" height="145" >';
						str+='<h2>$'+result[i]["price"]+'</h2>';
						if(result[i]["book_name"].length>27){
							var t=result[i]["book_name"];
							t=t.substr(0,23);
							t+="...";
							str+='<p>'+t+'</p>';
						}else{
							str+='<p>'+result[i]["book_name"]+'</p>';
						}
						str+='<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
						str+='</div>'
						str+='</div>';
						str+='</div>';
						str+='</div>';
					}
					document.getElementById("tabVanHoc").setAttribute("vanhoccuoi",result[3]["book_id"]);
					document.getElementById("tabVanHoc").setAttribute("vanhocdau",result[0]["book_id"]);
					document.getElementById("tabVanHoc").innerHTML=str;
				}});
		});

	});
</script>

@endsection