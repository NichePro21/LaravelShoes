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
                <h1 class="h3 text-light mb-0">Edit Shipping</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
    @endsection
    @section('content')
    <form role="form" action="{{URL::to('/my-account/save-address/shipping')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputFile">Họ Tên</label>
            <input type="text" class="form-control" name="Shipping_Name" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Địa Chỉ</label>
            <input type="text" class="form-control" name="Shipping_Address" value="">
               
        </div>
        <div class="form-group">
            <label for="PName">City</label>
            <input type="text" class="form-control" name="Shipping_City" value="">
        </div>
        <div class="form-group">
            <label for="PCost">Phường/Xã</label>
            <input type="text" class="form-control" name="Shipping_Ward" value="" >
        </div>
        <div class="form-group">
            <label for="PPrice">Số Điện Thoại</label>
            <input type="text" class="form-control" name="Shipping_Phone" value="" >
        </div>
        <div class="form-group">
            <label for="PSize">Email</label>
            <input type="text" class="form-control" name="Shipping_Email" value="" >
        </div>
    <button type="submit" name="save_Shipping" class="btn btn-danger">Save Address</button>
</form>
    @endsection