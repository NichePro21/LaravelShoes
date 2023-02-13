@extends('admin_layout')
@section('admin_content')


        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">
                    @foreach ($getorder as $key => $or)
                    #Order {{$or->order_id}}
                    @endforeach
                </h4>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="white-box printableArea">
                    <h3><b>INVOICE</b> <span class="pull-right">
                         @foreach ($getorder as $key => $or)
                        #Order {{$or->order_id}}
                        @endforeach
                    </span></h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-left">
                                <address>

                                    <h3> &nbsp;<b class="text-danger">{{ $customer->CName }}</b></h3>
                                    <p class="text-muted m-l-5">{{ $customer->CAdd }},
                                        <br> {{ $customer->Cward }},
                                        <br> {{ $customer->Ccity }},
                                        <br> {{ $customer->CPhone }}
                                    </p>

                                </address>
                            </div>
                    
                            <div class="pull-right text-right">
                                <address>
                                    <h3>To,</h3>
                                    <h4 class="font-bold">{{ $shipping->shipping_name }}</h4>
                                    <p class="text-muted m-l-30">{{ $shipping->shipping_address }},
                                        <br> {{ $shipping->shipping_ward }},
                                        <br> {{ $shipping->shipping_city }},
                                        <br> {{ $shipping->shipping_phone }}
                                    </p>
                                    <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i>
                                        @foreach ($getorder as $key => $or)
                                            {{ $or->order_date }}
                                        @endforeach
                                    </p>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive m-t-40" style="clear: both;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Description</th>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Unit Cost</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 0;
                                        $total = 0;
                                    @endphp
                                    @foreach ($order_details as $key => $details)
                                        @php
                                            // print_r($details);
                                            $i++;
                                            $subtotal = $details->product_price * $details->product_sales_quantity;
                                            $total += $subtotal;
                                           // print_r($details);
                                        @endphp
                                
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $details->product_name }}</td>
                                    <input type="hidden" min="1" readonly {{$order_status==2 ? 'disabled' : ''}} class="order_qty_{{$details->product_id}}" value="{{$details->product_sales_quantity}}" name="product_sales_quantity">
                                    <input type="hidden" name="order_qty_storage" class="order_qty_storage_{{$details->product_id}}" value="{{$details->product->product_quantity}}">

                                    <input type="hidden" name="order_code" class="order_code" value="{{$details->order_code}}">

                                    <input type="hidden" name="order_product_id" class="order_product_id" value="{{$details->product_id}}">
                                            <td class="text-right order_qty_{{$details->product_id}}" name="product_sales_quantity">{{ $details->product_sales_quantity }}</td>
                                            <td class="text-right">
                                                ${{ number_format($details->product_price, 0, ',', '.') }} </td>
                                            <td class="text-right"> ${{ number_format($subtotal, 0, ',', '.') }} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pull-right m-t-30 text-right">
                                
                                <p>Fee Ship: $5 </p>
                                <hr>
                                <h3><b>Total :</b> ${{ number_format($total, 0, ',', '.') + 5 }}</h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="text-right">
                                @foreach ($getorder as $key => $or)
                                    @if ($or->order_status == 1)
                                        <form>
                                            @csrf
                                            
                                            
                                            <div class="col-sm-4">
                                                <select class="form-control selectpicker order_details">
                
                                                    <option id="{{$or->order_id}}" selected value="1">Chưa xử lý</option>
                                                    <option id="{{$or->order_id}}" value="2">Đã xử lý-Đã giao hàng</option>
                                                    <option id="{{$or->order_id}}" value="3">Huy Don hang</option>
                                                    
                                                  </select>

                                            </div>

                                        </form>
                                    @elseif(($or->order_status == 2))
                                        <form>
                                            @csrf
                                            <div class="col-sm-4">
                                            <select class="form-control selectpicker order_details">

                                                <option disabled id="{{ $or->order_id }}" value="1">Chưa xử lý
                                                </option>
                                                <option id="{{ $or->order_id }}" selected value="2">Đã xử lý-Đã giao
                                                    hàng</option>
                                                    <option id="{{$or->order_id}}" value="3">Huy Don hang</option>

                                                
                                            </select>
                                        </div>
                                        </form>
                                        @else
                                        <form>
                                            @csrf
                                            <div class="col-sm-4">
                                            <select class="form-control selectpicker order_details">

                                                <option disabled id="{{ $or->order_id }}" value="1">Chưa xử lý
                                                </option>
                                                <option disabled id="{{ $or->order_id }}" selected value="2">Đã xử lý-Đã giao
                                                    hàng</option>
                                                    <option id="{{$or->order_id}}" value="3">Huy Don hang</option>

                                                
                                            </select>
                                        </div>
                                        </form>
                                    @endif
                                @endforeach
                                <button id="print" class="btn btn-default btn-outline" type="button"> <span><i
                                            class="fa fa-print"></i> Print</span> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
   
@endsection
