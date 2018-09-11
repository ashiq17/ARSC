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
                <form action="<?php echo base_url();?>users_role/users/user_edit" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content">
                                <div class="ibox float-e-margins">
                                    <div id="" class="panel blank-panel">
                                        <div class="ibox-title" style="background:#243948">
                                            <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i> Update User</h5> 
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
                                              // echo    "<pre>";
                                              // prin   t_r($user_data);
                                        ?>
                                        <?php 
                                            // echo "<pre>";
                                            // print_r($superior_finding);
                                            // echo "<br>";
                                            // print_r( $user_data[0]['EmployeeId']);
                                         ?>
                                        <div class="ibox-content">
                                            <div class="panel-body">
                                               
                                                <div class="form-group col-md-6">
                                                    <input type='hidden' name='id' value="<?php //echo $user_data[0]['UserID']; ?>">  
                                                    <label>Full Name:</label>
                                                    <input id="" type="text" value="<?php echo $user_data[0]['FullName']; ?>" name="full_name" placeholder="Type your New Full Name!" class="form-control" required="required">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type='hidden' name='id' value="<?php echo $user_data[0]['UserID']; ?>">  
                                                    <label>Username:</label>
                                                    <input id="new_username" onchange="userid_keyup()" type="text" value="<?php echo $user_data[0]['UserName']; ?>" name="username" placeholder="Type your username!" class="form-control" required="required">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email:</label>
                                                    <input type="email" value="<?php echo $user_data[0]['Email']; ?>" name="email" placeholder="Type your email!" class="form-control" required="required">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Role:</label>
                                                    <select name="role" class="form-control" required="required">
                                                        <option value="">Select status</option>
                                                        <?php foreach ($role_data as $key => $role): ?>
                                                            <option <?php if ($role['id']== $user_data[0]['RoleID'] ) {
                                                              echo "selected";
                                                            } ?> value="<?php echo $role['id'] ?>">

                                                                <?php echo $role['role_name']; ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Status:</label>
                                                    <select name="status" class="form-control" required="required">
                                                        <option value="1" <?php if ($user_data[0]['Status'] == 1) {echo 'selected';} ?>>Active</option>
                                                        <option value="0" <?php if ($user_data[0]['Status'] == 0) {echo 'selected';} ?>>Inactive</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="reset" name="reset" class="btn btn-info" value="Reset">
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                                </div>
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
        $.getJSON("<?php echo base_url();?>users/json_unique_username_check?1=1&username="+username, function(data) {
            if(data.exist==1){
                document.getElementById('unique_username_msg').innerHTML = "This Username is already existed!";
                document.getElementById('new_username').value = "";
            }else{
                document.getElementById('unique_username_msg').innerHTML = "";
            }
        });
    }

    $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );

</script>