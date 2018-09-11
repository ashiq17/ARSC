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

                                                <div class="ibox-title" style="background:#1969ca;">
                                               <span class="badge badge-info" style="float: left;  font-size: 16px;color:#FFFFFF">Total Records: </span><span class="badge badge-info" style="float: left;  font-size: 20px; color:#F2F2F2;"><?= $total_staff ?></span> 
                                               <div class="ibox-tools">
                                                  <a class="btn btn-success" style="padding: 0 10px 0 10px; " href="<?php echo base_url();?>staff/staff/add_staff"><i class='fa fa-add'></i> Add New Staff </a>
                                                  <a class="collapse-link">
                                                  <i class="fa fa-chevron-up"></i>
                                                  </a>
                                               </div>
                                            </div>
                                              
                                                <div class="ibox-content" style="padding: 0px;">
                                                    <div class="panel-body">
                                                        <div class="panel-options" style="padding-bottom: 10px;">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a id="allPosts" data-toggle="tab" href="#tab-1">  <strong>All Staff</strong> </a></li>
                                                                <li class=""><a id="active" data-toggle="tab" href="#tab-2"><strong>Active</strong></a></li>
                                                                <li class=""><a id="inactive" data-toggle="tab" href="#tab-3"><strong>Inactive</strong></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div id="tab-1" class="tab-pane active">
                                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                     <thead style=" background: #E4E4E4; color: #3F3F3F;">
                                                                        <tr>
                                                                            <th style="color:#3F3F3F;" >SL</th>
                                                                            <th style="color:#3F3F3F;text-align:center;">Profile</th>

                                                                            <th style="color:#3F3F3F;text-align:center;"> Staff Name</th>

                                                                            <th style="color:#3F3F3F;text-align:center;"> Staff ID</th>

                                                                            <th style="color:#3F3F3F;text-align:center;" >Designation </th>

                                                                            <th style="color:#3F3F3F;text-align:center;" >Mobile</th>

                                                                             <th style="color:#3F3F3F;text-align:center;" >Email</th>

                                                                            <th style="color:#3F3F3F;text-align:center;" >Status</th> 
                                                                            <th style="color:#3F3F3F;text-align:center;" >View</th> 
                                                                            <th style="color:#3F3F3F;text-align:center;" >Print</th>
                                                                           
                                                                            <th style="color:#F3F3F3;text-align:center;" >Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_staff_find as $key=>$value) {
                                                                                ?>
                                                                    <tr class="gradeC">
                                                                    <td ><?php echo $sl; ?></td>
                                                                    <td>
                                                                        <img class="img-responsive" style="margin: auto;
                                                                        vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/staff/').$value['Image'];?>" width="25" height="25"/>
                                                                    </td>
                                                                    <td style="text-align:center;"><?php echo $value['Staff_Name']; ?>
                                                                    </td>
                                                                    <td style="text-align:center;"><?php echo $value['Staff_UniqueID']; ?></td> 
                                                                    <td style="text-align:center;"><?php echo $value['DesignationName']; ?></td> 
                                                                    <td style="text-align:center;"><?php echo $value['Staff_mobile']; ?></td>
                                                                    <td  style="text-align:center;"><?php echo $value['Staff_email']; ?></td>
                                                                     <td class="text-center"> <?php if($value['Staff_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';} ?>
                                                                </td> 
                                                               <td style="vertical-align:middle;text-align:center;width: 9%;">
                                                                <a  data-toggle="modal"
                                                                data-id="<?php echo $value['Staff_ID'];?>" 
                                                                data-name="<?php echo $value['Staff_Name'];?>" 
                                                                data-father="<?php echo $value['Staff_FathersName'];?>" 
                                                                data-birthday="<?php echo $value['Staff_DateOfBirth']?>"
                                                                data-designation="<?php echo $value['DesignationName'];?>"
                                                                data-uniqueid="<?php echo $value['Staff_UniqueID'];?>" 
                                                                data-nationalid="<?php echo $value['Staff_NationalID'];?>" 
                                                                data-indexno="<?php echo $value['Staff_IndexNo'];?>"
                                                                data-mobile="<?php echo $value['Staff_mobile'];?>"
                                                                data-gender="<?php 
                                                                if($value['Staff_gender']=='1'){echo 'Male';}
                                                                elseif($value['Staff_gender']=='2'){echo 'Female';}?>"
                                                                data-shift="<?php 
                                                                if($value['Staff_shift']=='1'){echo 'Day';}
                                                                elseif($value['Staff_shift']=='2'){echo 'Morning';}?>"
                                                                data-medium="<?php 
                                                                if($value['Staff_medium']=='1'){echo 'Bangla';}
                                                                elseif($value['Staff_medium']=='2'){echo 'English';}?>"
                                                                data-religion="<?php 
                                                                if($value['Staff_religion']=='1'){echo 'MUSLIM';}
                                                                elseif($value['Staff_religion']=='2'){echo 'HINDUS';}?>"
                                                                data-address="<?php echo $value['Staff_address'];?>"
                                                                data-email="<?php echo $value['Staff_email'];?>"
                                                                data-bloodgroup="<?php
                                                                if($value['Staff_BloodGroup']==1){echo 'A +';}
                                                                if($value['Staff_BloodGroup']==2){echo 'A -';}
                                                                if($value['Staff_BloodGroup']==3){echo 'B +';}
                                                                if($value['Staff_BloodGroup']==4){echo 'B -';}
                                                                if($value['Staff_BloodGroup']==5){echo 'AB +';}
                                                                if($value['Staff_BloodGroup']==6){echo 'AB -';}
                                                                if($value['Staff_BloodGroup']==7){echo 'O +';}
                                                                if($value['Staff_BloodGroup']==8){echo 'O -';}?>"
                                                                data-joiningdate="<?php echo $value['Staff_joining_date'];?>"
                                                                data-status="<?php 
                                                                if($value['Staff_status']==1){echo 'Active';}
                                                                elseif($value['Staff_status']==2){echo 'Inactive';}?>"
                                                                data-image="<?php echo base_url('images/staff/').$value['Image'];?>" class="open-memberView" href="#memberView">
                                                                <i class="fa fa-eye"></i>View
                                                                </a>
                                                                </td>
                                                                <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" href="<?php echo base_url();?>Staff/Staff/print_Staff_single/<?php echo $value['Staff_ID']; ?>">Print</a>
                                                                </td>
                                                            <td  style="text-align: center;">
                                                            <a href="<?php echo base_url();?>staff/staff/edit_staff/<?php echo $value['Staff_ID']; ?>">
                                                            <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            </a>
                                                            <a data-toggle="modal" data-professionid="<?php echo $value['Staff_ID']; ?>" data-title="<?php echo $value['Staff_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
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
                                                                    <tfoot>
                                                                    <tr>
                                                                <th style="color:#3F3F3F;" >SL</th>
                                                                    <th style="color:#3F3F3F;text-align:center;"> Profile</th> 
                                                                    <th style="color:#3F3F3F;text-align:center;"> Staff Name</th>
                                                                    <th style="color:#3F3F3F;text-align:center;"> Staff ID</th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Designation </th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Mobile</th>
                                                                     <th style="color:#3F3F3F;text-align:center;" >Email</th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Status</th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                            </div>

                                                            <div id="tab-2" class="tab-pane ">
                                                                <table class="table table-striped table-bordered table-hover" id="editable1" >
                                                                      <thead style=" background: #E4E4E4; color: #F3F3F3;">
                                                                        <tr>
                                                                            <th style="color:#F3F3F3;" >SL</th>
                                                                            
                                                                             <th style="color:#F3F3F3;text-align:center;"> Profile</th>

                                                                            <th style="color:#F3F3F3;text-align:center;"> Staff Name</th> 


                                                                            <th style="color:#F3F3F3;text-align:center;"> Staff ID</th>

                                                                            <th style="color:#F3F3F3;text-align:center;" >Designation </th>

                                                                            <th style="color:#F3F3F3;text-align:center;" >Mobile</th>

                                                                             <th style="color:#F3F3F3;text-align:center;" >Email</th>

                                                                            <th style="color:#F3F3F3;text-align:center;" >Status</th> 
                                                                            <th style="color:#F3F3F3;text-align:center;" >View</th> 
                                                                            <th style="color:#F3F3F3;text-align:center;" >Print</th>
                                                                           
                                                                            <th style="color:#F3F3F3;text-align:center;" >Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_staff_find as $key=>$value) {
                                                                          $active_Staff = strtolower(trim($value['Staff_status']));
                                                                         if($active_Staff=='1'){
                                                                                    
                                                                                    ?>
                                                                               
                                                                                 <tr class="gradeC">
                                                                    <td ><?php echo $sl; ?></td>
                                                                    <td>
                                                                        <img class="img-responsive" style="margin: auto;
                                                                        vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/staff/').$value['Image'];?>" width="25" height="25"/>
                                                                    </td>
                                                                    <td style="text-align:center;"><?php echo $value['Staff_Name']; ?>
                                                                    </td>
                                                                    <td style="text-align:center;"><?php echo $value['Staff_UniqueID']; ?></td> 
                                                                    <td style="text-align:center;"><?php echo $value['DesignationName']; ?></td> 
                                                                    <td style="text-align:center;"><?php echo $value['Staff_mobile']; ?></td>
                                                                    <td  style="text-align:center;"><?php echo $value['Staff_email']; ?></td>
                                                                     <td class="text-center"> <?php if($value['Staff_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';} ?>
                                                                </td> 
                                                               <td style="vertical-align:middle;text-align:center;width: 9%;">
                                                                <a  data-toggle="modal"
                                                                data-id="<?php echo $value['Staff_ID'];?>" 
                                                                data-name="<?php echo $value['Staff_Name'];?>" 
                                                                data-father="<?php echo $value['Staff_FathersName'];?>" 
                                                                data-birthday="<?php echo $value['Staff_DateOfBirth']?>"
                                                                data-designation="<?php echo $value['DesignationName'];?>"
                                                                data-uniqueid="<?php echo $value['Staff_UniqueID'];?>" 
                                                                data-nationalid="<?php echo $value['Staff_NationalID'];?>" 
                                                                data-indexno="<?php echo $value['Staff_IndexNo'];?>"
                                                                data-mobile="<?php echo $value['Staff_mobile'];?>"
                                                                data-gender="<?php 
                                                                if($value['Staff_gender']=='1'){echo 'Male';}
                                                                elseif($value['Staff_gender']=='2'){echo 'Female';}?>"
                                                                data-religion="<?php 
                                                                if($value['Staff_religion']=='1'){echo 'MUSLIM';}
                                                                elseif($value['Staff_religion']=='2'){echo 'HINDUS';}?>"
                                                                data-address="<?php echo $value['Staff_address'];?>"
                                                                data-email="<?php echo $value['Staff_email'];?>"
                                                                data-bloodgroup="<?php
                                                                if($value['Staff_BloodGroup']==1){echo 'A +';}
                                                                if($value['Staff_BloodGroup']==2){echo 'A -';}
                                                                if($value['Staff_BloodGroup']==3){echo 'B +';}
                                                                if($value['Staff_BloodGroup']==4){echo 'B -';}
                                                                if($value['Staff_BloodGroup']==5){echo 'AB +';}
                                                                if($value['Staff_BloodGroup']==6){echo 'AB -';}
                                                                if($value['Staff_BloodGroup']==7){echo 'O +';}
                                                                if($value['Staff_BloodGroup']==8){echo 'O -';}?>"
                                                                data-joiningdate="<?php echo $value['Staff_joining_date'];?>"
                                                                data-status="<?php 
                                                                if($value['Staff_status']==1){echo 'Active';}
                                                                elseif($value['Staff_status']==2){echo 'Inactive';}?>"
                                                                data-image="<?php echo base_url('images/staff/').$value['Image'];?>" class="open-memberView" href="#memberView">
                                                                   <i class="fa fa-eye"></i>View
                                                                </a>
                                                                </td>
                                                                <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" href="<?php echo base_url();?>Staff/Staff/print_Staff_single/<?php echo $value['Staff_ID']; ?>">Print</a>
                                                                </td>
                                                            <td  style="text-align: center;">
                                                            <a href="<?php echo base_url();?>staff/staff/edit_staff/<?php echo $value['Staff_ID']; ?>">
                                                            <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            </a>
                                                            <a data-toggle="modal" data-professionid="<?php echo $value['Staff_ID']; ?>" data-title="<?php echo $value['Staff_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
                                                            <button class="btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>   
                                                            </button>
                                                            </a>
                                                                </td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }}
                                                                      ?>     
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                <th style="color:#3F3F3F;" >SL</th>
                                                                    <th style="color:#3F3F3F;text-align:center;"> Profile</th> 
                                                                    <th style="color:#3F3F3F;text-align:center;"> Staff Name</th>
                                                                    <th style="color:#3F3F3F;text-align:center;"> Staff ID</th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Designation </th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Mobile</th>
                                                                     <th style="color:#3F3F3F;text-align:center;" >Email</th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Status</th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                                </table>
                                                            </div>

                                                            <div id="tab-3" class="tab-pane">
                                                                <table class="table table-striped table-bordered table-hover" id="editable2" >
                                                                      <thead style=" background: #E4E4E4; color: #F3F3F3;">
                                                                        <tr>
                                                                            <th style="color:#F3F3F3;" >SL</th>

                                                                            <th style="color:#F3F3F3;text-align:center;">Profile</th> 

                                                                            <th style="color:#F3F3F3;text-align:center;"> Staff Name</th>

                                                                            <th style="color:#F3F3F3;text-align:center;"> Staff ID</th>

                                                                            <th style="color:#F3F3F3;text-align:center;" >Designation </th>

                                                                            <th style="color:#F3F3F3;text-align:center;" >Mobile</th>

                                                                             <th style="color:#F3F3F3;text-align:center;" >Email</th>
                                                                             <th style="color:#3F3F3F;text-align:center;" >View</th> 
                                                                            <th style="color:#3F3F3F;text-align:center;" >Print</th>

                                                                            <th style="color:#F3F3F3;text-align:center;" >Status</th>
                                                                           
                                                                            <th style="color:#F3F3F3;text-align:center;" >Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_staff_find as $key=>$value) {
                                                                          $active_Staff = strtolower(trim($value['Staff_status']));
                                                                         if($active_Staff=='2'){
                                                                                    
                                                                                    ?>
                                                                               <tr class="gradeC">
                                                                    <td ><?php echo $sl; ?></td>
                                                                    <td>
                                                                        <img class="img-responsive" style="margin: auto;
                                                                        vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/staff/').$value['Image'];?>" width="25" height="25"/>
                                                                    </td>
                                                                    <td style="text-align:center;"><?php echo $value['Staff_Name']; ?>
                                                                    </td>
                                                                    <td style="text-align:center;"><?php echo $value['Staff_UniqueID']; ?></td> 
                                                                    <td style="text-align:center;"><?php echo $value['DesignationName']; ?></td> 
                                                                    <td style="text-align:center;"><?php echo $value['Staff_mobile']; ?></td>
                                                                    <td  style="text-align:center;"><?php echo $value['Staff_email']; ?></td>
                                                                     <td class="text-center"> <?php if($value['Staff_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    active</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    inactive</spane>';} ?>
                                                                </td> 
                                                               <td style="vertical-align:middle;text-align:center;width: 9%;">
                                                                <a  data-toggle="modal"
                                                                data-id="<?php echo $value['Staff_ID'];?>" 
                                                                data-name="<?php echo $value['Staff_Name'];?>" 
                                                                data-father="<?php echo $value['Staff_FathersName'];?>" 
                                                                data-birthday="<?php echo $value['Staff_DateOfBirth']?>"
                                                                data-designation="<?php echo $value['DesignationName'];?>"
                                                                data-uniqueid="<?php echo $value['Staff_UniqueID'];?>" 
                                                                data-nationalid="<?php echo $value['Staff_NationalID'];?>" 
                                                                data-indexno="<?php echo $value['Staff_IndexNo'];?>"
                                                                data-mobile="<?php echo $value['Staff_mobile'];?>"
                                                                data-gender="<?php 
                                                                if($value['Staff_gender']=='1'){echo 'Male';}
                                                                elseif($value['Staff_gender']=='2'){echo 'Female';}?>"
                                                                data-religion="<?php 
                                                                if($value['Staff_religion']=='1'){echo 'MUSLIM';}
                                                                elseif($value['Staff_religion']=='2'){echo 'HINDUS';}?>"
                                                                data-address="<?php echo $value['Staff_address'];?>"
                                                                data-email="<?php echo $value['Staff_email'];?>"
                                                                data-bloodgroup="<?php
                                                                if($value['Staff_BloodGroup']==1){echo 'A +';}
                                                                if($value['Staff_BloodGroup']==2){echo 'A -';}
                                                                if($value['Staff_BloodGroup']==3){echo 'B +';}
                                                                if($value['Staff_BloodGroup']==4){echo 'B -';}
                                                                if($value['Staff_BloodGroup']==5){echo 'AB +';}
                                                                if($value['Staff_BloodGroup']==6){echo 'AB -';}
                                                                if($value['Staff_BloodGroup']==7){echo 'O +';}
                                                                if($value['Staff_BloodGroup']==8){echo 'O -';}?>"
                                                                data-joiningdate="<?php echo $value['Staff_joining_date'];?>"
                                                                data-status="<?php 
                                                                if($value['Staff_status']==1){echo 'Active';}
                                                                elseif($value['Staff_status']==2){echo 'Inactive';}?>"
                                                                data-image="<?php echo base_url('images/staff/').$value['Image'];?>" class="open-memberView" href="#memberView">
                                                                   <i class="fa fa-eye"></i>View
                                                                </a>
                                                                </td>
                                                                <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" href="<?php echo base_url();?>Staff/Staff/print_Staff_single/<?php echo $value['Staff_ID']; ?>">Print</a>
                                                                </td>
                                                            <td  style="text-align: center;">
                                                            <a href="<?php echo base_url();?>staff/staff/edit_staff/<?php echo $value['Staff_ID']; ?>">
                                                            <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            </a>
                                                            <a data-toggle="modal" data-professionid="<?php echo $value['Staff_ID']; ?>" data-title="<?php echo $value['Staff_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
                                                            <button class="btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>   
                                                            </button>
                                                            </a>
                                                                </td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }}
                                                                      ?>     
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                <th style="color:#3F3F3F;" >SL</th>
                                                                    <th style="color:#3F3F3F;text-align:center;"> Profile</th> 
                                                                    <th style="color:#3F3F3F;text-align:center;"> Staff Name</th>
                                                                    <th style="color:#3F3F3F;text-align:center;"> Staff ID</th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Designation </th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Mobile</th>
                                                                     <th style="color:#3F3F3F;text-align:center;" >Email</th>
                                                                    <th style="color:#3F3F3F;text-align:center;" >Status</th>
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
            var Staff_ID = $(this).attr('data-professionid');
             // alert(ProfessionID);
            var Staff_Name = $(this).attr('data-title');
               // alert(ProfessionName);
            $("#Staff_Name").html(Staff_Name);
            $("#delete_Staff_ID").val(Staff_ID);
                   
        });
    </script>

     <script type="text/javascript">
             $(document).on("click", ".open-memberView", function () {
                 // var MemberID = $(this).data('id');
                 // var data = 'one=' + MemberID;
/*
                 var id = $(this).data('id');
                   alert(id);*/

                 var id = $(this).data('id');
                
                 var Staff_Name  = $(this).data('name');
                 var Staff_FathersName = $(this).data('father');
                 var Staff_gender = $(this).data('gender');
                 var Staff_DateOfBirth  = $(this).data('birthday');
                 var DesignationName  = $(this).data('designation');
                 var Staff_UniqueID  = $(this).data('uniqueid');
                 var Staff_NationalID = $(this).data('nationalid');
                 var Staff_IndexNo = $(this).data('indexno');
                 var Staff_mobile = $(this).data('mobile');
                 var Staff_religion = $(this).data('religion');
                 var Staff_email    = $(this).data('email');
                 var Staff_address    = $(this).data('address');
                 var Staff_BloodGroup     = $(this).data('bloodgroup');
                 var Staff_joining_date       = $(this).data('joiningdate');
                 var Staff_shift = $(this).data('shift');
                 var Staff_medium = $(this).data('medium');
                 var Staff_status= $(this).data('status');
                 var Image       = $(this).data('image');
                 // var ReadStatus = $(this).data('readstatus');
                  // alert(Staff_IndexNo);

                 $(".ibox-content #Staff_ID").val(id); 
                 $(".ibox-content #Staff_Name").html(Staff_Name); 
                 $(".ibox-content #Staff_FathersName").html(Staff_FathersName); 
                 $(".ibox-content #Staff_gender").html(Staff_gender); 
                 $(".ibox-content #Staff_UniqueID").html(Staff_UniqueID); 
                 $(".ibox-content #Staff_DateOfBirth").html(Staff_DateOfBirth); 
                 $(".ibox-content #DesignationName").html(DesignationName); 
                 $(".ibox-content #Staff_NationalID").html(Staff_NationalID); 
                 $(".ibox-content #Staff_IndexNo").html(Staff_IndexNo); 
                 $(".ibox-content #Staff_email").html(Staff_email); 
                 $(".ibox-content #Staff_religion").html(Staff_religion); 
                 $(".ibox-content #Staff_mobile").html(Staff_mobile); 
                 $(".ibox-content #Staff_address").html(Staff_address); 
                 $(".ibox-content #Staff_BloodGroup").html(Staff_BloodGroup); 
                 $(".ibox-content #Staff_joining_date").html(Staff_joining_date); 
                 $(".ibox-content #Staff_shift").html(Staff_shift); 
                 $(".ibox-content #Staff_medium").html(Staff_medium); 
                 $('.ibox-content #Image').attr('src',Image);
                 $(".ibox-content #Staff_status").html(Staff_status); 

             // if(document.getElementById('readstatus').style.display=='none') {
             //   document.getElementById('readstatus').style.display='block';
             // }     
             // var ReadStatus = $(this).data('readstatus');
             // 
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

                <form action="<?php echo base_url();?>Staff/Staff/Staff_delete" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="delete_Staff_ID" name="delete_Staff_ID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="Staff_Name"></span>
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

  <!-- Message View Modal start-->
        <div class="modal" id="memberView" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content animated fadeIn">
                    <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                        <h3><strong>Staff View</strong></h3>
                    </div>
                       <div class="ibox-content" style="padding-top: 10px;">
                        <!--<p>Sign in today for more expirience.</p>-->
                            <input type="hidden" Staff_Name="Staff_ID" id="Staff_ID" value="">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong> Staff Name :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 style="color: red" id="Staff_Name"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong> Father's Name :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_FathersName"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Designation Name :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="DesignationName"></h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Shift :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_shift"></h5>
                                        </div>
                                    </div>  
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Medium :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_medium"></h5>
                                        </div>
                                    </div> 
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Gender :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_gender"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Staff Unique ID:</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_UniqueID"></h5>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>National ID :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_NationalID"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Staff Index ID :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_IndexNo"></h5>
                                        </div>
                                    </div>
                                     <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Blood Group :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_BloodGroup"></h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Date Of Birth:</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_DateOfBirth"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong> Parents Mobile No :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_mobile"></h5>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Email ID :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_email"></h5>
                                        </div>
                                    </div>


                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Address :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_address"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Religion :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_religion"></h5>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Joining Date  :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 id="Staff_joining_date"></h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Status :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <h5 style="color: red;" id="Staff_status"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom: 0px;">
                                        <div class="col-lg-4" style="text-align: right;">
                                            <h5><strong>Image :</strong></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <!-- <img id="Image"> -->
                                            <img alt="Image" id="Image" width="160px;">
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
