<?php 
$this->load->model('Dashboard');
// $this->load->model('employee/employee/Employee_model');

$get_superadmin = $this->Dashboard->findSuperAdmin();
$user_id = $this->session->userdata('UserID');
$user = $this->Dashboard->user($user_id);

//echo '<pre>',print_r($user),'</pre>';

$RoleID = $this->session->userdata('RoleID');
$permissionMenus = $this->Dashboard->findPermissions($RoleID);
$parentMenus = $this->Dashboard->findMenuPages($RoleID);
 ?>
<nav class="navbar navbar-static-top navbar-height" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
            <div class="form-group">
                <!-- <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search"> -->
                <h4 style="margin:20px 0 0 15px; color: #2c3e50;"> School Management</h4>

            </div>
        </form>
    </div>
    <ul  class="nav navbar-top-links">
        <li>
            <span class="m-r-sm text-muted welcome-message">Welcome to <strong style="color:#2c3e50;"><?php echo $user[0]['FullName'] ?></strong> </span>
        </li>
        <li>
            <a style="color: #000000!important;" href="<?php echo base_url();?>" target="__blank">
                <i class="fa fa-eye"></i>  Website View 
            </a>
        </li>
        
        <li>
            <a style="color: #000000!important;" href="<?php echo base_url();?>admin_panel/welcome/dashboard">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>

       <!--  <li class="">
            <a href="<?php //echo base_url();?>admin/login/log_out">
                <i class="fa fa-sign-out"></i> Log out
            </a>
            
        </li> -->
        <style type="text/css">
            .user-img-design{
                /*width: 60%;*/
                height: 75px;
                padding: 18px;
                padding-top: 5px;
            }
            .navbar-top-links .dropdown-menu li a {
                padding: 3px 10px;
                min-height: 0;
            }
            .caret-up{
                text-align: center;
                margin-left: 70px;
                margin-top: -32px;
                font-size: 35px;
                color: #243948;                     
            }
            .dropdown-menu {
                background-color: #243948;
                color: #fff;
            } 
        </style>
        <div style="float:right">
            <div class="dropdown profile-element"> 
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <img class="img-responsive img-circle" alt="No Image Found" style="width:50px; height:50px; padding: 4px; margin-right: 10px;" src="<?php echo base_url('assets/images/users/').$user[0]['image'] ?>">
                <ul class="dropdown-menu animated fadeInRight m-t-xs" style="margin-left:-50px !important;" >
                  <span class="text-muted text-xs block caret-up"><?php //echo $user[0]['role_name'] ?><i class="fa fa-caret-up" aria-hidden="true"></i></span> </span> 
                     </a>
                    <!-- <li><a href="#">Profile</a></li> -->
                    <li><a data-toggle="modal" data-target="#myModa1">Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>admin/login/log_out">Logout</a></li>
                </ul>
            </div>
        </div>
    </ul>

</nav>


<style type="text/css">
    .navbar-height{
        min-height: 25px !important;
    }
</style>

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
                      <label style="text-align:left" class="col-md-4 control-label"> <span class="">*</span>Old Password</label>  
                      <div class="col-md-8 inputGroupContainer">
                          <input id="passwordd" name="old_password" onchange="userid_keyup()"  class="form-control"  type="password" >
                      <span id="unique_employeeid_msg" style="color: red;"></span>
                      </div>
                  </div>
                  <div class="form-group">
                      <label style="text-align:left" class="col-md-4 control-label"> <span class="">*</span>New Password</label>  
                      <div class="col-md-8 inputGroupContainer">
                          <input id="password" name="password"  class="form-control"  type="password" >
                      </div>
                  </div>
                  <div class="form-group">
                      <label style="text-align:left" class="col-md-4 control-label"> <span class="">*</span>Confirm Password</label>  
                      <div class="col-md-8 inputGroupContainer">
                          <input id="passconf"  name="passconf"  class="form-control"  type="password" >
                          
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
                    : true,
                    minlength: 5,
                    maxlength: 15,
                },
                passconf: {
                    : true,
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