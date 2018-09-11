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
                    <a   class="btn btn-primary" href="<?php echo base_url();?>fees/fees/fees_collection">&nbsp;Fees Collection</a>
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
                                    
                                      <th style="color:#3F3F3F;text-align:center;" > Student Name</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Student ID</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Invoice Date</th>
                                      <th style="color:#3F3F3F;text-align:center;" > Invoice Amount</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Status</th>
                                      <th style="color:#3F3F3F;text-align:center;" >Invoice Print</th>
                                      <!-- <th style="color:#3F3F3F;text-align:center;" >Action</th> -->
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $sl = 1;
                                    foreach($all_invoice_find as $key=>$allInfo) {?>
                                    <tr class="gradeC">
                                      <td ><?php echo $sl; ?></td>
                                      
                                    <td style="text-align:center;""><?php echo $allInfo['Std_Name']; ?></td>
                                    <td style="text-align:center;""><?php echo $allInfo['STD_UNQ_ID']; ?></td>
                                    <td style="text-align:center;""><?php echo $allInfo['St_invoice_date']; ?></td>
                                      <td  style="text-align:center;""><?php if(!empty($allInfo['St_Invoice_Amount'])){
                                                      echo $allInfo['St_Invoice_Amount'];
                                                    }else{
                                                      echo '0.00';
                                                    }; ?></td>
                                        <td style=" vertical-align: middle;text-align: center; width: 7%;">
                                                <?php if($allInfo['St_Invoice_Status']==1){ echo 'Paid'; } elseif($allInfo['St_Invoice_Status']==2){echo 'Due';} ?>
                                          </td>

                                           <td style=" vertical-align: middle;text-align: center; width: 7%;">
                                                                        
                                                                        <a target="_blank" href="<?php echo base_url();?>fees/fees/invoice_student_single/<?php echo $allInfo['STD_UNQ_ID']; ?>/<?php echo $allInfo['St_Invoice_type_ID']; ?>">Invoice</a>
                                                                    </td>

<!-- 
                                                                          <td style="text-align: center;">
                                      <a  data-toggle="modal"" 

                                         

                                        class="open-divisionEdit" href="#divisionEdit">

                                        <button class="btn btn-primary btn-xs">
                                          <i class="fa fa-pencil"></i>
                                        </button>
                                      </a>

                                      <a href="<?= base_url() ?>academic/academic/exam_delete/" onClick="return confirm('Are you sure want to delete?')">
                                        <button class="btn btn-danger btn-xs">
                                          <i class="fa fa-trash-o "></i>   
                                        </button>
                                      </a>
                                    </td> -->
                              
                          
                                </tr>
                                <?php
                                $sl++; }
                                ?>     
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th style="color:#3F3F3F;" >SL</th>
                          
                                  <th style="color:#3F3F3F;text-align:center;" > Exam Category Name</th>
                                  
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

            var activestatus = $(this).data('activestatus');
            // alert(name2);

            $(".ibox-content #editID").val( id ); 
            $(".ibox-content #stnameEdit").val( name ); 


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
                    <h3><strong>Exam Category Update Form</strong></h3>
                </div>
              <form class="form-horizontal form_class" id="form_id" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>academic/academic/update_exam_entry">
                   <div class="ibox-content" style="padding-top: 10px;">
                    <!--<p>Sign in today for more expirience.</p>-->
                        
                        <div class="row">
                            <div class="col-lg-12">

                              <input type="hidden" name="editID" id="editID" value="">                                

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Exam Category Name  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="stnameEdit" id="stnameEdit"  placeholder="Please input Name" class="form-control" required> 
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