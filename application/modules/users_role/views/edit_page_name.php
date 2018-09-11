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
                <form action="<?php echo base_url();?>users_role/users/editing_page_name" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title" style="background:#243948">
                                        <h5 style="color:#D7E1ED"><i class="fa fa-tasks" aria-hidden="true"></i>
 Edit Page Name</h5> 
                                        <div class="ibox-tools">
                                            <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>users_role/users/pages_name_list"><i class="fa fa-list" aria-hidden="true"></i>
Page Name List</a>
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <?php //echo "<pre>"; print_r($page_name); die(); ?>
                                    <div class="ibox-content">
                                        <div class="form-group col-md-6">
                                            <input type='hidden' name='id' value="<?php echo $page_name[0]['id']; ?>">
                                            <label>Page Name:</label>
                                            <input id="new_username" type="text" name="name" placeholder="Type a role name!" class="form-control"  value="<?php echo $page_name[0]['name'] ?>" required="required">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Page Order:</label>
                                            <input type="number" name="p_order" value="<?php echo $page_name[0]['p_order'] ?>" placeholder="Enter a order" class="form-control" required="required">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Status:</label>
                                            <select name="status" class="form-control" required="required">
                                                <option value="1" <?php if ($page_name[0]['status'] == 1) {echo 'selected';} ?>>Active</option>
                                                <option value="0" <?php if ($page_name[0]['status'] == 0) {echo 'selected';} ?>>Inactive</option>
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