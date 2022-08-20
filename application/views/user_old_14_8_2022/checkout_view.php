<?php 
$active_link="checkout";

$conf_rate_res=$this->db->get_where('tbl_config');
$conf_rate_row=$conf_rate_res->result();
?>
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
        include_once('header_checkout.php');
        ?>
        <main class="main">
            <div class="page-header text-center" style="background-color:#c33;padding: 0.5rem 0 0rem;">
                <div class="container">
                    <h4 class="page-title" style="color:white">Prices are inclusive of all Taxes</h4>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <!--<nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div>
            </nav>-->
            <div class="page-content">
                <div class="checkout">
                    <div class="container">


                        
                        <div class="row">
                            <div class=" col-md-6 col-lg-6" style="padding-right: 2rem;">

                                <h5 class="summary"><i class="icon-truck"style="font-size:35px;padding-right:20px"></i>  Yay! <strong>Free Delivery</strong> on this order</h5>

                                <h5 class="summary">
                                    <input type="checkbox" style="margin-right:15px" onclick="ShowHideDiv(this)"
                                    <?php 
                                    if(isset($_SESSION["gift_box_rate"]))
                                    {
                                        echo "checked='checked'";
                                    }
                                    ?>
                                     ><i class="icon-gift-1" style="font-size:35px;padding-right:20px"></i>  Send Products in <strong>Gift Box</strong> 
                                    <p style="padding-top:10px">* GiftBox will cost you Rs. <?php echo $conf_rate_row[0]->config_giftbox_charge; ?> Extra 
                                    <?php 
                                    if($conf_rate_row[0]->config_giftbox_charge_per_unit=="Yes")
                                    {
                                        echo " Per Unit";
                                    }
                                    /*
                                    if(isset($_SESSION["gift_box_rate"]))
                                    {
                                        echo " ".$_SESSION["gift_box_rate"];
                                    }
                                    */

                                    ?>
                                    </p>
                                </h5>
                                <script type="text/javascript">
                                    
                                    /*
                                    function ShowHideDiv(chkPassport) {
                                        //var dvPassport = document.getElementById("dvPassport");
                                        //dvPassport.style.display = chkPassport.checked ? "block" : "none";
                                        alert(chkPassport.checked);
                                        if(chkPassport.checked==true)
                                        {

                                        }
                                        else if(chkPassport.checked==false)
                                        {

                                        }
                                    }
                                    */


                                    function ShowHideDiv(chkPassport)
                                    {       
                                        //var strURL=base_url+"user_ajax/get_gift_charge/"+country_id;
                                        var strURL="";
                                        if(chkPassport.checked==true)
                                        {
                                            var strURL=base_url+"user_ajax/get_gift_charge/true";
                                        }
                                        else if(chkPassport.checked==false)
                                        {
                                            var strURL=base_url+"user_ajax/get_gift_charge/false";
                                        }
                                        //alert(strURL);

                                        window.location=strURL;
                                        /*alert(strURL);
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
                                        */
                                    }
                                </script>

                            </div>
                            <div class="checkout-discount summary col-md-6 col-lg-6 " style="max-width: none;">
                                <h5><i class="icon-tags" style="font-size:35px"></i> Coupons</h5>
                                <?php
                                    if(isset($msg) && trim($msg)!="") 
                                    {
                                        echo $msg;
                                    }

                                    if(isset($_SESSION["coupon_code"]))
                                    {
                                        ?>
                                        <div class="alert alert-success" role="alert" style="width:66%"><i class="icon-check"></i> Code Applied - <?php echo $_SESSION["coupon_code"]; ?></div>
                                        <?php
                                    }
                                ?>
                                <form action="<?php echo base_url(); ?>user/apply_coupon" method="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  
                                            id="checkout-discount-input" name="checkout-discount-input" placeholder="Enter Coupon Code">
                                            <!--<label id="lbl_coupon" for="checkout-discount-input" class="text-truncate" style="top: 45%;left:8%" >Have a coupon? <span>Click here to enter your code</span></label>-->
                                        </div>
                                        <div class="col-md-4">
                                             <button type="submit" class="btn btn-outline-primary-2" style="min-width: 100px;">Apply</button>



                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md=12">
                                            <p style="font-size:19px;padding-left:20px"><a href="<?php echo base_url(); ?>user/register">Login</a> to see best coupons for you</p>
                                        </div>
                                    </div>
                                </form>
                                
                            </div><!-- End .checkout-discount -->
                            
                        </div>

                                    <?php
                                    /*    if(isset($msg) && trim($msg)!="") 
                                        {
                                            echo $msg;
                                        }

                                        if(isset($_SESSION["coupon_code"]))
                                        {
                                            ?>
                                            <div class="alert alert-success" role="alert" style="width:30%"><i class="icon-check"></i> Code Applied - <?php echo $_SESSION["coupon_code"]; ?></div>
                                            <?php
                                        }
                                        */
                                    ?>
                                    <!--<div class="checkout-discount summary" >
                                        <h5><i class="icon-tag"></i>  Apply Coupons</h5>
                                            
                                        <form action="<?php echo base_url(); ?>user/apply_coupon" method="post">
                                            <input type="text" class="form-control"  
                                            id="checkout-discount-input" name="checkout-discount-input" placeholder="Apply Coupon Code">
                                                 <button type="submit" class="btn btn-outline-primary-2">Apply</button>
                                            
                                        </form>
                                        
                                    </div>-->

                        <form action="<?php echo base_url(); ?>user/place_order" method="post">
                            
                            <div class="row">

                                <div class="col-lg-6">
                                        <input type="hidden" id="txt_selected_address_id" name="txt_selected_address_id">
                                        <div class="row">
                                            <?php 
                                            if(isset($_SESSION["customer_id"]))
                                            {
                                                $this->db->join('tbl_city','tbl_city.city_id=tbl_address.address_city_id');
                                                $this->db->join('tbl_state','tbl_state.state_id=tbl_address.address_state_id');
                                                $this->db->join('tbl_country','tbl_country.country_id=tbl_address.address_country_id');
                                                $cust_addr_res=$this->db->get_where('tbl_address',array("tbl_address.customer_id"=>$_SESSION["customer_id"]));

                                                if($cust_addr_res->num_rows()>0)
                                                {
                                                ?>
                                                    <div class="col-lg-12"><h2 class="checkout-title">Select Address</h2></div>
                                                    <?php
                                                    $div_id=0;
                                                    foreach($cust_addr_res->result() as $cust_addr_row)
                                                    {
                                                        $div_id++;
                                                        ?>

                                                        <div class=" col-md-6 col-lg-6 summary" id="<?php echo "div_".$div_id; ?>">
                                                            <p><strong><?php echo $cust_addr_row->address_person_name; ?></strong></p>
                                                            <p><?php echo $cust_addr_row->address_line1; ?></p>
                                                            <p><?php echo $cust_addr_row->address_line2; ?></p>
                                                            <p><?php echo $cust_addr_row->city_name." - ".$cust_addr_row->address_pincode; ?></p>
                                                            <!--<tr><td><?php //echo .", ".$cust_addr_row->address_company_name; ?></td></tr>-->
                                                            
                                                            <!---<tr><td><?php echo $cust_addr_row->state_name.", ".$cust_addr_row->country_name; ?></td></tr>
                                                            <tr><td><?php echo $cust_addr_row->address_email; ?></td></tr>
                                                            <tr><td><?php echo "Mob. ".$cust_addr_row->address_phone_number; ?></td></tr>-->
                                                            <label class="btn btn-outline-primary-2" for="<?php echo $cust_addr_row->address_id; ?>" style="margin-top:10px">
                                                                <input type="radio" id="<?php echo $cust_addr_row->address_id; ?>" name="cmb_selected_address" value="<?php echo $cust_addr_row->address_id; ?>" onclick="select_address(<?php echo $cust_addr_row->address_id; ?>)" style="margin-right:10px"> Select Address
                                                            </label>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                            

                                            <script type="text/javascript">
                                                    var controller2 = "user_ajax/get_address";
                                                    var base_url = "<?php echo base_url(); ?>";

                                                    function getXMLHTTP() 
                                                    { //fuction to return the xml http object
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
                                                           
                                                    function select_address(addr_id)
                                                    {       
                                                        var strURL=base_url+controller2+"/"+addr_id;
                                                        //alert(strURL);
                                                        var req = getXMLHTTP();
                                                        if (req) {
                                                            req.onreadystatechange = function() {
                                                                if (req.readyState == 4) {
                                                                    // only if "OK"
                                                                    if (req.status == 200) {
                                                                    //alert(req.responseText);                      
                                                                        
                                                                        document.getElementById("txt_selected_address_id").value=addr_id;

                                                                        //alert(req.responseText);

                                                                        var json_array = JSON.parse(req.responseText);
                                                                        /*
                                                                        alert(obj.address_person_name);
                                                                        */
                                                                        for (var i=0; i< json_array.length; i++)
                                                                        {
                                                                            //alert(json_array[i].address_person_name);

                                                                            var res = json_array[i].address_person_name.split(" ");
                                                                            document.getElementById('txt_first_name').value=res[0];
                                                                            document.getElementById('txt_last_name').value=res[1];

                                                                            document.getElementById('txt_company_name').value=json_array[i].address_company_name;

                                                                            document.getElementById('txt_address_line1').value=json_array[i].address_line1;

                                                                            document.getElementById('txt_address_line2').value=json_array[i].address_line2;

                                                                            document.getElementById('cmb_country').value=json_array[i].address_country_id;

                                                                            document.getElementById('cmb_state').value=json_array[i].address_state_id;

                                                                            document.getElementById('cmb_city').value=json_array[i].address_city_id;

                                                                            document.getElementById('txt_pincode').value=json_array[i].address_pincode;

                                                                            document.getElementById('txt_email').value=json_array[i].address_email;

                                                                            document.getElementById('txt_phone').value=json_array[i].address_phone_number;





                                                                            
                                                                        }
                                                                        
                                                                            
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
                                            
                                        </div>
                                        <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name *</label>
                                                <input type="text" class="form-control" id="txt_first_name" name="txt_first_name" required>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Last Name *</label>
                                                <input type="text" class="form-control" id="txt_last_name" name="txt_last_name" required>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>Company Name (Optional)</label>
                                        <input type="text" class="form-control" id="txt_company_name" name="txt_company_name">

                                        <label>Country *</label>
                                        <!--<input type="text" class="form-control" required>-->
                                        <select class="form-control" id="cmb_country" name="cmb_country" onchange="get_state(this.value)">
                                                <?php 
                                                $country_res=$this->db->get_where('tbl_country');
                                                foreach($country_res->result() as $country_row)
                                                {
                                                    ?>
                                                    <option 
                                                    value="<?php echo $country_row->country_id; ?>"
                                                    <?php 
                                                    if($country_row->country_name=="India")
                                                    {
                                                        echo "selected='selected'";
                                                    }
                                                    ?>
                                                    >
                                                    <?php echo $country_row->country_name; ?>
                                                    </option>
                                                    <?php
                                                }
                                                ?>
                                        </select>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>State / County *</label>
                                                <!--<input type="text" class="form-control" required>-->
                                                <select class="form-control" id="cmb_state" name="cmb_state" onchange="get_city(this.value);">
                                                <?php 
                                                    $this->db->join('tbl_country','tbl_state.country_id=tbl_country.country_id');
                                                    $state_res=$this->db->get_where('tbl_state',array('tbl_country.country_name'=>'India'));
                                                    foreach($state_res->result() as $state_row)
                                                    {
                                                        ?>
                                                        <option value="<?php echo $state_row->state_id; ?>"
                                                        <?php 
                                                        if($state_row->state_name=="Gujarat")
                                                        {
                                                            echo "selected='selected'";
                                                        }
                                                        ?>
                                                        ><?php echo $state_row->state_name; ?></option>
                                                        <?php
                                                    }
                                                ?>
                                                </select>

                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Town / City *</label>
                                                <select class="form-control" id="cmb_city" name="cmb_city">
                                                <?php 
                                                    $this->db->join('tbl_state','tbl_city.state_id=tbl_state.state_id');
                                                    $city_res=$this->db->get_where('tbl_city',array('tbl_state.state_name'=>'Gujarat'));
                                                    foreach($city_res->result() as $city_row)
                                                    {
                                                        ?>
                                                        <option value="<?php echo $city_row->city_id; ?>"><?php echo $city_row->city_name; ?></option>
                                                        <?php
                                                    }
                                                ?>
                                                </select>
                                                <!--<input type="text" class="form-control" required>-->
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>Street address *</label>
                                        <input type="text" class="form-control" placeholder="House number and Street name" id="txt_address_line1"  
                                        name="txt_address_line1" required>
                                        <input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." id="txt_address_line2" 
                                        name="txt_address_line2" >

                                        

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Postcode / ZIP *</label>
                                                <input type="text" class="form-control" id="txt_pincode" name="txt_pincode" required>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Phone *</label>
                                                <input type="tel" placeholder="Please enter 10 Digit Mobile Number" class="form-control" id="txt_phone" name="txt_phone" required>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>Email address *</label>
                                        <input type="email" class="form-control" id="txt_email" name="txt_email" required>

                                        <?php 
                                        if(!isset($_SESSION["customer_id"]))
                                        {
                                        ?>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkout-create-acc" name="create_account">
                                            <label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
                                        </div><!-- End .custom-checkbox -->
                                        <?php 
                                        }
                                        ?>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkout-diff-address"
                                            name="chk_shiping_address" onclick="myFunction();">
                                            <label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
                                        </div><!-- End .custom-checkbox -->
                                        
                                        <div id='shipping_div' style="visibility: hidden;display: none">
                                            <h2 class="checkout-title">Shipping Details</h2><!-- End .checkout-title -->
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>First Name *</label>
                                                    <input type="text" class="form-control" id="txt_ship_first_name" name="txt_ship_first_name">
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label>Last Name *</label>
                                                    <input type="text" class="form-control" id="txt_ship_last_name" name="txt_ship_last_name">
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <label>Company Name (Optional)</label>
                                            <input type="text" class="form-control" id="txt_ship_company_name" name="txt_ship_company_name">

                                            <label>Country *</label>
                                            <!--<input type="text" class="form-control" required>-->
                                            <select class="form-control" id="cmb_ship_country" name="cmb_ship_country" onchange="get_ship_state(this.value)">
                                                    <?php 
                                                    $country_res=$this->db->get_where('tbl_country');
                                                    foreach($country_res->result() as $country_row)
                                                    {
                                                        ?>
                                                        <option 
                                                        value="<?php echo $country_row->country_id; ?>"
                                                        <?php 
                                                        if($country_row->country_name=="India")
                                                        {
                                                            echo "selected='selected'";
                                                        }
                                                        ?>
                                                        >
                                                        <?php echo $country_row->country_name; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                            </select>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>State / County *</label>
                                                    <!--<input type="text" class="form-control" required>-->
                                                    <select class="form-control" id="cmb_ship_state" name="cmb_ship_state" onchange="get_ship_city(this.value);">
                                                    <?php 
                                                        $this->db->join('tbl_country','tbl_state.country_id=tbl_country.country_id');
                                                        $state_res=$this->db->get_where('tbl_state',array('tbl_country.country_name'=>'India'));
                                                        foreach($state_res->result() as $state_row)
                                                        {
                                                            ?>
                                                            <option value="<?php echo $state_row->state_id; ?>"
                                                            <?php 
                                                            if($state_row->state_name=="Gujarat")
                                                            {
                                                                echo "selected='selected'";
                                                            }
                                                            ?>
                                                            ><?php echo $state_row->state_name; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                    </select>

                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label>Town / City *</label>
                                                    <select class="form-control" id="cmb_ship_city" name="cmb_ship_city">
                                                    <?php 
                                                        $this->db->join('tbl_state','tbl_city.state_id=tbl_state.state_id');
                                                        $city_res=$this->db->get_where('tbl_city',array('tbl_state.state_name'=>'Gujarat'));
                                                        foreach($city_res->result() as $city_row)
                                                        {
                                                            ?>
                                                            <option value="<?php echo $city_row->city_id; ?>"><?php echo $city_row->city_name; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                    </select>
                                                    <!--<input type="text" class="form-control" required>-->
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <label>Street address *</label>
                                            <input type="text" class="form-control" placeholder="House number and Street name" id="txt_ship_address_line1"  
                                            name="txt_ship_address_line1" >
                                            <input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." id="txt_ship_address_line2" 
                                            name="txt_ship_address_line2" >

                                            

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Postcode / ZIP *</label>
                                                    <input type="text" class="form-control" id="txt_ship_pincode" name="txt_ship_pincode" >
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label>Phone *</label>
                                                    <input type="tel" class="form-control" id="txt_ship_phone" name="txt_ship_phone" >
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <label>Email address *</label>
                                            <input type="email" class="form-control" id="txt_ship_email" name="txt_ship_email" >
                                        </div>

                                        <script type="text/javascript">
                                            function myFunction() 
                                            {
                                              // Get the checkbox
                                              var checkBox = document.getElementById("checkout-diff-address");
                                              // Get the output text
                                              //var text = document.getElementById("text");

                                              // If the checkbox is checked, display the output text
                                              if (checkBox.checked == true){
                                                //text.style.display = "block";
                                                //alert("checked");
                                                document.getElementById('shipping_div').style.visibility="visible";
                                                document.getElementById('shipping_div').style.display="block";
                                                
                                              } else {
                                                //text.style.display = "none";
                                                //alert("unchecked");
                                                document.getElementById('shipping_div').style.visibility="hidden";
                                                document.getElementById('shipping_div').style.display="none";
                                              }
                                            } 
                                        </script>


                                        <label>Order notes (optional)</label>
                                        <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery" id="txt_order_notes" name="txt_order_notes"></textarea>
                                </div><!-- End .col-lg-9 -->
                                <aside class="col-lg-6">
                                    <div class="summary">
                                        <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                        <table class="table table-summary">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" width="70%">Product</th>
                                                    <th>Qty</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php 
                                                $cart_total=0;
                                        
                                                $this->db->join('tbl_product_new','tbl_cart.product_id=tbl_product_new.product_id');
                                                $cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>session_id()));
                                                foreach($cart_res->result() as $cart_row)
                                                {
                                                ?>
                                                <tr>
                                                    <td style="width:25%"><img src='<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $cart_row->product_image; ?>'style="width:120px;margin-right:40px;padding-right:10px"></td>
                                                    <td style="width:55%"><a href="<?php echo base_url(); ?>user/product/<?php echo $cart_row->product_seo_slug; ?>"><?php echo $cart_row->product_name; ?></a><br>
                                                        <p style="font-size:12px">
                                                        Unit Price : <i class="icon-rupee"></i><?php echo $cart_row->product_selling_price; ?></p>
                                                    </td>
                                                    <td style="width:10%"><center>x <?php echo $cart_row->cart_qty; ?></center></td>
                                                    <td style="width:10%"><i class="icon-rupee"></i><?php echo $cart_row->cart_qty*$cart_row->product_selling_price; ?></td>
                                                </tr>
                                                <?php 
                                                $cart_total=$cart_total+($cart_row->cart_qty *
                                                 $cart_row->product_selling_price);
                                                }
                                                ?>

                                               
                                                <tr class="summary-subtotal">
                                                    <td  colspan="3">Subtotal:</td>
                                                    <td><i class="icon-rupee"></i><?php echo $cart_total; ?></td>
                                                </tr><!-- End .summary-subtotal -->
                                                <!--<tr class="summary-subtotal">
                                                    <td  colspan="3">
                                                        <p style="font-size:12px">
                                                        Coupon Code : <?php echo $_SESSION["coupon_code"]; ?></p>
                                                        
                                                        <?php 
                                                        if($_SESSION["coupon_on"]=="%")
                                                        {
                                                            ?>
                                                            <p style="font-size:12px">
                                                            <?php echo $_SESSION["coupon_value"]; ?>% OFF</p>
                                                            <?php
                                                        }
                                                        else if($_SESSION["coupon_on"]=="Flat")
                                                        {
                                                            ?>
                                                            <p style="font-size:12px">
                                                            Flat <i class="icon-rupee"></i><?php echo $_SESSION["coupon_value"]; ?> OFF</p>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><i class="icon-rupee"></i><?php echo $cart_total; ?></td>
                                                </tr>-->

                                                <?php 
                                                $discount_amount=0;
                                                if(isset($_SESSION["coupon_code"]))
                                                {

                                                    ?>
                                                    <tr class="summary-subtotal">
                                                        <td  colspan="3"><!--Coupon Applied:<br>-->
                                                            <p style="font-size:12px">
                                                            Coupon Code : <?php echo $_SESSION["coupon_code"]; ?></p>
                                                            
                                                            <?php 
                                                            if($_SESSION["coupon_on"]=="%")
                                                            {
                                                                ?>
                                                                <p style="font-size:12px">
                                                                <?php echo $_SESSION["coupon_value"]; ?>% OFF
                                                                    <a href="<?php echo base_url(); ?>user/remove_coupon"><i class="icon-close"> Remove</i></a>
                                                                </p>
                                                                <?php
                                                                $discount_amount = round(($cart_total*$_SESSION["coupon_value"])/100);

                                                                $_SESSION["discount_amount"]=$discount_amount;

                                                            }
                                                            else if($_SESSION["coupon_on"]=="Flat")
                                                            {
                                                                ?>
                                                                <p style="font-size:12px">
                                                                Flat <i class="icon-rupee"></i><?php echo $_SESSION["coupon_value"]; ?> OFF 
                                                                    <a href="<?php echo base_url(); ?>user/remove_coupon"><i class="icon-close"> Remove</i></a>
                                                                </p>
                                                                <?php

                                                                $discount_amount = round($_SESSION["coupon_value"]);

                                                                $_SESSION["discount_amount"]=$discount_amount;
                                                            }
                                                            ?>
                                                            <!--
                                                            <a href="<?php echo base_url(); ?>user/remove_wishlist/remove_coupon"><i class="icon-close"></i></a>
                                                            -->
                                                        </td>
                                                        <td><!--<i class="icon-minus"></i>&nbsp;&nbsp;--><i class="icon-rupee"></i>
                                                            <?php echo $discount_amount; ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>


                                                <tr>
                                                    <td  colspan="3">Shipping:</td>
                                                    <td>Free shipping</td>
                                                </tr>

                                                <?php 
                                                $gift_charges=0;
                                                if(isset($_SESSION["gift_box_rate"]))
                                                {
                                                    $cart_res=$this->db->get_where('tbl_cart',array("cart_session"=>session_id()));
                                                    $quantity=0;
                                                    foreach($cart_res->result() as $cart_row)
                                                    {
                                                        $quantity=$quantity+($cart_row->cart_qty);
                                                    }
                                                    $gift_charge_res=$this->db->get_where('tbl_config');
                                                    $gift_charge_row=$gift_charge_res->result();
                                                    if($gift_charge_row[0]->config_giftbox_charge_per_unit=="Yes")
                                                    {
                                                        $_SESSION["gift_box_rate"]=$gift_charge_row[0]->config_giftbox_charge*$quantity;
                                                    }
                                                    else
                                                    {
                                                        $_SESSION["gift_box_rate"]=$gift_charge_row[0]->config_giftbox_charge;
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td  colspan="3"><i class="icon-gift-1" style="font-size:20px;padding-right:10px"></i>Gift Packaging Charges:</td>
                                                        <td><i class="icon-rupee"></i><?php echo $_SESSION["gift_box_rate"]; ?></td>
                                                    </tr>

                                                    
                                                    <?php
                                                    $gift_charges=$_SESSION["gift_box_rate"];
                                                }
                                                
                                                ?>
                                                <input type="hidden" name="txt_gift_charge" id="txt_gift_charge" value="<?php echo $gift_charges; ?>">

                                                <tr id="cod_div" name="cod_div">

                                                </tr>
                                                <tr class="summary-total" id="total_div">
                                                    <td  colspan="3">Total:</td>
                                                    <td><i class="icon-rupee"></i><?php echo $cart_total+$gift_charges-$discount_amount; ?></td>
                                                </tr><!-- End .summary-total -->
                                                <!--<tr class="summary-total" id="cod_total_div"  style="visibility: hidden;display: none">-->
                                                <tr class="summary-total" id="cod_total_div"  style="visibility: hidden;display: none">
                                                    <td  colspan="3">Total:</td>
                                                    <td><i class="icon-rupee"></i><?php echo $cart_total+$gift_charges+$conf_rate_row[0]->config_cod_charge-$discount_amount; ?></td>
                                                </tr>
                                            </tbody>
                                        </table><!-- End .table table-summary -->

                                        <div class="accordion-summary" id="accordion-payment">
                                            <!--
                                            <div class="card">
                                                <div class="card-header" id="heading-1">
                                                    <h2 class="card-title">
                                                        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                            Direct bank transfer
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="heading-2">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                            Check payments
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="heading-3">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                            Cash on delivery
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                                    <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-4">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                            PayPal <small class="float-right paypal-link">What is PayPal?</small>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="heading-5">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                            Credit Card (Stripe)
                                                            <img src="assets/images/payments-summary.png" alt="payments cards">
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                                    <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                                    </div>
                                                </div>
                                            </div>
                                            -->
                                            <input type="hidden" id="txt_payment_type" name="txt_payment_type" value="online">
                                            <script type="text/javascript">
                                                function set_type(type)
                                                {
                                                    //alert(type);
                                                    document.getElementById('txt_payment_type').value=type;

                                                    if(type=="cod")
                                                    {
                                                        var strURL=base_url+"user_ajax/get_cod/";
                                                        //alert(strURL);
                                                        var req = getXMLHTTP();
                                                        if (req) {
                                                            req.onreadystatechange = function() {
                                                                if (req.readyState == 4) {
                                                                    // only if "OK"
                                                                    if (req.status == 200) {
                                                                    //alert(req.responseText);                      
                                                                    //alert(req.responseText);
                                                                        document.getElementById('cod_div').innerHTML=req.responseText;

                                                                        document.getElementById('total_div').style.visibility="hidden";
                                                                        document.getElementById('total_div').style.display="none";
                                                                        document.getElementById('cod_total_div').style.visibility="visible";
                                                                        document.getElementById('cod_total_div').style.display="table-row";
                                                                    } else {
                                                                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                                                                    }
                                                                }               
                                                            }           
                                                            req.open("GET", strURL, true);
                                                            req.send(null);
                                                            
                                                        }    
                                                    }
                                                    else
                                                    {
                                                        var strURL=base_url+"user_ajax/remove_cod/";
                                                        //alert(strURL);
                                                        var req = getXMLHTTP();
                                                        if (req) {
                                                            req.onreadystatechange = function() {
                                                                if (req.readyState == 4) {
                                                                    // only if "OK"
                                                                    if (req.status == 200) {
                                                                    //alert(req.responseText);                      
                                                                        document.getElementById('cod_div').innerHTML="";
                                                                        document.getElementById('total_div').style.visibility="visible";
                                                                        document.getElementById('total_div').style.display="table-row";
                                                                        document.getElementById('cod_total_div').style.visibility="hidden";
                                                                        document.getElementById('cod_total_div').style.display="none";
                                                                    } else {
                                                                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                                                                    }
                                                                }               
                                                            }           
                                                            req.open("GET", strURL, true);
                                                            req.send(null);
                                                            
                                                        }        
                                                    }
                                                }
                                            </script>
                                            <div class="card">
                                                <div class="card-header" id="heading-3">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3" onclick="set_type('cod');">
                                                            Cash on delivery
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                                    <div class="card-body">On COD order you must verify your mobile number with the OTP Number.
                                                        <p><strong>
                                                            <?php 
                                                            if($conf_rate_row[0]->config_cod_charge!=0)
                                                            {
                                                                echo "COD charge : <i class='icon-rupee'></i>".$conf_rate_row[0]->config_cod_charge;
                                                            }
                                                            ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="heading-1">
                                                    <h2 class="card-title">
                                                        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1" onclick="set_type('online');">
                                                            Pay Online
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                            <span class="btn-text">Place Order</span>
                                            <span class="btn-hover-text">Proceed to Checkout</span>
                                        </button>
                                    </div><!-- End .summary -->
                                </aside><!-- End .col-lg-3 -->
                            </div><!-- End .row -->
                        </form>
                    </div><!-- End .container -->
                </div><!-- End .checkout -->
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