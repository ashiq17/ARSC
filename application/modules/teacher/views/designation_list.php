 <?php $this->load->view('dashboard/common/header');?>
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
        .wrapper-content {
            padding: 0px 0px 0px;
        }
        .panel-body {
        padding: 2px 15px 10px 15px;
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
                                                <div class="ibox-title" >
                                                  <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>teacher/designation/add_designation">Add New Designation</a>

                                                
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link">
                                                            <i class="fa fa-chevron-up"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content" style="padding: 0px;">
                                                    <div class="panel-body">
                                                        <div class="panel-options" style="padding-bottom: 10px;">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a id="allPosts" data-toggle="tab" href="#tab-1">  <strong>All Designation</strong> </a></li>
                                                                <li class=""><a id="active" data-toggle="tab" href="#tab-2"><strong>Active</strong></a></li>
                                                                <li class=""><a id="inactive" data-toggle="tab" href="#tab-3"><strong>Inactive</strong></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div id="tab-1" class="tab-pane active">
                                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="color:#3F3F3F" >SL</th>
                                                                            <th style="color:#3F3F3F;text-align:center; width: 30%;" > Designation Name</th>
                                                                            <th style="color:#3F3F3F" >Create Date</th>
                                                                            <th style="color:#3F3F3F" >Modified Date</th>
                                                                            <th style="color:#3F3F3F" >DesignationStatus Status</th>
                                                                            <th style="color:#3F3F3F" >Edit</th>
                                                                            <th style="color:#3F3F3F" >Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_designation_find as $key=>$value) {
                                                                             
                                                                                ?>
                                                                                <tr class="gradeC">
                                                                                <td ><?php echo $sl; ?></td>
                                                                    <td  style="text-align:center;    width: 30%;"><?php echo $value['DesignationName']; ?></td>
                                                                    <td><?php echo $value['Created']; ?></td>
                                                                    <td ><?php echo $value['Modified']; ?></td>
                                                                     <td class="text-center"> <?php if($value['DesignationStatus']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';} ?>

                                                                </td>                
                                                                <td  style="text-align: center;"><a href="<?php echo base_url();?>teacher/designation/edit_designation/<?php echo $value['DesignationID']; ?>">Edit</a></td>
                                                                <td style="text-align: center;"><a data-toggle="modal" data-designationid="<?php echo $value['DesignationID']; ?>" data-title="<?php echo $value['DesignationName']; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }
                                                                      ?>     
                                                                    </tbody>
                                                                    <tfoot>
                                                                         <tr>
                                                                            <th style="color:#3F3F3F" >SL</th>
                                                                            <th style="color:#3F3F3F;text-align:center; width: 30%;" > Designation Name</th>
                                                                            <th style="color:#3F3F3F" >Create Date</th>
                                                                            <th style="color:#3F3F3F" >Modified Date</th>
                                                                            <th style="color:#3F3F3F" >Designation Status</th>
                                                                            <th style="color:#3F3F3F" >Edit</th>
                                                                            <th style="color:#3F3F3F" >Delete</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>

                                                            <div id="tab-2" class="tab-pane ">
                                                                <table class="table table-striped table-bordered table-hover" id="editable1" >
                                                                    <thead>
                                                                       <tr>
                                                                            <th style="color:#3F3F3F" >SL</th>
                                                                            <th style="color:#3F3F3F;text-align:center; width: 30%;" > Designation Name</th>
                                                                            <th style="color:#3F3F3F" >Create Date</th>
                                                                            <th style="color:#3F3F3F" >Modified Date</th>
                                                                            <th style="color:#3F3F3F" >Designation Status</th>
                                                                            <th style="color:#3F3F3F" >Edit</th>
                                                                            <th style="color:#3F3F3F" >Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_designation_find as $key=>$value) {
                                                                               $active_designation = strtolower(trim($value['DesignationStatus']));
                                                                             if($active_designation=='1'){
                                                                                ?>
                                                                                <tr class="gradeC">
                                                                                <td ><?php echo $sl; ?></td>
                                                                    <td  style="text-align:center;    width: 30%;"><?php echo $value['DesignationName']; ?></td>
                                                                    <td><?php echo $value['Created']; ?></td>
                                                                    <td ><?php echo $value['Modified']; ?></td>
                                                                     <td class="text-center"> <?php if($value['DesignationStatus']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';} ?>

                                                                </td>                
                                                                <td  style="text-align: center;"><a href="<?php echo base_url();?>teacher/designation/edit_designation/<?php echo $value['DesignationID']; ?>">Edit</a></td>
                                                                <td style="text-align: center;"><a data-toggle="modal" data-designationid="<?php echo $value['DesignationID']; ?>" data-title="<?php echo $value['DesignationName']; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }}
                                                                      ?>     
                                                                    </tbody>
                                                                    <tfoot>
                                                                          <tr>
                                                                            <th style="color:#3F3F3F" >SL</th>
                                                                            <th style="color:#3F3F3F;text-align:center; width: 30%;" > Designation Name</th>
                                                                            <th style="color:#3F3F3F" >Create Date</th>
                                                                            <th style="color:#3F3F3F" >Modified Date</th>
                                                                            <th style="color:#3F3F3F" >Designation Status</th>
                                                                            <th style="color:#3F3F3F" >Edit</th>
                                                                            <th style="color:#3F3F3F" >Delete</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>

                                                            <div id="tab-3" class="tab-pane">
                                                                <table class="table table-striped table-bordered table-hover" id="editable2" >
                                                                     <thead>
                                                                        <tr>
                                                                            <th style="color:#3F3F3F" >SL</th>
                                                                            <th style="color:#3F3F3F;text-align:center; width: 30%;" > Designation Name</th>
                                                                            <th style="color:#3F3F3F" >Create Date</th>
                                                                            <th style="color:#3F3F3F" >Modified Date</th>
                                                                            <th style="color:#3F3F3F" >Designation Status</th>
                                                                            <th style="color:#3F3F3F" >Edit</th>
                                                                            <th style="color:#3F3F3F" >Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_designation_find as $key=>$value) {
                                                                           $active_designation = strtolower(trim($value['DesignationStatus']));
                                                                             if($active_designation=='0'){
                                                                                ?>
                                                                                <tr class="gradeC">
                                                                                <td ><?php echo $sl; ?></td>
                                                                    <td  style="text-align:center;    width: 30%;"><?php echo $value['DesignationName']; ?></td>
                                                                    <td><?php echo $value['Created']; ?></td>
                                                                    <td ><?php echo $value['Modified']; ?></td>
                                                                     <td class="text-center"> <?php if($value['DesignationStatus']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';} ?>

                                                                </td>                
                                                                <td  style="text-align: center;"><a href="<?php echo base_url();?>teacher/designation/edit_designation/<?php echo $value['DesignationID']; ?>">Edit</a></td>
                                                                <td style="text-align: center;"><a data-toggle="modal" data-designationid="<?php echo $value['DesignationID']; ?>" data-title="<?php echo $value['DesignationName']; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }}
                                                                      ?>     
                                                                    </tbody>
                                                                    <tfoot>
                                                                          <tr>
                                                                            <th style="color:#3F3F3F" >SL</th>
                                                                            <th style="color:#3F3F3F;text-align:center; width: 30%;" > Designation Name</th>
                                                                            <th style="color:#3F3F3F" >Create Date</th>
                                                                            <th style="color:#3F3F3F" >Modified Date</th>
                                                                            <th style="color:#3F3F3F" >Designation Status</th>
                                                                            <th style="color:#3F3F3F" >Edit</th>
                                                                            <th style="color:#3F3F3F" >Delete</th>
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
 <!-- mahbub  start delete all Blog -->
   
     <!-- mahbub  end delete all Blog -->

 <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-deleteModal", function () {
            var DesignationID = $(this).attr('data-designationid');
             // alert(DesignationID);
            var DesignationName = $(this).attr('data-title');
            $("#DesignationName").html(DesignationName);
            $("#deleteDesignationID").val(DesignationID);
                   
               alert(deleteDesignationID);
        });
    </script>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                     Delete This Category!</h4>
                    
                </div><!-- modal header -->

                <form action="<?php echo base_url();?>teacher/designation/designation_delete" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="deletedesignationID" name="deletedesignationID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="DesignationName"></span>
                                     "<?php //echo $value['DesignationName']; ?>?
                                 </h3>
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
