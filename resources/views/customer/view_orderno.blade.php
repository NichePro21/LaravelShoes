@extends('layoutcus')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li> <a href="/">Home</a>
                        </li>
                        <li><span>/</span> <a href="/my-account">Account</a>
                        </li>
                        <li><span>/</span> <a href="/my-account/orders">Order History</a>
                        </li>
                        <li><span>/</span> <strong>Order Information</strong> </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div id="content" class="col-sm-9">
                    <div class="col-main">
                        <div class="my-account">
                            <div class="page-title">
                                <h2> Order Information</h2>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td class="text-left" colspan="2">Order Details</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left" style="width: 50%;"> <b>Order ID:</b> # @php echo $getorder->order_id @endphp<br>
                                            <b>Date Added:</b> @php echo $getorder->order_date @endphp
                                        </td>
                                        <td class="text-left" style="width: 50%;"> <b>Payment Method:</b> @if($shipping->shipping_method==0) Banking @else Cash On
                                            Delivery @endif<br>
                                            <b>Shipping Method:</b> Flat Shipping Rate
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td class="text-left" style="width: 50%; vertical-align: top;">Default Address</td>
                                        <td class="text-left" style="width: 50%; vertical-align: top;">Shipping Address</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">{{$customer->CName}}<br>{{$customer->CAdd}}<br>{{$customer->Cward}}<br>{{$customer->Ccity}}<br>{{$customer->CPhone}}</td>
                                        <td class="text-left">{{$shipping->shipping_name}}<br>{{$shipping->shipping_address}}<br>{{$shipping->shipping_ward}}
                                            <br>{{$shipping->shipping_city}}<br>{{$shipping->shipping_phone}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td class="text-left">Product Name</td>
                                            <td class="text-left">Model</td>
                                            <td class="text-right">Quantity</td>
                                            <td class="text-right">Price</td>
                                            <td class="text-right">Total</td>
                                            <td style="width: 20px;"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php 
                                        $i = 0;
                                        $total = 0;
                                        @endphp
                                        @foreach($order_details as $key => $details)
                                        @php 
                                       // print_r($details);
                                        $i++;
                                        $subtotal = $details->product_price * $details->product_sales_quantity;
                                            $total += $subtotal;
                                        @endphp
                                        <tr>
                                            <td class="text-left">{{$details->product_name}} </td>
                                            <td class="text-left">YFTK {{$details->product_id}}</td>
                                            <td class="text-right">{{$details->product_sales_quantity}}</td>
                                            <td class="text-right">${{number_format($details->product_price ,0,',','.')}}</td>
                                            <td class="text-right">${{number_format($subtotal ,0,',','.')}}</td>
                                          
                                        </tr>
                                        @endforeach
                                    </tbody>
                                   
                                    <tfoot>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="text-right"><b>Sub-Total</b></td>
                                            <td class="text-right">${{number_format($total ,0,',','.')}}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="text-right"><b>Flat Shipping Rate</b></td>
                                            <td class="text-right">$5.00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td class="text-right"><b>Total</b></td>
                                            <td class="text-right">${{ number_format($total, 0, ',', '.') + 5 }}</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <h3>Order History</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td class="text-left">Date Added</td>
                                        <td class="text-left">Status</td>
                                        <td class="text-left">Comment</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">@php echo $getorder->order_date @endphp</td>
                                        {{-- @foreach ($getorder as $key => $val) --}}
                                        
                                        @if($getorder->order_status==1)
                                        <td class="text-left">Pending</td>
                                        @elseif($getorder->order_status==2)
                                        <td class="text-left">Success</td>
                                        @else
                                        <td class="text-left">Cancel</td>
                                        @endif
                                        {{-- @endforeach --}}
                                        <td class="text-left"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="buttons clearfix">
                                <div class="pull-right">
                                    <!--  <a href="" class="btn btn-primary"></a> -->
                                    <button
                                        onclick="window.location='/my-account/orders'"
                                        class="button continue">Back</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
