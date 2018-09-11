<?php $this->load->view('dashboard/common/header'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/dashboard/js/ckeditor/ckeditor.js"></script>
<link href="<?php echo base_url(); ?>assets/dashboard/css/upload.css" rel="stylesheet">
<style type="text/css">
    .modal-dialog, .modal-content {
        width: 98%;
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
    .form-group{
        margin-bottom: 2px !important;
    }
    .well {
        /* min-height: 20px; */
        padding: 5px;
    }
    .panel-heading {
        padding: 5px 15px;
    }
    .wrapper-content {
        /*padding: 20px 10px 40px;*/
        padding: 0px 0px 0px;
    }
    .form-horizontal .control-label {
        padding-top: 5px; 
        margin-bottom: 0;
        text-align: right;
    }
    .ibox-title{
        height: 40px;
    }
    .panel {
        margin-bottom: 2px; 
    }
    .panel-body {
        padding: 1px; 
    }
    .bold{
        color:black;
    }
    .table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td {
        /*padding: 5px; */
    }
    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
        padding: 1px; 
    }
    body {overflow-x: visible;}
    .row-fluid{
        white-space: nowrap;
    }
    .row-fluid .col-lg-3{
        display: inline-block;
    }
    .scheduler-border {
        width:inherit; /* Or auto */
        padding:0 10px; /* To give a bit of padding on the left and right */
        border-bottom:none;
        /*margin:1px;*/
    }
    /*fieldset { min-width: 100%; }*/
</style>
</head>
<body>
    <div id="wrapper ">
        <?php $this->load->view('dashboard/common/left_nav'); ?>
        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav'); ?>
            </div>
            <section id="main-content">
                <div class="row-fluid">
                    <div class="col-md-12">
                        <div class="wrapper wrapper-content">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title" style="background:#00acc1;">
                                    <h5 style="color:#ffffff"><i class="fa fa-user-plus"></i>Teacher Info</h5>
                                    <div class="ibox-tools">
                                        <a class="btn btn-success" style="padding: 0 10px 0 10px; " href="<?php echo base_url(); ?>teacher/teacher/teacher_list"><i class='fa fa-eye'></i> Teacher List</a>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                if ($this->session->has_userdata('message')) {
                                    ?>          
                                    <div class="alert alert-success text-center successMessage">
                                        <strong><?php echo $this->session->message; ?></strong>
                                    </div>
                                    <?php
                                    $this->session->unset_userdata('message');
                                } elseif ($this->session->has_userdata('error_msg')) {
                                    ?> 
                                    <div class="alert alert-danger text-center successMessage">
                                        <strong><?php echo $this->session->error_msg; ?></strong> 
                                    </div>
                                    <?php
                                    $this->session->unset_userdata('error_msg');
                                }
                                ?>
                                <div class="ibox-content col-md-12" style="padding:2px 0;">
                                    <div class="panel with-nav-tabs panel-default">
                                        <div class="panel-heading">
                                            <ul class="nav nav-tabs tab-menu">
                                                <li class="active">
                                                    <a  href="#tab1default" data-toggle="tab">Teacher Add Info</a>
                                                </li>

                                                <li>
                                                    <a href="" data-target="#tab2default" data-toggle="tab">System User Info</a>
                                                </li>
                                                <li><a href="#tab4default" data-toggle="tab">Teacher Summery</a></li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="tab1default">
                                                    <div class="panel-body" id="student_basic_info1" style="display:none;">

                                                    </div>

                                                    <form class=" form-horizontal" action="<?php echo base_url(); ?>teacher/teacher/teacher_info_add" method="post" enctype="multipart/form-data">
                                                        <fieldset   style="width:900px; height:px; text-align:left;margin:auto;" >
                                                            <!--  <div   style="width:900px;border:1px solid red; height:400px; text-align:center;margin:auto;" > -->
                                                            <div class="col-md-12">
                                                                <div class="col-md-12" style="margin-top: 20px;">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group col-md-12 data_1">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top:7px" class=" control-label"><span></span>Teacher Unique ID </label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer">
                                                                                <input name="Teacher_UniqueID" style="margin-top:5px;" class="form-control"  type="text">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="form-group  col-md-12 data_1">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px;" class=" control-label"> <span class="required"></span>Teacher Name</label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                                                <input  name="Teacher_Name"  class="form-control"  type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group  col-md-12 data_1">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px;margin-top: 5px;" class=" control-label"> <span class="required"></span>Father's Name</label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                                                <input  name="Teacher_FathersName"  class="form-control"  type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group  col-md-12 data_1">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px;margin-top: 5px;" class=" control-label"> <span class="required"></span>Mother's Name</label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                                                <input  name="Teacher_MothersName"  class="form-control"  type="text">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px" class=" control-label"><span></span>Teacher Index No.</label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer">
                                                                                <input name="Teacher_IndexNo" style="margin-top:5px;" class="form-control"  type="text">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px" class=" control-label"><span></span>National ID</label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer">
                                                                                <input name="Teacher_NationalID" style="margin-top:5px;" class="form-control"  type="text">
                                                                            </div>
                                                                        </div> 
                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px" class=" control-label"><span></span>Mobile No</label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer">
                                                                                <input name="Teacher_mobile" style="margin-top:5px;" class="form-control"  type="text">
                                                                            </div>
                                                                        </div>  
                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px" class=" control-label"><span></span>Email</label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer">
                                                                                <input name="Teacher_email" style="margin-top:5px;" class="form-control"  type="email">
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px" class=" control-label"><span class="required" color:red;></span>Address </label>
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer"  style="margin-top:5px;">
                                                                                <textarea name="Teacher_address" class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group col-md-12 ">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px" class=" control-label"> <span class="required"></span>Birth Date</label>
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer"  style="margin-top:5px;">
                                                                                <div class="input-group date">
                                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date1"  type="text" name="Teacher_DateOfBirth" class="start_date form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12 ">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px" class=" control-label"> <span class="required"></span>Joining Date</label>
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer"  style="margin-top:5px;">
                                                                                <div class="input-group date">
                                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date1"  type="text" name="Teacher_joining_date" class="start_date form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left;margin-top: 7px" class=" control-label"><span></span>Designation </label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer">

                                                                                <select name="Teacher_designation" style="text-align:left; margin-top: 7px"  class="form-control selectpicker select2" onchange="ClassTitle(this.value)">
                                                                                    <option value="" ></option>
                                                                                    <?php foreach ($designation as $key => $value):
                                                                                    ?>
                                                                                    <option value="<?php echo $value['DesignationID']; ?>"><?php echo $value['DesignationName'] ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group col-md-12" style="margin-top:5px;">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left" class=" control-label"> <span class=""></span>Class</label>
                                                                            </div>
                                                                            <div class="col-md-8 selectContainer"  style="margin-top:5px;">

                                                                                <select name="Std_class_ID" style="text-align:left"  class="form-control selectpicker select2" ">
                                                                                    <option value="" ></option>
                                                                                    <?php foreach ($Class_Data as $key => $value): ?>
                                                                                        <option value="<?php echo $value['Class_ID']; ?>"><?php echo $value['Class_Name'] ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group col-md-12" style="margin-top:5px;">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left" class=" control-label"> <span class=""></span>Section</label>
                                                                            </div>
                                                                            <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                                                <select name="Std_section_ID" style="text-align:left"  class="form-control selectpicker select2" >
                                                                                    <option value="" ></option>
                                                                                    <?php foreach ($Section_Data as $key => $value): ?>
                                                                                        <option value="<?php echo $value['Section_ID']; ?>"><?php echo $value['Section_Name'] ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group col-md-12" style="margin-top:5px;">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left" class=" control-label"> <span class=""></span>Group</label>
                                                                            </div>
                                                                            <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                                                <select name="Std_group_ID"  style="text-align:left "  class="form-control selectpicker select2">
                                                                                    <!--   <option value="" ></option> -->
                                                                                    <?php foreach ($Group_Data as $key => $value): ?>
                                                                                        <option value="<?php echo $value['Group_ID']; ?>"><?php echo $value['Group_Name'] ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>                               
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left" class=" control-label"><span ></span>Roll</label> 
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer">
                                                                                <input name="Std_roll" style="margin-top:5px;" class="form-control"  type="text"   >
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left" class=" control-label"><span class=""></span>Image Upload </label>
                                                                            </div>
                                                                            <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                                                <input type="file" style="margin-top:2px;" name="image" id="imgInp" class="form-control" style="padding-top:0px;">
                                                                                <br>
                                                                                <img class="img-responsive" style="width:90px;height:90px;" id="blah" alt=""/>  
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left" class=" control-label"> <span class=""></span>Status</label> 
                                                                            </div>
                                                                            <div class="col-md-8  inputGroupContainer selectContainer" style="margin-top:2px;">
                                                                                <select name="Std_status" class="form-control selectpicker">
                                                                                    <option value="1" selected="selected">Active</option>
                                                                                    <option value="0">Inactive</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <div class="col-md-4">
                                                                                <label style="text-align:left" class="col-md-2 control-label"></label>
                                                                            </div>
                                                                            <div class="col-md-8"><br>
                                                                                <input type="reset" name="reset" class="btn btn-info btn-sm" value="Reset">
                                                                                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </fieldset>
                                                        <!-- filedset -->
                                                    </form>

                                                </div>
                                                <!-- end of tab1 -->
                                                <div class="tab-pane fade" id="tab2default">
                                                    <div class="panel-body  well" id="student_basic_info2" style="display:none;">
                                                        <fieldset class="" style="width:900px; height:px; text-align:left; margin:auto;" >
                                                            <!-- <legend>Employee Basic info</legend> -->
                                                            <div class="col-sm-12">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-body ">
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-3">
                                                                                <label style="text-align:left; padding:0px">Student Name:</label>
                                                                            </div>
                                                                            <div class="col-md-6 inputGroupContainer">
                                                                                <label class="name"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" col-md-12 clearfix">
                                                                            <div class="col-md-4">
                                                                                <div class="col-md-3">
                                                                                    <span style="text-align:left; padding:0px">Class:</span>
                                                                                </div>
                                                                                <div class="col-md-9 inputGroupContainer">
                                                                                    <span class="class bold"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="col-md-3">
                                                                                    <span style="text-align:left; padding:0px">Section:</span>
                                                                                </div>
                                                                                <div class="col-md-9 inputGroupContainer">
                                                                                    <span class="section bold"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="col-md-3">
                                                                                    <span style="text-align:left; padding:0px">Group:</span>
                                                                                </div>
                                                                                <div class="col-md-9 inputGroupContainer">
                                                                                    <span class="group bold"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <form id="basicform" class="well form-horizontal" action="<?php echo base_url(); ?>student/student/student_user_info_add" method="post" enctype="multipart/form-data">
                                                        <fieldset style="width:600px; text-align:left;margin:auto;">
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <label style="text-align:left" class=" control-label"> <span class="required">*</span>ID Card No.</label>  
                                                                </div>
                                                                <div class="col-md-6 selectContainer">
                                                                    <select name="STD_UNQ_ID" class="form-control selectpicker select2" onchange="studentInfo(this.value, 2)" required="required">
                                                                        <option value="" title=""></option>
                                                                        <?php foreach ($all_student_find_summary as $key => $value): ?>
                                                                            <option value="<?php echo $value['STD_UNQ_ID'] ?>"><?php echo $value['STD_UNQ_ID']; ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <label style="text-align:left" class="control-label"> <span class="required">*</span>Username</label>
                                                                </div>
                                                                <div class="col-md-6 inputGroupContainer" style="margin-top:5px;">  
                                                                    <input  name="username"  id="username" onchange="userid_keyupp()" class="form-control"  type="text" required>
                                                                    <input name="user_form" type="hidden" value='2'>
                                                                </div>
                                                                <span id="unique_username_msg" style="color: red;"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <label style="text-align:left" class="control-label"> <span class="required">*</span>Email</label>
                                                                </div>
                                                                <div class="col-md-6 inputGroupContainer">
                                                                 <!--  <span class="email bold"></span> -->

                                                                    <input  name="email" id="email" class="form-control"  type="text" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <label style="text-align:left" class="control-label"> <span class="required">*</span>Password</label>
                                                                </div>
                                                                <div class="col-md-6 inputGroupContainer">
                                                                    <input id="password" name="password"  class="form-control"  type="password" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <label style="text-align:left" class="control-label"> <span class="required">*</span>Confirm Password</label> 
                                                                </div>
                                                                <div class="col-md-6 inputGroupContainer">
                                                                    <input id="passconf"  name="passconf"  class="form-control"  type="password" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <label style="text-align:left" class="control-label"> <span class="required">*</span>Role</label>
                                                                </div>
                                                                <div class="col-md-6 selectContainer">
                                                                    <select name="role" class="form-control  selectpicker  " readonly style="text-align:left">
                                                                        <option value="5" selected="selected">Student</option>
                                                                    </select>

                                                                    <!--  <option value=""></option>
                                                                    <?php //foreach ($role_finding as $key => $role): ?>
                                                                     <option value="<?php //echo $role['id']  ?>"><?php //echo $role['role_name'];  ?></option>
                                                                    <?php //endforeach ?> -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <label style="text-align:left" class="control-label"> <span class="required">*</span>Status</label> 
                                                                </div>
                                                                <div class="col-md-6 selectContainer" style="margin-top:5px;">
                                                                    <select name="status" class="form-control selectpicker">
                                                                        <option value="">Select status</option>
                                                                        <option value="1" selected="selected">Active</option>
                                                                        <option value="0">Inactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4">
                                                                    <label style="text-align:left" class="col-md-2 control-label"></label>  
                                                                </div>
                                                                <div class="col-md-6"><br>
                                                                    <input type="reset" name="reset" class="btn btn-info btn-sm" value="Reset">
                                                                    <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <!-- end of tab2 -->

                                                <div class="tab-pane fade" id="tab4default">
                                                    <div class="panel-body" id="student_basic_info4" style="display:none;">
                                                        <fieldset class="" style="width:950px; height:px; text-align:center;margin:auto;" >
                                                            <!-- <legend>Employee Basic info</legend> -->
                                                            <div class="col-sm-12">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-body ">
                                                                        <div class=" col-md-12 clearfix">
                                                                            <div class="col-md-6">
                                                                                <div class="col-md-3">
                                                                                    <span style="text-align:left; padding:0px">Department:</span>
                                                                                </div>
                                                                                <div class="col-md-9 inputGroupContainer">
                                                                                    <span class="department bold"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="col-md-3">
                                                                                    <span style="text-align:left; padding:0px">Designation:</span>
                                                                                </div>
                                                                                <div class="col-md-9 inputGroupContainer">
                                                                                    <span class="designation bold"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <form id="basicform" class="well form-horizontal" action="<?php echo base_url(); ?>student/student/student_summary" method="post" enctype="multipart/form-data">
                                                        <fieldset style="width:100%; text-align:center;margin:auto;">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="card card-topline-purple">
                                                                                    <div class="card-body ">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table table-striped custom-table table-hover">
                                                                                                <thead style=" background: #00acc1; color: #ffffff;">
                                                                                                    <tr>
                                                                                                        <th style="text-align: center;" >Class</th>
                                                                                                        <th style="text-align: center;" >Section</th>
                                                                                                        <th style="text-align: center;" >Group</th>
                                                                                                        <th style="text-align: center;" >Totall Student</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <?php
                                                                                                    foreach ($all_student_find_summary as $key => $value) {
                                                                                                        # code...
                                                                                                        ?>
                                                                                                        <tr>
                                                                                                            <td><?php echo $value['Class_Name'] ?></td>
                                                                                                            <td><?php echo $value['Section_Name'] ?></td>
                                                                                                            <td><?php echo $value['Group_Name'] ?></td>
                                                                                                            <td><?php echo $value['total_student'] ?></td>

                                                                                                        </tr>
<?php } ?>
                                                                                                    <!-- <tr>
                                                                                                       <td>Nurcery</td>
                                                                                                       <td>B</td>
                                                                                                       <td>90</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                       <td>Nurcery</td>
                                                                                                       <td>C</td>
                                                                                                       <td>45</td>
                                                                                                    </tr> -->
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
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <!-- end of tab4 -->
                                            </div>
                                            <!--end tab-content  -->
                                        </div>
                                        <!--end of panel-body -->
                                    </div>
                                </div>
                                <!-- end of ibox-content col-md-12 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of row -->  
            </section>
        </div>
        <!-- end of page wrapper -->      
    </div>
    <!-- end of  wrapper -->
</h4>
<?php $this->load->view('dashboard/common/footer_js'); ?>
</body>
</html>
<script type="text/javascript">
    function validateForm() {
        var x = document.forms["myForm"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
            alert("Not a valid e-mail address");
            return false;
        }
    }

    $(document).ready(function () {
        $('.data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
        $('.data_1 .input-group.date').datepicker('setDate', new Date());
        // $('.data_1 .input-group.date').datepicker();
    });

    $("#date2").on('change keydown paste input', function () {
        var ONE_DAY = 1000 * 60 * 60 * 24;
        $('#date1').datepicker();
        $('#date2').datepicker();

        var diff = $('#date2').datepicker("getDate") - $('#date1').datepicker("getDate");
        var leave_duration = diff / ONE_DAY + 1;
        $('#leave_duration').val(leave_duration);
    });


    function userid_keyup() {
        var employee_id = $("#employee_id").val();
        // alert(employee_id);
        $.getJSON("<?php echo base_url(); ?>employee/employee/json_unique_employeeid_check?1=1&employee_id=" + employee_id, function (data) {
            if (data.exist == 1) {
                document.getElementById('unique_employeeid_msg').innerHTML = "This ID Card Number is already existed!";
                document.getElementById('employee_id').value = "";
            } else {
                document.getElementById('unique_employeeid_msg').innerHTML = "<span style='color:green;'>Available</span>";
            }
        });

    }

    function userid_keyupp() {
        var username = $("#username").val();
        // alert(username);
        $.getJSON("<?php echo base_url(); ?>employee/employee/json_unique_username_check?1=1&username=" + username, function (dataa) {
            if (dataa.existt == 1) {
                document.getElementById('unique_username_msg').innerHTML = "This Username is already existed!";
                document.getElementById('username').value = "";
            } else {
                document.getElementById('unique_username_msg').innerHTML = "<span style='color:green;'>Available</span>";
            }
        });

    }




    jQuery().ready(function () {

        var v = jQuery("#basicform").validate({
            rules: {
                username: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 15,
                },
                passconf: {
                    required: true,
                    equalTo: "#password",
                },
                hint: {
                    required: true,
                },
                first_name: {
                    required: true,
                },
                last_name: {
                    required: true,
                },
                address: {
                    required: true,
                },
                email_address: {
                    required: true,
                },
                full_address: {
                    required: true,
                },
            },
            errorElement: "span",
            errorClass: "help-inline-error",
        });

    });


    $(".select2").select2({placeholder: "Select an option", maximumSelectionSize: 6});


    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[0].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch (newcell.childNodes[0].type) {
                case "text":
                    newcell.childNodes[0].value = "";
                    break;
                case "checkbox":
                    newcell.childNodes[0].checked = false;
                    break;
                case "select-one":
                    newcell.childNodes[0].selectedIndex = 0;
                    break;
            }
        }
    }

    function deleteRow(tableID) {
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (null != chkbox && true == chkbox.checked) {
                    if (rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }


            }
        } catch (e) {
            alert(e);
        }
    }

    $(document).ready(function () {
        setTimeout(function () {
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

        $("#imgInp").change(function () {
            readURL(this);
        });
    });



    $(document).ready(function () {

        var count = 2;
        $('table').on('click', '.btnAdd', function () {
            // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd></input></td></tr>";
            var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) + "' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=exam_name[] style='width:100%' id=exam_name></input></td><td><input type=text name=institute_name[] style='width:100%' id=institute_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=board[] style='width:100%' id=board></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd style='width:100%'></input></td></tr>";
            $(this).closest('table').append(tr);
            $(this).attr('value', '-');
            $(this).toggleClass('btnDelete').toggleClass('btnAdd');
        }).on('click', '.btnDelete', function () {
            // alert($(this).closest('tr').index());
            // alert($(this).closest('tr'));
            // alert('Are you sure want to delete?');
            confirm('Are you sure want to delete?');
            $(this).closest('tr').remove();

        });

    });


    $(document).ready(function () {

        var count = 2;
        $('table').on('click', '.btnAdd2', function () {
            // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd2></input></td></tr>";
            var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) + "' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=company_name[] style='width:100%' id=company_name></input></td><td><input type=text name=designation[] style='width:100%' id=designation></input></td><td><input type=text name=from[] style='width:100%' id=from></input></td><td><input type=text name=to[] style='width:100%' id=to></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd2 style='width:100%'></input></td></tr>";
            $(this).closest('table').append(tr);
            $(this).attr('value', '-');
            $(this).toggleClass('btnDelete').toggleClass('btnAdd2');
        }).on('click', '.btnDelete', function () {
            // alert($(this).closest('tr').index());
            // alert($(this).closest('tr'));
            // alert('Are you sure want to delete?');
            confirm('Are you sure want to delete?');
            $(this).closest('tr').remove();

        });

    });

    $(document).ready(function () {

        var count = 2;
        $('table').on('click', '.btnAdd3', function () {
            // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd3></input></td></tr>";
            var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) + "' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=title_qualification[] style='width:100%' id=title_qualification></input></td><td><input type=text name=institute_name[] style='width:100%' id=institute_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd3 style='width:100%'></input></td></tr>";
            $(this).closest('table').append(tr);
            $(this).attr('value', '-');
            $(this).toggleClass('btnDelete').toggleClass('btnAdd3');
        }).on('click', '.btnDelete', function () {
            // alert($(this).closest('tr').index());
            // alert($(this).closest('tr'));
            // alert('Are you sure want to delete?');
            confirm('Are you sure want to delete?');
            $(this).closest('tr').remove();

        });

    });

    $(document).ready(function () {

        var count = 2;
        $('table').on('click', '.btnAdd6', function () {
            // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd3></input></td></tr>";
            var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) + "' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><select name='attachment_name[]' class='form-control selectpicker'><option value='1' selected='selected'>SSC</option><option value='2'>HSC</option><option value='3'>Honrs</option><option value='4'>Masters</option></select></td><td><div class='col-md-6 inputGroupContainer'><input  name='attachment_file[]' class='form-control'  type='file' required></div></td><td><input type=button value=+ class=btnAdd6 style='width:100%'></input></td></tr>";
            $(this).closest('table').append(tr);
            $(this).attr('value', '-');
            $(this).toggleClass('btnDelete').toggleClass('btnAdd6');
        }).on('click', '.btnDelete', function () {
            // alert($(this).closest('tr').index());
            // alert($(this).closest('tr'));
            // alert('Are you sure want to delete?');
            confirm('Are you sure want to delete?');
            $(this).closest('tr').remove();

        });

    });



</script>

<script>
    function ClassTitle(classId) {
        var id = classId;
        // alert(id);
        var data = 'one=' + id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>student/get_section_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                if (data) {
                    $('#sectionList').empty();
                    for (var i = 0; i < data.total; i++) { //for each user in the json response
                        $('#sectionList').append('<option value="' + data.sectionList[i]['Section_ID'] + '">' + data.sectionList[i]['Section_Name'] + '</option>');
                    } // for
                } // if
            } // success
        }); // ajax 
    }
</script>


<script type="text/javascript">
    function studentInfo(studentid, tabid) {
        for (var i = 0; i <= 11; i++) {
            if (i == tabid) {
                $("#student_basic_info" + tabid).show(500);
            } else {
                $("#student_basic_info" + i).hide();
            }
        }
        ;

        var id = studentid;
        // alert(id);
        var data = 'one=' + id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>student/get_student_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                if (data) {
                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        $(".class").text(data[i].Class_Name);
                        // alert(class);
                        $(".section").text(data[i].Section_Name);
                        $(".group").text(data[i].Group_Name);
                        $(".name").text(data[i].Std_Name);
                        $(".email").text(data[i].Std_email);
                    } // for

                } // if
            } // success
        }); // ajax 
    }
</script>