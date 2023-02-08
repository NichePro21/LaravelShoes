@extends('layout')
@section('content')
    @foreach ($detail_product as $key => $detail)
        <section class="main-container col1-layout">
            <div class="main" id="content">
                <div class="container">
                    <div class="col-main">
                        <div class="product-view">
                            <div class="product-essential">
                                <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                                    <div class="product-image">
                                        <div class="product-full"> <img id="product-zoom"
                                                src="{{URL::to('/public/uploads/product/')}}/{{$detail->product_image}}"
                                                data-zoom-image="{{URL::to('/public/uploads/product/')}}/{{$detail->product_image}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                    <div class="product-name">
                                        <h1>{{$detail->product_name}}</h1>
                                    </div>

                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <p class="rating-links">
                                            <a href=""
                                                onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0
                                                reviews</a>
                                            <span class="separator">|</span>
                                            <a href=""
                                                onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write
                                                a review</a>
                                        </p>
                                    </div>
                                    <?php if($detail->product_quantity > 0){ ?>
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="regular-price"><span class="price">${{$detail->product_price}}.00</span></p>
                                            <p class="availability in-stock"><span>In Stock</span></p>
                                        </div>
                                    </div>
                                    <?php }else{ ?>
                                        <div class="price-block">
                                            <div class="price-box">
                                                <p class="regular-price"><span class="price">${{$detail->product_price}}.00</span></p>
                                                <p class="availability out-of-stock"><span><b>Out Stock</b></span></p>
                                            </div>
                                        </div>
                                        <?php } ?>




                                    <ul class="list-unstyled">
                                        <li style="padding-top:10px"><b>Brand:</b> <a
                                                href="/brand/{{$detail->brand_slug}}">{{$detail->brand_name}}</a>
                                        </li>
                                        <li style="padding-top:10px"><b>Product Code:</b> YFTK {{$detail->PID}}</li>
                                        <li style="padding-top:10px"><b>Quantity In Stock: </b> {{$detail->product_quantity}}</li>
                                        <li style="padding-top:10px"><b>Size: </b>  
                                          <select  style="padding: 10px 20px;" class="form-select" required="" id="product_size">
                                          @foreach(explode(',',$detail->product_size) as $size) 
                                          <option  value='{{$size}}' name='product_size'>{{$size}}</option>
                                          @endforeach
                                          </select>
                                        </li>
                                    </ul>
                                    <div id="product">


                                        <div class="add-to-box">
                                            <?php if($detail->product_quantity > 0){ ?>
                                            <div class="add-to-cart">
                                                <label class="control-label" for="input-quantity">Qty</label>
                                                <div class="pull-left">
                                                    <div class="custom pull-left">

                                                        <button class="reduced items-count"
                                                            onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;"
                                                            type="button">
                                                            <i class="fa fa-minus"> </i>
                                                        </button>
                                                        <input type="text" name="quantity" value="1"
                                                            size="2" id="qty" class="input-text qty"
                                                            maxlength="12">
                                                        <button class="increase items-count"
                                                            onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                            type="button">
                                                            <i class="fa fa-plus"> </i>
                                                        </button>

                                                        <input type="hidden" name="product_id" value="2027">
                                                    </div>
                                                </div>

                                                <div class="pull-left">
                                                    <button type="button" id="button-cart"
                                                        data-loading-text="Loading..." class="button btn-cart"><span>Add
                                                            to Cart</span></button>
                                                </div>

                                            </div>
                                            <div class="email-addto-box">
                                                <ul class="add-to-links">
                                                    <li><a class="link-wishlist" title="Wishlist"
                                                            onclick="mgk_wishlist.add('2027');">
                                                            <span>Wishlist</span>
                                                        </a></li>
                                                </ul>
                                            </div>
                                            <?php }else{ ?>
                                                <div class="pull-left">
                                                    <img width="15%" src="{{ URL::to('/public/frontend/cache/catalog/furniture/outstock.png') }}"
                                                </div>
                                                <?php } ?>
                                           

                                        </div>

                                    </div>
                                </div>
                            </div><!-- product essential -->
                        </div><!-- product-view -->
                      
                    </div>


                    <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="add_info">


                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                                    <li><a href="#tab-review" data-toggle="tab">Reviews (0)</a></li>

                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane active" id="tab-description">
                                        <p>{{$detail->product_content}}</p>
                                    </div>
                                    <div class="tab-pane" id="tab-review">
                                        <form class="form-horizontal" id="form-review">
                                            <div id="review">
                                                <p>There are no reviews for this product.</p>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-name">Your Name</label>
                                                    <input type="text" name="name" value="" id="input-name"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="input-review">Your Review</label>
                                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is
                                                        not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" name="rating" value="1">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="2">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="3">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="4">
                                                    &nbsp;
                                                    <input type="radio" name="rating" value="5">
                                                    &nbsp;Good
                                                </div>
                                            </div>
                                            <div class="buttons clearfix">
                                                <div class="pull-right">
                                                    <button type="button" id="button-review"
                                                        data-loading-text="Loading..."
                                                        class="button submit">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>


                            </div><!-- col-sm-12 wow bounceInUp animated animated -->
                        </div>
                    </div><!-- product-collateral -->
                </div>
            </div>
        </section>
    @endforeach 
@endsection
