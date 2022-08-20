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
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="star-rating">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                      </div>
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
                <div class="container">
                    <div class="product-body">
                                                
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 90%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                
                    </div><!-- End .product-body -->
                    <?php 
                    if(isset($msg))
                    {
                        echo $msg;
                    }
                    ?>
                    
                    <!--<h2 class="title text-center mb-5" style="padding-top: 50px;padding-bottom: 20px"><i class="icon-check"></i>
  Thanks.!! Your Order has been Successfully Verified, We will ship you product soon..!!</h2>
                    
                    <center>
                        <a href="<?php echo base_url(); ?>user" class="btn btn-outline-primary-2" style="margin-bottom: 50px"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </center>-->
                    

                    
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