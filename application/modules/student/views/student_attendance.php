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
                        <div class="ibox-title" style="background:#243948">
                           <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i>Student Info</h5>
                           <div class="ibox-tools">
                              <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>student/student/student_list"><i class='fa fa-user'></i> Student List</a>
                              <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                              </a>
                           </div>
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
                                       <a  href="#tab1default" data-toggle="tab">Student Attendance Info Add</a>
                                    </li>
                                   
                                 </ul>
                              </div>
                              <div class="panel-body">
                                 <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                       <div class="panel-body  well" id="emp_basic_info1" style="display:none;">
                                       </div>              
                                      <fieldset   style="width:1000px; height:150px; text-align:center;margin:auto;" >
                                         <div class="">
                                             <div class="col-md-12">
                                                <div class="col-md-4">
                                                   <div class="form-group  col-md-12 data_1" style="margin-top:5px;padding: 0px">
                                                      <div class="col-md-3">
                                                         <label style="text-align:left ; margin-top:10px;" class=" control-label"> Class<span class="required" style="color: red;">*</span> :</label> 
                                                      </div>
                                                      <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                <select class="form-control select2" name="Class_ID" id="Class_ID" required="required">
                                                     <option value=""></option>
                                                     <option value="">Select an option</option>
                                                     <?php
                                                         foreach($Class_select as $key=>$classInfo) {
                                                             ?>
                                                                 <option value="<?php echo $classInfo->Class_ID; ?>"><?php echo $classInfo->Class_Name; ?></option>
                                                             <?php
                                                         }
                                                     ?>
                                                 </select>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="col-md-4">
                                                   <div class="form-group col-md-12" style="margin-top:5px;padding: 0px">
                                                      <div class="col-md-3">
                                                        <label style="text-align:left ; margin-top:10px;" class=" control-label"> <span class=""></span>Section :</label> 
                                                      </div>
                                                      <div class="col-md-9 selectContainer"  style="margin-top:5px;">
                                             <select class="form-control select2" name="Section_ID" id="Section_ID" required="required">
                                                     <option value=""></option>
                                                     <option value="">Select an option</option>
                                                     <?php
                                                         foreach($Section_select as $key=>$sectionInfo) {
                                                             ?>
                                                                 <option value="<?php echo $sectionInfo->Section_ID; ?>"><?php echo $sectionInfo->Section_Name; ?></option>
                                                             <?php
                                                         }
                                                     ?>
                                                 </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                 <div class="col-md-4">
                                                   <div class="form-group col-md-12" style="margin-top:5px;padding: 0px">
                                                      <div class="col-md-3">
                                                        <label style="text-align:left ; margin-top:10px;" class=" control-label"> <span class=""></span>Group :</label> 
                                                      </div>
                                                      <div class="col-md-9 selectContainer"  style="margin-top:5px;">
                                             <select class="form-control select2" name="Group_ID" id="Group_ID" required="required">
                                                     <option value=""></option>
                                                     <option value="">Select an option</option>
                                                     <?php
                                                         foreach($Group_select as $key=>$groupInfo) {
                                                             ?>
                                                                 <option value="<?php echo $groupInfo->Group_ID; ?>"><?php echo $groupInfo->Group_Name; ?></option>
                                                             <?php
                                                         }
                                                     ?>
                                                 </select>
                                                      </div>
                                                   </div>
                                                </div>
                                              </div>
                                          </div>


                                            <div class="">
                                              <div class="col-md-12">
                                                <div class="col-md-4">
                                                   <div class="form-group  col-md-12 data_1" style="margin-top:5px;padding: 0px">
                                                      <div class="col-md-3">
                                                         <label style="text-align:left ; margin-top:10px;" class=" control-label">Shift <span class="required" style="color: red;">*</span> :</label> 
                                                      </div>
                                                      <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                      <select name="Std_shift_ID" id="Std_shift_ID" style="text-align:left "  class="form-control selectpicker">
                                                            <option value="1"  selected="selected">Day</option>
                                                            <option value="2">Morning</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="col-md-4">
                                                   <div class="form-group col-md-12" style="margin-top:5px;padding: 0px">
                                                      <div class="col-md-3">
                                                        <label style="text-align:left ; margin-top:10px;" class=" control-label"> <span class=""></span>Mediun :</label> 
                                                      </div>
                                                      <div class="col-md-9 selectContainer"  style="margin-top:5px;">
                                                    <select name="Std_medium_ID" id="Std_medium_ID" style="text-align:left "  class="form-control selectpicker">
                                                            <option value="1" selected="selected">Bangla</option>
                                                            <option value="2">English</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div> 
                                                  <div class="col-md-4">
                                                  </div> 
                                              </div> 
                                              <div class="col-md-12">
                                                  <div class="col-md-4">
                                                     <div class="form-group  col-md-12 data_1" style="margin-top:5px;padding: 0px">
                                                        <div class="col-md-3">
                                                           <label style="text-align:left ; margin-top:10px;" class=" control-label">Date  <span class="required" style="color: red;">*</span> :</label> 
                                                        </div>
                                                        <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                        <div class="input-group date">
                                                                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="attendance_ID"  type="text" name="attendance_date" class="attendance_date form-control">
                                                              </div>
                                                        </div>
                                                     </div>
                                                  </div>

                                                  <div class="col-md-4">
                                                    <div class="form-group col-md-12">
                                                      <div class="col-md-3">
                                                      </div>
                                                      <div class="col-md-9">
                                                         <button style=" text-align:center;width: 185px; height: 34px; margin-top: 11px; padding-left: 0px; margin-left: -5px;" class="btn btn-primary" onclick="student_attendance_search()"> Find</button>
                                                      </div>
                                                   </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                  </div>
                                              </div>
                                            </div>
                                          </fields>
                                    </div>
                                   
                                    <script>
                                       function student_attendance_search(){
                                         
                                          var Class_ID = $("#Class_ID").val();
                                          var Std_shift_ID = $("#Std_shift_ID").val();
                                          var Std_medium_ID = $("#Std_medium_ID").val();
                                          var Section_ID = $('#Section_ID').val();
                                          var Group_ID = $('#Group_ID').val();
                                          var attendance_date = $('#attendance_ID').val();
                                             // alert(attendance_date);
                                          $.getJSON("<?php echo base_url();?>student/student/student_attendance_search?1=1&Class_ID="+Class_ID+"&Section_ID="+Section_ID+"&Group_ID="+Group_ID+"&Std_shift_ID="+Std_shift_ID+"&attendance_date="+attendance_date+"&Std_medium_ID="+Std_medium_ID, function(data) { 
                                             $('#voucher_container').empty();
                                              // alert(data.total);
                                               if(Class_ID==''){
                                                alert("Please select a  Class!");
                                                exit();
                                              }
                                              if (data.total=='0') {
                                                 alert("There is no data found !");
                                              }

                                              //   if(data.data_exit==1){
                                              //   alert('Data already exists of this Class or Date! Please select another Class or date.');
                                              //   // return true;
                                              // }
                                              if(data.data_exit==1){
                                                var r=confirm("Data already exists of this Class on Today Date!Do You Want to Update, Click OK or Cancel .");
                                                if (r==true)
                                                  {
                                                    // return true;
                                                  }
                                                else
                                                  {
                                                    return false;
                                                  }
                                              }

                                             for (i = 1; i <= data.total; i++) {  

                                                $("#voucher_container").append('<tr id="trr_'+i+'" class="gradeC">'
                                                  +'<td>'+i+'</td>'
                                                  +'<input type="hidden" name="update_status" value="'+data.data_exit+'">'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="STD_UNQ_ID[]" style="width: 100%; text-align:center" value="'+data.student_attendance_List[i]['STD_UNQ_ID']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Student_Name[]" style="width: 100%; text-align:center" value="'+data.student_attendance_List[i]['Student_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.student_attendance_List[i]['Class_Name']+'">'+'</td>'
                                                  +'<input type="hidden" name="Std_class_ID[]" value="'+data.student_attendance_List[i]['Std_class_ID']+'">'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.student_attendance_List[i]['Section_Name']+'">'+'</td>'
                                                  +'<input type="hidden" name="Std_section_ID[]" value="'+data.student_attendance_List[i]['Std_section_ID']+'">'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.student_attendance_List[i]['Group_Name']+'">'+'</td>'
                                                  +'<input type="hidden" name="Std_group_ID[]" value="'+data.student_attendance_List[i]['Std_group_ID']+'">'
                                                  +'<input type="hidden" name="Std_shift_ID[]" value="'+data.student_attendance_List[i]['Std_shift_ID']+'">'
                                                  +'<input type="hidden" name="Std_medium_ID[]" value="'+data.student_attendance_List[i]['Std_medium_ID']+'">'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Std_roll[]" style="width: 100%; text-align:center" value="'+data.student_attendance_List[i]['Std_roll']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Std_attendance_date[]" style="width: 100%; text-align:center" value="'+data.student_attendance_List[i]['Std_attendance_date']+'">'+'</td>'
                                                  +'<td>'
                                                    +'<select name="present_status[]" style="width: 100% text-align:center;  id="present_status" >'
                                                      +'<option value="'+data.student_attendance_List[i]['Std_Attendance_Status']+'">'+data.student_attendance_List[i]['Std_atten_Status']+'</option>'
                                                      +'<option value="1">Present</option>'
                                                      +'<option value="2">Absent</option>'
                                                    +'</select>'
                                                  +'</td>'
                                                +'</tr>');
                                             }
                                             document.getElementById('total_items').value = data.total;
                                          });
                                       }
                                    </script>

                                    <div class="col-md-12" style="background-color: #ffffff; padding: 10px 0px 0px 0px;">
                                      <form onsubmit="return confirmdelete()" action="<?php echo base_url();?>student/student/student_attendance_submit"  id="form1" role="form" name="allVoucherEntryForm" method="post" enctype="multipart/form-data">
                                      <!--  <form action=""  id="form1" role="form" name="allVoucherEntryForm" method="post" enctype="multipart/form-data"> -->
                                          <div class="ibox-content" >
                                             <div class="col-md-12">
                                                <table class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 0px;">
                                                   <thead class="theight">
                                                      <tr>
                                                         <th style=" text-align:center;width: 5%; padding-top:5px;">SL</th>
                                                         <th style=" text-align:center;width: 10%">Student ID</th>
                                                         <th style=" text-align:center;width: 15%">Student Name</th>
                                                         <th style=" text-align:center;width: 10%">Class Name</th>
                                                         <th style=" text-align:center;width: 10%">Section Name</th>
                                                         <th style=" text-align:center;width: 10%">Group Name</th>
                                                         <th style=" text-align:center;width: 10%">Roll No.</th>
                                                         <th style=" text-align:center;width: 15%"> Attend. Date</th>
                                                         <th style=" text-align:center;width: 25%">Status</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody id="voucher_container" class="theight">
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="col-md-12" style="padding-top: 10px; border-top: 1px solid #e7eaec;">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <label class="col-md-10" style="text-align: right; padding: 0px;" for="item_name">Total Student = </label>
                                                      <div class="col-md-2" style="text-align: left; padding: 0px 0px 10px 0px;">
                                                         <input type="text" name="total_items" id="total_items" class="" style="background-color: #F6E5E5;  width: 100%; text-align: center;" readonly="readonly">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                           <div class="ibox-content" style="padding-top: 2px; height: 50px; margin-bottom: 50px;">
                                               <div class="col-md-12 col-md-offset-3">
                                                   <div class="form-horizontal" style="">
                                                       <div class="col-md-3" style="padding-bottom:0.5%;"> 
                                                            <input style="width: 100%;" class="btn btn-primary" type="submit" value="Save">
                                                       </div>
                                                       <div class="col-md-3" style="padding-bottom:0.5%;">
                                                           <a class="btn btn-danger" href="<?php echo base_url();?>admin_panel/welcome/dashboard" style="min-width: 100%; padding-left:0px; padding-right:0px;"><i class="fa fa-times"></i> Close</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </form>
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

      function submitForm(action) {
          var form = document.getElementById('form1');
          form.action = action;
          form.submit();
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
   
   
   
   $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );
   
   
</script>
<script type="text/javascript">


function confirmdelete() {
    var r=confirm("Are you sure! want to Save * All Attendance*?'");
    if (r==true)
      {
        return true;
      }
    else
      {
        return false;
      }
}


</script>