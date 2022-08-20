<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>template/user/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>template/user/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>template/user/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>template/user/assets/images/icons/site.html">
    <link rel="mask-icon" href="<?php echo base_url(); ?>template/user/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>template/user/assets/images/icons/favicon_2.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?php echo base_url(); ?>template/user/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>template/user/assets/css/plugins/nouislider/nouislider.css">
    

    <?php
    $wishlist_array=array(); 
    if(isset($_SESSION["customer_id"]))
    {
        $wishlist_res=$this->db->get_where('tbl_wishlist',array('customer_id'=>$_SESSION["customer_id"]));
        foreach($wishlist_res->result() as $wishlist_row)
        {
            $wishlist_array[]=$wishlist_row->product_id;
        }
        
        /*
        print("<pre>");
        print_r($wishlist_array);
        print("</pre>");
        */
        
    }
    ?>