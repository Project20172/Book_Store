@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
                        <h1 class="page-header">Sách
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
                            @endforeach
                        @endif
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{ session('thongbao') }}
                            </div>
                        @endif
                        <form action="{{ route('postAddBook') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Ảnh bìa</label>
                                <input type="file" name="picture">
                            </div>
                            <div class="form-group">
                                <label>Tên sách</label>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input class="form-control" name="book_name" placeholder="Vui lòng nhập tên sách" />
                            </div>
                            <div class="form-group">
                                <label>Tác giả</label>
                                <select class="form-control" id="author" name="author">
                                    @foreach ($listAuthor as $author)
        								<option value="{{ $author->author_id }}">{{ $author->name }}</option>
                                    @endforeach
								</select>
                            </div>
                            <div class="form-group">
                                <label>Nhà xuất bản</label>
                                <input class="form-control" name="publisher" placeholder="Vui lòng nhập nhà xuất bản" />
                            </div>
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" id="category" name="category">
                                    @foreach ($listCategory as $category)
        								<option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                    @endforeach
								</select>
                            </div>
                            <div class="form-group">
                                <label>Giá sách</label>
                                <input class="form-control" name="price" type="number" min="0" value="0" id="example-number-input">
                            </div>
                            <div class="form-group">
                                <label>ISBN</label>
                                <input class="form-control" name="ISBN" placeholder="Vui lòng nhập giá sách" />
                            </div>
                            <div class="form-group">
                                <label>Ngôn ngữ</label>
                                <input class="form-control" name="language" placeholder="Vui lòng nhập ngôn ngữ" />
                            </div>
                            <div class="form-group">
                                <label>Năm xuất bản</label>
                                <input class="form-control" name="publish_year" type="number"   placeholder="Vui lòng nhập năm xuất bản" />
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" type="number" name="quantity" id="example-number-input">
                            </div>
                            <div class="form-group">
                                <label>Đánh giá</label>
                                <input class="form-control" name="rating" type="number" placeholder="Vui lòng nhập đánh giá sách" />
                            </div>
                            
                            <div class="form-group">
                                <label>Mô tả sách</label>
                                <textarea class="form-control" name="abstract" rows="3" placeholder="Nhập mô tả về sách"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm sách</button>
                            <button type="reset" class="btn btn-default">Nhập lại</button>
                        <form>
                    </div>
@endsection