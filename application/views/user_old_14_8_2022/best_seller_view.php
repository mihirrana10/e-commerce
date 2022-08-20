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
            <div class="page-header text-center" style="background-image: url('<?php echo base_url(); ?>template/user/assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Grid 3 Columns<span>Shop</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Grid 3 Columns</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="toolbox">
                                <div class="toolbox-left">
                                    <div class="toolbox-info">
                                        Showing <span>9 of 56</span> Products
                                    </div><!-- End .toolbox-info -->
                                </div><!-- End .toolbox-left -->

                                <div class="toolbox-right">
                                    <div class="toolbox-sort">
                                        <label for="sortby">Sort by:</label>
                                        <div class="select-custom">
                                            <select name="sortby" id="sortby" class="form-control">
                                                <option value="popularity" selected="selected">Most Popular</option>
                                                <option value="rating">Most Rated</option>
                                                <option value="date">Date</option>
                                            </select>
                                        </div>
                                    </div><!-- End .toolbox-sort -->
                                    <div class="toolbox-layout">
                                        <a href="category-list.html" class="btn-layout">
                                            <svg width="16" height="10">
                                                <rect x="0" y="0" width="4" height="4" />
                                                <rect x="6" y="0" width="10" height="4" />
                                                <rect x="0" y="6" width="4" height="4" />
                                                <rect x="6" y="6" width="10" height="4" />
                                            </svg>
                                        </a>

                                        <a href="category-2cols.html" class="btn-layout">
                                            <svg width="10" height="10">
                                                <rect x="0" y="0" width="4" height="4" />
                                                <rect x="6" y="0" width="4" height="4" />
                                                <rect x="0" y="6" width="4" height="4" />
                                                <rect x="6" y="6" width="4" height="4" />
                                            </svg>
                                        </a>

                                        <a href="category.html" class="btn-layout active">
                                            <svg width="16" height="10">
                                                <rect x="0" y="0" width="4" height="4" />
                                                <rect x="6" y="0" width="4" height="4" />
                                                <rect x="12" y="0" width="4" height="4" />
                                                <rect x="0" y="6" width="4" height="4" />
                                                <rect x="6" y="6" width="4" height="4" />
                                                <rect x="12" y="6" width="4" height="4" />
                                            </svg>
                                        </a>

                                        <a href="category-4cols.html" class="btn-layout">
                                            <svg width="22" height="10">
                                                <rect x="0" y="0" width="4" height="4" />
                                                <rect x="6" y="0" width="4" height="4" />
                                                <rect x="12" y="0" width="4" height="4" />
                                                <rect x="18" y="0" width="4" height="4" />
                                                <rect x="0" y="6" width="4" height="4" />
                                                <rect x="6" y="6" width="4" height="4" />
                                                <rect x="12" y="6" width="4" height="4" />
                                                <rect x="18" y="6" width="4" height="4" />
                                            </svg>
                                        </a>
                                    </div><!-- End .toolbox-layout -->
                                </div><!-- End .toolbox-right -->
                            </div><!-- End .toolbox -->

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
                                                            <a href="<?php echo base_url(); ?>user/-/<?php echo $product_row->product_id; ?>" class="btn-product btn-cart"><span>add to cart</span></a>
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

                            <!--<nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item-total">of 6</li>
                                    <li class="page-item">
                                        <a class="page-link page-link-next" href="#" aria-label="Next">
                                            Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>-->
                        </div><!-- End .col-lg-9 -->
                        <?php 
                        include_once('category_left_menu.php');
                        ?>
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <?php 
        include_once('footer.php');
        ?>
    </div><!-- End .page-wrapper -->
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
</style>
<script type="text/javascript">
            var controller = "ajax/get_city";
            var base_url = "<?php echo base_url(); ?>";

     function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }

    function next_paging_data(next_page_no)
    {       
        var strURL=base_url+"user_ajax/next_paging_data"+"/"+next_page_no;
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById('loading_img').style.visibility="hidden";
                        document.getElementById('loading_img').style.display="none";

                        document.getElementById("product_div").innerHTML=document.getElementById("product_div").innerHTML+req.responseText;
                        
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    
</script>
<input type="hidden" id="txt_page_no" name="txt_page_no" value="1">
<script type="text/javascript">

    $(window).scroll(function() {

        if($(window).scrollTop() + $(window).height() >= $(document).height()) {

            //var last_id = $(".post-id:last").attr("id");

            //loadMoreData(last_id);

            //alert("page load event");
            document.getElementById('loading_img').style.visibility="visible";
            document.getElementById('loading_img').style.display="block";
            

            var next_page_id = parseInt(document.getElementById('txt_page_no').value) + 1;

            document.getElementById('txt_page_no').value=next_page_id;
            next_paging_data(next_page_id);
            
            //alert(next_page_id);


        }

    });
</script>