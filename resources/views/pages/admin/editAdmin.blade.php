@extends('pages.admin.frame')
@section('content')
<section class="wrapper">
  <!-- page start-->
  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <div>
          <section class="panel">
            <header class="panel-heading">
              Sửa Admin
            </header>
            <div class="panel-body">
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
              <form role="form" action="{{ route('postEditAdmin') }}" method="POST" enctype="multipart/form-data">
               <div class="col-sm-8">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="hidden" name="admin_id" value="{{ $admin->admin_id }} }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="form-control" name="user_name" readonly value="{{ $admin->user_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input name="first_name" class="spinner-input form-control" value="{{ $admin->first_name }}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $admin->password }}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input class="form-control" name="last_name" value="{{ $admin->last_name }}" >
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input class="form-control" name="address" value="{{ $admin->address }}" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input name="city" class="spinner-input form-control" value="{{ $admin->city }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input class="form-control" name="phone"  value="{{ $admin->phone }}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" class="spinner-input form-control" value="{{ $admin->email }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Permission</label>
                    <input class="form-control" name="permission"  value="{{ $admin->permission }}">
                  </div>
                </div>
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-success">Sửa Admin</button>
                  <button type="reset" class="btn btn-danger">Nhập Lại</button>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </section>
  </div>
</div>
<!-- page end-->
</section>
@endsection