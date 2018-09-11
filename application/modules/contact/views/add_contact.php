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
    padding: 0px 0px 0px 0px;
}
.modal-body {
    position: relative;
    width: 100%;
    height: 100%;
}
.modal-header {
    position: relative;
    width: 100%;
    height: 100%;
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
                                    <div class="ibox-title" style="background:#1969ca">
                                        <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i> contact Info</h5> 
                                        <div class="ibox-tools">
                                            <a class="btn btn-primary" style="padding: 0 10px 0 10px;" data-toggle="modal" data-target="#view-modal" data-id="<?php //echo  $value['note_id'];?>" id="getUser"><i class='fa fa-eye'></i> View</a>

                                            <!-- <a class="btn btn-rounded btn-sm btn-icon btn-primary" data-toggle="modal" data-target="#view-modal" data-id="<?php echo  $value['note_id'];?>" id="getUser" style="margin:5px;"><i class='glyphicon glyphicon-eye-open'></i> View</a> -->

                                            <a class="btn btn-primary" style="padding: 0 10px 0 10px;" data-toggle="modal" data-target="#view-modal" data-id="<?php //echo  $value['note_id'];?>" id="edit_contact"><i class='fa fa-edit'></i> Edit</a>

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
                                                <li class="active"><a href="#tab1default" data-toggle="tab">contact Info Add</a></li>
                                            </ul>
                                    </div>
                                    <div class="panel-body">
                                    <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                        <form class="well form-horizontal" action="<?php echo base_url();?>contact/contact/add_contact_info" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                            	<div class="form-group">
                                            	    <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Image Upload </label>  
                                            	    <div class="col-md-3 inputGroupContainer">
                                            	        <input type="file" name="image" id="imgInp" class="form-control" style="padding-top:5px;height:35px;">
                                            	    </div>
                                            	    <div class="col-md-3 inputGroupContainer">
                                            	        <img class="img-responsive" id="blah" alt="Image Preview Here" />  
                                            	    </div>
                                            	</div>
                                              <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"> <span class="required"></span>contact Title</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input  name="contact_title" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"> <span class="required"></span>Mobile No.</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input  name="mobile_no" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"> <span class="required"></span>Telephone No.</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input  name="telephone_no" class="form-control" type="text" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label">Email</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input name="email" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label">Website</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input name="website" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label">Address1</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input name="address1" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label">Address2</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input name="address2" class="form-control"  type="text">
                                                    </div>
                                                </div>
                                               
                                               <div class="form-group">
                                                   <label style="text-align:left" class="col-md-2 control-label">Facebook Link</label>  
                                                   <div class="col-md-6 inputGroupContainer">
                                                       <input name="facebook_link" class="form-control"  type="text">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label style="text-align:left" class="col-md-2 control-label">Twitter Link</label>  
                                                   <div class="col-md-6 inputGroupContainer">
                                                       <input name="twitter_link" class="form-control"  type="text">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label style="text-align:left" class="col-md-2 control-label">YouTube Link</label>  
                                                   <div class="col-md-6 inputGroupContainer">
                                                       <input name="youtube_link" class="form-control"  type="text">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label style="text-align:left" class="col-md-2 control-label">Add Link1</label>  
                                                   <div class="col-md-6 inputGroupContainer">
                                                       <input name="add_link1" class="form-control"  type="text">
                                                   </div>
                                               </div>
                                               <div class="form-group">
                                                   <label style="text-align:left" class="col-md-2 control-label">Add Link2</label>  
                                                   <div class="col-md-6 inputGroupContainer">
                                                       <input name="add_link2" class="form-control"  type="text">
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

$(document).on("click", "#edit_contact", function () {
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
            <div class="modal-contact">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i> Delete This Role!</h4>

            </div><!-- modal contact -->

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

                <div class="modal-contact">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                    <input type="submit" name="submit" class="btn btn-danger" id="submitimgdata" value="Yes" />
                </div><!-- modal contact -->

            </form>
        </div><!-- modal content -->
    </div><!-- modal dialog -->
</div><!-- modal -->
<!-- view modal start -->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
     <div class="modal-dialog"> 
         <div class="modal-content"> 
        
             <div class="modal_contact"> 
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                  <h4 class="modal-title text-center">
                     <i class="fa fa-edit"></i> Edit contact
                  </h4> 
             </div> 
             <div class="modal-body"> 
             
                <div id="modal-loader" style="display: none; text-align: center;">
                 <!-- <img src="ajax-loader.gif"> -->
                </div>
                <div class="tab-pane fade in " id="tab1default">
                    <form class="well form-horizontal" action="<?php echo base_url();?>contact/contact/contact_info_edit" method="post" enctype="multipart/form-data">
                        <fieldset>
                          
                             <div class="row">
                                <input type="hidden" name="contact_id"  value="<?php if(!empty($contact_data[0]['ContactID'])){echo $contact_data[0]['ContactID'];}?>">  
                                    <div class="col-lg-12">
                                        <div class="ibox">
                                          <div class="ibox-content">
                                            <div class="col-md-6">
                                                <p>Old Image</p>
                                                <input type="hidden"  id="old"  name="old_image"  value="<?php echo $contact_data['0']['Image']; ?>">
                                                    <br>
                                                <img class="img-responsive" id="" style="width:160px;height:100px;" alt="No Image Found" src="<?php echo base_url('/assets/images/contactImages/').$contact_data['0']['Image']?>"/>

                                            </div>
                                            <div class="col-md-6">
                                                <p>New Image</p>
                                                   <input type="file" style="margin-top:2px;" name="image"  id="imgInp1" class="form-control" style="padding-top:5px;">          
                                                <img class="img-responsive" style="width:160px;height:100px;" id="blah1" alt=""/>
                                            </div>
                                                    
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>contact Title </label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['ContactTitle'])){echo $contact_data[0]['ContactTitle'];}?>" name="contact_title"  class="form-control"  type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Mobile No.</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['MobileNo'])){echo $contact_data[0]['MobileNo'];}?>" name="mobile_no"  class="form-control"  type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Telephone No.</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['TelephoneNo'])){echo $contact_data[0]['TelephoneNo'];}?>" name="telephone_no" class="form-control"  type="text" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Email </label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['Email'])){echo $contact_data[0]['Email'];}?>" name="email" class="form-control"  type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Website </label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['Website'])){echo $contact_data[0]['Website'];}?>" name="wsebsite" class="form-control"  type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Address 1</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['Address1'])){echo $contact_data[0]['Address1'];}?>" name="address1" class="form-control"  type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Address 2</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['Address2'])){echo $contact_data[0]['Address2'];}?>" name="address2" class="form-control"  type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Facebook Link </label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['FacebookLink'])){echo $contact_data[0]['FacebookLink'];}?>" name="facebook_link" class="form-control"  type="text" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Twitter Link </label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['TwitterLink'])){echo $contact_data[0]['TwitterLink'];}?>" name="twitter_link" class="form-control"  type="text" required>
                                </div>
                            </div>

                           <div class="form-group">
                               <label style="text-align:left" class="col-md-3 control-label">YouTube Link</label>  
                               <div class="col-md-9 inputGroupContainer">
                                   <input value="<?php if(!empty($contact_data[0]['YouTubeLink'])){echo $contact_data[0]['YouTubeLink'];}?>" name="youtube_link" class="form-control"  type="text">
                               </div>
                           </div>

                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Add link 1 
                                </label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['AddLink1'])){echo $contact_data[0]['AddLink1'];}?>" name="add_link1" class="form-control"  type="text" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Add Link 2 
                                </label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['AddLink2'])){echo $contact_data[0]['AddLink2'];}?>" name="add_link2" class="form-control"  type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="text-align:left" class="col-md-3 control-label"></span>Extra Info.</label>  
                                <div class="col-md-9 inputGroupContainer">
                                    <input value="<?php if(!empty($contact_data[0]['ExtraInfo'])){echo $contact_data[0]['ExtraInfo'];}?>" name="extra_info" class="form-control"  type="text" required>
                                </div>
                            </div>
                           

                           <!-- <div class="form-group">
                               <label style="text-align:left" class="col-md-3 control-label">contact Status</label>  
                               <div class="col-md-9 inputGroupContainer">
                                   <input value="<?php if(!empty($contact_data[0]['contactStatus'])){echo $contact_data[0]['contactStatus'];}?>" name="contact_status" class="form-control"  type="text">
                               </div>
                           </div> -->
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
             <!--  <div class="modal-contact"> 
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
              </div>  -->
       </div> 
    </div>
</div>
     <!-- view modal end --> 
   




