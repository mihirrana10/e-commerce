<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Merchant</h4>
        </div>
        <div class="modal-body">
            <!-- Add Modal Form -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box box-primary">
                            <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_merchant/create" enctype="multipart/form-data">
                                <div class="box-body">
                                        <div class="form-group">
                                                    <label>Merchant Name</label>
                                                    <input class="form-control" id="txt_merchant_name" name="txt_merchant_name">
                                        </div>
                                        <div class="form-group">
                                                    <label>Status</label>
                                                    <?php 
                                                    $radio_array=array("Active","In-Active");
                                                    for($i=0;$i<count($radio_array);$i++)
                                                    {
                                                        ?>
                                                        <input type="radio" id="rdo_merchant_status" name="rdo_merchant_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
                                                        <?php
                                                    }
                                                    ?>
                                        </div>
                                        <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" id="txt_merchant_email" name="txt_merchant_email">
                                        </div>
                                        <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" id="txt_merchant_password" name="txt_merchant_password">
                                        </div>
                                        <div class="form-group">
                                                    <label>Shop Name</label>
                                                    <input class="form-control" id="txt_merchant_shop_name" name="txt_merchant_shop_name">
                                        </div>
                                        <div class="form-group">
                                                    <label>Legal Name</label>
                                                    <input class="form-control" id="txt_merchant_shop_legal_name" name="txt_merchant_shop_legal_name">
                                        </div>
                                        <div class="form-group">
                                                    <label>SEO Slug</label>
                                                    <input class="form-control" id="txt_merchant_slug" name="txt_merchant_slug">
                                        </div>
                                        <div class="form-group">
                                                    <label>Website</label>
                                                    <input class="form-control" id="txt_merchant_external_website" name="txt_merchant_external_website">
                                        </div>
                                        <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" id="txt_merchant_desc" name="txt_merchant_desc" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                                    <label>GSTIN Number</label>
                                                    <input class="form-control" id="txt_merchant_GSTIN_no" name="txt_merchant_GSTIN_no">
                                        </div>
                                        <div class="form-group">
                                                    <label>PAN Number</label>
                                                    <input class="form-control" id="txt_merchant_PAN_no" name="txt_merchant_PAN_no">
                                        </div>
                                        <div class="form-group">
                                                    <label>Bank Name</label>
                                                    <input class="form-control" id="txt_merchant_bank_name" name="txt_merchant_bank_name">
                                        </div>
                                        <div class="form-group">
                                                    <label>Branch Name</label>
                                                    <input class="form-control" id="txt_merchant_bank_branch_name" name="txt_merchant_bank_branch_name">
                                        </div>
                                        <div class="form-group">
                                                    <label>Account Number</label>
                                                    <input class="form-control" id="txt_bank_account_number" name="txt_bank_account_number">
                                        </div>
                                        <div class="form-group">
                                                    <label>IFSC Code</label>
                                                    <input class="form-control" id="txt_bank_branch_ifsc_code" name="txt_bank_branch_ifsc_code">
                                        </div>
                                        <div class="form-group">
                                                    <label>GST Photo</label>
                                                    <input type="file" id="photo_gst" name="photo_gst">
                                        </div>
                                        <div class="form-group">
                                                    <label>PAN Card Copy</label>
                                                    <input type="file" id="photo_pan_cart" name="photo_pan_cart">
                                        </div>
                                        <div class="form-group">
                                                    <label>Cancel Cheque Copy</label>
                                                    <input type="file" id="photo_cancel_cheque" name="photo_cancel_cheque">
                                        </div>
                                        <div class="form-group">
                                                    <label>DOJ</label>
                                                    <div class="input-group date">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="text" class="form-control pull-right" id="txt_merchant_doj" name="txt_merchant_doj" >
                                                    </div>
                                        </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </form>
                        </div></div>
                    
                </div>
            <!-- Add Modal Form Ends -->
        </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>

<div class="content-wrapper">
    
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                  <!--<h3 class="box-title" style="font-size:25px">Merchant List</h3>
                <label style="float:right">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New Merchant</button>
                </label>-->


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="box-title" style="font-size:25px">Merchant List</h3>
                    </div><div class="col-md-3">
                        <form id="search_form" name="search_form" method="post" action="<?php echo base_url()."admin/manage_merchant/search/"; ?>">
                                        <div class="form-group" style="float:right">
                                                <!--<label>Search: -->
                                                    <input class="form-control" type="text" id="txt_search" name="txt_search" placeholder="Search merchant name"  onKeyDown="submit_form(event);"
                                                value="<?php if(isset($search_data))
                                                {echo $search_data; }?>">
                                                <!--</label>-->
                                        </div>
                        </form>
                        <script type="text/javascript">
                            function submit_form(event)
                            {
                                //alert(event.keyCode);
                                if (event.keyCode == 13) 
                                {
                                    //window.location="http://www.google.com";
                                    document.getElementById("search_form").submit();
                                }
                            }
                        </script>
                    </div>
                    <div class="col-md-3">
                        <label style="float:right">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New Merchant</button>
                        </label>
                    </div>
                        
                </div>
            </div>


            <div class="box-body table-responsive no-padding">
            
                <table class="table table-bordered table-hover">
                              <thead>
                                  <th>#</th>
                                <th>Merchant Name</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Shop Name</th>
                                <th>Legal Name</th>
                                <th>SEO Slug</th>
                                <th>Website</th>
                                <th>Description</th>
                                <th>GSTIN Number</th>
                                <th>PAN Number</th>
                                <th>Bank Name</th>
                                <th>Branch Name</th>
                                <th>Account Number</th>
                                <th>IFSC Code</th>
                                <th>GST Photo</th>
                                <th>PAN Card Copy</th>
                                <th>Cancel Cheque Copy</th>
                                <th>DOJ</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            <?php
                            if(!isset($start_position))
                            {
                                $i=1;
                            }
                            else
                            {
                                $i=$start_position;
                            }
                            foreach($resultset->result() as $result_row)
                            {
                            ?>
                                <tr>
                                <td><?php echo $i; ?></td>
                                    <td><?php echo $result_row->merchant_name; ?></td>
                                    <td><?php echo $result_row->merchant_status; ?></td>
                                    <td><?php echo $result_row->merchant_email; ?></td>
                                    <td><?php echo $result_row->merchant_password; ?></td>
                                    <td><?php echo $result_row->merchant_shop_name; ?></td>
                                    <td><?php echo $result_row->merchant_shop_legal_name; ?></td>
                                    <td><?php echo $result_row->merchant_slug; ?></td>
                                    <td><?php echo $result_row->merchant_external_website; ?></td>
                                    <td><?php echo $result_row->merchant_desc; ?></td>
                                    <td><?php echo $result_row->merchant_GSTIN_no; ?></td>
                                    <td><?php echo $result_row->merchant_PAN_no; ?></td>
                                    <td><?php echo $result_row->merchant_bank_name; ?></td>
                                    <td><?php echo $result_row->merchant_bank_branch_name; ?></td>
                                    <td><?php echo $result_row->merchant_bank_account_number; ?></td>
                                    <td><?php echo $result_row->merchant_bank_branch_ifsc_code; ?></td>
                                    <td>
                                    <?php 
                                        if(trim($result_row->merchant_gst_photo)!="")
                                        {
                                        ?>
                                    <img src="<?php echo base_url(); ?>files/admin/merchant/thumb/<?php echo $result_row->merchant_gst_photo; ?>" width="40px">
                                        <?php 
                                        }
                                        ?>
                                    </td>
                                    <td>
                                    <?php 
                                        if(trim($result_row->merchant_pan_card_photo)!="")
                                        {
                                        ?>
                                    <img src="<?php echo base_url(); ?>files/admin/merchant/thumb/<?php echo $result_row->merchant_pan_card_photo; ?>" width="40px">
                                        <?php 
                                        }
                                        ?>
                                    </td>
                                    <td>
                                    <?php 
                                        if(trim($result_row->merchant_cancel_cheque)!="")
                                        {
                                        ?>
                                    <img src="<?php echo base_url(); ?>files/admin/merchant/thumb/<?php echo $result_row->merchant_cancel_cheque; ?>" width="40px">
                                        <?php 
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $result_row->merchant_doj; ?></td>
                                    <td>
                                        <a class="btn btn-success" class="btn btn-info" data-toggle="modal" data-target="#editModal" onclick="get_edit_data(<?php echo $result_row->merchant_id; ?>);"><em class="fa fa-pencil"></em></a>
                                        <a class="btn btn-danger confirm-delete" data-id="<?php echo $result_row->merchant_id; ?>"><em class="fa fa-trash-o"></em></a>
                                    </td>
                                </tr>
                                <?php
                                    $i++;
                                } 
                                ?>
                            </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <?php 
                    if(isset($paging_string))
                    {
                        echo $paging_string; 
                    }
                ?>
              </ul>
            </div>
          </div>
           </div>
      </div>
    </section>
<!-- /.container-fluid -->
</div>
<script type="text/javascript">
function confirmDelete()
{
  return confirm("Are you sure you want to delete this?");
}
</script>
<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Merchant</h4>
        </div>
        <div class="modal-body">
            <!-- Edit Modal Form -->
                <div class="row">
                    <div class="col-lg-12" id="edit_div">
                    </div>
                </div>
            <!-- Edit Modal Form Ends -->
        </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
<script type="text/javascript">
            var controller = "ajax/get_merchant";
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

    function get_edit_data(primary_id)
    {       
        var strURL=base_url+controller+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("edit_div").innerHTML=req.responseText;
                        
                            CKEDITOR.replace( "txt_merchant_desc2", {
                                fullPage: true,
                                allowedContent: true,
                                extraPlugins: "wysiwygarea"
                                 
                                });
                            
                            $('#txt_merchant_doj_2').datepicker({
                                format: 'yyyy-mm-dd',
                                autoclose: true
                            })
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
<div id="deleteModal"  class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">X</a>
                 <h3>Delete Merchant</h3>
            </div>
                <div class="modal-body">
                    <p>You are about to delete.</p>
                    <p>Do you want to proceed?</p>
                </div>
                <div class="modal-footer">
                        <a href="#" id="btnYes" class="btn btn-sm btn-danger">Yes</a>
                        <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-success">No</a>
                    
                </div>
            
        </div>
    </div>
</div>
<script>
$('#deleteModal').on('show', function() {
    var id = $(this).data('id'),
        removeBtn = $(this).find('.danger');
})

$('.confirm-delete').on('click', function(e) {
    e.preventDefault();

    var id = $(this).data('id');
    $('#deleteModal').data('id', id).modal('show');
});

$('#btnYes').click(function() {
    // handle deletion here
    var id = $('#deleteModal').data('id');
    //$('[data-id='+id+']').remove();
    window.location=base_url+'admin/manage_merchant/delete/'+id;
    $('#deleteModal').modal('hide');
});
</script>
<script src='<?php echo base_url(); ?>template/ckeditor/ckeditor.js'></script>
<script>
  $(function () {
      
                                            CKEDITOR.replace( "txt_merchant_desc", {
                                                fullPage: true,
                                                allowedContent: true,
                                                extraPlugins: "wysiwygarea"
                                                 
                                                });
                                            
                                            $('#txt_merchant_doj').datepicker({
                                              format: 'yyyy-mm-dd',
                                              autoclose: true
                                            })
      })
</script>


