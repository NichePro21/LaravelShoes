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
                <h1 class="h3 text-light mb-0">Address</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
    @endsection
    @section('content')
    <?php 
    $message = Session::get('message');
        if($message){
     echo '<p class="text-alert-danger">'.$message.'</p>' ;
            Session::put('message',null);
    }
    ?>
    <div class="row">
    <div class="col-sm-6 mb-4 mb-sm-0">
    <div class="border rounded-lg p-4 h-100">
    <h2 class="woocommerce-column__title h6">Billing address</h2>
    <ul class="font-size-sm list-unstyled mb-0">
    <li class="woocommerce-customer-details--address d-flex">
    <i class="czi-location opacity-60 mr-2 mt-1"></i>
    <div>abcxyz abcxyz<br>abcxyz<br>abcxyz, CA 85744</div>
    </li>
    <li class="woocommerce-customer-details--edit pt-2">
    <a class="btn btn-outline-primary btn-sm" href="/my-account/edit-address/billing/">
    <i class="czi-edit mr-1"></i>
    Edit </a>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-sm-6 mb-4 mb-sm-0">
    <div class="border rounded-lg p-4 h-100">
    <h2 class="woocommerce-column__title h6">Shipping address</h2>
    <ul class="font-size-sm list-unstyled mb-0">
    <li class="woocommerce-customer-details--address d-flex">
    <i class="czi-location opacity-60 mr-2 mt-1"></i>
    <div>abcxyz abcxyz<br>abcxyz<br>abcxyz, CA 85744</div>
    </li>
    <li class="woocommerce-customer-details--edit pt-2">
    <a class="btn btn-outline-primary btn-sm" href="/my-account/edit-address/shipping/">
    <i class="czi-edit mr-1"></i>
    Edit </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    @endsection