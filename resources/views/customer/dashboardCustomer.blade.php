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
                <h1 class="h3 text-light mb-0">DashBoard</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
    @endsection
    @section('content')
        
                            <div class="card text-center py-4 mb-4">
                                <div class="card-body">
                                    <i class="czi-home text-muted h2 font-weight-normal opacity-60 mb-4"></i>
                                    <h5 class="pb-2">From your account dashboard you can:</h5>
                                    <a href="/my-account/orders/"
                                        class="btn btn-outline-primary btn-sm m-2">View orders</a>
                                    <a href="/my-account/edit-address/"
                                        class="btn btn-outline-primary btn-sm m-2">Manage addresses</a>
                                    <a href="/my-account/edit-account/"
                                        class="btn btn-outline-primary btn-sm m-2">Edit account details</a>
                                </div>
                            </div>
                      
    @endsection
