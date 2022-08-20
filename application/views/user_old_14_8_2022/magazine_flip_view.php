<?php
$this->db->join('tbl_product_new','tbl_catalogue_product.product_id=tbl_product_new.product_id'); 
$catalogue_res=$this->db->get_where('tbl_catalogue_product',array('tbl_catalogue_product.catalogue_id'=>$catalogue_id));


$cat_res=$this->db->get_where('tbl_catalogue',array('catalogue_id'=>$catalogue_id));
$cat_row=$cat_res->result();

?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="<?php echo base_url(); ?>template/user/turn/js/jquery.min.1.7.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/user/turn/js/modernizr.2.5.3.min.js"></script>
</head>
<body>
<center><h3 style="padding-bottom: 40px"><?php echo $cat_row[0]->catalogue_name; ?></h3></center>
	
<div class="flipbook-viewport" style="margin-top:20px">
	<div class="container">

		<div class="flipbook" style="margin-top:30px">
			<?php 
			foreach($catalogue_res->result() as $catalogue_row)
			{
				?>
				<div style="background-image:url(<?php echo base_url(); ?>files/admin/product/<?php echo $catalogue_row->product_image; ?>)"></div>
				<?php
			}
			?>
			<!--<div style="background-image:url(pages/1.jpg)"></div>
			<div style="background-image:url(pages/2.jpg)"></div>
			<div style="background-image:url(pages/3.jpg)"></div>
			<div style="background-image:url(pages/4.jpg)"></div>
			<div style="background-image:url(pages/5.jpg)"></div>
			<div style="background-image:url(pages/6.jpg)"></div>
			<div style="background-image:url(pages/7.jpg)"></div>
			<div style="background-image:url(pages/8.jpg)"></div>
			<div style="background-image:url(pages/9.jpg)"></div>
			<div style="background-image:url(pages/10.jpg)"></div>
			<div style="background-image:url(pages/11.jpg)"></div>
			<div style="background-image:url(pages/12.jpg)"></div>-->
		</div>
	</div>
</div>


<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['<?php echo base_url(); ?>template/user/turn/lib/turn.js'],
	nope: ['<?php echo base_url(); ?>template/user/turn/lib/turn.html4.min.js'],
	both: ['<?php echo base_url(); ?>template/user/turn/css/basic.css'],
	complete: loadApp
});

</script>

</body>
</html>

<style type="text/css">
	body {
	    font: normal 300 1.4rem/1.86 "Poppins", sans-serif;
	    color: 
	    #333;
	}
</style>