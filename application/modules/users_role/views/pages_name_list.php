<?php $this->load->view('dashboard/common/header');?>

 <!-- Data Tables -->
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

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
                                                    <h5 style="color:#D7E1ED"><i class='fa fa-user'></i> Pages Name List</h5> 
                                                    <div class="ibox-tools ">
                                                    	<a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>users_role/users/add_page_name"><i class='fa fa-user-plus'></i> Add Page Name</a>
                                                        <a class="collapse-link">
                                                            <i class="fa fa-chevron-up"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                
                                                <?php
                                                   if($this->session->has_userdata('message')){
                                                ?>          
                                                          <div class="alert alert-success text-center">
                                                            <strong><?php echo $this->session->message;?></strong>
                                                          </div>
                                                         
                                                <?php          
                                                          $this->session->unset_userdata('message');
                                                          
                                                      }elseif($this->session->has_userdata('error_msg') && $this->session->has_userdata('success_msg')){
                                                ?> 

                                                        <div class="alert alert-danger text-center">
                                                          <strong><?php echo $this->session->error_msg; ?></strong> 
                                                        </div>
                                                        <div class="alert alert-success text-center">
                                                          <strong><?php echo $this->session->success_msg;?></strong>
                                                        </div>
                                                <?php 
                                                        $this->session->unset_userdata('error_msg');
                                                      }
                                                ?>

                                                <div class="ibox-content" style="padding: 0px;">
                                                    <div class="panel-body">
                                                        <div class="tab-content">

                                                            <div id="tab-1" class="tab-pane active">

                                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Page Name</th>
                                                                            <th>Order</th>
                                                                            <th>Status</th>
                                                                            <th class="text-center">Action</th>
                                                                        </tr>
                                                                    </thead>


                                                                    <tbody>
	                                                                    <?php 
	                                                                    	// echo "<pre>";
	                                                                    	// print_r($user_data);
	                                                                    	$i=1;
	                                                                    	foreach ($pages_name as $key => $value) {
	                                                                    ?>
                                                                        <tr class="gradeC">
                                                                            <td><?php echo $i; ?></td>
                                                                            <td><?php echo $value['name']; ?></td>
                                                                            <td><?php echo $value['p_order']; ?></td>
                                                                            <td>
                                                                                <?php if($value['status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
Active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
Inactive</spane>';} ?>
                                                                            </td>
                                                                            <td class='text-center'>
                                                                            	<a class="btn btn-rounded btn-sm btn-icon btn-primary" href="<?php echo base_url(); ?>users_role/users/edit_page_name/<?php echo $value['id'] ?>"><i class='fa fa-edit'></i> Edit</a> | 
                                                                            	<a  data-toggle="modal" data-userid="<?php echo $value['id']; ?>" data-title="<?php echo $value['name']; ?>" class="open-deleteModal btn btn-rounded btn-sm btn-icon btn-danger" href="#deleteModal"><i class='fa fa-times text-white text'></i> Delete</a>
                                                                            </td>
                                                                        </tr>   
                                                                        <?php 
                                                                        	$i++; 
                                                                        	} 
                                                                        ?> 
                                                                    </tbody>

                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Page Name</th>
                                                                            <th>Order</th>
                                                                            <th>Status</th>
                                                                            <th class="text-center">Action</th>
                                                                            <!-- <th>Edit</th>
                                                                            <th>Delete</th> -->
                                                                        </tr>
                                                                    </tfoot>
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
        $(document).ready(function() {
            var oTable = $('#editable').dataTable();         
            var oTable = $('#editable1').dataTable();         
            var oTable = $('#editable2').dataTable();

        });
    </script>

    <!-- Flot -->

    <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-deleteModal", function () {
            var userid = $(this).attr('data-userid');
            var newsTitle = $(this).attr('data-title');
            // alert(newsTitle);
            $("#UserName").html(newsTitle);
            $("#deleteUserID").val(userid);
                   
        });
    </script>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
 Delete This Page!</h4>
                    
                </div><!-- modal header -->

                <form action="<?php echo base_url();?>users_role/users/page_name_delete" method="post" enctype="multipart/form-data">

                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="deleteUserID" name="deletePageID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="UserName"></span> " page?</h3>
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
    

</body>
</html>
