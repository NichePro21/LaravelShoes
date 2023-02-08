@extends('layout')
@section('content')
<div class="row">
  <!-- Sidebar-->
  <aside class="col-lg-4">
    <!-- Sidebar-->
    <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar" style="max-width: 22rem;">
      <div class="offcanvas-header align-items-center shadow-sm">
        <h2 class="h5 mb-0">Filters</h2>
        <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
        <!-- Categories-->
        <div class="widget widget-categories mb-4 pb-4 border-bottom">
          <h3 class="widget-title">Categories</h3>
          <div class="accordion mt-n1" id="shop-categories">
            <!-- Shoes-->
            @foreach($category as $key => $cate_pro)
            <div class="accordion-item">
              <h3 class="accordion-header">
                <a style="padding: 0.444 rem 0; font-size: .9375rem; font-weight: normal; color: #444444; box-shadow: none;" href="{{URL::to('/category/'.$cate_pro->CatID)}}">
                      {{$cate_pro->CateName}}
                    </a>
                </h3>
            </div>
            @endforeach
        
      </div>
    </div>
    <div class="widget widget-categories mb-4 pb-4 border-bottom">
      <h3 class="widget-title">Brands</h3>
      <div class="accordion mt-n1" id="shop-categories">
        <!-- Shoes-->
        @foreach($brand as $key => $brand_product)
      
        <div class="accordion-item">
          <h3 class="accordion-header">
            <a style="padding: 0.444 rem 0; font-size: .9375rem; font-weight: normal; color: #444444; box-shadow: none;" href="{{URL::to('/brand/'.$brand_product->BID)}}">
                  {{$brand_product->BName}}
                </a>
            </h3>
        </div>
        @endforeach
    
      </div>
    </div>  
    
  </aside>
  <!-- Content  -->
  <section class="col-lg-8">
    <!-- Toolbar-->
    <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
      <div class="d-flex flex-wrap">
        @foreach ($CateName as $key => $value)
          <h2 style="color:wheat;">Category :{{$value->CateName}}</h2>
        @endforeach
      </div>
     
    </div>
<div class="row mx-n2">
    <!-- Product-->
    @foreach($category_by_id as $key => $product)
    <div class="col-md-4 col-sm-6 px-2 mb-4">
      <div class="card product-card">
        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="{{URL::to('/product/'.$product->PID)}}"><img src="{{URL::to('/public/uploads/product/')}}/{{$product->PPhoto}}" alt="Product"></a>
        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
          <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{$product->PName}}</a></h3>
          <div class="d-flex justify-content-between">
            <div class="product-price"><span class="text-accent">{{number_format($product->PPrice)}} <small>VND</small></span></div>
            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
            </div>
          </div>
        </div>
        
      </div>
      <hr class="d-sm-none">
    </div>
    <!-- Product-->
   @endforeach
  </div>
@endsection