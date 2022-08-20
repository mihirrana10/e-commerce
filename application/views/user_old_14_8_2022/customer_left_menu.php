                        <aside class="col-md-2 col-lg-2">
                           <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                              <li class="nav-item">
                                 <a id="dashboard" href="<?php echo base_url(); ?>user/dashboard" class="nav-link ">Dashboard</a>
                              </li>
                              <li class="nav-item">
                                 <a id="order_history" href="<?php echo base_url(); ?>user/order_history" class="nav-link" >Orders</a>
                              </li>
                              <li class="nav-item">
                                 <a  class="nav-link" href="<?php echo base_url(); ?>user/edit_profile">Edit Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a  class="nav-link" href="<?php echo base_url(); ?>user/saved_address">Saved Address</a>
                              </li>
                              <li class="nav-item">
                                 <a id="change_password" href="<?php echo base_url(); ?>user/change_password" class="nav-link" >Change Password</a>
                              </li>
                              <li class="nav-item">
                                 <a id="wishlist" href="<?php echo base_url(); ?>user/wishlist" class="nav-link" >Wishlist</a>
                              </li>
                              <!--<li class="nav-item">
                                 <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads" role="tab" aria-controls="tab-downloads" aria-selected="false">Downloads</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address" role="tab" aria-controls="tab-address" aria-selected="false">Adresses</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
                              </li>-->
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo base_url(); ?>user/logout">Sign Out</a>
                              </li>
                           </ul>
                        </aside>

                        <script type="text/javascript">
                        var element = document.getElementById("<?php echo $active_id; ?>");
                        element.classList.add("active");
                        </script>