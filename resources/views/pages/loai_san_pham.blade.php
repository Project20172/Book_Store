@extends('layout.frame')
@section('content')
<br>
<div class="features_items"><!--features_items-->
	<br>
	<div class="left-sidebar">
	<h2 class="title text-center">Kết quả tìm thấy</h2></div>
	<div class="row">
		@foreach ($listBook as $book)
			<div class="col-sm-3">
			<div class="product-image-wrapper">
				<div class="single-products book_choose">
					<a href="">
						<div class="productinfo text-center">
							<br>
							<img class="img-fluid" src="../{{ $book->picture }}" alt="" width="100" height="145">
							<h2>${{ $book->price }}</h2>
							<p>{{ $book->book_name }}</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
						</div>
					</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div >
		<nav aria-label="Page navigation example" class="text-center">
		  <ul class="pagination">
		    <li class="page-item">
		      <a class="page-link" href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		        <span class="sr-only">Previous</span>
		      </a>
		    </li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item"><a class="page-link" href="#">...</a></li>
		    <li class="page-item"><a class="page-link" href="#">10</a></li>
		    <li class="page-item">
		      <a class="page-link" href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		        <span class="sr-only">Next</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	</div>
</div>
@endsection