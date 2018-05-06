@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
                        <h1 class="page-header">Tác giả
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
                    			<br>
                    		@endforeach
                    	@endif
                    	@if (session('thongbao'))
                    		<div class="alert alert-success">
                    			{{ session('thongbao') }}
                    		</div>
                    	@endif
                        <form action="{{ route('postAddAuthor') }}" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group">

                                <label>Ảnh bìa</label>
                                <input type="file" name="author_picture">
                            </div>

                            <div class="form-group">
                            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label>Tên tác giả</label>
                                <input class="form-control" name="author_name" placeholder="Vui lòng nhập tên tác giả" />
                            </div>

                            <div class="form-group">
                                <label>Giới thiệu</label>
                                <textarea name="author_describe" class="form-control" rows="3" placeholder="Giới thiệu qua về tác giả"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm tác giả</button>
                            <button type="reset" class="btn btn-default">Nhập lại</button>
                        <form>
                    </div>
@endsection