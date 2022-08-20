<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/molla/index-10.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:06:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <?php 
    include_once('head_file.php');
    ?>
    <!--<link rel="stylesheet" href="assets/css/skins/skin-demo-10.css">-->
    <!--<link rel="stylesheet" href="assets/css/skins/skin-demo-3.css">-->
    <!--<link rel="stylesheet" href="assets/css/skins/skin-demo-5.css">-->
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/demos/demo-5.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/demos/demo-3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/demos/demo-10.css">

    <!--<link rel="stylesheet" href="assets/css/skins/skin-demo-2.css">
    <link rel="stylesheet" href="assets/css/demos/demo-2.css">-->
    <style type="text/css">
        .header-intro-clearance .wishlist .wishlist-count 
        {
            position: absolute;
            top: 0;
            right: -.5rem;
        }
        .header-intro-clearance .wishlist .wishlist-count {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1;
            color: 
            #fff;
        }
        .header-intro-clearance .cart-dropdown .cart-count, .header-intro-clearance .wishlist .wishlist-count {
            min-width: 1.6rem;
            height: 1.6rem;
        }
        .wishlist a .wishlist-count {
            background-color: #c33;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <?php 
        include_once('header.php');
        ?>
        

        <main class="main">
            <div class="container">
                <div class="intro-slider-container slider-container-ratio mb-2">
                    <div class="intro-slider owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/slider/slide-1-480w.jpg">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/slider/slide-1.jpg" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">Sneakers & Athletic Shoes</h1><!-- End .intro-title -->

                                <div class="intro-price text-white">from $9.99</div><!-- End .intro-price -->

                                <a href="category.html" class="btn btn-white-primary btn-round">
                                    <span>SHOP NOW</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->

                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/slider/slide-2-480w.jpg">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/slider/slide-2.jpg" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle">Trending Now</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">This Week's Most Wanted</h1><!-- End .intro-title -->

                                <div class="intro-price text-white">from $49.99</div><!-- End .intro-price -->

                                <a href="category.html" class="btn btn-white-primary btn-round">
                                    <span>SHOP NOW</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->

                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/slider/slide-3-480w.jpg">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/slider/slide-3.jpg" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle text-white">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">Can’t-miss Clearance:</h1><!-- End .intro-title -->

                                <div class="intro-price text-white">starting at 60% off</div><!-- End .intro-price -->

                                <a href="category.html" class="btn btn-white-primary btn-round">
                                    <span>SHOP NOW</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->
                    </div><!-- End .intro-slider owl-carousel owl-simple -->
                    <span class="slider-loader"></span><!-- End .slider-loader -->
                </div><!-- End .intro-slider-container -->
            </div><!-- End .container -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner banner-big banner-overlay">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/banners/banner-1.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-subtitle text-white"><a href="#">New Collection</a></h3><!-- End .banner-subtitle -->
                                <h2 class="banner-title text-white"><a href="#">Shop Women's</a></h2><!-- End .banner-title -->
                                <a href="#" class="btn underline"><span>Discover Now</span></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="banner banner-big banner-overlay">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/banners/banner-2.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-subtitle text-white"><a href="#">New Collection</a></h3><!-- End .banner-subtitle -->
                                <h2 class="banner-title text-white"><a href="#">Shop Men's</a></h2><!-- End .banner-title -->
                                <a href="#" class="btn underline"><span>Discover Now</span></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay text-white">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/banners/banner-3.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-right">
                                <h4 class="banner-subtitle"><a href="#">Flip Flop</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">Summer<br>sale -70% off</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn underline btn-outline-white-3 banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay color-grey">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/banners/banner-4.jpg" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">Accessories</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">2019 Winter<br>up to 50% off</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn underline banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay text-white">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/banners/banner-5.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-right mr">
                                <h4 class="banner-subtitle"><a href="#">New in</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">Women’s<br>sportswear</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn underline btn-outline-white-3 banner-link">Shop Now</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->

            <div class="icon-boxes-container icon-boxes-separator bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-primary">
                                    <i class="icon-rocket"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                    <p>Orders $50 or more</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                        
                        <div class="col-sm-6 col-lg-4">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-primary">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                    <p>Within 30 days</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                       

                        <div class="col-sm-6 col-lg-4">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-primary">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 amazing services</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->


            <div class="bg-light-2 pt-6 pb-6 featured">
                <div class="container-fluid">
                    <div class="heading heading-center mb-3">
                        <h2 class="title">FEATURED PRODUCTS</h2><!-- End .title -->

                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="featured-women-link" data-toggle="tab" href="#featured-women-tab" role="tab" aria-controls="featured-women-tab" aria-selected="true">Womens Clothing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="featured-men-link" data-toggle="tab" href="#featured-men-tab" role="tab" aria-controls="featured-men-tab" aria-selected="false">Mens Clothing</a>
                            </li>
                        </ul>
                    </div><!-- End .heading -->

                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel" aria-labelledby="featured-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-1-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Backpack</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $60.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-2-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Biker jacket</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $120.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #d79442;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #cc3333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-3-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $70.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-4-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->

                                        <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$190.00</span>
                                            <span class="old-price">$310.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-5-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Short wrap dress</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $80.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-1-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Backpack</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $60.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="featured-men-tab" role="tabpanel" aria-labelledby="featured-men-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":1
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-2-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Biker jacket</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $120.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #d79442;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #cc3333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-3-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $70.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-4-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->

                                        <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="product.html">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$190.00</span>
                                            <span class="old-price">$310.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .container-fluid -->
            </div><!-- End .bg-light-2 pt-4 pb-4 -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container-fluid">
                <div class="heading heading-center mb-3">
                    <h2 class="title">NEW ARRIVALS</h2><!-- End .title -->

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="new-women-link" data-toggle="tab" href="#new-women-tab" role="tab" aria-controls="new-women-tab" aria-selected="true">Womens Clothing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-men-link" data-toggle="tab" href="#new-men-tab" role="tab" aria-controls="new-men-tab" aria-selected="false">Mens Clothing</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="new-women-tab" role="tabpanel" aria-labelledby="new-women-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-6-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Tie-detail top</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$84.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-7-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-7-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Dress with a belt</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                               $120.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-8-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-8-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Linen-blend paper bag trousers</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $60.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #d5ad81;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-top">Top</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-9-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-9-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Paper straw shopper</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                               $80.95
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 6 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-10-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-10-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Trainers</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                               $56.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-11-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-11-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Hooded top </a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$84.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-12-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Vest dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $89.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-13-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-13-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Long-sleeved blouse</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $84.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 3 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-14-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-14-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Denim jacket</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $80.95
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #7ba1c9;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #feb143;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #f0c7b7;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-15-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-15-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Sunglasses</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $56.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="new-men-tab" role="tabpanel" aria-labelledby="new-men-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-8-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-8-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Linen-blend paper bag trousers</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $60.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #d5ad81;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-top">Top</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-9-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-9-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Paper straw shopper</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                               $80.95
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 6 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-10-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-10-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Trainers</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                               $56.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-11-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-11-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Hooded top </a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$84.00</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-12-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Vest dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $89.99
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-7 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-13-1.jpg" alt="Product image" class="product-image">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/products/product-13-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="product.html">Long-sleeved blouse</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $84.00
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 3 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->

                <div class="more-container text-center mt-2">
                    <a href="#" class="btn btn-outline-dark-3 btn-more"><span>Load more</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->

                <hr class="mt-0 mb-6">
                
                <div class="blog-posts mb-4">
                    <h2 class="title text-center mb-3">From Our Blog</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple mb-2" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "520": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                }
                            }
                        }'>
                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/blog/post-1.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>, 1 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Sed adipiscing ornare.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/blog/post-2.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 12, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Fusce lacinia arcuet nulla.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/blog/post-3.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 19, 2018</a>, 2 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Quisque volutpat mattis eros.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-7/blog/post-4.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 25, 2018</a>, 3 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Mauris suscipit in massa.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .owl-carousel -->
                </div><!-- End .blog-posts -->
            </div><!-- End .container-fluid -->

            <div class="bg-light pt-5 pb-10 mb-3">
                <div class="container">
                    <div class="heading heading-center mb-3">
                        <h2 class="title-lg">New Arrivals</h2><!-- End .title -->

                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-women-link" data-toggle="tab" href="#new-women-tab" role="tab" aria-controls="new-women-tab" aria-selected="false">Women's</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="new-men-link" data-toggle="tab" href="#new-men-tab" role="tab" aria-controls="new-men-tab" aria-selected="false">Men's</a>
                            </li>
                        </ul>
                    </div><!-- End .heading -->

                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane tab-pane-shadow p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                            <div class="owl-carousel owl-simple carousel-equal-height" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 0,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">Sale</span>
                                        <span class="product-label label-sale">30% off</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-1.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Men’s</a>,
                                            <a href="#">Boots</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">The North Face Back-To-Berkeley Remtlz Mesh</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $50.00</span>
                                            <span class="old-price">$84.00</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #5f554b;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-2.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Men’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Nike Air Zoom Wildhorse 4</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $77.99
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                        
                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">New</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-3.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Women’s</a>,
                                            <a href="#">Sandals</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Eric Michael Joan</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $35.99
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #b58853;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">Out Of Stock</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-4.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Women’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Nike Air Max Motion LW Racer</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="out-price">$54.99</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 3 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">Sale</span>
                                        <span class="product-label label-sale">40% off</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-5.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Men’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $77.99</span>
                                            <span class="old-price">$130.00</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane tab-pane-shadow p-0 fade" id="new-women-tab" role="tabpanel" aria-labelledby="new-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 0,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">Out Of Stock</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-4.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Women’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Nike Air Max Motion LW Racer</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="out-price">$54.99</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 3 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">New</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-3.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Women’s</a>,
                                            <a href="#">Sandals</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Eric Michael Joan</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $35.99
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #b58853;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">Sale</span>
                                        <span class="product-label label-sale">40% off</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-5.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Men’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $77.99</span>
                                            <span class="old-price">$130.00</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">Sale</span>
                                        <span class="product-label label-sale">30% off</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-1.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Men’s</a>,
                                            <a href="#">Boots</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">The North Face Back-To-Berkeley Remtlz Mesh</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $50.00</span>
                                            <span class="old-price">$84.00</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #5f554b;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-2.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Men’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Nike Air Zoom Wildhorse 4</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $77.99
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                        
                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane tab-pane-shadow p-0 fade" id="new-men-tab" role="tabpanel" aria-labelledby="new-men-link">
                            <div class="owl-carousel owl-simple carousel-equal-height" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 0,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">Sale</span>
                                        <span class="product-label label-sale">40% off</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-5.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Men’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $77.99</span>
                                            <span class="old-price">$130.00</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">New</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-3.jpg" alt="Product image" class="product-image">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Women’s</a>,
                                            <a href="#">Sandals</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Eric Michael Joan</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $35.99
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #b58853;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-2.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Men’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Nike Air Zoom Wildhorse 4</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $77.99
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                        
                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->

                                <div class="product product-3 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-primary">Out Of Stock</span>
                                        <a href="product.html">
                                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-4.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Women’s</a>,
                                            <a href="#">Sneakers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Nike Air Max Motion LW Racer</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="out-price">$54.99</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->

                                    <div class="product-footer">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 3 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-footer -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .container -->
            </div><!-- End .bg-light -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-4">
                        <div class="banner banner-cat">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/banners/banner-5.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-overlay text-center">
                                <h3 class="banner-title font-weight-normal">Women's</h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle">125 Products</h4><!-- End .banner-subtitle -->
                                <a href="category.html" class="banner-link">SHOP NOW</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-sm-6 col-md-4">
                        <div class="banner banner-cat">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/banners/banner-6.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-overlay text-center">
                                <h3 class="banner-title font-weight-normal">Men's</h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle">97 Products</h4><!-- End .banner-subtitle -->
                                <a href="category.html" class="banner-link">SHOP NOW</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-sm-6 col-md-4">
                        <div class="banner banner-cat">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/banners/banner-7.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-overlay text-center">
                                <h3 class="banner-title font-weight-normal">Kid's</h3><!-- End .banner-title -->
                                <h4 class="banner-subtitle">48 Products</h4><!-- End .banner-subtitle -->
                                <a href="category.html" class="banner-link">SHOP NOW</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-4 -->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title-lg mb-2">Top Selling Products</h2><!-- End .title-lg text-center -->

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-women-link" data-toggle="tab" href="#top-women-tab" role="tab" aria-controls="top-women-tab" aria-selected="false">Women's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-men-link" data-toggle="tab" href="#top-men-tab" role="tab" aria-controls="top-men-tab" aria-selected="false">Men's</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                        <div class="products just-action-icons-sm">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">Sale</span>
                                            <span class="product-label label-sale">30% off</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-countdown-container">
                                                <span class="product-contdown-title">offer ends in:</span>
                                                <div class="product-countdown countdown-compact" data-until="2019, 11, 3" data-compact="true"></div><!-- End .product-countdown -->
                                            </div><!-- End .product-countdown-container -->

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $77.99</span>
                                                <span class="old-price">$130.00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">New</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Sandals</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Eric Michael Sandra</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $42.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                            
                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-7.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Heels</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Jessica Simpson Blayke</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $20.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #cc6666;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ccccff;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-8.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $20.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #ffca51;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #bb8379;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-9.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">The North Face Raedonda Boot Sneaker</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $97.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-10.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $57.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-11.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Splendid Roselyn II</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $97.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 3 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #78645f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #b89474;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">Sale</span>
                                            <span class="product-label label-sale">55% off</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-12.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Heels</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Marc Jacobs Somewhere Sport Sandal</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $125.99</span>
                                                <span class="old-price">$275.00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">New</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-13.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Mules</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Crocs Crocband Clog</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $25.75
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 7 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-14.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Vasque Sundowner GTX</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $109.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-women-tab" role="tabpanel" aria-labelledby="top-women-link">
                        <div class="products just-action-icons-sm">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-8.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $20.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #ffca51;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #bb8379;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-10.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $57.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-11.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Splendid Roselyn II</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $97.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 3 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #78645f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #b89474;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->
                                
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">New</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Sandals</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Eric Michael Sandra</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $42.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                            
                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">Sale</span>
                                            <span class="product-label label-sale">30% off</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-countdown-container">
                                                <span class="product-contdown-title">offer ends in:</span>
                                                <div class="product-countdown countdown-compact" data-until="2019, 11, 3" data-compact="true"></div><!-- End .product-countdown -->
                                            </div><!-- End .product-countdown-container -->

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $77.99</span>
                                                <span class="old-price">$130.00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-9.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">The North Face Raedonda Boot Sneaker</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $97.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-7.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Heels</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Jessica Simpson Blayke</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $20.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #cc6666;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ccccff;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">Sale</span>
                                            <span class="product-label label-sale">55% off</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-12.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Heels</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Marc Jacobs Somewhere Sport Sandal</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $125.99</span>
                                                <span class="old-price">$275.00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">New</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-13.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Mules</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Crocs Crocband Clog</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $25.75
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 7 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-14.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Vasque Sundowner GTX</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $109.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-men-tab" role="tabpanel" aria-labelledby="top-men-link">
                        <div class="products just-action-icons-sm">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-10.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $57.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->


                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">Sale</span>
                                            <span class="product-label label-sale">30% off</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-countdown-container">
                                                <span class="product-contdown-title">offer ends in:</span>
                                                <div class="product-countdown countdown-compact" data-until="2019, 11, 3" data-compact="true"></div><!-- End .product-countdown -->
                                            </div><!-- End .product-countdown-container -->

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $77.99</span>
                                                <span class="old-price">$130.00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-11.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Splendid Roselyn II</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $97.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 3 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #78645f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #b89474;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">New</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Sandals</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Eric Michael Sandra</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $42.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                            
                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-7.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Heels</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Jessica Simpson Blayke</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $20.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #cc6666;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #ccccff;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-8.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Sneakers</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $20.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #ffca51;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #bb8379;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-9.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">The North Face Raedonda Boot Sneaker</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $97.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-14.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Men’s</a>,
                                                <a href="#">Boots</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Vasque Sundowner GTX</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $109.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">Sale</span>
                                            <span class="product-label label-sale">55% off</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-12.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Heels</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Marc Jacobs Somewhere Sport Sandal</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $125.99</span>
                                                <span class="old-price">$275.00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 0 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-3 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-primary">New</span>
                                            <a href="product.html">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/products/product-13.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Women’s</a>,
                                                <a href="#">Mules</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Crocs Crocband Clog</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $25.75
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->

                                        <div class="product-footer">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 7 Reviews )</span>
                                            </div><!-- End .rating-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product-footer -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->

                <div class="more-container text-center mt-5">
                    <a href="category.html" class="btn btn-outline-lightgray btn-more btn-round"><span>View more products</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->

            

            <div class="mb-5"></div><!-- End .mb5 -->

            <div class="container">
                <div class="cta cta-horizontal cta-horizontal-box bg-image mb-4 mb-lg-6" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/bg-1.jpg);">
                    <div class="row flex-column flex-lg-row align-items-lg-center">
                        <div class="col">
                            <h3 class="cta-title text-primary">New Deals! Start Daily at 12pm e.t.</h3><!-- End .cta-title -->
                            <p class="cta-desc">Get <em class="font-weight-medium">FREE SHIPPING* & 5% rewards</em> on every order with Molla Theme rewards program</p><!-- End .cta-desc -->
                        </div><!-- End .col -->
                        
                        <div class="col-auto">
                            <a href="#" class="btn btn-white-primary btn-round"><span>Add to Cart for $50.00/yr</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .col-auto -->
                    </div><!-- End .row -->
                </div><!-- End .cta-horizontal -->
            </div><!-- End .container -->

            <div class="blog-posts">
                <div class="container">
                    <h2 class="title-lg text-center mb-4">From Our Blog</h2><!-- End .title-lg text-center -->

                    <div class="owl-carousel owl-simple mb-4" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "520": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                }
                            }
                        }'>
                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/blog/post-1.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Sed adipiscing ornare.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. </p> 
                                    <a href="single.html" class="read-more">READ MORE</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    
                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/blog/post-2.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 12, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Fusce lacinia arcuet nulla.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. </p>
                                    <a href="single.html" class="read-more">READ MORE</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/blog/post-3.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 19, 2018</a>, 2 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Aliquam erat volutpat.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <p>Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. </p>
                                    <a href="single.html" class="read-more">READ MORE</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-10/blog/post-4.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 19, 2018</a>, 2 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Quisque a lectus.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. </p>
                                    <a href="single.html" class="read-more">READ MORE</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .owl-carousel -->

                    <div class="more-container text-center mt-1">
                        <a href="blog.html" class="btn btn-outline-lightgray btn-more btn-round"><span>View more articles</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .more-container -->
                </div><!-- End .container -->
            </div><!-- End .blog-posts -->

            <div class="container">
                <div class="instagram-feed-container">
                        <div class="row">
                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/1.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>387</a>
                                        <a href="#"><i class="icon-comments"></i>45</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/2.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>691</a>
                                        <a href="#"><i class="icon-comments"></i>87</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col feed-col-title">
                                <div class="instagram-feed-title">
                                    <i class="icon-instagram"></i>
                                    <p>@Molla_store <br>on instagram</p>
                                    <a href="#">FOLLOW</a>
                                </div><!-- End .instagram-feed-title -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/3.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>321</a>
                                        <a href="#"><i class="icon-comments"></i>54</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/4.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>44</a>
                                        <a href="#"><i class="icon-comments"></i>55</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/5.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>128</a>
                                        <a href="#"><i class="icon-comments"></i>99</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/6.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>433</a>
                                        <a href="#"><i class="icon-comments"></i>25</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/7.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>588</a>
                                        <a href="#"><i class="icon-comments"></i>44</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/8.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>87</a>
                                        <a href="#"><i class="icon-comments"></i>23</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-5/instagram/9.jpg" alt="img">

                                    <div class="instagram-feed-content">
                                        <a href="#"><i class="icon-heart-o"></i>87</a>
                                        <a href="#"><i class="icon-comments"></i>23</a>
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->
                        </div><!-- End .row -->
                    </div><!-- End .instagra-feed-container -->

                <div class="cta cta-separator cta-border-image cta-half mb-0" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/demos/demo-3/bg-2.jpg);">
                    <div class="cta-border-wrapper bg-white">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cta-wrapper cta-text text-center">
                                    <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                                    <p class="cta-desc">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p><!-- End .cta-desc -->
                            
                                    <div class="social-icons social-icons-colored justify-content-center">
                                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .cta-wrapper -->
                            </div><!-- End .col-lg-6 -->

                            <div class="col-lg-6">
                                <div class="cta-wrapper text-center">
                                    <h3 class="cta-title">Get the Latest Deals</h3><!-- End .cta-title -->
                                    <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for first shopping</p><!-- End .cta-desc -->
                            
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-rounded" type="submit"><i class="icon-long-arrow-right"></i></button>
                                            </div><!-- .End .input-group-append -->
                                        </div><!-- .End .input-group -->
                                    </form>
                                </div><!-- End .cta-wrapper -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .bg-white -->
                </div><!-- End .cta -->
            </div><!-- End .container -->
        </main><!-- End .main -->

        <?php 
        include_once('footer.php');
        ?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.html">Home</a>

                        <ul>
                            <li><a href="index-1.html">01 - furniture store</a></li>
                            <li><a href="index-2.html">02 - furniture store</a></li>
                            <li><a href="index-3.html">03 - electronic store</a></li>
                            <li><a href="index-4.html">04 - electronic store</a></li>
                            <li><a href="index-5.html">05 - fashion store</a></li>
                            <li><a href="index-6.html">06 - fashion store</a></li>
                            <li><a href="index-7.html">07 - fashion store</a></li>
                            <li><a href="index-8.html">08 - fashion store</a></li>
                            <li><a href="index-9.html">09 - fashion store</a></li>
                            <li><a href="index-10.html">10 - shoes store</a></li>
                            <li><a href="index-11.html">11 - furniture simple store</a></li>
                            <li><a href="index-12.html">12 - fashion simple store</a></li>
                            <li><a href="index-13.html">13 - market</a></li>
                            <li><a href="index-14.html">14 - market fullwidth</a></li>
                            <li><a href="index-15.html">15 - lookbook 1</a></li>
                            <li><a href="index-16.html">16 - lookbook 2</a></li>
                            <li><a href="index-17.html">17 - fashion store</a></li>
                            <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                            <li><a href="index-19.html">19 - games store</a></li>
                            <li><a href="index-20.html">20 - book store</a></li>
                            <li><a href="index-21.html">21 - sport store</a></li>
                            <li><a href="index-22.html">22 - tools store</a></li>
                            <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                            <li><a href="index-24.html">24 - extreme sport store</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Shop</a>
                        <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Product</a>
                        <ul>
                            <li><a href="product.html">Default</a></li>
                            <li><a href="product-centered.html">Centered</a></li>
                            <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="product-gallery.html">Gallery</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                            <li><a href="product-fullwidth.html">Full Width</a></li>
                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="about.html">About</a>

                                <ul>
                                    <li><a href="about.html">About 01</a></li>
                                    <li><a href="about-2.html">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>

                                <ul>
                                    <li><a href="contact.html">Contact 01</a></li>
                                    <li><a href="contact-2.html">Contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                        <ul>
                            <li><a href="blog.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="#">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Single Post</a>
                                <ul>
                                    <li><a href="single.html">Default with sidebar</a></li>
                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements-list.html">Elements</a>
                        <ul>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-titles.html">Titles</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-product-category.html">Product Category</a></li>
                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-accordions.html">Accordions</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                            <li><a href="elements-cta.html">Call to Action</a></li>
                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

     <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="<?php echo base_url(); ?>template/user/assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="<?php echo base_url(); ?>template/user/assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>


<!-- Mirrored from portotheme.com/html/molla/index-10.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:07:25 GMT -->
</html>