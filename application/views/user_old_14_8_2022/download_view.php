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
                    <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="cart">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                    
                                    <table class="table table-cart table-mobile">
                                        <thead>
                                            <tr>
                                                <th>Catalogue</th>
                                                <th>Download</th>
                                                <th>View</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php 
                                            $this->db->order_by('catalogue_sort_order','asc');
                                            $catalogue_res=$this->db->get_where('tbl_catalogue',array('catalogue_status'=>'Active'));

                                            foreach($catalogue_res->result() as $catalogue_row)
                                            {
                                                ?>
                                                <tr>
                                                    <td class="product-col" style="width: 50%">
                                                        <div class="product">
                                                            <figure class="product-media" style="max-width: 160px;">
                                                                <a href="#">
                                                                    <img src="<?php echo base_url(); ?>files/admin/catalogue/thumb/<?php echo $catalogue_row->catalogue_image; ?>" height="100px" alt="Product image">
                                                                </a>
                                                            </figure>

                                                            <h3 class="product-title">
                                                                <a href="#"><?php echo $catalogue_row->catalogue_name; ?></a>
                                                            </h3><!-- End .product-title -->
                                                        </div><!-- End .product -->
                                                    </td>
                                                    <td class="product_-col" style="width: 20%">

                                                        <div class="input-group-append">
                                                            <a href="<?php echo base_url(); ?>files/admin/catalogue/<?php echo $catalogue_row->catalogue_pdf; ?>" target="_blank" class="btn btn-outline-primary-2"><i class="icon-arrow-down"></i> Download</a>
                                                        </div>
                                                        <!--<a href=#><i class="icon icon-arrow-down" style="font-size:30px;font-weight: bold"></i></a>-->
                                                    </td>
                                                    <td class="product_-col" style="width:20%">
                                                        <div class="input-group-append">
                                                            <a href="<?php echo base_url(); ?>user/magazine/<?php echo $catalogue_row->catalogue_id; ?>" class="btn btn-outline-primary-2" target="_blank"><i class="icon-eye"></i> View</a>
                                                        </div>
                                                        <!--<a href=#><i class="icon icon-eye" style="font-size:30px;font-weight: bold"></i></a>-->
                                                    </td>
                                                   
                                                </tr>
                                                <?php

                                                
                                            }
                                            ?>
                                        </tbody>
                                    </table><!-- End .table table-wishlist -->
                                    
                                
                                
                            </div><!-- End .col-lg-9 -->
                            
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