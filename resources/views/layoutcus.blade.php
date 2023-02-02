<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <title>My Account | Store Shoes</title>
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords"
        content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png')}}">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" media="screen"
        href="{{ URL::to('/public/frontend/vendor/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ URL::to('/public/frontend/vendor/tiny-slider/dist/tiny-slider.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ URL::to('/public/frontend/vendor/nouislider/dist/nouislider.min.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ URL::to('/public/frontend/vendor/drift-zoom/dist/drift-basic.min.css') }}" />
        @yield('head')
    <link rel="stylesheet" media="screen" href="{{ URL::to('/public/frontend/css/theme.min.css') }}">
    <link rel='stylesheet' id='jquery-colorbox-css'
        href='https://cartzilla.madrasthemes.com/wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox.css?ver=1.4.21'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-css'
        href='https://cartzilla.madrasthemes.com/wp-content/themes/cartzilla/assets/vendor/font-awesome/css/fontawesome-all.min.css?ver=1.0.20'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cartzilla-vendor-css'
        href='https://cartzilla.madrasthemes.com/wp-content/themes/cartzilla/assets/css/vendor.min.css?ver=1.0.20'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='slick-carousel-css'
        href='https://cartzilla.madrasthemes.com/wp-content/themes/cartzilla/assets/css/slick.css?ver=1.8.1' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='cartzilla-icons-css'
        href='https://cartzilla.madrasthemes.com/wp-content/themes/cartzilla/assets/css/cartzilla-icons.css?ver=1.0.20'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='cartzilla-style-css'
        href='https://cartzilla.madrasthemes.com/wp-content/themes/cartzilla/style.css?ver=1.0.20' type='text/css'
        media='all' />
    <link rel='stylesheet' id='cartzilla-color-css'
        href='https://cartzilla.madrasthemes.com/wp-content/themes/cartzilla/assets/css/colors/pink.css?ver=1.0.20'
        type='text/css' media='all' />
    <link rel='stylesheet' id='cartzilla-fonts-css'
        href='https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&#038;display=swap' type='text/css'
        media='all' />
    <link rel='stylesheet' id='mas-wcvs-style-css'
        href='https://cartzilla.madrasthemes.com/wp-content/plugins/mas-woocommerce-variation-swatches/assets/css/style.css?ver=1.0.4'
        type='text/css' media='all' />

</head>

<!-- Body-->

<body class="handheld-toolbar-enabled">

    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab"
                                data-bs-toggle="tab" role="tab" aria-selected="true"><i
                                    class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab"
                                role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
                    </ul>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate
                        id="signin-tab">
                        <div class="mb-3">
                            <label class="form-label" for="si-email">Email address</label>
                            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com"
                                required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="si-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-wrap justify-content-between">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="si-remember">
                                <label class="form-check-label" for="si-remember">Remember me</label>
                            </div><a class="fs-sm" href="#">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
                    </form>
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                        <div class="mb-3">
                            <label class="form-label" for="su-name">Full name</label>
                            <input class="form-control" type="text" id="su-name" placeholder="John Doe"
                                required>
                            <div class="invalid-feedback">Please fill in your name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="su-email">Email address</label>
                            <input class="form-control" type="email" id="su-email"
                                placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password-confirm">Confirm password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <main class="page-wrapper">
        <!-- Quick View Modal-->
        <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title product-title"><a href="shop-single-v1.html" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i
                                    class="ci-arrow-right fs-lg ms-2"></i></a></h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Product gallery-->
                            <div class="col-lg-7 pe-lg-0">
                                <div class="product-gallery">
                                    <div class="product-gallery-preview order-sm-2">
                                        <div class="product-gallery-preview-item active" id="first"><img
                                                class="image-zoom"
                                                src="{{ URL::to('/public/frontend/img/shop/single/gallery/01.jpg') }}"
                                                data-zoom="{{ URL::to('/public/frontend/img/shop/single/gallery/01.jpg') }}"
                                                alt="Product image">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="second"><img
                                                class="image-zoom"
                                                src="{{ URL::to('/public/frontend/img/shop/single/gallery/02.jpg') }}"
                                                data-zoom="{{ URL::to('/public/frontend/img/shop/single/gallery/02.jpg') }}"
                                                alt="Product image">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="third"><img
                                                class="image-zoom"
                                                src="{{ URL::to('/public/frontend/img/shop/single/gallery/03.jpg') }}"
                                                data-zoom="{{ URL::to('/public/frontend/img/shop/single/gallery/03.jpg') }}"
                                                alt="Product image">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="fourth"><img
                                                class="image-zoom"
                                                src="{{ URL::to('/public/frontend/img/shop/single/gallery/04.jpg') }}"
                                                data-zoom="{{ URL::to('/public/frontend/img/shop/single/gallery/04.jpg') }}"
                                                alt="Product image">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                    </div>
                                    <div class="product-gallery-thumblist order-sm-1"><a
                                            class="product-gallery-thumblist-item active" href="#first"><img
                                                src="{{ URL::to('/public/frontend/img/shop/single/gallery/th01.jpg') }}"
                                                alt="Product thumb"></a><a class="product-gallery-thumblist-item"
                                            href="#second"><img
                                                src="{{ URL::to('/public/frontend/img/shop/single/gallery/th02.jpg') }}"
                                                alt="Product thumb"></a><a class="product-gallery-thumblist-item"
                                            href="#third"><img
                                                src="{{ URL::to('/public/frontend/img/shop/single/gallery/th03.jpg') }}"
                                                alt="Product thumb"></a><a class="product-gallery-thumblist-item"
                                            href="#fourth"><img
                                                src="{{ URL::to('/public/frontend/img/shop/single/gallery/th04.jpg') }}"
                                                alt="Product thumb"></a></div>
                                </div>
                            </div>
                            <!-- Product details-->
                            <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                                <div class="product-details ms-auto pb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2"><a
                                            href="shop-single-v1.html#reviews">
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div><span
                                                class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74
                                                Reviews</span>
                                        </a>
                                        <button class="btn-wishlist" type="button" data-bs-toggle="tooltip"
                                            title="Add to wishlist"><i class="ci-heart"></i></button>
                                    </div>
                                    <div class="mb-3"><span
                                            class="h3 fw-normal text-accent me-1">$18.<small>99</small></span>
                                        <del class="text-muted fs-lg me-3">$25.<small>00</small></del><span
                                            class="badge bg-danger badge-shadow align-middle mt-n2">Sale</span>
                                    </div>
                                    <div class="fs-sm mb-4"><span
                                            class="text-heading fw-medium me-1">Color:</span><span class="text-muted"
                                            id="colorOptionText">Red/Dark blue/White</span></div>
                                    <div class="position-relative me-n4 mb-3">
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color"
                                                id="color1" data-bs-label="colorOptionText"
                                                value="Red/Dark blue/White" checked>
                                            <label class="form-option-label rounded-circle" for="color1"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url({{ URL::to('/public/frontend/img/shop/single/color-opt-1.png') }})"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color"
                                                id="color2" data-bs-label="colorOptionText"
                                                value="Beige/White/Black">
                                            <label class="form-option-label rounded-circle" for="color2"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url({{ URL::to('/public/frontend/img/shop/single/color-opt-2.png') }})"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color"
                                                id="color3" data-bs-label="colorOptionText"
                                                value="Dark grey/White/Mustard">
                                            <label class="form-option-label rounded-circle" for="color3"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url({{ URL::to('/public/frontend/img/shop/single/color-opt-3.png') }})"></span></label>
                                        </div>
                                        <div class="product-badge product-available mt-n1"><i
                                                class="ci-security-check"></i>Product available</div>
                                    </div>
                                    <form class="mb-grid-gutter">
                                        <div class="mb-3">
                                            <label class="fw-medium pb-1" for="product-size">Size:</label>
                                            <select class="form-select" required id="product-size">
                                                <option value="">Select size</option>
                                                <option value="xs">XS</option>
                                                <option value="s">S</option>
                                                <option value="m">M</option>
                                                <option value="l">L</option>
                                                <option value="xl">XL</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 d-flex align-items-center">
                                            <select class="form-select me-3" style="width: 5rem;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i
                                                    class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                                        </div>
                                    </form>
                                    <h5 class="h6 mb-3 pb-2 border-bottom"><i
                                            class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Product
                                        info</h5>
                                    <h6 class="fs-sm mb-2">Style</h6>
                                    <ul class="fs-sm ps-4">
                                        <li>Hooded top</li>
                                    </ul>
                                    <h6 class="fs-sm mb-2">Composition</h6>
                                    <ul class="fs-sm ps-4">
                                        <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                                        <li>Lining: Cotton 100%</li>
                                        <li>Cotton 80%, Polyester 20%</li>
                                    </ul>
                                    <h6 class="fs-sm mb-2">Art. No.</h6>
                                    <ul class="fs-sm ps-4 mb-0">
                                        <li>183260098</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar 3 Level (Light)-->
        <header class="shadow-sm">
            <!-- Topbar-->
            <div class="topbar topbar-dark bg-dark">
                <div class="container">
                    <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="/"
                            data-bs-toggle="dropdown">Useful links</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tel:0909090909"><i
                                        class="ci-support text-muted me-2"></i>(09) 09 090 909</a></li>
                            <li><a class="dropdown-item" href="order-tracking.html"><i
                                        class="ci-location text-muted me-2"></i>Order tracking</a></li>
                        </ul>
                    </div>
                    <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="ci-support"></i><span
                            class="text-muted me-1">Support</span><a class="topbar-link" href="tel:0909090909">(09)
                            09 090 909</a></div>
                    <div class="tns-carousel tns-controls-static d-none d-md-block">
                        <div class="tns-carousel-inner"
                            data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                            <div class="topbar-text">Free shipping for order over 150,000 VND</div>
                        </div>
                    </div>
                    <div class="ms-3 text-nowrap"><a class="topbar-link me-4 d-none d-md-inline-block"
                            href="/"><i class="ci-location"></i>Order tracking</a>

                    </div>
                </div>
            </div>
            <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
            <div class="navbar-sticky bg-light">
                <div class="navbar navbar-expand-lg navbar-light">
                    <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0"
                            href="/"><img src="{{ URL::to('/public/frontend/img/logo-dark.png') }}"
                                width="142" alt="Cartzilla"></a><a
                            class="navbar-brand d-sm-none flex-shrink-0 me-2" href="/"><img
                                src="{{ URL::to('/public/frontend/img/logo-icon.png') }}" width="74"
                                alt="Cartzilla"></a>
                        <div class="input-group d-none d-lg-flex mx-4">
                            <input class="form-control rounded-end pe-5" type="text"
                                placeholder="Search for products"><i
                                class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                        </div>
                        <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">

                            <?php 
                          $customer_id = Session::get('CID');
                          $Cusername = Session::get('Cusername');
                    if($customer_id == NULL){
                  ?><a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2"
                                href="/login-checkout" data-toggle="modal">
                                <div class="navbar-tool-icon-box">
                                    <i class="navbar-tool-icon czi-user"></i>
                                </div>
                                <div class="navbar-tool-text ml-n2">
                                    <small>
                                        Hello, Sign in </small>
                                    My Account
                                </div>
                            </a>
                            <?php }else{ ?>
                            <div class="navbar-tool dropdown ml-2">

                                <a class="navbar-tool-icon-box border dropdown-toggle" href="/my-account/">
                                    <img alt=""
                                        src="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=36&amp;d=mm&amp;r=g"
                                        srcset="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=72&amp;d=mm&amp;r=g 2x"
                                        class="avatar avatar-36 photo rounded-circle" height="36" width="36"
                                        gurl="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=36&amp;d=mm&amp;r=g"
                                        decoding="async"> </a>
                                <a class="navbar-tool-text ml-n1" href="/my-account/">
                                    <small>
                                        Hello, </small>
                                    {{$Cusername}}</a>
                                <ul class="dropdown-menu dropdown-menu-right" style="min-width: 14rem;">
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                                        <a class="dropdown-item d-flex align-items-center" href="/my-account/">
                                            <i class="czi-home opacity-60 mt-n1 mr-2"></i>
                                            Dashboard </a>
                                    </li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="/my-account/orders/">
                                            <i class="czi-bag opacity-60 mt-n1 mr-2"></i>
                                            Orders <span class="font-size-xs text-muted ml-auto"></span>
                                        </a>
                                    </li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address is-active">
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="/my-account/edit-address/">
                                            <i class="czi-location opacity-60 mt-n1 mr-2"></i>
                                            Addresses </a>
                                    </li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="/my-account/edit-account/">
                                            <i class="czi-user opacity-60 mt-n1 mr-2"></i>
                                            Account details </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                        <a class="dropdown-item d-flex align-items-center" href="/logout-checkout">
                                            <i class="czi-sign-out opacity-60 mt-n1 mr-2"></i>
                                            Logout </a>
                                    </li>
                                </ul>
                            </div>

                            <?php } ?>


                            <div class="navbar-tool ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                                    href="/show-cart"><i class="navbar-tool-icon ci-cart"></i></a><a
                                    class="navbar-tool-text" href="/show-cart"><small>My Cart</small></a>
                                <!-- Cart dropdown-->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <!-- Search-->
                            <div class="input-group d-lg-none my-3"><i
                                    class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                                <input class="form-control rounded-start" type="text"
                                    placeholder="Search for products">
                            </div>


                            <!-- Primary menu-->
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/') }}">Home</a>
                                </li>
                                @foreach ($category as $key => $cate_pro)
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ URL::to('/category/' . $cate_pro->CatID) }}">{{ $cate_pro->CateName }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Title-->
        @yield('header')
        <div class="container pb-5 mb-2 mb-md-3">
            @foreach ($Name_by_id as $key => $value)
            
                <div class="row">
                    <aside class="col-lg-4 pt-4 pt-lg-0">
                        <div class="cz-sidebar-static rounded-lg box-shadow-lg px-0 pb-0 mb-5 mb-lg-0">
                            <div class="px-4 mb-4">
                                <div class="media align-items-center">
                                    <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;">
                                        <img alt="cartzilla"
                                            src="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=90&amp;d=mm&amp;r=g"
                                            srcset="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=180&amp;d=mm&amp;r=g 2x"
                                            class="avatar avatar-90 photo rounded-circle" height="90" width="90"
                                            gurl="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=90&amp;d=mm&amp;r=g"
                                            decoding="async">
                                    </div>
                                    <div class="media-body pl-3">
                                        <h3 class="font-size-base mb-0">{{ $value->CName }}</h3>
                                        <span class="text-accent font-size-sm">{{ $value->CEmail }}</span>
                                    </div>
                                </div>
                            </div>
                            <nav class="woocommerce-MyAccount-navigation">
                                <ul class="list-unstyled mb-0">
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard border-top mb-0">
                                        <a href="/my-account/" class="nav-link-style d-flex align-items-center px-4 py-3">
                                            <i class="czi-home align-middle opacity-60 mr-2"></i>
                                            Dashboard </a>
                                    </li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders is-active border-top mb-0">
                                        <a href="/my-account/orders/"
                                            class="nav-link-style d-flex align-items-center px-4 py-3">
                                            <i class="czi-bag align-middle opacity-60 mr-2"></i>
                                            Orders <span class="font-size-sm text-muted ml-auto"></span>
                                        </a>
                                    </li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address border-top mb-0">
                                        <a href="/my-account/edit-address/"
                                            class="nav-link-style d-flex align-items-center px-4 py-3">
                                            <i class="czi-location align-middle opacity-60 mr-2"></i>
                                            Addresses </a>
                                    </li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--payment-methods border-top mb-0">
                                        <a href="/my-account/payment-methods/"
                                            class="nav-link-style d-flex align-items-center px-4 py-3">
                                            <i class="czi-card align-middle opacity-60 mr-2"></i>
                                            Payment methods </a>
                                    </li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account border-top mb-0">
                                        <a href="/my-account/edit-account/"
                                            class="nav-link-style d-flex align-items-center px-4 py-3">
                                            <i class="czi-user align-middle opacity-60 mr-2"></i>
                                            Account details </a>
                                    </li>
                                    <li
                                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout border-top d-lg-none mb-0">
                                        <a href="/logout-checkout" class="nav-link-style d-block px-4 py-3">
                                            <i class="czi-sign-out align-middle opacity-60 mr-2"></i>
                                            Logout </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                    <section class="col-lg-8">
                        <div class="woocommerce-MyAccount-content">
                            <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">

                                <h6 class="font-size-base text-light mb-0">Hello, {{ $value->CName }}</h6>

                                <a class="btn btn-primary btn-sm d-none d-lg-inline-block"
                                    href="/logout-checkout">
                                    <i class="czi-sign-out mr-2"></i>
                                    Logout </a>
                            </div>
                            @yield('content')

                            </div>
                        </section>
                        </div>
                        @endforeach
                        </div>
            </section>
        </div>
        </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
        <div class="container">
            <div class="row pb-2">
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget-links widget-light pb-2 mb-4">
                        <h3 class="widget-title text-light">Shop departments</h3>
                        <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="/">Home</a></li>
                            @foreach ($category as $key => $cate_pro)
                                <li class="widget-list-item"><a class="widget-list-link"
                                        href="{{ URL::to('/category/' . $cate_pro->CatID) }}">{{ $cate_pro->CateName }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget-links widget-light pb-2 mb-4">
                        <h3 class="widget-title text-light">Account &amp; shipping info</h3>
                        <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="/login-checkout">Your
                                    account</a></li>
                            <li class="widget-list-item"><a class="widget-list-link"
                                    href="/shipping-rates-policies">Shipping rates &amp; policies</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-links widget-light pb-2 mb-4">
                        <h3 class="widget-title text-light">Brand</h3>
                        <ul class="widget-list">
                            @foreach ($brand as $key => $brand_product)
                                <li class="widget-list-item"><a class="widget-list-link"
                                        href="{{ URL::to('/brand/' . $brand_product->BID) }}">{{ $brand_product->BName }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">


                </div>
            </div>
        </div>
        <div class="pt-5 bg-darker">
            <div class="container">
                <div class="row pb-3">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="ci-currency-exchange text-primary"
                                style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">We return money within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 customer support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mb-5">
                <div class="row pb-2">
                    <div class="col-md-6 text-center text-md-start mb-4">
                        <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3"
                                href="/"><img class="d-block"
                                    src="{{ URL::to('/public/frontend/img/footer-logo-light.png') }}" width="117"
                                    alt="Cartzilla"></a>

                        </div>
                        <div class="widget widget-links widget-light">
                            <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                                <li class="widget-list-item me-4"><a class="widget-list-link"
                                        href="#">Outlets</a></li>
                                <li class="widget-list-item me-4"><a class="widget-list-link"
                                        href="#">Affiliates</a></li>
                                <li class="widget-list-item me-4"><a class="widget-list-link"
                                        href="#">Support</a></li>
                                <li class="widget-list-item me-4"><a class="widget-list-link"
                                        href="#">Privacy</a></li>
                                <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Terms of
                                        use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end mb-4">
                        <div class="mb-3"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i
                                    class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2"
                                href="#"><i class="ci-facebook"></i></a><a
                                class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i
                                    class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest ms-2 mb-2"
                                href="#"><i class="ci-pinterest"></i></a><a
                                class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i
                                    class="ci-youtube"></i></a></div><img class="d-inline-block"
                            src="{{ URL::to('/public/frontend/img/cards-alt.png') }}" width="187"
                            alt="Payment methods">
                    </div>
                </div>
                <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by
                    <a class="text-light" href="/" target="_blank" rel="noopener">Shoes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Toolbar for handheld devices (Shop)-->
    <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="#"
                data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar"><span class="handheld-toolbar-icon"><i
                        class="ci-filter-alt"></i></span><span class="handheld-toolbar-label">Filters</span></a><a
                class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span
                    class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span
                    class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item"
                href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i
                        class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a
                class="d-table-cell handheld-toolbar-item" href="/show-cart"><span class="handheld-toolbar-icon"><i
                        class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span
                    class="handheld-toolbar-label">$265.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">
        </i></a>
    <script src="{{ URL::to('/public/frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('/public/frontend/vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ URL::to('/public/frontend/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ URL::to('/public/frontend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ URL::to('/public/frontend/vendor/nouislider/dist/nouislider.min.js') }}"></script>
    <script src="{{ URL::to('/public/frontend/vendor/drift-zoom/dist/Drift.min.js') }}"></script>

    <script src="{{ URL::to('/public/frontend/js/theme.min.js') }}"></script>
</body>

</html>
