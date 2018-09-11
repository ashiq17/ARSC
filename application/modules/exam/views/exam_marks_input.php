<?php $this->load->view('dashboard/common/header');?>
<?php 
error_reporting(0);
 ?>
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

   .alert{

    color: red;
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
   .c_red{
    color:red;
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
                        <div class="ibox-title" style="background:#1979ca">
                           <h5 style="color:#ffffff;"><i class="fa fa-plus"></i>Exam Marks Input</h5>
                           <div class="ibox-tools">
                             <!--  <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="#"><i class='fa fa-eye'></i> Exam Marks Input List</a> -->
                              <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                              </a>
                           </div>
                        </div>
                        <?php
                           if($this->session->has_userdata('message')){
                               ?>          
                        <div class=" alert-success text-center successMessage">
                           <strong><?php echo $this->session->message;?></strong>
                        </div>
                        <?php          
                           $this->session->unset_userdata('message');
                           
                           }
                           elseif($this->session->has_userdata('error_msg')){
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
          
                              <div class="panel-body">
                                 <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                       <div class="panel-body" id="emp_basic_info1" style="display:none;">
                                       </div>
                                         <!-- <h6 align="center" style="margin-top: 15px!important;">Exam Marks Input</h6> -->
                                       <!-- <form class="well form-horizontal" action="" method="post" enctype="multipart/form-data"> -->
                                          <fieldset   style="width:1000px; padding-bottom: 250px; height:60px; text-align:left;margin:auto;" >
                                             <!--  <div   style="width:900px;border:1px solid red; height:400px; text-align:center;margin:auto;" > -->
                                             <div class="panel col-md-12" style="margin-top: 5px;">


                                                <!-- <div class="row">
                                                   <div class="form-group  col-md-9 col-md-offset-2 data_1" style="margin-top:0px;padding: 0px">
                                                      <div class="col-md-2">
                                                         <label style="text-align:right ; margin-top:5px;" class=" control-label"> <span class="required"></span>Stusent ID :</label> 
                                                      </div>
                                                      <div class="col-md-7" style="margin-top:5px;">
                                                      <input type="text" name="student_id" id="student_id" class="form-control">
                                                      </div>
                                                   </div>
                                                </div> -->


                                                <div class="row">
                                                	<div class="col-md-12">
	                                                	<div class="col-md-6">
		                                                   <div class="form-group  col-md-12  data_1" style="margin-top:0px;padding: 0px">
		                                                      <div class="col-md-3">
		                                                         <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Class  </span>  <span style="color: red;"> *</span>  <span style="margin-left: 15px;" >  : </span> </label> 
		                                                      </div>
		                                                      <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
			                                                <select class="form-control select2" name="Class_ID" id="Class_ID" required="required">
			                                                   
			                                                     <option value=""></option>
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
	                                                	</div>
	                                                	<div class="col-md-6">
		                                                   <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
		                                                      <div class="col-md-3">
		                                                         <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Medium  </span>  <span style="margin-left: 35px;" >  : </span> </label> 
		                                                      </div>
		                                                      <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
			                                                
			                                                   <select class="form-control select2" name="Std_medium_ID" id="Std_medium_ID" required="required" >
	                                                              <option value="">Select an option</option>
	                                                              <option value="1" selected>Bangla</option>
	                                                              <option value="2">English</option>
                                                         		</select>
		                                                      </div>
		                                                   </div>
	                                                	</div>
                                                	</div>


                                                	<div class="col-md-12">
                                                    <div class="col-md-6">
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
                                                    </div>
                                                    <div class="col-md-6">
                                                       <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                          <div class="col-md-3">
                                                             <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Section   </span>  <span style="margin-left: 41px;" >  : </span> </label> 
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
                                                    </div>
                                                  </div>


                                                  <div class="col-md-12">
	                                                	<div class="col-md-6">
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
                                                    <div class="col-md-6">
                                                       <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                          <div class="col-md-3">
                                                             <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Exam Name  </span>  <span style="color: red;"> *</span>  <span style="margin-left: 1px;" >  : </span> </label> 
                                                          </div>
                                                          <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                        <select class="form-control select2" name="Exam_term_ID" id="Exam_term_ID"  required="required">
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
                                                    </div>  
	                                                	
                                                	</div>


                                                	<div class="col-md-12">
	                                                	
	                                                	<div class="col-md-6">
                                                       <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
                                                          <div class="col-md-3">
                                                             <label style="text-align:right ; margin-top:8px;" class=" control-label"> <span class="required"> Subject  </span>  <span style="color: red;"> *</span>  <span style="margin-left: 2px;" >  : </span> </label> 
                                                          </div>
                                                          <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
                                                         <select class="form-control select2" name="Subject_ID" id="subjectList" required="required">
                                                           <option value=""></option>
                                                         </select>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="col-md-6">
		                                                   <div class="form-group  col-md-12 data_1" style="margin-top:0px;padding: 0px">
		                                                      <div class="col-md-3">
		                                                         <label style="text-align:right ; margin-top:5px;" class=" control-label"> <span class="required"></span>   </label> 
		                                                      </div>
		                                                      <div class="col-md-9 inputGroupContainer" style="margin-top:5px;">
			                                                   <button style=" text-align:center;width: 180px; margin-top: 15px;" class="btn btn-sm btn-primary" onclick="exam_marks_input_search()"> Find</button>
		                                                      </div>
		                                                   </div>
	                                                	</div>
                                                	</div>


                                                  
                                                </div>
                                               </div>
                                               
                                                </div>
                                              <!--   <div class=""> <input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.exam_marks_input_List[i]['Class_Name']+'"></div> -->
                                          </fields>
                                       <!-- </form> -->
                                    </div>

                                    <script>
                                       function exam_marks_input_search(){
                                         
                                          var Class_ID     = $("#Class_ID").val();
                                          var Section_ID   = $('#Section_ID').val();
                                          var Group_ID     = $('#Group_ID').val();
                                          var Std_shift_ID = $("#Std_shift_ID").val();
                                          var Std_medium_ID= $("#Std_medium_ID").val();
                                          var Exam_term_ID = $('#Exam_term_ID').val();
                                          var Subject_ID   = $('#subjectList').val();
                                          var Subject_Name = $('#subjectList').find(":selected").text();
                                          // var Subject_Name   = $('#subjectList').text();
                                        
                                              // alert(Subject_Name);
                                              // alert(Subject_ID);
                                          $.getJSON("<?php echo base_url();?>exam/exam/exam_marks_input_search?1=1&Class_ID="+Class_ID+"&Section_ID="+Section_ID+"&Group_ID="+Group_ID+"&Std_shift_ID="+Std_shift_ID+"&Std_medium_ID="+Std_medium_ID+"&Exam_term_ID="+Exam_term_ID+"&Subject_ID="+Subject_ID, function(data) { 
                                             $('#voucher_container').empty();
                                              // alert(data.total);
                                              // alert(data.Subject_ID);
                                              if (data.total=='0') {
                                                 alert("There is no data found !");
                                              }

                                              if(Class_ID==''){
                                                alert("Please select a Class!");
                                                exit();
                                              }else if(Subject_ID == ''){
                                                alert("Please select a Subject Name!");
                                                exit();
                                              }else if(Exam_term_ID == ''){
                                                alert("Please select a Exam Name!");
                                                exit();
                                              }

                                              if(data.data_exit==1){
                                                alert('Data already exists of this subject! Please select other subject.');
                                                return false;
                                              }
                                              
                                              // alert(data.data_exit);
                                             for (i = 1; i <= data.total; i++) {  

                                                $("#voucher_container").append('<tr id="trr_'+i+'" class="gradeC">'
                                                  +'<td>'+i+'</td>'
                                                  +'<input type="hidden" name="Subject_ID" value="'+Subject_ID+'">'
                                                  +'<input type="hidden" name="Subject_Name" value="'+Subject_Name+'">'
                                                  +'<input type="hidden" name="Exam_term_ID" value="'+Exam_term_ID+'">'
                                                  +'<td>'+'<input type="text" readonly class="form-control" style="width: 100%; text-align:center" value="'+data.exam_marks_input_List[i]['Class_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Student_Name[]" style="width: 100%; text-align:left" value="'+data.exam_marks_input_List[i]['Student_Name']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="STD_UNQ_ID[]" style="width: 100%; text-align:center" value="'+data.exam_marks_input_List[i]['STD_UNQ_ID']+'">'+'</td>'
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="Std_roll[]" style="width: 100%; text-align:center" value="'+data.exam_marks_input_List[i]['Std_roll']+'">'+'</td>' 
                                                  +'<td>'+'<input type="text" readonly class="form-control" name="full_marks[]" style="width: 100%; text-align:center" value="'+data.queryData_subject[0]['Subject_Full_Marks']+'">'+'</td>'
                                                  +'<td>'+'<input oninput="current_tr('+i+')" type="text" class="form-control" id="ct_marks'+i+'"  name="ct_marks[]">'+'</td>' 
                                                  +'<input type="hidden" id="Subject_CT_Marks'+i+'" oninput="current_tr('+i+')" value="'+data.queryData_subject[0]['Subject_CT_Marks']+'">'
                                                  +'<td>'+'<input oninput="current_tr('+i+')" type="text" class="form-control" id="mt_marks'+i+'"  name="mt_marks[]">'+'</td>'
                                                  +'<input type="hidden" id="Subject_MT_Marks'+i+'" oninput="current_tr('+i+')" value="'+data.queryData_subject[0]['Subject_MT_Marks']+'">'
                                                  +'<td>'+'<input oninput="current_tr('+i+')" type="text" class="form-control" id="cq_marks'+i+'" name="cq_marks[]">'+'</td>'
                                                  +'<input type="hidden" id="Subject_CQ_Marks'+i+'" oninput="current_tr('+i+')" value="'+data.queryData_subject[0]['Subject_CQ_Marks']+'">'
                                                  +'<td>'+'<input oninput="current_tr('+i+')" type="text" class="form-control" id="mcq_marks'+i+'"  name="mcq_marks[]">'+'</td>'
                                                  +'<input type="hidden" id="Subject_MCQ_Marks'+i+'" oninput="current_tr('+i+')" value="'+data.queryData_subject[0]['Subject_MCQ_Marks']+'">'
                                                  +'<td>'+'<input type="text" readonly class="form-control" id="total_marks'+i+'" name="total_marks[]">'+'</td>'
                                                  +'<input type="hidden" name="Std_class_ID[]" value="'+data.exam_marks_input_List[i]['Std_class_ID']+'">'
                                                  +'<input type="hidden" name="Std_section_ID[]" value="'+data.exam_marks_input_List[i]['Std_section_ID']+'">'
                                                  +'<input type="hidden" name="Std_group_ID[]" value="'+data.exam_marks_input_List[i]['Std_group_ID']+'">'
                                                  +'<input type="hidden" name="Std_shift_ID[]" value="'+data.exam_marks_input_List[i]['Std_shift_ID']+'">'
                                                  +'<input type="hidden" name="Std_medium_ID[]" value="'+data.exam_marks_input_List[i]['Std_medium_ID']+'">'
                                                +'</tr>');
                                             }


                                      // $('#cq_marks"'+i).bind('input', function() {

                                             document.getElementById('total_items').value = data.total;
                                          });
                                       }

                                       function current_tr(sl){


                                          var Subject_CT_Marks    = $('#Subject_CT_Marks'+sl).val();
                                          var Subject_MT_Marks    = $('#Subject_MT_Marks'+sl).val();
                                          var Subject_MCQ_Marks   = $('#Subject_MCQ_Marks'+sl).val();
                                          var Subject_CQ_Marks    = $('#Subject_CQ_Marks'+sl).val();
                                          var Subject_Full_Marks  = $('#Subject_Full_Marks'+sl).val();
                                          // $('#total_marks'+sl).val((setValue).toFixed(2));

                                          var ct_marks  = $('#ct_marks'+sl).val();
                                          var cq_marks  = $('#cq_marks'+sl).val();
                                          var mcq_marks  = $('#mcq_marks'+sl).val();
                                          var mt_marks  = $('#mt_marks'+sl).val();
                                          var total_marks  = $('#total_marks'+sl).val();
                                           // alert(ct_marks);
                                          // var sfsdf= Subject_CT_Marks.toString();
                                          // var sub_ct_marks1 = Math.round(Subject_CT_Marks * 100);
                                          // var sub_ct_marks2 =  parseFloat(ct_marks).toFixed(2);
                                          // var sub_ct_marks1 =  parseFloat(Subject_CT_Marks).toFixed(2);


                                          // var sub_ct_marks1 = parseFloat(Subject_CT_Marks.toFixed(2));
                                          // var sub_ct_marks2 = parseFloat(ct_marks.toFixed(2));
                                          // alert(sub_ct_marks1);
                                          // alert(sub_ct_marks2 );
                                          //  exit();
                                          // console.log(sub_ct_marks1 >= sub_ct_marks2);
                                          
                                          // if(sub_ct_marks2>sub_ct_marks1){
                                          //   alert('Number not more than  '+sub_ct_marks1+' !');
                                          //   document.getElementById("ct_marks"+sl).value = '';
                                          //   exit();
                                          // }
                                          // if(mt_marks>Subject_MT_Marks){
                                          //   alert('Number not more than  '+Subject_MT_Marks+' !');
                                          //   document.getElementById("mt_marks"+sl).value = '';
                                          //   exit();
                                          // }
                                          // if(mcq_marks>Subject_MCQ_Marks){
                                          //   alert('Number not more than  '+Subject_MCQ_Marks+' !');
                                          //   document.getElementById("mcq_marks"+sl).value = '';
                                          //   exit();
                                          // }
                                          // if(cq_marks>Subject_CQ_Marks){
                                          //   alert('Number not more than  '+Subject_CQ_Marks+' !');
                                          //   document.getElementById("cq_marks"+sl).value = '';
                                          //   exit();
                                          // } 
                                          // if(total_marks>Subject_Full_Marks){
                                          //   alert('Number not more than  '+Subject_Full_Marks+' !');
                                          //   document.getElementById("total_marks"+sl).value = '';
                                          //   exit();
                                          // }


                                          if(!mt_marks){
                                            var mt_marks = 0;
                                          }
                                          if(!ct_marks){
                                            var ct_marks = 0;
                                          }
                                          if(!mcq_marks){
                                            var mcq_marks = 0;
                                          } 
                                          if(!cq_marks){
                                            var cq_marks = 0;
                                          } 
                                           


                                          setValue = parseFloat(mt_marks) + parseFloat(ct_marks) + parseFloat(mcq_marks) +parseFloat(cq_marks);
                                         // alert(setValue);
                                           // setValue = parseInt(mcq_marks) + parseInt(cq_marks);
                                          $('#total_marks'+sl).val((setValue).toFixed(2));
                                       }
                                    </script>

                                    <div class="col-md-12" style="background-color: #ffffff; padding: 10px 0px 0px 0px;">
                                       <!-- <form action=""  id="form1" role="form" name="allVoucherEntryForm" method="post" enctype="multipart/form-data"> -->
                                       <form onsubmit="return confirmdelete()" action="<?php echo base_url();?>exam/exam/exam_marks_input_creation"  id="form1" role="form" name="allVoucherEntryForm" method="post" enctype="multipart/form-data">

                                          <div class="ibox-content" >
                                             <div class="col-md-12">

                                                <table  id="table_row_delete" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 0px;">
                                                   <thead class="theight">
                                                 <!--    <div id="addButton">
                                                        <input style="background-color: green; color: white;" type="button"  class="plusbtn" /> -->
                                                        <!-- <input style="background-color: red; color: white;" type="button" value="Remove" class="minusbtn" /> -->
                                                      <!-- </div> -->
                                                      <tr>
                                                         <th style=" text-align:center;width: 2%; padding-top:5px;">SL</th>
                                                         <th style=" text-align:center;width: 5%">Class Name</th>
                                                         <!-- <th style=" text-align:center;width: 5%">Subject Name </th> -->
                                                         <!-- <th style=" text-align:center;width: 5%">Medium</th> 
                                                         <th style=" text-align:center;width: 5%">Shift</th>
                                                         <th style=" text-align:center;width: 5%">Section</th>
                                                         <th style=" text-align:center;width: 5%">Gorup</th> -->
                                                         <th style=" text-align:center;width: 15%">Stu. Name</th>
                                                         <th style=" text-align:center;width: 15%">Stu. ID</th>
                                                         <th style=" text-align:center;width: 5%"> Class Roll </th>
                                                         <th style=" text-align:center;width: 5%">Full Marks</th>
                                                         <th style=" text-align:center;width: 5%">C.T Marks</th>
                                                         <th style=" text-align:center;width: 5%">M.T Marks</th>
                                                         <th style=" text-align:center;width: 5%">Written Marks</th>
                                                         <th style=" text-align:center;width: 5%">Oral Marks </th>
                                                         <th style=" text-align:center;width: 5%">Total Marks</th>
                                                         <!-- <th style=" text-align:center;width: 5%">Note </th> -->
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
                                                           <!-- <button style="width: 100%;" class="btn btn-primary" onclick="submitForm('<?php echo base_url();?>exam/exam/exam_marks_input_creation')"><i class="fa fa-floppy-o"></i> Save</button> -->
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



//    function submitForm(action) {
//     if (confirm('Are you sure you want to Save * All marks *?')) {
//       var form = document.getElementById('form1');
//       form.action = action;
//       form.submit();
//     } else {
//        alert('Please try again!');


//     }
   
// }

function confirmdelete() {
    var r=confirm("Are you sure you want to Save * All marks *?'");
    if (r==true)
      {
        return true;
      }
    else
      {
        return false;
      }
}


      // function submitForm(action) {



      //     var form = document.getElementById('form1');
      //     form.action = action;
      //     form.submit();
      // }
   
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
<!-- <script type="text/javascript">


   function employyeInfo(employeeid, tabid){
       for (var i = 0; i <= 11; i++) {
           if(i == tabid) {
               $("#emp_basic_info"+ ).show(500);
           } else {
               $("#emp_basic_info"+i).hide();
           }
       };
   
       var id = employeeid;
   // alert(id);
   var data = 'one=' + id;
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>employee/get_employee_data",
   data: data,
   dataType: 'json',
   success: function (data) {
       if (data) {
   for (var i = 0; i < data.length; i++) { //for each user in the json response
   // $(".output-id").val(data[i].id);
   $(".department").text(data[i].department);
   $(".designation").text(data[i].designation);
   $(".name").text(data[i].full_name);
   } // for
   
   } // if
   } // success
   }); // ajax 
   }
</script>
<script>
$(function () {
    $('#datetimepicker5').datetimepicker({
        use24hours: true
    });
});



</script> -->

<script>

	$("#Std_medium_ID,#Std_shift_ID, #Class_ID").on('click change keydown keyup paste input', function(){
			    // var Quantity  = $('#Quantity').val();
			    // var PerUnitRate = $('#PerUnitRate').val();
			    // var TotalAmount = Quantity * PerUnitRate;
			    // $('#TotalAmount').val(TotalAmount);


			    // var id = Class_ID;
			    // var Medium_ID = Medium_ID;

			    var Class_ID       = $('#Class_ID').val();
          var Std_medium_ID  = $('#Std_medium_ID').val();
			    var Std_shift_ID   = $('#Std_shift_ID').val();


			    var data = 'Class_ID=' + Class_ID + '&Std_medium_ID=' + Std_medium_ID+ '&Std_shift_ID=' + Std_shift_ID;
			     // alert(data);
			    
			    $.ajax({
			        type: "POST",
			        url: "<?php echo base_url();?>exam/get_exam_subject_data",
			        data: data,
			        dataType: 'json',
			        success: function (data) {
			        	  // alert(data.subjectList[0]['Subject_ID']);
			            if (data) {
			                $('#subjectList').empty();
			                for (var i = 0; i < data.total; i++) { //for each user in the json response
			                    $('#subjectList').append('<option value="' + data.subjectList[i]['Subject_ID'] + '">' + data.subjectList[i]['Subject_Name'] + '</option>');
                      } // for
                      $("#subjectList").append("<option value='' selected='selected'></option>");
			                
			            } // if
			        } // success
			    }); // ajax 
			});

</script>

















