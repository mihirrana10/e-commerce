<?php 
$this->db->join('tbl_product_new','tbl_cart.product_id=tbl_product_new.product_id');
                                            $view_cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id() ));
$active_link="cart";

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
        //include_once('header.php');
        include_once('header_checkout.php');
        ?>
        <main class="main">
            <!--<div class="page-header text-center" style="background-image: url('<?php echo base_url(); ?>template/user/assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
                </div>
            </div>--><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <!--<li class="breadcrumb-item"><a href="#">Shop</a></li>-->
                        <li class="breadcrumb-item active" aria-current="page">Bag - <?php echo $view_cart_res->num_rows(); ?> items</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="cart">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <form method="post" action="<?php echo base_url(); ?>user/update_cart">
                                    
                                    <table class="table table-cart table-mobile">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php 
                                            
                                            $cart_total=0;
                                            foreach($view_cart_res->result() as $view_cart_row)
                                            {
                                                ?>
                                                <tr>
                                                    <td class="product-col">
                                                        <div class="product">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $view_cart_row->product_image; ?>" alt="Product image">
                                                                </a>
                                                            </figure>

                                                            <h3 class="product-title">
                                                                <a href="#"><?php echo $view_cart_row->product_name; ?></a>
                                                            </h3><!-- End .product-title -->
                                                        </div><!-- End .product -->
                                                    </td>
                                                    <td class="price-col"><i class="icon-rupee"></i><?php echo $view_cart_row->product_selling_price; ?></td>
                                                    <td class="quantity-col">
                                                        <div class="cart-product-quantity">
                                                            <input type="hidden" id="txt_id[]" name="txt_id[]" value="<?php echo $view_cart_row->product_id; ?>">

                                                            <input type="number" id="txt_qty[]" name="txt_qty[]" class="form-control" value="<?php echo $view_cart_row->cart_qty; ?>" min="1" max="10000" step="1" data-decimals="0" required>
                                                        </div><!-- End .cart-product-quantity -->
                                                    </td>
                                                    <td class="total-col"><i class="icon-rupee"></i><?php echo $view_cart_row->cart_qty *
                                                     $view_cart_row->product_selling_price; ?></td>
                                                    <td class="remove-col"><a href="<?php echo base_url(); ?>user/remove_cart/<?php echo $view_cart_row->product_id; ?>" class="btn-remove"><i class="icon-close"></i></a></td>
                                                </tr>
                                                <?php

                                                $cart_total=$cart_total+($view_cart_row->cart_qty *
                                                     $view_cart_row->product_selling_price);
                                            }
                                            ?>
                                        </tbody>
                                    </table><!-- End .table table-wishlist -->
                                    <div class="cart-bottom">
                                        

                                        <button type="submit" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></button>
                                    </div><!-- End .cart-bottom -->

                                </form>
                                <div class="cart-discount">
                                    <?php if(isset($msg))
                                    {
                                        echo $msg;
                                    }
                                    if(isset($_SESSION["coupon_code"]))
                                    {
                                        ?>
                                        <div class="alert alert-success" role="alert" style="width:100%"><i class="icon-check"></i> Code Applied - <?php echo $_SESSION["coupon_code"]; ?>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <form method="post" action="<?php echo base_url(); ?>user/apply_coupon">
                                        <div class="input-group">
                                            <!--<input type="text" class="form-control" required placeholder="coupon code">-->
                                            <input type="text" class="form-control"  placeholder="coupon code" id="checkout-discount-input" name="checkout-discount-input">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                            </div><!-- .End .input-group-append -->
                                        </div><!-- End .input-group -->
                                    </form>
                                </div><!-- End .cart-discount -->
                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary summary-cart">
                                    <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <tbody>
                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td><i class="icon-rupee"></i><?php echo $cart_total; ?></td>
                                            </tr><!-- End .summary-subtotal -->
                                            <tr class="summary-shipping">
                                                <td>Shipping:</td>
                                                <td>&nbsp;</td>
                                            </tr>

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                                        <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                <td><i class="icon-rupee">0</td>
                                            </tr><!-- End .summary-shipping-row -->

                                            <!--<tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="standart-shipping" name="shipping" class="custom-control-input">
                                                        <label class="custom-control-label" for="standart-shipping">Standart:</label>
                                                    </div>
                                                </td>
                                                <td><i class="icon-rupee">100</td>
                                            </tr>

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
                                                        <label class="custom-control-label" for="express-shipping">Express:</label>
                                                    </div>
                                                </td>
                                                <td><i class="icon-rupee">200</td>
                                            </tr>-->
                                            <!--<tr class="summary-shipping-estimate">
                                                <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                                                <td>&nbsp;</td>
                                            </tr>--><!-- End .summary-shipping-estimate -->

                                            <tr class="summary-total">
                                                <td>Total:</td>
                                                <td><i class="icon-rupee"></i><?php echo $cart_total; ?></td>
                                            </tr><!-- End .summary-total -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    <a href="<?php echo base_url(); ?>user/checkout" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                                </div><!-- End .summary -->

                                <a href="<?php echo base_url(); ?>" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .cart -->
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
    .table th, .table thead th, .table td {
    color:black;
    }

</style>