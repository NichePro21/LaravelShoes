@extends('staff_layout')
         @section('staff_content')
         <div class="row">
            <div class="col-md-12" style="padding-top: 2%;">
                <div class="white-box printableArea">
                    <h3><b>OrderNo</b> <span class="pull-right">#{{$manager_order_by_id->OrderNo}}</span></h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-left">
                                <address>
                                    <h3> &nbsp;<b class="text-danger">StaffOne</b></h3>
                                    <p class="text-muted m-l-5">Cach Mang Thang 8,
                                        <br> Quan 3,
                                        <br> Tp. Hồ Chí Minh,
                                        <br> 0902054736</p>
                                </address>
                            </div>
                            <div class="pull-right text-right">
                                <address>
                                    <h3>To,</h3>
                                    <h4 class="font-bold">{{$manager_order_by_id->shipping_name}},</h4>
                                    <p class="text-muted m-l-30">{{$manager_order_by_id->shipping_address}},
                                        <br> {{$manager_order_by_id->shipping_phone}}</p>
                                    
                                
                                </address>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive m-t-40" style="clear: both;">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Product Name</th>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Unit Cost</th>
                                            <th class="text-right">Total(10% VAT)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td class="text-center">1</td>
                                            <td>{{$manager_order_by_id->PName}}</td>
                                            <td class="text-right">{{$manager_order_by_id->Quantity}}</td>
                                            <td class="text-right"> {{$manager_order_by_id->PPrice}} VND</td>
                                            <td class="text-right"> {{$manager_order_by_id->order_total}} VND</td>

                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pull-right m-t-30 text-right">
                                <h3><b>Total :</b> {{$manager_order_by_id->order_total}} VND</h3> </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="text-right">
                                <button class="tst3 btn btn-success" type="submit"> In Process </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



         @endsection