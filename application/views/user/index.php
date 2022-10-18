<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/James Allen/index-1.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 12 Jun 2020 07:12:42 GMT -->
<?php
    include_once('head_file.php');
?>
   <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/cb10f5a52563d159729a.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/ebd0fdbe271916ca6a3a.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/5f08894ad72dbf4e998a.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/c32046c11e4f897d1bb6.css">
   <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/product.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/js/product.js"> -->

<body>
    <div class="page-wrapper">
        <?php
            include_once('header.php');
        ?>
        <!-- End .header -->

        <main class="main">
        <?php 
               include_once('new_slider_view.php');
            ?>
           
            <!-- End .intro-slider-container -->
            <br>
            <div class="brands-border owl-carousel owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":5
                        },
                        "1360": {
                            "items":5
                        }
                    }
                }'>

                <?php
                     $page_data["resultset"]=$this->db->get("tbl_category");
                     $resultsets=$this->db->get("tbl_category");
                ?>
                 <?php
                                    foreach($resultsets->result() as $result_row)
                                    {
                                ?>
                <a href="<?php echo base_url(); ?>user/manage_category_view/<?php echo strtolower($result_row->category_seo_slug); ?>" class="brand">
                    <img src="<?php echo base_url(); ?>files/admin/category/<?php echo $result_row->category_image; ?>" alt="Brand Name">
                </a>
                
                <?php
                                    }
                ?>

                
            </div>
            <!-- End .owl-carousel -->

            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

            <div class="banner-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="banner banner-large banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="https://banner.caratlane.com/live-images/1104af58839e4daa919cec6371667a8b.jpg" alt="Banner">
                                </a>

                                
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-5 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="banner banner-large banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="https://banner.caratlane.com/live-images/61be855763284ff39aa380710aded4b6.jpg" alt="Banner">
                                </a>

                                
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-5 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="banner banner-large banner-overlay banner-overlay-light">
                                <a href="#">    
                                    <img src="https://banner.caratlane.com/live-images/49cd474d5b63483ab830fc39e2f1760f.jpg" alt="Banner">
                                </a>

                                
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-5 -->

                        
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banner-group -->
            <div style="position:relative;margin-bottom:105px" class="wideContent">
        
    <div style="display:flex;justify-content:space-between;position:relative" class="featured-bar--Qrn5i"><a target="_blank" rel="nofollow" href="https://www.forbes.com/sites/rachellebergstein/2017/02/10/valentines-day-survey-shows-that-when-it-comes-to-engagements-millennials-embrace-tradition/#58478af45d7e" class="featured-option--wLn5K"><img width="100%" height="100%" alt="featured in Forbes" title="featured in Forbes" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/Forbes_Grey.svg"></a><a target="_blank" rel="nofollow" href="https://www.facebook.com/watch/?v=2028201153987423" class="featured-option--wLn5K"><img width="100%" height="100%" alt="featured in BuzzFeed" title="featured in BuzzFeed" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/BuzzFeed_Grey.svg"></a><a target="_blank" rel="nofollow" href="https://www.theknot.com/content/how-much-to-spend-on-engagement-ring" class="featured-option--wLn5K"><img width="100%" height="100%" alt="featured in TheKnot" title="featured in TheKnot" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/TheKnot_Grey.svg"></a><a target="_blank" rel="nofollow" href="https://www.usmagazine.com/stylish/pictures/best-celebrity-engagement-rings-of-2020-details/" class="featured-option--wLn5K"><img width="100%" height="100%" alt="featured in UsWeekly" title="featured in UsWeekly" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/UsWeekly_Grey.svg"></a><a target="_blank" rel="nofollow" href="https://www.elitedaily.com/p/10-at-home-proposal-stories-that-show-home-is-where-the-heart-is-22685800" class="featured-option--wLn5K"><img width="100%" height="100%" alt="featured in EliteDaily" title="featured in EliteDaily" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/EliteDaily_Grey.svg"></a><a target="_blank" rel="nofollow" href="https://www.elle.com/culture/celebrities/a33283782/details-nicola-peltz-engagement-ring/" class="featured-option--wLn5K"><img width="100%" height="100%" alt="featured in Elle" title="featured in Elle" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/Elle_Grey.svg"></a><a target="_blank" rel="nofollow" href="https://www.businessinsider.com/engagement-rings-instagram-changing-the-way-we-buy-2020-2" class="featured-option--wLn5K"><img width="100%" height="100%" alt="featured in BusinessInsider" title="featured in BusinessInsider" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/BusinessInsider_Grey.svg"></a><a target="_blank" rel="nofollow" href="" class="featured-option--wLn5K unclickable--HWR3e"><img width="100%" height="100%" alt="featured in NewsWeek" title="featured in NewsWeek" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/NewsWeek_Grey.svg"></a><a target="_blank" rel="nofollow" href="http://www.gq.com/story/buying-an-engagement-ring-online" class="featured-option--wLn5K"><img width="100%" height="100%" alt="featured in GQ" title="featured in GQ" src="https://ion.r2net.com/images/amazingHomepage/FeaturedBar/NewGreyIcons/GQ_Grey.svg"></a></div>
         <div class="justify-align events-align--k72EW" style="position:relative;z-index:3;font-family:Nunito Sans">
            <div>
               <div class="abs-scale--tpFKj">
                  <div class="abs--TOY7l">
                     <div class="line--fRUUD"></div>
                     <div data-qa="homePage_weddingRingsSplashBannerText" class="line-text--EKsmK">wedding &amp;
                        <br>anniversary
                     </div>
                  </div>
                  <div class="abs-img-box--jYk7o"><a data-ajax-mode="disabled" href="/wedding-rings/"><img src="https://ion.r2net.com/images/amazingHomepage/Wedding_Anniversary2.jpg" alt="Wedding and Anniversary Rings"></a></div>
               </div>
            </div>
            <div>
               <div class="abs-scale--tpFKj">
                  <div class="abs--TOY7l">
                     <div class="line--fRUUD"></div>
                     <div data-qa="homePage_fineJewelrySplashBannerText" class="line-text--EKsmK">fine<br>jewelry</div>
                  </div>
                  <div class="abs-img-box--jYk7o"><a data-ajax-mode="disabled" href="/fine-jewelry/"><img src="https://ion.r2net.com/images/amazingHomepage/box-c.jpg?v=4" alt="Fine Jewelry"></a></div>
               </div>
            </div>
            <div>
               <div class="abs-scale--tpFKj">
                  <div class="abs--TOY7l">
                     <div class="line--fRUUD"></div>
                     <div data-qa="homePage_designerCollectionBannerText" class="line-text--EKsmK">designer<br>collections</div>
                  </div>
                  <div class="abs-img-box--jYk7o"><a data-ajax-mode="disabled" href="/engagement-rings/unique/"><img src="https://ion.r2net.com/images/amazingHomepage/Eternity.jpg?v=11" alt="Unique Engagement Rings"></a></div>
               </div>
            </div>
         </div>
  
</div>

            <div class="mb-3"></div><!-- End .mb-6 -->

            <div class="container">
                <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Best Sellers</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab" aria-controls="products-sale-tab" aria-selected="false">Necklaces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab" aria-controls="products-top-tab" aria-selected="false">Best Sellers</a>
                    </li>-->
                </ul>
            </div><!-- End .container -->

            <div class="container-fluid">
                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
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
                                        "items":4
                                    },
                                    "1600": {
                                        "items":4,
                                        "nav": true
                                    }
                                }
                            }'>
                            <?php 
                                   
                                    // $top_selling_query="SELECT tp . * , tod.product_id, sum( tod.product_qty )
                                    // FROM tbl_order_details tod
                                    // INNER JOIN tbl_product_new tp ON tod.product_id = tp.product_id
                                    // GROUP BY tod.product_id
                                    // ORDER BY sum( tod.product_qty ) DESC limit 8 ";
                                    // $product_res=$this->db->query($top_selling_query);

                                    $page_data["product_res"]=$this->db->get("tbl_product_new");
                                    $this->db->order_by('product_id','desc');
                                    // $product_res=$this->db->get_where('tbl_product_new',array('tbl_product_new.product_id'=>$product_row[0]->product_id));

                                    $product_res=$this->db->get_where("tbl_product_new");

                                    foreach($product_res->result() as $product_row)
                                    {
                                        ?>
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="<?php echo base_url(); ?>user/manage_product_detail/<?php echo strtolower($product_row->product_seo_slug); ?>">
                                        <img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $product_row->product_image; ?>" alt="Product image" class="product-image">
                                        
                                        <?php 
                                            $product_additional_image_res=$this->db->get_where('tbl_product_additional_image',array('product_id'=>$product_row->product_id));
                                            foreach($product_additional_image_res->result() as 
                                                $product_additional_image_row)
                                            {
                                                ?>
                                                <img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $product_additional_image_row->product_additional_image; ?>" class="product-image-hover">
                                                <?php
                                            }
                                                ?>
                                        
                                    </a>
                                
                                    <div class="product-action-vertical">
                                        <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row->product_id; ?>" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html"><?php echo $product_row->product_name;?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    <i class="icon-rupee"></i><?php echo $product_row->product_selling_price;?>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="<?php echo base_url(); ?>user/add_to_cart/<?php echo $product_row->product_id; ?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div>
                            <?php
                                    }
                             ?>
                            <!-- End .product -->

                        </div>

                        <!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
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
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-5-1.jpg" alt="Product image" class="product-image">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $675,00
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #74543e;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-6-1.jpg" alt="Product image" class="product-image">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Elephant Armchair</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $457,00
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-1-1.jpg" alt="Product image" class="product-image">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $251,00
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
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
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-2-1.jpg" alt="Product image" class="product-image">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Octo 4240</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $746,00
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #1f1e18;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-3-1.jpg" alt="Product image" class="product-image">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $970,00
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="product.html">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-4-1.jpg" alt="Product image" class="product-image">
                                        <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$337,00</span>
                                        <span class="old-price">Was $449,00</span>
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #878883;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div>
            <!-- End .container-fluid -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="bg-light deal-container pt-5 pb-3 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="deal">
                                <div class="deal-content">
                                    <h4>Limited Quantities</h4>
                                    <h2>Deal of the Day</h2>

                                    <h3 class="product-title"><a href="product.html">Necklace</a></h3><!-- End .product-title -->

                                    <div class="product-price">
                                        <span class="new-price">$149.00</span>
                                        <span class="old-price">Was $240.00</span>
                                    </div><!-- End .product-price -->

                                    <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->

                                    <a href="product.html" class="btn btn-primary">
                                        <span>Shop Now</span><i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .deal-content -->
                                <div class="deal-image" style="width:500px">
                                    <a href="product.html">
                                        <img src="https://www.sawansukha.com/vimursik/2021/07/IMG_0038.jpg" alt="image">
                                    </a>
                                </div><!-- End .deal-image -->
                            </div><!-- End .deal -->
                        </div><!-- End .col-lg-9 -->

                        <div class="col-lg-3">
                            <div class="banner banner-overlay banner-overlay-light text-center d-none d-lg-block">
                                <a href="#">
                                    <img src="https://assets.ajio.com/medias/sys_master/root/20210917/XE3f/6143ef10f997ddce89ca9b40/-473Wx593H-462968193-silver-MODEL.jpg" alt="Banner" style="padding-top: 150px;background-color:white" >
                                </a>

                                <div class="banner-content banner-content-top banner-content-center">
                                    <!--
                                        <h4 class="banner-subtitle">The Best Choice</h4>-->
                                        <!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Ear Cuffs</h3><!-- End .banner-title -->
                                    <div class="banner-text text-primary">$49.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Our Range of Products</h2><!-- End .title -->

                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab" aria-controls="top-fur-tab" aria-selected="false">Rings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab" aria-controls="top-decor-tab" aria-selected="false">Necklaces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab" aria-controls="top-light-tab" aria-selected="false">Fine Jewellery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab" aria-controls="top-light-tab" aria-selected="false">Gem Stone</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                        <div class="products">
                            <div class="row justify-content-center">
                            <?php
                                    foreach($resultset->result() as $result_row)
                                    {
                                ?>
                                <div class="col-6 col-md-4 col-lg-3 ">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                        <a href="<?php echo base_url(); ?>user/manage_product_detail/<?php echo strtolower($result_row->product_seo_slug); ?>">
                                                <img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $result_row->product_image; ?>" alt="Product image" class="product-image">
                                                <?php 
                                            $product_additional_image_res=$this->db->get_where('tbl_product_additional_image',array('product_id'=>$result_row->product_id));
                                            foreach($product_additional_image_res->result() as 
                                                $product_additional_image_row)
                                            {
                                                ?>
                                                <img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $product_additional_image_row->product_additional_image; ?>" class="product-image-hover">
                                                <?php
                                            }
                                                ?>
                                            </a>

                                            <div class="product-action-vertical">
                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $result_row->product_id; ?>" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <!--<div class="product-cat">
                                                <a href="#">Lighting</a>
                                            </div>-->
                                            <!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html"><?php echo $result_row->product_name;?></a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                            <i class="icon-rupee"></i><?php echo $result_row->product_selling_price;?>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                        <a href="<?php echo base_url(); ?>user/add_to_cart/<?php echo $result_row->product_id; ?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <?php
                                    } 
                                ?>

                                
                            </div><!-- End .row -->
                        </div>
                        <!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    
                </div>
                <!-- End .tab-content -->
            </div><!-- End .container -->

            <div style="position:relative">
   <div data-good="1" id="newhomepage" data-gtm-title="Homepage1" class="newhomepage--Ve4iz scroll-started--HECgC">
   <div class="meet-bg-container--Va7_i">
   <div class="meet-bg--j36U8">
      <div style="margin:0 auto;position:relative;bottom:29px" class="separator-container--aGiVL">
         <div style="background-color:#f9f3ec" class="separator--fMSd5"></div>
         <div style="background-color:#fff" class="separator--fMSd5"></div>
      </div>
   </div>
   <div class="title-pack--WpNvc">
      <h2 style="margin:8px 0 0;font-family:Nunito Sans">James Allen's best selling</h2>
      <h1 style="margin:0;font-family:Playfair">Engagement Rings</h1>
   </div>
</div>
<div class="Swipperstyle__ECcarouselContainer-sc-1vlktjj-0 hUZqfE ECcarouselContainer undefined">
   <div class="swiper-container swiper-container-initialized swiper-container-horizontal" style="cursor: grab;">
      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1145.09px, 0px, 0px);"><a data-qa="carousel-slide-Solitaire-link" href="/engagement-rings/solitaire/14k-white-gold-2mm-knife-edge-solitaire-engagement-ring-item-7115" data-container="#WidePane" data-gtm-name="best sellers" title="Solitaire" class="swiper-slide swiper-slide-duplicate" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="8"><img style="width:390px" alt="Solitaire ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Solitaire-Engagement-Ring.png" data-qa="carousel-slide-Solitaire"></a><a data-qa="carousel-slide-Pavé-link" href="/engagement-rings/pave/14k-rose-gold-petite-pave-engagement-ring-flush-fit-item-56265" data-container="#WidePane" data-gtm-name="best sellers" title="Pavé" class="swiper-slide swiper-slide-duplicate" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="9"><img style="width:390px" alt="Pavé ring" src="https://ion.r2net.com/images/amazingHomepage/rings/pave-engagement-ring.png" data-qa="carousel-slide-Pavé"></a><a data-qa="carousel-slide-Three-stone-link" href="/engagement-rings/three-stone/14k-white-gold-tapered-baguette-diamond-engagement-ring-item-7101" data-container="#WidePane" data-gtm-name="best sellers" title="Three-stone" class="swiper-slide swiper-slide-duplicate swiper-slide-prev" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="10"><img style="width:390px" alt="Three-stone ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Three-stone-Engagement-Ring.png" data-qa="carousel-slide-Three-stone"></a><a data-qa="carousel-slide-Channel-Set-link" href="/engagement-rings/tension/14k-white-gold-bezel-set-pave-diamond-engagement-ring-item-53294" data-container="#WidePane" data-gtm-name="best sellers" title="Channel Set" class="swiper-slide swiper-slide-active" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="0"><img style="width:390px" alt="Channel Set ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Channel-Set-Engagement-Ring.png" data-qa="carousel-slide-Channel-Set"></a><a data-qa="carousel-slide-Halo-link" href="/engagement-rings/halo/14k-rose-gold-floral-halo-engagement-ring-item-53439" data-container="#WidePane" data-gtm-name="best sellers" title="Halo" class="swiper-slide swiper-slide-next" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="1"><img style="width:390px" alt="Halo ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Halo-Women-Engagement-Ring.png" data-qa="carousel-slide-Halo"></a><a data-qa="carousel-slide-Side-stone-link" href="/engagement-rings/side-stones/14k-white-gold-round-and-marquise-shape-diamond-engagement-ring-item-49489" data-container="#WidePane" data-gtm-name="best sellers" title="Side-stone" class="swiper-slide" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="2"><img style="width:390px" alt="Side-stone ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Side-stone-Engagement-Ring.png" data-qa="carousel-slide-Side-stone"></a><a data-qa="carousel-slide-Eternity-link" href="/wedding-rings/womens-eternity/14k-yellow-gold-ladies-050ctw-angled-common-prong-diamond-eternity-ring-item-56291" data-container="#WidePane" data-gtm-name="best sellers" title="Eternity" class="swiper-slide" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="3"><img style="width:390px" alt="Eternity ring" src="https://ion.r2net.com/images/amazingHomepage/rings/eternity-ring.png" data-qa="carousel-slide-Eternity"></a><a data-qa="carousel-slide-Halo-link" href="/engagement-rings/halo/14k-white-gold-round-split-band-diamond-halo-engagement-ring-item-49498" data-container="#WidePane" data-gtm-name="best sellers" title="Halo" class="swiper-slide" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="4"><img style="width:390px" alt="Halo ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Halo-Engagement-Ring.png" data-qa="carousel-slide-Halo"></a><a data-qa="carousel-slide-Solitaire-link" href="/engagement-rings/solitaire/14k-white-gold-rope-solitaire-engagement-ring-item-52624" data-container="#WidePane" data-gtm-name="best sellers" title="Solitaire" class="swiper-slide" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="5"><img style="width:390px" alt="Solitaire ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Solitaire-Classic-Engagement-Ring.png" data-qa="carousel-slide-Solitaire"></a><a data-qa="carousel-slide-Stackable-link" href="/wedding-rings/matching-bands/14k-white-gold-round-brilliant-diamond-and-marquise-sapphire-wedding-ring-item-49417" data-container="#WidePane" data-gtm-name="best sellers" title="Stackable" class="swiper-slide" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="6"><img style="width:390px" alt="Stackable ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Stackable-Ring.png" data-qa="carousel-slide-Stackable"></a><a data-qa="carousel-slide-Side-stone-link" href="/engagement-rings/side-stones/14k-yellow-gold-blossoming-vine-engagement-ring-item-53370" data-container="#WidePane" data-gtm-name="best sellers" title="Side-stone" class="swiper-slide" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="7"><img style="width:390px" alt="Side-stone ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Side-stone-Diamond-Engagement-Ring.png" data-qa="carousel-slide-Side-stone"></a><a data-qa="carousel-slide-Solitaire-link" href="/engagement-rings/solitaire/14k-white-gold-2mm-knife-edge-solitaire-engagement-ring-item-7115" data-container="#WidePane" data-gtm-name="best sellers" title="Solitaire" class="swiper-slide" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="8"><img style="width:390px" alt="Solitaire ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Solitaire-Engagement-Ring.png" data-qa="carousel-slide-Solitaire"></a><a data-qa="carousel-slide-Pavé-link" href="/engagement-rings/pave/14k-rose-gold-petite-pave-engagement-ring-flush-fit-item-56265" data-container="#WidePane" data-gtm-name="best sellers" title="Pavé" class="swiper-slide" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="9"><img style="width:390px" alt="Pavé ring" src="https://ion.r2net.com/images/amazingHomepage/rings/pave-engagement-ring.png" data-qa="carousel-slide-Pavé"></a><a data-qa="carousel-slide-Three-stone-link" href="/engagement-rings/three-stone/14k-white-gold-tapered-baguette-diamond-engagement-ring-item-7101" data-container="#WidePane" data-gtm-name="best sellers" title="Three-stone" class="swiper-slide swiper-slide-duplicate-prev" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="10"><img style="width:390px" alt="Three-stone ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Three-stone-Engagement-Ring.png" data-qa="carousel-slide-Three-stone"></a><a data-qa="carousel-slide-Channel-Set-link" href="/engagement-rings/tension/14k-white-gold-bezel-set-pave-diamond-engagement-ring-item-53294" data-container="#WidePane" data-gtm-name="best sellers" title="Channel Set" class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="0"><img style="width:390px" alt="Channel Set ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Channel-Set-Engagement-Ring.png" data-qa="carousel-slide-Channel-Set"></a><a data-qa="carousel-slide-Halo-link" href="/engagement-rings/halo/14k-rose-gold-floral-halo-engagement-ring-item-53439" data-container="#WidePane" data-gtm-name="best sellers" title="Halo" class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="1"><img style="width:390px" alt="Halo ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Halo-Women-Engagement-Ring.png" data-qa="carousel-slide-Halo"></a><a data-qa="carousel-slide-Side-stone-link" href="/engagement-rings/side-stones/14k-white-gold-round-and-marquise-shape-diamond-engagement-ring-item-49489" data-container="#WidePane" data-gtm-name="best sellers" title="Side-stone" class="swiper-slide swiper-slide-duplicate" style="width: 458.312px; margin-right: 30px;" data-swiper-slide-index="2"><img style="width:390px" alt="Side-stone ring" src="https://ion.r2net.com/images/amazingHomepage/rings/Side-stone-Engagement-Ring.png" data-qa="carousel-slide-Side-stone"></a></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
   </div>
   <div class="Arrowsstyle__Main-sc-rdoawg-0 fDCINA">
      <div class="container" styles="[object Object]">
         <div role="presentation" data-qa="rightArrow-carousel" class="arrowRight"></div>
         <div class="textContainer">
            <h3 class="headerText">
               Channel Set<!-- --> <!-- -->ring
            </h3>
            <div class="subText">Bezel Set Pavé Engagement Ring</div>
         </div>
         <div role="presentation" data-qa="leftArrow-carousel" class="arrowLeft"></div>
      </div>
   </div>
</div>  

   
   <div class="bottom-section--Vt1ku" style="background-position: right 70px top 100px, 0px 0px;">
   <div class="bottom-left-bg-container--WvHb3">
      <div class="sparkle-bg--Ze3o8" style="top: 177.02px;"></div>
      <div class="bottom-left-bg--eit6q"></div>
   </div>
   <div data-gtm-name="diamond inspection" class="wideContent">
      <div class="table-align">
         <div style="width:50%"></div>
         <div class="diamond-inspection-container--IcPu0">
            <div class="diamond-inspection--zk5J3">
               <div class="title-pack--WpNvc">
                  <div>REAL-TIME INTERACTIVE</div>
                  <div>DIAMOND INSPECTION</div>
                  <div class="sub-title--_bLmY">Take a closer look at your favorite diamonds using our Real-Time Diamond Inspection service; a one-on-one consultation with a non-commissioned certified gemologist. Share your screen and get expert guidance as you <b>explore diamonds in 360° HD</b> with up to 40x magnification. Mark points of interest on the screen while chatting with your diamond expert in real time, and review everything from the specs to the grading certificate together.</div>
               </div>
               <div style="font-size:17px;font-family:Nunito Sans;color:rgb(27, 27, 27)">
                  <div style="font-weight:bold" class="pink-bg--hZDky"><a data-ajax-mode="disabled" href="/diamond-consultation/">START YOUR DIAMOND INSPECTION NOW</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


   <div style="background-color:#fbf8f3;margin-bottom:98px;background-position:top -38px left;position:relative;font-family:Nunito Sans;color:rgb(27, 27, 27)">
   <div style="padding:50px;width:500px;margin:0px auto" class="title-pack--WpNvc center--DlBad">
      <div></div>
      <div>the crowning jewels</div>
      <div class="sub-title--_bLmY">Our diamond and gemstone fine jewelry collection offers hand-crafted pieces of unforgettable luxury that are perfect for any occasion.</div>
   </div>
   <div style="position:relative">
      <!-- <div class="text-bg--GKvxi text-bg-1--fXl3n">eternity rings</div>
      <div class="text-bg--GKvxi text-bg-2--I2VwD">gemstone collection</div>
      <div class="text-bg--GKvxi text-bg-3--sF8Ff">men's wedding</div>
      <div class="text-bg--GKvxi text-bg-4--eYsHt">diamond studs</div> -->
      <div style="text-align:center;padding:211px 0 0px 0" data-gtm-name="floating banners" class="wideContent floating-banners--YsiQp">
         <div class="table-align">
            <div class="float-area--aOHFo">
               <a data-ajax-mode="disabled" href="/wedding-rings/womens-eternity/">
                  <span style="margin-bottom: 100px; bottom: 192px;" class="float-white-box--XidVC">
                     <h3 class="float-header--RPk6d">eternity rings</h3>
                     <div class="float-content--wTe8A">The ultimate symbol of lifelong commitment, eternity rings make for an ideal wedding or anniversary ring, or can be worn alongside your engagement ring.</div>
                     <div class="float-bottom--ukk67">
                        <div class="pink-bg--hZDky">explore</div>
                     </div>
                  </span>
               </a>
               <div class="pink-box--tsz67 pink-box1--H6oKV" style="bottom: 219px; background-position-y: -23px;"></div>
            </div>
            <div></div>
         </div>
         <div style="margin-top:-380px" class="table-align images-align--q9iQe">
            <div>
               <div style="margin-top:400px" class="float-area--aOHFo">
                  <a data-ajax-mode="disabled" href="/wedding-rings/mens-classic/">
                     <span style="margin-bottom: 200px; bottom: 192px;" class="float-white-box--XidVC">
                        <h3 class="float-header--RPk6d">Men's Wedding Rings</h3>
                        <div class="float-content--wTe8A">Match his style with the perfect wedding ring, be it traditional classic, rugged carved, elegant diamond, or funky alternative metal.</div>
                        <div class="float-bottom--ukk67">
                           <div class="pink-bg--hZDky">discover</div>
                        </div>
                     </span>
                  </a>
                  <div class="pink-box--tsz67 pink-box3--j2BAj" style="bottom: 219px; background-position-y: 37px;"></div>
               </div>
            </div>
            <div>
               <div style="margin-top:250px" class="float-area--aOHFo">
                  <div class="pink-box--tsz67 pink-box2--N5pAZ" style="bottom: 219px; background-position-y: 77px;"></div>
                  <a data-ajax-mode="disabled" href="/gemstones/blue-sapphire/">
                     <span style="margin-bottom: 100px; bottom: 192px;" class="float-white-box--XidVC">
                        <h3 class="float-header--RPk6d">gemstone collection</h3>
                        <div class="float-content--wTe8A">Kissed by the colors of nature, sapphire, ruby, and emerald jewelry makes for a stunningly exotic look.</div>
                        <div class="float-bottom--ukk67">
                           <div class="pink-bg--hZDky">Browse</div>
                        </div>
                     </span>
                  </a>
               </div>
               <div>
                  <div style="margin-top:400px" class="float-area--aOHFo">
                     <a data-ajax-mode="disabled" href="/earrings/diamond-stud-earrings/">
                        <span style="margin-bottom: 50px; bottom: 192px;" class="float-white-box--XidVC">
                           <h3 class="float-header--RPk6d">diamond studs</h3>
                           <div class="float-content--wTe8A">The perfect gift for any occasion, these handcrafted preset diamond studs make a bold yet elegant statement.</div>
                           <div class="float-bottom--ukk67">
                              <div class="pink-bg--hZDky">browse</div>
                           </div>
                        </span>
                     </a>
                     <div class="pink-box--tsz67 pink-box4--ET3SC" style="bottom: 219px; background-position-y: 77px;"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   
        
      <div style="margin-bottom:98px" class="title-pack--WpNvc center--DlBad">
         <div>your personal</div>
         <div>diamond concierge awaits...</div>
      </div>
 
      <div style="margin-bottom:105px" class="wideContent"><div class="justify-align as-container--gu7ZI"><div><div style="padding-right:33px" class="as-content--GmgN2 as-left--BJAzY"><div class="img-bg--lioNA Image_Washington--_Pwf_"></div><div style="border-left:none" class="as-text--iRX1y"><div style="text-align:right"><div class="as-text-1--P5Yla">EXPERIENCE JAMES ALLEN</div><div class="as-text-2--Yl803">IN WASHINGTON, D.C.</div><div style="font-size:14px;margin-bottom:30px">Join us in Georgetown for an experience like no other! Get to know diamonds and jewels using the latest tech, and try on a large selection of products.<br><br><span style="font-weight:bold !important;font-size:16px">Open: Monday – Saturday 11 a.m. – 7 p.m.<br>Sunday 12 p.m. – 7 p.m.</span></div></div></div></div><div style="padding-right:33px;margin-top:20px" class="as-content--GmgN2 as-left--BJAzY"><div class="img-bg--lioNA Costumer_Brake--a5Wka"></div><div style="border-left:none" class="as-text--iRX1y"><div style="text-align:right"><div class="as-text-1--P5Yla">VISIT OUR</div><div class="as-text-2--Yl803">NYC SHOWROOM</div><div style="font-size:14px;margin-bottom:30px">Stop by our ‘sanctuary of sparkle’ on Fifth Avenue to view diamond rings and fine jewelry in 3D, and try on actual products - <b class="by-b--qVB5Q">by appointment only</b>.</div><div style="font-size:16px;font-weight:bold;white-space:nowrap" class="pink-bg--hZDky"><a data-ajax-mode="disabled" href="locations/">SCHEDULE APPOINTMENT</a></div></div></div></div></div> <div style="padding-left:33px" class="as-content--GmgN2 as-right--VfS9D"><div style="border-right:none" class="as-text--iRX1y"><div><div class="as-text-1--P5Yla">WORLD-CLASS</div><div class="as-text-2--Yl803">CUSTOMER SERVICE</div><div style="font-size:14px;margin-bottom:30px">James Allen’s team of non-commissioned certified gemologists is available 24/7 via live chat, phone, and email to help you choose the product that’s right for you.</div><div style="font-size:16px;font-weight:bold" class="pink-bg--hZDky"><a data-ajax-mode="disabled" href="guarantee/customer-service/">CONTACT US</a></div></div></div><div class="img-bg--lioNA"></div></div> </div></div>
      <div class="meet-bg-container--Va7_i">
   <div class="meet-bg--j36U8">
      <div style="margin:0 auto;position:relative;bottom:29px" class="separator-container--aGiVL">
         <div style="background-color:#f9f3ec" class="separator--fMSd5"></div>
         <div style="background-color:#fff" class="separator--fMSd5"></div>
      </div>
   </div>
   <div class="title-pack--WpNvc">
      <div></div>
      <div>Pics or It Didn’t Happen!</div>
      <div class="sub-title--_bLmY">View our customers’ engagement moments from around the world</div>
   </div>
</div>
      <div class="wideContent"><div data-gtm-name="engagement moments" class="moments--Wemvc"><div><a><img src="https://ion.r2net.com/images/amazingHomepage/1_engage.jpg" alt="A couple on a hot balloon ride" title="A couple on a hot balloon ride"></a></div><div><a><img src="https://ion.r2net.com/images/amazingHomepage/2_engage.jpg" alt="A couple hugging in a field of flowers" title="A couple hugging in a field of flowers"></a></div><div><a><img src="https://ion.r2net.com/images/amazingHomepage/3_engage.jpg" alt="A couple hugging while showing their engagement ring" title="A couple hugging while showing their engagement ring"></a></div><div><a><img src="https://ion.r2net.com/images/amazingHomepage/4_engage.jpg" alt="A guy hugging his girlfriend while holding the ring box behind her back" title="A guy hugging his girlfriend while holding the ring box behind her back"></a></div><div><a><img src="https://ion.r2net.com/images/amazingHomepage/5_engage.jpg" alt="A newly engaged couple, she has a surprised face" title="A newly engaged couple, she has a surprised face"></a></div><div><a><img src="https://ion.r2net.com/images/amazingHomepage/6_engage.jpg" alt="A couple looking at each other during a walk in the park" title="A couple looking at each other during a walk in the park"></a></div><div class="collage-middle--xI1TF"><div><a><img src="https://ion.r2net.com/images/amazingHomepage/7_engage.jpg" alt="An couple kissing after their proposal on a boat" title="An couple kissing after their proposal on a boat"></a></div><div><a><div style="height:256px" class="lazyload-placeholder"></div></a></div></div><div class="collage-middle--xI1TF"><div><a><img src="https://ion.r2net.com/images/amazingHomepage/9_engage.jpg" alt="A guy hugging his partner from behind" title="A guy hugging his partner from behind"></a></div><div><a><div style="height:256px" class="lazyload-placeholder"></div></a></div></div><div class="collage-double--U_C25"><a><img src="https://ion.r2net.com/images/amazingHomepage/11_engage.jpg" alt="A newly engaged couple kissing, he’s lifting her in the air" title="A newly engaged couple kissing, he’s lifting her in the air"></a></div></div><div data-gtm-name="engagement moments" style="width:225px;margin:42px auto;text-align:center;font-size:18px;display:block" class="start-button--E9kWV"><a style="padding:15px 27px;font-family:Nunito Sans" data-ajax-mode="disabled" href="/engagement-moments/">READ THE STORIES</a></div></div>
   </div>
</div>
               
        </main><!-- End .main -->
        

        <?php
             include_once('footer.php');
        ?>
        
        <!-- End .footer -->

    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search product ..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">ENGAGEMENT RINGS</a>

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
                                <a href="category.html">WEDDING RINGS</a>
                                <ul>
                                    <li><a href="category-list.html">Link 1</a></li>
                                    <li><a href="category-2cols.html">Link 2</a></li>
                                    <li><a href="category.html">Link 3</a></li>
                                    <li><a href="category-4cols.html">Link 4 </a></li>
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
                                <a href="product.html" class="sf-with-ul">DIAMONDS</a>
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
                                <a href="#">FINE JEWELLERY</a>
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
                                <a href="blog.html">GEMSTONE</a>

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
                                <a href="elements-list.html">EDUCATION</a>
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
                            <li>
                                <a href="elements-list.html">FAQ</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                            <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

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
    
 <?php
        include_once('subscribe_popup.php')
 ?>
       
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
    </div>
    

    
    <?php
        include_once('footer_file.php');
    ?>
    
</body>


<!-- Mirrored from portotheme.com/html/James Allen/index-1.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 12 Jun 2020 07:16:29 GMT -->
</html>

