<?php 
$this->db->join('tbl_product_new','tbl_cart.product_id=tbl_product_new.product_id');
                                            $view_cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id() ));
$active_link="cart";
    
?>
<?php 
$this->db->join('tbl_product_new','tbl_wishlist.product_id=tbl_product_new.product_id');
                                $wishlist_new_res=$this->db->get_where('tbl_wishlist',array('customer_id'=>"customer_id"));
                                // $product_res=$this->db->get_where("tbl_product_new");
                                // print_r($wishlist_new_res);
                                // echo '<pre>',print_r($res),'</pre>';
                                // exit;
$total_products=$wishlist_new_res->num_rows();
?>
<header class="header header-2 header-intro-clearance">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p style="color:black">GET FREE EARRINGS WITH THE NECKLACE.</p>
                        <!--<a href="#">&nbsp;Read more ...</a>-->
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">USD</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">Eur</a></li>
                                                    <li><a href="#">Usd</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">English</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    <li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" >
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="<?php echo base_url();?>user/index " class="logo">
                            <img src="<?php echo base_url(); ?>template/user/assets/images/demos/demo-2/logo.png" alt="James Allen Logo" width="250" height="50">
                        </a>
                    </div><!-- End .header-left -->

                    <!--<div class="header-center">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>-->

                    <div class="header-right">
                        <div class="account">
                            <a href="<?php echo base_url(); ?>user/manage_myaccount" title="My account">
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                                <p>Account</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="<?php echo base_url(); ?>user/manage_wishlist" title="Wishlist">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    <span class="wishlist-count badge"><?php echo $total_products; ?></span>
                                </div>
                                <p>Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count"><?php echo $view_cart_res->num_rows(); ?></span>
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                <?php 
                        $this->db->join('tbl_product_new','tbl_cart.product_id=tbl_product_new.product_id');
                        $cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id()));
                        
                        $total=0;
                        foreach($cart_res->result() as $cart_row)
                        {
                            ?>
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="<?php echo base_url(); ?>user/manage_product_detail/<?php echo $cart_row->product_id; ?>/<?php echo $cart_row->product_seo_slug; ?>">
                                                <?php 
                                                    echo $cart_row->product_name;
                                                ?>
                                                </a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty"><?php echo $cart_row->cart_qty; ?></span>
                                                x <i class="icon-rupee"></i><?php echo $cart_row->product_selling_price; ?>
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="<?php echo base_url(); ?>user/manage_product_detail/<?php echo $cart_row->product_id; ?>/<?php echo $cart_row->product_seo_slug; ?>" class="product-image">
                                                <img src="<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $cart_row->product_image; ?>" alt="product">
                                            </a>
                                        </figure>
                                        <a href="<?php echo base_url(); ?>user/remove_cart/<?php echo $cart_row->product_id; ?>" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>

                                    </div><!-- End .product -->
                                    <?php
                                        $total=$total+($cart_row->cart_qty*$cart_row->product_selling_price);
                                        }
                                    ?>
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price"><i class="icon-rupee"></i><?php echo $total; ?></span> 
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="<?php echo base_url(); ?>user/manage_cart" class="btn btn-primary">View Cart</a>
                                    <a href="<?php echo base_url(); ?>user/manage_checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                   

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.html" class="sf-with-ul">ENGAGEMENT&nbsp;EARRINGS</a>

                                    <div class="megamenu demo">
                                        <div class="menu-col">
                                            <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                            <div class="demo-list">
                                                <div class="demo-item">
                                                    <a href="index-1.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/1.jpg);"></span>
                                                        <span class="demo-title">01 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-2.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/2.jpg);"></span>
                                                        <span class="demo-title">02 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-3.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/3.jpg);"></span>
                                                        <span class="demo-title">03 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-4.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/4.jpg);"></span>
                                                        <span class="demo-title">04 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-5.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/5.jpg);"></span>
                                                        <span class="demo-title">05 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-6.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/6.jpg);"></span>
                                                        <span class="demo-title">06 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-7.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/7.jpg);"></span>
                                                        <span class="demo-title">07 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-8.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/8.jpg);"></span>
                                                        <span class="demo-title">08 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-9.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/9.jpg);"></span>
                                                        <span class="demo-title">09 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="index-10.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/10.jpg);"></span>
                                                        <span class="demo-title">10 - shoes store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-11.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/11.jpg);"></span>
                                                        <span class="demo-title">11 - furniture simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-12.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/12.jpg);"></span>
                                                        <span class="demo-title">12 - fashion simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-13.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/13.jpg);"></span>
                                                        <span class="demo-title">13 - market</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-14.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/14.jpg);"></span>
                                                        <span class="demo-title">14 - market fullwidth</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-15.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/15.jpg);"></span>
                                                        <span class="demo-title">15 - lookbook 1</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-16.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/16.jpg);"></span>
                                                        <span class="demo-title">16 - lookbook 2</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-17.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/17.jpg);"></span>
                                                        <span class="demo-title">17 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-18.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/18.jpg);"></span>
                                                        <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-19.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/19.jpg);"></span>
                                                        <span class="demo-title">19 - games store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-20.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/20.jpg);"></span>
                                                        <span class="demo-title">20 - book store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-21.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/21.jpg);"></span>
                                                        <span class="demo-title">21 - sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-22.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/22.jpg);"></span>
                                                        <span class="demo-title">22 - tools store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-23.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/23.jpg);"></span>
                                                        <span class="demo-title">23 - fashion left navigation store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="index-24.html">
                                                        <span class="demo-bg" style="background-image: url(<?php echo base_url(); ?>template/user/assets/images/menu/demos/24.jpg);"></span>
                                                        <span class="demo-title">24 - extreme sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                            </div><!-- End .demo-list -->

                                            <div class="megamenu-action text-center">
                                                <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .text-center -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="category.html" class="sf-with-ul">WEDDING&nbsp;RINGS</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-list.html">Link 1</a></li>
                                                                <li><a href="category-2cols.html">Link 2</a></li>
                                                                <li><a href="category.html">Link 3</a></li>
                                                                <li><a href="category-4cols.html">Link 4</a></li>
                                                                <li><a href="category-market.html"><span>Link 5<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-boxed.html"><span>Link 6<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="category-fullwidth.html">Link 7</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="product-category-boxed.html">Category 1</a></li>
                                                                <li><a href="product-category-fullwidth.html"><span>Category 2<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>
                                                            <div class="menu-title">Pages</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="dashboard.html">My Account</a></li>
                                                                <li><a href="#">Lookbook</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="<?php echo base_url(); ?>template/user/assets/images/menu/banner-1.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul">DIAMONDS</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-list.html">Link 1</a></li>
                                                                <li><a href="category-2cols.html">Link 2</a></li>
                                                                <li><a href="category.html">Link 3</a></li>
                                                                <li><a href="category-4cols.html">Link 4</a></li>
                                                                <li><a href="category-market.html"><span>Link 5<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-boxed.html"><span>Link 6<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="category-fullwidth.html">Link 7</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="product-category-boxed.html">Category 1</a></li>
                                                                <li><a href="product-category-fullwidth.html"><span>Category 2<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>
                                                            <div class="menu-title">Pages</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="dashboard.html">My Account</a></li>
                                                                <li><a href="#">Lookbook</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="<?php echo base_url(); ?>template/user/assets/images/menu/banner-1.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">FINE&nbsp;JEWELLERY</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-list.html">Link 1</a></li>
                                                                <li><a href="category-2cols.html">Link 2</a></li>
                                                                <li><a href="category.html">Link 3</a></li>
                                                                <li><a href="category-4cols.html">Link 4</a></li>
                                                                <li><a href="category-market.html"><span>Link 5<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-boxed.html"><span>Link 6<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="category-fullwidth.html">Link 7</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="product-category-boxed.html">Category 1</a></li>
                                                                <li><a href="product-category-fullwidth.html"><span>Category 2<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>
                                                            <div class="menu-title">Pages</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="dashboard.html">My Account</a></li>
                                                                <li><a href="#">Lookbook</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="<?php echo base_url(); ?>template/user/assets/images/menu/banner-1.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="blog.html" class="sf-with-ul">GEMSTONE</a>

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
                                    <a href="elements-list.html" class="sf-with-ul">EDUCATION</a>

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
                                    <a href="<?php echo base_url(); ?>user/manage_faq" >FAQ</a>
                                </li>
                                <!-- class="sf-with-ul" -->
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                   
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header>
        

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
                                <form action="<?php echo base_url('login/login_check'); ?>" method="post">
                                            <div class="form-group">
                                                <label for="singin-email">Username or email address *</label>
                                                <input type="text" class="form-control" id="singin-email" name="txt_user_email" required>
                                            </div><!-- End .form-group -->

                                            <div class="form-group">
                                                <label for="singin-password">Password *</label>
                                                <input type="password" class="form-control" id="singin-password"  name="txt_user_password" required>
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
                                          <form role="form" method="post" action="<?php echo base_url(); ?>user/manage_user/create" enctype="multipart/form-data">

                                                <div class="form-group">
                                                    <label for="register-email">Your email address *</label>
                                                    <input type="email" class="form-control" id="register-email" name="txt_user_email" required>
                                                </div><!-- End .form-group -->

                                                <div class="form-group">
                                                    <label for="register-password">Password *</label>
                                                    <input type="password" class="form-control" id="register-password" name="txt_user_password" required>
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
 





