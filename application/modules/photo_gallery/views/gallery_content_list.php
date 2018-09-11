
<?php $this->load->view('dashboard/common/header');?>

<!-- Data Tables -->
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
<script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
</script>

<style type="text/css">
.sd-button {
background-color: #333;
border: 1px solid #016938;
border-radius: 3px;
color: #fff;
font-size: 14px;
}

.sd-button:hover {
background-color: #fff;
color: #333;
}
</style>



</head>

<body>
<div id="wrapper">
<?php $this->load->view('dashboard/common/left_nav');?>

<div id="page-wrapper" class="my-bg dashbard-1">
<div class="row border-bottom">
<?php $this->load->view('dashboard/common/top_nav');?>
</div>


<section id="main-content">

<div class="row">
<div class="col-lg-12">

<div class="wrapper wrapper-content">

<div class="row">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div id="" class="panel blank-panel">
        	<?php 
            $gallery_id =$this->uri->segment(4);
        		// $slider_position =$this->uri->segment(5);
            // echo $slider_id;
        	 ?>
            <div class="ibox-title" style="background:#243948">
                <h5 style="color:#D7E1ED"><i class="fa fa-info-circle" aria-hidden="true"></i></i> Gallery Image Info</h5> 
                <div class="ibox-tools ">
                	<a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>photo_gallery/gallery/gallery_list"><i class="fa fa-list" aria-hidden="true"></i> Gallery/Album List</a>
                	<a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>photo_gallery/gallery/new_gallery_content/<?php if(!empty($gallery_id)){echo $gallery_id;} ?>"><i class="fa fa-plus" aria-hidden="true"></i>Add New Gallery Image</a>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            
            <?php
               if($this->session->has_userdata('message')){
            ?>          
                      <div class="alert alert-success text-center successMessage">
                        <strong><?php echo $this->session->message;?></strong>
                      </div>
                     
            <?php          
                      $this->session->unset_userdata('message');
                      
                  }elseif($this->session->has_userdata('error_msg')){
            ?> 

                    <div class="alert alert-danger text-center successMessage">
                      <strong><?php echo $this->session->error_msg;?></strong> 
                    </div>
            <?php 
                    $this->session->unset_userdata('error_msg');
                  }
            ?>
            <div class="ibox-content" style="padding: 0px;">
                <div class="panel-body">

                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane active">

                            <table class="table table-striped table-bordered table-hover" id="myTable" >
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Gallery Title</th>
                                        <th>Caption</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                </thead>
                                <tbody>
                                  <?php 
                                      if (empty($get_gallery_image_list)) {
                                         echo "<tr><td><strong>No data are found!</strong></td></tr>";
                                      }
                                   ?>
                                	<?php $i=0; ?>
                                	<?php foreach ($get_gallery_image_list as $key => $value): ?>
                                	<?php $i++; ?>	
	                                    <tr class="gradeC">
	                                        <td><?php echo $i;?></td>
	                                        <td><?php echo $value['gallery_title'];?></td>
	                                        <td><?php echo $value['ph_caption'];?></td>
	                                        <td><img class="img-responsive" alt="No Image Found" style="height:85px; padding:15px;" src="<?php echo base_url('/images/photo-gallery/').$value['ph_image'];?>"/> </td>
	                                        <td>
	                                            <?php 
	                                            if($value['ph_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
	                                            Active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
	                                            Inactive</spane>';} 
	                                            ?>
	                                        </td>
	                                        <td class='text-center'>
	                                        	<a class="btn btn-rounded btn-sm btn-icon btn-primary" data-toggle="modal" data-target="#view-modal" id="open-sliderModal" data-id="<?php echo $value['photos_id']; ?>"><i class='fa fa-edit'></i> Edit</a> | 
	                                        	<a  data-toggle="modal" data-id="<?php echo $value['photos_id']; ?>" data-title="<?php echo $value['ph_caption']; ?>" class="open-deleteModal btn btn-rounded btn-sm btn-icon btn-danger" href="#deleteModal"><i class='fa fa-times text-white text'></i> Delete</a>
	                                        </td>
	                                    </tr>  
                                    <?php endforeach ?> 
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>                    
</div>                               

</div>
</div>
</div> 
</section>               
</div>        
</div>

<!-- Mainly scripts -->


<?php $this->load->view('dashboard/common/footer_js');?>
<script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

<script>
setTimeout(function() {
      $('.successMessage').fadeOut('slow');
      }, 5000);

$(document).on("click", "#open-sliderModal", function () {
	var photos_id = $(this).attr('data-id');
	$.getJSON("<?php echo base_url();?>photo_gallery/gallery/gallery_content_search?1=1&photos_id="+photos_id, function(data) { 
	        for (i = 0; i <= data.length; i++) {
	        	// alert(data[i].photo_order);
	        	$("#photos_id").val(data[i].photos_id);
	        	$("#ph_image").val(data[i].ph_image);

            // document.getElementById('ph_image').innerHTML = '<img src=<?php echo base_url(); ?>'+ 'images'+'/'+'web_images'+'/' + data[i].ph_image + '>';

            // alert(ph_image);

	        	$("#ph_caption").val(data[i].ph_caption);
	        	$("#photo_order").val(data[i].photo_order);
            $('#ph_status option[value="'+data[i].ph_status+'"]').prop('selected', 'selected').change();
            $('#ph_slider_images option[value="'+data[i].ph_slider_images+'"]').prop('selected', 'selected').change();
            $('#ph_gallery1_image option[value="'+data[i].ph_gallery1_image+'"]').prop('selected', 'selected').change();
	        	$('#ph_gallery2_image option[value="'+data[i].ph_gallery2_image+'"]').prop('selected', 'selected').change();
	        }
	    });

	});
$(document).ready(function(){
    setTimeout(function() {
          $('.successMessage').fadeOut('slow');
          }, 5000);


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah1').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp1").change(function(){
        readURL(this);
    });
       
});

$(document).on("click", ".open-deleteModal", function () {
    var data_id = $(this).attr('data-id');
    var data_title = $(this).attr('data-title');
    
    $("#data_id").val(data_id);
    $("#data_title").html(data_title);
           
});

</script>

<div class="modal fade" id="deleteModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</h4>
</div><!-- modal header -->
	<form action="<?php echo base_url();?>photo_gallery/gallery/delete_gallery_image" method="post" enctype="multipart/form-data">
   <div class="modal-body">
     <div id="media-upload" class="panel blank-panel">
       <input type="hidden" id="data_id" name="data_id">
       <input type="hidden" name="gallery_id" value="<?php echo $gallery_id; ?>">
       <div class="panel-heading">
         <div class="panel-options">
           <h3>Are your sure to delete " <span style="font-size: 12px;" id="data_title"></span> "?</h3>
         </div>
       </div> 
     </div>
   </div><!-- modal body -->
   <div class="modal-footer">
     <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
     <input type="submit" name="submit" class="btn btn-danger" id="submitimgdata" value="Yes" />
     </div><!-- modal footer -->
	</form>
</div><!-- modal content -->
</div><!-- modal dialog -->
</div><!-- modal -->
<!-- view modal start -->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
     <div class="modal-dialog"> 
         <div class="modal-content"> 
             <div class="modal-header"> 
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                  <h4 class="modal-title text-center">
                     <i class="fa fa-edit"></i> Edit Gallery Image
                  </h4> 
             </div> 
             <div class="modal-body"> 
                <div id="modal-loader" style="display: none; text-align: center;">
                 <!-- <img src="ajax-loader.gif"> -->
                </div>
                <div class="tab-pane fade in active" id="tab1default">
                    <form class="well form-horizontal" action="<?php echo base_url();?>photo_gallery/gallery/gallery_image_edit" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <input type="hidden" name="gallery_id" value="<?php echo $gallery_id; ?>" >  
                                <input type="hidden" name="photos_id" id="photos_id">  
                                <label style="text-align:left" class="col-md-3 control-label">Image Upload </label>
                             
                                <input type="hidden" name="old_image" id="ph_image">  
                                <div class="col-md-5 inputGroupContainer">
                                    <input type="file" name="image" id="imgInp1" class="form-control" style="padding-top:5px;height:35px;">
                                </div>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="img-responsive" id="ph_image"></div>
                                    <!-- <img class="img-responsive" alt="No Image Found" style="height:85px; padding:15px;" src=""/> -->
                                    <img class="img-responsive" id="blah1" alt="Image preview here"/> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"> <span class="required">*</span>Caption</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input name="ph_caption" id="ph_caption" class="form-control"  type="text" required>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label">Description</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <textarea class="col-md-12" name="sc_description" id="sc_description" placeholder="Type description"></textarea>
                                </div>
                            </div> -->
                           <div class="form-group">
                               <label style="text-align:left" class="col-md-3 control-label">Order</label>  
                               <div class="col-md-9 inputGroupContainer">
                                   <input name="photo_order" id="photo_order" class="form-control"  type="number">
                               </div>
                           </div>
                           <div class="form-group">
                           <label style="text-align:left" class="col-md-3 control-label">Status</label> 
                               <div class="col-md-9 selectContainer">
                                   <select name="ph_status" id="ph_status" class="form-control selectpicker select2" required="required">
                                        <option value="">Select an option</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group">
                           <label style="text-align:left" class="col-md-3 control-label">Photo Gallery Slider Status</label> 
                               <div class="col-md-9 selectContainer">
                                   <select name="ph_slider_images" id="ph_slider_images" class="form-control selectpicker select2" required="required">
                                        <option value="">Select an option</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group">
                           <label style="text-align:left" class="col-md-3 control-label">Photo Gallery 1 Status</label> 
                               <div class="col-md-9 selectContainer">
                                   <select name="ph_gallery1_image" id="ph_gallery1_image" class="form-control selectpicker select2" required="required">
                                        <option value="">Select an option</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group">
                           <label style="text-align:left" class="col-md-3 control-label">Photo Gallery 2 Status</label> 
                               <div class="col-md-9 selectContainer">
                                   <select name="ph_gallery2_image" id="ph_gallery2_image" class="form-control selectpicker select2" required="required">
                                        <option value="">Select an option</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                   </select>
                               </div>
                           </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></label>
                                <div class="col-md-9"><br>
                                <input type="button" class="btn btn-info" data-dismiss="modal" value="Close">
                                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            </div>
                        </fieldset>
                    </form>
                </div>



                <!-- content will be load here -->                          
                <!-- <div id="dynamic-content"></div> -->
                   
              </div> 
             <!--  <div class="modal-footer"> 
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
              </div>  -->
       </div> 
    </div>
</div>
     <!-- view modal end -->  
</body>
</html>


