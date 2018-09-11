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
                                               <span class="badge badge-info" style="float: left;  font-size: 16px;color:#FFFFFF">Total Records: </span><span class="badge badge-info" style="float: left;  font-size: 20px; color:#F2F2F2;"><?= $total_student ?></span> 
                                               <div class="ibox-tools">
                                                  <a class="btn btn-success" style="padding: 0 10px 0 10px; " href="<?php echo base_url();?>student/student/add_admission"><i class='fa fa-add'></i> Add New Student </a>
                                                  <a class="collapse-link">
                                                  <i class="fa fa-chevron-up"></i>
                                                  </a>
                                               </div>
                                            </div>


                        <div class="ibox-content" style="padding: 0px;">
                          <div class="panel-body">
                            <div class="panel-options" style="padding-bottom: 10px;">
                              <ul class="nav nav-tabs">
                                <li class="active"><a id="allPosts" data-toggle="tab" href="#tab-1">  <strong>All student</strong> </a></li>
                                <li class=""><a id="active" data-toggle="tab" href="#tab-2"><strong>Active</strong></a></li>
                                <li class=""><a id="inactive" data-toggle="tab" href="#tab-3"><strong>Inactive</strong></a></li>
                              </ul>
                            </div>
                            <div class="tab-content">
                              <div id="tab-1" class="tab-pane active">
                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                  <thead style=" background: #1979CA; color: #3F3F3F;">
                                    <tr class="table-primary">
                                      <th style="color:#3F3F3F;" >SL</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Profile</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Student Name</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Student ID</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Academic Year</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Class</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Section</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Roll</th> 
                                      <th style="color:#3F3F3F;text-align:center;" >Mobile No</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Status</th>
                                      <th style="color:#3F3F3F;text-align:center;" >View</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Print</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $sl = 1;
                                    foreach($all_student_find as $key=>$value) {?>
                                    <tr class="gradeC">
                                      <td ><?php echo $sl; ?></td>



                                    <td>

                                      <?php
                                        if(!empty($value['Image'])){
                                          ?>
                                      <img class="img-responsive" style="margin: auto;
                                      vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/student/').$value['Image'];?>" width="25" height="25"/>
                               
                                          <?php
                                        }else{
                                          ?>
                                      <img class="img-responsive" style="margin: auto;
                                      vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/default.jpg');?>" width="30" height="25"/>
                                 
                                          <?php

                                        }
                                     
                                        ?>
                                    </td>




                                    <td style="text-align:left;">
                                      <h2 style="font-size: 12px; vertical-align: middle; padding-top: 5px; font-weight: 600; text-align: left; font-family:sans-serif;">
                                              <?php echo $value['Std_Name']; ?>
                                      </h2>
                                
                                        
                                      </td>
                                    <td style="text-align:center;"">

                                    <?php echo $value['STD_UNQ_ID']; ?>

                                    </td>
                                    <td style="text-align:center; font-family:sans-serif;"">

                                      <?php echo $value['Year_Name']; ?>
                                        
                                      </td>
                                    <td style="text-align:center; font-family:sans-serif;">

                                    <?php echo $value['Class_Name']; ?>

                                    </td>
                                    <td style="text-align:center;font-family:sans-serif;">

                                      <?php echo $value['Section_Name']; ?>
                                        
                                      </td>
                                    <td style="text-align:center;font-family:sans-serif;">

                                      <?php echo $value['Std_roll']; ?>
                                      
                                    </td>
                                    <td  style="text-align:center;font-family:sans-serif;">

                                      <?php echo $value['Std_parent_mobile']; ?>
                                      
                                    </td>
                                    <td class="text-center"> <?php 
                                    if($value['Std_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>active</spane>';}
                                      else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                      inactive</spane>';} ?>
                                    </td> 
                                    <td style="vertical-align:middle;text-align:center;width: 9%;">
                                      <a  data-toggle="modal"
                                      data-id="<?php echo $value['Std_ID'];?>" 
                                      data-name="<?php echo $value['Std_Name'];?>" 
                                      data-parent="<?php echo $value['Std_parent'];?>" 
                                      data-birthday="<?php echo $value['Std_birthday'] ?>"
                                      data-birthid="<?php echo $value['Std_birth_ID'];?>"  
                                      data-classid="<?php echo $value['Class_Name'];?>"
                                      data-sectionid="<?php echo $value['Section_Name'];?>" 
                                      data-groupid="<?php echo $value['Group_Name'];?>" 
                                      data-roll="<?php echo $value['Std_roll'];?>"
                                      data-parentmobile="<?php echo $value['Std_parent_mobile'];?>"
                                      data-gender="<?php if($value['Std_gender']=='1'){echo 'Male';}elseif($value['Std_gender']=='2'){echo 'Female';}?>"
                                      data-bloodgroup="<?php
                                      if($value['Student_BloodGroup']==1){echo 'A +';}
                                      if($value['Student_BloodGroup']==2){echo 'A -';}
                                      if($value['Student_BloodGroup']==3){echo 'B +';}
                                      if($value['Student_BloodGroup']==4){echo 'B -';}
                                      if($value['Student_BloodGroup']==5){echo 'AB +';}
                                      if($value['Student_BloodGroup']==6){echo 'AB -';}
                                      if($value['Student_BloodGroup']==7){echo 'O +';}
                                      if($value['Student_BloodGroup']==8){echo 'O -';}?>"
                                      data-religion="<?php 
                                      if($value['Std_religion']=='1'){echo 'MUSLIM';}
                                      elseif($value['Std_religion']=='2'){echo 'HINDUS';}?>"
                                      data-address="<?php echo $value['Std_address'];?>"
                                      data-email="<?php echo $value['Std_email'];?>"
                                      data-year="<?php echo $value['Year_Name'];?>"
                                      data-registrationdate="<?php echo $value['Std_registration_date'];?>"
                                      data-status="<?php 
                                      if($value['Std_status']==1){echo 'Active';}
                                      elseif($value['Std_status']==2){echo 'Inactive';}?>"
                                      data-image="<?php echo base_url('images/student/').$value['Image'];?>" 
                                      class="open-memberView" href="#memberView">
                                      <i class="fa fa-eye"></i>View
                                    </a>
                                  </td>
                                  <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" 
                                    href="<?php echo base_url();?>student/student/print_student_single/<?php echo $value['Std_ID']; ?>">Print</a>
                                  </td>
                                  <td  style="text-align: center;">
                                    <a href="<?php echo base_url();?>student/student/edit_student/<?php echo $value['Std_ID']; ?>">
                                      <button class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                      </button>
                                    </a>
                                    <a data-toggle="modal" data-professionid="<?php echo $value['Std_ID']; ?>" data-title="<?php echo $value['Std_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
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
                                  <th style="color:#3F3F3F;text-align:center;" > Profile</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student Name</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student ID</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Academic Year</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Class</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Section</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Roll</th>
                                  <th style="color:#3F3F3F;text-align:center;" >View</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Print</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Mobile</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Status</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <div id="tab-2" class="tab-pane ">
                            <table class="table table-striped table-bordered table-hover" id="editable1" >
                              <thead style=" background: #00acc1; color: #3F3F3F;">
                                <tr class="table-primary">
                                  <th style="color:#3F3F3F;" >SL</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Profile</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student Name</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student ID</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Academic Year</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Class</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Section</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Roll</th> 
                                  <th style="color:#3F3F3F;text-align:center;" >Mobile No</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Status</th>
                                  <th style="color:#3F3F3F;text-align:center;" >View</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Print</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $sl = 1;
                                foreach($all_student_find as $key=>$value) {
                                  $active_student = strtolower(trim($value['Std_status']));
                                  if($active_student=='1'){
                                    ?>
                                    <tr class="gradeC">
                                      <td ><?php echo $sl; ?></td>
                                      <td><img class="img-responsive" style="margin: auto;
                                      vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/student/').$value['Image'];?>" width="25" height="25"/>
                                    </td>
                                    <td style="text-align:center;""><?php echo $value['Std_Name']; ?></td>
                                    <td style="text-align:center;""><?php echo $value['STD_UNQ_ID']; ?></td>
                                    <td style="text-align:center;""><?php echo $value['Year_Name']; ?></td>
                                    <td style="text-align:center;""><?php echo $value['Class_Name']; ?></td>
                                    <td style="text-align:center;""><?php echo $value['Section_Name']; ?></td>
                                    <td><?php echo $value['Std_roll']; ?></td>
                                    <td ><?php echo $value['Std_parent_mobile']; ?></td>
                                    <td class="text-center"> <?php 
                                    if($value['Std_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>active</spane>';}
                                      else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                      inactive</spane>';} ?>
                                    </td> 
                                    <td style="vertical-align:middle;text-align:center;width: 9%;">
                                      <a  data-toggle="modal"
                                      data-id="<?php echo $value['Std_ID'];?>" 
                                      data-name="<?php echo $value['Std_Name'];?>" 
                                      data-parent="<?php echo $value['Std_parent'];?>" 
                                      data-birthday="<?php echo $value['Std_birthday'] ?>"
                                      data-birthid="<?php echo $value['Std_birth_ID'];?>"  
                                      data-classid="<?php echo $value['Class_Name'];?>"
                                      data-sectionid="<?php echo $value['Section_Name'];?>" 
                                      data-groupid="<?php echo $value['Group_Name'];?>" 
                                      data-roll="<?php echo $value['Std_roll'];?>"
                                      data-parentmobile="<?php echo $value['Std_parent_mobile'];?>"
                                      data-gender="<?php if($value['Std_gender']=='1'){echo 'Male';}elseif($value['Std_gender']=='2'){echo 'Female';}?>"
                                      data-bloodgroup="<?php
                                      if($value['Student_BloodGroup']==1){echo 'A +';}
                                      if($value['Student_BloodGroup']==2){echo 'A -';}
                                      if($value['Student_BloodGroup']==3){echo 'B +';}
                                      if($value['Student_BloodGroup']==4){echo 'B -';}
                                      if($value['Student_BloodGroup']==5){echo 'AB +';}
                                      if($value['Student_BloodGroup']==6){echo 'AB -';}
                                      if($value['Student_BloodGroup']==7){echo 'O +';}
                                      if($value['Student_BloodGroup']==8){echo 'O -';}?>"
                                      data-religion="<?php 
                                      if($value['Std_religion']=='1'){echo 'MUSLIM';}
                                      elseif($value['Std_religion']=='2'){echo 'HINDUS';}?>"
                                      data-address="<?php echo $value['Std_address'];?>"
                                      data-email="<?php echo $value['Std_email'];?>"
                                      data-year="<?php echo $value['Year_Name'];?>"
                                      data-registrationdate="<?php echo $value['Std_registration_date'];?>"
                                      data-status="<?php 
                                      if($value['Std_status']==1){echo 'Active';}
                                      elseif($value['Std_status']==2){echo 'Inactive';}?>"
                                      data-image="<?php echo base_url('images/student/').$value['Image'];?>" 
                                      class="open-memberView" href="#memberView">
                                      <i class="fa fa-eye"></i>View
                                    </a>
                                  </td>
                                  <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" 
                                    href="<?php echo base_url();?>student/student/print_student_single/<?php echo $value['Std_ID']; ?>">Print</a>
                                  </td>
                                  <td  style="text-align: center;">
                                    <a href="<?php echo base_url();?>student/student/edit_student/<?php echo $value['Std_ID']; ?>">
                                      <button class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                      </button>
                                    </a>
                                    <a data-toggle="modal" data-professionid="<?php echo $value['Std_ID']; ?>" data-title="<?php echo $value['Std_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
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
                                  <th style="color:#3F3F3F;text-align:center;" > Profile</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student Name</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student ID</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Academic Year</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Class</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Section</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Roll</th>
                                  <th style="color:#3F3F3F;text-align:center;" >View</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Print</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Mobile</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Status</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <div id="tab-3" class="tab-pane ">
                            <table class="table table-striped table-bordered table-hover" id="editable2" >
                              <thead style=" background: #00acc1; color: #3F3F3F;">
                                <tr class="table-primary">
                                  <th style="color:#3F3F3F;" >SL</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Profile</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student Name</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student ID</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Academic Year</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Class</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Section</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Roll</th> 
                                  <th style="color:#3F3F3F;text-align:center;" >Mobile No</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Status</th>
                                  <th style="color:#3F3F3F;text-align:center;" >View</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Print</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $sl = 1;
                                foreach($all_student_find as $key=>$value) {
                                  $active_student = strtolower(trim($value['Std_status']));
                                  if($active_student=='2'){
                                    ?>
                                    <tr class="gradeC">
                                      <td ><?php echo $sl; ?></td>
                                      <td><img class="img-responsive" style="margin: auto;
                                      vertical-align: middle;" alt="No Image Found" id="blah"  src="<?php echo base_url('/images/student/').$value['Image'];?>" width="25" height="25"/>
                                    </td>
                                    <td style="text-align:center;""><?php echo $value['Std_Name']; ?></td>
                                    <td style="text-align:center;""><?php echo $value['STD_UNQ_ID']; ?></td>
                                    <td style="text-align:center;""><?php echo $value['Year_Name']; ?></td>
                                    <td style="text-align:center;""><?php echo $value['Class_Name']; ?></td>
                                    <td style="text-align:center;""><?php echo $value['Section_Name']; ?></td>
                                    <td><?php echo $value['Std_roll']; ?></td>
                                    <td ><?php echo $value['Std_parent_mobile']; ?></td>
                                    <td class="text-center"> <?php 
                                    if($value['Std_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>active</spane>';}
                                      else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                      inactive</spane>';} ?>
                                    </td> 
                                    <td style="vertical-align:middle;text-align:center;width: 9%;">
                                      <a  data-toggle="modal"
                                      data-id="<?php echo $value['Std_ID'];?>" 
                                      data-name="<?php echo $value['Std_Name'];?>" 
                                      data-parent="<?php echo $value['Std_parent'];?>" 
                                      data-birthday="<?php echo $value['Std_birthday'] ?>"
                                      data-birthid="<?php echo $value['Std_birth_ID'];?>"  
                                      data-classid="<?php echo $value['Class_Name'];?>"
                                      data-sectionid="<?php echo $value['Section_Name'];?>" 
                                      data-groupid="<?php echo $value['Group_Name'];?>" 
                                      data-roll="<?php echo $value['Std_roll'];?>"
                                      data-parentmobile="<?php echo $value['Std_parent_mobile'];?>"
                                      data-gender="<?php if($value['Std_gender']=='1'){echo 'Male';}elseif($value['Std_gender']=='2'){echo 'Female';}?>"
                                      data-bloodgroup="<?php
                                      if($value['Student_BloodGroup']==1){echo 'A +';}
                                      if($value['Student_BloodGroup']==2){echo 'A -';}
                                      if($value['Student_BloodGroup']==3){echo 'B +';}
                                      if($value['Student_BloodGroup']==4){echo 'B -';}
                                      if($value['Student_BloodGroup']==5){echo 'AB +';}
                                      if($value['Student_BloodGroup']==6){echo 'AB -';}
                                      if($value['Student_BloodGroup']==7){echo 'O +';}
                                      if($value['Student_BloodGroup']==8){echo 'O -';}?>"
                                      data-religion="<?php 
                                      if($value['Std_religion']=='1'){echo 'MUSLIM';}
                                      elseif($value['Std_religion']=='2'){echo 'HINDUS';}?>"
                                      data-address="<?php echo $value['Std_address'];?>"
                                      data-email="<?php echo $value['Std_email'];?>"
                                      data-year="<?php echo $value['Year_Name'];?>"
                                      data-registrationdate="<?php echo $value['Std_registration_date'];?>"
                                      data-status="<?php 
                                      if($value['Std_status']==1){echo 'Active';}
                                      elseif($value['Std_status']==2){echo 'Inactive';}?>"
                                      data-image="<?php echo base_url('images/student/').$value['Image'];?>" 
                                      class="open-memberView" href="#memberView">
                                      <i class="fa fa-eye"></i>View
                                    </a>
                                  </td>
                                  <td style=" vertical-align: middle;text-align: center; width: 7%;"><a target="_blank" 
                                    href="<?php echo base_url();?>student/student/print_student_single/<?php echo $value['Std_ID']; ?>">Print</a>
                                  </td>
                                  <td  style="text-align: center;">
                                    <a href="<?php echo base_url();?>student/student/edit_student/<?php echo $value['Std_ID']; ?>">
                                      <button class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                      </button>
                                    </a>
                                    <a data-toggle="modal" data-professionid="<?php echo $value['Std_ID']; ?>" data-title="<?php echo $value['Std_Name']; ?>" class="open-deleteModal" href="#deleteModal" > 
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
                                  <th style="color:#3F3F3F;text-align:center;" > Profile</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student Name</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Student ID</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Academic Year</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Class</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Section</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Roll</th>
                                  <th style="color:#3F3F3F;text-align:center;" >View</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Print</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Mobile</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Status</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div> <!-- tab 3 end here
                        </div><!-- tab Content end here -->
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



<script>
//javaScriptForTransactablevar non_ptnID;   var non_GroupID;
$(document).on("click", ".open-deleteModal", function () {
  var Std_ID = $(this).attr('data-professionid');
// alert(ProfessionID);
var Std_Name = $(this).attr('data-title');
// alert(Std_birthday);
$("#Std_Name").html(Std_Name);
$("#delete_Std_ID").val(Std_ID);

});
</script>

<div class="modal fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        Delete The Student Information</h4>

      </div><!-- modal header -->

      <form action="<?php echo base_url();?>student/student/student_delete" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div id="media-upload" class="panel blank-panel">
            <input type="hidden" id="delete_Std_ID" name="delete_Std_ID" value="">

            <div class="panel-heading">
              <div class="panel-options">
                <h3>Are your sure to delete " <span style="font-size: 12px;" id="Std_Name"></span>
                  "<?php //echo $value['Std_birthday']; ?>?
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


<script type="text/javascript">
  $(document).on("click", ".open-memberView", function () {
// var MemberID = $(this).data('id');
// var data = 'one=' + MemberID;
/*
var id = $(this).data('id');
alert(id);*/

var id = $(this).data('id');



var Std_Name           = $(this).data('name');
var Std_parent         = $(this).data('parent');
var Std_gender         = $(this).data('gender');
var Std_birthday       = $(this).data('birthday');
var Std_birth_ID       = $(this).data('birthid');
var Student_BloodGroup = $(this).data('bloodgroup');
var Class_Name         = $(this).data('classid');
var Std_roll           = $(this).data('roll');
var Section_Name       = $(this).data('sectionid');
var Group_Name         = $(this).data('groupid');
var Std_parent_mobile  = $(this).data('parentmobile');
var Std_religion       = $(this).data('religion');
var Std_email          = $(this).data('email');
var Std_address        = $(this).data('address');
var Year_Name          = $(this).data('year');
var Std_registration_date = $(this).data('registrationdate');
// var JoiningDate = $(this).data('joiningdate');
var Std_status         = $(this).data('status');
var Image              = $(this).data('image');
// var ReadStatus = $(this).data('readstatus');
// alert(Group_Name);

$(".ibox-content #Stu_ID").val(id); 
$(".ibox-content #Std_Name").html(Std_Name); 
$(".ibox-content #Std_parent").html(Std_parent); 
$(".ibox-content #Std_gender").html(Std_gender); 
$(".ibox-content #Std_roll").html(Std_roll); 
$(".ibox-content #Std_birthday").html(Std_birthday); 
$(".ibox-content #Std_birth_ID").html(Std_birth_ID); 
$(".ibox-content #Student_BloodGroup").html(Student_BloodGroup); 
$(".ibox-content #Class_Name").html(Class_Name); 
$(".ibox-content #Section_Name").html(Section_Name); 
$(".ibox-content #Group_Name").html(Group_Name); 
$(".ibox-content #Std_email").html(Std_email); 
$(".ibox-content #Std_religion").html(Std_religion); 
$(".ibox-content #Std_parent_mobile").html(Std_parent_mobile); 
$(".ibox-content #Std_address").html(Std_address); 
$(".ibox-content #Year_Name").html(Year_Name); 
$(".ibox-content #Std_registration_date").html(Std_registration_date); 
// $(".ibox-content #JoiningDate").html(JoiningDate); 
$('.ibox-content #Image').attr('src',Image);
$(".ibox-content #Std_status").html(Std_status); 

// if(document.getElementById('readstatus').style.display=='none') {
//   document.getElementById('readstatus').style.display='block';
// }     
// var ReadStatus = $(this).data('readstatus');
// 
});


</script>


</body>
</html>


<!-- Message View Modal start-->
<div class="modal" id="memberView" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content animated fadeIn">
      <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
        <h3><strong>Student View</strong></h3>
      </div>
      <div class="ibox-content" style="padding-top: 10px;">
        <!--<p>Sign in today for more expirience.</p>-->
        <input type="hidden" Std_Name="Std_ID" id="Std_ID" value="">
        <div class="row">
          <div class="col-lg-12">

            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong> Student Name :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 style="color: red" id="Std_Name"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong> Father's Name :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_parent"></h5>
              </div>
            </div>

            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Gender :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_gender"></h5>
              </div>

            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Class Name :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Class_Name"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Std Class Roll :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_roll"></h5>
              </div>
            </div>

            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Section ID :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Section_Name"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Group :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Group_Name"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Academic Year :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Year_Name"></h5>
              </div>
            </div>

            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Date Of Birth:</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_birthday"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong> Birth Cert. ID:</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_birth_ID"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong> Blood Group:</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Student_BloodGroup"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong> Parents Mobile No :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_parent_mobile"></h5>
              </div>
            </div>

            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Email ID :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_email"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Address :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_address"></h5>
              </div>
            </div>
            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Religion :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_religion"></h5>
              </div>
            </div> 

            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Joining Date  :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 id="Std_registration_date"></h5>
              </div>
            </div>

            <div class="col-lg-12" style="margin-bottom: 0px;">
              <div class="col-lg-4" style="text-align: right;">
                <h5><strong>Status :</strong></h5>
              </div>
              <div class="col-lg-8">
                <h5 style="color: red;" id="Std_status"></h5>
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