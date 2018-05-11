@extends('pages.admin.frame')
@section('content')
<section class="wrapper">
  <!-- page start-->
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Danh Sách Thể Loại
        </header>
        <div class="panel-body">
          <div class="clearfix">
            <div class="btn-group">
              <button id="editable-sample_new" class="btn green">
                <a href="{{ route('getAddCategory') }}">
                  Thêm Thể Loại <i class="fa fa-plus"></i>
                </a>
              </button>
            </div>
            <div class="btn-group pull-right">
              <button class="btn dropdown-toggle" data-toggle="dropdown">Công cụ <i class="fa fa-angle-down"></i>
              </button>
              <ul class="dropdown-menu pull-right">
                <li><a href="#">In</a></li>
                <li><a href="#">Lưu ra pdf</a></li>
                <li><a href="#">Lưu ra Excel</a></li>
              </ul>
            </div>
          </div>
        </div>
        @if (count($errors)>0)
        @foreach ($errors->all() as $element)
        <div class="alert alert-danger">
          {{ $element }}
        </div>
        <br>
        @endforeach
        @endif
        @if (session('thongbao'))
        <div class="alert alert-success">
          {{ session('thongbao') }}
        </div>
        @endif
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> ID</th>
              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Tên Thể Loại</th>
              <th style="width: 10%"></th>
            </tr>
          </thead>
          <tbody>
           @foreach ($list as $category)
           <tr>
             <td><a href="#">{{ $category->category_id }}</a></td>
             <td class="hidden-phone">{{ $category->category_name }}</td>
             <td>
               <button class="btn btn-primary btn-xs"><a class="agiang" href="{{ route('getEditCategory',$category->category_id) }}"><i class="fa fa-pencil"></i></a></button>
               <button class="btn btn-danger btn-xs"><a class="agiang" href="{{ route('getRemoveCategory',$category->category_id) }}"><i class="fa fa-trash-o "></i></a></button>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
       <div class="text-center">
         {{ $list->links() }}
       </div>
     </section>
   </div>
 </div>
 <!-- page end-->
</section>
@endsection