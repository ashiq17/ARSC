<?php 
$this->load->model('Dashboard');
$get_superadmin = $this->Dashboard->findSuperAdmin();
$user_id = $this->session->userdata('UserID');
$user = $this->Dashboard->user($user_id);
// echo '<pre>',print_r($user),'</pre>';
$RoleID = $this->session->userdata('RoleID');
$permissionMenus = $this->Dashboard->findPermissions($RoleID);
$parentMenus = $this->Dashboard->findMenuPages($RoleID);
 ?>

 <!---BacktrackPortion Start-->   
 <?php function getchildmenu($parentMenus, $parentId, $HeadName, $MenuSlug, $navLevel){ ?>
        <ul class="nav <?php echo $navLevel; ?>">
        <?php foreach($parentMenus as $key=>$info){
            if(($info->parent_id == $parentId)){
                //$info->process_status = 0; //processed
                if($info->is_group == 1){
                    $navLevel = "nav-third-level"; 
                    $findChild = 0;
                    foreach($parentMenus as $key=>$ChildInfo) {
                        if($info->id == $ChildInfo->parent_id) {
                            $findChild = 1;
                        }
                    }
                    if($findChild == 1) {
                        ?>
                        <li class="">
                          <a href="#"><img style="height: 20px;" src="<?php echo base_url(); ?>/images/folder.png"><span class="nav-label"><?php echo $info->title;?></span><span class="fa arrow"></span></a>
                          <?php
                            getchildmenu($parentMenus, $info->id, $info->title, $info->page_url, $navLevel);
                          ?>
                        </li> 
                    <?php
                    } 
                }
                else{?>
                    <li ><a href="<?php echo base_url().$info->page_url;?>"> <img style="height: 14px;" src="<?php echo base_url(); ?>/images/file.png"><?php echo $info->title;?></a></li>
                <?php
                }
            }
         } //foreach end
        ?>
        </ul>
    <?php }?>
<!--BacktrackPortion End-->

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                    <img class="img-responsive img-circle" alt="No Image Found" style="width:80px; height:80px; padding: 0px; margin-right: 10px;" src="<?php echo base_url('assets/images/users/').$user[0]['image'] ?>">
                   
                     </span>
                   <!--  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> 
                        <strong class="font-bold">
                          <?php 
                            if ($user[0]['FullName']) {
                              echo $user[0]['FullName']; 
                            }

                          ?>
                        </strong>
                     </span> <span class="text-muted text-xs block"><?php echo $user[0]['role_name'] ?><b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Profile</a></li>
                        <li><a data-toggle="modal" data-target="#myModa1">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>admin/login/log_out">Logout</a></li>
                    </ul> -->
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
                <?php 
                  foreach($parentMenus as $key=>$info){ 
                      if($info->is_group == 1 && $info->parent_id == 0 ) {
                                $findChild = 0;
                                foreach($parentMenus as $key=>$ChildInfo) {
                                    if($info->id == $ChildInfo->parent_id) {
                                        $findChild = 1;
                                    break;}
                                }
                                if($findChild == 1) {
                                    ?>
                                        <li>
                                            <a href="#"><img style="height: 20px;" src="<?php echo base_url(); ?>/images/folder.png"> <span class="nav-label"><?php echo $info->title;?></span><span class="fa arrow"></span></a>
                                          <?php
                                            //$info->process_status = 0;
                                            $navLevel = "nav-second-level";
                                            getchildmenu($parentMenus, $info->id, $info->title, $info->page_url, $navLevel);
                                          ?>
                                        </li>
                                    <?php
                                }
                              //echo '<pre>',print_r($pages),'</pre>';
                      } elseif($info->is_group == 0 && $info->parent_id == 0 ) {
                              ?>
                          <li><a href="<?php echo base_url().$info->page_url;?>"> <img style="height: 14px;" src="<?php echo base_url(); ?>/images/file.png"><?php echo $info->title;?></a></li>
                          <?php 
                      }
                  } 
              ?>                     
        </ul>

    </div>
</nav>

<!-- Modal -->
<div class="container">
  <div class="modal fade" id="myModa1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password!</h4>
        </div>
        <div class="modal-body">
           <form id="basicform" class="well form-horizontal" action="<?php echo base_url();?>employee/employee/individual_change_password" method="post" enctype="multipart/form-data">
              <fieldset>
                  <input value="<?php echo $user[0]['EmployeeId'] ?>" id="employee_id" name="id" type="hidden">
                  
                  <div class="form-group">
                      <label style="text-align:left" class="col-md-4 control-label"> <span class="required">*</span>Old Password</label>  
                      <div class="col-md-8 inputGroupContainer">
                          <input id="passwordd" name="old_password" onchange="userid_keyup()"  class="form-control"  type="password" required>
                      <span id="unique_employeeid_msg" style="color: red;"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label style="text-align:left" class="col-md-4 control-label"> <span class="required">*</span>New Password</label>  
                      <div class="col-md-8 inputGroupContainer">
                          <input id="password" name="password"  class="form-control"  type="password" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label style="text-align:left" class="col-md-4 control-label"> <span class="required">*</span>Confirm Password</label>  
                      <div class="col-md-8 inputGroupContainer">
                          <input id="passconf"  name="passconf"  class="form-control"  type="password" required>
                          
                      </div>
                  </div>
                  <div class="form-group">
                      <label style="text-align:left" class="col-md-4 control-label"></label>
                      <div class="col-md-8"><br>
                          <input type="reset" name="reset" class="btn btn-info" value="Reset">
                          <input type="submit" name="submit" class="btn btn-primary" value="Submit">

                  </div>
              </fieldset>
          </form>
        </div>
       <!--  <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
  </div>

  <script type="text/javascript">
    jQuery().ready(function() {

        var v = jQuery("#basicform").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 5,
                    maxlength: 15,
                },
                passconf: {
                    required: true,
                    equalTo: "#password",
                },
                

            },
            errorElement: "span",
            errorClass: "help-inline-error",
        });

    });
    function userid_keyup(){
    var employee_id = $("#employee_id").val();
    // var passwordd = $("#passwordd").val();
    alert(employee_id);
    // alert(passwordd);
        $.getJSON("<?php echo base_url();?>employee/employee/json_password_check?1=1&employee_id="+employee_id+"&passwordd="+passwordd, function(data) {
            if(data.exist==1){
                document.getElementById('unique_employeeid_msg').innerHTML = "<span style='color:green;'>Your provided password is correct!</span>";
            }else{
                document.getElementById('unique_employeeid_msg').innerHTML = "Wrong Password! Try Again";
                document.getElementById('passwordd').value = "";
            }
        });

    }
  </script>


