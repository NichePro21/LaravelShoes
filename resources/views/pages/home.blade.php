@extends('layout')
@section('content')
    <div>
        <div id="content">
            <div id="magik-slideshow" class="magik-slideshow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">

                            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                                <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                    <ul>

                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $("#ms0").click(function() {
                                                    window.open('/product', '_blank');
                                                });
                                            });
                                        </script>

                                        <li id="ms0" data-transition='random' data-slotamount='7'
                                            data-masterspeed='1000'
                                            data-thumb="{{ URL::to('/public/frontend/cache/catalog/furniture/slider1.png') }}">
                                            <img src="{{ URL::to('/public/frontend/cache/catalog/furniture/slider1.png') }}"
                                                alt="Slide Image1" data-bgposition='left top' data-bgfit='cover'
                                                data-bgrepeat='no-repeat' />

                                            <div class="info">
                                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme '
                                                    data-endspeed='500' data-speed='500' data-start='80'
                                                    data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                                    data-elementdelay='0.1' data-endelementdelay='0.1'
                                                    style='z-index:1;max-width:auto;max-height:auto;white-space:nowrap;'>
                                                    <span>Modern Design</span>
                                                </div>
                                                <div class='tp-caption sfb  tp-resizeme ' data-endspeed='100'
                                                    data-speed='500' data-start='1500' data-easing='Linear.easeNone'
                                                    data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                                    data-endelementdelay='0.1'
                                                    style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-top:25%'>
                                                    <a href='#' class="buy-btn">Shop Now</a>
                                                </div>
                                            </div>
                                        </li>

                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $("#ms1").click(function() {
                                                    window.open('/product/nike-invincible-3', '_blank');
                                                });
                                            });
                                        </script>

                                        <li id="ms1" data-transition='random' data-slotamount='7'
                                            data-masterspeed='1000'
                                            data-thumb="{{ URL::to('/public/frontend/cache/catalog/furniture/slider2.png') }}">
                                            <img src="{{ URL::to('/public/frontend/cache/catalog/furniture/slider2.png') }}"
                                                alt="Slide Image2" data-bgposition='left top' data-bgfit='cover'
                                                data-bgrepeat='no-repeat' />

                                            <div class="info">

                                                <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500'
                                                    data-speed='500' data-start='1500' data-easing='Linear.easeNone'
                                                    data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                                                    data-endelementdelay='0.1'
                                                    style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;padding-top:35%'>
                                                    <a href='#' class="buy-btn">Buy Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- rev_slider_4 -->
                            </div><!-- rev_slider_4_wrapper -->
                            <!-- rev_slider_4_wrapper -->

                            <script type='text/javascript'>
                                jQuery(document).ready(function() {
                                    jQuery('#rev_slider_4').show().revolution({
                                        dottedOverlay: 'none',
                                        delay: 5000,
                                        startwidth: 915,
                                        startheight: 500,
                                        hideThumbs: 200,
                                        thumbWidth: 200,
                                        thumbHeight: 50,
                                        thumbAmount: 2,
                                        navigationType: 'thumb',
                                        navigationArrows: 'solo',
                                        navigationStyle: 'round',
                                        touchenabled: 'on',
                                        onHoverStop: 'on',
                                        swipe_velocity: 0.7,
                                        swipe_min_touches: 1,
                                        swipe_max_touches: 1,
                                        drag_block_vertical: false,
                                        spinner: 'spinner0',
                                        keyboardNavigation: 'off',
                                        navigationHAlign: 'center',
                                        navigationVAlign: 'bottom',
                                        navigationHOffset: 0,
                                        navigationVOffset: 20,
                                        soloArrowLeftHalign: 'left',
                                        soloArrowLeftValign: 'center',
                                        soloArrowLeftHOffset: 20,
                                        soloArrowLeftVOffset: 0,
                                        soloArrowRightHalign: 'right',
                                        soloArrowRightValign: 'center',
                                        soloArrowRightHOffset: 20,
                                        soloArrowRightVOffset: 0,
                                        shadow: 0,
                                        fullWidth: 'on',
                                        fullScreen: 'off',
                                        stopLoop: 'off',
                                        stopAfterLoops: -1,
                                        stopAtSlide: -1,
                                        shuffle: 'off',
                                        autoHeight: 'off',
                                        forceFullWidth: 'on',
                                        fullScreenAlignForce: 'off',
                                        minFullScreenHeight: 0,
                                        hideNavDelayOnMobile: 1500,
                                        hideThumbsOnMobile: 'off',
                                        hideBulletsOnMobile: 'off',
                                        hideArrowsOnMobile: 'off',
                                        hideThumbsUnderResolution: 0,
                                        hideSliderAtLimit: 0,
                                        hideCaptionAtLimit: 0,
                                        hideAllCaptionAtLilmit: 0,
                                        startWithSlide: 0,
                                        fullScreenOffsetContainer: ''
                                    });
                                });
                            </script>
                        </div>



                        <div class="col-md-3 hot-deal">

                            <ul class="products-grid">
                                <li class="right-space two-height item">
                                    <div class="item-inner">
@foreach($galery_product as $key =>$value)
                                        <div class="item-img">
                                            <div class="item-img-info">
                                                <a class="product-image"
                                                    href="/product/{{$value->product_slug}}"
                                                    title="{{$value->product_name}}">
                                                    <img src="{{ URL::to('/public/uploads/product/') }}/{{ $value->product_image }}"
                                                        alt="{{$value->product_name}}"
                                                        title="{{$value->product_name}}" />
                                                </a>
                                                <div class="hot-label hot-top-right">Hot</div>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li>
                                                            <a href="/product/{{$value->product_slug}}"
                                                                class="link-quickview"
                                                                data-name="{{$value->product_name}}">Quick
                                                                view</a>
                                                        </li>


                                                    </ul>
                                                </div>
                                                <div class="box-timer">
                                                    <div class="timer-grid" data-time="2024-02-05"></div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a title="Sterling Side Mounted wardrobe pullout"
                                                        href="{{$value->product_slug}}">
                                                        {{$value->product_name}}</a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- rating -->
                                                    <div class="item-price">
                                                        <div class="price-box">

                                                            <p class="old-price"><span class="price">$100.00</span></p>
                                                            <p class="special-price"><span class="price">$90.00</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <form>
                                                            <input type="hidden" value="{{$value->PID}}" data-id="{{$value->PID}}" class="PID{{$value->PID}}">
                                                            <input type="hidden" value="{{$value->PID}}" name="cart_product_id" class="cart_product_id_{{$value->PID}}">
                                                            @csrf
                                                            <input type="hidden" value="{{$value->product_name}}" name="cart_product_name" class="cart_product_name_{{$value->PID}}">
                                                            <input type="hidden" value="{{$value->product_size}}" name="cart_product_size" class="cart_product_size_{{$value->PID}}">
                                                            <input type="hidden" value="{{$value->product_image}}" name="cart_product_image" class="cart_product_image_{{$value->PID}}">
                                                            <input type="hidden" value="{{$value->product_quantity}}" name="cart_product_quantity" class="cart_product_quantity_{{$value->PID}}">
                                                            <input type="hidden" value="{{$value->product_price}}" name="cart_product_price" class="cart_product_price_{{$value->PID}}">
                                                            <input type="hidden" value="1" name="cart_product_qty" class="cart_product_qty_{{$value->PID}}">
                                                        <button type="button" title=""
                                                            data-original-title="Add to Cart"
                                                            class="button btn-cart link-cart add-to-oncart" data-id_product="{{ $value->PID }}"><span>Add to
                                                                Cart</span></button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- End Item info -->
                                    </div> <!-- End  Item inner-->
                                    @endforeach
                                </li>
                            </ul>

                        </div>


                    </div>
                </div>
            </div>
            <div class="content-page">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12">

                            <div>
                                <div class="image-item"> <a href="#" title="Image"> <img
                                            src="{{ URL::to('/public/frontend/image/banner1.png') }}"
                                            class="img-responsive" alt="Image"></a> </div>
                            </div>

                        </div>
                        <div class="col-md-9 col-sm-12">
                            <!-- featured category fashion -->
                            <div class="category-product">
                                <div class="navbar nav-menu">
                                    <div class="navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li>
                                                <div class="new_title">
                                                    <h2>New Products</h2>
                                                </div>
                                            </li>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($brand as $key => $value)
                                                @php
                                                    $i++;
                                                @endphp
                                                {{-- <li><a class="tabs_pro" data-toggle="tab"
                                                        href="#tab-{{ $value->BID }}" data-id="{{ $value->BID }}"
                                                        aria-expanded="true">{{ $value->brand_name }}</a>
                                                </li> --}}
                                                <li class="tabs_pro {{$i==1 ? 'active' : ''}}" data-id="{{$value->BID}}"><a href="#" data-toggle="tab">{{$value->brand_name}}</a></li>

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-bestseller">
                                    <div class="product-bestseller-content">
                                   <div class="product-bestseller-list">
                                             <div class="tab-container">

                                               <div class="tab-panel active" id="tab-1">
                                                    <div class="category-products">
                                                      <ul class="products-grid active" id="tabs_product">
                                                      </ul>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <section class="bestsell-pro">
                <div class="container">
                    <div class="slider-items-products">
                        <div class="bestsell-block">
                            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                                <div class="block-title">
                                    <h2>Best Sellers</h2>
                                </div>
                                <div class="slider-items slider-width-col4 products-grid block-content">
                                    <!-- Item -->
                                    @foreach($bestseller as $key => $value)
                                    <div class="item">
                                        <div class="item-inner">

                                            <div class="item-img">
                                                <div class="item-img-info">
                                                    <a class="product-image"
                                                        href="/product/{{$value->product_slug}}"
                                                        title="{{$value->product_name}}">
                                                        <img width="216px" height="270px" src="{{ URL::to('/public/uploads/product/') }}/{{ $value->product_image }}"
                                                            alt="{{$value->product_name}}"
                                                            title="{{$value->product_name}}" />
                                                    </a>
                                                    {{-- <div class="sale-label sale-top-right">Sale</div> --}}
                                                    <div class="box-hover">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a href="/product/{{$value->product_slug}}"
                                                                    class="link-quickview"
                                                                    data-name="{{$value->product_name}}">Quick
                                                                    view</a>
                                                            </li>

                                                            <li>
                                                                <a onclick="mgk_hm_wishlist.add('2025');"
                                                                    class="link-wishlist">Wishlist</a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title">
                                                        <a title="DecorNation Floating Wall Shelf"
                                                            href="/product/{{$value->product_slug}}">{{$value->product_name}} </a>
                                                    </div>
                                                    <div class="rating">
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- rating -->


                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price"><span
                                                                        class="price">${{$value->product_price}}</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <form>
                                                                <input type="hidden" value="{{$value->PID}}" data-id="{{$value->PID}}" class="PID{{$value->PID}}">
                                                                <input type="hidden" value="{{$value->PID}}" name="cart_product_id" class="cart_product_id_{{$value->PID}}">
                                                                @csrf
                                                                <input type="hidden" value="{{$value->product_name}}" name="cart_product_name" class="cart_product_name_{{$value->PID}}">
                                                                <input type="hidden" value="{{$value->product_size}}" name="cart_product_size" class="cart_product_size_{{$value->PID}}">
                                                                <input type="hidden" value="{{$value->product_image}}" name="cart_product_image" class="cart_product_image_{{$value->PID}}">
                                                                <input type="hidden" value="{{$value->product_quantity}}" name="cart_product_quantity" class="cart_product_quantity_{{$value->PID}}">
                                                                <input type="hidden" value="{{$value->product_price}}" name="cart_product_price" class="cart_product_price_{{$value->PID}}">
                                                                <input type="hidden" value="1" name="cart_product_qty" class="cart_product_qty_{{$value->PID}}">
                                                            <button type="button" title=""
                                                                data-original-title="Add to Cart"
                                                                class="button btn-cart link-cart add-to-oncart" data-id_product="{{ $value->PID }}"><span>Add to
                                                                    Cart</span></button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> <!-- End Item info -->
                                        </div> <!-- End  Item inner-->
                                    </div> <!-- End Item -->
@endforeach
                                </div>
                            </div> <!-- featured -->
                        </div>
                    </div> <!-- slider Item products -->
                </div>
            </section>
            <div>
                <div class="bottom-banner-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img alt="banner" src="{{ URL::to('/public/frontend/image/banner2.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="featured-pro">
                <div class="container">
                    <div class="slider-items-products">
                        <div class="featured-block">
                            <div class="home-block-inner">
                                <div class="block-title">
                                    <h2>Featured Product</h2>
                                </div>
                            </div>
                            <div id="featured-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 products-grid block-content">
                                    @foreach ($all_product as $key => $product)
                                    <form>
                                        <input type="hidden" value="{{$product->PID}}" data-id="{{$product->PID}}" class="PID{{$product->PID}}">
                                        <input type="hidden" value="{{$product->PID}}" name="cart_product_id" class="cart_product_id_{{$product->PID}}">
                                        @csrf
                                        <input type="hidden" value="{{$product->product_name}}" name="cart_product_name" class="cart_product_name_{{$product->PID}}">
                                        <input type="hidden" value="{{$product->product_size}}" name="cart_product_size" class="cart_product_size_{{$product->PID}}">
                                        <input type="hidden" value="{{$product->product_image}}" name="cart_product_image" class="cart_product_image_{{$product->PID}}">
                                        <input type="hidden" value="{{$product->product_quantity}}" name="cart_product_quantity" class="cart_product_quantity_{{$product->PID}}">
                                        <input type="hidden" value="{{$product->product_price}}" name="cart_product_price" class="cart_product_price_{{$product->PID}}">
                                        <input type="hidden" value="1" name="cart_product_qty" class="cart_product_qty_{{$product->PID}}">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <a class="product-image"
                                                            href="/product/{{ $product->product_slug }}"
                                                            title="/product/{{ $product->product_name }}">
                                                            <img width="279px" height="348px" src="{{ URL::to('/public/uploads/product/') }}/{{ $product->product_image }}"
                                                                alt="{{ $product->product_name }}"
                                                                title="{{ $product->product_name }}" />
                                                        </a>

                                                        <div class="box-hover">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-quickview"
                                                                        href="/product/{{ $product->product_slug }}"
                                                                        data-name="{{ $product->product_name }}">Quick
                                                                        view</a>
                                                                </li>

                                                                <li>
                                                                    <a class="link-wishlist"
                                                                        onclick="mgk_hm_wishlist.add('2009');">Wishlist</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="{{ $product->product_name }}"
                                                                href="/product/{{ $product->product_slug }}">
                                                                {{ $product->product_name }} </a>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- rating -->

                                                        <div class="item-content">

                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <p class="regular-price"><span
                                                                            class="price">${{ $product->product_price }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                <button type="button" title=""
                                                                    data-original-title="Add to Cart"
                                                                    class="button btn-cart link-cart add-to-oncart" data-id_product="{{ $product->PID }}"><span>Add to
                                                                        Cart</span></button>

                                                                    {{-- onclick="Addtocart('{{ $product->PID }}');" --}}
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div> <!-- End Item info -->
                                            </div> <!-- End  Item inner-->
                                        </div> <!-- End Item -->
                                        </form
                                    @endforeach
                                </div>
                            </div> <!-- featured -->
                        </div>
                    </div> <!-- slider Item products -->
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>



        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
                var cate_id = $('.tabs_pro').data('id');
                var _token = $('input[name="_token"]').val();
                //alert(cate_id);
                $.ajax({
                    url:'{{url('/product-tabs')}}',
                    method:"POST",
                    data: {
                            "_token": "{{ csrf_token() }}",
                            "cate_id": cate_id
                            },
                    success:function(data){
                        $('#tabs_product').html(data);

                    }

                });
            $('.tabs_pro').click(function(){

                var cate_id = $(this).data('id');
                 //alert(cate_id);
                var _token = $('input[name="_token"]').val();

                $.ajax({

                    url:'{{url('/product-tabs')}}',
                    method:"POST",
                     data: {
                            "_token": "{{ csrf_token() }}",
                            "cate_id": cate_id
                            },

                    success:function(data){
                        $('#tabs_product').html(data);
                    }

                });

            });
        });
    </script>
@endsection
