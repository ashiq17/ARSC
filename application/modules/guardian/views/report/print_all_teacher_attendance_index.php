<?php $this->load->view('dashboard/common/header');?>
<script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/ckeditor/ckeditor.js"></script>

<link href="<?php echo base_url();?>assets/dashboard/css/upload.css" rel="stylesheet">
<style type="text/css">
.modal-dialog, .modal-content { width: 98%;position: absolute;top: 0;left: 0;right: 0;bottom: 0;}
.modal-body {position: relative;width: 100%;height: 80%;}
.modal-footer {position: relative;width: 100%;height: 20%;}
.form-group{margin-bottom: 2px !important;}
.well {padding: 5px;}
.panel-heading {padding: 5px 15px;}
.wrapper-content {padding: 0px 0px 0px;}
.form-horizontal .control-label {padding-top: 5px;margin-bottom: 0;text-align: right;}
.ibox-title{height: 40px;}
.panel {margin-bottom: 2px; }
.panel-body {padding: 1px;}
.bold{color:black;}
.table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td {}
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
     padding: 1px; 
}
body {overflow-x: visible;}
.row-fluid{white-space: nowrap;}
.row-fluid .col-lg-3{
     display: inline-block;
}
.scheduler-border {width:inherit; padding:0 10px;border-bottom:none;  }
.i-am-centered { margin: auto; max-width: 600px;}
</style>

</head>

<body>
<div id="wrapper ">
        <?php $this->load->view('dashboard/common/left_nav');?>
    <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav');?>
            </div>
        <section id="main-content" class="i-am-centered">
            <div class="row-fluid">
                <div class="col-md-12 ">
                    <div class="wrapper wrapper-content">
                        <div class="ibox float-e-margins">
                           
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
                                        <h3 style="color:black; text-align: center"> Teacher Attendance Report</h3> 
                                        <h5 style="color:red; text-align: center">Please Search Here</h5>
                                    </div>
                                    <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1default">
                                            <form class="well form-horizontal" action="<?php echo base_url();?>teacher/teacher/print_all_teacher_attendance" method="post" enctype="multipart/form-data">
                                            <fieldset   style="  text-align:center;margin:auto;" >
                                          
                                            <div class="col-md-12">
                                               <div class="col-md-12">
                                                 <div class="form-group col-md-12 data_1">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"> <span class=""></span> From Date  </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer"  style="margin-top:5px;">
                                                            <div class="input-group date">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date1"  type="text" name="start_date" class="start_date form-control">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                   <div class="form-group col-md-12 data_1">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"> <span class=""></span> To Date </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer"  style="margin-top:5px;">
                                                            <div class="input-group date">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date1"  type="text" name="end_date" class="end_date form-control">
                                                            </div>
                                                        </div>
                                                    </div>  
                                                   <!--  <div class="form-group col-md-12 data_1">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"> <span class=""></span> Month 2018 </label>
                                                        </div>  
                                                        <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                         <select name="month" style="text-align:center;"  class="form-control  select2">
                                                              <option value=""></option>
                                                                <option value="1"  style="text-align:center;">January</option>
                                                                <option value="2"  style="text-align:center;">February</option>
                                                                <option value="3"  style="text-align:center;">March</option>
                                                                <option value="4"  style="text-align:center;">April</option>
                                                         </select>
                                                      </div> 
                                                    </div> -->
                                                
                                                    <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left;margin-top: 7px" class=" control-label"> <span class="required"></span>Shift Name</label>
                                                      </div>
                                                      <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                         <select name="Teacher_shiftID" style="text-align:center;"  class="form-control selectpicker select2">
                                                              <option value=""></option>
                                                            <!-- <option value="1"  selected="selected">Day</option> -->
                                                            <option value="1"  style="text-align:center;">Day</option>
                                                            <option value="2"  style="text-align:center;">Morning</option>
                                                         </select>
                                                      </div>
                                                   </div> 
                                                   
                                                    <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left;margin-top: 7px" class=" control-label"> <span class=""></span>Medium</label>
                                                      </div>    
                                                      <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                         <select name="Teacher_mediumID" style=" "  class="form-control selectpicker select2 ">
                                                             <option value=""></option>
                                                            <option value="1">Bangla</option>
                                                            <option value="2">English</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span>  Teacher ID  </label>
                                                        </div>  
                                                       <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                        <select class="form-control select2" name="Teacher_UniqueID" id="Teacher_UniqueID" >
                                                        <option value=""></option>
                                                        <?php
                                                            foreach($all_teacher_unique_id as $key=>$uniqueInfo) {?>
                                                                 <option value="<?php echo $uniqueInfo['Teacher_UniqueID']; ?>"><?php echo $uniqueInfo['Teacher_UniqueID'];?></option>
                                                                <?php
                                                            }?>
                                                        </select>                          
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"> <span class="required"></span>  Presrnt Status</label> 
                                                        </div> 
                                                        <div class="col-md-8  inputGroupContainer selectContainer" style="margin-top:2px;">
                                                            <select name="teacher_status " class="form-control selectpicker select2">
                                                                <option  value="" ></option>
                                                                <option value="1" >Present</option>
                                                                <option value="2">Absent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class="col-md-2 control-label"></label>
                                                         </div>
                                                        <div class="col-md-8"><br>
                                                            <input type="reset" name="reset" class="btn btn-info btn-sm" value="Reset ">
                                                            <input type="submit"  name="submit" style="width:140px;" class="btn btn-primary btn-sm" value="Print"> 
                                                        </div> 
                                                    </div> 
                                                 </div> 
                                                </div> 
                                                </fieldset> <!-- filedset -->
                                            </form>
                                        </div><!-- end of tab1 -->
                                    </div><!--end tab-content  -->
                                    </div> <!--end of panel-body -->
                                </div>
                            </div> <!-- end of ibox-content col-md-12 -->
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->  
        </section>  
    </div>   <!-- end of page wrapper -->      
    </div><!-- end of  wrapper -->
</h4>

<?php $this->load->view('dashboard/common/footer_js');?>
</body>
</html>



<script>
    $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );
    function UpazilaTitle(upazilaId){
    var id = upazilaId;
         // alert(id);
    var data = 'one=' + id;
    $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>member/get_union_data",
        data: data,
        dataType: 'json',
        success: function (data) {
            if (data) {
                 $('#unionList').empty();
                 // alert(data.unionList[i]['UnionID']);
                for (var i = 0; i < data.total; i++) { //for each user in the json response
                    $('#unionList').append('<option value="' + data.unionList[i]['UnionID'] + '">' + data.unionList[i]['UnionName'] + '</option>');
                } // for
                
            } // if
        } // success
    }); // ajax 
    }
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
        // $('.data_1 .input-group.date').datepicker();
    });
</script>







