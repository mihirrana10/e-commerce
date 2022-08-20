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
                    <h1 class="page-title">Wishlist<span>Shop</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <table class="table table-wishlist table-mobile">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Stock Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            $this->db->join('tbl_product_new','tbl_wishlist.product_id=tbl_product_new.product_id');
                            $wishlist_res=$this->db->get_where('tbl_wishlist',array('customer_id'=>$_SESSION["customer_id"]));

                            foreach($wishlist_res->result() as $wishlist_row)
                            {
                                ?>
                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $wishlist_row->product_image; ?>" alt="Product image">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="#"><?php echo $wishlist_row->product_name; ?></a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col"><i class="icon-rupee"></i><?php echo $wishlist_row->product_selling_price; ?></td>
                                    <!--
                                    <td class="stock-col"><span class="in-stock">In stock</span></td>
                                    <td class="action-col">
                                        <div class="dropdown">
                                        <button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-list-alt"></i>Select Options
                                        </button>

                                        <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -1px, 0px);">
                                            <a class="dropdown-item" href="#">First option</a>
                                            <a class="dropdown-item" href="#">Another option</a>
                                            <a class="dropdown-item" href="#">The best option</a>
                                          </div>
                                        </div>
                                    </td>-->
                                    <?php 
                                    if($wishlist_row->product_quantity>0)
                                    {
                                        ?>
                                        <td class="stock-col"><span class="in-stock" style="color:green">In stock</span></td>
                                        <td class="action-col">
                                            <a href="<?php echo base_url(); ?>user/add_to_cart/<?php echo $wishlist_row->product_id; ?>" class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</a>
                                        </td>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        
                                        <td class="stock-col"><span class="out-of-stock" style="color:#c33">Out of stock</span></td>
                                        <td class="action-col">
                                            <a href="<?php echo base_url(); ?>user/notify_me/<?php echo $wishlist_row->product_id; ?>" class="btn btn-block btn-outline-primary-2">Notify Me</a>
                                        </td>
                                        <?php
                                    }
                                    ?>
                                    
                                    <td class="remove-col"><a href="<?php echo base_url(); ?>user/remove_wishlist/<?php echo $wishlist_row->product_id; ?>"><button class="btn-remove"><i class="icon-close"></i></button></a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            <!--
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/products/table/product-1.jpg" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">Beige knitted elastic runner shoes</a>
                                        </h3>
                                    </div>
                                </td>
                                <td class="price-col">$84.00</td>
                                <td class="stock-col"><span class="in-stock">In stock</span></td>
                                <td class="action-col">
                                    <div class="dropdown">
                                    <button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-list-alt"></i>Select Options
                                    </button>

                                    <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -1px, 0px);">
                                        <a class="dropdown-item" href="#">First option</a>
                                        <a class="dropdown-item" href="#">Another option</a>
                                        <a class="dropdown-item" href="#">The best option</a>
                                      </div>
                                    </div>
                                </td>
                                <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/products/table/product-2.jpg" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">Blue utility pinafore denim dress</a>
                                        </h3>
                                    </div>
                                </td>
                                <td class="price-col">$76.00</td>
                                <td class="stock-col"><span class="in-stock">In stock</span></td>
                                <td class="action-col">
                                    <button class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</button>
                                </td>
                                <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/products/table/product-3.jpg" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">Orange saddle lock front chain cross body bag</a>
                                        </h3>
                                    </div>
                                </td>
                                <td class="price-col">$52.00</td>
                                <td class="stock-col"><span class="out-of-stock">Out of stock</span></td>
                                <td class="action-col">
                                    <button class="btn btn-block btn-outline-primary-2 disabled">Out of Stock</button>
                                </td>
                                <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                            </tr>
                            -->
                        </tbody>
                    </table><!-- End .table table-wishlist -->
                    <div class="wishlist-share">
                        <div class="social-icons social-icons-sm mb-2">
                            <label class="social-label">Share on:</label>
                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .wishlist-share -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main>

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
    .table th, .table thead th, .table td {
    color:black;
    }
</style>