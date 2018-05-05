@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
                        <h1 class="page-header">Thể loại
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
                        <form action="{{ route('postEditCategory') }}" method="POST">
                            <div class="form-group">
                                @foreach ($category as $element)
                                    <label>Tên thể loại</label>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $element->category_id }}">
                                    <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{{ $element->category_name }}" />
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-default">Sửa thể loại</button>
                            <button type="reset" class="btn btn-default">Nhập lại</button>
                        <form>
                    </div>
@endsection