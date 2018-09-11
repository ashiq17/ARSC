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
                <form action="<?php echo base_url();?>users_role/users/role_add" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content">
                                <div class="ibox float-e-margins">
                                    <div id="" class="panel blank-panel">
                                        <div class="ibox-title" style="background:#1969ca">
                                            <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i> Add Role</h5> 
                                            <div class="ibox-tools">
                                                <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>users_role/users/role_list"><i class='fa fa-user'></i> Role List</a>
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label>Role Name:</label>
                                                        <input id="new_username" onchange="userid_keyup()" type="text" name="role_name" placeholder="Type a role name!" class="form-control" required="required">
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label>Update Permission:</label>
                                                        <select name="editPermission" class="form-control" required="required">
                                                            <option value="">Select Permission</option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                   
                                                    <div class="form-group col-md-12">
                                                        <label>Status:</label>
                                                        <select name="status" class="form-control" required="required">
                                                            <option value="">Select status</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
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
</script>