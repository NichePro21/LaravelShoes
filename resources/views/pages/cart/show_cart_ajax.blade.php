@extends('layout')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart wow bounceInUp animated">
                    <div class="row">
                        <div id="content" class="col-sm-12">
                            <div class="page-title">
                                <h2>Shopping Cart </h2>
                            </div>
                            <form action="/update-cart" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="table-responsive">
                                    <table class="data-table cart-table" id="shopping-cart-table">
                                        <thead>
                                            <tr>
                                                <td class="text-center">Image</td>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Model</td>
                                                <td class="text-left">Size</td>
                                                <td class="text-left">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(Session::get('cart')==true)
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach (Session::get('cart') as $key => $cart)
                                                @php
                                                    $subtotal = $cart['product_price'] * $cart['product_qty'];
                                                    $total += $subtotal;
                                                @endphp
                                                <tr>
                                                    <td class="text-center"><img
                                                            src="{{ asset('public/uploads/product/' . $cart['product_image']) }}"
                                                            width="90" alt="{{ $cart['product_name'] }}" /></a>
                                                    </td>
                                                    <td class="text-left">{{ $cart['product_name'] }}
                                                    </td>
                                                    <td class="text-left">YFTK {{ $cart['PID'] }}</td>
                                                    <td class="text-left">{{ $cart['product_size'] }}</td>
                                                    
                                                    <td class="text-left">
                                                        <div class="input-group btn-block" style="max-width: 200px;">
                                                            <input type="number" name="cart_qty[{{$cart['session_id']}}]"
                                                                min="1" value="{{ $cart['product_qty'] }}"
                                                                class="form-control cart_quantity">
                                                            <span style="padding-left:10px" class="input-group-btn">
                                                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                                                
                                                                <a href="{{url('/del-product/'.$cart['session_id'])}}" data-toggle="tooltip" class="btn btn-danger cart_quantity_delete"" data-original-title="Remove"><i class="fa fa-times-circle"></i></button></a>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        ${{ number_format($cart['product_price'], 0, ',', '.') }}</td>
                                                    <td class="text-right">
                                                        ${{ number_format($cart['product_price'], 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-sm-8 col-xs-12">

                                    {{-- <h2>What would you like to do next?</h2>
                                    <p>Choose if you have a discount code or reward points you want to use or would like to
                                        estimate your delivery cost.</p>
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#collapse-coupon" class="accordion-toggle"
                                                        data-toggle="collapse" data-parent="#accordion">Use Coupon Code <i
                                                            class="fa fa-caret-down"></i></a></h4>
                                            </div>
                                            <div id="collapse-coupon" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <label class="col-sm-2 control-label" for="input-coupon">Enter your
                                                        coupon here</label>
                                                    <div class="input-group">
                                                        <input type="text" name="coupon" value=""
                                                            placeholder="Enter your coupon here" id="input-coupon"
                                                            class="form-control">
                                                        <span class="input-group-btn">
                                                            <input type="button" value="Apply Coupon" id="button-coupon"
                                                                data-loading-text="Loading..." class="btn btn-primary">
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Total:</strong></td>
                                                <td class="text-right">$ {{ number_format($total, 0, ',', '.') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="pull-left">
                                    <!--  <a href="" class="btn btn-default"></a> -->
                                    <button
                                        onclick="window.location='http://brezzademo3.magikthemes.com/index.php?route=common/home'"
                                        class="button btn-continue" type="button"><span><span>Continue
                                                Shopping</span></span></button>
                                </div>
                                <div style="margin-left:10px" class="pull-left">
                                    <!--  <a href="" class="btn btn-default"></a> -->
                                    <button
                                        onclick="window.location='/update-cart'"
                                        class="button btn-continue" type="button"><span><span>Update
                                                Quantity</span></span></button>
                                </div>
                                <div class="pull-right">
                                    <!-- <a href="" class="btn btn-primary"></a> -->
                                    <button onclick="window.location='/checkout'" class="button btn-proceed-checkout" type="button"><span>Checkout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <div class="main container">
        <div class="row">                <div id="content" class="col-sm-12">     
            <section class="content-wrapper bounceInUp animated">
              <div class="container">
                <div class="std">
                  <div class="page-not-found">
                    <h2></h2>
                    <h3>Your shopping cart is empty!</h3>
                    <div><a href="/" class="btn-home"><span>Continue</span></a></div>
                  </div>
                </div>
              </div>
            </section>
                </div>
          </div>
      </div>
    @endif
@endsection
