<?php $this->load->view('dashboard/common/header');?>
<script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/ckeditor/ckeditor.js"></script>
<link href="<?php echo base_url();?>assets/dashboard/css/upload.css" rel="stylesheet">
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
      <?php $this->load->view('dashboard/common/left_nav');?>
      <div id="page-wrapper" class="my-bg dashbard-1">
         <div class="row border-bottom">
            <?php $this->load->view('dashboard/common/top_nav');?>
         </div>
         <section id="main-content">
            <div class="row-fluid">
               <div class="col-md-12">
                  <div class="wrapper wrapper-content">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title" style="background:#1979CA;">
                           <h5 style="color:#ffffff"><i class="fa fa-user-plus"></i>Student SMS</h5>
                          
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
                        <div class="ibox-content col-md-12" style="padding:2px 0;">
                           <div class="panel with-nav-tabs panel-default">
                              <div class="panel-heading">
                                 <ul class="nav nav-tabs tab-menu">
                                    <li class="active">
                                       <a  href="#tab1default" data-toggle="tab">Student  Attend. SMS</a>
                                    </li>
                                    <li class="">
                                       <a  href="#tab2default" data-toggle="tab">Student General SMS </a>
                                    </li> 
                                    <li class="">
                                       <a  href="#tab3default" data-toggle="tab">Student Result SMS </a>
                                    </li>
                                     <li class="">
                                       <a href="" data-target="#tab4default" data-toggle="tab">Teacher General SMS</a>
                                    </li>
                                   
                                   <!--  <li class="">
                                       <a href="" data-target="#tab4default" data-toggle="tab">Teacher SMS</a>
                                    </li> -->
                                    <!-- <li>
                                       <a href="" data-target="#tab5default" data-toggle="tab">Guardian SMS</a>
                                    </li> -->
                                 </ul>
                              </div>
                              <div class="panel-body">
                                 <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                       <div class="panel-body" id="student_basic_info1" style="display:none;">
                                       </div>
                                          <fieldset style="width:900px; text-align:left;margin:auto;" >
                                             <div class="panel col-md-12" style="margin-top: 5px;">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <h4 style=" text-align: center;"> SMS Information</h4>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                      <h4 style=" text-align: center;"> Student Attendance Search</h4>
                                                    </div>
                                                  </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> SMS Type <sup style="color:red">*</sup> </span>    <span style="margin-left:3px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                               <select class="form-control select2" name="SMSTitle" id="SMSID" onchange="smsTitle(this.value)"  required="required">
                                                                     <option value=""></option>
                                                                     <?php
                                                                         foreach($Sms_stu_attendance_Data as $key=>$smsInfo) {
                                                                             ?>
                                                                                 <option  value="<?php echo $smsInfo->SMSID; ?>"><?php echo $smsInfo->SMSTitle; ?></option>
                                                                             <?php
                                                                         }
                                                                     ?>
                                                                 </select> 
                                                              </div>
                                                           </div>
                                                           
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Massage   </span>  <span style="margin-left: 15px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <textarea rows='8' class="form-control smsBody" readonly> </textarea>
                                                              </div>
                                                           </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Date   </span>  <span style="margin-left: 28px;" >  : </span> </label> 
                                                              </div>
                                                               <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                             <div class="input-group date">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="attendance_date"  type="text" name="attendance_date" class="start_date form-control">
                                                             </div>
                                                          </div>
                                                           </div> 

                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Type  </span>  <span style="color:red"> *</span> <span style="margin-left: 16px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <select class="form-control" name="student_status_attendance" onchange="student_status_attendance(this.value)" id="student_status_attendance" required="required" readonly>
                                                                    <option id="PresentID" class="PresentText"></option>
                                                                </select>
                                                              </div>
                                                           </div>  
                                                            <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Medium   </span>   <span style="margin-left: 5px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <select class="form-control " name="Std_medium_ID" id="Std_medium_ID" required="required" >
                                                                    <option value="">Select an option</option>
                                                                    <option value="1" selected>Bangla</option>
                                                                    <option value="2">English</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Shift <sup style="color:red">*</sup>  </span>   <span style="margin-left: 19px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                              <select class="form-control select2" name="Std_shift_ID" id="Std_shift_ID" required="required">
                                                                      <option value="">Select an option</option>
                                                                      <option value="1" selected="" >Day</option>
                                                                      <option value="2">Morning</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Class   <sup style="color:red">*</sup>  </span>  <span style="margin-left: 15px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                          
                                                              <select class="form-control " name="Class_ID" id="Class_ID" required="required">
                                                                  <option value="" selecte>ALL</option>
                                                                  <?php
                                                                   foreach($Class_Data as $key=>$classInfo) {
                                                                       ?>
                                                                        <option value="<?php echo $classInfo->Class_ID; ?>"><?php echo $classInfo->Class_Name; ?></option>
                                                                       <?php
                                                                    }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                          
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Section  </span>   <span style="margin-left: 12px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                           <select class="form-control select2" name="Section_ID" id="Section_ID" required="required"> 
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                                  <?php
                                                                      foreach($Section_Data as $key=>$sectionInfo) {
                                                                          ?>
                                                                              <option value="<?php echo $sectionInfo->Section_ID; ?>"><?php echo $sectionInfo->Section_Name; ?></option>
                                                                          <?php
                                                                      }
                                                                     ?>
                                                                </select>
                                                              </div>
                                                           </div>
                                                       
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Group  </span>   <span style="margin-left: 19px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                              <select class="form-control select2" name="Group_ID" id="Group_ID" required="required">
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                               <?php
                                                                   foreach($Group_Data as $key=>$groupInfo) {
                                                                       ?>
                                                                           <option value="<?php echo $groupInfo->Group_ID; ?>"><?php echo $groupInfo->Group_Name; ?></option>
                                                                       <?php
                                                                   }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>


                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Stu. ID  </span>   <span style="margin-left: 19px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                              <select class="form-control select2" name="STD_UNQ_ID" id="STD_UNQ_ID" required="required">
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                               <?php
                                                                   foreach($all_student_unique_id as $key=>$studentInfo) {
                                                                       ?>
                                                                         <option value="<?php echo $studentInfo['STD_UNQ_ID']; ?>"><?php echo $studentInfo['STD_UNQ_ID'] ?></option>
                                                                       <?php
                                                                   }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                      </div>

                                                      <div class="col-md-12">
                                                        <div class="col-md-6">

                                                        </div>
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:10px;" class=" control-label"> <span class="required"></span>   </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                             <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="sms_search_student_attendance()"> Find</button>
                                                              </div>
                                                           </div>
                                                        </div>
                                                      </div>
                                                    </div>   <!-- col-md12 end -->
                                                </div>  <!-- row end -->
                                            </div> <!-- panal end -->
                                          </fieldset>
                                        
                         <!-- ===========///for search start============= -->

                                    <script>
                                       function sms_search_student_attendance(){
                                          var Class_ID      = $("#Class_ID").val();
                                          var Section_ID    = $('#Section_ID').val();
                                          var Group_ID      = $('#Group_ID').val();
                                          var Std_medium_ID = $("#Std_medium_ID").val();
                                          var Std_shift_ID  = $("#Std_shift_ID").val();
                                          var smsBodyfind   = $(".smsBody").val();
                                          var STD_UNQ_ID    = $("#STD_UNQ_ID").val();
                                              // alert(smsBodyfind);
                                          // var smsBodyfind = smsBodyfind.replace(/\$/g, 'son');
                                       
                                              // alert(s);
                                          var attendance_date            = $('#attendance_date').val();
                                          var student_status_attendance  = $('#student_status_attendance').val();
                                          
                                        
                                          $.getJSON("<?php echo base_url();?>sms/sms/sms_student_search_attendance?1=1&Class_ID="+Class_ID+"&Section_ID="+Section_ID+"&Group_ID="+Group_ID+"&Std_shift_ID="+Std_shift_ID+"&Std_medium_ID="+Std_medium_ID+"&attendance_date="+attendance_date+"&student_status_attendance="+student_status_attendance+"&smsBodyfind="+smsBodyfind+"&STD_UNQ_ID="+STD_UNQ_ID, function(data) { 
                                             $('#sms_stu_attendance_container').empty();

                                              // alert(data.queryData);
                                              // alert(smsBodyfind);
                                              // alert(data.sms_search_List['Std_class_ID']);
                                              if (data.total=='0') {
                                                 alert("There is no data found !");
                                              }

                                              // if(Class_ID==''){
                                              //   alert("Please select a  Class!");
                                              //   exit();
                                              // }

                                             for (i = 1; i <= data.total; i++) {  

                                                $("#sms_stu_attendance_container").append('<tr id="trr_'+i+'" class="gradeC">'
                                                +'<td>'+i+'</td>'
                                                +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['Class_Name']+'">'+'</td>'
                                                +'<td>'+'<input type="text" readonly class="form-control" name="Std_Name[]" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['Std_Name']+'">'+'</td>'
                                                +'<td>'+'<input type="text" readonly class="form-control" name="STD_UNQ_ID[]" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['STD_UNQ_ID']+'">'+'</td>'
                                                +'<td>'+'<input type="text" readonly class="form-control" name="Std_parent_mobile[]" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['Std_parent_mobile']+'">'+'</td>'
                                                +'<td>'+'<input type="text" readonly class="form-control" name="Std_roll[]" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['Std_roll']+'">'+'</td>'
                                                +'<td>'+'<input type="text"  readonly class="form-control" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['student_medium']+'">'+'</td>'
                                                +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['student_shift']+'">'+'</td>' 
                                                +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['Section_Name']+'">'+'</td>' 
                                                +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.attendance_search_List[i]['Group_Name']+'">'+'</td>' 
                                                +'<input type="hidden" name="Std_class_ID[]"  value="'+data.attendance_search_List[i]['Std_class_ID']+'">'
                                                +'<input type="hidden" name="Std_medium_ID[]"  value="'+data.attendance_search_List[i]['Std_medium_ID']+'">' 
                                                +'<input type="hidden" name="Std_shift_ID[]"  value="'+data.attendance_search_List[i]['Std_shift_ID']+'">' 
                                                +'<input type="hidden" name="Std_section_ID[]"  value="'+data.attendance_search_List[i]['Std_section_ID']+'">'
                                                 +'<input type="hidden" name="Std_group_ID[]"  value="'+data.attendance_search_List[i]['Std_group_ID']+'">'
                                                +'<input type="hidden" name="student_status_attendance[]"  value="'+data.attendance_search_List[i]['student_status_attendance']+'">'
                                                +'<input type="hidden" name="attendance_date[]"  value="'+data.attendance_search_List[i]['attendance_date']+'">'
                                                +'<td>'+'<input type="text" readonly class="form-control" name="attendance_sms[]"  value="'+data.attendance_search_List[i]['attendance_sms']+'">'+'</td>'
                                                +'</tr>');
                                             }
                                             document.getElementById('total_items').value = data.total;
                                          });
                                       }
                                    </script>

                                    <div class="col-md-12" style="background-color: #ffffff; padding: 10px 0px 0px 0px;">
                                       <form action=""  id="form1" role="form" name="StudentSMSAttendanceEntryForm" method="post" enctype="multipart/form-data">
                                        <!-- <inpsut type="hidden" name="smsBodyfind" class="smsBodyfind"> -->
                                          <div class="ibox-content" >
                                             <div class="col-md-12">

                                                <table  id="table_row_delete" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 0px;">
                                                   <thead class="theight">
                                              
                                                      <tr>
                                                         <th style=" text-align:center;width: 5%; padding-top:5px;">SL</th>
                                                         <th style=" text-align:center;width: 7%">Class Name</th>
                                                         <th style=" text-align:center;width: 15%">Student Name</th>
                                                         <th style=" text-align:center;width: 7%">  Stu. Unique ID</th>
                                                         <th style=" text-align:center;width: 12%">Stu. Mobile No.</th>
                                                         <th style=" text-align:center;width: 8%">Class Roll </th>
                                                         <th style=" text-align:center;width: 8%">Medium</th> 
                                                         <th style=" text-align:center;width: 8%">Shift</th>
                                                         <th style=" text-align:center;width: 8%">Section</th>
                                                         <th style=" text-align:center;width: 8%">Gorup</th>
                                                         <th style=" text-align:center;width: 15%"> SMS Data</th>
                                                      </tr>  
                                                   </thead>
                                                   <tbody id="sms_stu_attendance_container" class="theight">
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="col-md-12" style="padding-top: 10px; border-top: 1px solid #e7eaec;">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <label class="col-md-10" style="text-align: right; padding: 0px;" for="item_name">Total Student = </label>
                                                      <div class="col-md-2" style="text-align: left; padding: 0px 0px 10px 0px;">
                                                         <input type="text" name="total_items" id="total_items" class="" style="background-color: #F6E5E5; width: 100%; text-align: left;" readonly="readonly">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                           <div class="ibox-content" style="padding-top: 2px; height: 50px; margin-bottom: 50px; margin-top: 50px;">
                                               <div class="col-md-12 col-md-offset-3">
                                                   <div class="form-horizontal" style="">
                                                       <div class="col-md-3" style="padding-bottom:0.5%;">  
                                                           <button style="width: 100%;" class="btn btn-primary" onclick="submitForm('<?php echo base_url();?>sms/sms/sms_send_student_ateendance')"><i class="fa fa-floppy-o"></i> Send</button>
                                                       </div>
                                                       <div class="col-md-3" style="padding-bottom:0.5%;">
                                                           <a class="btn btn-danger" href="<?php echo base_url();?>admin_panel/welcome/dashboard" style="min-width: 100%; padding-left:0px; padding-right:0px;"><i class="fa fa-times"></i> Close</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </form>
                                    </div> 
                                     <!-- ===========///for search end============= -->
                               </div>
                     <!--   =========   tab1 end here ==========   -->


                     <!--   =========   tab2 start  here ==========   -->

                                   <div class="tab-pane fade in  " id="tab2default">
                                       <div class="panel-body" id="teacher_basic_info2" style="display:none;">
                                       </div>
                                     
                                          <fieldset   style="width:900px; height:px; text-align:left;margin:auto;" >
                                             <div class="panel col-md-12" style="margin-top: 5px;">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <h4 style=" text-align: center;"> SMS Information</h4>
                                                    </div>

                                                    <div class="col-md-6"> 
                                                      <h4 style=" text-align: center;"> Student SMS</h4>
                                                    </div>
                                                  </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> SMS Type  </span>    <span style="margin-left: 10px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                               <select class="form-control select2" name="SMSTitle" id="SMSID" onchange="smsTitle_Student_general(this.value)" required="required">
                                                                     
                                                                     <option value="">Select an option</option>
                                                                     <?php
                                                                         foreach($Sms_Stu_general_Data as $key=>$smsInfo) {
                                                                             ?>
                                                                              <option   value="<?php echo $smsInfo->SMSID; ?>"><?php echo $smsInfo->SMSTitle; ?></option> 
                                                                             
                                                                             <?php
                                                                         }
                                                                     ?>
                                                                 </select>
                                                               </div>
                                                           </div>
                                                           
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Massage   </span>  <span style="margin-left: 15px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <textarea rows='8' class=" form-control smsBodyGeneral"> </textarea>
                                                              </div>
                                                           </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                          
                                                            <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Medium   </span>   <span style="margin-left: 5px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <select class="form-control select2" name="Std_medium_ID" id="Std_medium_ID_Gen" required="required" >
                                                                    <option value="">Select an option</option>
                                                                    <option value="1" selected>Bangla</option>
                                                                    <option value="2">English</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Shift  </span>   <span style="margin-left: 29px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                              <select class="form-control select2" name="Std_shift_ID" id="Std_shift_ID_Gen" required="required">
                                                                      <option value="">Select an option</option>
                                                                      <option value="1" selected="" >Day</option>
                                                                      <option value="2">Morning</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Class   </span>  <span style="margin-left: 25px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                          
                                                              <select class="form-control select2" name="Class_ID" id="Class_ID_Gen" required="required">
                                                               <option value=""></option>
                                                               <option value="">ALL</option>
                                                               
                                                                  <?php
                                                                   foreach($Class_Data as $key=>$classInfo) {
                                                                       ?>
                                                                           <option value="<?php echo $classInfo->Class_ID; ?>"><?php echo $classInfo->Class_Name; ?></option>
                                                                       <?php
                                                                    }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                          
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Section  </span>   <span style="margin-left: 12px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                           <select class="form-control select2" name="Section_ID" id="Section_ID_Gen" required="required">
                                                            <option value=""></option>
                                                              <option value="">Select an option</option>
                                                                  <?php
                                                                      foreach($Section_Data as $key=>$sectionInfo) {
                                                                          ?>
                                                                              <option value="<?php echo $sectionInfo->Section_ID; ?>"><?php echo $sectionInfo->Section_Name; ?></option>
                                                                          <?php
                                                                      }
                                                                     ?>
                                                                </select>
                                                              </div>
                                                           </div>
                                                       
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Group  </span>   <span style="margin-left: 19px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                              <select class="form-control select2" name="Group_ID" id="Group_ID_Gen" required="required">
                                                              
                                                               <option value="">Select an option</option>
                                                               <?php
                                                                   foreach($Group_Data as $key=>$groupInfo) {
                                                                       ?>
                                                                      <option value="<?php echo $groupInfo->Group_ID; ?>"><?php echo $groupInfo->Group_Name; ?></option>
                                                                       <?php
                                                                   }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                      </div>

                                                      <div class="col-md-12">
                                                        <div class="col-md-6">
                                                        </div>
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:10px;" class=" control-label"> <span class="required"></span>   </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                             <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="sms_search_student_general()"> Find</button>
                                                              </div>
                                                           </div>
                                                        </div>
                                                      </div>
                                                    </div>   <!-- col-md12 end -->

                                                </div>  <!-- row end -->
                                            </div> <!-- panal end -->
                                               
                                          </fieldset>
                                        
                         <!-- ===========///for search start============= -->

                                    <script>
                                       function sms_search_student_general(){
                                         
                                          var Class_ID_Gen       = $("#Class_ID_Gen").val();
                                          var Section_ID_Gen     = $('#Section_ID_Gen').val();
                                          var Group_ID_Gen       = $('#Group_ID_Gen').val();
                                          var Std_medium_ID_Gen  = $("#Std_medium_ID_Gen").val();
                                          var Std_shift_ID_Gen   = $("#Std_shift_ID_Gen").val();
                                          var smsBodyfindGeneral = $(".smsBodyGeneral").val();
                                       
                                          // var attendance_date   = $('#attendance_date').val();
                                          // var Subject_Name   = $('#subjectList').text();
                                        
                                              // alert(smsBodyfindGeneral);
                                          $.getJSON("<?php echo base_url();?>sms/sms/sms_student_search_general?1=1&Class_ID_Gen="+Class_ID_Gen+"&Section_ID_Gen="+Section_ID_Gen+"&Group_ID_Gen="+Group_ID_Gen+"&Std_shift_ID_Gen="+Std_shift_ID_Gen+"&Std_medium_ID_Gen="+Std_medium_ID_Gen+"&smsBodyfindGeneral="+smsBodyfindGeneral, function(data) { 
                                             $('#stu_general_container').empty();
                                              // alert(data.queryData);
                                              // alert(attendance_date);
                                              // alert(data.general_student_search_List[i]['Class_Name']);
                                              if (data.total=='0') {
                                                 alert("There is no data found !");
                                              }

                                              // if(Class_ID==''){
                                              //   alert("Please select a  Class!");
                                              //   exit();
                                              // }
                                             for (i = 1; i <= data.total; i++) {  

                                                $("#stu_general_container").append('<tr id="trr_'+i+'" class="gradeC">'
                                                  +'<td>'+i+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['Class_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Std_Name[]" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['Std_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="STD_UNQ_ID[]" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['STD_UNQ_ID']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Std_parent_mobile[]" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['Std_parent_mobile']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Std_roll[]" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['Std_roll']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['student_medium']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['student_shift']+'">'+'</td>' 
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['Section_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['Group_Name']+'">'+'</td>' 
                                                  +'<input type="hidden" name="Std_class_ID[]"  value="'+data.general_student_search_List[i]['Std_class_ID']+'">'
                                                  +'<input type="hidden" name="Std_medium_ID[]"  value="'+data.general_student_search_List[i]['Std_medium_ID']+'">' 
                                                  +'<input type="hidden" name="Std_shift_ID[]"  value="'+data.general_student_search_List[i]['Std_shift_ID']+'">' 
                                                  +'<input type="hidden" name="Std_section_ID[]"  value="'+data.general_student_search_List[i]['Std_section_ID']+'">'
                                                  +'<input type="hidden" name="Std_group_ID[]"  value="'+data.general_student_search_List[i]['Std_group_ID']+'">'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="smsBodyfindGeneral[]" style="width: 100%; text-align:center" value="'+data.general_student_search_List[i]['smsBodyfindGeneral']+'">'+'</td>' 
                                                +'</tr>');
                                             }
                                             document.getElementById('total_items').value = data.total;
                                          });
                                       }
                                    </script>

                                    <div class="col-md-12" style="background-color: #ffffff; padding: 10px 0px 0px 0px;">
                                       <form action=""  id="formGeneral" role="form" name="SMS_Student_generalEntryForm" method="post" enctype="multipart/form-data">
                                          <div class="ibox-content" >
                                             <div class="col-md-12">
                                                <table  id="table_row_delete" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 0px;">
                                                   <thead class="theight">
                                                      <tr>
                                                         <th style=" text-align:center;width: 5%; padding-top:5px;">SL</th>
                                                         <th style=" text-align:center;width: 10%">Class Name</th>
                                                         <th style=" text-align:center;width: 15%">Student Name</th>
                                                         <th style=" text-align:center;width: 8%">Stu. Unique ID</th>
                                                         <th style=" text-align:center;width: 8%">Stu.Mobile No.</th>
                                                         <th style=" text-align:center;width: 8%">Class Roll </th>
                                                         <th style=" text-align:center;width: 10%">Medium</th> 
                                                         <th style=" text-align:center;width: 10%">Shift</th>
                                                         <th style=" text-align:center;width: 10%">Section</th>
                                                         <th style=" text-align:center;width: 12%">Gorup</th>
                                                         <th style=" text-align:center;width: 12%">Send SMS </th>
                                                      </tr>  
                                                   </thead>
                                                   <tbody id="stu_general_container" class="theight">
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="col-md-12" style="padding-top: 10px; border-top: 1px solid #e7eaec;">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <label class="col-md-10" style="text-align: right; padding: 0px;" for="item_name">Total Student = </label>
                                                      <div class="col-md-2" style="text-align: left; padding: 0px 0px 10px 0px;">
                                                         <input type="text" name="total_items" id="total_items" class="" style="background-color: #F6E5E5; width: 100%; text-align: left;" readonly="readonly">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                           <div class="ibox-content" style="padding-top: 2px; height: 50px; margin-bottom: 50px; margin-top: 50px;">
                                               <div class="col-md-12 col-md-offset-3">
                                                   <div class="form-horizontal" style="">
                                                       <div class="col-md-3" style="padding-bottom:0.5%;">  
                                                         
                                                            <button style="width: 100%;" class="btn btn-primary" onclick="submitFormGeneral('<?php echo base_url();?>sms/sms/sms_send_student_general')"><i class="fa fa-floppy-o"></i> Send</button>
                                                       </div>

                                                       <div class="col-md-3" style="padding-bottom:0.5%;">
                                                           <a class="btn btn-danger" href="<?php echo base_url();?>admin_panel/welcome/dashboard" style="min-width: 100%; padding-left:0px; padding-right:0px;"><i class="fa fa-times"></i> Close</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </form>
                                    </div> 
                                     <!-- ===========///for search end============= -->
                               </div>
                     <!--   =========   tab2 end here ==========   -->



                      <!--   =========   tab3 start  here ==========  result   -->

                            <div class="tab-pane fade in " id="tab3default">
                                       <div class="panel-body" id="student_basic_info1" style="display:none;">
                                       </div>
                                     
                                          <fieldset   style="width:900px; height:px; text-align:left;margin:auto;" >
                                             <div class="panel col-md-12" style="margin-top: 5px;">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <h4 style=" text-align: center;"> SMS Result Information</h4>
                                                    </div>

                                                    <div class="col-md-6"> 
                                                      <h4 style=" text-align: center;"> Student SMS</h4>
                                                    </div>
                                                  </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> SMS Type  </span>    <span style="margin-left: 10px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                               <select class="form-control select2" name="SMSTitle" id="SMSID" onchange="smsTitle_Student_result(this.value)" required="required">
                                                                     <option value=""></option>
                                                                 
                                                                     <?php
                                                                         foreach($Sms_Stu_result_Data as $key=>$smsInfo) {
                                                                             ?>
                                                                                 <option value="<?php echo $smsInfo->SMSID; ?>"><?php echo $smsInfo->SMSTitle; ?></option>
                                                                             <?php
                                                                         }
                                                                     ?>
                                                                 </select>                                                           </div>
                                                           </div>
                                                           
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Massage   </span>  <span style="margin-left: 15px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <textarea rows='8' class=" form-control smsBodyResult"> </textarea>
                                                              </div>
                                                           </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                         

                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Exam Name  </span>  <span style="color:red"> *</span> <span style="margin-left: 16px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                               <select class="form-control select2" name="exam_ID_Res" id="exam_ID_Res"  required="required">
                                                             <!--  <option value=""></option>
                                                              <option value="">Select an option</option> -->
                                                              <?php
                                                                  foreach($Exam_name_Data as $key=>$exam_nameInfo) {
                                                                      ?>
                                                                          <option value="<?php echo $exam_nameInfo->Exam_term_ID; ?>"><?php echo $exam_nameInfo->Exam_term_Name; ?></option>
                                                                      <?php
                                                                  }
                                                              ?>
                                                         </select>
                                                              </div>
                                                           </div>  
                                                            <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Medium   </span>   <span style="margin-left: 5px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <select class="form-control select2" name="Std_medium_ID_res" id="Std_medium_ID_Res" required="required" >
                                                                    <option value="">Select an option</option>
                                                                    <option value="1" selected>Bangla</option>
                                                                    <option value="2">English</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Shift  </span>   <span style="margin-left: 29px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                              <select class="form-control select2" name="Std_shift_ID_Res" id="Std_shift_ID_Res" required="required">
                                                                      <option value="">Select an option</option>
                                                                      <option value="1" selected="" >Day</option>
                                                                      <option value="2">Morning</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Class   </span> <span style="color:red"> *</span>  <span style="margin-left: 15px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                          
                                                              <select class="form-control select2" name="Class_ID_Res" id="Class_ID_Res" required="required">
                                                               <option value=""></option>
                                                              <!--  <option value="">ALL</option>
                                                                -->
                                                                  <?php
                                                                   foreach($Class_Data as $key=>$classInfo) {
                                                                       ?>
                                                                           <option value="<?php echo $classInfo->Class_ID; ?>"><?php echo $classInfo->Class_Name; ?></option>
                                                                       <?php
                                                                    }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                          
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Section  </span>   <span style="margin-left: 12px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                           <select class="form-control select2" name="Section_ID_Res" id="Section_ID_Res" required="required">
                                                            <option value=""></option>
                                                              <option value="">Select an option</option>
                                                                  <?php
                                                                      foreach($Section_Data as $key=>$sectionInfo) {
                                                                          ?>
                                                                              <option value="<?php echo $sectionInfo->Section_ID; ?>"><?php echo $sectionInfo->Section_Name; ?></option>
                                                                          <?php
                                                                      }
                                                                     ?>
                                                                </select>
                                                              </div>
                                                           </div>
                                                       
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Group  </span>   <span style="margin-left: 19px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                              <select class="form-control select2" name="Group_ID_Res" id="Group_ID_Res" required="required">
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                               <?php
                                                                   foreach($Group_Data as $key=>$groupInfo) {
                                                                       ?>
                                                                           <option value="<?php echo $groupInfo->Group_ID; ?>"><?php echo $groupInfo->Group_Name; ?></option>
                                                                       <?php
                                                                   }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>

                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Stu. ID  </span>   <span style="margin-left: 19px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                              <select class="form-control select2" name="STD_UNQ_ID_Res" id="STD_UNQ_ID_Res" required="required">
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                               <?php
                                                                   foreach($all_student_unique_id as $key=>$studentInfo) {
                                                                       ?>
                                                                         <option value="<?php echo $studentInfo['STD_UNQ_ID']; ?>"><?php echo $studentInfo['STD_UNQ_ID'] ?></option>
                                                                       <?php
                                                                   }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                      </div>

                                                      <div class="col-md-12">
                                                       
                                                        <div class="col-md-6">
                                                        
                                                        </div>
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:10px;" class=" control-label"> <span class="required"></span>   </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                             <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="sms_search_student_result()"> Find</button>
                                                              </div>
                                                           </div>
                                                        </div>
                                                      </div>
                                                    </div>   <!-- col-md12 end -->

                                                </div>  <!-- row end -->
                                            </div> <!-- panal end -->
                                               
                                          </fieldset>
                                        
                         <!-- ===========///for search start============= -->

                                    <script>
                                       function sms_search_student_result(){
                                         
                                          var Class_ID_Res     = $("#Class_ID_Res").val();
                                        
                                          var Section_ID_Res   = $('#Section_ID_Res').val();
                                        
                                          var Group_ID_Res     = $('#Group_ID_Res').val();
                                        
                                          var Std_medium_ID_Res= $("#Std_medium_ID_Res").val();
                                        
                                          var Std_shift_ID_Res = $("#Std_shift_ID_Res").val();

                                          var exam_ID_Res      = $("#exam_ID_Res").val();
                                          var STD_UNQ_ID_Res   = $("#STD_UNQ_ID_Res").val();
                                       
                                          var smsBodyfindResult= $('.smsBodyResult').val();
                                          
                                          // var Subject_Name   = $('#subjectList').text();

                                              // alert(smsBodyfindResult);
                                            if(exam_ID_Res.trim()=='')
                                              {
                                                alert("Please Select A Exam Name  First !");
                                                return false;
                                              }
                                           if(Class_ID_Res.trim()=='')
                                              {
                                                alert("Please Select A Class  First !");
                                                return false;
                                              }
                                        
                                              // alert(Subject_ID);
                                          $.getJSON("<?php echo base_url();?>sms/sms/sms_student_search_result?1=1&Class_ID_Res="+Class_ID_Res+"&Section_ID_Res="+Section_ID_Res+"&Group_ID_Res="+Group_ID_Res+"&Std_shift_ID_Res="+Std_shift_ID_Res+"&Std_medium_ID_Res="+Std_medium_ID_Res+"&exam_ID_Res="+exam_ID_Res+"&STD_UNQ_ID_Res="+STD_UNQ_ID_Res+"&smsBodyfindResult="+smsBodyfindResult, function(data) { 
                                               $('#sms_stu_result_container').empty();
                                              // alert(data.queryData);
                                              // alert(attendance_date);
                                              // alert(data.general_student_search_List[i]['Class_Name']);
                                              if (data.total=='0') {
                                                 alert("There is no data found !");
                                              }

                                              // if(Class_ID==''){
                                              //   alert("Please select a  Class!");
                                              //   exit();
                                              // }
                                             for (i = 1; i <= data.total; i++) {  

                                                $("#sms_stu_result_container").append('<tr id="trr_'+i+'" class="gradeC">'
                                                  +'<td>'+i+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['Class_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Std_Name[]" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['Std_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Marks_Sum_Student_ID[]" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['Marks_Sum_Student_ID']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Std_roll[]" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['Std_roll']+'">'+'</td>'
                                                   +'<td>'+'<input type="text" readonly class="form-control" name="student_medium[]" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['student_medium']+'">'+'</td>'
                                                   +'<td>'+'<input type="text" id="Std_shift_ID" readonly class="form-control" name="student_shift[]" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['student_shift']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" id="Marks_stu_sub_total_marks" readonly class="form-control" name="Section_Name[]" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['Section_Name']+'">'+'</td>' 
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['Std_parent_mobile']+'">'+'</td>'
                                                  +'<input type="hidden" name="Marks_Sum_Exam_code_ID[]"  value="'+data.result_student_search_List[i]['Marks_Sum_Exam_code_ID']+'">'
                                                  +'<input type="hidden" name="Marks_Sum_Class_ID[]"  value="'+data.result_student_search_List[i]['Marks_Sum_Class_ID']+'">' 
                                                  +'<input type="hidden" name="Std_parent_mobile[]"  value="'+data.result_student_search_List[i]['Std_parent_mobile']+'">' 
                                                  +'<input type="hidden" name="Marks_Sum_Medium_ID[]"  value="'+data.result_student_search_List[i]['Marks_Sum_Medium_ID']+'">'
                                                   +'<input type="hidden" name="Marks_Sum_Shift_ID[]"  value="'+data.result_student_search_List[i]['Marks_Sum_Shift_ID']+'">' 
                                                  +'<input type="hidden" name="Marks_Sum_Sectoin_ID[]"  value="'+data.result_student_search_List[i]['Marks_Sum_Sectoin_ID']+'">'
                                                  +'<input type="hidden" name="Marks_Sum_Group_ID[]"  value="'+data.result_student_search_List[i]['Marks_Sum_Group_ID']+'">'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="result_sms[]" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['result_sms']+'">'+'</td>'
                                                  // +'<td>'+'<input type="text" readonly class="form-control" name="result_sms[]" style="width: 100%; text-align:center" value="'+data.result_student_search_List[i]['result_sms']+'">'+'</td>' 
                                                +'</tr>');
                                             }
                                             document.getElementById('total_items').value = data.total;
                                          });
                                       }
                                    </script>

                                    <div class="col-md-12" style="background-color: #ffffff; padding: 10px 0px 0px 0px;">
                                       <form action=""  id="formResult" role="form" name="smsResultForm" method="post" enctype="multipart/form-data">

                                          <div class="ibox-content" >
                                             <div class="col-md-12">

                                                <table  id="table_row_delete" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 0px;">
                                                   <thead class="theight">
                                              
                                                      <tr>
                                                         <th style=" text-align:center;width: 2%; padding-top:5px;">SL</th>
                                                         <th style=" text-align:center;width: 8%">Class Name</th>
                                                         <th style=" text-align:center;width: 15%">Student Name</th>
                                                         <th style=" text-align:center;width: 10%">Stu. Unique ID</th>
                                                         <th style=" text-align:center;width: 8%">Class Roll </th>
                                                         <th style=" text-align:center;width: 8%">Medium</th> 
                                                         <th style=" text-align:center;width: 8%">Shift</th>
                                                         <th style=" text-align:center;width: 6%">Section</th>
                                                         <th style=" text-align:center;width: 18%">Mobile</th>
                                                         <th style=" text-align:center;width: 17%">Send SMS </th>
                                                      </tr>  
                                                   </thead>
                                                   <tbody id="sms_stu_result_container" class="theight">
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="col-md-12" style="padding-top: 10px; border-top: 1px solid #e7eaec;">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <label class="col-md-10" style="text-align: right; padding: 0px;" for="item_name">Total Student = </label>
                                                      <div class="col-md-2" style="text-align: left; padding: 0px 0px 10px 0px;">
                                                         <input type="text" name="total_items" id="total_items" class="" style="background-color: #F6E5E5; width: 100%; text-align: left;" readonly="readonly">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                           <div class="ibox-content" style="padding-top: 2px; height: 50px; margin-bottom: 50px; margin-top: 50px;">
                                               <div class="col-md-12 col-md-offset-3">
                                                   <div class="form-horizontal" style="">
                                                       <div class="col-md-3" style="padding-bottom:0.5%;">  
                                                           <button style="width: 100%;" class="btn btn-primary" onclick="submitFormResult('<?php echo base_url();?>sms/sms/sms_send_student_result')"><i class="fa fa-floppy-o"></i> Send</button>
                                                       </div>
                                                       <div class="col-md-3" style="padding-bottom:0.5%;">
                                                           <a class="btn btn-danger" href="<?php echo base_url();?>admin_panel/welcome/dashboard" style="min-width: 100%; padding-left:0px; padding-right:0px;"><i class="fa fa-times"></i> Close</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </form>
                                    </div> 
                                     <!-- ===========///for search end============= -->
                               </div>
                     <!--   =========   tab3 end here ==========   -->



<!--  //teacher start here OK-->  

<!--   =========   tab4 start  here ==========   -->

                                   <div class="tab-pane fade in  " id="tab4default">
                                       <div class="panel-body" id="teacher_basic_info2" style="display:none;">
                                       </div>
                                     
                                          <fieldset   style="width:900px; height:px; text-align:left;margin:auto;" >
                                             <div class="panel col-md-12" style="margin-top: 5px;">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <h4 style=" text-align: center;"> SMS Information</h4>
                                                    </div>

                                                    <div class="col-md-6"> 
                                                      <h4 style=" text-align: center;"> Teacher General SMS</h4>
                                                    </div>
                                                  </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> SMS Type  </span>    <span style="margin-left: 10px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                               <select class="form-control select2" name="SMSTitle" id="SMSID" onchange="smsTitle_teacher_general(this.value)" required="required">
                                                                     
                                                                     <option value=""></option>
                                                                     <?php
                                                                         foreach($Sms_teacher_general_Data as $key=>$smsInfo) {
                                                                             ?>
                                                                              <option   value="<?php echo $smsInfo->SMSID; ?>"><?php echo $smsInfo->SMSTitle; ?></option> 
                                                                             
                                                                             <?php
                                                                         }
                                                                     ?>
                                                                 </select>
                                                               </div>
                                                           </div>
                                                           
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Massage   </span>  <span style="margin-left: 15px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <textarea rows='8' class=" form-control smsBodyTeacherGeneral"> </textarea>
                                                              </div>
                                                           </div>
                                                        </div>

                                                     <div class="col-md-6">
                                                        <!--   <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Date   </span>  <span style="margin-left: 30px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                                <div class="input-group date">
                                                                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="attendance_date"  type="text" name="attendance_date" class="start_date form-control">
                                                                 </div>
                                                              </div>
                                                           </div>  -->
                                                           <!--  <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Type   </span>   <span style="margin-left: 28px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                                <select class="form-control select2" name="teacher_status_absent" id="teacher_status_absent" >
                                                                    <option value="" selected>Select an option</option>
                                                                    <option value="2" >Absent</option>
                                                                    <option value="1">Present</option>
                                                                </select>
                                                              </div>
                                                           </div>   -->

                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Medium   </span>   <span style="margin-left: 7px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                                <select class="form-control select2" name="Teacher_MediumID" id="Teacher_MediumID" required="required" >
                                                                    <option value="">Select an option</option>
                                                                    <option value="1" selected>Bangla</option>
                                                                    <option value="2">English</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Shift  </span>   <span style="margin-left: 29px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                              <select class="form-control select2" name="Teacher_ShiftID" id="Teacher_ShiftID" required="required">
                                                                      <option value="" >Select an option</option>
                                                                      <option value="1" selected="" >Day</option>
                                                                      <option value="2">Morning</option>
                                                                </select>
                                                              </div>
                                                           </div>
                                                          
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span > Uniq. ID  </span>   <span style="margin-left: 8px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                           <select class="form-control select2" name="Teacher_UniqueID" id="Teacher_UniqueID">
                                                            <option value=""></option>
                                                              <!-- <option value="">Select an option</option> -->
                                                                  <?php
                                                                  foreach($all_teacher_unique_id as $key=>$uniqueInfo) {
                                                                      ?>
                                                                       <option value="<?php echo $uniqueInfo['Teacher_UniqueID']; ?>"><?php echo $uniqueInfo['Teacher_UniqueID'];?></option>
                                                                      <?php
                                                                  }
                                                              ?>
                                                                </select>
                                                              </div>
                                                           </div>
                                                       
                                                      </div>

                                                      <div class="col-md-12">
                                                        <div class="col-md-6">
                                                        </div>
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:10px;" class=" control-label"> <span class="required"></span>   </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:10px;">
                                                             <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="sms_search_teacher_general()"> Find</button>
                                                              </div>
                                                           </div>
                                                        </div>
                                                      </div>
                                                    </div>   <!-- col-md12 end -->
                                                </div>  <!-- row end -->
                                            </div> <!-- panal end -->
                                          </fieldset>
                                        
                         <!-- ===========///for search start============= -->

                                    <script>
                                       function sms_search_teacher_general(){
                                         
                                          var Teacher_ShiftID = $("#Teacher_ShiftID").val();
                                          var Teacher_MediumID = $("#Teacher_MediumID").val();
                                          var Teacher_UniqueID = $("#Teacher_UniqueID").val();
                                          var smsBodyTeacherfindGeneral   = $(".smsBodyTeacherGeneral").val();
                                          // alert(Teacher_UniqueID);
                                             if(smsBodyTeacherfindGeneral.trim()=='')
                                              {
                                                alert("Please Select SMS Type First !");
                                                return false;
                                              }
                                              // alert(smsBodyfindGeneral);
                                          $.getJSON("<?php echo base_url();?>sms/sms/sms_teacher_search_general?1=1&Teacher_ShiftID="+Teacher_ShiftID+"&Teacher_MediumID="+Teacher_MediumID+"&Teacher_UniqueID="+Teacher_UniqueID+"&smsBodyTeacherfindGeneral="+smsBodyTeacherfindGeneral, function(data) { 
                                             $('#teacher_general_container').empty();
                                              // alert(data.queryData);
                                              // alert(data.general_student_search_List[i]['Class_Name']);
                                              if (data.total=='0') {
                                                 alert("There is no data found !");
                                              }

                                             for (i = 1; i <= data.total; i++) {  

                                                $("#teacher_general_container").append('<tr id="trr_'+i+'" class="gradeC">'
                                                  +'<td>'+i+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Teacher_Name[]" style="width: 100%; text-align:center" value="'+data.teacher_sms_List[i]['Teacher_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Teacher_UniqueID[]" style="width: 100%; text-align:center" value="'+data.teacher_sms_List[i]['Teacher_UniqueID']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Teacher_mobile[]" style="width: 100%; text-align:center" value="'+data.teacher_sms_List[i]['Teacher_mobile']+'">'+'</td>'
                                                  +'<td>'+'<input type="text"  readonly class="form-control" style="width: 100%; text-align:center" value="'+data.teacher_sms_List[i]['teacher_mediumName']+'">'+'</td>'
                                                  +'<td>'+'<input type="text"  readonly class="form-control" style="width: 100%; text-align:center" value="'+data.teacher_sms_List[i]['teacher_shiftName']+'">'+'</td>'
                                                  +'<input type="hidden" name="Teacher_ID[]" value="'+data.teacher_sms_List[i]['Teacher_ID']+'">'+'</td>' 
                                                  +'<input type="hidden" name="Teacher_MediumID[]" value="'+data.teacher_sms_List[i]['Teacher_MediumID']+'">' 
                                                   +'<input type="hidden" name="Teacher_ShiftID[]" value="'+data.teacher_sms_List[i]['Teacher_ShiftID']+'">' 
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="smsBodyTeacherfindGeneral[]" style="width: 100%; text-align:center" value="'+data.teacher_sms_List[i]['smsBodyTeacherfindGeneral']+'">'+'</td>' 
                                                +'</tr>');
                                             }
                                             document.getElementById('total_items').value = data.total;
                                          });
                                       }
                                    </script>

                                    <div class="col-md-12" style="background-color: #ffffff; padding: 10px 0px 0px 0px;">
                                       <form action=""  id="formGeneralTeacher" role="form" name="SMS_teacher_generalEntryForm" method="post" enctype="multipart/form-data">
                                          <div class="ibox-content" >
                                             <div class="col-md-12">
                                                <table  id="table_row_delete" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 0px;">
                                                   <thead class="theight">
                                                      <tr>
                                                         <th style=" text-align:center;width: 5%; padding-top:5px;">SL</th>
                                                         <!-- <th style=" text-align:center;width: 10%">Class Name</th> -->
                                                         <th style=" text-align:center;width: 15%">Teacher Name</th>
                                                         <th style=" text-align:center;width: 8%">Teacher Unique ID</th>
                                                         <th style=" text-align:center;width: 8%">Teacher Mobile No.</th>
                                                         <!-- <th style=" text-align:center;width: 8%"> </th> -->
                                                         <th style=" text-align:center;width: 10%">Medium</th> 
                                                         <th style=" text-align:center;width: 10%">Shift</th>
                                                        <!--  <th style=" text-align:center;width: 10%">Section</th>
                                                         <th style=" text-align:center;width: 12%">Gorup</th> -->
                                                         <th style=" text-align:center;width: 22%">SMS Body </th>
                                                      </tr>  
                                                   </thead>
                                                   <tbody id="teacher_general_container" class="theight">
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="col-md-12" style="padding-top: 10px; border-top: 1px solid #e7eaec;">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <label class="col-md-10" style="text-align: right; padding: 0px;" for="item_name">Total Student = </label>
                                                      <div class="col-md-2" style="text-align: left; padding: 0px 0px 10px 0px;">
                                                         <input type="text" name="total_items" id="total_items" class="" style="background-color: #F6E5E5; width: 100%; text-align: left;" readonly="readonly">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                           <div class="ibox-content" style="padding-top: 2px; height: 50px; margin-bottom: 50px; margin-top: 50px;">
                                               <div class="col-md-12 col-md-offset-3">
                                                   <div class="form-horizontal" style="">
                                                       <div class="col-md-3" style="padding-bottom:0.5%;">  
                                                         
                                                            <button style="width: 100%;" class="btn btn-primary" onclick="submitFormGeneralTeacher('<?php echo base_url();?>sms/sms/sms_send_teacher_general')"><i class="fa fa-floppy-o"></i> Send</button>
                                                       </div>

                                                       <div class="col-md-3" style="padding-bottom:0.5%;">
                                                           <a class="btn btn-danger" href="<?php echo base_url();?>admin_panel/welcome/dashboard" style="min-width: 100%; padding-left:0px; padding-right:0px;"><i class="fa fa-times"></i> Close</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </form>
                                    </div> 
                                     <!-- ===========///for search end============= -->
                               </div>
                     <!--   =========   tab4 end here ==========   -->

<!--teacher end here OK  -->


                                <!--   =========   tab5 start here ==========   -->

                                <div class="tab-pane fade" id="tab5default">
                                     <div class="panel-body" id="student_basic_info2" style="display:none;">
                                         
                                       </div>
                                        <form class=" form-horizontal" action="<?php echo base_url();?>student/student/student_info_add" method="post" enctype="multipart/form-data">
                                          <fieldset   style="width:900px; height:px; text-align:left;margin:auto;" >
                                             <div class="panel col-md-12" style="margin-top: 5px;">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <h4 style=" text-align: center;"> SMS Information</h4>
                                                    </div>

                                                    <div class="col-md-6"> 
                                                      <h4 style=" text-align: center;"> Guardian SMS</h4>
                                                    </div>
                                                  </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> SMS Type  </span>    <span style="margin-left: 10px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                               <select class="form-control select2" name="SMSTitle" id="SMSID" onchange="smsTitle(this.value)" required="required">
                                                                     <option value=""></option>
                                                                     <option value="">Select an option</option>
                                                                     <?php
                                                                         foreach($SmsName_Data as $key=>$smsInfo) {
                                                                             ?>
                                                                                 <option value="<?php echo $smsInfo->SMSID; ?>"><?php echo $smsInfo->SMSTitle; ?></option>
                                                                             <?php
                                                                         }
                                                                     ?>
                                                                 </select>                                                           </div>
                                                           </div>
                                                           
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Massage   </span>  <span style="margin-left: 15px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                                <textarea rows='8' class=" form-control smsBody5"> </textarea>
                                                              </div>
                                                           </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Date   </span>  <span style="margin-left: 30px;" >  : </span> </label> 
                                                              </div>
                                                               <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                             <div class="input-group date">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date1"  type="text" name="Std_birthday" class="start_date form-control">
                                                             </div>
                                                          </div>
                                                           </div> 

                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Medium   </span>   <span style="margin-left: 5px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                                <select class="form-control select2" name="Std_medium_ID" id="Std_medium_ID" required="required" >
                                                                    <option value="">Select an option</option>
                                                                    <option value="1" selected>Bangla</option>
                                                                    <option value="2">English</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Shift  </span>   <span style="margin-left: 29px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                              <select class="form-control select2" name="Std_shift_ID" id="Std_shift_ID" required="required">
                                                                      <option value="">Select an option</option>
                                                                      <option value="1" selected="" >Day</option>
                                                                      <option value="2">Morning</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Class   </span>  <span style="margin-left: 25px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                          
                                                              <select class="form-control select2" name="Class_ID" id="Class_ID" required="required">
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                                  <?php
                                                                   foreach($Class_Data as $key=>$classInfo) {
                                                                       ?>
                                                                           <option value="<?php echo $classInfo->Class_ID; ?>"><?php echo $classInfo->Class_Name; ?></option>
                                                                       <?php
                                                                    }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                          
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Section  </span>   <span style="margin-left: 12px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                           <select class="form-control select2" name="Section_ID" id="Section_ID" required="required">
                                                            <option value=""></option>
                                                              <option value="">Select an option</option>
                                                                  <?php
                                                                      foreach($Section_Data as $key=>$sectionInfo) {
                                                                          ?>
                                                                              <option value="<?php echo $sectionInfo->Section_ID; ?>"><?php echo $sectionInfo->Section_Name; ?></option>
                                                                          <?php
                                                                      }
                                                                     ?>
                                                                </select>
                                                              </div>
                                                           </div>
                                                       
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Group  </span>   <span style="margin-left: 19px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                              <select class="form-control select2" name="Group_ID" id="Group_ID" required="required">
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                               <?php
                                                                   foreach($Group_Data as $key=>$groupInfo) {
                                                                       ?>
                                                                           <option value="<?php echo $groupInfo->Group_ID; ?>"><?php echo $groupInfo->Group_Name; ?></option>
                                                                       <?php
                                                                   }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                      </div>

                                                      <div class="col-md-12">
                                                       
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:5px;" class=" control-label"> <span class="required"></span>   </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                             <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="sms_search()"> Send</button>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:5px;" class=" control-label"> <span class="required"></span>   </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                             <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="sms_search()"> Find</button>
                                                              </div>
                                                           </div>
                                                        </div>
                                                      </div>
                                                    </div>   <!-- col-md12 end -->

                                                </div>  <!-- row end -->
                                            </div> <!-- panal end -->
                                               
                                          </fieldset>
                                          <!-- filedset -->
                                       </form>
                                    </div>
                                          
                             <!--   =========   tab5 end here ==========   -->


                             <!--   =========   tab6 start here ==========   -->

                            <div class="tab-pane fade" id="tab6default">
                                <div class="ibox-content col-md-12" style="padding:15px 0;">
                                    <div class="clearfix"></div>
                                    <form class="well form-horizontal" action="<?php echo base_url();?>notice/notice/notice_info_add" method="post" enctype="multipart/form-data">

                                     <fieldset   style="width:900px; height:px; text-align:left;margin:auto;" >
                                             <div class="panel col-md-12" style="margin-top: 5px;">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <h4 style=" text-align: center;"> SMS Information</h4>
                                                    </div>

                                                    <div class="col-md-6"> 
                                                      <h4 style=" text-align: center;"> General SMS</h4>
                                                    </div>
                                                  </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> SMS Type  </span>    <span style="margin-left: 10px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                               <select class="form-control select2" name="SMSTitle" id="SMSID" onchange="smsTitle(this.value)" required="required">
                                                                     <option value=""></option>
                                                                     <option value="">Select an option</option>
                                                                     <?php
                                                                         foreach($SmsName_Data as $key=>$smsInfo) {
                                                                             ?>
                                                                                 <option value="<?php echo $smsInfo->SMSID; ?>"><?php echo $smsInfo->SMSTitle; ?></option>
                                                                             <?php
                                                                         }
                                                                     ?>
                                                                 </select>                                                           </div>
                                                           </div>
                                                           
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Massage   </span>  <span style="margin-left: 15px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                                <textarea rows='8' class=" form-control smsBody6"> </textarea>
                                                              </div>
                                                           </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Date   </span>  <span style="margin-left: 30px;" >  : </span> </label> 
                                                              </div>
                                                               <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                             <div class="input-group date">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date1"  type="text" name="Std_birthday" class="start_date form-control">
                                                             </div>
                                                          </div>
                                                           </div> 

                                                           <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Medium   </span>   <span style="margin-left: 5px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                                <select class="form-control select2" name="Std_medium_ID" id="Std_medium_ID" required="required" >
                                                                    <option value="">Select an option</option>
                                                                    <option value="1" selected>Bangla</option>
                                                                    <option value="2">English</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Shift  </span>   <span style="margin-left: 29px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                              <select class="form-control select2" name="Std_shift_ID" id="Std_shift_ID" required="required">
                                                                      <option value="">Select an option</option>
                                                                      <option value="1" selected="" >Day</option>
                                                                      <option value="2">Morning</option>
                                                                </select>
                                                              </div>
                                                           </div>

                                                            <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required">Viewer  </span>  <span style="margin-left: 25px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                          
                                                              <select class="form-control select2" name="Class_ID" id="Class_ID" required="required">
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                                  <?php
                                                                   foreach($Class_Data as $key=>$classInfo) {
                                                                       ?>
                                                                           <option value="<?php echo $classInfo->Class_ID; ?>"><?php echo $classInfo->Class_Name; ?></option>
                                                                       <?php
                                                                    }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                          
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Section  </span>   <span style="margin-left: 12px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                           <select class="form-control select2" name="Section_ID" id="Section_ID" required="required">
                                                            <option value=""></option>
                                                              <option value="">Select an option</option>
                                                                  <?php
                                                                      foreach($Section_Data as $key=>$sectionInfo) {
                                                                          ?>
                                                                              <option value="<?php echo $sectionInfo->Section_ID; ?>"><?php echo $sectionInfo->Section_Name; ?></option>
                                                                          <?php
                                                                      }
                                                                     ?>
                                                                </select>
                                                              </div>
                                                           </div>
                                                       
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Group  </span>   <span style="margin-left: 19px;" >  : </span> </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                              <select class="form-control select2" name="Group_ID" id="Group_ID" required="required">
                                                               <option value=""></option>
                                                               <option value="">Select an option</option>
                                                               <?php
                                                                   foreach($Group_Data as $key=>$groupInfo) {
                                                                       ?>
                                                                           <option value="<?php echo $groupInfo->Group_ID; ?>"><?php echo $groupInfo->Group_Name; ?></option>
                                                                       <?php
                                                                   }
                                                                   ?>
                                                               </select>
                                                              </div>
                                                           </div>
                                                      </div>

                                                      <div class="col-md-12">
                                                       
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:5px;" class=" control-label"> <span class="required"></span>   </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                             <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="sms_search()"> Send</button>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                           <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                              <div class="col-md-3">
                                                                 <label style="text-align:right ; margin-top:5px;" class=" control-label"> <span class="required"></span>   </label> 
                                                              </div>
                                                              <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                             <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="sms_search()"> Find</button>
                                                              </div>
                                                           </div>
                                                        </div>
                                                      </div>
                                                    </div>   <!-- col-md12 end -->

                                                </div>  <!-- row end -->
                                            </div> <!-- panal end -->
                                               
                                          </fieldset>
                                       <!--  <fieldset>
                                            <legend>General SMS</legend>
                                             <div class="form-group data_1">
                                            
                                                <label style="text-align:left" class="col-md-2 control-label"> <span class="required">*</span>SMS Date:</label>  
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="notice_date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group data_1">
                                                <label style="text-align:left" class="col-md-2 control-label"> <span class="required">*</span>Expired Date:</label>  
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="expired_date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                          <div class="form-group">
                                              <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>SMS Viewer:</label> 
                                              <div class="col-md-6 selectContainer">
                                                  <select id="status" name="notice_view_type" class="form-control selectpicker select2">
                                                      <option class="hidee" value="1">All</option>
                                                      <option id="department" value="2">Class Wise</option>
                                                      <option id="designation" value="3">Teacher Wise</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div  style="display:none" id="department_wise" class="form-group"> 
                                            <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Class Wise View:</label>
                                              <div class="col-md-6 selectContainer">
                                                  <select name="department_list[]" multiple="multiple" class="form-control selectpicker select2">
                                                      <option value=""></option>
                                                      <?php foreach ($department_finding as $key => $value): ?>
                                                          <option value="<?php echo $value['Class_ID'] ?>"><?php echo $value['Class_Name'] ?>
                                                      <?php endforeach ?>
                                                  </select>
                                              </div>
                                          </div>
                                          <div  style="display:none" id="designation_wise" class="form-group"> 
                                            <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Teacher Wise View:</label>
                                              <div class="col-md-6 selectContainer">
                                                  <select name="designation_list[]" multiple="multiple" class="form-control selectpicker select2">
                                                      <option value=""></option>
                                                      <?php foreach ($designation_finding as $key => $value): ?>
                                                          <option value="<?php echo $value['Teacher_ID'] ?>"><?php echo $value['Teacher_Name'] ?>
                                                      <?php endforeach ?>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>SMS Title:</label> 
                                              <div class="col-md-6 selectContainer">
                                                  <select name="notice_title" class="form-control selectpicker select2" onchange="noticeTitle(this.value)">
                                                      <option></option>
                                                        <?php foreach ($notice_title as $key => $value): ?>
                                                         <option value="<?php echo $value['note_id']; ?>"><?php echo $value['note_title']; ?></option>
                                                        <?php endforeach ?>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label style="text-align:left" class="col-md-2 control-label"></span>SMS Entry:</label>
                                              <div class="col-md-6 inputGroupContainer">
                                                  <textarea rows='8' name="notice_body_details" placeholder="Enter your notice" class="form-control notice_details"></textarea>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Status:</label> 
                                              <div class="col-md-6 selectContainer">
                                                <select name="status" class="form-control" required="required">
                                                    <option value="">Select status</option>
                                                    <option value="1" selected="selected">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label style="text-align:left" class="col-md-2 control-label"></label>
                                              <div class="col-md-6"><br>
                                                  <input type="reset" name="reset" class="btn btn-info" value="Reset">
                                                  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                              </div>
                                          </div>

                                        </fieldset> -->
                                    </form>   
                                </div>
                            </div>


                      <!--   =========   tab4 end here ==========   -->

                                </div>
                                          </fieldset>
                                       </div>
                                       
                                    </div>
                                   
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
   <?php $this->load->view('dashboard/common/footer_js');?>
</body>
</html>
<script type="text/javascript">
   function validateForm() {
       var x = document.forms["myForm"]["email"].value;
       var atpos = x.indexOf("@");
       var dotpos = x.lastIndexOf(".");
       if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
           alert("Not a valid e-mail address");
           return false;
       }
   }
   
   $(document).ready(function(){
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
   
   $("#date2").on('change keydown paste input', function(){
       var ONE_DAY = 1000 * 60 * 60 * 24;
       $('#date1').datepicker();
       $('#date2').datepicker();
   
       var diff = $('#date2').datepicker("getDate") - $('#date1').datepicker("getDate");
       var leave_duration = diff / ONE_DAY + 1 ;
       $('#leave_duration').val(leave_duration);
   });
   
   
   function userid_keyup(){
       var employee_id = $("#employee_id").val();
   // alert(employee_id);
   $.getJSON("<?php echo base_url();?>employee/employee/json_unique_employeeid_check?1=1&employee_id="+employee_id, function(data) {
   if(data.exist==1){
       document.getElementById('unique_employeeid_msg').innerHTML = "This ID Card Number is already existed!";
       document.getElementById('employee_id').value = "";
   }else{
       document.getElementById('unique_employeeid_msg').innerHTML = "<span style='color:green;'>Available</span>";
   }
   });
   
   }
   
   function userid_keyupp(){
   var username = $("#username").val();
   // alert(username);
   $.getJSON("<?php echo base_url();?>employee/employee/json_unique_username_check?1=1&username="+username, function(dataa) {
   if(dataa.existt==1){
       document.getElementById('unique_username_msg').innerHTML = "This Username is already existed!";
       document.getElementById('username').value = "";
   }else{
       document.getElementById('unique_username_msg').innerHTML = "<span style='color:green;'>Available</span>";
   }
   });
   
   }
   
   
   
   
   jQuery().ready(function() {
   
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
   
   
   $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );
   
   
   function addRow(tableID) {
   
   var table = document.getElementById(tableID);
   
   var rowCount = table.rows.length;
   var row = table.insertRow(rowCount);
   
   var colCount = table.rows[0].cells.length;
   
   for(var i=0; i<colCount; i++) {
   
       var newcell = row.insertCell(i);
   
       newcell.innerHTML = table.rows[0].cells[i].innerHTML;
   //alert(newcell.childNodes);
   switch(newcell.childNodes[0].type) {
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
   
       for(var i=0; i<rowCount; i++) {
           var row = table.rows[i];
           var chkbox = row.cells[0].childNodes[0];
           if(null != chkbox && true == chkbox.checked) {
               if(rowCount <= 1) {
                   alert("Cannot delete all the rows.");
                   break;
               }
               table.deleteRow(i);
               rowCount--;
               i--;
           }
   
   
       }
   }catch(e) {
       alert(e);
   }
   }
   
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
   
   var count = 2;  
   $('table').on('click', '.btnAdd', function(){  
   // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd></input></td></tr>";
   var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=exam_name[] style='width:100%' id=exam_name></input></td><td><input type=text name=institute_name[] style='width:100%' id=institute_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=board[] style='width:100%' id=board></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd style='width:100%'></input></td></tr>";
   $(this).closest('table').append(tr);
   $(this).attr('value', '-');
   $(this).toggleClass('btnDelete').toggleClass('btnAdd');
   }).on('click', '.btnDelete', function(){
   // alert($(this).closest('tr').index());
   // alert($(this).closest('tr'));
   // alert('Are you sure want to delete?');
   confirm('Are you sure want to delete?');
   $(this).closest('tr').remove();
   
   });
   
   });
   
   
   $(document).ready(function(){
   
   var count = 2;  
   $('table').on('click', '.btnAdd2', function(){  
   // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd2></input></td></tr>";
   var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=company_name[] style='width:100%' id=company_name></input></td><td><input type=text name=designation[] style='width:100%' id=designation></input></td><td><input type=text name=from[] style='width:100%' id=from></input></td><td><input type=text name=to[] style='width:100%' id=to></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd2 style='width:100%'></input></td></tr>";
   $(this).closest('table').append(tr);
   $(this).attr('value', '-');
   $(this).toggleClass('btnDelete').toggleClass('btnAdd2');
   }).on('click', '.btnDelete', function(){
   // alert($(this).closest('tr').index());
   // alert($(this).closest('tr'));
   // alert('Are you sure want to delete?');
   confirm('Are you sure want to delete?');
   $(this).closest('tr').remove();
   
   });
   
   });
   
   $(document).ready(function(){
   
   var count = 2;  
   $('table').on('click', '.btnAdd3', function(){  
   // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd3></input></td></tr>";
   var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=title_qualification[] style='width:100%' id=title_qualification></input></td><td><input type=text name=institute_name[] style='width:100%' id=institute_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd3 style='width:100%'></input></td></tr>";
   $(this).closest('table').append(tr);
   $(this).attr('value', '-');
   $(this).toggleClass('btnDelete').toggleClass('btnAdd3');
   }).on('click', '.btnDelete', function(){
   // alert($(this).closest('tr').index());
   // alert($(this).closest('tr'));
   // alert('Are you sure want to delete?');
   confirm('Are you sure want to delete?');
   $(this).closest('tr').remove();
   
   });
   
   });
   
   $(document).ready(function(){
   
   var count = 2;  
   $('table').on('click', '.btnAdd6', function(){  
   // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd3></input></td></tr>";
   var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><select name='attachment_name[]' class='form-control selectpicker'><option value='1' selected='selected'>SSC</option><option value='2'>HSC</option><option value='3'>Honrs</option><option value='4'>Masters</option></select></td><td><div class='col-md-6 inputGroupContainer'><input  name='attachment_file[]' class='form-control'  type='file' required></div></td><td><input type=button value=+ class=btnAdd6 style='width:100%'></input></td></tr>";
   $(this).closest('table').append(tr);
   $(this).attr('value', '-');
   $(this).toggleClass('btnDelete').toggleClass('btnAdd6');
   }).on('click', '.btnDelete', function(){
   // alert($(this).closest('tr').index());
   // alert($(this).closest('tr'));
   // alert('Are you sure want to delete?');
   confirm('Are you sure want to delete?');
   $(this).closest('tr').remove();
   
   });
   
   });
   
   
   
</script>

<script>
    function ClassTitle(classId){
    var id = classId;
     // alert(id);
    var data = 'one=' + id;
    $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>student/get_section_data",
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
   function studentInfo(studentid, tabid){
       for (var i = 0; i <= 11; i++) {
           if(i == tabid) {
               $("#student_basic_info"+tabid).show(500);
           } else {
               $("#student_basic_info"+i).hide();
           }
       };
   
       var id = studentid;
    // alert(id);
   var data = 'one=' + id;
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>student/get_student_data",
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


   function userid_keyup(){
        var username = $("#new_username").val();
    // alert(username);
        $.getJSON("<?php echo base_url();?>student/student/json_unique_username_check?1=1&username="+username, function(data) {
            // alert(data.exist);
            if(data.exist==1){
                document.getElementById('unique_username_msg').innerHTML = "This Username is already existed!";
                document.getElementById('new_username').value = "";
            }else{
                document.getElementById('unique_username_msg').innerHTML = "<span style='color:green;'>Available</span>";
            }
        });
    }

   function email_keyup(){
       var email = $("#email").val();
   // alert(email);
   $.getJSON("<?php echo base_url();?>student/student/json_unique_email_check?1=1&email="+email, function(data) {
   if(data.exist==1){
       document.getElementById('unique_email_msg').innerHTML = "This Email ID is already existed!";
       document.getElementById('email').value = "";
   }else{
       document.getElementById('unique_email_msg').innerHTML = "<span style='color:green;'>Available</span>";
   }
   });
   
   }


//=== for sms tast strat here===///


    $("#SMSID").change(function() {
       var selectedValue = $("#SMSID option:selected").text();
       optionText = selectedValue.toLowerCase();
       optionText = $.trim(optionText);
       if(optionText=='present'){
          $(".PresentText").text('Present');
          $("#PresentID").val('1');
       }else{
          $(".PresentText").text('Absent');
          $("#PresentID").val('2');
       }
    });

    function smsTitle(SMSID){

        var SMSID = SMSID;
        // optionText = $(this).find("option:selected").text();
        // alert(optionText);

       


        var data = 'one=' + SMSID;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>sms/get_sms_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                // alert((data[0].SMSID));
                // alert((data[0].SMSBody));

                if (data) {


                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        $(".SMSID").text(data[i].SMSID);
                        $(".smsBody").text(data[i].SMSBody);
                        $(".smsBodyfind").val(data[i].SMSBody);
                         // alert((data[0].SMSBody));

                        // $(".name").text(data[i].full_name);
                    } // for
                    
                } // if
            } // success
        }); // ajax 
    }

    function student_status_attendance(student_status_attendance){


        var student_status_attendance = student_status_attendance;
       
        // alert(id);
        var data = 'one=' + SMSID;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>sms/get_sms_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                alert((data[0].SMSID));
                // alert((data[0].SMSBody));

                if (data) {


                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        $(".SMSID").text(data[i].SMSID);
                        $(".smsBody").text(data[i].SMSBody);
                        $(".smsBodyfind").val(data[i].SMSBody);
                         // alert((data[0].SMSBody));

                        // $(".name").text(data[i].full_name);
                    } // for
                    
                } // if
            } // success
        }); // ajax 
    }


     function smsTitle_Student_general(SMSID){

        var SMSID = SMSID;
        // alert(id);
        var data = 'one=' + SMSID;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>sms/get_sms_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                // alert((data[0].SMSID));
                // alert((data[0].SMSBody));

                if (data) {


                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        $(".SMSID").text(data[i].SMSID);
                        $(".smsBodyGeneral").text(data[i].SMSBody);
                        $(".smsBodyfindGeneral").val(data[i].SMSBody);
                         // alert((data[0].smsBodyGeneral));

                        // $(".name").text(data[i].full_name);
                    } // for
                    
                } // if
            } // success
        }); // ajax 
    }
    function smsTitle_Student_result(SMSID){

        var SMSID = SMSID;
        // alert(id);
        var data = 'one=' + SMSID;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>sms/get_sms_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                // alert((data[0].SMSID));
                // alert((data[0].SMSBody));

                if (data) {


                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        $(".SMSID").text(data[i].SMSID);
                        $(".smsBodyResult").text(data[i].SMSBody);
                        $(".smsBodyfindResult").val(data[i].SMSBody);
                         // alert((data[0].smsBodyGeneral));

                        // $(".name").text(data[i].full_name);
                    } // for
                    
                } // if
            } // success
        }); // ajax 
    }



    function smsTitle_teacher_general(SMSID){

        var SMSID = SMSID;
        // alert(SMSID);
        var data = 'one=' + SMSID;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>sms/get_sms_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                // alert((data[0].SMSID));
                // alert((data[0].SMSBody));

                if (data) {


                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        $(".SMSID").text(data[i].SMSID);
                        $(".smsBodyTeacherGeneral").text(data[i].SMSBody);
                        $(".smsBodyTeacherfindGeneral").val(data[i].SMSBody);
                         // alert((data[0].smsBody_Gen));

                        // $(".name").text(data[i].full_name);
                    } // for
                    
                } // if
            } // success
        }); // ajax 
    }


//=== for sms tast ends here===///

function submitForm(action) {
    // confirm('Are you sure!');
    if (confirm('Are you sure you want to send * SMS *?')) {
        // Save it!
      var form = document.getElementById('form1');
      form.action = action;
      form.submit();
    } else {
        // Do nothing!
        alert('Please try again!');
    }
   
}

function submitFormGeneral(action) {
    // confirm('Are you sure!');
    if (confirm('Are you sure you want to send * SMS *?')) {
        // Save it!
      var form = document.getElementById('formGeneral');
      form.action = action;
      form.submit();
    } else {
        // Do nothing!
        alert('Please try again!');
    }
   
}

function submitFormResult(action) {
    // confirm('Are you sure!');
    if (confirm('Are you sure you want to send * SMS *?')) {
        // Save it!
      var form = document.getElementById('formResult');
      form.action = action;
      form.submit();
    } else {
        // Do nothing!
        alert('Please try again!');
    }
   
}
function submitFormGeneralTeacher(action) {
    // confirm('Are you sure!');
    if (confirm('Are you sure you want to send * SMS *?')) {
        // Save it!
      var form = document.getElementById('formGeneralTeacher');
      form.action = action;
      form.submit();
    } else {
        // Do nothing!
        alert('Please try again!');
    }
   
}

</script>