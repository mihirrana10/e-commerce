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
                            <aside class="col-md-3 col-lg-3">
                                <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads" role="tab" aria-controls="tab-downloads" aria-selected="false">Downloads</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address" role="tab" aria-controls="tab-address" aria-selected="false">Adresses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Sign Out</a>
                                    </li>
                                </ul>
                            </aside><!-- End .col-lg-3 -->

                            <div class="col-md-9 col-lg-9">
                                <center>
                                                                <?php 
                            /*$this->db->join('tbl_product_new','tbl_wishlist.product_id=tbl_product_new.product_id');
                            $wishlist_res=$this->db->get_where('tbl_wishlist',array('customer_id'=>$_SESSION["customer_id"]));
                            */
                           

                            //$this->db->join('tbl_order_details','tbl_order.order_id=tbl_order_details.order_id');

                            //$this->db->join('tbl_product_new','tbl_order_details.product_id=tbl_product_new.product_id');

                            $order_history_res = $this->db->get_where('tbl_order',array('customer_id'=>$_SESSION["customer_id"]));

                            foreach($order_history_res->result() as $order_history_row)
                            {
                                ?>
                                <table class="table table-responsive" style="border: 1px solid #333;padding:30px;border-radius: 10px">
                                    <tbody >
                                        <tr>
                                            <td >
                                                <table>
                                                    <tr>
                                                        <td style="width: 40%"><strong>ORDER PLACED</strong><br><?php echo $order_history_row->order_date; ?>
                                                        </td>
                                                        <td style="width: 20%"><strong>TOTAL</strong><br><i class="icon-rupee"></i><?php echo $order_history_row->order_final_amount; ?>
                                                        </td>
                                                        <td style="width: 40%"><strong>ORDER # <?php echo $order_history_row->order_invoice_number; ?></strong><br><a href='<?php echo base_url(); ?>user/order_details/<?php echo $order_history_row->order_id; ?>'>Order Details</a> | 
                                                            <a href=#>Invoice</a>
                                                        </td>
                                                    </tr>


                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table class="table table-wishlist table-mobile">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Price</th>
                                                            <!--<th>Stock Status</th>
                                                            <th></th>
                                                            <th></th>-->
                                                        </tr>
                                                        <tbody>
                                                        <?php 
                                                        $this->db->join('tbl_product_new','tbl_order_details.product_id=tbl_product_new.product_id');
                                                        $order_detail_res=$this->db->get_where('tbl_order_details',array('order_id'=>$order_history_row->order_id));
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
                                                                        Unit Price : <i class="icon-rupee"></i><?php echo $order_detail_row->product_selling_price; ?>
                                                                         X Quantity : <i class="icon-rupee"></i><?php echo $order_detail_row->product_qty; ?>
                                                                    </h3><!-- End .product-title -->
                                                                </div><!-- End .product -->
                                                            </td>
                                                            <td class="price-col"><i class="icon-rupee"></i><?php echo $order_detail_row->product_selling_price*$order_detail_row->product_qty; ?></td>
                                                            
                                                            <!--<td class="remove-col"><a href="<?php echo base_url(); ?>user/remove_wishlist/<?php echo $order_detail_row->product_id; ?>"><button class="btn-remove"><i class="icon-close"></i></button></a>
                                                            </td>-->
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                        </tbody>
                                                    </thead>
                                                </table>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                                <?php
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