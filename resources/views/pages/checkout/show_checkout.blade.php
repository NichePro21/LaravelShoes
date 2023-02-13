@extends('layout')
@section('content')
<style type="text/css">
    .row input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }
      .shipping-addressnew{
        display: none;
      }
</style>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/show-cart">Shopping Cart</a></li>
            <li><a href="/check-out">Checkout</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12">
                <h1>Checkout</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#collapse-shipping-address" data-toggle="collapse"
                                data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false"><span
                                    class="number">1</span>Checkout</a></h4>
                    </div>
                    <form class="form-horizontal" action="{{URL::to('/confirm-order')}}" method="post">
                        {{csrf_field()}}
                        @foreach ($information as $key => $value)
                         @php// print_r($value); 
                         $array = json_decode(json_encode($information), true);
                         
                         @endphp
                        <div class="panel-collapse collapse in" id="collapse-checkout-confirm" aria-expanded="true" style="">
                            <div class="panel-body">
                                    
                                    <div id="shipping-existing">
                                        <select name="default_shipping" class="form-control">
                                            <option value="Defaultship" selected="selected">{{$value->CName}}, {{$value->CAdd}},
                                                {{$value->Cward}},{{$value->Ccity}},{{$value->CPhone}}</option>
                                                <input type="hidden" value="{{$value->CName}}" id="CName" name="CName">
                                                <input type="hidden" value="{{$value->CAdd}}" id="CAdd" name="CAdd">
                                                <input type="hidden" value="{{$value->Cward}}" id="Cward" name="Cward">
                                                <input type="hidden" value="{{$value->Ccity}}" id="Ccity" name="Ccity">
                                                <input type="hidden" value="{{$value->CPhone}}" id="CPhone" name="CPhone">
                                                <input type="hidden" value="{{$value->CEmail}}" id="CEmail" name="CEmail">
                                        </select>
                                        <p>Select an option:</p>
                                        <input type="checkbox" id="showcheckbox"  name="showcheckbox" value="yes" /> 
                                        <label for="show">Add new Address</label>
                                        <div class="panel body shipping-addressnew" id="shipping-addressnew">
                                                <div class="col-50">
                                                  <h3>Shipping Address</h3><br>
                                                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                                  <input type="text" id="newfullname" name="newfullname" placeholder="Name" required>
                                                  <label for="adr"><i class="fa fa-institution" aria-hidden="true"></i> Address</label>
                                                  <input type="text" id="newAddress" name="newAddress" placeholder="28 Cach mang thang 8" required>
                                                  <label for="city"><i class="fa fa-institution" ></i> Ward</label>
                                                  <input type="text" id="newWard" name="newWard" placeholder="Ward" required>
                                                  <label for="city"><i class="fa fa-institution"></i> City</label>
                                                  <input type="text" id="newCity" name="newCity" placeholder="Ho Chi Minh City" required>
                                                  <label for="city"><i class="fa fa-envelope-o"></i>Email</label>
                                                  <input type="text" id="newEmail" name="newEmail" placeholder="Ho Chi Minh City" required>
                                                  <label for="city"><i class="fa fa-phone" aria-hidden="true"></i>Telephone</label>
                                                  <input type="text" id="newPhone" name="newPhone" placeholder="Ho Chi Minh City" required>
                                                </div>
                                        </div>

                                    </div>
                                    <br>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="payment_method" value="cod" checked="checked">
                                                Cash On Delivery </label>
                                        </div>
                                      
                                        <div class="radio">
                                         
                                            <p><strong>Flat Rate</strong></p>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="shipping_method" value="1" checked="checked">
                                                    Flat Shipping Rate - $5.00</label>
                                            </div>
                                            <p><strong>Add Comments About Your Order</strong></p>
                                            <p>
                                                <textarea name="shipping_notes" rows="8" class="form-control"></textarea>
                                            </p>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Model</td>
                                                <td class="text-right">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $total = 0;
                                            $subtotal = 0;
                                        @endphp
                                            @foreach (Session::get('cart') as $key => $cart)
                                            @php 
                                             $subtotal = $cart['product_price'] * $cart['product_qty'];
                                            $total += $subtotal + 5;
                                            @endphp
                                            <tr>
                                                <td class="text-left"><b>{{ $cart['product_name'] }}</b>
                                                </td>
                                                <td class="text-left">YFTK {{ $cart['PID'] }}</td>
                                                <td class="text-right">{{ $cart['product_qty'] }}</td>
                                                <td class="text-right">${{ number_format($cart['product_price'], 0, ',', '.') }}</td>
                                                <td class="text-right">${{ number_format($cart['product_price'], 0, ',', '.') }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Sub-Total:</strong></td>
                                                <td class="text-right">${{ number_format($subtotal, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Flat Shipping Rate:</strong>
                                                </td>
                                                <td class="text-right">$5.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Total:</strong></td>
                                                <td class="text-right">${{ number_format($total, 0, ',', '.') }}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="buttons">
                                    <div class="pull-right">
                                        {{-- <input type="button" value="Confirm Order" id="button-confirm" class="btn btn-primary" data-loading-text="Loading..."> --}}
                                        <button value="Confirm Order" data-loading-text="Loading..." class="btn btn-primary add-to-checkout" >Confirm Order</button>
                                    </div>
                                </div>
                           
                            </div>
                    </div>
                    @endforeach
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        // function valueChanged()
        // {
        //     if($('.showcheckbox').is(":checked"))   
        //     $(".shipping-addressnew").hide();
        //     else
        //     $(".shipping-addressnew").show();
               
        // }
            $(function() {
            $("#showcheckbox").on("click",function() {
                $(".shipping-addressnew").toggle(this.checked);
            });
            });
    </script>
      
@endsection
