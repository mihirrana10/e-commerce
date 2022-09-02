<?php 
$customer_row=$customer_res->result();
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
            include_once('header.php');
            ?>
         <main class="main">
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
               <div class="container">
                  <h1 class="page-title">My Account<span>Shop</span></h1>
               </div>
               <!-- End .container -->
            </div>
            <!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
               <div class="container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Shop</a></li>
                     <li class="breadcrumb-item active" aria-current="page">My Account</li>
                  </ol>
               </div>
               <!-- End .container -->
            </nav>
            <!-- End .breadcrumb-nav -->
            <div class="page-content">
               <div class="dashboard">
                  <div class="container">
                     <div class="row">
                        <?php 
                             include_once('customer_left_menu.php');
                        ?>
                        <!-- End .col-lg-3 -->
                        <div class="col-md-10 col-lg-10">
                           
                                 <div class="touch-container row justify-content-center">
                                    <div class="col-md-10 col-lg-10 ">
                                       <div class="text-center">
                                       <h2 class="title mb-1">Saved Address</h2><!-- End .title mb-2 -->
                                       <!--<p class="lead text-primary">
                                          We collaborate with ambitious brands and people; we’d love to build something great together.
                                       </p>--><!-- End .lead text-primary -->
                                       <!--<p class="mb-3">Edit Address or Create New Address</p>-->
                                       </div><!-- End .text-center -->
                                       
                                       <div class="row">
                                                        <?php 
                                                        $this->db->join('tbl_country','tbl_country.country_id=tbl_address.address_country_id');
                                                        $this->db->join('tbl_state','tbl_state.state_id=tbl_address.address_state_id');
                                                        $this->db->join('tbl_city','tbl_city.city_id=tbl_address.address_city_id');

                                                        //$this->db->join('tbl_country','tbl_country.country_id=address_country_id');
                                                        $saved_addr_res=$this->db->get_where('tbl_address',array('tbl_address.user_id'=>$_SESSION["user_id"]));
                                                        foreach($saved_addr_res->result() as $saved_addr_row)
                                                        {
                                                          ?>
                                                          <div class=" col-md-5 col-lg-5 summary" id="div_1">
                                                              <p><strong><?php echo $saved_addr_row->address_person_name; ?></strong></p>
                                                              <p><?php echo $saved_addr_row->address_company_name; ?></p>
                                                              <p><?php echo $saved_addr_row->address_line1.", ".$saved_addr_row->address_line2.", ".$saved_addr_row->address_pincode; ?></p>
                                                              
                                                              <p><?php echo $saved_addr_row->city_name.", ".$saved_addr_row->state_name.", ".$saved_addr_row->country_name; ?></p>
                                                              <p><?php echo $saved_addr_row->address_email; ?></p>
                                                              <p><?php echo $saved_addr_row->address_phone_number; ?></p>
                                                              
                                                              
                                                              <label class="btn btn-outline-primary-2" style="margin-top:10px">
                                                                  <input type="radio"  name="cmb_selected_address" value="<?php echo $saved_addr_row->address_id; ?>" onclick="select_address(<?php echo $saved_addr_row->address_id; ?>)" style="margin-right:10px"> Edit Address
                                                              </label>
                                                          </div>
                                                          
                                                          <?php
                                                        }
                                                        ?>
                                                    
                                                        <!--
                                                        <div class=" col-md-5 col-lg-5 summary" id="div_1">
                                                            <p><strong>Sandip Shirawala</strong></p>
                                                            <p>C-26, LAXMI NAGAR</p>
                                                            <p></p>
                                                            <p>Abrama - 395004</p>
                                                            
                                                            <label class="btn btn-outline-primary-2" for="1" style="margin-top:10px">
                                                                <input type="radio" id="1" name="cmb_selected_address" value="1" onclick="select_address(1)" style="margin-right:10px"> Edit Address
                                                            </label>
                                                        </div>
                                                        
                                                        <div class=" col-md-5 col-lg-5 summary" id="div_2">
                                                            <p><strong>Sandip Shirawala</strong></p>
                                                            <p>katargam</p>
                                                            <p>surat</p>
                                                            <p>Abrama - 395004</p>
                                                            
                                                            <label class="btn btn-outline-primary-2" for="2" style="margin-top:10px">
                                                                <input type="radio" id="2" name="cmb_selected_address" value="2" onclick="select_address(2)" style="margin-right:10px"> Select Address
                                                            </label>
                                                        </div>
                                                        -->
                                                                                                    

                                                <script type="text/javascript">
                                                        var controller2 = "user_ajax/get_address";
                                                        var base_url = "http://localhost/vimla_adminlte/";

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
                                        <form action="<?php echo base_url(); ?>user/saved_address/update" class="contact-form mb-3" method="post">
                                          <?php 
                                          if(isset($msg))
                                          {
                                            echo $msg;
                                          }
                                          ?>
                                            <input type="hidden" id="txt_selected_address_id" name="txt_selected_address_id">
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




                                            

                                            <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                                <span>SUBMIT</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                        </form><!-- End .contact-form -->
                                    </div><!-- End .col-md-9 col-lg-7 -->
                                 </div>
                        </div>
                        <!-- End .col-lg-9 -->
                     </div>
                     <!-- End .row -->
                  </div>
                  <!-- End .container -->
               </div>
               <!-- End .dashboard -->
            </div>
            <!-- End .page-content -->
         </main>
         <!-- End .main -->
         <?php 
            include_once('footer.php');
            ?>
      </div>
      <!-- End .page-wrapper -->
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
   .table td 
   {
   padding-top: 0rem;
   padding-bottom: 0rem;
   padding:0px;
   }
   .table th, .table thead th, .table td {
   border-top: none;
   border-bottom:none;
   }
   th
   {
   }
   .card-title a i 
   {
   margin-left:0px;
   min-width: 17px;
   margin-right: 0rem;
   }
   .accordion {
   margin-bottom: 1rem;
   }

   .card-header {
       background-color: 
       #e5e5e5;
   }

   .table .price-col
   {
      text-align: right;
   }

   .summary
   {
    margin-right: 2rem;
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
</script>
