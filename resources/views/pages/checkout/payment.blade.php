@extends('layout')
@section('content')
<section class="col-lg-8">
    <!-- Steps-->
    <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="/show-cart">
        <div class="step-progress"><span class="step-count">1</span></div>
        <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active" href="/checkout">
       <div class="step-progress"><span class="step-count">3</span></div>
        <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item active current" href="/payment">
        <div class="step-progress"><span class="step-count">4</span></div>
        <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item" href="/payment">
        <div class="step-progress"><span class="step-count">5</span></div>
        <div class="step-label"><i class="ci-check-circle"></i>Review</div></a></div>
    <!-- Payment methods accordion-->
    <h2 class="h6 pb-3 mb-2">Choose payment method</h2>
    <form method="post" action="{{URL::to('/order-place')}}">
      {{ csrf_field() }}
    <div class="accordion mb-2" id="payment-method">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="payment_option" value="1">
        <label class="form-check-label" for="inlineRadio1">Paying Cash</label>
      </div><br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="payment_option" value="2">
        <label class="form-check-label" for="inlineRadio1">Credit Card</label>
      </div><br>
    </div>
      
    <!-- Navigation (desktop)-->
    <div class="d-none d-lg-flex pt-4">
      <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="/checkout"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Shipping</span><span class="d-inline d-sm-none">Back</span></a></div>
      <div class="w-50 ps-2"><input class="btn btn-primary d-block w-100" type="submit" name="orderplace" value="Review To Order" class="btn btn-default btn-sm"></div>
    </div>
  </section>
  @endsection