@extends('layoutcus')
@section('header')
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/">Home</a></li>

                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">Orders</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
    @endsection
    @section('content')
  
                @if (count($AllOrderById))
                <div class="table-responsive font-size-md">
                    <table
                        class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number">
                                    <span class="nobr">Order</span>
                                </th>
                                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date">
                                    <span class="nobr">Date</span>
                                </th>
                                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status">
                                    <span class="nobr">Status</span>
                                </th>
                                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total">
                                    <span class="nobr">Total</span>
                                </th>
                                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions">
                                    <span class="nobr">Actions</span>
                                </th>
                            </tr>
                        </thead>
                @foreach ($AllOrderById as $key => $value)
            
                <tbody>
                    <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number align-middle"
                            data-title="Order">
                            <a href="/my-account/view-order/{{$value->OrderNo}}/"
                                class="nav-link-style font-weight-medium">
                                #{{$value->OrderNo}} </a>
                        </td>
                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date align-middle"
                            data-title="Date">
                            <time datetime="2023-01-26T19:11:49+00:00">{{ date('d/m/y', strtotime($value->created_at)) }}</time>
                        </td>
                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status align-middle"
                            data-title="Status">
                            <span class="badge badge-on-hold">{{$value->order_status}}</span>
                        </td>
                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total align-middle"
                            data-title="Total">
                            <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>{{$value->order_total}}<small> VND</small></span> 
                        </td>
                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions align-middle"
                            data-title="Actions">
                            <a href="/my-account/view-order/{{$value->OrderNo}}/"
                                class="btn btn-outline-secondary btn-icon btn-sm mr-1 my-1" data-toggle="tooltip"
                                title="" data-original-title="View">
                                <i class="czi-eye"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
                @else
                <h4 style="text-align:center">No Have Order</h4>
                @endif

            </table>
        </div>
       
    @endsection
