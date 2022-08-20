<?php 
$this->db->join('tbl_product_new','tbl_wishlist.product_id=tbl_product_new.product_id');
                                $wishlist_new_res=$this->db->get_where('tbl_wishlist',array('customer_id'=>$_SESSION["customer_id"]));
                                //$product_res=$this->db->get_where("tbl_product_new");
$total_products=$wishlist_new_res->num_rows();
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from portotheme.com/html/molla/category.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:23:16 GMT -->
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Vimla Prints</title>
      <meta name="keywords" content="HTML5 Template">
      <meta name="description" content="Molla - Bootstrap eCommerce Template">
      <meta name="author" content="p-themes">
      <?php 
         include_once('head_file.php');
         ?>
   </head>
   <body>
      <div class="page-wrapper">
         <?php 
            include_once('header.php');
            ?>
         <main class="main">
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
               <div class="container">
                  <h1 class="page-title">My Wishlist</h1>
               </div>
               <!-- End .container -->
            </div>
            <!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
               <div class="container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                     <!--<li class="breadcrumb-item"><a href="#">Shop</a></li>-->
                     <li class="breadcrumb-item active" aria-current="page">Wishlist -  <?php echo $total_products; ?> items</li>
                  </ol>
               </div>
               <!-- End .container -->
            </nav>
            <!-- End .breadcrumb-nav -->
            <div class="page-content">
               <div class="dashboard">
                  <div class="container">
                     <div class="row">
                        <?php 
                        // include_once('customer_left_menu.php');
                        ?>
                        <!-- End .col-lg-3 -->
                        <div class="col-md-12 col-lg-12">
                          <div class="products mb-4">
                                <div class="row"  id="product_div">
                                <?php 
                                
                                if(isset($wishlist_new_res))
                                {
                                  foreach($wishlist_new_res->result() as $product_row)
                                  {
                                    ?>
                                              <div class="col-2 col-md-2 col-lg-2">
                                                  <div class="product product-7 text-center">
                                                      <figure class="product-media" style="border: 1px solid #dadada;">
                                                          <!--<span class="product-label label-new">New</span>-->
                                                          <?php 
                                                              if($product_row->product_quantity==0)
                                                              {
                                                                  ?>
                                                                  <span class="product-label label-primary">Out of Stock</span>
                                                                  <?php
                                                              }
                                                              ?>
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
                                                              <a href="popup/quickView.html" class="btn-product-icon btn-quickview btn-expandable" title="Quick view "><span>Quick view</span></a>
                                                              <!--<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>-->
                                                          </div><!-- End .product-action-vertical -->

                                                          <div class="product-action">
                                                              <!--<a href="<?php echo base_url(); ?>user/add_to_cart/<?php echo $product_row->product_id; ?>" class="btn-product btn-cart"><span>add to cart</span></a>-->
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


                                                          </div><!-- End .product-action -->
                                                      </figure><!-- End .product-media -->

                                                      <div class="product-body" style="border: 1px solid #dadada;">
                                                          
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
                                                              <!--Rs.--><i class="icon-rupee"></i> <?php echo $product_row->product_selling_price; ?>
                                                          </div>
                                                          
                                                          <!-- End .product-price -->
                                                          <!--
                                                          <div class="ratings-container">
                                                              <div class="ratings">
                                                                  <div class="ratings-val" style="width: 20%;"></div>
                                                              </div>
                                                              <span class="ratings-text">( 2 Reviews )</span>
                                                          </div>

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
                                              </div><!-- End .col-sm-6 col-lg-4 -->
                                    <?php
                                  }
                                }
                                ?>
                                </div>
                          </div>
                        </div>
                        <!-- End .col-lg-9 -->
                     </div>
                     <!-- End .row -->
                  </div>
                  <!-- End .container -->
               </div>
               <!-- End .dashboard -->
            </div>
            <!-- End .page-content -->
         </main>
         <!-- End .main -->
         <?php 
            include_once('footer.php');
            ?>
      </div>
      <!-- End .page-wrapper -->
      <?php 
         include_once('mobile_menu.php');
         ?>
      <?php
         include_once('category_footer_file.php');
         ?>
   </body>
   <!-- Mirrored from portotheme.com/html/molla/category.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:24:05 GMT -->
</html>
<style type="text/css">
   .toolbox .form-control 
   {
   color: black;
   font-weight: 300;
   font-size: 1.2rem;
   }
   .table th, .table thead th, .table td {
   color:black;
   }
   .table td 
   {
   padding-top: 0rem;
   padding-bottom: 0rem;
   padding:0px;
   }
   .table th, .table thead th, .table td {
   border-top: none;
   border-bottom:none;
   }
   th
   {
   }
   .card-title a i 
   {
   margin-left:0px;
   min-width: 17px;
   margin-right: 0rem;
   }
   .accordion {
   margin-bottom: 1rem;
   }

   .card-header {
       background-color: 
       #e5e5e5;
   }

   .table .price-col
   {
      text-align: right;
   }
</style>
