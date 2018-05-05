@extends('pages.admin.frame')
@section('content')
<div class="col-lg-12">
	<h1 class="page-header">Sách
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
	@endforeach
	@endif
	@if (session('thongbao'))
	<div class="alert alert-success">
		{{ session('thongbao') }}
	</div>
	@endif
	<form action="{{ route('postEditBook') }}" method="POST" enctype="multipart/form-data">
		<div class="form-group">
					<label>Ảnh bìa</label>
					@if ($book->picture!="")
						<div>
						<img class="img-fluid" width="120" src="{{ asset($book->picture) }}">
					</div>
					@endif
					<input type="file" name="picture">
				</div>
		<div class="form-group">
			<label>Tên sách</label>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="book_id" value="{{ $book->book_id }}" >
			<input class="form-control" name="book_name" value="{{ $book->book_name }}" />
		</div>
		<div class="form-group">
			<label>Tác giả</label>
			<select class="form-control" id="author" name="author" value="{{ $book->author_id }}">
				@foreach ($listAuthor as $author)
				<option value="{{ $author->author_id }}" @if ($author->author_id==$book->author_id)
					selected="selected" 
					@endif>{{ $author->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Nhà xuất bản</label>
				<input class="form-control" name="publisher" value="{{ $book->publisher }}" />
			</div>
			<div class="form-group">
				<label>Thể loại</label>
				<select class="form-control" id="category" name="category" >
					@foreach ($listCategory as $category)
					<option value="{{ $category->category_id }}"
						@if ($category->category_id==$book->category_id)
						selected="selected" 
						@endif
						>{{ $category->category_name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Giá sách</label>
					<input class="form-control" name="price" type="number" min="0" value="{{ $book->price }}" id="example-number-input">
				</div>
				<div class="form-group">
					<label>ISBN</label>
					<input class="form-control" name="ISBN" value="{{ $book->ISBN }}" />
				</div>
				<div class="form-group">
					<label>Ngôn ngữ</label>
					<input class="form-control" name="language" value="{{ $book->language }}" />
				</div>
				<div class="form-group">
					<label>Năm xuất bản</label>
					<input class="form-control" name="publish_year" type="number" value="{{ $book->publish_year }}" min="0" />
				</div>
				<div class="form-group">
					<label>Số lượng</label>
					<input class="form-control" type="number" name="quantity" value="{{ $book->quantity }}" min="0" id="example-number-input">
				</div>
				<div class="form-group">
					<label>Đánh giá</label>
					<input class="form-control" name="rating" min="0" value="{{ $book->rating }}" type="number" />
				</div>
				
				<div class="form-group">
					<label>Mô tả sách</label>
					<textarea class="form-control" name="abstract" rows="3" placeholder="Nhập mô tả về sách">{{ $book->abstract }}</textarea>
				</div>
				<button type="submit" class="btn btn-default">Sửa sách</button>
				<button type="reset" class="btn btn-default">Nhập lại</button>
				<form>
				</div>
@endsection