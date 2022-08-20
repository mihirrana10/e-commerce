<?php 

$order_data_res=$this->db->get_where('tbl_order',array('order_id'=>$order_id));
$order_data_row=$order_data_res->result();

?>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<style>
body {
    font-family: 'Oswald';font-size: 15px;
    color:#333333;
}
th, td {
  /*padding: 15px;*/
  padding: 15px;
  text-align: left;
}
/*table, th, td {
  border: 1px solid black;
}*/

table{
  /*border: 1px solid #333333;*/
  border-radius: 2%;
}

</style>
<body style="font-family: 'Oswald';font-size: 15px;
    color:#333333;">
<center>
   
<table style="width: 70%;border-radius: 2%;">
   <tr>
      <td class="hero" style="background-image: url();background-size: 600px;height: 148px;background-repeat: no-repeat;padding: 15px;text-align: left;" valign="middle">
         <img src="https://lh5.googleusercontent.com/xzFO8CT7fknfVi8P05M-x7Ix6w9oodOuJ-X_LvQnXajj0RGI-6hPTLCc45vsKAcl8YrjABBo5ESPjMvd62z0-uJR50qSqND1Z9E1_luRAbQXrsJ7nFvkyYS-8rcX=w1600" width="100%">
      </td>
   </tr>
   <tr>
      <td style="padding: 15px;text-align: left;">
         <p>Hi..!!</p>
         <p>Your bag of joy, containing the products you picked will arrive soon, We know that you can't wait to get your hands on it, so we've begun prepping for it right away.</p><p>

         </p><p>Stay Happy!</p>
         <p>Vimla Prints</p>
      </td>
   </tr>
</table>
<table style="width: 70%;border-radius: 2%;">
      <tr>
         <td style="padding: 15px;text-align: left;">
            <div class="col-sm-4 invoice-col">
             <!--<b>Invoice #<?php echo $order_data_row[0]->order_invoice_number; ?></b><br>
             <br>-->
             <b>Order # </b> <?php echo $order_data_row[0]->order_id; ?><br>
             <!--<b>Payment Type : </b> <?php echo $order_data_row[0]->order_payment_type; ?><br>
             <b>Order Status : </b> <?php echo $order_data_row[0]->order_status; ?><br>-->
             
             <!--<b>Account:</b> 968-34567-->
            </div>
         </td>
      </tr>
</table>
<table style="width:70%;/*width:800px*/;margin-bottom: 20px;border-radius: 2%;">
   <thead>
      <th style="background-color: #95A5A6;font-size: 20px;padding: 15px;text-align: left;">
         <a href="#" style="text-decoration: none;color:#333333;float: left;text-align: left">Billing Information</a>
      </th>
      <th style="background-color: #95A5A6;font-size: 20px;padding: 15px;text-align: left;">
         <a href="#" style="text-decoration: none;color:#333333;float: left;text-align: left;">Shipping Information</a>
      </th>
   </thead>
   <tr>
      <td style="width: 50%;padding: 15px;text-align: left;">
         <!--<address>-->
            <strong><?php echo $order_data_row[0]->order_billing_name; ?>
            <?php 
            if(isset($order_data_row[0]->order_billing_company_name))
            {
              echo " - ( ".$order_data_row[0]->order_billing_company_name." )";
            }

            $bill_city_res=$this->db->get_where('tbl_city',array('city_id'=>$order_data_row[0]->order_billing_city_id));
            $bill_city_row=$bill_city_res->result();   
            $bill_state_res=$this->db->get_where('tbl_state',array('state_id'=>$order_data_row[0]->order_billing_state_id));
            $bill_state_row=$bill_state_res->result();            
            $bill_country_res=$this->db->get_where('tbl_country',array('country_id'=>$order_data_row[0]->order_billing_country_id));
            $bill_country_row=$bill_country_res->result();            
            
            ?>
            
            </strong><br>
            <?php echo $order_data_row[0]->order_billing_address_line1; ?><br>
            <?php echo $order_data_row[0]->order_billing_address_line2; ?><br>
            <?php echo $bill_city_row[0]->city_name." - ".$order_data_row[0]->order_billing_pincode.", ".$bill_state_row[0]->state_name.", ".$bill_country_row[0]->country_name; ?><br>
          
            Phone: <?php echo $order_data_row[0]->order_billing_phone_number; ?><br>
            Email: <?php echo $order_data_row[0]->order_billing_email; ?>
         <!--</address>-->
      </td>
      <td style="width: 50%;padding: 15px;text-align: left;">
         <!--<address>-->
            <strong><?php echo $order_data_row[0]->order_shipping_name; ?>
            <?php 
            if(isset($order_data_row[0]->order_shipping_company_name))
            {
              echo " - ( ".$order_data_row[0]->order_shipping_company_name." )";
            }

            $ship_city_res=$this->db->get_where('tbl_city',array('city_id'=>$order_data_row[0]->order_shipping_city_id));
            $ship_city_row=$ship_city_res->result();   
            $ship_state_res=$this->db->get_where('tbl_state',array('state_id'=>$order_data_row[0]->order_shipping_state_id));
            $ship_state_row=$ship_state_res->result();            
            $ship_country_res=$this->db->get_where('tbl_country',array('country_id'=>$order_data_row[0]->order_shipping_country_id));
            $ship_country_row=$ship_country_res->result();   
            ?>
              
            </strong><br>
            <?php echo $order_data_row[0]->order_shipping_address_line1; ?><br>
            <?php echo $order_data_row[0]->order_shipping_address_line2; ?><br>
            <?php echo $ship_city_row[0]->city_name." - ".$order_data_row[0]->order_shipping_pincode.", ".$ship_state_row[0]->state_name.", ".$ship_country_row[0]->country_name; ?><br>
          
            Phone: <?php echo $order_data_row[0]->order_shipping_phone_number; ?><br>
            Email: <?php echo $order_data_row[0]->order_shipping_email; ?>
         <!--</address>-->
      </td>
   </tr>
</table>
<table style="width:70%;/*width:800px*/;border: 1px solid #333333;border-radius: 2%;">
  
                                                      
                                                      <tbody>
                                                         <?php 
                                                            $this->db->join('tbl_product_new','tbl_order_details.product_id=tbl_product_new.product_id');
                                                            $order_detail_res=$this->db->get_where('tbl_order_details',array('order_id'=>$order_id));
                                                            $total=0;
                                                            foreach($order_detail_res->result() as $order_detail_row)
                                                            {
                                                            ?>
                                                         <tr>
                                                            <td class="product-col" style="padding: 15px;text-align: left;">
                                                               <div class="product">
                                                                  <figure class="product-media">
                                                                     <a href="#">
                                                                     <img src="https://www.vimlaprints.com/files/admin/product/thumb/&lt;?php echo $order_detail_row-&gt;product_image; ?&gt;" alt="Product image">
                                                                     </a>
                                                                  </figure>
                                                                  
                                                                  <!-- End .product-title -->
                                                               </div>
                                                               <!-- End .product -->
                                                            </td>
                                                            <td style="padding: 15px;text-align: left;">
                                                               <h3 class="product-title">
                                                                     <a href="#" style="text-decoration:none;color:#333333"><?php echo $order_detail_row->product_name; ?></a>
                                                                     <br>
                                                                     <font style="font-size:14px;margin-top:20px;font-weight: 500">Unit Price : Rs. <i class="icon-rupee"></i><?php echo $order_detail_row->product_selling_price; ?>
                                                                        <font style="text-transform: lowercase;">X</font> Quantity : <?php echo $order_detail_row->product_qty; ?>
                                                                     </font>
                                                                  </h3>
                                                            </td>
                                                            <td class="price-col" style="vertical-align: top;padding-top: 70px;font-size: 20px;padding: 15px;text-align: left;"><i class="icon-rupee"></i>Rs. <?php echo $order_detail_row->product_selling_price*$order_detail_row->product_qty; ?></td>
                                                            <!--<td class="remove-col"><a href="<?php echo base_url(); ?>user/remove_wishlist/<?php echo $order_detail_row->product_id; ?>"><button class="btn-remove"><i class="icon-close"></i></button></a>
                                                               </td>-->
                                                         </tr>
                                                         <?php
                                                            }

                                                            ?>

                                                            <!--<tr >
                                                               <td colspan="2">
                                                                  <h3 class="product-title">
                                                                        <a href="#" style="text-decoration:none;color:#333333">Subtotal : </a>
                                                                     </h3>
                                                               </td>
                                                               <td class="price-col" style="vertical-align: top;padding-top:70px;font-size:20px"><i class="icon-rupee"></i>Rs. <?php echo $order_data_row[0]->order_amount; ?></td>
                                                               
                                                            </tr>-->
                                                            <?php 

                                                            if(trim($order_data_row[0]->order_notes)!="")
                                                            {
                                                            ?>
                                                         <tr>
                                                            <td style="padding: 15px;text-align: left;">
                                                               <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;margin-left: 40px">
                                                                  <font style="font-size:20px;font-weight: bold">Notes : </font><?php echo $order_data_row[0]->order_notes; ?>
                                                               </p>
                                                            </td>
                                                         </tr>
                                                         <?php 
                                                            }
                                                         ?>
                                                      </tbody>
                                                      
</table>
<h3>
<table class="table" style="width:70%;/*width:800px*/;border-radius: 2%;">
              <tbody><tr>
                <th style="width: 25%;float: right;padding: 5px;font-size: 20px;text-align: left;"><strong><a href="#" style="text-decoration:none;color:#333333">Subtotal : </a></strong></th>
                <td style="padding:5px;text-align:right;padding-right:50px;font-size:20px;"><i class="fa fa-inr"></i> Rs. <?php echo $order_data_row[0]->order_amount; ?></td>
              </tr>
              <?php 
              //echo $order_data_row[0]->order_coupon_id;
              if($order_data_row[0]->order_coupon_id!=0)
              {
                $coupon_res=$this->db->get_where('tbl_coupon',array('coupon_id'=>$order_data_row[0]->order_coupon_id));
                $coupon_row=$coupon_res->result();
                ?>
                 <tr>
                  <th style="width: 25%;float: right;padding: 5px;font-size: 20px;text-align: left;"><strong><a href="#" style="text-decoration:none;color:#333333">Coupon Code</a></strong>
                    <br>
                    <font style="font-size:12px">
                     <?php echo $coupon_row[0]->coupon_code." - " ;?>
                    <?php 

                    echo " ( ";
                    $discount_amount=0;
                    if($coupon_row[0]->coupon_value_on=="%")
                    {
                      echo $coupon_row[0]->coupon_value."% off";
                    }
                    else if($coupon_row[0]->coupon_value_on=="Flat")
                    {
                      echo "Flat ".$coupon_row[0]->coupon_value." off";
                    }
                    ?>

                    
                    <?php 
                    echo " ) ";
                    ?>
                    </font>
                  </th>
                  <td style="padding:5px;text-align: right;padding-right:50px;font-size:20px;"><i class="fa fa-inr"></i> - Rs. <?php echo $order_data_row[0]->order_coupon_discount_amount; ?></td>
                 </tr>
                <?php
              }
              ?>
             
              <tr>
                <th style="width: 25%;float: right;padding: 5px;font-size: 20px;text-align: left;"><strong><a href="#" style="text-decoration:none;color:#333333">Shipping : </a></strong></th>
                <td style="padding:5px;text-align: right;padding-right:50px;font-size:20px;"><i class="fa fa-inr"></i> + Rs. <?php echo $order_data_row[0]->order_shipping_amount; ?></td>
              </tr>
              <?php 
              if($order_data_row[0]->order_giftbox_charge!=0)
              {
                ?>
                <tr>
                  <th style="color: red;width: 25%;float: right;padding: 5px;font-size: 20px;text-align: left;"><i class="fa fa-gift"></i><strong>
                  <a href="#" style="text-decoration:none;color:#333333"> Gift Box Packing Charge :</a></strong></th>
                  <td style="padding:5px;text-align: right;padding-right:50px;font-size:20px;"><i class="fa fa-inr"></i> + Rs. <?php echo $order_data_row[0]->order_giftbox_charge; ?></td>
                </tr>
                <?php
              }
              ?>
              <?php 
              if($order_data_row[0]->order_cod_charge!=0)
              {
                ?>
                <tr>
                  <th style="color: red;width: 25%;float: right;padding: 5px;font-size: 20px;text-align: left;"><i class="fa fa-money"></i><strong><a href="#" style="text-decoration:none;color:#333333"> COD Charge : </a></strong></th>
                  <td style="padding:5px;text-align: right;padding-right:50px;font-size:20px;"><i class="fa fa-inr"></i> + Rs. <?php echo $order_data_row[0]->order_cod_charge; ?></td>
                </tr>
                <?php
              }
              ?>
              <tr>
                <th style="width: 40%;float: right;padding: 5px;font-size: 20px;text-align: left;"><strong></strong></th></tr></tbody></table></h3><h3>Final Total : </h3>
                <td style="padding:5px;font-size:20px;text-align: right;padding-right:50px"><i class="fa fa-inr"></i> Rs. <?php echo $order_data_row[0]->order_final_amount; ?></td>
              
            

<table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:70%;/*width:800px*/;border-radius: 2%;background: #95A5A6">
   <tbody>
      <!--<tr>
         <td class="bg_black footer email-section" valign="middle">
         <table>
            <tbody>
               <tr>
                  <td style="padding-top: 20px;" valign="top" width="33.333%">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                     <tbody>
                        <tr>
                           <td style="text-align: left; padding-right: 10px;">
                           <h3 class="heading">Vimla Prints</h3>

                           <p>Biggest brand and manufacturer of the Uniform Sarees in Surat as well Gujarat and in India</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
                  <td style="padding-top: 20px;" valign="top" width="33.333%">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                     <tbody>
                        <tr>
                           <td style="text-align: left; padding-left: 5px; padding-right: 5px;">
                           <h3 class="heading">Contact Info</h3>

                           <ul>
                              <li><span class="text">O - 1266, Surat Textile Market Surat, Gujarat, India - 395001</span></li>
                              <li><span class="text">+91 97276 80689</span></li>
                           </ul>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
                  <td style="padding-top: 20px;" valign="top" width="33.333%">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                     <tbody>
                        <tr>
                           <td style="text-align: left; padding-left: 10px;">
                           <h3 class="heading">Useful Links</h3>

                           <ul>
                              <li><a href="#" style="text-decoration: none;color: #333333">Account</a></li>
                              <li><a href="#" style="text-decoration: none;color: #333333">Order</a></li>
                              <li><a href="#" style="text-decoration: none;color: #333333">About Us</a></li>
                              <li><a href="#" style="text-decoration: none;color: #333333">Contact Us</a></li>
                           </ul>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
               </tr>
            </tbody>
         </table>
         </td>
      </tr>-->
      <tr>
         <td class="bg_black footer email-section" valign="middle" style="padding: 15px;text-align: left;">
         <table style="border-radius: 2%;">
            <tbody>
               <tr>
                  <td valign="top" width="33.333%" style="padding: 15px;text-align: left;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border-radius: 2%;">
                     <tbody>
                        <tr>
                           <td style="text-align: left;padding-right: 10px;padding: 15px;">
                           <center><p>&copy; 2020 Vimla Prints. All Rights Reserved</p></center>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
                  
               </tr>
               <tr>
                  <td valign="top" width="33.333%" style="padding: 15px;text-align: left;">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border-radius: 2%;">
                     <tbody>
                        <tr>
                           <td style="text-align: left;padding-right: 10px;padding: 15px;">
                           <center><p><a href="#" style="color: rgba(255,255,255,.4);">Unsubcribe</a></p></center>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  </td>
                  
               </tr>
            </tbody>
         </table>
         </td>
      </tr>
   </tbody>
</table>

</center>
</body>