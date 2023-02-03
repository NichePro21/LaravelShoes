
@extends('layoutcus')
@section('header')
<?php print_r($ViewOrder) ?>
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
                
                
                <h1 class="h3 text-light mb-0">Order #</h1>
              
            </div>
        </div>
    </div>
    
    <div class="container pb-5 mb-2 mb-md-4">
    @endsection
    @section('content')
    @foreach($ViewOrder as $key=> $value)
<div class="woocommerce-order-details card">
    <div class="card-header">
    <h2 class="woocommerce-order-details__title h6 mb-0">Order details</h2>
    </div>
    <div class="card-body">
    <div class="row mx-n2">
    <div class="col-md-7">
    <div class="widget widget_products">
    <ul class="product_list_widget">
    <li class="woocommerce-table__line-item order_item">
    <div class="media align-items-center">
    <a href="/product/{{$value->PID}}" class="widget-product-thumb">
    <img width="350" height="326" src="/public/uploads/product/{{$value->PPhoto}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="/public/uploads/product/{{$value->PPhoto}} 350w,/public/uploads/product/{{$value->PPhoto}} 300w, /public/uploads/product/{{$value->PPhoto}} 518w" sizes="(max-width: 350px) 100vw, 350px"> </a>
    <div class="media-body">
    <h6 class="widget-product-title">
    <a href="/product/{{$value->PID}}">{{$value->PName}}</a></h6>
    <div class="widget-product-meta">
    <span class="text-accent mr-1"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$value->order_total}}<small>VND</small></span></span>
    <span class="text-muted">× 1</span>
    </div>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-md-5 pt-4 pt-md-0">
    <div class="bg-secondary rounded-lg p-4 h-100">
    <div class="d-flex justify-content-between align-items-center font-size-md mb-2 pb-1">
    <span class="mr-2">Subtotal:</span>
    <span class="text-right"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$value->order_total}}<small>VND</small></span></span>
    </div>
    <div class="d-flex justify-content-between align-items-center font-size-md mb-2 pb-1">
    <span class="mr-2">Shipping:</span>
    <span class="text-right"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>Free</span>&nbsp;</span>
    </div>
    <div class="d-flex justify-content-between align-items-center font-size-md mb-2 pb-1">
    <span class="mr-2">Payment method:</span>
    <span class="text-right">Paying Cash</span>
    </div>
    <div class="d-flex justify-content-between align-items-center font-size-md mb-2 pb-1">
    <span class="mr-2">Total:</span>
    <span class="text-right"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$value->order_total}} <small>VND</small></span></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
   @endforeach
    @endsection