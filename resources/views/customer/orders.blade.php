@extends('layoutcus')
@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul>
                      <li>                            <a href="/">Home</a>
                        </li>
                      <li><span>/</span>                            <a href="/my-account">Account</a>
                        </li>
                      <li><span>/</span>                            <strong>Order History</strong>            </li>
          
        </ul>
      </div>
    </div>
  </div>
</div>
    @endsection
    @section('content')
    @if (count($getorder))
                
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
                                  <td class="text-left">Status</td>
                                  <td class="text-left">Date Added</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>
                                
                
                @foreach ($getorder as $key => $val)
                  
                                            <tr>
                                  <td class="text-right">#{{$val->order_id}}</td>
                                  @if($val->order_status==1)
                                  <td class="text-left">Pending</td>
                                  @elseif($val->order_status==2)
                                  <td class="text-left">Success</td>
                                  @else
                                  <td class="text-left">Cancel</td>
                                  @endif
                                  <td class="text-left">{{$val->order_date}}</td>
                                  <td class="text-right"><a href="/my-account/view-orders/{{$val->order_code}}" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="View"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                 
                                @endforeach

                                          </tbody>
                            </table>
                          </div>
                          <div class="text-right"></div>
                                <div class="buttons clearfix">
                            <div class="pull-right">
                              <!-- <a href="" class="btn btn-primary"></a> -->
                              <button onclick="window.location='/my-account'" class="button continue">Back</button>
                            </div>
                          </div>
                          </div></div></div>
                    </div>
                    </div>
                    </div>
                
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
