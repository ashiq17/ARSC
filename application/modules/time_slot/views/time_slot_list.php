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
                            <div class="wrapper wrapper-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div id="" class="panel blank-panel">
                                                <div class="ibox-title" >
                                                    <h5 style="color:#1969ca;">  <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>time_slot/time_slot/add_time_slots">Add New Time Slots</a>

                                                   </h5> 
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link">
                                                            <i class="fa fa-chevron-up"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content" style="padding: 0px;">
                                                    <div class="panel-body">
                                                        <div class="panel-options" style="padding-bottom: 10px;">
                                                       <h2 style="text-align: center;color:#3F3F3F;"> <u>All Time Slot List</u></h2>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div id="tab-1" class="tab-pane active">
                                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                     <thead style=" background: #00acc1; color: #3F3F3F;">
                                                                        <tr>
                                                                            <th style="color:#3F3F3F;" >SL</th>

                                                                            <th style="color:#3F3F3F;text-align:center;" >Day</th>

                                                                             <th style="color:#3F3F3F;text-align:center;" >Slot</th>  

                                                                            <th style="color:#3F3F3F;text-align:center;" >Class</th>

                                                                            <th style="color:#3F3F3F;text-align:center;" >Section</th>
                                                                            <th style="color:#3F3F3F;text-align:center;" >Subject</th>

                                                                            <th style="color:#3F3F3F;text-align:center;" >Teacher</th>

                                                                            <th style="color:#3F3F3F;text-align:center;" >Class Room</th>
                                                                           
                                                                            <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody style="text-align: center;">
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_time_slot_find as $key=>$value) {
                                                                             
                                                                                ?>
                                                                <tr class="gradeC">
                                                                    <td ><?php echo $sl; ?></td>
                                                                    <td><?php echo $value['Time_Day']; ?></td>
                                                                    <td ><?php echo $value['ClassTime_Name']; ?></td>
                                                                    <td><?php echo $value['Class_Name']; ?></td>
                                                                    <td ><?php echo $value['Section_Name']; ?></td>
                                                                    <td><?php echo $value['Subject_Name']; ?></td>
                                                                    <td ><?php echo $value['Teacher_Name']; ?></td>
                                                                    <td><?php echo $value['Room_Name']; ?></td>
                                                                </td> 

                                                                <td  style="text-align: center;">

                                                                

                                                                <a href="<?php echo base_url();?>time_slot/time_slot/edit_time_slot/<?php echo $value['Time_ID']; ?>">
                                                            <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                                </button>
                                                                </a>


        <a href="<?= base_url() ?>time_slot/time_slot/delete_time_slot/<?= $value['Time_ID'] ?>" onClick="return confirm('Are you sure want to delete?')">
  <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>   
                                                                    </button>
</a>

                                                                </td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }
                                                                      ?>     
                                                                    </tbody>
                                                                    <tr>
                                                                            <th style="color:#3F3F3F;" >SL</th>
                                                                            <th style="color:#3F3F3F;text-align:center;" >Day</th> 
                                                                            <th style="color:#3F3F3F;text-align:center;" >Slot</th>  

                                                                            <th style="color:#3F3F3F;text-align:center;" >Class</th>

                                                                            <th style="color:#3F3F3F;text-align:center;" >Section</th>
                                                                            <th style="color:#3F3F3F;text-align:center;" >subject</th>
                                                                            <th style="color:#3F3F3F;text-align:center;" >Teacher</th>
                                                                             <th style="color:#3F3F3F;text-align:center;" >Class Room</th>
                                                                           
                                                                            <th style="color:#3F3F3F;text-align:center;" >Action</th>
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
            var Time_ID = $(this).attr('data-professionid');
             // alert(ProfessionID);
            var Time_Day = $(this).attr('data-title');
               // alert(ProfessionName);
            $("#Time_Day").html(Time_Day);
            $("#delete_time_slot_ID").val(Time_ID);
                   
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

                <form action="<?php echo base_url();?>time_slot/time_slot/delete_time_slot" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="delete_time_slot_ID" name="delete_time_slot_ID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="Time_day"></span>
                                     "<?php //echo $value['ProfessionName']; ?>?
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
