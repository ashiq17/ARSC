
<?php $this->load->view('common/header');?>
<style type="text/css">
  
  .alert{

    color: red;
   }
</style>

<!--************************************
        Inner Banner Start
    *************************************-->
    <div class="tg-innerbanner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ol class="tg-breadcrumb">
              <li><a href="javascript:void(0);">News & Events</a></li>
              <li class="tg-active">Exam Result</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--************************************
        Inner Banner End
    *************************************-->
<?php $this->load->view('common/SidebarLeft');?>

       <div class="ibox-content col-md-6" style="padding:2px 0;">
                                <div class="panel with-nav-tabs panel-default">
                        <?php
                           if($this->session->has_userdata('message')){
                               ?>          
                        <div class=" alert-success text-center successMessage">
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
                                   
                                <div class="panel-heading">
                                        <h5 style="color:green; text-align: center"> Please Search Here</h5>
                                    </div>
                                    <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1default">
                                             <form class="well form-horizontal" action="<?php echo base_url();?>home/print_exam_report_all" method="post" target="_blank" enctype="multipart/form-data">
                                            <fieldset   style="  text-align:center;margin:auto;" >
                                          
                                            <div class="col-md-12">
                                               <div class="col-md-12" style="text-align: left;">
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span> Medium  </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                           <select name="Std_shift_ID" class="form-control selectpicker">
                                                                <option value="1" selected >Bangla</option>
                                                                <option value="2">Englsih</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span> Shift  </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                           <select name="Std_medium_ID" class="form-control selectpicker">
                                                                <option value="1" selected >Day</option>
                                                                <option value="2">Morning</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span>Class Name <span style="color: red;"> *</span> </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                           <select name="Std_class_ID"  required="required" style="text-align:left"  class="form-control selectpicker select2" onchange="ClassTitle(this.value)">
                                                                <option value="" > Select an Option</option>
                                                                <?php foreach ($Class_Data as $key => $value): ?>
                                                                    <option value="<?php echo $value->Class_ID; ?>"><?php echo $value->Class_Name ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span>Section Name </label>
                                                        </div> 
                                                        <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                      
                                                             <select name="Std_section_ID"  style="text-align:left "  class="form-control selectpicker select2">
                                                            <option value="" > Select an Option</option>
                                                                <?php foreach ($Section_Data as $key => $value): ?>

                                                                    <option value="<?php echo $value->Section_ID; ?>"><?php echo $value->Section_Name ?></option>
                                                                <?php endforeach ?>
                                                         </select>              
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span>Group Name </label>
                                                        </div>  
                                                       <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                         <select name="Std_group_ID"  style="text-align:left "  class="form-control selectpicker select2">
                                                             <option value="" > Select an Option</option>
                                                                <?php foreach ($Group_Data as $key => $value): ?>

                                                                    <option value="<?php echo $value->Group_ID; ?>"><?php echo $value->Group_Name ?></option>
                                                                <?php endforeach ?>
                                                         </select>                               
                                                      </div>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span> Exam Name <span style="color: red;"> *</span> </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                              <select class="form-control select2" name="Exam_term_ID" id="Exam_term_ID"  required="required">
                                                             
                                                              <option value="">Select an option</option>
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

<?php $this->load->view('common/SidebarRight');?>
<?php $this->load->view('common/footer');?>
   <?php $this->load->view('dashboard/common/footer_js');?>
<script type="text/javascript">
  

   $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );
</script>
