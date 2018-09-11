<?php $this->load->view('common/header');?>
  <!--************************************
        Inner Banner Start
    *************************************-->
    <div class="tg-innerbanner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ol class="tg-breadcrumb">
              <li><a href="javascript:void(0);">একাডেমিক</a></li>
              <li class="tg-active">পরীক্ষার সময়সূচী</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--************************************
        Inner Banner End
    *************************************-->
<?php $this->load->view('common/SidebarLeft');?>

<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-center">
	<div class="panel">
		<div class="panel-body">
			<h2 style="color:black; text-align: center">পরীক্ষার সময়সূচী</h2>

			     <div class="ibox-content col-md-12" style="padding:2px 0;">
                                <div class="panel with-nav-tabs panel-default">
                                   
                                <div class="panel-heading">
                                        <h5 style="color:red; text-align: center"> খুঁজুন</h5>
                                    </div>
                                   
                                        <div class="tab-pane fade in active" id="tab1default">
                                            <form target="_blank" class="well form-horizontal" action="<?php echo base_url();?>home/print_exam_routine" method="post" enctype="multipart/form-data">
                                            <fieldset   style="  text-align:center;margin:auto;" >
                                          
                                            <div class="col-md-12">
                                               <div class="col-md-12" style="text-align: left;">
                                                <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span>শ্রেণি <span style="color:red">*</span></label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                           <select name="Std_class_ID" style="text-align:left"  class="form-control selectpicker select2" onchange="ClassTitle(this.value)">
                                                                <!-- <option value=""></option> -->
                                                                 <option value="">বাছাই করুন</option>
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
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span> মাধ্যম  </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                           <select name="Std_shift_ID" class="form-control selectpicker">
                                                                <option value="1" selected >বাংলা</option>
                                                                <option value="2">Englsih</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span> শিফট </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                           <select name="Std_medium_ID" class="form-control selectpicker">
                                                                <option value="1" selected >দিবা</option>
                                                                <option value="2">প্রভাতী</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span>শাখা </label>
                                                        </div> 
                                                        <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                         <!--  <select id="sectionList" name="Std_section_ID" style="text-align:left" class="form-control selectpicker select2"><option value="" ></option>
                                                            </select>  -->
                                                             <select name="Std_section_ID"  style="text-align:left "  class="form-control selectpicker select2">
                                                            <!-- <option value="" ></option> -->
                                                                <option value="">বাছাই করুন</option>
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
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span>বিভাগ</label>
                                                        </div>  
                                                       <div class="col-md-8 selectContainer"  style="margin-top:5px;">
                                                         <select name="Std_group_ID"  style="text-align:left "  class="form-control selectpicker select2">
                                                           <!-- <option value=""></option> -->
                                                           <option value="">বাছাই করুন</option>
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
                                                    
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label">  পরীক্ষার নাম <span style="color:red">*</span></label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                              <select class="form-control select2" name="Exam_term_ID" id="Exam_term_ID"  required="required">
                                                              <!-- <option value=""></option> -->
                                                              <option value="">বাছাই করুন</option>
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
                             
                                    </div> <!--end of panel-body -->
                                </div>
                            </div> 
			
		</div>
	</div>

</div>

<?php $this->load->view('common/SidebarRight');?>
<?php $this->load->view('common/footer');?>