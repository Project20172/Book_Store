@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
                        <h1 class="page-header">Sách
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tên sách</label>
                                <input class="form-control" name="txtName" placeholder="Vui lòng nhập tên sách" />
                            </div>
                            <div class="form-group">
                                <label>Tác giả</label>
                                <select class="form-control" id="sel1">
        								<option>1</option>
								        <option>2</option>
								        <option>3</option>
								        <option>4</option>
								</select>
                            </div>
                            <div class="form-group">
                                <label>Nhà xuất bản</label>
                                <input class="form-control" name="txtName" placeholder="Vui lòng nhập tên sách" />
                            </div>
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" id="sel1">
        								<option>1</option>
								        <option>2</option>
								        <option>3</option>
								        <option>4</option>
								</select>
                            </div>
                            <div class="form-group">
                                <label>Giá sách</label>
                                <input class="form-control" type="number" min="0" value="0" id="example-number-input">
                            </div>
                            <div class="form-group">
                                <label>ISBN</label>
                                <input class="form-control" name="txtPrice" placeholder="Vui lòng nhập giá sách" />
                            </div>
                            <div class="form-group">
                                <label>Ngôn ngữ</label>
                                <input class="form-control" name="txtPrice" placeholder="Vui lòng nhập ngôn ngữ" />
                            </div>
                            <div class="form-group">
                                <label>Năm xuất bản</label>
                                <input class="form-control" name="txtPrice" placeholder="Vui lòng nhập nhà xuất bản" />
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" type="number" value="0" min="0" id="example-number-input">
                            </div>
                            <div class="form-group">
                                <label>Đánh giá</label>
                                <input class="form-control" name="txtPrice" placeholder="Vui lòng nhập giá sách" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh bìa</label>
                                <input type="file" name="fImages">
                            </div>
                            <div class="form-group">
                                <label>Mô tả sách</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm sách</button>
                            <button type="reset" class="btn btn-default">Nhập lại</button>
                        <form>
                    </div>
@endsection