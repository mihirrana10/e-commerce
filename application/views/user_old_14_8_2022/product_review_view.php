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
      <script src="<?php echo base_url(); ?>template/user/assets/js/jquery.min.js"></script>
   </head>
   <body>
      <div class="page-wrapper">
      <?php 
         include_once('header.php');
         ?>
      <main class="main">
         <!--<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Call to Action<span>Elements</span></h1>
            </div>
            </div>-->
         <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
               <!--<ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="elements-list.html">Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Call to Action</li>
                  </ol>-->
            </div>
         </nav>
         <div class="page-content pb-0">
            <div class="container">
               <?php 
               if(isset($msg))
               {
                echo $msg;
               }
               ?>
               <h2 style="padding-bottom:20px;padding-top:15px">Create a Review</h2>
               <div class="row">
                  <div class="col-lg-12">
                     
                     <form action="<?php echo base_url(); ?>user/product_review/<?php echo $order_id; ?>/<?php echo $pr_id; ?>/submit" method="post" class="contact-form mb-2">
                        <div class="row">
                           <div class="col-sm-1">
                    <?php 
                    $product_res=$this->db->get_where('tbl_product_new',array('product_id'=>$pr_id));
                    $product_row=$product_res->result();

                              ?>
                              <img src='<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $product_row[0]->product_image; ?>' style="padding-bottom: 20px">
                           </div>
                           <div class="col-sm-11" style="text-align: left;font-size:20px;color:#333;">
                               <?php echo $product_row[0]->product_name; ?>
                           
                           </div>
                           <!-- End .col-sm-4 -->
                        </div>
                        <?php 
                        if(!isset($msg))
                        {
                        ?>
                        <div class="row star-rating" style="padding-bottom: 20px">
                            <div class="col-sm-7">
                            <h5>Overall Rating</h5>
                             <span class="fa fa-star-o" data-rating="1"></span>
                             <span class="fa fa-star-o" data-rating="2"></span>
                             <span class="fa fa-star-o" data-rating="3"></span>
                             <span class="fa fa-star-o" data-rating="4"></span>
                             <span class="fa fa-star-o" data-rating="5"></span>
                             <input type="hidden" name="txt_rating" name="txt_rating" class="rating-value" value="2.56">
                             <input type="hidden" id="txt_product_id" name="txt_product_id" 
                             value="<?php echo $pr_id; ?>">
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-7">
                              <h5>Add a headline</h5>
                              <label for="cname" class="sr-only">Add a headline</label>
                              <input type="text" class="form-control" id="txt_headline" name="txt_headline" placeholder="Enter headline" required>
                           </div>
                           <!-- End .col-sm-4 -->
                        </div>
                        <!-- End .row -->
                        <div class="row">
                           <div class="col-sm-7">
                              <h5>Full Review</h5>
                              <label for="cname" class="sr-only">Full Review</label>
                              <textarea id="txt_full_review" name="txt_full_review" class="form-control"  placeholder="Enter Full Review"></textarea>
                           </div>
                           <!-- End .col-sm-4 -->
                        </div>
                        <div class="text-center">
                           <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                           <span>SUBMIT REVIEW</span>
                           <i class="icon-long-arrow-right"></i>
                           </button>
                        </div>
                        <!-- End .text-center -->
                        <?php 
                        }
                        ?>
                     </form>
                  </div>
               </div>
               <!--<div class="row">
                  <div class="col-lg-12">
                    <div class="star-rating">
                      <span class="fa icon-star" data-rating="1"></span>
                      <span class="fa icon-star" data-rating="2"></span>
                      <span class="fa icon-star" data-rating="3"></span>
                      <span class="fa icon-star" data-rating="4"></span>
                      <span class="fa icon-star" data-rating="5"></span>
                      <input type="hidden" name="whatever2" class="rating-value" value="1.9">
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-lg-12">
                    <div class="star-rating">
                      <span class="fa icon-star" data-rating="1"></span>
                      <span class="fa icon-star" data-rating="2"></span>
                      <span class="fa icon-star" data-rating="3"></span>
                      <span class="fa icon-star" data-rating="4"></span>
                      <span class="fa icon-star" data-rating="5"></span>
                      <input type="hidden" name="whatever3" class="rating-value" value="4.1">
                    </div>
                  </div>
                  </div>
                  </div>-->
               <style type="text/css">
                  .star-rating {
                  line-height:32px;
                  font-size:3em;
                  }
                  .clr_yellow
                  {
                  color:#c33;
                  }
               </style>
               <script type="text/javascript">
                  var star_rating = $('.star-rating .fa');
                  
                      var SetRatingStar = function() {
                        return star_rating.each(function() {
                          if (parseInt(star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                            return $(this).removeClass('icon-star').addClass('icon-star clr_yellow');
                          } else {
                            return $(this).removeClass('icon-star clr_yellow').addClass('icon-star');
                          }
                        });
                      };
                  
                      star_rating.on('click', function() {
                      star_rating.siblings('input.rating-value').val($(this).data('rating'));
                        return SetRatingStar();
                      });
                  
                      SetRatingStar();
                      $(document).ready(function() {
                  
                      });
               </script>
               <!-- End .container -->
            </div>
            <!-- End .page-content -->
      </main>
      <!-- End .main -->
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
<script type = "text/javascript" >
   var controller = "ajax/get_category";
   var base_url = "<?php echo base_url(); ?>";
   
   function getXMLHTTP() { //fuction to return the xml http object
   var xmlhttp = false;
   try {
     xmlhttp = new XMLHttpRequest();
   } catch (e) {
     try {
       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
     } catch (e) {
       try {
         xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
       } catch (e) {
         xmlhttp = false;
       }
     }
   }
   
   return xmlhttp;
   }
   
   function get_state(country_id) {
   var strURL = base_url + "user_ajax/get_state/" + country_id;
   //alert(strURL);
   var req = getXMLHTTP();
   if (req) {
     req.onreadystatechange = function () {
       if (req.readyState == 4) {
         // only if "OK"
         if (req.status == 200) {
           //alert(req.responseText);                      
           document.getElementById("cmb_state").innerHTML = req.responseText;
           document.getElementById("cmb_city").innerHTML = "<option value='0'>--Select--</option>";
   
           $('.select2').select2()
   
         } else {
           alert("There was a problem while using XMLHTTP:\n" + req.statusText);
         }
       }
     }
     req.open("GET", strURL, true);
     req.send(null);
   
   }
   }
   
   function get_city(state_id) {
   var strURL = base_url + "user_ajax/get_city/" + state_id;
   //alert(strURL);
   var req = getXMLHTTP();
   if (req) {
     req.onreadystatechange = function () {
       if (req.readyState == 4) {
         // only if "OK"
         if (req.status == 200) {
           //alert(req.responseText);                      
           document.getElementById("cmb_city").innerHTML = req.responseText;
           $('.select2').select2()
   
         } else {
           alert("There was a problem while using XMLHTTP:\n" + req.statusText);
         }
       }
     }
     req.open("GET", strURL, true);
     req.send(null);
   
   }
   }
   
   function get_ship_state(country_id) {
   var strURL = base_url + "user_ajax/get_state/" + country_id;
   //alert(strURL);
   var req = getXMLHTTP();
   if (req) {
     req.onreadystatechange = function () {
       if (req.readyState == 4) {
         // only if "OK"
         if (req.status == 200) {
           //alert(req.responseText);                      
           document.getElementById("cmb_ship_state").innerHTML = req.responseText;
           document.getElementById("cmb_ship_city").innerHTML = "<option value='0'>--Select--</option>";
   
           $('.select2').select2()
   
         } else {
           alert("There was a problem while using XMLHTTP:\n" + req.statusText);
         }
       }
     }
     req.open("GET", strURL, true);
     req.send(null);
   
   }
   }
   
   function get_ship_city(state_id) {
   var strURL = base_url + "user_ajax/get_city/" + state_id;
   //alert(strURL);
   var req = getXMLHTTP();
   if (req) {
     req.onreadystatechange = function () {
       if (req.readyState == 4) {
         // only if "OK"
         if (req.status == 200) {
           //alert(req.responseText);                      
           document.getElementById("cmb_ship_city").innerHTML = req.responseText;
           $('.select2').select2()
   
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
<style type="text/css">
   .form-control 
   {
   color: black;
   }
</style>
