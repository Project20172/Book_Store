@extends('layout.master')
@section('container')
<div class="container">
	<h4>
	    3. Chọn phương thức thanh toán
	</h4>
  <div class="row">
    <div class="col-sm-8">
        <div class="panel panel-default">
          <div class="panel-body">
             
              <form class="form-horizontal">
                <div>
                  <label><input type="radio" name="pay_by_cash">Thanh toán tiền mặt khi nhận hàng
                  </label>
                </div>
                <div>
                  <label><input type="radio" name="pay_by_creditcard">Thẻ ATM nội địa/Internet Banking (Miễn phí thanh toán)</label>
                  <div class="panel panel-default" id="credit_card_info" style="padding-left: 30px;">
                    <div class="panel-body">
                
                      <div class="form-group" id="div-card-num">
                        <label for="card_number">Số thẻ:</label>
                        
                        <input type="text" class="form-control" id="card_number" name="card_number" placeholder="VD: 4123 4567 8901 2345" value="" style="width: 40%;">
                                    
                      </div>
                      <div class="form-group" id="card_name">
                        <label for="bill_to_name">Tên in trên thẻ:</label>
                        <input type="text" class="form-control" id="bill_to_name" name="bill_to_name" placeholder="vd: Nguyen Van A" value="" style="width: 40%;">
                      </div>
                      <div class="form-group" id="select-card-date">
                        <label for="card_expiry">Ngày hết hạn:</label>
                        <div class="end-date-cvc">
                          <input type="text" id="card_expiry" class="form-control is-small-2 " value="" placeholder="MM/YY" autocomplete="off" style="width: 100px">
                          <input type="hidden" name="card_expiry_date" value="">
                        </div>
                                      
                      </div>
                    <div class="form-group">
                      <label for="card_cvn">Mã bảo mật:</label>
                      <div class="end-date-cvc">
                        <input type="text" class="form-control is-small-2" id="card_cvn" name="card_cvn" placeholder="VD: 123" value="" autocomplete="off" style="width: 100px">
                                          
                    </div>
                                    
                  </div>
                          <!-- <label>Tên in trên thẻ</label><br>
                          <input type="text" name="card_name"><br>
                          <label>Ngày hết hạn</label><br>
                          <input type="text" name="date_expire"><br>
                          <label>Mã bảo mật</label><br>
                          <input type="text" name="security_code"><br> -->
                        <!-- </form> -->
              </div>
            </div>
          </div>
                
          <div class="form-group">        
            <div class="col-sm-8">
              <button type="submit" class="btn btn-primary" style="width: 200px; height: 40px;">Quay lại
              </button>
              <button type="submit" class="btn btn-primary" style="width: 200px; height: 40px;">Đặt hàng
              </button>
                   
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-body">
          
          <p>Địa chỉ giao hàng</p>
          
          <div style="border-top: 1px solid #c9c9c9; padding-top: 10px;
                        margin-top: 10px;">
            <h4 id="receiver_name">Ngô Vân Anh</h4>
            <div style="margin-top: 10px;">
              <p id="receiver_address">
                Đại học Bách Khoa Hà Nội, số 1, Đại Cồ Việt, Hai Bà Trưng, Hà Nội.
              </p>
          </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body">

          <p>Đơn hàng (<span id="number_products">2</span>)sản phẩm</p>
          <div style=" padding-top: 10px;
                        margin-top: 10px;">
            <table class="table" id="order_list">
              
              <tbody>
                <tr>
                  <td><span id="number1">1 x </span>Nắng</td>
                  <td style="text-align: right;"><span id="price1">70.000đ</span></td>
                  
                </tr>
                <tr>
                  <td><span id="number1">1 x </span>Mây</td>
                  <td style="text-align: right;"><span id="price1">60.000đ</span></td>
                  
                </tr>
              </tbody>
            </table>
            <table class="table" id="total_order_list">
              <tr>
                <td>Tạm tính</td>
                <td style="text-align: right;"><span id="price1">130.000đ</span></td>
              </tr>
              <tr>
                <td>Phí vận chuyển</td>
                <td style="text-align: right;"><span id="price1">12.000đ</span></td>
              </tr>
              <tr>
                <td><h4><b>Thành tiền</b></h4></td>
                <td style="text-align: right;"><h4><b><span id="total">142.000đ<b></span></h4></td>

              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</div>          
@endsection 
