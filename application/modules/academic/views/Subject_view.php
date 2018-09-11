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
                     
                           
                              
            <div class="ibox">
                <div class="col-xs-6 col-sm-4">
                    <a data-toggle="modal"   class="btn btn-primary" href="#newSubjectModal">&nbsp;Add Subject</a>
                </div>
            </div>
           
                                        


                        <div class="ibox-content" style="padding: 0px;">
                          <div class="panel-body">
                          
                            <div class="tab-content">
                              <div id="tab-1" class="tab-pane active">
                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                  <thead style=" background: #1979CA; color: #3F3F3F;">
                                    <tr class="table-primary">
                                      <th style="color:#3F3F3F;" >SL</th>
                                    
                                      <th style="color:#3F3F3F;text-align:center;" > Subject Name</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Subject Code</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Class</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Section</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Gorup</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Medium</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Shift</th>
                              
                              
                                      <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $sl = 1;
                                    foreach($Subject_Data as $key=>$allInfo) {?>
                                    <tr class="gradeC">
                                      <td ><?php echo $sl; ?></td>
                                      
                                    <td style="text-align:center;""><?php echo $allInfo->Subject_Name; ?></td>
                                    <td style="text-align:center;""><?php echo $allInfo->Subject_Code; ?></td>
                                    <td style="text-align:center;""><?php echo $allInfo->Class_Name; ?></td>
                                    <td style="text-align:center;""><?php echo $allInfo->Section_Name; ?></td>
                                    <td style="text-align:center;""><?php echo $allInfo->Group_Name; ?></td>

                                     <td class="text-center"> <?php 
                                    if($allInfo->Medium_ID==1){echo 'Bangla';}
                                      else{echo '
                                      English';} ?>
                                    </td> 

                                     <td class="text-center"> <?php 
                                    if($allInfo->Shift_ID==1){echo 'Day';}
                                      else{echo '
                                      Morning';} ?>
                                    </td> 

                                   
                            

                                    <td style="text-align: center;">
                                      <a  data-toggle="modal" data-editid="<?php echo $allInfo->Subject_ID; ?>" 

                                        data-name="<?php  echo   $allInfo->Subject_Name; ?>" 
                                        data-name1="<?php echo  $allInfo->Subject_Code; ?>" 
                                        data-name2="<?php echo  $allInfo->Class_ID; ?>"
                                        data-name22="<?php echo $allInfo->Class_Name; ?>" 
                                        data-name3="<?php echo  $allInfo->Section_ID; ?>" 
                                        data-name33="<?php echo $allInfo->Section_Name; ?>" 
                                        data-name4="<?php echo  $allInfo->Group_ID; ?>" 
                                        data-name44="<?php echo $allInfo->Group_Name; ?>" 
                                        data-name5="<?php echo $allInfo->Shift_ID; ?>" 
                                        data-name6="<?php echo $allInfo->Medium_ID; ?>" 
                                        data-name7="<?php echo $allInfo->Subject_ExamID; ?>" 
                                        data-name77="<?php echo $allInfo->Exam_term_Name; ?>" 
                                        data-name8="<?php echo $allInfo->Subject_Full_Marks; ?>" 
                                        data-name9="<?php echo $allInfo->Subject_CT_Marks; ?>" 
                                        data-name10="<?php echo $allInfo->Subject_MT_Marks; ?>" 
                                        data-name11="<?php echo $allInfo->Subject_CQ_Marks; ?>" 
                                        data-name12="<?php echo $allInfo->Subject_MCQ_Marks; ?>" 
                                        data-name13="<?php echo $allInfo->Subject_Result_Order; ?>" 
                                        data-activestatus="<?php echo $allInfo->Subject_Status; ?>"  
                                        data-activestatusexam="<?php echo $allInfo->Subject_Exam_Status; ?>"  

                                        class="open-divisionEdit" href="#divisionEdit">

                                        <button class="btn btn-primary btn-xs">
                                          <i class="fa fa-pencil"></i>
                                        </button>
                                      </a>

                                      <a href="<?= base_url() ?>academic/academic/subject_delete/<?= $allInfo->Subject_ID ?>" onClick="return confirm('Are you sure want to delete?')">
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
                          
                                  <th style="color:#3F3F3F;text-align:center;" > Subject Name</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Subject Code</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Class</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Section</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Group</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Medium</th>
                                  <th style="color:#3F3F3F;text-align:center;" > Shift</th>
                                  <th style="color:#3F3F3F;text-align:center;" >Action</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                    
               
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
   

</form>
</div>
</div>
</div>

<!-- Message View Modal End-->

  <script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";

  </script>

  <!--************** Division entry modal start ***************-->

  <div class="modal" id="newSubjectModal" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content animated fadeIn">
                <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                    <h3><strong style="color: #ffffff;">New Subject Entry Form</strong></h3>
                </div>
              <form class="form-horizontal form_class" id="form_id" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>academic/academic/new_subject_entry">
                   <div class="ibox-content" style="padding-top: 10px;">
                    <!--<p>Sign in today for more expirience.</p>-->
                        
                        <div class="row">
                            <div class="col-lg-12">

                              <!-- <input type="hidden" name="BranchID" value="<?php echo $AccBranchID;?>"> -->

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Class Name <sup style="color:red;">*</sup> :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                          <select name="Class_ID" style="text-align:left"  class="form-control selectpicker select2" ">
                                                <option value=""> Select an option</option>
                                                <?php foreach ($Class_Dat as $key => $value): ?>
                                                <option value="<?php echo $value['Class_ID']; ?>"><?php echo $value['Class_Name'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                    </div>
                                </div>



                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Section Name :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                       <select name="Section_ID" style="text-align:left"  class="form-control selectpicker select2" >
                                                                <option value=""> Select an option</option>
                                                                <?php foreach ($Section_Dat as $key => $value): ?>
                                                                    <option value="<?php echo $value['Section_ID']; ?>"><?php echo $value['Section_Name'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                    </div>
                                </div>

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Group Name :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                         <select name="Group_ID"  style="text-align:left "  class="form-control selectpicker select2">
                                                            <option value=""> Select an option</option>
                                                                <?php foreach ($get_groupDat as $key => $value): ?>

                                                                    <option value="<?php echo $value['Group_ID']; ?>"><?php echo $value['Group_Name'] ?></option>
                                                                <?php endforeach ?>
                                                         </select> 
                                    </div>
                                </div>   

                                  <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Medium :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                           <select name="Medium_ID"  style="text-align:left "  class="form-control selectpicker">
                                                            <option value="1" selected="selected">Bangla</option>
                                                            <option value="2">English</option>
                                                         </select> 
                                    </div>
                                </div>

                                    <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Shift <sup style="color:red;">*</sup>  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                         <select name="Shift_ID"  style="text-align:left "  class="form-control selectpicker">
                                              <option value="1"  selected="selected">Day</option>
                                              <option value="2">Morning</option>
                                           </select>
                                    </div>
                                </div>

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Subject Name <sup style="color:red;">*</sup> :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_Name" id="stname"  placeholder="Please input Name" class="form-control" required> 
                                    </div>
                                </div>  

                                  <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Subject Code :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_Code" id="stname"  placeholder="Please input Code if any" class="form-control" > 
                                    </div>
                                </div>

                                 <div class="col-lg-12" style="padding-top: 10px;">
                                      <h5 style="text-align: center; color: red"><strong> Only for Exam Results</strong></h5>
                                </div> 

                                 
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Exam Name <sup style="color:red;">*</sup> :</strong></h5>
                                    </div>
                                  <div class="col-lg-8">
                                    <select name="Subject_ExamID" style="text-align:left"  class="form-control selectpicker select2" ">
                                         <!-- <option value=""> Select an option</option> -->
                                        <?php foreach ($Exam_Data as $key => $value): ?>
                                          <option value="<?php echo $value['Exam_term_ID']; ?>"><?php echo $value['Exam_term_Name'] ?></option>
                                          <?php endforeach ?>
                                      </select>
                                 </div>
                                </div> 


                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Full Marks <sup style="color:red;">*</sup> :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_Full_Marks" id="Subject_Full_Marks"  placeholder="Please input Full Marks" class="form-control" > 
                                    </div>
                                </div>

                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>C.T Marks :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_CT_Marks" id="Subject_CT_Marks"  placeholder="Please input C.T Marks" class="form-control" > 
                                    </div>
                                </div>


                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>M.T Marks :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_MT_Marks" id="Subject_MT_Marks"  placeholder="Please input  M.T Marks" class="form-control" > 
                                    </div>
                                </div> 
                               

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Written Marks <sup style="color:red;">*</sup>  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_CQ_Marks" id="Subject_CQ_Marks"  placeholder="Please input Written Marks" class="form-control" > 
                                    </div>
                                </div>
                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Viva  Marks  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_MCQ_Marks" id="Subject_MCQ_Marks"  placeholder="Please input Viva  Marks" class="form-control" > 
                                    </div>
                                </div>

                                
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong> Re. Sub. Order <sup style="color:red;">*</sup>  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_Result_Order" id="Subject_Result_Order"  placeholder=" e.g 1,2,3,4,5 etc" class="form-control"> 
                                    </div>
                                </div>

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Exam Status :</strong></h5>
                                    </div>
                                    <div class="col-lg-8" style="text-align: left;">
                                    <label>
                                        <input  type="radio" name="Subject_Exam_Status" value="1" checked="checked" required > Yes </label>
                                    <label style="padding-left: 15px;">
                                        <input type="radio" name="Subject_Exam_Status" value="0" required> No </label>
                                    </div>
                                </div>

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Publish Status :</strong></h5>
                                    </div>
                                    <div class="col-lg-8" style="text-align: left;">
                                    <label>
                                        <input  type="radio" name="pubstatus" value="1" checked="checked" required > Yes </label>
                                    <label style="padding-left: 15px;">
                                        <input type="radio" name="pubstatus" value="0" required> No </label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                         <div class="modal-footer" style="margin-top: 20px;">
                            <button style="" type="submit" class="btn btn-primary" >Save</button>
                            <button style="" type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        </div> 
                    </div>                        
                  
              </form>
            </div>
        </div>
    </div>


     <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-deleteModal", function () {
            var Class_ID = $(this).attr('data-professionid');
             alert(Class_ID);
            var Class_Name = $(this).attr('data-title');
               alert(Class_Name);
            $("#Class_Name").html(Class_Name);
            $("#delete_Class_ID").val(Class_ID);
                   
        });
    </script>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                     Delete This Subject</h4>
                    
                </div><!-- modal header -->

                <form action="<?php echo base_url();?>academic/academic/subject_delete" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="delete_Subject_ID" name="delete_Subject_ID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="Subject_Name"></span>
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

   

    <script type="text/javascript">
        $(document).on("click", ".open-divisionEdit", function () {
            var id    = $(this).data('editid');
            var name  = $(this).data('name');
            var name1 = $(this).data('name1');
            var name2 = $(this).data('name2');
            var name22 = $(this).data('name22');
            var name3 = $(this).data('name3');
            var name33 = $(this).data('name33');
            var name4 = $(this).data('name4');
            var name44 = $(this).data('name44');
            var name5 = $(this).data('name5');
            var name6 = $(this).data('name6');
            var name7 = $(this).data('name7');
            var name77 = $(this).data('name77');
            var name8 = $(this).data('name8');
            var name9 = $(this).data('name9');
            var name10 = $(this).data('name10');
            var name11 = $(this).data('name11');
            var name12 = $(this).data('name12');
            var name13 = $(this).data('name13');
            var activestatus = $(this).data('activestatus');
            var activestatusexam = $(this).data('activestatusexam');
            // alert(activestatusexam);

            $(".ibox-content #editID").val( id ); 
            $(".ibox-content #stnameEdit").val( name ); 
            $(".ibox-content #sub_codeEdit").val( name1 ); 
            $(".ibox-content .Class_text").text( name22 ); 
            $(".ibox-content .Class_value").val( name2 ); 

            $(".ibox-content .section_text").text( name33 ); 
            $(".ibox-content .section_value").val( name3 ); 

            $(".ibox-content .group_text").text( name44 ); 
            $(".ibox-content .group_value").val( name4 ); 

            $(".ibox-content .shift_text").text( name5 ); 
            $(".ibox-content .shift_value").val( name5 ); 

            $(".ibox-content .medium_text").text( name6 ); 
            $(".ibox-content .medium_value").val( name6 ); 

// maha
            $(".ibox-content #Subject_ExamID_text").text( name7 ); 
            $(".ibox-content #Subject_ExamID_value").val( name7 );

            $(".ibox-content .Exam_term_Name_text").text( name77 ); 
            $(".ibox-content .Exam_term_Name_value").val( name77 );

            $(".ibox-content #Subject_Full_Marks_text").text( name8 ); 
            $(".ibox-content #Subject_Full_Marks_value").val( name8 ); 

            $(".ibox-content #Subject_CT_Marks_text").text( name9 ); 
            $(".ibox-content #Subject_CT_Marks_value").val( name9 ); 

            $(".ibox-content #Subject_MT_Marks_text").text( name10 ); 
            $(".ibox-content #Subject_MT_Marks_value").val( name10 ); 

            $(".ibox-content #Subject_CQ_Marks_text").text( name11 ); 
            $(".ibox-content #Subject_CQ_Marks_value").val( name11 );
            
            $(".ibox-content #Subject_MCQ_Marks_text").text( name12 ); 
            $(".ibox-content #Subject_MCQ_Marks_value").val( name12 );

             $(".ibox-content #Subject_Result_Order_text").text( name13 ); 
            $(".ibox-content #Subject_Result_Order_value").val( name13 ); 

            if(activestatusexam == 1) {
              $(".ibox-content #publishedEdit_Exam").attr( "checked", true );
            } else {
              $(".ibox-content #unpublishedEdit_Exam").attr( "checked", true );
            }

            if(activestatus == 1) {
              $(".ibox-content #publishedEdit").attr( "checked", true );
            } else {
              $(".ibox-content #unpublishedEdit").attr( "checked", true );
            }
                   
        });
    </script>

  <div class="modal" id="divisionEdit" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content animated fadeIn">
                <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                    <h3><strong>Subject Update Form</strong></h3>
                </div>
              <form class="form-horizontal form_class" id="form_id" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>academic/academic/update_subject_entry">
                   <div class="ibox-content" style="padding-top: 10px;">
                    <!--<p>Sign in today for more expirience.</p>-->
                        
                        <div class="row">
                            <div class="col-lg-12">

                              <input type="hidden" name="editID" id="editID" value="">                                

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Subject Name  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="stnameEdit" id="stnameEdit"  placeholder="Please input Name" class="form-control" required> 
                                    </div>
                                </div> 

                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Subject Code  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="sub_codeEdit" id="sub_codeEdit"  placeholder="Please input Name" class="form-control" > 
                                    </div>
                                </div> 

                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Class Name  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">

                                        <select name="Class_ID" style="text-align:left"  class="form-control selectpicker" ">
                                                <!-- <option value="" ></option> -->
                                                <option class="Class_value Class_text"></option>
                                                <?php foreach ($Class_Dat as $key => $value): ?>
                                                <option value="<?php echo $value['Class_ID']; ?>"><?php echo $value['Class_Name'] ?></option>
                                                <?php endforeach ?>
                                          </select>
                                    </div>
                                </div> 

                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Section Name  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                    <select name="Section_ID" style="text-align:left"  class="form-control" >
                                            <option class="section_value section_text"></option>
                                            <?php foreach ($Section_Dat as $key => $value): ?>
                                            <option value="<?php echo $value['Section_ID']; ?>"><?php echo $value['Section_Name'] ?></option>
                                              <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                  <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Group Name  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                           <select name="Group_ID"  style="text-align:left "  class="form-control">
                                                <option class="group_value group_text"></option>
                                                <?php foreach ($get_groupDat as $key => $value): ?>
                                                <option value="<?php echo $value['Group_ID']; ?>"><?php echo $value['Group_Name'] ?></option>
                                              <?php endforeach ?>
                                          </select>  
                                    </div>
                                </div>  

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Medium   :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                       <select name="Medium_ID"  style="text-align:left "  class="form-control selectpicker">
                                        <option class="medium_value medium_text"></option>
                                        <option value="1" selected="selected">Bangla</option>
                                        <option value="2">English</option>
                                      </select> 
                                    </div>
                                </div>

                                     <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Shift   :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <select name="Shift_ID"  style="text-align:left "  class="form-control">
                                          <option class="shift_value shift_text"></option>
                                              <option value="1" >Day</option>
                                              <option value="2">Morning</option>
                                           </select>
                                    </div>
                                </div>


                                <div class="col-lg-12" style="padding-top: 10px;">
                                      <h5 style="text-align: center; color: red"><strong> Only for Exam Results</strong></h5>
                                </div> 

                                 
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Exam Name :</strong></h5>
                                    </div>
                                  <div class="col-lg-8">

                                     <select name="Subject_ExamID" style="text-align:left"  class="form-control selectpicker" ">
                                          <!-- <option value="" ></option> -->
                                          <option class="Exam_term_Name_value Exam_term_Name_text"></option>
                                          <?php foreach ($Exam_Data as $key => $value): ?>
                                          <option value="<?php echo $value['Exam_term_ID']; ?>"><?php echo $value['Exam_term_Name'] ?></option>
                                          <?php endforeach ?>
                                    </select>
                                     
                                    
                                  </div>
                                </div> 


                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Full Marks :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_Full_Marks"  id="Subject_Full_Marks_value"  placeholder="Please input Full Marks" class="form-control Subject_Full_Marks_value" > 
                                    </div>
                                </div>

                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>C.T Marks :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_CT_Marks" id="Subject_CT_Marks_value"  placeholder="Please input C.T Marks" class="form-control" > 
                                    </div>
                                </div>


                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>M.T Marks :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_MT_Marks" id="Subject_MT_Marks_value"  placeholder="Please input  M.T Marks" class="form-control" > 
                                    </div>
                                </div> 

                                

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>M.C.Q Marks  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_MCQ_Marks" id="Subject_MCQ_Marks_value"  placeholder="Please input MCQ Marks" class="form-control" > 
                                    </div>
                                </div>
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>C.Q Marks  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_CQ_Marks" id="Subject_CQ_Marks_value"  placeholder="Please input C. Q Marks" class="form-control" > 
                                    </div>
                                </div>
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Result Sub. Order :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Subject_Result_Order" id="Subject_Result_Order_value"  placeholder=" e.g 1,2,3,4,5 etc" class="form-control" > 
                                    </div>
                                </div>

                                 <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Exam Status :</strong></h5>
                                    </div>
                                    <div class="col-lg-8" style="text-align: left;">
                                    <label>
                                        <input  type="radio" name="Subject_Exam_Status" id="publishedEdit_Exam" value="1" checked="checked" required > Yes </label>
                                    <label style="padding-left: 15px;">
                                        <input type="radio" name="Subject_Exam_Status" id="unpublishedEdit_Exam" value="0" required> No </label>
                                    </div>
                                </div>


                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Publish Status :</strong></h5>
                                    </div>
                                    <div class="col-lg-8" style="text-align: left;">
                                    <label>
                                        <input  type="radio" name="pubstatusEdit" id="publishedEdit" value="1" required> Yes </label>
                                    <label style="padding-left: 15px;">
                                        <input type="radio" name="pubstatusEdit" id="unpublishedEdit" value="0" required> No </label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                         <div class="modal-footer" style="margin-top: 20px;">
                            <button style="" type="submit" class="btn btn-primary" >Save</button>
                            <button style="" type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        </div> 
                    </div>                        
                  
              </form>
            </div>
        </div>
    </div>

    <!--************** Division edit modal End ***************-->

  <script>
    $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );

    $( "#demonstrations" ).select2( { placeholder: "Select2 version", minimumResultsForSearch: -1 } ).on( "change", function() {
      document.location = $( this ).find( ":selected" ).val();
    } );
  </script>

  <script>
    $(document).ready(function(){
      $('.data_1 .input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
      });
    $('.data_1 .input-group.date').datepicker('setDate', new Date());
    });
  </script>
  <script>
        $(document).ready(function() {
            
            var oTable = $('#editable').dataTable();         
            var oTable = $('#editable1').dataTable();         
            var oTable = $('#editable2').dataTable();         

        });
    </script>