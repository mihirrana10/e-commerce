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
                    if(!isset($close_form))
                    {
                    ?>
                    <h2 class="title text-center mb-5">Verify Order</h2><!-- End .title -->
                    <div class="cta cta-separator bg-image mb-5" style="background-image: url(assets/images/backgrounds/cta/bg-5.jpg);background-position: center right;">
                        <div class="row">

                           
                            
                                <div class="col-lg-12">
                                     <center>
                                        <?php 
                                        if(isset($msg))
                                        {
                                            echo $msg;
                                        }
                                        ?>
                                    </center>
                                    <div class="cta-wrapper text-center" style="padding-top: 10px">
                                        <h3 class="cta-title">Enter OTP for Order # <?php echo $_SESSION["current_order_id"]; ?>
                                        </h3><!-- End .cta-title -->
                                        <p class="cta-desc">Please enter the OTP which is sent to you for this order</p><!-- End .cta-desc -->
                                
                                        <form method="post" action="<?php echo base_url(); ?>user/otp_verify/check">
                                            <input type="text" class="form-control form-control-rounded" placeholder="Enter OTP" aria-label="OTP" id="txt_otp" name="txt_otp" required>
                                            <button class="btn btn-primary" type="submit"><span>Verify Order</span><i class="icon-long-arrow-right"></i></button>
                                        </form>
                                        <a href="<?php echo base_url(); ?>user/resend_order_otp">Resend OTP</a>
                                    </div><!-- End .cta-wrapper -->
                                </div><!-- End .col-lg-6 -->
                            
                        </div><!-- End .row -->
                    </div><!-- End .cta -->
                    <?php 
                    }
                    else
                    {
                    ?>
                    <h2 class="title text-center mb-5" style="padding-top: 50px;padding-bottom: 20px"><i class="icon-check"></i>
  Thanks.!! Your Order has been Successfully Verified, We will ship you product soon..!!</h2>
                    
                    <center>
                        <a href="<?php echo base_url(); ?>" class="btn btn-outline-primary-2" style="margin-bottom: 50px"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </center>
                    <?php
                    }
                    ?>

                    
                </div><!-- End .container -->
                
                
            </div><!-- End .page-content -->

            
        </main><!-- End .main -->

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

<script type="text/javascript">
            var controller = "ajax/get_category";
            var base_url = "<?php echo base_url(); ?>";

     function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }

    function get_state(country_id)
    {       
        var strURL=base_url+"user_ajax/get_state/"+country_id;
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_state").innerHTML=req.responseText;
                        document.getElementById("cmb_city").innerHTML="<option value='0'>--Select--</option>";

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
    function get_city(state_id)
    {       
        var strURL=base_url+"user_ajax/get_city/"+state_id;
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_city").innerHTML=req.responseText;
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

    function get_ship_state(country_id)
    {       
        var strURL=base_url+"user_ajax/get_state/"+country_id;
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_ship_state").innerHTML=req.responseText;
                        document.getElementById("cmb_ship_city").innerHTML="<option value='0'>--Select--</option>";

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
    function get_ship_city(state_id)
    {       
        var strURL=base_url+"user_ajax/get_city/"+state_id;
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_ship_city").innerHTML=req.responseText;
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