
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
              <li><a href="javascript:void(0);">সংবাদ ও ঘটনাবলী</a></li>
              <li class="tg-active">পরীক্ষার ফলাফল</li>
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
                                 <h2>পরীক্ষার ফলাফল</h2>  
                                <div class="panel-heading">
                                        <h5 style="color:green; text-align: center">অনুগ্রহ করে প্রবেশ করুন</h5>
                                    </div>
                                    <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1default">
                                            <form class="well form-horizontal" action="<?php echo base_url();?>home/student_result_login" method="post" enctype="multipart/form-data">
                                            <fieldset   style="  text-align:center;margin:auto;" >
                                          
                                            <div class="col-md-12">
                                               <div class="col-md-12" style="text-align: left;">

                                                      <div class="form-group col-md-12">
                                                          <div class="col-md-4">
                                                              <label style="text-align:left" class=" control-label"><span class="" color:red;></span> শিক্ষার্থী আইডি <span style="color: red">*</span> </label>
                                                          </div>  
                                                          <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">

                                                            <input type="text" name="userid" class="form-control" placeholder="আইডি অথবা ইউজারনেম অথবা ই-মেইল">
                                                               <!--  <select name="STD_UNQ_ID"  style="text-align:left" required="required" class="form-control selectpicker select2">
                                                           
                                                           </select>    -->  
                                                           
                                                          </div>
                                                      </div>

                                                    

                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class=" control-label"><span class="" color:red;></span> পাসওয়ার্ড <span style="color: red">*</span> </label>
                                                        </div>  
                                                        <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                               <input type="password" name="password" class="form-control" placeholder="আপনার পাসওয়ার্ড">
                                                         
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group col-md-12">
                                                        <div class="col-md-4">
                                                            <label style="text-align:left" class="col-md-2 control-label"></label>
                                                         </div>
                                                        <div class="col-md-8"><br>
                                                            <input type="reset" name="reset" class="btn btn-info btn-sm" value="পুনঃস্থাপন করুন">
                                                            <input type="submit"  name="submit" style="width:140px;" class="btn btn-primary btn-sm" value="প্রবেশ করুন"> 
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
