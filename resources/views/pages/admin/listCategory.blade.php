@extends('pages.admin.frame')
@section('content')
<div class="col-lg-12">
                        <h1 class="page-header">Thể loại
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên thể loại</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $item->category_id }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('getEditCategory',$item->category_id) }}">Sửa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

@endsection