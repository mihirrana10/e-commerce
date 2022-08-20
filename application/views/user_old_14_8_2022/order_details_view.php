<?php
$this->db->join('tbl_country','tbl_order.order_shipping_country_id=tbl_country.country_id');
$this->db->join('tbl_state','tbl_order.order_shipping_state_id=tbl_state.state_id');
$this->db->join('tbl_city','tbl_order.order_shipping_city_id=tbl_city.city_id');

$order_res=$this->db->get_where('tbl_order',array('tbl_order.order_id'=>$order_id));
$order_row=$order_res->result();
?><!DOCTYPE html>

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
                    <h1 class="page-title">My Account<span>Shop</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="dashboard">
                    <div class="container">
                        <div class="row">
                            <?php 
                            include_once('customer_left_menu.php');
                            ?>

                            <div class="col-md-10 col-lg-10">
                                <div class="row" style="padding:10px">
                                    <div class="col-md-4" style="text-align: left;color:black">
                                        <strong>Invoice # <?php echo $order_row[0]->order_id; ?></strong>
                                    </div>
                                    <div class="col-md-4" style="text-align: left;color:black">
                                        <strong>Order Status : <?php echo $order_row[0]->order_status; ?></strong>
                                    </div>
                                    
                                    <div class="col-md-4" style="text-align: right;color:black">
                                        <strong>Date : <?php echo $order_row[0]->order_date; ?></strong>
                                    </div>
                                </div>
                                <center>
                                    <table class="table table-responsive"  style="border: 1px solid #ebebeb;background-color:#ebebeb;padding:30px;border-radius: 10px;">
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
                                    <table class="table table-responsive" >
                                        <?php 
                                           $this->db->join('tbl_product_new','tbl_order_details.product_id=tbl_product_new.product_id');
                                           $order_detail_res=$this->db->get_where('tbl_order_details',array('order_id'=>$order_row[0]->order_id));

                                           foreach($order_detail_res->result() as $order_detail_row)
                                           {
                                               ?>
                                               <tr>
                                                            <td class="product-col">
                                                               <div class="product">
                                                                  <figure class="product-media">
                                                                     <a href="#">
                                                                     <img src="<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $order_detail_row->product_image; ?>" alt="Product image">
                                                                     </a>
                                                                  </figure>
                                                                  <h3 class="product-title">
                                                                     <a href="#"><?php echo $order_detail_row->product_name; ?></a>
                                                                     <br>
                                                                     <font style="font-size:13px">Unit Price : <i class="icon-rupee"></i><?php echo $order_detail_row->product_selling_price; ?>
                                                                        X Quantity : <?php echo $order_detail_row->product_qty; ?>
                                                                     </font>
                                                                  </h3>
                                                                  <!-- End .product-title -->
                                                               </div>
                                                               <!-- End .product -->
                                                            </td>
                                                            <td class="price-col"><i class="icon-rupee"></i><?php echo $order_detail_row->product_selling_price*$order_detail_row->product_qty; ?></td>
                                                            <!--<td class="remove-col"><a href="<?php echo base_url(); ?>user/remove_wishlist/<?php echo $order_detail_row->product_id; ?>"><button class="btn-remove"><i class="icon-close"></i></button></a>
                                                               </td>-->

                                                            <td class="action-col">
                                                                <a href="<?php echo base_url(); ?>user/product_review/<?php echo $order_detail_row->order_id; ?>/<?php echo $order_detail_row->product_id; ?>" class="btn btn-block btn-outline-primary-2"><i class="icon-comments"></i>Write a Review
                                                                </a>
                                                            </td>
                                                         </tr>
                                               <?php
                                            }
                                        ?>
                                    </table>
                                </center>
                                <center>
                                    <?php

                                    if($order_row[0]->order_is_returned=="Applied")
                                    {
                                        ?>
                                        <div class="alert alert-warning" role="alert"  style="width:100%"><i class="icon-close"></i> We received your request to Cancel Order, We will update You Soon.</div>
                                        <?php
                                    } 
                                    else if($order_row[0]->order_is_returned=="Approved")
                                    {
                                        ?>
                                        <div class="alert alert-success" role="alert"  style="width:100%"><i class="icon-close"></i> Your order has been cancelled.</div>
                                        <?php
                                    }
                                    else if($order_row[0]->order_is_returned=="Cancelled")
                                    {
                                        ?>
                                        <div class="alert alert-danger" role="alert"  style="width:100%"><i class="icon-close"></i> We cannot cancel your order, For More details contact sales@vimlaprints.com</div>
                                        <?php
                                    }
                                    else
                                    {
                                        if($order_row[0]->order_status =="New" || $order_row[0]->order_status=="Pending" || $order_row[0]->order_status=="Paid" )
                                        {
                                            ?>
                                            <div class="col-md-3"><a href="<?php echo base_url(); ?>user/cancel_order/<?php echo $order_row[0]->order_id; ?>" class="btn btn-block btn-outline-primary-2"><i class="icon-close"></i>Cancel Order</a></div>
                                            <?php

                                        }
                                    }
                                    ?>
                                    
                                </center>
                            </div><!-- End .col-lg-9 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .dashboard -->
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