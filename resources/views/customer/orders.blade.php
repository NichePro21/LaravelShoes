@extends('layoutcus')
@section('header')
   
    @endsection
    @section('content')
  
                @if (count($AllOrderById))
                
                @foreach ($AllOrderById as $key => $value)
                <div class="main-container col2-right-layout">
                    <div class="main container">
                      <div class="row">                <div id="content" class="col-sm-9">
                          <div class="col-main">
                          <div class="my-account">
                                <div class="page-title">
                            <h2> Order History</h2>
                          </div>
                                <div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <td class="text-right">Order ID</td>
                                  <td class="text-left">Customer</td>
                                  <td class="text-right">No. of Products</td>
                                  <td class="text-left">Status</td>
                                  <td class="text-right">Total</td>
                                  <td class="text-left">Date Added</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>
                                            <tr>
                                  <td class="text-right">#151</td>
                                  <td class="text-left">hoangshop hoangshop</td>
                                  <td class="text-right">1</td>
                                  <td class="text-left">Pending</td>
                                  <td class="text-right">$205.00</td>
                                  <td class="text-left">09/02/2023</td>
                                  <td class="text-right"><a href="http://brezzademo3.magikthemes.com/index.php?route=account/order/info&amp;order_id=151" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="View"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                          </tbody>
                            </table>
                          </div>
                          <div class="text-right"></div>
                                <div class="buttons clearfix">
                            <div class="pull-right">
                              <!-- <a href="" class="btn btn-primary"></a> -->
                              <button onclick="window.location='http://brezzademo3.magikthemes.com/index.php?route=account/account';" class="button continue">Continue</button>
                            </div>
                          </div>
                          </div></div></div>
                    </div>
                    </div>
                    </div>
                @endforeach
                @else
                <div class="main-container col2-right-layout">
                    <div class="main container">
                      <div class="row">                <div id="content" class="col-sm-9">
                          <div class="col-main">
                          <div class="my-account">
                                <div class="page-title">
                            <h2> Order History</h2>
                          </div>
                                <p>You have not made any previous orders!</p>
                                <div class="buttons clearfix">
                                    <div class="pull-left">
                                        <div class="pull-left"><a href="/my-account" class="btn btn-default">Back</a></div>
                                    </div>
                          </div>
                          </div></div></div>
                    
                    </div>
                    </div>
                    </div>
                @endif
       
    @endsection
