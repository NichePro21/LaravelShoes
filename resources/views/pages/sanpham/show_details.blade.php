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
                                                src="{{ URL::to('/public/uploads/product/') }}/{{ $detail->product_image }}"
                                                data-zoom-image="{{ URL::to('/public/uploads/product/') }}/{{ $detail->product_image }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                    <div class="product-name">
                                        <h1>{{ $detail->product_name }}</h1>
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
                                            <p class="regular-price"><span
                                                    class="price">${{ $detail->product_price }}.00</span></p>
                                            <p class="availability in-stock"><span>In Stock</span></p>
                                        </div>
                                    </div>
                                    <?php }else{ ?>
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="regular-price"><span
                                                    class="price">${{ $detail->product_price }}.00</span></p>
                                            <p class="availability out-of-stock"><span><b>Out Stock</b></span></p>
                                        </div>
                                    </div>
                                    <?php } ?>




                                    <ul class="list-unstyled">
                                        <li style="padding-top:10px"><b>Brand:</b> <a
                                                href="/brand/{{ $detail->brand_slug }}">{{ $detail->brand_name }}</a>
                                        </li>
                                        <li style="padding-top:10px"><b>Product Code:</b> YFTK {{ $detail->PID }}</li>
                                        <li style="padding-top:10px"><b>Quantity In Stock: </b>
                                            {{ $detail->product_quantity }}</li>
                                        <li style="padding-top:10px"><b>Size: </b>
                                            <select style="padding: 10px 20px;" class="form-select" id="mySelect" onchange="myFunction()">
                                                @foreach (explode(',', $detail->product_size) as $size)
                                                    <option value='{{ $size }}' name="product_id">
                                                        {{ $size }}</option>
                                                @endforeach
                                            </select>
                                              <p id="demo"></p>
                                            <script type="text/javascript">
                                            //var i = '';
                                            // function myFunction() {
                                            //                 var x = document.getElementById("mySelect");
                                            //                 var value = x.value;
                                            //                 //var text = x.options[x.selectedIndex].text;
                                            //                //alert(value);
                                            //            }
                                                $(document).ready(function() {

                                                    $('.add-to-homecart').click(function() {
                                                        //console.log("something");
                                                        var id = $(this).data('id_product');
                                                        // alert(id);
                                                        var cart_product_id = $('.cart_product_id_' + id).val();
                                                        var cart_product_name = $('.cart_product_name_' + id).val();
                                                        var cart_product_image = $('.cart_product_image_' + id).val();
                                                        var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                                                        var cart_product_price = $('.cart_product_price_' + id).val();
                                                        var cart_product_qty = $('.cart_product_qty_' + id).val();
                                                        var x = document.getElementById("mySelect");
                                                        var cart_product_size = x.value;
                                                        //var cart_product_size = $('.cart_product_size_' + id).val();
                                                        var _token = $('input[name="_token"]').val();
                                                     
                                                        //alert(cart_product_size);
                                                        // if (parseInt(cart_product_qty) > parseInt(cart_product_quantity)) {
                                                        // 	alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                                                        // } else {

                                                        $.ajax({
                                                        	url: '/add-cart-ajax',
                                                        	method: 'POST',
                                                        	data: { cart_product_id: cart_product_id,cart_product_size:cart_product_size, cart_product_name: cart_product_name, cart_product_image: cart_product_image, cart_product_price: cart_product_price, cart_product_qty: cart_product_qty, _token: _token, cart_product_quantity: cart_product_quantity },
                                                        	success:function(data){
                                                       // alert(data);
                                                        show_quick_cart();
                                                        		swal({
                                                        			title: "Add to cart",
                                                        			text: "Product is added to your cart",
                                                        			type: "success",
                                                        			showCancelButton: true,
                                                        			cancelButtonText: "Back",
                                                        			confirmButtonClass: 'btn-success',
                                                        			confirmButtonText: 'View Cart'
                                                        		    },

                                                        		    function() {
                                                        		        window.location.href = "/show-cart";

                                                        	})
                                                        	 }
                                                        });

                                                        })
                                                    });
                                                    
                                            </script>
                                        </li>
                                    </ul>

                                    <div id="product">
                                        <form action="{{ URL::to('/save-cart') }}" method="POST">

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
                                                            <input type="text" name="qty" min="1"
                                                                value="1" size="1" id="qty"
                                                                class="input-text qty cart_product_qty_{{ $detail->PID }}"
                                                                maxlength="12">
                                                            <button class="increase items-count"
                                                                onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                                type="button">
                                                                <i class="fa fa-plus"> </i>
                                                            </button>

                                                        </div>
                                                    </div>

                                                    <div class="pull-left">

                                                        <input type="hidden" value="{{ $detail->PID }}"
                                                            data-id="{{ $detail->PID }}" class="PID{{ $detail->PID }}">
                                                        <input type="hidden" value="{{ $detail->PID }}"
                                                            name="cart_product_id"
                                                            class="cart_product_id_{{ $detail->PID }}">
                                                        @csrf
                                                        <input type="hidden" value="{{ $detail->product_name }}"
                                                            name="cart_product_name"
                                                            class="cart_product_name_{{ $detail->PID }}">
                                                        <input type="hidden" value="{{ $detail->product_size }}"
                                                            name="cart_product_size"
                                                            class="cart_product_size_{{ $detail->PID }}">
                                                        <input type="hidden" value="{{ $detail->product_image }}"
                                                            name="cart_product_image"
                                                            class="cart_product_image_{{ $detail->PID }}">
                                                        <input type="hidden" value="{{ $detail->product_quantity }}"
                                                            name="cart_product_quantity"
                                                            class="cart_product_quantity_{{ $detail->PID }}">
                                                        <input type="hidden" value="{{ $detail->product_price }}"
                                                            name="cart_product_price"
                                                            class="cart_product_price_{{ $detail->PID }}">
                                                        <input type="hidden" value="1" name="cart_product_qty"
                                                            class="cart_product_qty_{{ $detail->PID }}">
                                                        <input name="productid_hidden" type="hidden"
                                                            value="{{ $detail->PID }}" />
                                                        <button type="button" title=""
                                                            data-original-title="Add to Cart"
                                                            class="button btn-cart link-cart add-to-homecart"
                                                            data-id_product="{{ $detail->PID }}"><span>Add to
                                                                Cart</span></button>
                                        </form>
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
                                    <img width="15%"
                                        src="{{ URL::to('/public/frontend/cache/catalog/furniture/outstock.png') }}"
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
                                <p>{{ $detail->product_content }}</p>
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
                                            <button type="button" id="button-review" data-loading-text="Loading..."
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
