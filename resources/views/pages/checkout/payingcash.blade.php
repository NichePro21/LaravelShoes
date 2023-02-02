
@extends('layout')
@section('content')
<div class="card py-3 mt-sm-3">
    <div class="card-body text-center">
      <h2 class="h4 pb-3">Thank you for your order!</h2>
      <p class="fs-sm mb-2">Your order has been placed and will be processed as soon as possible.</p>
      <p class="fs-sm mb-2">Make sure you make note of your order number, which is <span class="fw-medium">{{ Session::put('SeriNo')}}.</span></p>
      <p class="fs-sm">You will be receiving an email shortly with confirmation of your order. <u>You can now:</u></p><a class="btn btn-secondary mt-3 me-3" href="/">Go back shopping</a>
    </div>
  </div>

  @endsection