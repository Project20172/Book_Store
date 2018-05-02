@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
                        <h1 class="page-header">Tác giả
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Giới thiệu</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach ($listAuthor as $author)
                        		<tr align="center">
                                    <td>{{ $author->author_id }}</td>
                                    <td><img class="img-fluid" width="100" src="{{ asset($author->author_image) }}"></td>
                                    <td>{{ $author->name }}</td>
                                    <td>{{ $author->author_describe }}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="edit-author/{{ $author->author_id }}">Sửa</a></td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
@endsection