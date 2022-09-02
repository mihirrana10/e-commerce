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
               </div>
               <!-- End .container -->
            </div>
            <!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
               <div class="container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Shop</a></li>
                     <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
                        include_once('customer_left_menu.php');
                        ?>
                        <!-- End .col-lg-3 -->
                        <div class="col-md-10 col-lg-10">
                           <?php 
                               $this->db->order_by('order_id','desc');
                              $order_history_res = $this->db->get_where('tbl_order',array('customer_id'=>$_SESSION["customer_id"]));
                              $cnt=1;
                              foreach($order_history_res->result() as $order_history_row)
                              {
                           ?>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="accordion" id="accordion-<?php echo $cnt; ?>">
                                          <div class="card">
                                             <div class="card-header panel-heading" id="heading-<?php echo $cnt; ?>">
                                                <h2 class="card-title" style="font-size:15px">
                                                   <a role="button" data-toggle="collapse" href="#collapse-<?php echo $cnt; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $cnt; ?>" class="collapsed" >
                                                      <div class="row">
                                                         <div class="col-md-3 col-sm-3 col-lg-3" >
                                                            Order Placed<br>
                                                            <?php //echo $order_history_row->order_date; 
                                                               $yrdata= strtotime($order_history_row->order_date);
                                                               echo date('d M, Y', $yrdata);
                                                               ?>
                                                         </div>
                                                         <div class="col-md-3 col-sm-3 col-lg-3" >
                                                            Total<br><i class="icon-rupee"></i><?php echo $order_history_row->order_final_amount; ?>
                                                         </div>
                                                         <div class="col-md-3  col-sm-3 col-lg-3" style="text-align:right">
                                                            Order # <?php echo $order_history_row->order_id; ?>
                                                         <!--   <p style='cursor:pointer' onclick="order_details(<?php echo $order_history_row->order_id; ?>);">order Details </p>-->
                                                               <button type="submit" style="margin-left:20px" class="btn btn-outline-primary-2 btn-minwidth-sm" onclick="order_details(<?php echo $order_history_row->order_id; ?>);">
                                                                  <span>ORDER DETAILS</span>
                                                                  <i class="icon-long-arrow-right"></i>
                                                               </button>
                                                         </div>

                                                         <!--<div class="col-md-3  col-sm-3 col-lg-3" style="text-align:right">
                                                            <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm" onclick="order_details(<?php echo $order_history_row->order_id; ?>);">
                                                                  <span>ORDER DETAILS</span>
                                                                  <i class="icon-long-arrow-right"></i>
                                                              </button>
                                                         </div>-->
                                                         
                                                            <script type="text/javascript">
                                                                function order_details(or_id)
                                                                {
                                                                    window.location="<?php echo base_url(); ?>user/order_details/"+or_id;
                                                                }
                                                            </script>
                                                                                                                                
                                                      </div>
                                                   </a>
                                                </h2>
                                             </div>
                                             <!-- End .card-header -->
                                             <div id="collapse-<?php echo $cnt; ?>" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-<?php echo $cnt; ?>" style="border:1px #e5e5e5 solid">
                                                <div class="card-body">
                                                   <table class="table table-wishlist table-mobile">
                                                      
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
                                                         </tr>
                                                         <?php
                                                            }
                                                            ?>
                                                      </tbody>
                                                      </thead>
                                                   </table>
                                                </div>
                                                <!-- End .card-body -->
                                             </div>
                                             <!-- End .collapse -->
                                          </div>
                                          <!-- End .card -->
                                       </div>
                                       <!-- End .accordion -->
                                    </div>
                                    <!-- End .col-md-6 -->
                                 </div>
                              <?php
                              $cnt++;
                              }
                              
                              
                              
                              /*$this->db->join('tbl_product_new','tbl_wishlist.product_id=tbl_product_new.product_id');
                              $wishlist_res=$this->db->get_where('tbl_wishlist',array('customer_id'=>$_SESSION["customer_id"]));
                              */
                              
                              
                              //$this->db->join('tbl_order_details','tbl_order.order_id=tbl_order_details.order_id');
                              
                              //$this->db->join('tbl_product_new','tbl_order_details.product_id=tbl_product_new.product_id');
                              
                              /*$order_history_res = $this->db->get_where('tbl_order',array('customer_id'=>$_SESSION["customer_id"]));
                              
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
                                                      </h3>
                                                      <!-- End .product-title -->
                                                   </div>
                                                   <!-- End .product -->
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
                              */
                              ?>
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
