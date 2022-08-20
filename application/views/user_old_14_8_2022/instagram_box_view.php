<?php 
$this->db->limit("9");
$this->db->order_by("insta_id","desc");
$insta_res=$this->db->get_where('tbl_insta',array('insta_status'=>'Active'));
$insta_row=$insta_res->result();
?>
<div class="container">
                <div class="instagram-feed-container">
                        <div class="row">
                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[0]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[1]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->


                            <div class="feed-col feed-col-title">
                                <div class="instagram-feed-title">
                                    <i class="icon-instagram"></i>
                                    <p>@vimlaprints <br>on instagram</p>
                                    <a href="https://www.instagram.com/vimlaprints/" target="_blank">FOLLOW</a>
                                </div><!-- End .instagram-feed-title -->
                            </div><!-- End .feed-col -->

                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[2]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->


                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[3]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->


                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[4]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->


                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[5]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->


                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[6]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->


                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[7]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->


                            <div class="feed-col">
                                <div class="instagram-feed">
                                    <img src="<?php echo base_url(); ?>files/admin/insta/thumb/<?php echo $insta_row[8]->insta_image; ?>" alt="img">

                                    <div class="instagram-feed-content">
                                        <a target="_blank" href="<?php echo $insta_row[0]->insta_url; ?>">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                        <!--<a href="#"><i class="icon-comments"></i>45</a>-->
                                    </div><!-- End .instagram-feed-content -->
                                </div><!-- End .instagram-feed -->
                            </div><!-- End .feed-col -->

                        </div><!-- End .row -->
                    </div><!-- End .instagra-feed-container -->

                <?php 
                include_once('blocks/subscribe.php');
                ?>
            </div><!-- End .container -->