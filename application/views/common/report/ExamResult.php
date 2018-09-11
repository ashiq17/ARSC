<?php $this->load->view('common/header');?>
<?php echo error_reporting(0); ?>
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
<?php //$this->load->view('common/SidebarLeft');?>

       <div class="ibox-content col-md-3" style="padding:2px 0;">
          </div> 

    <div class="ibox-content col-md-6" style="padding:1px 0;">
                  <div class="panel with-nav-tabs panel-default">

                    <?php
                      $EmployeeId= $this->session->userdata("EmployeeId");
                       $all_info = $this->Home_Model->gets_all_info($EmployeeId);
                       $STD_UNQ_ID = $all_info['0']['STD_UNQ_ID'];

                      //     echo "<pre>";
                      //  // print_r($all_info);
                      //  print_r($STD_UNQ_ID);
                      // echo "</pre>";
                      //  die();
                        ?>
                            <fieldset class="" style="text-align:left; margin-top: 20px;" >
                               <!-- <legend>Employee Basic info</legend> -->
                               <div class="col-sm-12">
                                  <div class="panel panel-default">
                                     <div class="panel-body ">
                                        <div class="col-md-12">
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
                                          
                                           <div class="col-md-9">
                                              <label style="text-align:left; padding:0px"> Welcome To

                                              <span style="margin-left: 0px; "> -</span>
                                                <span ><strong style="color: green; margin-left: 10px;"><?php  if (!empty($all_info['0']['Std_Name'])) {
                                                  echo $all_info['0']['Std_Name'];} ?> </span></strong>
                                                 
                                               </label>

                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                       <span style="text-align:left; padding:0px">F. Name <span style="margin-left: 0px; "> :</span></span>
                                                    </div>
                                                    <div class="col-md-8 inputGroupContainer">
                                                       <span class="bold"> 
                                                      <?php  if (!empty($all_info['0']['Std_parent'])) {
                                                  echo $all_info['0']['Std_parent'];} ?>

                                                    </span>
                                                  </div>
                                              </div> 
                                              <div class="col-md-12">
                                                    <div class="col-md-4">
                                                       <span style="text-align:left; padding:0px">Medium <span style="margin-left: 0px; "> :</span></span>
                                                    </div>
                                                    <div class="col-md-8 inputGroupContainer">
                                                       <span class="bold"> 

                                                      <?php if (!empty($all_info['0']['Std_medium_ID']) && $all_info['0']['Std_medium_ID']==1) {echo 'Bangla';}
                                                       elseif (!empty($all_info['0']['Std_medium_ID']) && $all_info['0']['Std_medium_ID']==2) {echo 'English';}
                                                         ?> 

                                                    </span>
                                                  </div>
                                              </div>
                                               <div class="col-md-12">
                                                    <div class="col-md-4">
                                                       <span style="text-align:right; padding:0px">Shift<span style="margin-left: 22px; "> :</span></span>
                                                    </div>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <span class=" bold"> 
                                                          <?php if (!empty($all_info['0']['Std_shift_ID']) && $all_info['0']['Std_shift_ID']==1) {echo 'Day';}
                                                         elseif (!empty($all_info['0']['Std_shift_ID']) && $all_info['0']['Std_shift_ID']==2) {echo 'Morning';}
                                                           ?> 
                                                           </span>
                                                      </div>
                                                </div>

                                          <div class="col-md-12">
                                              <div class="col-md-4">
                                                 <span style="text-align:right; padding:0px">Class<span style="margin-left: 19px; "> :</span></span>
                                              </div>
                                              <div class="col-md-8 inputGroupContainer">
                                                 <span class=" bold">
                                                 <?php  if (!empty($all_info['0']['Class_Name'])) {
                                                  echo $all_info['0']['Class_Name'];} ?>  

                                                   </span>
                                                
                                              </div>
                                           </div>

                                           <div class="col-md-12">
                                              <div class="col-md-4">
                                                 <span style="text-align:right; padding:0px">Section<span style="margin-left: 5px; "> :</span></span>
                                              </div>
                                              <div class="col-md-8 inputGroupContainer">
                                                 <span class=" bold">
                                                 <?php  if (!empty($all_info['0']['Section_Name'])) {
                                                  echo $all_info['0']['Section_Name'];} ?>  

                                                   </span>
                                                
                                              </div>
                                           </div>
                                           <div class="col-md-12">
                                              <div class="col-md-4">
                                                 <span style="text-align:right; padding:0px"> C.Roll<span style="margin-left: 15px; "> :</span>  </span>
                                              </div>
                                              <div class="col-md-8 inputGroupContainer">
                                                 <span class=" bold"> 

                                                  <?php  if (!empty($all_info['0']['Std_academic_ID'])) {
                                                  echo $all_info['0']['Std_academic_ID'];} ?>  

                                                 </span>
                                              </div>
                                           </div>
                                    </div> 


                                           <div class="col-md-3">
                                             <img style=" height: 80px; width: 90px;  margin-top: 2px; margin-bottom: 10px;" src="<?php echo base_url(); ?>images/student/<?php echo $all_info['0']['Image'] ?>" >
                                             <button class="btn" style="height: 25px; width: 88px;margin-top : 1px;"><a  style="text-align: center ;color: red" href="<?php echo base_url();?>home/log_out">Log Out</a></button>
                                           
                                           </div>
                                          
                                        </div>

                                     </div>
                                  </div>
                               </div>

                                <div class="tab-pane fade in " id="tab1default">
                              <form class="well form-horizontal" action="<?php echo base_url();?>home/print_exam_report_single"  target="_blank" method="post" enctype="multipart/form-data">
                              <fieldset   style="  text-align:center;margin:auto;" >
                            
                              <div class="col-md-12">
                                 <div class="col-md-12" style="text-align: left;">
                                  <?php  $class_name= $all_info['0']['Class_Name']; ?>

                                  <input type="hidden" name="STD_UNQ_ID" value="<?php echo $STD_UNQ_ID ?>">
                                  <input type="hidden" name="class_name" value="<?php echo $class_name ?>">

                                      <div class="form-group col-md-12">
                                          <div class="col-md-4">
                                              <label style="text-align:left" class=" control-label"><span class="" color:red;></span> Exam Name <span style="color: red">*</span> </label>
                                          </div>  
                                          <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                <select class="form-control select2" name="Exam_term_ID" id="Exam_term_ID"  required="required">
                                             
                                               
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
                            </fieldset>
                  </div>
              </div> <!-- end of ibox-content col-md-12 -->

             <div class="ibox-content col-md-3" style="padding:2px 0;">
          </div> 

<?php //$this->load->view('common/SidebarRight');?>
<?php $this->load->view('common/footer');?>