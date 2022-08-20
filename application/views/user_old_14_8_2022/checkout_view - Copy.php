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
                    <h1 class="page-title">Checkout<span>Shop</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="checkout">
                    <div class="container">
                        <?php
                            if(isset($coupon_msg) && trim($coupon_msg)!="") 
                            {
                                echo $coupon_msg;
                            }
                        ?>
                        <div class="checkout-discount">

                            <form action="<?php echo base_url(); ?>user/apply_coupon" method="post">
                                <input type="text" class="form-control"  
                                id="checkout-discount-input" name="checkout-discount-input">
                                <label id="lbl_coupon" for="checkout-discount-input" class="text-truncate" style="top: 25%;">Have a coupon? <span>Click here to enter your code</span></label>
                                     <button type="submit" class="btn btn-primary">Apply</button>
                                
                            </form>
                            
                        </div><!-- End .checkout-discount -->
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-7">
                                    <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name *</label>
                                                <input type="text" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Last Name *</label>
                                                <input type="text" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>Company Name (Optional)</label>
                                        <input type="text" class="form-control">

                                        <label>Country *</label>
                                        <input type="text" class="form-control" required>

                                        <label>Street address *</label>
                                        <input type="text" class="form-control" placeholder="House number and Street name" required>
                                        <input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." required>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Town / City *</label>
                                                <input type="text" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>State / County *</label>
                                                <input type="text" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Postcode / ZIP *</label>
                                                <input type="text" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Phone *</label>
                                                <input type="tel" class="form-control" required>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>Email address *</label>
                                        <input type="email" class="form-control" required>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkout-create-acc">
                                            <label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
                                        </div><!-- End .custom-checkbox -->

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkout-diff-address">
                                            <label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
                                        </div><!-- End .custom-checkbox -->

                                        <label>Order notes (optional)</label>
                                        <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                </div><!-- End .col-lg-9 -->
                                <aside class="col-lg-5">
                                    <div class="summary">
                                        <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                        <table class="table table-summary">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" width="70%">Product</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php 
                                                $cart_total=0;
                                        
                                                $this->db->join('tbl_product_new','tbl_cart.product_id=tbl_product_new.product_id');
                                                $cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id()));
                                                foreach($cart_res->result() as $cart_row)
                                                {
                                                ?>
                                                <tr>
                                                    <td><img src='<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $cart_row->product_image; ?>'style="height:80px"></td>
                                                    <td><a href="#"><?php echo $cart_row->product_name; ?></a><br>
                                                        <p style="font-size:12px">
                                                        Unit Price : <i class="icon-rupee"></i><?php echo $cart_row->product_selling_price; ?></p>
                                                    </td>
                                                    <td><center>x <?php echo $cart_row->cart_qty; ?></center></td>
                                                    <td><i class="icon-rupee"></i><?php echo $cart_row->cart_qty*$cart_row->product_selling_price; ?></td>
                                                </tr>
                                                <?php 
                                                $cart_total=$cart_total+($cart_row->cart_qty *
                                                 $cart_row->product_selling_price);
                                                }
                                                ?>

                                               
                                                <tr class="summary-subtotal">
                                                    <td  colspan="3">Subtotal:</td>
                                                    <td><i class="icon-rupee"></i><?php echo $cart_total; ?></td>
                                                </tr><!-- End .summary-subtotal -->
                                                <tr class="summary-subtotal">
                                                    <td  colspan="3"><!--Coupon Applied:<br>-->
                                                        <p style="font-size:12px">
                                                        Coupon Code : <?php echo $_SESSION["coupon_code"]; ?></p>
                                                        
                                                        <?php 
                                                        if($_SESSION["coupon_on"]=="%")
                                                        {
                                                            ?>
                                                            <p style="font-size:12px">
                                                            <?php echo $_SESSION["coupon_value"]; ?>% OFF</p>
                                                            <?php
                                                        }
                                                        else if($_SESSION["coupon_on"]=="Flat")
                                                        {
                                                            ?>
                                                            <p style="font-size:12px">
                                                            Flat <i class="icon-rupee"></i><?php echo $_SESSION["coupon_value"]; ?> OFF</p>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><i class="icon-rupee"></i><?php echo $cart_total; ?></td>
                                                </tr>
                                                <tr>
                                                    <td  colspan="3">Shipping:</td>
                                                    <td>Free shipping</td>
                                                </tr>
                                                <tr class="summary-total">
                                                    <td  colspan="3">Total:</td>
                                                    <td><i class="icon-rupee"></i><?php echo $cart_total; ?></td>
                                                </tr><!-- End .summary-total -->
                                            </tbody>
                                        </table><!-- End .table table-summary -->

                                        <div class="accordion-summary" id="accordion-payment">
                                            <div class="card">
                                                <div class="card-header" id="heading-1">
                                                    <h2 class="card-title">
                                                        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                            Direct bank transfer
                                                        </a>
                                                    </h2>
                                                </div><!-- End .card-header -->
                                                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                                    </div><!-- End .card-body -->
                                                </div><!-- End .collapse -->
                                            </div><!-- End .card -->

                                            <div class="card">
                                                <div class="card-header" id="heading-2">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                            Check payments
                                                        </a>
                                                    </h2>
                                                </div><!-- End .card-header -->
                                                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. 
                                                    </div><!-- End .card-body -->
                                                </div><!-- End .collapse -->
                                            </div><!-- End .card -->

                                            <div class="card">
                                                <div class="card-header" id="heading-3">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                            Cash on delivery
                                                        </a>
                                                    </h2>
                                                </div><!-- End .card-header -->
                                                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                                    <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
                                                    </div><!-- End .card-body -->
                                                </div><!-- End .collapse -->
                                            </div><!-- End .card -->

                                            <div class="card">
                                                <div class="card-header" id="heading-4">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                            PayPal <small class="float-right paypal-link">What is PayPal?</small>
                                                        </a>
                                                    </h2>
                                                </div><!-- End .card-header -->
                                                <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                                    </div><!-- End .card-body -->
                                                </div><!-- End .collapse -->
                                            </div><!-- End .card -->

                                            <div class="card">
                                                <div class="card-header" id="heading-5">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                            Credit Card (Stripe)
                                                            <img src="assets/images/payments-summary.png" alt="payments cards">
                                                        </a>
                                                    </h2>
                                                </div><!-- End .card-header -->
                                                <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                                    <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                                    </div><!-- End .card-body -->
                                                </div><!-- End .collapse -->
                                            </div><!-- End .card -->
                                        </div><!-- End .accordion -->

                                        <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                            <span class="btn-text">Place Order</span>
                                            <span class="btn-hover-text">Proceed to Checkout</span>
                                        </button>
                                    </div><!-- End .summary -->
                                </aside><!-- End .col-lg-3 -->
                            </div><!-- End .row -->
                        </form>
                    </div><!-- End .container -->
                </div><!-- End .checkout -->
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
    label 
    {
        color: black;
    }
</style>


<script>
     // Checkout discount input - toggle label if input is empty etc...
    $('#checkout-discount-input').on('focus', function () {
        // Hide label on focus
        $(this).parent('form').find('label').css('opacity', 0);
    }).on('blur', function () {
        // Check if input is empty / toggle label
        var $this = $(this);

        if( $this.val().length !== 0 ) {
            $this.parent('form').find('label').css('opacity', 0);
        } else {
            $this.parent('form').find('label').css('opacity', 1);
        }
    });

</script>
<style type="text/css">
    .alert-danger {
    color: 
#721c24;
background-color:
#f8d7da;
border-color:
    #f5c6cb;
}
</style>