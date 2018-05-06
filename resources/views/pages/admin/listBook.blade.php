@extends('pages.admin.frame')
@section('content')
	<div class="col-lg-12">
        <h1 class="page-header">Sách
            <small>Danh sách sách</small>
        </h1>
    </div>
</div>
    @if (session('thongbao'))
        <div class="alert alert-success">
            {{ session('thongbao') }}
        </div>
    @endif
    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ảnh bìa</th>
                                <th>Tên sách</th>
                                <th>Tác giả</th>
                                <th>Thể loại</th>
                                <th>Ngôn ngữ</th>
                                <th>Năm xuất bản</th>
                                <th>Nhà xuất bản</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listBook as $book)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $book->book_id }}</td>
                                    <td>
                                        @if ($book->picture!=null)
                                            <img src="{{ asset($book->picture) }}" class="img-fluid" width="100">
                                        @endif
                                    </td>
                                    <td>{{ $book->book_name }}</td>
                                    <td>{{ $book->getAuthor->name }}</td>
                                    <td>{{ $book->getCategory->category_name }}</td>
                                    <td>{{ $book->language }}</td>
                                    <td>{{ $book->publish_year }}</td>
                                    <td>{{ $book->publisher }}</td>
                                    <td>{{ $book->price }}</td>
                                    <td>{{ $book->quantity }}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="remove-book/{{ $book->book_id }}"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="edit-book/{{ $book->book_id }}">Sửa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
@endsection