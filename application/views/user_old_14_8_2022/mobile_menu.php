    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                  <?php
                     $front_menu_res=$this->db->get_where('tbl_front_menu',array('parent_id'=>0,'front_menu_status'=>'Active'));

                    echo "<ul>";
                    foreach($front_menu_res->result() as $front_menu_row)
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
                        
                            <?php
                            $submenu_res=$this->db->get_where('tbl_front_menu',array('parent_id'=>$front_menu_row->front_menu_id));
                            if($submenu_res->num_rows()>0)
                            {
                                echo "<ul>";
                                foreach($submenu_res->result() as $submenu_row)
                                {
                                ?>
                                <li>
                                    <?php 
                                    if($submenu_row->front_menu_external_link=="Yes")
                                    {
                                        ?>
                                        <a href="<?php echo $submenu_row->front_menu_url; ?>" target="_blank">
                                         <?php echo str_replace(" ", "&nbsp;", 
                                            $submenu_row->front_menu_title) ; ?>
                                        </a>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <a href="<?php echo base_url().'user/'.$submenu_row->front_menu_url; ?>">
                                         <?php echo str_replace(" ", "&nbsp;", 
                                            $submenu_row->front_menu_title) ; ?>
                                        </a>
                                        <?php 
                                    }


                                     $third_level_menu_res=$this->db->get_where('tbl_front_menu',array('parent_id'=>$submenu_row->front_menu_id));
                                     if($third_level_menu_res->num_rows()>0)
                                     {
                                        echo "<ul>";
                                        foreach($third_level_menu_res->result() as $third_level_menu_row)
                                        {
                                            if($third_level_menu_row->front_menu_external_link=="Yes")
                                            {
                                                ?>
                                                <a href="<?php echo base_url(); ?>user/search/<?php echo $third_level_menu_row->front_menu_seo_slug; ?>" target="_blank">
                                                 <?php echo str_replace(" ", "&nbsp;", 
                                                    $third_level_menu_row->front_menu_title) ; ?>
                                                </a>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="<?php echo base_url(); ?>user/search/<?php echo $third_level_menu_row->front_menu_seo_slug; ?>">
                                                 <?php echo str_replace(" ", "&nbsp;", 
                                                    $third_level_menu_row->front_menu_title) ; ?>
                                                </a>
                                                <?php 
                                            }
                                        }
                                        echo "</ul>";
                                     }
                                     ?>
                                </li>
                                <?php
                                }
                                echo "</ul>";
                            }
                            ?>
                        </li>
                        <?php
                        
                    }
                     
                ?>
                  
                     
               </ul>
                
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <!--
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                -->
                <a href="<?php echo $settings_row[0]->facebook_url; ?>" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="<?php echo $settings_row[0]->twitter_url; ?>" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="<?php echo $settings_row[0]->instagram_url; ?>" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="<?php echo $settings_row[0]->youtube_url; ?>" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                <a href="<?php echo $settings_row[0]->pinterest_url; ?>" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>

            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

     <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    
    

    