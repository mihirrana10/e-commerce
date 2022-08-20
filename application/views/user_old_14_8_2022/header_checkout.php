<?php $active_link_style='style="color:#c33;border-bottom: 4px #c33 solid"'; ?>
<header class="header header-intro-clearance">
   <!--<div class="header-top">
      <div class="container">
          <div class="header-left">
              <div class="header-dropdown">
                  <a href="#">Usd</a>
                  <div class="header-menu">
                      <ul>
                          <li><a href="#">Eur</a></li>
                          <li><a href="#">Usd</a></li>
                      </ul>
                  </div>
              </div>
              <div class="header-dropdown">
                  <a href="#">Eng</a>
                  <div class="header-menu">
                      <ul>
                          <li><a href="#">English</a></li>
                          <li><a href="#">French</a></li>
                          <li><a href="#">Spanish</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      
          <div class="header-right">
              <ul class="top-menu">
                  <li>
                      <a href="#">Links</a>
                      <ul>
                          <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                          <li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                          <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
      </div>-->
   
   <!--<div class="header-middle sticky-header">-->
    <div class="header-middle ">
      <div class="container">
         <div class="header-left">
            <button class="mobile-menu-toggler">
            <span class="sr-only">Toggle mobile menu</span>
            <i class="icon-bars"></i>
            </button>
            <a href="<?php echo base_url(); ?>" class="logo">
            <img src="<?php echo base_url(); ?>template/user/assets/images/logo.png" alt="Molla Logo" width="156" height="36">
            </a>
            <nav class="main-nav">
               <center>
                        <h3 class="" style="width:760px;font-size: 20px;font-weight: bold"><span 
                          <?php if($active_link=="cart" || $active_link=="checkout"){ echo $active_link_style; } ?>
                          >B A G</span> &nbsp;&nbsp;&nbsp;&nbsp;- - - - - - -&nbsp;&nbsp;&nbsp;&nbsp; <span <?php if($active_link=="checkout"){ echo $active_link_style; } ?> >A D D R E S S </span>&nbsp;&nbsp;&nbsp;&nbsp;- - - - - -&nbsp;&nbsp;&nbsp;&nbsp; P A Y M E N T</h3>
                      </center>
               
            </nav>
         </div>
         <div class="header-right">
            <div class="header-search">
               <h4 class="" style="font-size:30px"><i class="icon-certificate" style="font-size:40px"></i>   <strong>100 % SECURE</strong> </h4>
            </div>
            <!--<div class="account dropdown cart-dropdown">-->
            
            <!-- End .compare-dropdown -->
            <!--<div class="dropdown cart-dropdown">
               <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                   <div class="icon">
                       <i class="icon-shopping-cart"></i>
                       <?php 
                  $cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id()));
                  echo '<span class="cart-count">'.$cart_res->num_rows().'</span>';
                  
                  ?>
                   </div>
                   <p>Cart</p>
               </a>
               
               <div class="dropdown-menu dropdown-menu-right" style="width: 180px;">
                   <div>
                       <a href=#><span>Edit Profile</span></a>
                   </div>
                   <div>
                       <a href=#><span>Order History</span></a>
                   </div>
                   <div>
                       <a href=#><span>My Wishlist</span></a>
                   </div>
                   <div>
                       <a href=#><span>Change Password</span></a>
                   </div>
                   <div>
                       <a href=#><span>Logout</span></a>
                   </div>
               
                   
               </div>
               </div>-->
           
            <!-- End .cart-dropdown -->
         </div>
      </div>
   </div>
</header>
<!-- End .header -->
<style type="text/css">
   .header-intro-clearance .wishlist .wishlist-count 
   {
   position: absolute;
   top: 0;
   right: -.5rem;
   }
   .header-intro-clearance .wishlist .wishlist-count {
   display: flex;
   align-items: center;
   justify-content: center;
   border-radius: 50%;
   font-weight: 400;
   font-size: 1rem;
   line-height: 1;
   color: 
   #fff;
   }
   .header-intro-clearance .cart-dropdown .cart-count, .header-intro-clearance .wishlist .wishlist-count {
   min-width: 1.6rem;
   height: 1.6rem;
   }
   .wishlist a .wishlist-count {
   background-color: #c33;
   }
</style>
<style type="text/css">
   .menu li > a 
   {
   padding-left: 1rem;
   padding-right: 1rem;
   }
   .menu > li > a 
   {
   color: 
   #333;
   font-weight: 500;
   font-size: inherit;
   letter-spacing: -.01em;
   padding: 3.95rem 3rem;
   padding-right: 1rem;
   padding-left: 1rem;
   text-transform: uppercase;
   }
   .menu .menu-title 
   {
   font-weight: 600;
   /*
   color:#333;
   font-size: 1.4rem;
   text-transform: uppercase;
   margin-bottom: .6rem;
   */
   }
   .product-cart-details
   {
   color:black;
   }
   .cart-dropdown .product-cart-details 
   {
   color:black;
   }
   .cart-dropdown .product-title a 
   {
   color:black;
   }
   .dropdown-cart-total 
   {
   color:black;
   }
   p
   {
   color:black;
   }
   .footer {
   color:black;
   }
   .cta-half .cta-desc 
   {
   color: black;
   }

   hr
   {
    margin: 1rem auto 1rem;
   }

   .dropdown-cart-total
   {
    margin-bottom: 0rem;
   }
</style>
