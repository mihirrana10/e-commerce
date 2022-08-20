    <style type="text/css">
.navbar-inverse .navbar-nav > li > a {
    color: white;
}
.navbar-inverse .navbar-brand {
    color: white;
}
.top-nav > li > a {
    line-height: 20px;
    color: white;
}
.side-nav > li > ul > li > a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    color: white;
}
.navbar-inverse {
    background-color: lightseagreen;
    border-color: #080808;
}
#page-wrapper {
    padding: 10px;
    min-height: 650px;
}
.side-nav {
   
    overflow-y: auto !important;
max-height: 750px !important;


}


/* Chrome, Safari */
/*
.side-nav::-webkit-scrollbar {
width: 15px;
height: 15px;
}
.side-nav::-webkit-scrollbar-track-piece  {
background-color: #C2D2E4;
}
.side-nav::-webkit-scrollbar-thumb:vertical {
height: 30px;
background-color: #0A4C95;
}
*/
</style>
<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <!--<li class="active">
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>-->

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_category"><i class="fa fa-fw fa-dashboard"></i> Category</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_settings"><i class="fa fa-fw fa-dashboard"></i> Settings</a>
                    </li>
                    
                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_sms_provider"><i class="fa fa-fw fa-dashboard"></i> SMS Settings</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_cms"><i class="fa fa-fw fa-dashboard"></i> CMS</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_order"><i class="fa fa-fw fa-dashboard"></i> Order</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_user"><i class="fa fa-fw fa-dashboard"></i> User</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_slider"><i class="fa fa-fw fa-dashboard"></i> Slider</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_brand"><i class="fa fa-fw fa-dashboard"></i> Brand</a>
                    </li>
                   
                    



                    
                  
                </ul>
            </div>
            