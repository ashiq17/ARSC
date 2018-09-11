<?php $this->load->view('dashboard/common/header');?>
<script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/ckeditor/ckeditor.js"></script>

<link href="<?php echo base_url();?>assets/dashboard/css/upload.css" rel="stylesheet">
<style type="text/css">
.modal-dialog, .modal-content {
    /*width: 98%;*/
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}
.modal-dialog, .modal-content {
    /*width: 98%;*/
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}
.modal-body {
    position: relative;
    width: 100%;
    height: 80%;
}
.modal-footer {
    position: relative;
    width: 100%;
    height: 20%;
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
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title" style="background:#243948">
                                        <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i> Header Info</h5> 
                                        <div class="ibox-tools">
                                            <a class="btn btn-primary" style="padding: 0 10px 0 10px;" data-toggle="modal" data-target="#view-modal" data-id="<?php //echo  $value['note_id'];?>" id="getUser"><i class='fa fa-eye'></i> View</a>

                                            <!-- <a class="btn btn-rounded btn-sm btn-icon btn-primary" data-toggle="modal" data-target="#view-modal" data-id="<?php echo  $value['note_id'];?>" id="getUser" style="margin:5px;"><i class='glyphicon glyphicon-eye-open'></i> View</a> -->

                                            <a class="btn btn-primary" style="padding: 0 10px 0 10px;" data-toggle="modal" data-target="#view-modal" data-id="<?php //echo  $value['note_id'];?>" id="edit_header"><i class='fa fa-edit'></i> Edit</a>

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
                                    <div class="ibox-content col-md-12" style="padding:15px 0;">
                                        <div class="panel with-nav-tabs panel-default">
                                    <div class="panel-heading">
                                            <ul class="nav nav-tabs tab-menu">
                                                <li class="active"><a href="#tab1default" data-toggle="tab">Header Info Add</a></li>
                                            </ul>
                                    </div>
                                    <div class="panel-body">
                                    <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                        <form class="well form-horizontal" action="<?php echo base_url();?>webbackend/web/header_info_add" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                            	<div class="form-group">
                                            	    <label style="text-align:left" class="col-md-2 control-label"><span >*</span>Image Upload </label>  
                                            	    <div class="col-md-3 inputGroupContainer">
                                            	        <input type="file" name="image" id="imgInp" class="form-control" style="padding-top:5px;height:35px;">
                                            	    </div>
                                            	    <div class="col-md-3 inputGroupContainer">
                                            	        <img class="img-responsive" id="blah" alt="Image Preview Here" />  
                                            	    </div>
                                            	</div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"> <span >*</span>Mobile No.</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input onchange="userid_keyup()" name="mobile_no" id="employee_id" class="form-control"  type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label">Email</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input name="email" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                               <div class="form-group">
                                                   <label style="text-align:left" class="col-md-2 control-label">Add Link</label>  
                                                   <div class="col-md-6 inputGroupContainer">
                                                       <input name="add_link" class="form-control"  type="text">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label style="text-align:left" class="col-md-2 control-label">Extra Info</label>  
                                                   <div class="col-md-6 inputGroupContainer">
                                                       <input name="extra_info" class="form-control"  type="text">
                                                   </div>
                                               </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"></label>
                                                    <div class="col-md-6"><br>
                                                    <input type="reset" name="reset" class="btn btn-info" value="Reset">
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                                                </div>
                                            </fieldset>
                                        </form>
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
</h4>

<?php $this->load->view('dashboard/common/footer_js');?>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	    setTimeout(function() {
	          $('.successMessage').fadeOut('slow');
	          }, 5000);


	    function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            
	            reader.onload = function (e) {
	                $('#blah').attr('src', e.target.result);
	            }
	            
	            reader.readAsDataURL(input.files[0]);
	        }
	    }
	    
	    $("#imgInp").change(function(){
	        readURL(this);
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
</script>
<script>
//javaScriptForTransactablevar non_ptnID;   var non_GroupID;
$(document).on("click", ".open-deleteModal", function () {
var roleId = $(this).attr('data-roleid');
var roleTitle = $(this).attr('data-title');
//alert(newsTitle);
$("#roleName").html(roleTitle);
$("#deleteRoleID").val(roleId);

});

$(document).on("click", "#edit_header", function () {
    var roleId = $(this).attr('data-roleid');
    var roleTitle = $(this).attr('data-title');
    //alert(newsTitle);
    $("#roleName").html(roleTitle);
    $("#deleteRoleID").val(roleId);

});
</script>

<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i> Delete This Role!</h4>

            </div><!-- modal header -->

            <form action="<?php echo base_url();?>employee/employee/delete_note" method="post" enctype="multipart/form-data">

                <div class="modal-body">
                    <div id="media-upload" class="panel blank-panel">
                        <input type="hidden" id="deleteRoleID" name="note_id" value="">

                        <div class="panel-heading">
                            <div class="panel-options">

                                <h3>Are your sure to delete " <span style="font-size: 12px;" id="roleName"></span> " leave note?</h3>
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
                     <i class="fa fa-edit"></i> Edit Header
                  </h4> 
             </div> 
             <div class="modal-body"> 
             
                <div id="modal-loader" style="display: none; text-align: center;">
                 <!-- <img src="ajax-loader.gif"> -->
                </div>
                <div class="tab-pane fade in active" id="tab1default">
                    <form class="well form-horizontal" action="<?php echo base_url();?>webbackend/web/header_info_edit" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <input type="hidden" name="header_id"  value="<?php if(!empty($header_data[0]['header_info_id'])){echo $header_data[0]['header_info_id'];}?>">  
                                <label style="text-align:left" class="col-md-3 control-label">Image Upload </label>
                                <?php 
                                    if (!empty($header_data[0]['image'])) {
                                        $header_image = $header_data[0]['image'];
                                    }
                                 ?>
                                <input type="hidden"  id="old"  name="old_image"  value="<?php if(!empty($header_image)){echo $header_image;} ?>">  
                                <div class="col-md-5 inputGroupContainer">
                                    <input type="file" name="image" id="imgInp1" class="form-control" style="padding-top:5px;height:35px;">
                                </div>
                                <div class="col-md-4 inputGroupContainer">
                                    <?php if (!empty($header_image)): ?>
                                    <img class="img-responsive" id="blah1" alt="No Image Found" src="<?php echo base_url('/images/web_images/').$header_image;?>"/>  
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Mobile No.</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($header_data[0]['mobile'])){echo $header_data[0]['mobile'];}?>" name="mobile_no" id="employee_id" class="form-control"  type="text" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Email</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($header_data[0]['email'])){echo $header_data[0]['email'];}?>" name="email" class="form-control"  type="text">
                                </div>
                            </div>
                           <div class="form-group">
                               <label style="text-align:left" class="col-md-3 control-label">Add Link</label>  
                               <div class="col-md-9 inputGroupContainer">
                                   <input value="<?php if(!empty($header_data[0]['add_link'])){echo $header_data[0]['add_link'];}?>" name="add_link" class="form-control"  type="text">
                               </div>
                           </div>
                           <div class="form-group">
                               <label style="text-align:left" class="col-md-3 control-label">Extra Info</label>  
                               <div class="col-md-9 inputGroupContainer">
                                   <input value="<?php if(!empty($header_data[0]['extra_info'])){echo $header_data[0]['extra_info'];}?>" name="extra_info" class="form-control"  type="text">
                               </div>
                           </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></label>
                                <div class="col-md-6"><br>
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
   




