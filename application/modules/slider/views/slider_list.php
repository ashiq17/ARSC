
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

            <div class="ibox-title" style="background:#243948">
                <h5 style="color:#D7E1ED"><i class="fa fa-info-circle" aria-hidden="true"></i></i> Add Slider</h5> 
                <div class="ibox-tools ">
                	<a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>slider/slider/add_slider"><i class="fa fa-info-circle" aria-hidden="true"></i> Add Slider</a>
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

                  // echo "<pre>";
                  // print_r($get_slider_image_list);
                  // echo "</pre>";
            ?>
            <div class="ibox-content" style="padding: 0px;">
                <div class="panel-body">

                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane active">

                            <table class="table table-striped table-bordered table-hover" id="myTable" >
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Slider Name</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                </thead>
                                <tbody>
                                	<?php $i=0; ?>
                                	<?php foreach ($get_slider_data as $key => $value): ?>
                                	<?php $i++; ?>	
	                                    <tr class="gradeC">
	                                        <td><?php echo $i;?></td>
	                                        <td><?php echo $value['slider_name'];?></td>
	                                        <!-- <td><?php echo $value['slider_status'];?></td> -->
	                                        <td>
	                                            <?php 
	                                            if($value['slider_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
	                                            Active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
	                                            Inactive</spane>';} 
	                                            ?>
	                                        </td>
	                                        <td class='text-center'>
	                                        	<a class="btn btn-rounded btn-sm btn-icon btn-primary" href="<?php echo base_url();?>slider/slider/slider_image_list/<?php echo $value['slider_id'].'/'.$value['slider_position'];?>" style="margin:5px;"><i class="fa fa-tasks" aria-hidden="true"></i> Manage Photo</a> | 
	                                            <!-- <a class="btn btn-rounded btn-sm btn-icon btn-primary" data-toggle="modal" data-target="#view-modal" data-id="<?php //echo  $value['slider_id'];?>" id="getUser" style="margin:5px;"><i class='glyphicon glyphicon-eye-open'></i> View</a> |  -->
	                                        	<a class="btn btn-rounded btn-sm btn-icon btn-primary" data-toggle="modal" data-target="#view-modal" id="open-sliderModal" data-id="<?php echo $value['slider_id']; ?>"><i class='fa fa-edit'></i> Edit</a> | 
	                                        	<a  data-toggle="modal" data-id="<?php echo $value['slider_id']; ?>" data-title="<?php echo $value['slider_name']; ?>" class="open-deleteModal btn btn-rounded btn-sm btn-icon btn-danger" href="#deleteModal"><i class='fa fa-times text-white text'></i> Delete</a>
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

 <script>
    // $(document).ready(function(){
        
    //     $(document).on('click', '#getUser', function(e){
            
    //         e.preventDefault();
            
    //         var uid = $(this).data('id');   // it will get id of clicked row
    //         // alert(uid); 
    //         $('#dynamic-content').html(''); // leave it blank before ajax call
    //         $('#modal-loader').show();      // load ajax loader
            
    //         $.ajax({
    //             url: BASE_URL+'notice/notice/getuser', 
    //             // url: '$this->load->view(getuser)', 
    //             type: 'POST',
    //             data: 'note_id='+uid,
    //             dataType: 'html'
    //         })
    //         .done(function(data){
    //             console.log(data);  
    //             $('#dynamic-content').html('');    
    //             $('#dynamic-content').html(data); // load response 
    //             $('#modal-loader').hide();        // hide ajax loader   
    //         })
    //         .fail(function(){
    //             $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
    //             $('#modal-loader').hide();
    //         });
            
    //     });
        
    // });

    </script>

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
	var slider_id = $(this).attr('data-id');
	// alert(slider_id);
	$.getJSON("<?php echo base_url();?>slider/slider_info_search?1=1&slider_id="+slider_id, function(data) { 
	        for (i = 0; i <= data.length; i++) {
	        	// alert(data[i].slider_status);
	        	$("#slider_id").val(data[i].slider_id);
	        	$("#slider_name").val(data[i].slider_name);
	        	$("#slider_width").val(data[i].slider_width);
	        	$("#slider_height").val(data[i].slider_height);
	        	// $("#slider_position").val(data[i].slider_position);
                $('#slider_position option[value="'+data[i].slider_position+'"]').prop('selected', 'selected').change();
	        	$('#slider_status option[value="'+data[i].slider_status+'"]').prop('selected', 'selected').change();
	        	// $("#slider_status").val(data[i].slider_status);

	        }
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
    <form action="<?php echo base_url();?>slider/slider/delete_slider" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div id="media-upload" class="panel blank-panel">
                <input type="hidden" id="data_id" name="data_id">
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
                     <i class="fa fa-edit"></i> Slider Edit
                  </h4> 
             </div> 
             <div class="modal-body"> 
                <div id="modal-loader" style="display: none; text-align: center;">
                 <!-- <img src="ajax-loader.gif"> -->
                </div>
                 <!-- content will be load here -->                          
                 <!-- <div id="dynamic-content"></div> -->
                 <div class="tab-content">
                 <div class="tab-pane fade in active" id="tab1default">
                     <form class="well form-horizontal" action="<?php echo base_url();?>slider/slider/slider_edit" method="post" enctype="multipart/form-data">
                         <fieldset>
                             <div class="form-group">
                                 <label style="text-align:left" class="col-md-3 control-label"> <span class="required">*</span>Slider Name</label> 
                                 <input name="slider_id" id="slider_id" type="hidden"> 
                                 <div class="col-md-9 inputGroupContainer">
                                     <input name="slider_name" id="slider_name" class="form-control"  type="text" required>
                                 </div>
                                 <label style="text-align:left" class="col-md-3 control-label"> <span class="required">*</span>Width</label>  
                                 <div class="col-md-9 inputGroupContainer">
                                     <input type="number" name="slider_width" id="slider_width" class="form-control"  type="text" required>
                                 </div>
                                 <label style="text-align:left" class="col-md-3 control-label"> <span class="required">*</span>Height</label>  
                                 <div class="col-md-9 inputGroupContainer">
                                     <input type="number" name="slider_height" id="slider_height" class="form-control"  type="text" required>
                                 </div>
                                <label style="text-align:left" class="col-md-3 control-label"> <span class="required">*</span>Position</label>  
                                <div class="col-md-9 selectContainer">
                                    <select name="slider_position" id="slider_position" class="form-control selectpicker select2" required="required">
                                        <option value="">Select an option</option>
                                        <option value="1">Header Slider</option>
                                        <option value="2">Banner Slider</option>
                                        <option value="3">Footer Slider</option>
                                    </select>
                                </div>
                                <label style="text-align:left" class="col-md-3 control-label"> <span class="required">*</span>Status</label>  
                                <div class="col-md-9 selectContainer">
                                    <select name="slider_status" id="slider_status" class="form-control selectpicker select2" required="required">
                                         <option value="">Select an option</option>
                                         <option value="1">Active</option>
                                         <option value="0">Inactive</option>
                                    </select>
                                </div>
                                 <label style="text-align:left" class="col-md-3 control-label"></label>
                                 <div class="col-md-9"><br>
                                 <input type="button" data-dismiss="modal" class="btn btn-info" value="Close">
                                 <input type="submit" name="submit" class="btn btn-primary" value="Update">
                             </div>
                         </fieldset>
                     </form>
                      </div>
                     </div> 
                 </div>
                   
              </div> 
              <!-- <div class="modal-footer"> 
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
              </div> 
               -->
       </div> 
    </div>
 </div>
<!-- view modal end -->    
</body>
</html>


