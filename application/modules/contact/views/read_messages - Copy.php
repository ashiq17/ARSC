<!DOCTYPE html>
<html>
	<?php $this->load->view('template_views/common/header');?>
	<style type="text/css">
        .modal-dialog {
            width: 70%;
            margin: 30px auto;
        }
    </style>
</head>

<body>


<!--================= NAVBAR HEADER (CONTENT)
	==============================================-->
	<?php $this->load->view('template_views/common/top_nav');?>

 <!---================= CONTENT MENU
	==============================================-->

<section id="content">

   <div class="container" id="container-design">

     	<div class="row">

     		<div class="col-md-12" style="padding-top: 30px;">

	     		<div class="ibox float-e-margins">
                    <div class="ibox-title" style="border-bottom: 2px solid #222c43;">
                        <h3><strong>Read Messages: </strong></h3>
                    </div>
                    <div class="ibox-content">
                            
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive" style="font-size: 12px;">
                                <thead>
                                <tr>

                                    <th style="width: 8%; text-align: center;">SL#</th>
									<th style="width: 22%; text-align: center;">DATE</th>
									<th style="width: 25%; text-align: center;">NAME</th>
									<th style="width: 25%; text-align: center;">EMAIL</th>
									<th style="width: 10%; text-align: center;">VIEW</th>
									<th style="width: 10%; text-align: center;">DELETE</th>
                                </tr>
                                </thead>
                                <tbody> 
                                <?php $sl = 1; 
                                	foreach($read_message as $key=>$info) {
                                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $sl; ?></td>
									<td style="text-align: center;"><?php echo $info->Date; ?></td>
									<td style="text-align: center;"><?php echo $info->Name; ?></td>
									<td style="text-align: center;"><?php echo $info->Email; ?></td>
									<td style="text-align: center;">
									<a  data-toggle="modal"
                                     data-id="<?php echo $info->ID;?>" 
                                     data-date="<?php echo $info->Date;?>" 
                                     data-name="<?php echo $info->Name;?>" 
                                     data-email="<?php echo $info->Email;?>" 
                                     data-contactnumber="<?php echo $info->ContactNumber;?>"
                                     data-message="<?php echo $info->Message;?>"  
                                     data-readstatus="<?php echo $info->ReadStatus;?>" 
                                     class="open-messageView" href="#messageView">
									   <i class="fa fa-delete"></i>View
									</a>
									<td style="text-align: center;">
                                    
<!--<a data-toggle="modal" data-branchID="<?php //echo $info->BranchID;?>" href="#myModal_admin" class="open-messageView" ><i class="fa fa-edit"></i></a>-->
									<a  data-toggle="modal" data-id="<?php echo $info->ID;?>" data-name="<?php echo $info->Name;?>"  class="open-deleteModal" href="#deleteModal">
									   <i class="fa fa-delete"></i>Delete
									</a>
									</td>
                                </tr>
                                <?php $sl++; }?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

<!---============================= SIDEBAR MENU
============================================================-->
	         	

     		</div>

		</div>

   </div>

 </section>

 <section style="height: 50px;">
     
 </section>


	<!-- FOOOTER
	============================================================ -->
	
	<?php $this->load->view('template_views/common/footer');?>

	<script type="text/javascript">
        $(document).on("click", ".open-messageView", function () {
        
            //$('.ibox-content #int_BranchID').val("");

            var id = $(this).data('id');
            var msgDate = $(this).data('date');
            var Name = $(this).data('name');
            var Email = $(this).data('email');
            var ContactNumber = $(this).data('contactnumber');
            var message = $(this).data('message');
            var ReadStatus = $(this).data('readstatus');

            $(".ibox-content #messageID").val( id ); 
            $(".ibox-content #msgDate").html( msgDate ); 
            $(".ibox-content #msgName").html( Name ); 
            $(".ibox-content #msgEmail").html( Email ); 
            $(".ibox-content #msgPhone").html( ContactNumber ); 
            $(".ibox-content #msgText").html( message ); 
                   
        });
    </script>

    <!-- Message View Modal start-->

        <div class="modal" id="messageView" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content animated fadeIn">
                    <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                        <h3><strong>Message View</strong></h3>
                    </div>
                <form class="form-horizontal form_class" id="form_id" action="" role="form" method="post" enctype="multipart/form-data">
                       <div class="ibox-content" style="padding-top: 10px;">
                        <!--<p>Sign in today for more expirience.</p>-->
                            <input type="hidden" name="messageID" id="messageID" value="">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-2" style="text-align: right;">
                                            <h5><strong>Date :</strong></h5>
                                        </div>
                                        <div class="col-lg-10">
                                            <h5 id="msgDate"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-2" style="text-align: right;">
                                            <h5><strong>Name :</strong></h5>
                                        </div>
                                        <div class="col-lg-10">
                                            <h5 id="msgName"></h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-2" style="text-align: right;">
                                            <h5><strong>Email :</strong></h5>
                                        </div>
                                        <div class="col-lg-10">
                                            <h5 id="msgEmail"></h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-2" style="text-align: right;">
                                            <h5><strong>Phone :</strong></h5>
                                        </div>
                                        <div class="col-lg-10">
                                            <h5 id="msgPhone"></h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-2" style="text-align: right;">
                                            <h5><strong>Message :</strong></h5>
                                        </div>
                                        <div class="col-lg-10">
                                            <h5 id="msgText"></h5>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>

                             <div class="modal-footer" style="margin-top: 20px;">
                                <button style="" type="button" onclick="javascript:window.location.reload()" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div> 
                        </div>
                            
                      
                </form>
                </div>
            </div>
        </div>

        <!-- Message View Modal End-->

        <script type="text/javascript">

        $(document).on("click", ".open-deleteModal", function () {
        
            //$('.ibox-content #int_BranchID').val("");

            var id = $(this).data('id');
            var Name = $(this).data('name');
            //alert(id);

            $(".ibox-content #deleteID").val( id ); 
            $(".ibox-content #dltName").html( Name );            
             
                   
        });
    </script>

        <!-- Message Delete Modal start-->

        <div class="modal" id="deleteModal" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content animated fadeIn">
                    <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                        <h3><strong>Message Delete</strong></h3>
                    </div>
                <form class="form-horizontal form_class" id="form_id" action="<?php echo base_url();?>contact/contact_message/delete_read_message" role="form" method="post" enctype="multipart/form-data">
                       <div class="ibox-content" style="padding-top: 10px;">
                        <!--<p>Sign in today for more expirience.</p>-->
                            <input type="hidden" name="deleteID" id="deleteID" value="">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-12" style="text-align: center;">
                                            <h5>Are you sure to delete <strong id="dltName"></strong><strong>&apos;s</strong> Message!</h5>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>

                             <div class="modal-footer" style="margin-top: 20px;">
                             <input type="submit" name="Save" class="btn btn-primary" id="Save" value="Delete" />
                                <button style="" type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div> 
                        </div>
                            
                      
                </form>
                </div>
            </div>
        </div>

        <!-- Message Delete Modal End-->

</body>
</html>