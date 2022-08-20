<aside class="col-lg-2 order-lg-first">
   <div class="sidebar sidebar-shop">
   	  <div class="widget widget-clean" style="margin: 0 0 0rem;">
            <label>Filters:</label>
            <!--<a href="<?php echo base_url(); ?>user/search" class="sidebar-filter-clear">Clean All
            </a>-->

            <a href="<?php echo base_url(); ?>user/search">Clear All
            </a>

      </div>
      <?php 
         $this->db->order_by('attribute_order','asc');
         $attribute_res=$this->db->get_where('tbl_attribute');
         $cnt=10;
         foreach($attribute_res->result() as $attribute_row)
         {
         	$attribute_type=$attribute_row->attribute_type;
         	?>
      <div class="widget widget-collapsible">
         <h3 class="widget-title">
            <a data-toggle="collapse" href="#widget-<?php echo $cnt; ?>" role="button" aria-expanded="true" aria-controls="widget-<?php echo $cnt; ?>">
            <?php echo $attribute_row->attribute_display_title; ?>
            </a>
         </h3>
         <!-- End .widget-title -->
         <?php 
            if($attribute_type=="Select")
            {
            ?>
         <div class="collapse show" id="widget-<?php echo $cnt; ?>">
            <div class="widget-body">
               <div class="filter-items">
                  <?php 
                     $attr_value_res=$this->db->get_where('tbl_attribute_value',array('attribute_id'=>$attribute_row->attribute_id));
                     foreach($attr_value_res->result() as 
                     	$attr_value_row)
                     {
                     ?>
                  <div class="filter-item">
                     <div class="custom-control custom-checkbox">
                        <input
                           <?php 
                              if(in_array($attr_value_row->attribute_value_id, $attr_array))
                              {
                              	//echo "checked='checked'";
                              	?>
                           onchange="remove_cat_attr('<?php echo $attribute_row->attribute_slug; ?>',<?php echo $attr_value_row->attribute_value_id; ?>)"
                           <?php
                              }
                              else
                              {
                              	?>
                           onchange="callme('<?php echo $attribute_row->attribute_slug; ?>',<?php echo $attr_value_row->attribute_value_id; ?>)"
                           <?php
                              }
                              ?>
                           type="checkbox" 
                           <?php 
                              if(in_array($attr_value_row->attribute_value_id, $attr_array))
                              {
                              	echo "checked='checked'";
                              }
                              ?>
                           class="custom-control-input" id="search-attr-<?php echo $attr_value_row->attribute_value_id; ?>">
                        <label class="custom-control-label" for="search-attr-<?php echo $attr_value_row->attribute_value_id; ?>"><?php echo $attr_value_row->attribute_value; ?></label>
                     </div>
                     <!-- End .custom-checkbox -->
                  </div>
                  <!-- End .filter-item -->
                  <?php 
                     }
                     ?>
               </div>
               <!-- End .filter-items -->
            </div>
            <!-- End .widget-body -->
         </div>
         <!-- End .collapse -->
         <?php 
            }
            else if($attribute_type=="Color/Pattern")
            {
            ?>
         <div class="collapse show" id="widget-<?php echo $cnt; ?>">
            <div class="widget-body">
               <div class="filter-colors">
                  <?php 
                     $attr_value_res=$this->db->get_where('tbl_attribute_value',array('attribute_id'=>$attribute_row->attribute_id));
                     foreach($attr_value_res->result() as 
                     	$attr_value_row)
                     {
                     	?>
                  <a 
                     <?php 
                        if(in_array($attr_value_row->attribute_value_id, $attr_array))
                        {
                        	//echo "checked='checked'";
                        	?>
                     href="<?php echo base_url(); ?>user/remove_search_query/<?php echo $attribute_row->attribute_slug; ?>/<?php echo $attr_value_row->attribute_value_id; ?>" 
                     <?php
                        }
                        else
                        {
                        	?>
                     href="<?php echo base_url(); ?>user/search_query/<?php echo $attribute_row->attribute_slug; ?>/<?php echo $attr_value_row->attribute_value_id; ?>" title="<?php echo $attr_value_row->attribute_value; ?>"
                     <?php
                        }
                        ?>
                     <?php 
                        if(in_array($attr_value_row->attribute_value_id, $attr_array))
                        {
                        	echo "class='selected'";
                        }
                        ?>
                     style="background:<?php echo $attr_value_row->attribute_value_color_hexcode; ?>"><span class="sr-only"><?php echo $attr_value_row->attribute_value; ?></span>
                  <?php
                     if(trim($attr_value_row->attribute_value_pattern_img)!="")
                     {
                     	?>
                  <img src="<?php echo base_url(); ?>files/admin/pattern/<?php echo $attr_value_row->attribute_value_pattern_img; ?>">
                  <?php 
                     }
                      ?>
                  </a>
                  <?php
                     }
                     ?>
                  
               </div>
               <!-- End .filter-colors -->
            </div>
            <!-- End .widget-body -->
         </div>
         <!-- End .collapse -->
         <?php 
            }
            ?>
      </div>
      <!-- End .widget -->
      <?php
         $cnt++;
         }
         ?>
      
      <div class="widget widget-collapsible">
         <h3 class="widget-title">
            <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
            Price
            </a>
         </h3>
         <!-- End .widget-title -->
         <div class="collapse show" id="widget-5">
            <div class="widget-body">
               <div class="filter-price">
                  <div class="filter-price-text">
                     Price :
                     <span id="filter-price-range"></span>
                  </div>
                  <!-- End .filter-price-text -->
                  <div id="price-slider"></div>
                  <!-- End #price-slider -->
               </div>
               <!-- End .filter-price -->
            </div>
            <!-- End .widget-body -->
         </div>
         <!-- End .collapse -->
      </div>
      <!-- End .widget -->
   </div>
   <!-- End .sidebar sidebar-shop -->
</aside>
<!-- End .col-lg-3 -->
<script type="text/javascript">
   function callme(action,id)
   {
   	//alert("<?php echo base_url(); ?>user/search_query/"+action+"/"+id);
   	window.location="<?php echo base_url(); ?>user/search_query/"+action+"/"+id;

   }
   
   function remove_cat_attr(action,id)
   {
   	window.location="<?php echo base_url(); ?>user/remove_search_query/"+action+"/"+id;
   }
   
   
</script>
<input type="text" id="txt_base_url" name="txt_base_url" value="<?php echo base_url(); ?>">
<input type="text" id="txt_query_string" name="txt_query_string" value="<?php echo $query_str; ?>">
<input type="text" id="from_price" name="from_price">
<input type="text" id="to_price" name="to_price">
