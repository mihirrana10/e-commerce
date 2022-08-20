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
                                       <h2 class="title mb-1">Edit Profile</h2><!-- End .title mb-2 -->
                                       <!--<p class="lead text-primary">
                                          We collaborate with ambitious brands and people; we’d love to build something great together.
                                       </p>--><!-- End .lead text-primary -->
                                       <p class="mb-3">Update Your Information</p>
                                       </div><!-- End .text-center -->
                                       <?php 
                                       if(isset($msg))
                                       {
                                          echo $msg;
                                       }
                                       ?>
                                       <form action="<?php echo base_url(); ?>user/edit_profile/do_update" class="contact-form mb-3" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="cname" >Name</label>
                                                    <input type="text" class="form-control" id="txt_full_name" name="txt_full_name" value="<?php echo $customer_row[0]->customer_full_name; ?>" required>
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label for="cemail" >Email</label>
                                                    <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Email *" required disabled="disabled"  value="<?php echo $customer_row[0]->customer_email_address; ?>" >
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="cphone">Phone</label>
                                                    <input type="tel" class="form-control" id="txt_mobile" name="txt_mobile" placeholder="Phone"  value="<?php echo $customer_row[0]->customer_mobile_number; ?>" >
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label for="csubject" >Profile Pic</label>
                                                    <img src="<?php echo base_url(); ?>files/admin/customer/thumb/<?php echo $customer_row[0]->customer_profile_pic; ?>">
                                                    <input type="file" class="form-control" id="img_profile_pic" name="img_profile_pic">
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="cname" >Date of Birth</label>
                                                    <input type="date" class="form-control" id="txt_dob" name="txt_dob"  required 
                                                    value="<?php echo $customer_row[0]->customer_dob; ?>" >
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label for="cemail" >Gender</label>
                                                    <br>
                                                    <?php 
                                                    $gender_array=array("Male","Female","Other");
                                                    for($i=0;$i<count($gender_array);$i++)
                                                    {
                                                      if($customer_row[0]->customer_gender==$gender_array[$i])
                                                      {
                                                        ?>
                                                        <input type="radio" id="rdo_gender" name="rdo_gender" value="<?php echo $gender_array[$i]; ?>" style="margin-right:5px" checked="checked"><?php echo $gender_array[$i]; ?>
                                                        <?php

                                                      }
                                                      else
                                                      {
                                                        ?>
                                                        <input type="radio" id="rdo_gender" name="rdo_gender" value="<?php echo $gender_array[$i]; ?>" style="margin-right:5px" ><?php echo $gender_array[$i]; ?>
                                                        <?php
                                                      }
                                                      ?>
                                                      
                                                      <?php
                                                    }
                                                    ?>
                                                    
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="cname" >Address Line 1</label>
                                                    <input type="text" class="form-control" id="txt_address_line1" name="txt_address_line1" value="<?php echo $customer_row[0]->customer_address_line1; ?>" required>
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label for="cemail" >Address Line 2</label>
                                                    <input type="text" class="form-control" id="txt_address_line2" name="txt_address_line2" value="<?php echo $customer_row[0]->customer_address_line2; ?>" >
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->


                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="cname" >Country</label>
                                                    <select class="form-control" id="cmb_country" name="cmb_country" onchange="get_state(this.value);">
                                                      <?php
                                                      $country_res=$this->db->get_where('tbl_country');
                                                      foreach($country_res->result() as $country_row)
                                                      {
                                                        if($country_row->country_id==$customer_row[0]->customer_country_id)
                                                        {
                                                          ?>
                                                          <option value="<?php echo $country_row->country_id; ?>" selected='selected'>
                                                          <?php echo $country_row->country_name; ?>
                                                          </option>
                                                          <?php
                                                        }
                                                        else
                                                        {
                                                          ?>
                                                          <option value="<?php echo $country_row->country_id; ?>">
                                                          <?php echo $country_row->country_name; ?></option>
                                                          <?php
                                                        }
                                                      }
                                                      ?>
                                                    </select>
                                                </div><!-- End .col-sm-6 -->
                                                <div class="col-sm-4">
                                                    <label for="cname" >State</label>
                                                    <select class="form-control" id="cmb_state" name="cmb_state"  onchange="get_city(this.value);">
                                                      <?php
                                                      
                                                      $state_res=$this->db->get_where('tbl_state',array('country_id'=>$customer_row[0]->customer_country_id));
                                                      foreach($state_res->result() as $state_row)
                                                      {
                                                        if($state_row->state_id==$customer_row[0]->customer_state_id)
                                                        {
                                                          ?>
                                                          <option value="<?php echo $state_row->state_id; ?>" selected='selected'>
                                                          <?php echo $state_row->state_name; ?></option>
                                                          <?php
                                                        }
                                                        else
                                                        {
                                                          ?>
                                                          <option value="<?php echo $state_row->state_id; ?>">
                                                          <?php echo $state_row->state_name; ?></option>
                                                          <?php
                                                        }
                                                      }
                                                      
                                                      ?>
                                                    </select>
                                                </div><!-- End .col-sm-6 -->
                                                <div class="col-sm-4">
                                                    <label for="cname" >City</label>
                                                    <select class="form-control" id="cmb_city" name="cmb_city">
                                                      <?php
                                                      
                                                      $city_res=$this->db->get_where('tbl_city',array('state_id'=>$customer_row[0]->customer_state_id));
                                                      foreach($city_res->result() as $city_row)
                                                      {
                                                        if($city_row->city_id==$customer_row[0]->customer_city)
                                                        {
                                                          ?>
                                                          <option value="<?php echo $city_row->city_id; ?>" selected='selected'>
                                                          <?php echo $city_row->city_name; ?></option>
                                                          <?php
                                                        }
                                                        else
                                                        {
                                                          ?>
                                                          <option value="<?php echo $city_row->city_id; ?>">
                                                          <?php echo $city_row->city_name; ?></option>
                                                          <?php  
                                                        }
                                                        
                                                      }
                                                      
                                                      ?>
                                                    </select>
                                                </div><!-- End .col-sm-6 -->

                                                
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="cname" >Postal Code</label>
                                                    <input type="text" class="form-control" id="txt_postal_code" name="txt_postal_code" value="<?php echo $customer_row[0]->customer_postal_code; ?>" required>
                                                </div>

                                                
                                            </div>



                                            

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
