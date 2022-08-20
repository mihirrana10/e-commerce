<?php 
$product_row=$product_res->result();

$product_in_cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id(),'product_id'=>$product_row[0]->product_id));

//$product_in_cart_flag=false;
$product_cart_qty=1;
if($product_in_cart_res->num_rows()>0)
{
    //$product_in_cart_flag=true;
    $product_in_cart_row=$product_in_cart_res->result();
    $product_cart_qty = $product_in_cart_row[0]->cart_qty;
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/molla/product.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:25:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $product_row[0]->product_name; ?> - Vimla Prints</title>
    <meta name="keywords" content="<?php echo $product_row[0]->product_meta_tag_keywords; ?>">
    <meta name="description" content="<?php echo $product_row[0]->product_meta_tag_description; ?>">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <?php 
    include_once('head_file.php');
    ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/plugins/nouislider/nouislider.css">

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Product",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "3.5",
        "reviewCount": "11"
      },
      "description": "<?php echo $product_row[0]->product_meta_tag_description; ?>",
      "name": "<?php echo $product_row[0]->product_name; ?>",
      "image": "<?php echo base_url(); ?>files/admin/product/<?php echo $product_row[0]->product_image; ?>",
      "offers": {
        "@type": "Offer",
        "availability": "http://schema.org/InStock",
        "price": "<?php echo $product_row[0]->product_selling_price; ?>",
        "priceCurrency": "INR"
      },
      "review": [
        {
          "@type": "Review",
          "author": "Ellie",
          "datePublished": "2011-04-01",
          "description": "The lamp burned out and now I have to replace it.",
          "name": "Not a happy camper",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "1",
            "worstRating": "1"
          }
        },
        {
          "@type": "Review",
          "author": "Lucas",
          "datePublished": "2011-03-25",
          "description": "Great microwave for the price. It is small and fits in my apartment.",
          "name": "Value purchase",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "4",
            "worstRating": "1"
          }
        }
      ]
    }
    </script>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo base_url(); ?>user/product/<?php echo $product_row[0]->product_seo_slug; ?>">
    <meta property="og:title" content="<?php echo $product_row[0]->product_name; ?>">
    <meta property="og:description" content="<?php echo $product_row[0]->product_meta_tag_description; ?>">
    <meta property="og:image" content="<?php echo base_url(); ?>files/admin/product/med/<?php echo $product_row[0]->product_image; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo base_url(); ?>user/product/<?php echo $product_row[0]->product_seo_slug; ?>">
    <meta property="twitter:title" content="<?php echo $product_row[0]->product_name; ?>">
    <meta property="twitter:description" content="<?php echo $product_row[0]->product_meta_tag_description; ?>">
    <meta property="twitter:image" content="<?php echo base_url(); ?>files/admin/product/med/<?php echo $product_row[0]->product_image; ?>">
    
</head>

<body>
    <div class="page-wrapper">
        <?php
        include_once('header.php');
        ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>user">Home</a></li>
                        <!--<li class="breadcrumb-item"><a href="#">Products</a></li>-->
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $product_row[0]->product_name; ?></li>
                    </ol>

                    <nav class="product-pager ml-auto" aria-label="Product">
                        <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                            <i class="icon-angle-left"></i>
                            <span>Prev</span>
                        </a>

                        <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                            <span>Next</span>
                            <i class="icon-angle-right"></i>
                        </a>
                    </nav><!-- End .pager-nav -->
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <!--<img id="product-zoom" src="<?php echo base_url(); ?>template/user/assets/images/products/single/1.jpg" data-zoom-image="<?php echo base_url(); ?>template/user/assets/images/products/single/1-big.jpg" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>-->
                                            
                                            <img id="product-zoom" src="<?php echo base_url(); ?>files/admin/product/<?php echo $product_row[0]->product_image; ?>" data-zoom-image="<?php echo base_url(); ?>files/admin/product/big/<?php echo $product_row[0]->product_image; ?>">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                            
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            <a class="product-gallery-item active" href="#" data-image="<?php echo base_url(); ?>files/admin/product/<?php echo $product_row[0]->product_image; ?>" data-zoom-image="<?php echo base_url(); ?>files/admin/product/big/<?php echo $product_row[0]->product_image; ?>">
                                                <img src="<?php echo base_url(); ?>files/admin/product/small/<?php echo $product_row[0]->product_image; ?>" alt="product side">
                                            </a>

                                            <?php 
                                            $product_additional_image_res=$this->db->get_where('tbl_product_additional_image',array('product_id'=>$product_row[0]->product_id));
                                            foreach($product_additional_image_res->result() as 
                                                $product_additional_image_row)
                                            {
                                                ?>
                                                <a class="product-gallery-item" href="#" data-image="<?php echo base_url(); ?>files/admin/product/<?php echo $product_additional_image_row->product_additional_image; ?>" data-zoom-image="<?php echo base_url(); ?>files/admin/product/big/<?php echo $product_additional_image_row->product_additional_image; ?>">
                                                    <img src="<?php echo base_url(); ?>files/admin/product/small/<?php echo $product_additional_image_row->product_additional_image; ?>" alt="product cross">
                                                </a>
                                                <?php
                                            }
                                            ?>
                                            <!--
                                            <a class="product-gallery-item" href="#" data-image="<?php echo base_url(); ?>template/user/assets/images/products/single/2.jpg" data-zoom-image="<?php echo base_url(); ?>template/user/assets/images/products/single/2-big.jpg">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/products/single/2-small.jpg" alt="product cross">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="<?php echo base_url(); ?>template/user/assets/images/products/single/3.jpg" data-zoom-image="<?php echo base_url(); ?>template/user/assets/images/products/single/3-big.jpg">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/products/single/3-small.jpg" alt="product with model">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="<?php echo base_url(); ?>template/user/assets/images/products/single/4.jpg" data-zoom-image="<?php echo base_url(); ?>template/user/assets/images/products/single/4-big.jpg">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/products/single/4-small.jpg" alt="product back">
                                            </a>-->
                                        </div><!-- End .product-image-gallery -->
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title"><?php echo $product_row[0]->product_name; ?></h1><!-- End .product-title -->

                                    <?php 
                                    //$prod_review_res=$this->db->get_where('tbl_product_review',array('product_id'=>$product_row[0]->product_id));
                                    $rating_query="select avg(product_overall_rating) as `average_rating`,count(*) as `total_rating` from tbl_product_review where product_id='".$product_row[0]->product_id."' ";
                                    //echo $rating_query;
                                    $rating_res=$this->db->query($rating_query);
                                    if($rating_res->num_rows()>0)
                                    {
                                        $rating_row=$rating_res->result();
                                        $rating_per=$rating_row[0]->average_rating*10;
                                        //echo $rating_per;
                                        ?>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width:<?php echo $rating_per; ?>%;"></div>
                                                <font  style="color:#333333"><?php echo $rating_row[0]->average_rating; ?></font>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <a class="ratings-text" style="color:#333333" href="#product-review-link" id="review-link">( <?php echo $rating_row[0]->total_rating; ?> Reviews )</a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <!-- End .rating-container -->

                                    <div class="product-price">
                                        <!--Rs.--><i class="icon-rupee"></i> <?php echo $product_row[0]->product_selling_price; ?>
                                            <?php 
                                            if($product_row[0]->product_mrp!="0")
                                            {
                                                $disc_per = ($product_row[0]->product_selling_price*100)/$product_row[0]->product_mrp;
                                                $disc_per=100-ceil($disc_per);
                                                ?>
                                                <span class="old-price" style="color:#333333;margin-left:10px">
                                                    <i class="icon-rupee" style="text-decoration: line-through;"><?php echo $product_row[0]->product_mrp; ?></i>
                                                    
                                                </span>
                                                (<?php echo $disc_per; ?>% off)
                                                <?php
                                            }

                                            ?>

                                    </div><!-- End .product-price -->



                                    <div class="product-content">
                                        <p style="font-size:15px;color: #c33;font-weight: bold">Inclusive of all taxes</p>
                                        <p><?php //echo $product_row[0]->product_brief_description; ?> </p>
                                    </div><!-- End .product-content -->

                                    <!--
                                    <div class="details-filter-row details-row-size">
                                        <label>Color:</label>

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/products/single/1-thumb.jpg" alt="product desc">
                                            </a>
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>template/user/assets/images/products/single/2-thumb.jpg" alt="product desc">
                                            </a>
                                        </div>
                                    </div>-->
                                    <!--
                                    <div class="details-filter-row details-row-size">
                                        <label for="size">Size:</label>
                                        <div class="select-custom">
                                            <select name="size" id="size" class="form-control">
                                                <option value="#" selected="selected">Select a size</option>
                                                <option value="s">Small</option>
                                                <option value="m">Medium</option>
                                                <option value="l">Large</option>
                                                <option value="xl">Extra Large</option>
                                            </select>
                                        </div>

                                        <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                                    </div>
                                    -->
                                    <!-- End .details-filter-row -->
                                    <?php 
                                    if($product_row[0]->product_quantity>0)
                                    {
                                        ?>
                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Qty:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="txt_qty" name="txt_qty" class="form-control" value="<?php echo $product_cart_qty; ?>" min="1" max="10000" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->
                                    <?php 
                                    }
                                    ?>
                                    <?php 
                                    $already_in_notify_flag=false;
                                            if(isset($_SESSION["customer_id"]))
                                            {
                                                $notify_res=$this->db->get_where('tbl_notify',array('customer_id'=>$_SESSION["customer_id"]));
                                                $notify_prod_array=array();
                                                foreach($notify_res->result() as $notify_row)
                                                {
                                                    $notify_prod_array[]=$notify_row->product_id;
                                                }   

                                                //print_r($notify_prod_array);
                                                if($product_row[0]->product_quantity==0)
                                                {
                                                    if(in_array($product_row[0]->product_id, 
                                                        $notify_prod_array))
                                                    {
                                                        $already_in_notify_flag=true;
                                                        echo '<div class="alert alert-danger" style="width:70%">
      <strong><i class="icon-check"></i></strong>&nbsp;&nbsp; You will be notified when product is available
    </div><br>';
                                                    }
                                                }

                                            }
                                    ?>
                                    <div class="product-details-action">
                                        <!--<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>-->
                                        <?php 
                                        if($product_row[0]->product_quantity==0)
                                        {
                                            if($already_in_notify_flag==true)
                                            {
                                             ?>
                                            <a href="#" class="btn-product btn-cart" disabled="disabled"><span>Notify Me</span></a>
                                            <?php
                                            }
                                            else
                                            {
                                            ?>
                                            <a href="<?php echo base_url(); ?>user/notify_me/<?php echo $product_row[0]->product_id; ?>" class="btn-product btn-cart" disabled="disabled"><span>Notify Me</span></a>
                                            <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                            <a href="#" onclick="add_to_cart(<?php echo $product_row[0]->product_id; ?>)" class="btn-product btn-cart"><span>add to cart</span></a>
                                            <script type="text/javascript">
                                                function add_to_cart(pid)
                                                {
                                                    var qty=document.getElementById('txt_qty').value;
                                                    window.location="<?php echo base_url(); ?>user/add_to_cart/"+pid+"/"+qty;
                                                    //alert(qty);
                                                }
                                            </script>
                                            <?php
                                        }
                                        ?>

                                        <!--<div class="details-action-wrapper">-->
                                        <div class="wish_div">
                                            <!--
                                                <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row[0]->product_id; ?>" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>-->

                                                <?php 
                                                        //in_array(needle, haystack)
                                                        if(isset($wishlist_array) && in_array($product_row[0]->product_id, $wishlist_array))
                                                        {
                                                            ?>
                                                            <a href="#" class="btn-product selected-wishlist" title="Wishlist"><span>In Wishlist</span></a>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>

                                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row[0]->product_id; ?>" class="btn-product btn-cart btn-wslt"><span>Add to Wishlist</span></a>
                                                            <!--
                                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row[0]->product_id; ?>" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>-->
                                                            <?php
                                                        }
                                                        ?>


                                            <!--<a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>-->
                                        
                                        </div>



                                        <!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->


                                    <div class="product-details-footer">
                                        <!--<div class="product-cat">
                                            <span>Category:</span>
                                            <a href="#">Women</a>,
                                            <a href="#">Dresses</a>,
                                            <a href="#">Yellow</a>
                                        </div>-->
                                        <!-- End .product-cat -->

                                        <?php 
                                        $social_title=$product_row[0]->product_name;
                                        $social_image=base_url().'files/admin/product/med/'.$product_row[0]->product_image;
                                        $current_url=base_url().'user/product/'.$product_row[0]->product_seo_slug;


                                        

                                        ?>
                                        <div class="social-icons social-icons-sm" style="margin-left:0px">
                                            <span class="social-label">Share:</span>
                                            <a href="https://wa.me/?text=<?php echo $current_url; ?>" class="social-icon whtup" title="Whatsapp" target="_blank"><i class="icon-whatsapp"></i></a>

                                            <a href="http://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>" class="social-icon fb" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="http://twitter.com/share?text=<?php echo $social_title; ?>&url=<?php echo $current_url; ?>" class="social-icon tw" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="<?php echo $current_url; ?>" class="social-icon inst" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="http://pinterest.com/pin/create/button/?url=<?php echo $current_url; ?>&media=<?php echo $social_image; ?>" class="social-icon pin" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->

                                        <p style="font-size:19px;color: #c33;font-weight: bold;margin-top:15px">Specifications</p>
                                            <?php 
                                                $this->db->join('tbl_attribute_value','tbl_attribute_value.attribute_value_id=tbl_product_attribute_value.attribute_value_id');
                                                $this->db->join('tbl_attribute','tbl_attribute.attribute_id=tbl_attribute_value.attribute_id');
                                                
                                                $attr_res=$this->db->get_where('tbl_product_attribute_value',array("tbl_product_attribute_value.product_id"=>$product_row[0]->product_id));

                                                $fabric="";
                                                $type="";
                                                $occassion="";
                                                $pattern="";
                                                $color="";
                                                foreach($attr_res->result() as $attr_row)
                                                {
                                                    if($attr_row->attribute_name=="Fabric")
                                                    {
                                                        $fabric=$attr_row->attribute_value;
                                                    }
                                                    if($attr_row->attribute_name=="Type")
                                                    {
                                                        $type=$attr_row->attribute_value;
                                                    }
                                                    if($attr_row->attribute_name=="Occassion")
                                                    {
                                                        $occassion=$attr_row->attribute_value;
                                                    }
                                                    if($attr_row->attribute_name=="By Pattern")
                                                    {
                                                        $pattern=$attr_row->attribute_value;
                                                    }
                                                    if($attr_row->attribute_name=="Color")
                                                    {
                                                        $color=$attr_row->attribute_value;
                                                    }
                                                }
                                            ?>
                                            <table class="spec_tbl">
                                                <tr class="spec_th">
                                                    <th style="width:50%" class="spec_th">TYPE</th>
                                                    <th style="width:50%" class="spec_th">WASH CARE</th>
                                                </tr>
                                                <tr class="spec_title">
                                                    <td><?php echo $type; ?></td>
                                                    <td>Hand Wash or Dry Clean</td>
                                                </tr>
                                                <tr  class="spec_th">
                                                    <th class="spec_th">OCCASSION</th>
                                                    <th class="spec_th">COLOR</th>
                                                </tr>
                                                <tr  class="spec_title">
                                                    <td><?php echo $occassion; ?></td>
                                                    <td><?php echo $color; ?></td>
                                                </tr>
                                                <tr  class="spec_th">
                                                    <th class="spec_th">PATTERN</th>
                                                    <th class="spec_th">WEIGHT</th>
                                                </tr>
                                                <tr  class="spec_title">
                                                    <td><?php echo $pattern; ?></td>
                                                    <td><?php echo ($product_row[0]->product_weight/1000)." Kg (approx.)"; ?></td>
                                                </tr>
                                                <tr  class="spec_th">
                                                    <th class="spec_th">FABRIC MATERIAL</th>
                                                    <th class="spec_th">SIZE</th>
                                                </tr>
                                                <tr  class="spec_title">
                                                    <td><?php echo $fabric; ?></td>
                                                    <td>Saree: 5.50m, Blouse: 0.80m</td>
                                                </tr>
                                                <style type="text/css">
                                                    .spec_tbl
                                                    {
                                                        width:80%;
                                                        padding:0px;
                                                    }
                                                    .spec_th
                                                    {
                                                        font-weight: 100;
                                                        line-height: 0;
                                                        padding-top:15px;
                                                        padding-bottom:5px;    
                                                    }
                                                    .spec_title
                                                    {
                                                        font-size:19px;
                                                        color:black;
                                                    }
                                                    .spec_title td
                                                    {
                                                        border-bottom: 2px #dadada solid;
                                                        
                                                    }
                                                  
                                                </style>
                                            </table>
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (<?php echo $rating_row[0]->total_rating; ?>)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                    <?php 
                                    echo $product_row[0]->product_description; 
                                    ?>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                <div class="product-desc-content">
                                    <?php 
                                    echo $product_row[0]->product_additional_information; 
                                    ?>
                                </div>
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                                <div class="product-desc-content">
                                    <h3>Delivery & returns</h3>
                                    <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                    We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                <div class="reviews">
                                    <h3>Reviews (<?php echo $rating_row[0]->total_rating; ?>)</h3>
                                    <?php 
                                    if($rating_res->num_rows()>0)
                                    {

                                        $this->db->order_by('product_review_date','desc');
                                        $this->db->join('tbl_customer','tbl_customer.customer_id=tbl_product_review.customer_id');
                                        $review_res=$this->db->get_where('tbl_product_review',array('product_id'=>$product_row[0]->product_id));

                                        foreach($review_res->result() as $review_row)
                                        {

                                            $today_date=date_create(date('Y-m-d'));
                                            $diff=date_diff(date_create($review_row->product_review_date),$today_date);

                                            //echo $diff->format("%a"); 
                                            ?>
                                            <div class="review">
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <h4><a href="#"><?php echo $review_row->customer_full_name; ?></a></h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-val" style="width: <?php echo ($review_row->product_overall_rating*20); ?>%"></div><!-- End .ratings-val -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .rating-container -->
                                                        <span class="review-date"><?php echo $diff->format("%a"); ?> days ago</span>
                                                    </div><!-- End .col -->
                                                    <div class="col">
                                                        <h4><?php echo $review_row->product_review_headline; ?></h4>

                                                        <div class="review-content">
                                                            <p><?php echo $review_row->product_review_full; ?></p>
                                                        </div><!-- End .review-content -->

                                                        <!--
                                                        <div class="review-action">
                                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                        </div>
                                                        -->
                                                        <!-- End .review-action -->
                                                    </div><!-- End .col-auto -->
                                                </div><!-- End .row -->
                                            </div>
                                            <?php
                                        }

                                    }
                                    ?>
                                    
                                </div><!-- End .reviews -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->

                    <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "autoplay":true,
                            "autoplayTimeout":2000,
                            "autoplayHoverPause":true,
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": true,
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
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>

                        <?php 
                        $this->db->join('tbl_product_new','tbl_related_product.related_product_id=tbl_product_new.product_id');
                        $related_product_res=$this->db->get_where('tbl_related_product',array('tbl_related_product.product_id'=>$product_row[0]->product_id));
                        foreach($related_product_res->result() as $relate_product_row)
                        {
                            ?>
                            <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <!--<span class="product-label label-new">New</span>-->
                                                <?php 
                                                    if($relate_product_row->product_quantity==0)
                                                    {
                                                        ?>
                                                        <span class="product-label label-primary">Out of Stock</span>
                                                        <?php
                                                    }
                                                    ?>
                                                <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_id; ?>">-->
                                                <!--<a href="<?php echo base_url(); ?>user/product/<?php echo $product_row->product_seo_slug; ?>/<?php echo $product_row->product_id; ?>">-->
                                                <a href="<?php echo base_url(); ?>user/product/<?php echo $relate_product_row->product_seo_slug; ?>">
                                                    <img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $relate_product_row->product_image; ?>" alt="Product image" class="product-image" >
                                                </a>

                                                <div class="product-action-vertical">
                                                    <!--<a href="//send?text=Text to send withe message: http://www.yoursite.com" class="btn-product-icon icon-whatsapp btn-expandable"><span>Share on Whatsapp</span></a>-->
                                                    <a href="https://web.whatsapp.com/send?text=Please check this product: <?php echo base_url(); ?>user/product/<?php echo $relate_product_row->product_seo_slug; ?>" data-action="share/whatsapp/share" target="_blank" class="btn-product-icon icon-whatsapp btn-expandable"><span>Share on Whatsapp</span></a>

                                                    <!--<a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row->product_id; ?>" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>-->

                                                    <?php 
                                                        //in_array(needle, haystack)
                                                        if(isset($wishlist_array) && in_array($relate_product_row->product_id, $wishlist_array))
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $relate_product_row->product_id; ?>" class="btn-product-icon selected-wishlist "></a>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $relate_product_row->product_id; ?>" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                            <?php
                                                        }
                                                        ?>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <!--<a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>-->
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <!--<a href="<?php echo base_url(); ?>user/add_to_cart/<?php echo $product_row->product_id; ?>" class="btn-product btn-cart"><span>add to cart</span></a>-->
                                                    <?php 
                                                        if($relate_product_row->product_quantity==0)
                                                        {
                                                            ?>
                                                            <!--<span class="product-label label-primary">Out of Stock</span>-->
                                                            <a href="<?php echo base_url(); ?>user/notify_me/<?php echo $relate_product_row->product_id; ?>" class="btn-product"><span>Notify Me</span></a>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>user/add_to_cart/<?php echo $relate_product_row->product_id; ?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                                            <?php
                                                        }
                                                        ?>


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
                                                    <a href="<?php echo base_url(); ?>user/product/<?php echo $relate_product_row->product_seo_slug; ?>">
                                                        <?php echo $relate_product_row->product_name; ?>
                                                    </a>
                                                </h3><!-- End .product-title -->
                                                
                                                <!--<div class="product-price">
                                                    $60.00
                                                </div>-->
                                                <div class="product-price">
                                                    <!--Rs.--><i class="icon-rupee"></i> <?php echo $relate_product_row->product_selling_price; ?>
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
                            <?php
                        }
                        ?>
                        
                    </div><!-- End .owl-carousel -->
                    
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <?php 
        include_once('footer.php');
        ?>
    </div><!-- End .page-wrapper -->
    
    <!-- Sticky Bar -->
    <div class="sticky-bar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="<?php echo base_url(); ?>files/admin/product/small/<?php echo $product_row[0]->product_image; ?>" alt="Product image" style="height: 60px;">
                        </a>
                    </figure><!-- End .product-media -->
                    <h4 class="product-title"><a href="product.html"><?php echo $product_row[0]->product_name; ?></a></h4><!-- End .product-title -->
                </div><!-- End .col-6 -->

                <div class="col-6 justify-content-end">
                    <div class="product-price">
                        Rs. <?php echo $product_row[0]->product_selling_price; ?>
                    </div><!-- End .product-price -->
                    <?php 
                    if($product_row[0]->product_quantity>0)
                    {
                        ?>
                        <div class="product-details-quantity">
                            <input type="number" id="sticky-cart-qty" class="form-control" value="1" min="1" max="10000" step="1" data-decimals="0" required>
                        </div><!-- End .product-details-quantity -->

                        <?php
                    }
                    ?>
                    
                    <div class="product-details-action">
                        <!--<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>-->
                        <?php 
                        if($product_row[0]->product_quantity==0)
                        {
                            if($already_in_notify_flag==true)
                            {
                                ?>
                                <a href="#" class="btn-product btn-cart"><span>Notify Me</span></a>
                                <?php
                            }
                            else
                            {
                                ?>
                                <a href="<?php echo base_url(); ?>user/notify_me/<?php echo $product_row[0]->product_id; ?>" class="btn-product btn-cart"><span>Notify Me</span></a>
                            
                                <?php    
                            }
                        ?>
                            <style type="text/css">
                                .btn-cart::before 
                                {
                                    content: none;
                                    

                                }
                            </style>
                        <?php
                        }
                        else
                        {
                        ?>
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        <?php
                        }

                        ?>
                        <?php 
                                                //in_array(needle, haystack)
                        if(isset($wishlist_array) && in_array($product_row[0]->product_id, $wishlist_array))
                        {
                            ?>
                           <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row[0]->product_id; ?>" class="btn-product selected-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                            <?php
                        }
                        else
                        {
                        ?>
                           <a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row[0]->product_id; ?>" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                        <?php
                        }
                        
                        ?>
                        <!--<a href="<?php echo base_url(); ?>user/wishlist_add/<?php echo $product_row[0]->product_id; ?>" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>-->
                    </div><!-- End .product-details-action -->
                </div><!-- End .col-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .sticky-bar -->

    <?php 
    include_once('mobile_menu.php');
    ?>
    <?php 
    include_once('footer_file.php');
    ?>
</body>


<!-- Mirrored from portotheme.com/html/molla/product.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 23 Dec 2019 10:26:20 GMT -->
</html>

<style type="text/css">
    .sticky-bar .row 
    {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>

<style type="text/css">
    .product-gallery-vertical .product-gallery-item {
   
    height: -moz-min-content;
    /*height: -webkit-fill-available;*/
    height: min-content;
}

.btn-wslt
{
    padding: 1rem 1.5rem;
    width: 198px;
}
.btn-wslt::before {
    content: '\f234';

}

.wish_div
{

    display: flex;
    align-items: center;
    /*margin-left: 4rem;*/
    

}

@media screen and (min-width: 992px) and (max-width: 10000px) {
    .wish_div 
    {
        margin-left: 1rem
    }
    
}

@media screen and (min-width: 768px) and (max-width: 991px) {
    
    .wish_div 
    {
        margin-left: 0;
        margin-top: 1.5rem
    }
}


@media screen and (min-width: 576px) and (max-width: 767px) {
    
    .wish_div 
    {
        margin-left: 1rem;
        /*margin-top: 1.5rem*/
    }
}


@media screen and (max-width: 575px) 
{
    .wish_div
    {
        margin-left: 0;
        margin-top: 1.5rem;
    }
}


.review .review-date {
    color: 
    #333333;
}


.whtup
{
    background-color: #25D366;
    color:white;
}



.fb
{
    background-color: #3b5999;
    color:white;
}

.tw
{
    background-color: #55acee;
    color:white;
}

.inst
{
    background-color: #e4405f;
    color:white;
}

.pin
{
    background-color: #bd081c;
    color:white;
}


</style>

