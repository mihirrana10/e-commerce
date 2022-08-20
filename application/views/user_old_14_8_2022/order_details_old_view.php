<?php
$this->db->join('tbl_country','tbl_order.order_shipping_country_id=tbl_country.country_id');
$this->db->join('tbl_state','tbl_order.order_shipping_state_id=tbl_state.state_id');
$this->db->join('tbl_city','tbl_order.order_shipping_city_id=tbl_city.city_id');

$order_res=$this->db->get_where('tbl_order',array('tbl_order.order_id'=>$order_id));
$order_row=$order_res->result();
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
            <div class="page-header text-center" style="background-image: url('<?php echo base_url(); ?>template/user/assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Order<span>Details</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <center>
                        <table class="table table-wishlist table-mobile">
                            <thead>
                                <tr>
                                    <th width="33%"><strong>Shipping Address</strong></th>
                                    <th width="33%"><strong>Payment Method</strong></th>
                                    <th width="33%"><strong>Order Summary</strong></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>
                                                    <?php echo $order_row[0]->order_shipping_name; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $order_row[0]->order_shipping_address_line1; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $order_row[0]->order_shipping_address_line2; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $order_row[0]->city_name.", ".$order_row[0]->state_name." - ".
                                                    $order_row[0]->order_shipping_pincode; ?>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    <?php echo $order_row[0]->country_name; ?>
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                    <td style="text-align: top;vertical-align: top">
                                        <?php echo $order_row[0]->order_payment_type;
                                        ?>
                                    </td>
                                    <td>
                                        <table>
                                            <tr>
                                                <td >Items(s) Sub Total:</td>
                                                <td  class="number-display"><i class="icon-rupee"></i><?php echo $order_row[0]->order_amount; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping:</td>
                                                <td class="number-display"><i class="icon-rupee"></i><?php echo $order_row[0]->order_shipping_amount; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Total:</td>
                                                <td class="number-display"><i class="icon-rupee"></i><?php echo $order_row[0]->order_amount; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Discount:</td>
                                                <td class="number-display">- <i class="icon-rupee"></i><?php echo $order_row[0]->order_coupon_discount_amount; ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Grand Total:</strong></td>
                                                <td class="number-display"><strong><i class="icon-rupee"></i><?php echo $order_row[0]->order_final_amount; ?></strong></td>
                                            </tr>
                                            <style type="text/css">
                                                .number-display
                                                {
                                                    float:right;
                                                    margin-left: 20px
                                                }
                                            </style>
                                        </table>
                                    </td>
                                </tr>

                            </tbody>
                        </table><!-- End .table table-wishlist -->
                    </center>
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

</style>