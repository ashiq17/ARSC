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
                                                    <h5 style="color:red">All  Message 
                                                      <!--   <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>blog/blogauthor/index">Add  New Blog</a> -->

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
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a id="allPosts" data-toggle="tab" href="#tab-1">Unread Message</a></li>
                                                                <li class=""><a id="published" data-toggle="tab" href="#tab-2">Read</a></li>
                                                                <li class=""><a id="unpublished" data-toggle="tab" href="#tab-3"> All Message</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div id="tab-1" class="tab-pane active">
                                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 8%; text-align: center;">SL#</th>
                                                                            <th style="width: 22%; text-align: center;">DATE</th>
                                                                            <th style="width: 25%; text-align: center;">NAME</th>
                                                                            <th style="width: 25%; text-align: center;">EMAIL</th>
                                                                            <th style="width: 10%; text-align: center;">Status</th>
                                                                            <th style="width: 10%; text-align: center;">VIEW</th>
                                                                            <th style="width: 10%; text-align: center;">DELETE</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody> 
                                                                        <?php $sl = 1; 
                                                                            foreach($unread_message as $key=>$info) {
                                                                        ?>
                                                                        <tr>
                                                                            <td style="text-align: center;"><?php echo $sl; ?></td>
                                                                            <td style="text-align: center;"><?php echo $info->Date; ?></td>
                                                                            <td style="text-align: center;"><?php echo $info->Name; ?></td>
                                                                            <td style="text-align: center;"><?php echo $info->Email; ?></td>
                                                                           
                                                                            <td style="text-align: center;">

                                                                                <?php 

                                                                                if($info->ReadStatus==0)

                                                                                    {
                                                                                    ?>

                                                                                    <a id="thumbs-down<?= $info->ContactID; ?>" class="btn btn-danger"  title="UnRead">
                                                                                    <i  class="glyphicon glyphicon-thumbs-down" ></i></a> 
                                                                                    <a id="thumbs-up<?= $info->ContactID; ?>" class="btn btn-success"  title="Read" style="display: none;">
                                                                                        <i class=" glyphicon glyphicon-thumbs-up"></i>
                                                                                    </a> 
                                                                                    <?php
                                                                                     }
                                                                                     ?>
                                                                               
                                                                            <td style="text-align: center;">
                                                                            <a  data-toggle="modal"
                                                                             data-id="<?php echo $info->ContactID;?>" 
                                                                             data-date="<?php echo $info->Date;?>" 
                                                                             data-name="<?php echo $info->Name;?>" 
                                                                             data-email="<?php echo $info->Email;?>" 
                                                                             data-contactnumber="<?php echo $info->ContactNumber;?>"
                                                                             data-message="<?php echo $info->Message;?>"  
                                                                             data-readstatus="<?php echo $info->ReadStatus;?>" 
                                                                             class="open-messageView" href="#messageView">
                                                                               <i class="fa fa-eye"></i>View
                                                                            </a>
                                                                            <td style="text-align: center;">
                                      
                                                                            <a  data-toggle="modal" data-id="<?php echo $info->ContactID;?>" data-name="<?php echo $info->Name;?>"  class="open-deleteModal" href="#deleteModal">
                                                                               <i class="fa fa-delete"></i>Delete
                                                                            </a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php $sl++; }?>
                               
                                                                    </tbody>                                            

                                                                </table>
                                                            </div>

                                                           <div id="tab-2" class="tab-pane">
                                                                <table class="table table-striped table-bordered table-hover" id="editable1" >
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
                                                                             data-id="<?php echo $info->ContactID;?>" 
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
                                      
                                                                            <a  data-toggle="modal" data-id="<?php echo $info->ContactID;?>" data-name="<?php echo $info->Name;?>"  class="open-deleteModal" href="#deleteModal">
                                                                               <i class="fa fa-delete"></i>Delete
                                                                            </a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php $sl++; }?>
                               
                                                                    </tbody>                                            

                                                                </table>
                                                            </div> 

                                                            <div id="tab-3" class="tab-pane">
                                                                <table class="table table-striped table-bordered table-hover" id="editable2" >
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
                                                                            foreach($all_message as $key=>$info) {
                                                                        ?>
                                                                        <tr>
                                                                            <td style="text-align: center;"><?php echo $sl; ?></td>
                                                                            <td style="text-align: center;"><?php echo $info->Date; ?></td>
                                                                            <td style="text-align: center;"><?php echo $info->Name; ?></td>
                                                                            <td style="text-align: center;"><?php echo $info->Email; ?></td>
                                                                            <td style="text-align: center;">
                                                                            <a  data-toggle="modal"
                                                                             data-id="<?php echo $info->ContactID;?>" 
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
                                      
                                                                            <a  data-toggle="modal" data-id="<?php echo $info->ContactID;?>" data-name="<?php echo $info->Name;?>"  class="open-deleteModal" href="#deleteModal">
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

</body>
</html>
<script type="text/javascript">
        $(document).on("click", ".open-messageView", function () {
            var ContactID = $(this).data('id');
            var data = 'one=' + ContactID;

           $("#thumbs-down"+ContactID).hide();
           $("#thumbs-up"+ContactID).show();

            // alert(ContactID);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>contact/contact_message/read_status_change",
                data: data,
                dataType: 'json',
                success: function (data) {
                } // success
            }); // ajax 
        // alert(id);
            var id = $(this).data('id');
            var msgDate = $(this).data('date');
            var Name = $(this).data('name');
            var Email = $(this).data('email');
            var ContactNumber = $(this).data('contactnumber');
            var message = $(this).data('message');
            // var ReadStatus = $(this).data('readstatus');

            $(".ibox-content #messageID").val( id ); 
            $(".ibox-content #msgDate").html( msgDate ); 
            $(".ibox-content #msgName").html( Name ); 
            $(".ibox-content #msgEmail").html( Email ); 
            $(".ibox-content #msgPhone").html( ContactNumber ); 
            $(".ibox-content #msgText").html( message ); 



        if(document.getElementById('readstatus').style.display=='none') {
          document.getElementById('readstatus').style.display='block';
        }     
        var ReadStatus = $(this).data('readstatus');
        });


    </script>

    <!-- Message View Modal start-->

        <div class="modal" id="messageView" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content animated fadeIn">
                    <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                        <h3><strong>Message View</strong></h3>
                    </div>
                <form class="form-horizontal form_class" id="form_id" action="href="<?php echo base_url(); ?>contact/contact_message/read_status_change<?php echo $info->ContactID ?>"" role="form" method="post" enctype="multipart/form-data">
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
                                <button style="" type="button" onclick="javascript:window.location.onclick()" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                             <!-- <div class="modal-footer" style="margin-top: 20px;">
                                <button style="" type="button" onclick="javascript:window.location.reload()" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>  -->
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