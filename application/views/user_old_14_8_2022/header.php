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
   <div class="header-top">
      <div class="container">
         <!--<div class="header-left">
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
            </div>-->
         <div class="header-right">
            <ul class="top-menu">
               <li>
                  <a href="#">Links</a>
                  <!--<ul>
                     <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                     <li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                     <li><a href="about.html">About Us</a></li>
                     <li><a href="contact.html">Contact Us</a></li>
                     <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                     </ul>-->
                  <ul style="color:black">
                     <li><a target="_blank" href="https://api.whatsapp.com/send?phone=919727680689&text=Hello%2C+I+Like+your+Vimla+Prints+collection."><i class="icon-whatsapp"></i> +91 97276 80689</a></li>
                     <li><a href="mailto:sales@vimlaprints.com"><i class="icon-envelope"></i>Email : sales@vimlaprints.com </a></li>
                     <!--<li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>-->
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="header-middle sticky-header">
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
               <ul class="menu">

                  <!-- Dropdown menu -->
                  <!--<li class="">
                                    <a href="blog.html" class="sf-with-ul">Blog</a>

                                    <ul style="display: none;">
                                        <li><a href="blog.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li class="">
                                            <a href="#" class="sf-with-ul">Grid</a>
                                            <ul style="display: none;">
                                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="#" class="sf-with-ul">Masonry</a>
                                            <ul style="display: none;">
                                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="#" class="sf-with-ul">Mask</a>
                                            <ul style="display: none;">
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="#" class="sf-with-ul">Single Post</a>
                                            <ul style="display: none;">
                                                <li><a href="single.html">Default with sidebar</a></li>
                                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                  </li>-->

                  <!-- Dropdow menu end -->

                  <?php
                     $front_menu_res=$this->db->get_where('tbl_front_menu',array('parent_id'=>0,'front_menu_status'=>'Active'));
                     foreach($front_menu_res->result() as $front_menu_row)
                     {
                         $submenu_res=$this->db->get_where('tbl_front_menu',array('parent_id'=>$front_menu_row->front_menu_id));
                         ?>
                  <!--<li>
                     <a href="category.html"><?php echo $front_menu_row->front_menu_title; ?></a>
                     
                     <div class="megamenu megamenu-md">
                         <div class="row no-gutters">
                             <div class="col-md-12">
                                 <div class="menu-col">
                                     <div class="row">
                                         <div class="col-md-4">
                                             <div class="menu-title">By Fabric</div>
                                             <ul>
                                                 <li><a href="<?php echo base_url(); ?>user/search?category=1_2&subcat=2_1">Silk</a></li>
                                                 <li><a href="category-2cols.html">Crepe</a></li>
                                                 <li><a href="category.html">Pashmina</a></li>
                                                 <li><a href="category-4cols.html">Georgette</a></li>
                                                 <li><a href="category-market.html"><span>Chiffon</a></li>
                                                 <li><a href="category-market.html"><span>Digital Print<span class="tip tip-new">New</span></span></a></li>
                                             </ul>
                     
                                            
                                         </div>
                     
                                         <div class="col-md-4">
                                             <div class="menu-title">By Type</div>
                                             <ul>
                                                 <li><a href="product-category-boxed.html">Uniform Saree</a></li>
                                                 <li><a href="product-category-fullwidth.html"><span>Uniform Salwar Suit<span class="tip tip-new">New</span></span></a></li>
                                                 <li><a href="product-category-fullwidth.html"><span>Uniform Salwar-Saree Combo<span class="tip tip-new">New</span></span></a></li>
                                                 <li><a href="product-category-boxed.html">Malgudi Silk</a></li>
                                                 <li><a href="product-category-boxed.html">Kalamkari Silk</a></li>
                                                 <li><a href="product-category-boxed.html">Angoori Crepe</a></li>
                                                 <li><a href="product-category-boxed.html">Pashmina Silk</a></li>
                                                 <li><a href="">C-Noor</a></li>
                                                 <li><a href="">Celebration</a></li>
                                             </ul>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="menu-title">By Occassion</div>
                                             <ul>
                                                 <li><a href="product-caetgory-boxed.html">Casual Wear</a></li>
                                                 <li><a href="product-caetgory-boxed.html">Daily Wear</a></li>
                                                 <li><a href="product-caetgory-boxed.html">Winter Wear</a></li>
                                                 <li><a href="product-caetgory-boxed.html">Party Wear</a></li>
                                                 <li><a href="product-caetgory-boxed.html">Uniform Wear</a></li>
                     
                                                
                                             </ul>
                                             
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     </li>-->
                  <!--<li>
                     <a href="product.html"><?php echo str_replace(" ", "&nbsp;", 
                        $front_menu_row->front_menu_title) ; ?></a>
                     </li>-->
                  <?php
                     if($submenu_res->num_rows()>0)
                     {
                         ?>
                  <li>
                     <a href="#"><?php echo $front_menu_row->front_menu_title; ?></a>
                     <?php
                        $submenus_total = $submenu_res->num_rows();
                        //echo $submenus_total;
                        $div_number=floor(12/$submenus_total);
                        //echo $div_number;
                        //foreach($submenu_res->result() as $submenu_row)
                        //{
                            ?>
                     <div class="megamenu megamenu-md">
                        <div class="row no-gutters">
                           <div class="col-md-12">
                              <div class="menu-col">
                                 <div class="row">
                                  <?php 
                                  foreach($submenu_res->result() as $submenu_row)
                                  {
                                      ?>
                                  
                                    <div class="col-md-<?php echo $div_number; ?>">
                                       <div class="menu-title"><?php echo $submenu_row->front_menu_title; ?>
                                       </div>
                                       <ul>
                                          <?php 
                                          $third_level_menu_res=$this->db->get_where('tbl_front_menu',array('parent_id'=>$submenu_row->front_menu_id));
                                          foreach($third_level_menu_res->result() as $third_level_menu_row)
                                          {
                                            ?>
                                            <!--<li><a href="<?php echo base_url(); ?>user/search?category=1_2&subcat=2_1"><?php echo $third_level_menu_row->front_menu_title; ?></a></li>-->
                                            <li>
                                              <!--<a href="<?php echo base_url(); ?>user/search?category=1_2&subcat=2_1">-->
                                                <!--<a href="<?php echo base_url(); ?>user/search?category=1_2">-->
                                                <?php 
                                                if(trim($third_level_menu_row->front_menu_seo_slug)!="")
                                                {
                                                  ?>
                                                  <!--<a href="<?php echo base_url(); ?>user/search/<?php echo $third_level_menu_row->front_menu_seo_slug; ?>?id=<?php echo $third_level_menu_row->front_menu_id; ?>">-->
                                                    <a href="<?php echo base_url(); ?>user/search/<?php echo $third_level_menu_row->front_menu_seo_slug; ?>">


                                                  <span><?php echo $third_level_menu_row->front_menu_title; ?>
                                                
                                                  <?php

                                                } 
                                                else
                                                {
                                                ?>
                                                <a href="<?php echo base_url(); ?>user/<?php echo $third_level_menu_row->front_menu_url; ?>&id=<?php echo $third_level_menu_row->front_menu_id; ?>">
                                                <span><?php echo $third_level_menu_row->front_menu_title; ?>
                                                <?php 
                                                }
                                                ?>
                                            <?php
                                            if($third_level_menu_row->front_menu_label_id!=0)
                                            {
                                              $label_res=$this->db->get_where('tbl_front_menu_label',array("front_menu_label_id"=>$third_level_menu_row->front_menu_label_id));
                                              $label_row=$label_res->result();
                                              ?>
                                              <span class="tip tip-new" style="color:<?php echo $label_row[0]->front_menu_label_color; ?>;background-color:<?php echo $label_row[0]->front_menu_label_backgroun_color; ?> "><?php echo $label_row[0]->front_menu_label; ?></span>
                                              <?php
                                            }
                                            ?>
                                            </span></a></li>
                                            <?php

                                          }
                                          ?>
                                          
                                       </ul>
                                    </div>
                                  <?php
                        }
                        ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                        //}
                        ?>
                  </li>
                  <?php
                     }
                     else
                     {
                         ?>
                  <li>
                    <?php 
                    if($front_menu_row->front_menu_external_link=="Yes")
                    {
                      ?>
                      <a href="<?php echo $front_menu_row->front_menu_url; ?>" target="_blank">
                     <?php echo str_replace(" ", "&nbsp;", 
                        $front_menu_row->front_menu_title) ; ?>
                     </a>
                      <?php
                    }
                    else
                    {
                    ?>
                     <a href="<?php echo base_url().'user/'.$front_menu_row->front_menu_url; ?>">
                     <?php echo str_replace(" ", "&nbsp;", 
                        $front_menu_row->front_menu_title) ; ?>
                     </a>
                     <?php 
                     }
                     ?>
                  </li>
                  <?php
                     }
                     
                     
                     } 
                     ?>
                  <!--
                     <li>
                         <a href="category.html">Category</a>
                     
                         <div class="megamenu megamenu-md">
                             <div class="row no-gutters">
                                 <div class="col-md-12">
                                     <div class="menu-col">
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <div class="menu-title">By Fabric</div>
                                                 <ul>
                                                     <li><a href="<?php echo base_url(); ?>user/search?category=1_2&subcat=2_1">Silk</a></li>
                                                     <li><a href="category-2cols.html">Crepe</a></li>
                                                     <li><a href="category.html">Pashmina</a></li>
                                                     <li><a href="category-4cols.html">Georgette</a></li>
                                                     <li><a href="category-market.html"><span>Chiffon</a></li>
                                                     <li><a href="category-market.html"><span>Digital Print<span class="tip tip-new">New</span></span></a></li>
                                                 </ul>
                     
                                                
                                             </div>
                     
                                             <div class="col-md-4">
                                                 <div class="menu-title">By Type</div>
                                                 <ul>
                                                     <li><a href="product-category-boxed.html">Uniform Saree</a></li>
                                                     <li><a href="product-category-fullwidth.html"><span>Uniform Salwar Suit<span class="tip tip-new">New</span></span></a></li>
                                                     <li><a href="product-category-fullwidth.html"><span>Uniform Salwar-Saree Combo<span class="tip tip-new">New</span></span></a></li>
                                                     <li><a href="product-category-boxed.html">Malgudi Silk</a></li>
                                                     <li><a href="product-category-boxed.html">Kalamkari Silk</a></li>
                                                     <li><a href="product-category-boxed.html">Angoori Crepe</a></li>
                                                     <li><a href="product-category-boxed.html">Pashmina Silk</a></li>
                                                     <li><a href="">C-Noor</a></li>
                                                     <li><a href="">Celebration</a></li>
                                                 </ul>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="menu-title">By Occassion</div>
                                                 <ul>
                                                     <li><a href="product-caetgory-boxed.html">Casual Wear</a></li>
                                                     <li><a href="product-caetgory-boxed.html">Daily Wear</a></li>
                                                     <li><a href="product-caetgory-boxed.html">Winter Wear</a></li>
                                                     <li><a href="product-caetgory-boxed.html">Party Wear</a></li>
                                                     <li><a href="product-caetgory-boxed.html">Uniform Wear</a></li>
                     
                                                    
                                                 </ul>
                                                 
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 
                             </div>
                         </div>
                     </li>
                     
                     <li>
                         <a href="product.html">Best&nbsp;Seller</a>
                     
                         
                     </li>
                     
                     <li>
                         <a href="">New&nbsp;In</a>
                     </li>
                     
                     <li class="">
                         <a href="index.html" class="">Blog</a>
                     </li>
                     <li >
                         <a href="index.html" class="">Download</a>
                     </li>
                     <li>
                         <a href="index.html" class="">Wholesale</a>
                     </li>
                     <li>
                         <a href="index.html" class="">Reach&nbsp;Us</a>
                     </li>
                     -->
               </ul>
            </nav>
         </div>
         <div class="header-right">
            <div class="header-search">
               <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
               <form action="<?php echo base_url(); ?>user/search" method="get">
                  <div class="header-search-wrapper">
                     <label for="q" class="sr-only">Search</label>
                     <input type="search" class="form-control" name="search_txt" id="search_txt" placeholder="Search for Design Number" required>
                  </div>
                  <!-- End .header-search-wrapper -->
               </form>
            </div>
            <!--<div class="account dropdown cart-dropdown">-->
            <?php 
               if(isset($_SESSION["customer_id"]))
               {
               ?>
            <div class="dropdown cart-dropdown">
               <a href="dashboard.html" title="My account" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                  <div class="icon">
                     <i class="icon-user"></i>
                  </div>
                  <p>Account</p>
               </a>
               <!-- old working menu -->
               <!--<div class="dropdown-menu dropdown-menu-right" style="width: 180px;">
                  <div>
                     <a href=#><span>Edit Profile</span></a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>user/order_history'><span>Order History</span></a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>user/change_password'><span>Change Password</span>
                     </a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>user/logout'><span>Logout</span></a>
                  </div>
               </div>-->
               <!-- old working menu -->


               <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-cart-products">

                    <div class="dropdown-cart-total">
                     <p style="text-transform: none;font-size:13px"><strong>Hello</strong> </p>

                     
                    </div>
                    <p style="text-transform: none;font-size:13px"><?php echo $_SESSION["customer_full_name"]; ?></p>
                     
                  </div>
                  <hr>
                  <!-- End .cart-product -->
                  
                  
                  
                  <!-- End .dropdown-cart-total -->
                  <div>
                     <a href='<?php echo base_url(); ?>user/order_history'><span>Orders</span></a>
                  </div>
                  <!--<div>
                     <a href=#><span>My Wishlist</span></a>
                     </div>-->
                  <div>
                     <a href='<?php echo base_url(); ?>user/wishlist'><span>Wishlist</span>
                     </a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>user/contact_us'><span>Contact Us</span></a>
                  </div>

                  <hr>
                  <div>
                     <a href='<?php echo base_url(); ?>'><span>Coupons</span></a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>user/saved_address'><span>Saved Addresses</span></a>
                  </div>
                  <!-- End .dropdown-cart-total -->
                  <hr>
                  <div>
                     <a href='<?php echo base_url(); ?>user/edit_profile'><span>Edit Profile</span></a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>user/change_password'><span>Change Password</span>
                     </a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>user/logout'><span>Logout</span></a>
                  </div>
               </div>
               <!-- End .dropdown-menu -->
            </div>
            <?php
               }
               else
               {
               ?>
            <!--<div class="account">
               <a  href="#signin-modal" data-toggle="modal" title="My account">
                  <div class="icon">
                     <i class="icon-user"></i>
                  </div>
                  <p>Login</p>
               </a>
            </div>-->
            <!-- new login menu -->
            <div class="dropdown cart-dropdown">
               <a href="dashboard.html" title="My account" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                  <div class="icon">
                     <i class="icon-user"></i>
                  </div>
                  <p>Profile</p>
               </a>
               
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-cart-products">

                    <div class="dropdown-cart-total">
                     <p><strong>welcome</strong> </p>

                     
                    </div>
                    <p style="text-transform: none;font-size:13px">To access Account and manage Orders</p>
                     
                  </div>
                  <hr>
                  <!-- End .cart-product -->
                  
                  <!-- End .dropdown-cart-total -->
                  <div class="dropdown-cart-action" style="margin-top:20px">
                     <!--<a href="<?php echo base_url(); ?>user/cart" class="btn btn-primary">View Cart</a>-->
                     <a href="#signin-modal" data-toggle="modal"  class="btn btn-outline-primary-2"><i class="icon-user"></i><span>Sign Up</span></a>
                     <a href="#signin-modal" data-toggle="modal"  class="btn btn-outline-primary-2"><span>Login</span><i class="icon-long-arrow-right"></i></a>
                  </div>
                  <hr>
                  
                  <!-- End .dropdown-cart-total -->
                  <div>
                     <a href='<?php echo base_url(); ?>user/order_history'><span>Orders</span></a>
                  </div>
                  <!--<div>
                     <a href=#><span>My Wishlist</span></a>
                     </div>-->
                  <div>
                     <a href='<?php echo base_url(); ?>user/wishlist'><span>Wishlist</span>
                     </a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>user/contact_us'><span>Contact Us</span></a>
                  </div>

                  <hr>
                  <div>
                     <a href='<?php echo base_url(); ?>'><span>Coupons</span></a>
                  </div>
                  <div>
                     <a href='<?php echo base_url(); ?>'><span>Saved Addresses</span></a>
                  </div>
                  <!-- End .dropdown-cart-total -->
               </div>
               
            </div>
            <!-- new login menu end -->
            <?php
               }
               ?>
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
            <div class="wishlist">
               <a href="<?php echo base_url(); ?>user/wishlist" title="Wishlist">
                  <div class="icon">
                     <i class="icon-heart-o"></i>
                     <?php 
                        if(isset($_SESSION["customer_id"]))
                        {
                            $wishlist_res=$this->db->get_where('tbl_wishlist',array("customer_id"=>$_SESSION["customer_id"]));
                        
                            $wishlist_cnt = $wishlist_res->num_rows();
                            ?>
                     <span class="wishlist-count badge"><?php echo $wishlist_cnt; ?></span>
                     <?php
                        }
                        ?>
                  </div>
                  <p>Wishlist</p>
               </a>
            </div>
            <!-- End .compare-dropdown -->
            <div class="dropdown cart-dropdown">
               <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                  <div class="icon">
                     <i class="icon-shopping-cart"></i>
                     <!--<span class="cart-count">2</span>-->
                     <?php 
                        $cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id()));
                        echo '<span class="cart-count">'.$cart_res->num_rows().'</span>';
                        
                        ?>
                  </div>
                  <p>Cart</p>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-cart-products">
                     <?php 
                        $this->db->join('tbl_product_new','tbl_cart.product_id=tbl_product_new.product_id');
                        $cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id()));
                        
                        $total=0;
                        foreach($cart_res->result() as $cart_row)
                        {
                            ?>
                     <div class="product">
                        <div class="product-cart-details">
                           <h4 class="product-title">
                              <a href="product.html">
                              <?php 
                                 echo $cart_row->product_name;
                                 ?>
                              </a>
                           </h4>
                           <span class="cart-product-info">
                           <span class="cart-product-qty"><?php echo $cart_row->cart_qty; ?></span>
                           x <i class="icon-rupee"></i><?php echo $cart_row->product_selling_price; ?>
                           </span>
                        </div>
                        <!-- End .product-cart-details -->
                        <figure class="product-image-container">
                           <a href="product.html" class="product-image">
                           <img src="<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $cart_row->product_image; ?>" alt="product">
                           </a>
                        </figure>
                        <a href="<?php echo base_url(); ?>user/remove_cart/<?php echo $cart_row->product_id; ?>" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                     </div>
                     <?php
                        $total=$total+($cart_row->cart_qty*$cart_row->product_selling_price);
                        }
                        ?>
                  </div>
                  <!-- End .cart-product -->
                  <div class="dropdown-cart-total">
                     <span>Total</span>
                     <span class="cart-total-price"><i class="icon-rupee"></i><?php echo $total; ?></span>
                  </div>
                  <!-- End .dropdown-cart-total -->
                  <div class="dropdown-cart-action">
                     <!--<a href="<?php echo base_url(); ?>user/cart" class="btn btn-primary">View Cart</a>-->
                     <a href="<?php echo base_url(); ?>user/cart" class="btn btn-outline-primary-2"><i class="icon-shopping-cart"></i><span>View Cart</span></a>
                     <a href="<?php echo base_url(); ?>user/checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                  </div>
                  <!-- End .dropdown-cart-total -->
               </div>
               <!-- End .dropdown-menu -->
            </div>
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
