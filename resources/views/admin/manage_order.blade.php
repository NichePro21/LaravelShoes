@extends('admin_layout')
@section('admin_content')
<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Admin View Order</h4> </div>
  
  <!-- /.col-lg-12 -->
</div>
<div class="white-box">
  <?php
  $message = Session::get('message');
  if ($message) {
      
      echo '<div class="alert success">  
<strong>Success!</strong> '.$message.'</div>';
      Session::put('message', null);
  }
  ?>
  <h3 class="box-title m-b-0">Order Table </h3>
  <div class="table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>Invoice</th>
                  <th>Order Code</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Note</th>
                  <th>Action</th>

              </tr>
          </thead>
          <tbody>
            @php 
          $i = 0;
          @endphp
            @foreach($getorder as $key => $ord)
            @php 
            //print_r($ord);
            $i++;
            @endphp
             
             
              <tr>
                
                  <td><a href="javascript:void(0)">Order #{{$ord->order_id}}</a></td>
                  <td><a href="javascript:void(0)">{{$ord->order_code}}</a></td>
                 
                  <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{$ord->created_at}}</span> </td>
                  
                  <td>
                    @if($ord->order_status==1)
                        <div class="label label-table label-warning">Pending</div>
                     @elseif($ord->order_status==2)
                        <div class="label label-table label-success">Success</div>
                     @else
                     <div class="label label-table label-danger">Cancel</div>
                     @endif
                 </td>
                 <td>
                  @if($ord->order_status==3)
                  {{$ord->order_destroy}}
                  @endif
                </td>
                
                 <td class="text-nowrap">
                    <a href="/admin/view-order/{{$ord->order_code}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                    <a href="{{URL::to('/admin/delete-order/'.$ord->order_code)}}" onclick="return confirm('Delete Order #{{$ord->order_id}}?')" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                </td>
              
              </tr>
             
              @endforeach
          </tbody>
      </table>
  </div>
</div>
  @endsection