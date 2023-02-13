@extends('layout')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li> <a href="/">Home</a>
                        </li>
                        @foreach ($CateName as $key => $value)
                            <li><span>/</span> <strong>{{ $value->category_name }}</strong></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="main-container col2-left-layout bounceInUp animated">
        <div class="main container">
            <div class="row">
                <div id="content" class="col-sm-9 col-sm-push-3">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme"
                                    style="opacity: 1; display: block;">

                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper"
                                            style="width: 3660px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                            <div class="owl-item" style="width: 915px;">
                                                <div class="item">
                                                    <img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/category-img1-915x390.jpg"
                                                        alt="Slider Image1" class="img-responsive">
                                                    <div class="cat-img-title cat-bg cat-box">
                                                        <div class="small-tag">Fashion 2023</div>
                                                        <h2 class="cat-heading">Shoes Collection</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 915px;">
                                                <div class="item">
                                                    <img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/category-img2-915x390.jpg"
                                                        alt="Slider Image2" class="img-responsive">
                                                    <div class="cat-img-title cat-bg cat-box">
                                                        <div class="small-tag">Street Style</div>
                                                        <h2 class="cat-heading">New Season</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="owl-controls clickable">
                                        <div class="owl-buttons">
                                            <div class="owl-prev"><a class="flex-prev"></a></div>
                                            <div class="owl-next"><a class="flex-next"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="col-main pro-grid">
                        <div class="catalog-product-info">
                            <h2 class="page-heading"> 
                              @foreach($CateName as $key => $value)
                              <span class="page-heading-title">{{$value->category_name}}</span> 
                            @endforeach
                            </h2>
                            <div class="display-product-option">





                                <div class="toolbar">


                                    <div id="sort-by" name="sort-by">
                                        <label class="left">Sort By:</label>
                                        <select name="sort" id="sort" class="form-control" onchange="location = this.value;">
                                            <option value="{{Request::url()}}?sort-by=none">--Lọc theo--</option>
                                            <option value="{{Request::url()}}?sort-by=tang_dan">--Giá tăng dần--</option>
                                            <option value="{{Request::url()}}?sort-by=giam_dan">--Giá giảm dần--</option>
                                            <option value="{{Request::url()}}?sort-by=kytu_az">Lọc theo tên A đến Z</option>
                                            <option value="{{Request::url()}}?sort-by=kytu_za">Lọc theo tên Z đến A</option>
                                        </select>
                                    </div>

                                </div><!-- toolbar -->
                            </div>
                        </div>
                        <div class="category-products">
                            <div class="pro_row products-grid">
                              @foreach($category_by_id as $key => $value)
                              <div class="product-layout product-grid item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-thumb col-item" >
                                <div class="item-inner">
                                      <div class="item-img">
                                          <div class="item-img-info">
                                            <a class="product-image" href="/product/{{$value->product_slug}}" title="{{$value->product_name}}">
                                                              <img width="200px" height="300px"  src="{{ URL::to('/public/uploads/product') }}/{{$value->product_image}}" alt="{{$value->product_name}}" title="{{$value->product_name}}">
                                                              </a>
                                            
                          
                          
                                            <div class="box-hover">
                                              <ul class="add-to-links">
                                                                  <li>
                                              <a href="/product/{{$value->product_slug}};" class="link-quickview" data-name="{{$value->product_name}}">Quick View</a>
                                              </li>
                                               
                                              <li>
                                              <a onclick="wishlist.add('2013');" class="link-wishlist">Wishlist</a> 
                                              </li>
                          
                                              </ul>
                                            </div>
                          
                                          </div>
                                      </div>
                                      <div class="item-info">
                                          <div class="info-inner">
                                              <div class="item-title"> 
                                              <a title="{{$value->product_name}}" href="/product/{{$value->product_slug}}">
                                                {{$value->product_name}}</a>
                                              </div>
                                                                  <div class="rating">
                                              <div class="ratings">
                                              <div class="rating-box">
                                                                                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                      </div>
                                              </div>
                                              </div>
                                              <div class="item-content">
                          
                                                                  <div class="item-price">
                                              <div class="price-box"> 
                                                                  <p class="regular-price"><span class="price">${{$value->product_price}}.00</span></p> 
                                                                  </div>
                                              </div>
                                                                  <div class="action">
                                                                    <form action="{{URL::to('/save-cart')}}" method="POST">
                                                                        <input type="hidden" value="{{$value->PID}}" data-id="{{$value->PID}}" class="PID{{$value->PID}}">
                                                                        <input type="hidden" value="{{$value->PID}}" name="cart_product_id" class="cart_product_id_{{$value->PID}}">
                                                                        @csrf
                                                                        <input type="hidden" value="{{$value->product_name}}" name="cart_product_name" class="cart_product_name_{{$value->PID}}">
                                                                        <input type="hidden" value="{{$value->product_size}}" name="cart_product_size" class="cart_product_size_{{$value->PID}}">
                                                                        <input type="hidden" value="{{$value->product_image}}" name="cart_product_image" class="cart_product_image_{{$value->PID}}">
                                                                        <input type="hidden" value="{{$value->product_quantity}}" name="cart_product_quantity" class="cart_product_quantity_{{$value->PID}}">
                                                                        <input type="hidden" value="{{$value->product_price}}" name="cart_product_price" class="cart_product_price_{{$value->PID}}">
                                                                        <input type="hidden" value="1" name="cart_product_qty" class="cart_product_qty_{{$value->PID}}">
                                                                        <input name="productid_hidden" type="hidden"  value="{{$value->PID}}" />
                                              <button type="button" title="" data-original-title="Add to Cart" class="button btn-cart link-cart add-to-oncart" data-id_product="{{$value->PID}}"><span>Add to Cart</span></button>
                                                                    </form>
                                            </div>
                                              </div>
                          
                                          </div>
                                      </div>  <!-- End Item info --> 
                                </div>  <!-- End  Item inner--> 
                                </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="bottom_pagination">
                                <div class="col-sm-6 text-left">
                                   
                                       
                                        {{$category_by_id->links()}}
                                    
                                </div>
                               
                            </div>
                        </div>
                    </article>

                </div>
                <aside id="column-left" class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                  <div class="side-nav-categories">
                <div class="block-title">Categories</div>
                <div class="box-content box-category">
                  <ul>
                    @foreach($category as $key => $value)
                          <li class="">
                             <a href="/category/{{$value->slug_category_product}}" > <i class="fa fa-"></i>{{$value->category_name}}</a>
                                      <span class="subDropdown plus"></span>
                      <ul class="level0" >
                                        <li>
                                      <a href="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001_2007">menu da cap</a>
                                       
                                      </li>
                                </ul>
                            </li>
                          @endforeach
                        </ul>
                </div>
              </div>    <div>
                  <div class="hot-banner"><img alt="banner" src="https://img.freepik.com/premium-vector/shoes-brand-product-banner_252779-535.jpg"></div></div>
                
              
                    <div class="custom-slider">
                      <div>              
                          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                              <!-- Indicators -->
              
                                              <ol class="carousel-indicators">
                                                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                                              </ol>
                                              
                              <!-- Wrapper for slides -->
                                              <div class="carousel-inner" role="listbox">
                                   
                                
                                <div class="item"> 
                                  <a href="" target="_blank" title="50% OFF">
                                  <img width="360px" height="488px" src="https://img.freepik.com/premium-vector/shoes-brand-product-banner_252779-535.jpg" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" title="50% OFF" alt="50% OFF">
                                  </a>
                                  <div class="carousel-caption">
                                    <h3>
                                      <a href="" target="_blank" title="50% OFF">
                                        50% OFF                        </a>
                                    </h3>
                                  </div>
                                </div>
              
                                 
                                
                                <div class="item"> 
                                  <a href="" target="_blank" title="Hot Collection">
                                  <img src="http://theskateboardersjournal.com/app/uploads/2020/12/SJ42-Cover-WEB-USE-360x488.jpg" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" title="Hot Collection" alt="Hot Collection">
                                  </a>
                                  <div class="carousel-caption">
                                    <h3>
                                      <a href="" target="_blank" title="Hot Collection">
                                        Hot Collection                        </a>
                                    </h3>
                                  </div>
                                </div>
              
                                 
                                
                                <div class="item active"> 
                                  <a href="" target="_blank" title="Summer Collection">
                                  <img src="https://www.elhombre.com.br/wp-content/uploads/2022/11/Reserva-Go-Halls-360x488.webp" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" title="Summer Collection" alt="Summer Collection">
                                  </a>
                                  <div class="carousel-caption">
                                    <h3>
                                      <a href="" target="_blank" title="Summer Collection">
                                        Summer Collection                        </a>
                                    </h3>
                                  
                                  </div>
                                </div>
              
                                              </div>
                                              
                              <!-- Controls --> 
                              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
              
                              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                            </div>
              </div>
              </div>  </aside>
            </div>
        </div>
    </section>
@endsection
