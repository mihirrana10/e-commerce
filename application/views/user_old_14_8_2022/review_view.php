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
                           
                                 <div class="touch-container row justify-content-center">
                                    <div class="col-md-8 col-lg-8 ">
                                       <div class="text-center">
                                       <h2 class="title mb-1">Change Password</h2><!-- End .title mb-2 -->
                                       <!--<p class="lead text-primary">
                                          We collaborate with ambitious brands and people; we’d love to build something great together.
                                       </p>--><!-- End .lead text-primary -->
                                       <p class="mb-3">We collaborate with ambitious brands and people.</p>
                                       </div><!-- End .text-center -->
                                       <?php 
                                       if(isset($msg))
                                       {
                                          echo $msg;
                                       }
                                       ?>
                                       <form action="<?php echo base_url(); ?>user/change_password/update" method="post" class="contact-form mb-2">
                                          <div class="row col-sm-7 star-rating" style="padding-bottom: 20px">
                                             <span class="fa fa-star-o" data-rating="1"></span>
                                             <span class="fa fa-star-o" data-rating="2"></span>
                                             <span class="fa fa-star-o" data-rating="3"></span>
                                             <span class="fa fa-star-o" data-rating="4"></span>
                                             <span class="fa fa-star-o" data-rating="5"></span>
                                             <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                          </div>
                                          <div class="row">
                                             <div class="col-sm-12">
                                                       <label for="cname" class="sr-only">Old Password</label>
                                                <input type="text" class="form-control" id="txt_old_pwd" name="txt_old_pwd" placeholder="Old Password *" required>
                                             </div><!-- End .col-sm-4 -->
                                          </div><!-- End .row -->
                                          <div class="row">
                                             <div class="col-sm-12">
                                                       <label for="cname" class="sr-only">New Password</label>
                                                <input type="text" class="form-control" id="txt_pwd" name="txt_pwd" placeholder="New Password *" required>
                                             </div><!-- End .col-sm-4 -->
                                          </div><!-- End .row -->
                                          <div class="row">
                                             <div class="col-sm-12">
                                                       <label for="cname" class="sr-only">Confirm Password</label>
                                                <input type="text" class="form-control" id="txt_cpwd" name="txt_cpwd" placeholder="Confirm New Password *" required>
                                             </div><!-- End .col-sm-4 -->
                                          </div><!-- End .row -->

                                               
                                       
                                       <div class="text-center">
                                             <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                                <span>CHANGE PASSWORD</span>
                                                <i class="icon-long-arrow-right"></i>
                                             </button>
                                          </div><!-- End .text-center -->
                                       </form><!-- End .contact-form -->
                                    </div><!-- End .col-md-9 col-lg-7 -->
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
