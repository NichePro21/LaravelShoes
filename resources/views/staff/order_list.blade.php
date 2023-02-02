@extends('staff_layout')
         @section('staff_content')
<div class="col-md-12" style="padding-top: 2%;">
    <div class="panel">
        <div class="panel-heading">Order List</div>
        <div class="table-responsive">
            <table class="table table-hover manage-u-table">
                <thead>
                    <tr>
                        <th width="70" class="text-center">OrderNo</th>
                        <th>Tên Khách Hàng</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>View Order Detail</th>
                    </tr>
                </thead>
                @foreach($all_order as $key => $order_list)
                <tbody>
                    <tr>
                        <td class="text-center">{{$order_list->OrderNo}}</td>
                        <td >{{$order_list->CName}}</td>
                        <td>{{$order_list->order_total}} VND</td>
                        
                        <td class="py-3"><span class="badge bg-info m-0">{{$order_list->order_status}}</span></td>
                        
                        <td>
                            <a href="{{URL::to('/view-order')}}/{{$order_list->OrderNo}}"><button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-more"></i></button></a>
                            <a href="{{URL::to('/delete-order')}}/{{$order_list->OrderNo}}"><button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button></a>
                        </td>

                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection