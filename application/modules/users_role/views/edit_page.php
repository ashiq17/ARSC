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
                <form action="<?php echo base_url();?>users_role/users/page_edit" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content">
                                <div class="ibox float-e-margins">
                                    <div id="" class="panel blank-panel">
                                        <div class="ibox-title" style="background:#243948">
                                            <h5 style="color:#D7E1ED"><i class="fa fa-tasks" aria-hidden="true"></i>Edit Page</h5> 
                                            <div class="ibox-tools">
                                                <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>users_role/users/page_list"><i class="fa fa-list" aria-hidden="true"></i>Page List</a>
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <?php 

                                            // $id =$this->uri->segment(4);
                                            // $select_parent = $this->load->Users_model->select_parent();
                                            // echo "<pre>"; print_r($select_parent); die(); 
                                         function getchildaa($pName_data, $parentId, $page_data){ 
                                                foreach($pName_data as $key=>$infoa){
                                                    if(($infoa->parent_id == $parentId)  && ($infoa->process_statusaa == 0)){
                                                        $infoa->process_statusaa = 1; //processed
                                                        if($infoa->IsTransactable == 0){ 

                                                            $prefixDesign = "----";
                                                            $prefix = "";
                                                            $ptnGrpLength = $infoa->order_level; //strlen($infoa->title);
                                                            for($i = 1; $i <= $ptnGrpLength; $i++) {
                                                                $prefix = $prefix . $prefixDesign;
                                                            }
                                                            ?>
                                                                <option value="<?php echo $infoa->id; ?>" <?php if ($page_data[0]['parent_id'] == $infoa->id) { echo 'selected'; } ?>><?php  echo $prefix . $infoa->title; ?></option>
                                                                <?php getchildaa($pName_data, $infoa->id, $page_data);?>  
                                                            <?php  
                                                        }
                                                    }
                                                }   
                                            } 

                                        ?>
                                        <div class="ibox-content">
                                            <div class="panel-body">
                                                <div class="form-group col-md-6">
                                                    <label>Parent Name:</label>
                                                    <select name="pages_id" class="form-control">
                                                        <option value="">Select Page Name</option>
                                                        <?php  foreach($pName_data as $key=>$infoa){?>
                                                            <?php //echo "<pre>"; print_r($infoa); die(); ?>
                                                            <?php if($infoa->process_statusaa == 0){ ?>
                                                            <option value="<?php echo $infoa->id; ?>" <?php if ($page_data[0]['parent_id'] == $infoa->id) { echo 'selected'; } ?>>
                                                                <?php echo $infoa->title; ?>
                                                            </option>
                                                                <?php $infoa->process_statusaa = 1;
                                                                    getchildaa($pName_data, $infoa->id, $page_data);
                                                            }
                                                        }?>
                                                    </select>  
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type='hidden' name='id' value="<?php echo $page_data[0]['id']; ?>">
                                                    <label>Page Title: <?php echo $page_data[0]['parent_id']; ?></label>
                                                    <input id="new_username" type="text" name="title" placeholder="Type a role name!" class="form-control"  value="<?php echo $page_data[0]['title'] ?>" required="required">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Page Url:</label>
                                                    <input type="text" name="page_url" value="<?php echo $page_data[0]['page_url'] ?>" placeholder="Enter a page url" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                	<label>Is Group:</label>
                                                	<select name="is_group" class="form-control" required="required">
                                                	    <option value="">Select Group</option>
                                                	    <option value="1" <?php if ($page_data[0]['is_group'] == 1) { echo 'selected'; } ?>>Group</option>
                                                	    <option value="0" <?php if ($page_data[0]['is_group'] == 0) { echo 'selected'; } ?>>Non-Group</option>
                                                	</select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Order:</label>
                                                    <input type="number" name="order" value="<?php echo $page_data[0]['page_order'] ?>" placeholder="Enter a order" class="form-control" required="required">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Status:</label>
                                                    <select name="status" class="form-control" required="required">
                                                        <option value="1" <?php if ($page_data[0]['status'] == 1) {echo 'selected';} ?>>Active</option>
                                                        <option value="0" <?php if ($page_data[0]['status'] == 0) {echo 'selected';} ?>>Inactive</option>
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
</script>