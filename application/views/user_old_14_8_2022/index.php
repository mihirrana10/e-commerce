
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/molla/index-10.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:06:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Best Uniform Sarees Wholesaler and Manufacturer | Vimla Prints</title>
    <meta name="keywords" content="vimla prints,vimla sarees,vimla prints pvt ltd,vimla malgudi silk,novus,saree for teachers,uniform sarees,printed sarees wholesale in surat,mysore silk saree,crape sarees,mysore silk sari,art silk sarees,silk saree manufacturer in surat">
    <meta name="description" content="Shop Online Vimla Prints Uniform sarees,wholesaler-surat,silk saree manufacturer,
School Uniform Saree,Hotel Uniforms,Hospital Uniform,Corporate Uniforms. ">
    <meta name="author" content="p-themes">
    <?php 
    include_once('head_file.php');
    ?>

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Store",
      "name": "Vimla Prints",
      "description": "Shop Online Vimla Prints Uniform sarees,wholesaler-surat,silk saree manufacturer, School Uniform Saree,Hotel Uniforms,Hospital Uniform,Corporate Uniforms. ",
      "openingHours": "Mo-Sa 08:00-20:00",
      "telephone": "+91 97276 80689",
      "address":
      {
      "@type": "PostalAddress",
      "streetAddress": "O-1266, Vimla Prints Pvt. Ltd., Ground Floor,, Surat Textile Market, Ring Road, Surat, Gujarat 395002",
      "addressLocality": "Surat",
      "addressRegion": "Gujarat",
      "addressCountry": "India"
      },
      "department":
      {
        "@type": "ClothingStore",
        "name": "Vimla Prints",
        "description": "Shop Online Vimla Prints Uniform sarees,wholesaler-surat,silk saree manufacturer, School Uniform Saree,Hotel Uniforms,Hospital Uniform,Corporate Uniforms. ",
        "telephone": "+91 97276 80689"
        }
    }
    </script>
    <!--<link rel="stylesheet" href="assets/css/skins/skin-demo-10.css">-->
    <!--<link rel="stylesheet" href="assets/css/skins/skin-demo-3.css">-->
    <!--<link rel="stylesheet" href="assets/css/skins/skin-demo-5.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/plugins/owl-carousel/owl.carousel.css">
    
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
            <?php 
                include_once('slider_view.php');
            ?>
            
                <div class="container">
                    <?php
                    //include_once('blocks/home_two_big.php');
                    ?>

                    <?php 
                    $this->db->order_by('block_order','asc');
                    $block_top_res=$this->db->get_where('tbl_block',array('block_group'=>'Place One','block_status'=>'Active'));
                    foreach($block_top_res->result() as $block_top_row)
                    {
                        echo $block_top_row->block_desc;
                    }
                    ?>

                    <?php
                    //include_once('blocks/home_three_med.php');
                    ?>

                    
                </div><!-- End .container-fluid -->

                <?php 
                include_once('blocks/home_ship_icons.php')
                ?>


               

            <div class="mb-6"></div><!-- End .mb-6 -->

            
            <!-- CATEGORY PRODUCT LIST -->
            <div class="container">
                    <div class="heading heading-center mb-3">
                        <h2 class="title-lg mb-2">Top Selling Products</h2><!-- End .title-lg text-center -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="products mb-3">

                                <div class="row justify-content-center">

                                    <?php 
                                    //$this->db->order_by('product_id','desc');
                                    //$this->db->limit('16');
                                    //$product_res=$this->db->get_where('tbl_product');
                                    /*
                                    $top_selling_query="select product_id, sum(product_qty) from tbl_order_details group by product_id order by sum(product_qty) desc";
                                    */

                                    /*$top_selling_query="select * from tbl_product_new where product_id In (select product_id from tbl_order_details group by product_id order by sum(product_qty) desc)";
                                    */
                                    $top_selling_query="SELECT tp . * , tod.product_id, sum( tod.product_qty )
                                    FROM tbl_order_details tod
                                    INNER JOIN tbl_product_new tp ON tod.product_id = tp.product_id
                                    GROUP BY tod.product_id
                                    ORDER BY sum( tod.product_qty ) DESC limit 8 ";
                                    $product_res=$this->db->query($top_selling_query);
                                    foreach($product_res->result() as $product_row)
                                    {
                                        ?>
                                        <div class="col-6 col-md-3 col-lg-3">
                                            <div class="product product-7 text-center">
                                                <figure class="product-media">
                                                    <?php 
                                                    if($product_row->product_quantity==0)
                                                    {
                                                        ?>
                                                        <span class="product-label label-primary">Out of Stock</span>
                                                        <?php
                                                    }
                                                    ?>
                                                    <!--<span class="product-label label-new">New</span>-->
                                                    <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_id; ?>">-->
                                                    <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>/<?php echo $product_row->product_id; ?>">-->
                                                    <a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>">
                                                        <img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $product_row->product_image; ?>" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <!--<a href="//send?text=Text to send withe message: http://www.yoursite.com" class="btn-product-icon icon-whatsapp btn-expandable"><span>Share on Whatsapp</span></a>-->
                                                        <a href="https://web.whatsapp.com/send?text=Please check this product: <?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>" data-action="share/whatsapp/share" target="_blank" class="btn-product-icon icon-whatsapp btn-expandable"><span>Share on Whatsapp</span></a>
                                                        
                                                        <?php 
                                                        //in_array(needle, haystack)
                                                        if(isset($wishlist_array) && in_array($product_row->product_id, $wishlist_array))
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row->product_id; ?>" class="btn-product-icon selected-wishlist "></a>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row->product_id; ?>" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                            <?php
                                                        }
                                                        ?>
                                                        


                                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                        <!--<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>-->
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <?php 
                                                        if($product_row->product_quantity==0)
                                                        {
                                                            ?>
                                                            <!--<span class="product-label label-primary">Out of Stock</span>-->
                                                            <a href="<?php echo base_url(); ?>user/notify_me/<?php echo $product_row->product_id; ?>" class="btn-product"><span>Notify Me</span></a>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/add_to_cart/<?php echo $product_row->product_id; ?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                        <!--<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>-->

                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    
                                                    <!--
                                                    <div class="product-cat">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    -->

                                                    <!-- End .product-cat -->
                                                    <h3 class="product-title">
                                                        <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_id; ?>">-->
                                                        <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>/<?php echo $product_row->product_id; ?>">-->
                                                        <a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>">
                                                            <?php echo $product_row->product_name; ?>
                                                        </a>
                                                    </h3><!-- End .product-title -->
                                                    
                                                    <!--<div class="product-price">
                                                        $60.00
                                                    </div>-->
                                                    <div class="product-price">
                                                        <!--Rs. --><i class="icon-rupee"></i> <?php echo $product_row->product_selling_price; ?>
                                                    </div>
                                                    
                                                    <!-- End .product-price -->
                                                    <!--
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 20%;"></div>
                                                        </div>
                                                        <span class="ratings-text">( 2 Reviews )</span>
                                                    </div>
                                                    -->

                                                    <!--
                                                    <div class="product-nav product-nav-thumbs">
                                                        <a href="#" class="active">
                                                            <img src="<?php echo base_url(); ?>template/user/assets/images/products/product-4-thumb.jpg" alt="product desc">
                                                        </a>
                                                        <a href="#">
                                                            <img src="<?php echo base_url(); ?>template/user/assets/images/products/product-4-2-thumb.jpg" alt="product desc">
                                                        </a>

                                                        <a href="#">
                                                            <img src="<?php echo base_url(); ?>template/user/assets/images/products/product-4-3-thumb.jpg" alt="product desc">
                                                        </a>
                                                    </div>-->
                                                    <!-- End .product-nav -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div>
                                        <?php
                                    }
                                    ?>


                                    

                                    
                                </div><!-- End .row -->
                            </div><!-- End .products -->

                            
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
            </div><!-- End .container -->
            <!-- CATEGORY PRODUCT LIST END -->

           

            <?php 
            //include_once('blocks/home_three_med_bottom.php');
            ?>
            <div class="container">
                <?php 
                    $this->db->order_by('block_order','asc');
                    $block_top_res=$this->db->get_where('tbl_block',array('block_group'=>'Place Two','block_status'=>'Active'));
                    foreach($block_top_res->result() as $block_top_row)
                    {
                        echo $block_top_row->block_desc;
                    }
                ?>
            </div>
            <div class="mb-4"></div><!-- End .mb-4 -->

           
            


            <!-- CATEGORY PRODUCT LIST -->
            <div class="container">
                    <div class="heading heading-center mb-3">
                        <h2 class="title-lg mb-2">New Products</h2><!-- End .title-lg text-center -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="products mb-3">

                                <div class="row justify-content-center">

                                    <?php 
                                    $this->db->order_by('product_id','desc');
                                    $this->db->limit('16');
                                    $product_res=$this->db->get_where('tbl_product_new',array('product_show_new_arrival'=>'Yes'));
                                    foreach($product_res->result() as $product_row)
                                    {
                                        ?>
                                        <div class="col-6 col-md-3 col-lg-3">
                                            <div class="product product-7 text-center">
                                                <figure class="product-media">
                                                    <?php 
                                                    if($product_row->product_quantity==0)
                                                    {
                                                        ?>
                                                        <span class="product-label label-primary">Out of Stock</span>
                                                        <?php
                                                    }
                                                    ?>
                                                    <!--<span class="product-label label-new">New</span>-->
                                                    <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_id; ?>">-->
                                                    <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>/<?php echo $product_row->product_id; ?>">-->
                                                    <a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>">
                                                        <img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $product_row->product_image; ?>" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <!--<a href="//send?text=Text to send withe message: http://www.yoursite.com" class="btn-product-icon icon-whatsapp btn-expandable"><span>Share on Whatsapp</span></a>-->
                                                        <a href="https://web.whatsapp.com/send?text=Please check this product: <?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>" data-action="share/whatsapp/share" target="_blank" class="btn-product-icon icon-whatsapp btn-expandable"><span>Share on Whatsapp</span></a>

                                                        <!--<a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row->product_id; ?>" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>-->

                                                        <?php 
                                                        //in_array(needle, haystack)
                                                        if(isset($wishlist_array) && in_array($product_row->product_id, $wishlist_array))
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row->product_id; ?>" class="btn-product-icon selected-wishlist "></a>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row->product_id; ?>" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                            <?php
                                                        }
                                                        ?>
                                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                        <!--<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>-->
                                                    </div><!-- End .product-action-vertical -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>-->
                                                        <?php 
                                                        if($product_row->product_quantity==0)
                                                        {
                                                            ?>
                                                            <!--<span class="product-label label-primary">Out of Stock</span>-->
                                                            <a href="<?php echo base_url(); ?>user/notify_me/<?php echo $product_row->product_id; ?>" class="btn-product "><span>Notify Me</span></a>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/add_to_cart/<?php echo $product_row->product_id; ?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                        <!--<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>-->

                                                    
                                                    </div><!-- End .product-action -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    
                                                    <!--
                                                    <div class="product-cat">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    -->

                                                    <!-- End .product-cat -->
                                                    <h3 class="product-title">
                                                        <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_id; ?>">-->
                                                        <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>/<?php echo $product_row->product_id; ?>">-->
                                                        <a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>">
                                                            <?php echo $product_row->product_name; ?>
                                                        </a>
                                                    </h3><!-- End .product-title -->
                                                    
                                                    <!--<div class="product-price">
                                                        $60.00
                                                    </div>-->
                                                    <div class="product-price">
                                                        <!--Rs. --><i class="icon-rupee"></i> <?php echo $product_row->product_selling_price; ?>
                                                    </div>
                                                    
                                                    <!-- End .product-price -->
                                                    <!--
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 20%;"></div>
                                                        </div>
                                                        <span class="ratings-text">( 2 Reviews )</span>
                                                    </div>-->
                                                    
                                                    <!--
                                                    <div class="product-nav product-nav-thumbs">
                                                        <a href="#" class="active">
                                                            <img src="<?php echo base_url(); ?>template/user/assets/images/products/product-4-thumb.jpg" alt="product desc">
                                                        </a>
                                                        <a href="#">
                                                            <img src="<?php echo base_url(); ?>template/user/assets/images/products/product-4-2-thumb.jpg" alt="product desc">
                                                        </a>

                                                        <a href="#">
                                                            <img src="<?php echo base_url(); ?>template/user/assets/images/products/product-4-3-thumb.jpg" alt="product desc">
                                                        </a>
                                                    </div>-->
                                                    <!-- End .product-nav -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product -->
                                        </div>
                                        <?php
                                    }
                                    ?>


                                    

                                    
                                </div><!-- End .row -->
                            </div><!-- End .products -->

                            
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
            </div><!-- End .container -->
            <!-- CATEGORY PRODUCT LIST END -->


            

            <div class="mb-5"></div><!-- End .mb5 -->

            <div class="container">
            <?php 
            //include_once('blocks/bottom_sticker.php');

            ?>

             <?php 
                    $this->db->order_by('block_order','asc');
                    $block_top_res=$this->db->get_where('tbl_block',array('block_group'=>'Place Three','block_status'=>'Active'));
                    foreach($block_top_res->result() as $block_top_row)
                    {
                        echo $block_top_row->block_desc;
                    }
                ?>
            </div>
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

            <?php 
            include_once("instagram_box_view.php");
            ?>
        </main><!-- End .main -->

        <?php 
        include_once('footer.php');
        ?>
    </div><!-- End .page-wrapper -->
    <?php 
    include_once('mobile_menu.php');
    ?>
    
    <?php
    include_once('footer_file.php');
    ?>
</body>


<!-- Mirrored from portotheme.com/html/molla/index-10.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:07:25 GMT -->
</html>
<style type="text/css">
 /*   .icon-box-title
    {
        color:white;
    }
    .icon-box-content p
    {
        color:white;
    }
*/
</style>

<style type="text/css">
    
.selected-wishlist::before
{
        font-size: 1.6rem;
    content: '\f233';



}
</style>

<?php 

print("<pre>");
print_r($_COOKIE);
print("</pre>");
if(!isset($_COOKIE["subscribed"]))
{
    include_once('subscribe_popup.php');
}
?>