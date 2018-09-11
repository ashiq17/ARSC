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

                                                <div class="ibox-title" style="background:#1969ca">
                                                    <h5 style="color:#D7E1ED"><i class='fa fa-user'></i> All Video</h5> 
                                                    <div class="ibox-tools ">
                                                    	<a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>video/video/add_video"><i class='fa fa-user-plus'></i> Add Video</a>
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
                                                                            <th>Video Title</th>
                                                                            <th>Video Slug</th>
                                                                            <th>Video Url</th>
                                                                            <th>Status</th>
                                                                            <th class="text-center">Action</th>
                                                                            <!-- <th>Edit</th>
                                                                            <th>Delete</th> -->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
	                                                                    <?php 
	                                                                    	// echo "<pre>";
	                                                                    	// print_r($user_data);
	                                                                    	$i=1;

	                                                                    	foreach ($video_list as $key => $value) {
                                                                           
	                                                                    ?>
                                                                        <tr class="gradeC">
                                                                            <td><?php echo $i; ?></td>
                                                                            <td><?php echo $value['VideoTitle']; ?></td>
                                                                            <td><?php echo $value['VideoSlug']; ?></td>
                                                                            <td><?php echo $value['VideoUrl']; ?></td>
                                                                            <td>
                                                                                <?php if($value['VideoStatus']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
Active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
Inactive</spane>';} ?>
                                                                            </td>
                                                                           <td class='text-center'>
                                                                            	<a class="btn btn-rounded btn-sm btn-icon btn-primary" href="<?php echo base_url(); ?>video/video/edit_video/<?php echo $value['VideoID'] ?>"><i class='fa fa-edit'></i> Edit</a> | 
                                                                            	<a  data-toggle="modal" data-videoid="<?php echo $value['VideoID']; ?>" data-title="<?php echo $value['VideoTitle']; ?>" class="open-deleteModal btn btn-rounded btn-sm btn-icon btn-danger" href="#deleteModal"><i class='fa fa-times text-white text'></i> Delete</a>
                                                                            </td>
                                                                            <!-- <td style="text-align: center;"><a href="#">Edit</a></td>
                                                                            <td style="text-align: center;"><a data-toggle="modal" data-newsid="<?php //echo $newsId; ?>" data-title="<?php //echo $Newsinfo->NewsTitle; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td> -->
                                                                        </tr>   
                                                                        <?php 
                                                                        	$i++; 
                                                                        	} 
                                                                        ?> 
                                                                    </tbody>

                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Video Title</th>
                                                                            <th>Video Slug</th>
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
            var VideoID = $(this).attr('data-videoid');
            // alert(videoid);
            var VideoTitle = $(this).attr('data-title');
             // alert(VideoTitle);
            $("#VideoTitle").html(VideoTitle);
            $("#deleteVideoID").val(VideoID);
                   
        });
    </script>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                     Delete This Video!</h4>
                    
                </div><!-- modal header -->

                <form action="<?php echo base_url();?>video/video/video_delete" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="deleteVideoID" name="deleteVideoID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="VideoTitle"></span> "<?php echo $value['VideoTitle']; ?>?</h3>
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
