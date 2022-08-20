<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row no-gutters bg-white newsletter-popup-content">
                        <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                            <div class="banner-content text-center">
                                <!--<img src="<?php echo base_url(); ?>template/user/assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">-->
                                <h2 class="banner-title" style="font-size: 2.6rem;">get <span>Current Deals & Discounts</span> </h2>
                                <p style="font-size:18px">Subscribe to the Vimla Prints to receive timely updates from your favorite products.</p>
                                <form action="<?php echo base_url(); ?>user/add_subscriber" method="post">
                                    <div class="input-group input-group-round">
                                        <input type="email" class="form-control form-control-white" id="txt_email" name="txt_email" placeholder="Your Email Address" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><span>Subscribe</span></button>
                                        </div>
                                    </div>
                                </form>
                                <div class="social-icons social-icons-sm" style="margin-left:0px;margin-top:20px">
                                            <span class="social-label" style="font-size:18px;font-weight: bold">Follow Us  </span>
                                            <!--<a href="https://wa.me/?text=Hello" class="social-icon whtup" title="Whatsapp" target="_blank"><i class="icon-whatsapp"></i></a>-->

                                            <a href="https://www.facebook.com/vimlaprints" class="social-icon fb" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="https://twitter.com/VimlaPrints" class="social-icon tw" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="https://www.instagram.com/vimlaprints/" class="social-icon inst" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="https://www.youtube.com/channel/UC2mkDjDHJbubG6jYknUiGVw" class="social-icon yout" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                            
                                            <a href="https://in.pinterest.com/vimlaprints/" class="social-icon pin" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                    <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-2-5col col-lg-5 ">
                            <img src="<?php echo base_url(); ?>template/user/images/subscribe.jpg" class="newsletter-img" alt="newsletter">
                        </div>
                    </div>
                </div>
            </div>
    </div>
   