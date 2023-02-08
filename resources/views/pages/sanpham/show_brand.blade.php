@extends('layout')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li> <a href="/">Home</a>
                        </li>
                        @foreach ($brand_name as $key => $value)
                            <li><span>/</span> <strong>{{ $value->brand_name }}</strong></li>
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
                                                        <div class="small-tag">Fashion 2016</div>
                                                        <h2 class="cat-heading">Women Collection</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
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
                              @foreach($brand_name as $key => $value)
                              <span class="page-heading-title">{{$value->brand_name}}</span> 
                            @endforeach
                            </h2>
                            <div class="display-product-option">





                                <div class="toolbar">


                                    <div id="sort-by">
                                        <label class="left">Sort By:</label>
                                        <select id="input-sort" class="form-control" onchange="location = this.value;">
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=p.sort_order&amp;order=ASC"
                                                selected="selected">Default</option>
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=pd.name&amp;order=ASC">
                                                Name (A - Z)</option>
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=pd.name&amp;order=DESC">
                                                Name (Z - A)</option>
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=p.price&amp;order=ASC">
                                                Price (Low &gt; High)</option>
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=p.price&amp;order=DESC">
                                                Price (High &gt; Low)</option>
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=rating&amp;order=DESC">
                                                Rating (Highest)</option>
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=rating&amp;order=ASC">
                                                Rating (Lowest)</option>
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=p.model&amp;order=ASC">
                                                Model (A - Z)</option>
                                            <option
                                                value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;sort=p.model&amp;order=DESC">
                                                Model (Z - A)</option>
                                        </select>
                                    </div>

                                    <div class="pager">
                                        <div id="limiter">
                                            <label>Show:</label>
                                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                                                <option
                                                    value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;limit=15"
                                                    selected="selected">15</option>
                                                <option
                                                    value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;limit=25">
                                                    25</option>
                                                <option
                                                    value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;limit=50">
                                                    50</option>
                                                <option
                                                    value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;limit=75">
                                                    75</option>
                                                <option
                                                    value="http://brezzademo3.magikthemes.com/index.php?route=product/category&amp;path=2001&amp;limit=100">
                                                    100</option>
                                            </select>
                                        </div>
                                    </div>

                                </div><!-- toolbar -->
                            </div>
                        </div>
                        <div class="category-products">
                            <div class="pro_row products-grid">
                              @foreach($brand_by_id as $key => $value)
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
                                              <button type="button" title="" data-original-title="Add to Cart" class="button btn-cart link-cart" onclick="cart.add('2013');"><span>Add to Cart</span></button>
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
                                   
                                       
                                        {{$brand_by_id->links()}}
                                    
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
                  <div class="hot-banner"><img alt="banner" src="catalog/view/theme/breezademo3/image/hot-trends-banner.jpg"></div></div>
                  <div class="panel panel-default">
                <div class="panel-heading">Refine Search</div>
                <div class="list-group">
                      <a class="list-group-item">Price</a>
                  <div class="list-group-item">
                    <div id="filter-group1">
                              <div class="checkbox">
                        <label>
                                      <input type="checkbox" name="filter[]" value="21">
                          100-1000 (2)                      </label>
                      </div>
                              <div class="checkbox">
                        <label>
                                      <input type="checkbox" name="filter[]" value="22">
                          1000-1500 (2)                      </label>
                      </div>
                              <div class="checkbox">
                        <label>
                                      <input type="checkbox" name="filter[]" value="23">
                          1500-2000 (2)                      </label>
                      </div>
                              <div class="checkbox">
                        <label>
                                      <input type="checkbox" name="filter[]" value="24">
                          2000-3000 (2)                      </label>
                      </div>
                            </div>
                  </div>
                      <a class="list-group-item">Material</a>
                  <div class="list-group-item">
                    <div id="filter-group5">
                              <div class="checkbox">
                        <label>
                                      <input type="checkbox" name="filter[]" value="17">
                          Wood (3)                      </label>
                      </div>
                              <div class="checkbox">
                        <label>
                                      <input type="checkbox" name="filter[]" value="18">
                          Metal (3)                      </label>
                      </div>
                              <div class="checkbox">
                        <label>
                                      <input type="checkbox" name="filter[]" value="19">
                          Leather (0)                      </label>
                      </div>
                              <div class="checkbox">
                        <label>
                                      <input type="checkbox" name="filter[]" value="20">
                          Fabric (1)                      </label>
                      </div>
                            </div>
                  </div>
                    </div>
                <div class="panel-footer text-right">
                  <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
                </div>
              </div>
              <script type="text/javascript"><!--
              $('#button-filter').on('click', function() {
                filter = [];
              
                $('input[name^=\'filter\']:checked').each(function(element) {
                  filter.push(this.value);
                });
              
                location = 'http://brezzademo3.magikthemes.com/index.php?route=product/category&path=2001&filter=' + filter.join(',');
              });
              //--></script>
                  <div class="panel panel-default special-products">
              <div class="panel-heading">Specials</div>
              
              
                  <div class="product-layout">
                  <div class="product-thumb transition">
                    <div class="image"><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2026"><img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/product26-700x850.jpg" alt="Cozy Krafts Solid TV Table" title="Cozy Krafts Solid TV Table" class="img-responsive"></a></div>
                    <div class="caption">
                      <h4><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2026">Cozy Krafts Solid TV Table</a></h4>
              
              
                              <p class="price">
                                  <span class="price-new">$400.00</span> <span class="price-old">$500.00</span>
                                            <span class="price-tax">Ex Tax: $400.00</span>
                                </p>
                            </div>
              
                  </div>
                </div>
                  <div class="product-layout">
                  <div class="product-thumb transition">
                    <div class="image"><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2025"><img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/product25-700x850.jpg" alt="DecorNation Floating Wall Shelf" title="DecorNation Floating Wall Shelf" class="img-responsive"></a></div>
                    <div class="caption">
                      <h4><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2025">DecorNation Floating Wall Shelf</a></h4>
              
              
                              <p class="price">
                                  <span class="price-new">$1,600.00</span> <span class="price-old">$2,000.00</span>
                                            <span class="price-tax">Ex Tax: $1,600.00</span>
                                </p>
                            </div>
              
                  </div>
                </div>
                  <div class="product-layout">
                  <div class="product-thumb transition">
                    <div class="image"><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2022"><img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/product22-700x850.jpg" alt="Grandpa Rocking Chair" title="Grandpa Rocking Chair" class="img-responsive"></a></div>
                    <div class="caption">
                      <h4><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2022">Grandpa Rocking Chair</a></h4>
              
              
                              <p class="price">
                                  <span class="price-new">$1,800.00</span> <span class="price-old">$2,000.00</span>
                                            <span class="price-tax">Ex Tax: $1,800.00</span>
                                </p>
                            </div>
              
                  </div>
                </div>
                  <div class="product-layout">
                  <div class="product-thumb transition">
                    <div class="image"><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2024"><img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/product24-700x850.jpg" alt="Nitraa Eco 3 Door Wardrobe" title="Nitraa Eco 3 Door Wardrobe" class="img-responsive"></a></div>
                    <div class="caption">
                      <h4><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2024">Nitraa Eco 3 Door Wardrobe</a></h4>
              
              
                              <p class="price">
                                  <span class="price-new">$90.00</span> <span class="price-old">$100.00</span>
                                            <span class="price-tax">Ex Tax: $90.00</span>
                                </p>
                            </div>
              
                  </div>
                </div>
                
              
              </div>    <div class="custom-slider">
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
                                  <img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/slide3-360x488.jpg" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" title="50% OFF" alt="50% OFF">
                                  </a>
                                  <div class="carousel-caption">
                                    <h3>
                                      <a href="" target="_blank" title="50% OFF">
                                        50% OFF                        </a>
                                    </h3>
                                    <p></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                      <a class="link" href="#">Buy Now</a><p></p>
                                  </div>
                                </div>
              
                                 
                                
                                <div class="item"> 
                                  <a href="" target="_blank" title="Hot Collection">
                                  <img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/slide1-360x488.jpg" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" title="Hot Collection" alt="Hot Collection">
                                  </a>
                                  <div class="carousel-caption">
                                    <h3>
                                      <a href="" target="_blank" title="Hot Collection">
                                        Hot Collection                        </a>
                                    </h3>
                                    <p></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                      <a class="link" href="#">Buy Now</a><p></p>
                                  </div>
                                </div>
              
                                 
                                
                                <div class="item active"> 
                                  <a href="" target="_blank" title="Summer Collection">
                                  <img src="http://brezzademo3.magikthemes.com/image/cache/catalog/furniture/slide2-360x488.jpg" data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat" title="Summer Collection" alt="Summer Collection">
                                  </a>
                                  <div class="carousel-caption">
                                    <h3>
                                      <a href="" target="_blank" title="Summer Collection">
                                        Summer Collection                        </a>
                                    </h3>
                                    <p></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                      <a class="link" href="#">Buy Now</a><p></p>
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
 