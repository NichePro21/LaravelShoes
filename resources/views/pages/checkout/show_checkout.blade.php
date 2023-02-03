@extends('layout')
@section('content')
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
      <section class="col-lg-8">
        <!-- Steps-->
        <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="/show-cart">
            <div class="step-progress"><span class="step-count">1</span></div>
            <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active current" href="/checkout">
            <div class="step-progress"><span class="step-count">2</span></div>
            <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item" href="/payment">
            <div class="step-progress"><span class="step-count">4</span></div>
            <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item" href="checkout-review.html">
            <div class="step-progress"><span class="step-count">5</span></div>
            <div class="step-label"><i class="ci-check-circle"></i>Review</div></a></div>
        <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
        <form action="{{URL::to('/save-checkout-customer')}}" method="post">
          {{csrf_field()}}
          @foreach($shippingAddress as $key => $value)
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              
              <label class="form-label" for="checkout-fn">Họ Tên</label>
              <input class="form-control" type="text" name="shipping_name" value="{{$value->shipping_name}}" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label class="form-label" for="checkout-address-1">Địa Chỉ</label>
              <input class="form-control" type="text" name="shipping_address" value="{{$value->shipping_address}}" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label class="form-label" for="checkout-address-1">Phường/Xã</label>
              <input class="form-control" type="text" name="shipping_ward" value="{{$value->shipping_ward}}" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label class="form-label" for="checkout-address-1">Thành Phố</label>
              <input class="form-control" type="text" name="shipping_city" value="{{$value->shipping_city}}" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label class="form-label" for="checkout-phone">Số Điện Thoại</label>
              <input class="form-control" type="text" name="shipping_phone" value="{{$value->shipping_phone}}" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-3">
              <label class="form-label" for="checkout-phone">Email</label>
              <input class="form-control" type="text" name="shipping_email" value="{{$value->shipping_email}}" required>
            </div>
          </div>
        </div>
        @endforeach
        <!-- Navigation (desktop)-->
        <div class="d-none d-lg-flex pt-4 mt-3">
          <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="/show-cart"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
          <div class="w-50 ps-2"><input class="btn btn-primary d-block w-100" type="submit" name="update_qty" value="Process to Order" class="btn btn-default btn-sm"></div>
        </div>
       
      </form>
      </section>
      <!-- Sidebar-->
      
    </div>
    <!-- Navigation (mobile)-->
    <div class="row d-lg-none">
      <div class="col-lg-8">
        <div class="d-flex pt-4 mt-3">
          <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="/show-cart"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
          <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="/payment"><span class="d-none d-sm-inline">Proceed to Shipping</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
        </div>
      </div>
    </div>
  </div>

@endsection