@extends('layout.master')
@section('container')
<div class="container">
	<h4>
	    2. Địa chỉ giao hàng
	</h4>
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" action="/action_page.php">
                <div class="form-group">
                  <label class="control-label col-sm-4" for="full_name">Họ tên</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="full_name" placeholder="Nhập họ tên" name="full_name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="phone_number">Số điện thoại di động
                  </label>
                  <div class="col-sm-8">          
                    <input type="text" class="form-control" id="phone_number" placeholder="Nhập số điện thoại" name="phone_number">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="city">Tỉnh/Thành phố
                  </label>
                  <div class="col-sm-8">          
                    <input type="text" class="form-control" id="city" placeholder="Nhập thành phố" name="city">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="distric">Quận/Huyện
                  </label>
                  <div class="col-sm-8">          
                    <input type="text" class="form-control" id="distric" placeholder="Nhập quận/huyện" name="distric">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="commune">Phường/Xã
                  </label>
                  <div class="col-sm-8">          
                    <input type="text" class="form-control" id="commune" placeholder="Nhập phường/xã" name="commune">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-4" for="address">Địa chỉ
                  </label>
                  <div class="col-sm-8">          
                    <textarea type="text" class="form-control" id="address" placeholder="Ví dụ: số 12, Trần Hưng Đạo" name="address">
                    </textarea>
                  </div>
                </div>
                
                <div class="form-group">        
                  <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default" style="width: 120px; height: 40px">Hủy bỏ</button>
                    <button type="reset" class="btn btn-primary" style="width: 120px; height: 40px;">Tiếp tục</button>
                  </div>
                </div>
            </form>

        </div>
    </div>
    
</div>          
@endsection 