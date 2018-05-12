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
              Sửa Thông Tin Đặt Hàng
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
              <form role="form" action="{{ route('postEditOrderDetail') }}" method="POST" enctype="multipart/form-data">
                @foreach ($item as $element)
                <div class="col-sm-8">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Order ID</label>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input class="form-control" name="order_id" value="{{ $element->order_id }}" readonly="">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User ID</label>
                      <input class="form-control" name="user_id" readonly="" value="{{ $element->user_id }}">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Người Nhận</label>
                      <input class="form-control" name="receiver_name" readonly="" value="{{ $element->receiver_name }}">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Địa Chỉ</label>
                      <input class="form-control" name="address" readonly="" value="{{ $element->address }}" >
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Thành Phố</label>
                      <input name="city" class="spinner-input form-control" readonly="" value="{{ $element->city }}">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Thời Gian Đặt Hàng</label>
                      <input class="form-control" name="date_created" readonly="" value="{{ $element->date_created }}">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phương Thức Thanh Toán</label>
                      <input class="form-control" name="method_payment" @if ($element->method_payment=0)
                      value="Tiền Mặt" 
                      @else
                      value="ATM"
                      @endif readonly="">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Trạng Thái</label>
                      <select class="form-control m-bot15" name="status">
                        @if ($element->status==-1)
                        <option value="-1" selected="">Từ Chối</option>
                        <option value="0">Đang Duyệt</option>
                        <option value="1">Chấp Nhận</option>
                        @elseif($element->status==0)
                        <option value="-1">Từ Chối</option>
                        <option value="0" selected="">Đang Duyệt</option>
                        <option value="1">Chấp Nhận</option>
                        @else
                        <option value="-1">Từ Chối</option>
                        <option value="0">Đang Duyệt</option>
                        <option value="1" selected="">Chấp Nhận</option>
                        @endif
                      </select>
                    </div>
                  </div> 
                  <div class="col-sm-5">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Thời Gian Nhận</label>
                      <input type="datetime-local" name="date_received" value="{{ date('Y-m-d',strtotime($element->date_received)).'T'.date('h:m',strtotime($element->date_received)) }}" class="spinner-input form-control">
                    </div>
                  </div> 
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tổng Tiền</label>
                      <input class="form-control" readonly="" name="total_money" value="{{ $element->total_money }}">
                    </div>
                  </div> 
                  @endforeach
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">Sửa Thông Tin Đặt Hàng</button>
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