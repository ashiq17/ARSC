<?php $this->load->view('dashboard/common/header');?>
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
                <form id ="basicform" action="<?php echo base_url();?>users_role/users/user_add" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content">
                                <div class="panel ibox float-e-margins">
                                    <div class="ibox-title" style="background:#1979CA">
                                        <h5 style="color:#FFFFFF"><i class="fa fa-user-plus"></i> Add User</h5> 
                                        <div class="ibox-tools">
                                            <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>users_role/users/user_list"><i class='fa fa-user'></i> User List</a>
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                       if($this->session->has_userdata('message')){
                                    ?>          
                                              <div class="alert alert-success text-center">
                                                <strong><?php echo $this->session->message;?></strong>
                                              </div>
                                             
                                    <?php          
                                              $this->session->unset_userdata('message');
                                              
                                          }elseif($this->session->has_userdata('error_msg')){
                                    ?> 

                                            <div class="alert alert-danger text-center">
                                              <strong><?php echo $this->session->error_msg;?></strong> 
                                            </div>
                                    <?php 
                                            $this->session->unset_userdata('error_msg');
                                          }
                                    ?>
                                    <div class="panel-body ibox-content">
                                        <div class="form-group col-md-6">
                                            <label>Full Name: <span id="" style="color: red;"></span></label>
                                            <input id=""  type="text" name="full_name" placeholder="Type your Full Name" class="form-control" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Username: <span id="unique_username_msg" style="color: red;"></span></label>
                                            <input id="new_username" onchange="userid_keyup()" type="text" name="username" placeholder="Type your username!" class="form-control" required="required">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Email:</label>
                                            <input type="email" name="email" placeholder="Type your email!" class="form-control" required="required">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Password:</label>
                                            <input type="password" name="password" id="password" placeholder="Type your password!" class="form-control" required="required">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Confirm Password:</label>
                                            <input type="password" name="passconf" id="passconf" placeholder="Retype your password!" class="form-control" required="required">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Role:</label>
                                            <select name="role" class="form-control" required="required">
                                                <option value="">Select Role</option>
                                                <?php foreach ($role_finding as $key => $role): ?>
                                                    <option value="<?php echo $role['id'] ?>"><?php echo $role['role_name']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Status:</label>
                                            <select name="status" class="form-control" required="required">
                                                <option value="">Select status</option>
                                                <option value="1" selected="selected">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <!-- user details start-->
                                       <div class="" id="accordion">
                                           <div class="panel-heading">
                                               <h4 class="panel-title">
                                                   <a class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style='color:#fff'><span class="glyphicon glyphicon-th-list">
                                                   </span> More Details</a>
                                               </h4>
                                           </div>
                                           <div id="collapseTwo" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                   <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>Upload Image:</label>
                                                            <input type="file" name="image">
                                                        </div>
                                                       <div class="form-group col-md-6">
                                                           <label>Present Address:</label>
                                                           <textarea name="present_address" placeholder="Type present address!" class="form-control"></textarea>
                                                       </div>
                                                       <div class="form-group col-md-6">
                                                           <label>Permanent Addres:</label>
                                                           <textarea name="permanent_address" placeholder="Type permanent address!" class="form-control"></textarea>
                                                       </div>
                                                       <div class="form-group col-md-6">
                                                           <label>Mobile:</label>
                                                           <input type="text" name="mobile" placeholder="Type mobile number!" class="form-control">
                                                       </div>
                                                       <div class="form-group col-md-6">
                                                           <label>Employee ID:</label>
                                                           <input type="text" name="employee_id" placeholder="Type employee id!" class="form-control">
                                                       </div>
                                                       <div class="form-group col-md-6">
                                                           <label>Joining Date:</label>
                                                           <input type="text" name="joining_date" placeholder="Type joining date!" class="form-control">
                                                       </div>
                                                       <div class="form-group col-md-6">
                                                           <label>Date of Birth:</label>
                                                           <input type="text" name="date_birth" placeholder="Type date of birth!" class="form-control">
                                                       </div>
                                                       <div class="form-group col-md-6">
                                                           <label>Gender:</label>
                                                           <select name="gender" class="form-control">
                                                               <option value="">Select Gender</option>
                                                               <option value="Male">Male</option>
                                                               <option value="Female">Female</option>
                                                               <option value="Others">Others</option>
                                                           </select>
                                                       </div>
                                                       <div class="form-group col-md-6">
                                                           <label>Marital Status:</label>
                                                           <select name="marital_status" class="form-control">
                                                               <option value="">Select Gender</option>
                                                               <option value="Married">Married</option>
                                                               <option value="Unmarried">Unmarried</option>
                                                           </select>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>

                                        <!-- user details end-->
                                        <div class="form-group col-md-12">
                                            <div class="pull-right">
                                                <input type="reset" name="reset" class="btn btn-info" value="Reset">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div> 
                </form>
            </section>  

        </div>        
    </div>

    <!-- Mainly scripts -->

<?php $this->load->view('dashboard/common/footer_js');?>

</body>
</html>
<script type="text/javascript">
    function userid_keyup(){
        var username = $("#new_username").val();
    //alert(username);
        $.getJSON("<?php echo base_url();?>users_role/users/json_unique_username_check?1=1&username="+username, function(data) {
            // alert(data.exist);
            if(data.exist==1){
                document.getElementById('unique_username_msg').innerHTML = "This Username is already existed!";
                document.getElementById('new_username').value = "";
            }else{
                document.getElementById('unique_username_msg').innerHTML = "<span style='color:green;'>Available</span>";
            }
        });
    }

    $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );
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
</script>
<style type="text/css">
  .help-inline-error{
    color:red;
  }
</style>

