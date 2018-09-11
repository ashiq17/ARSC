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
                <form action="<?php echo base_url();?>sms/sms/sms_add" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title" style="background:#1969ca">
                                        <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i>SMS</h5> 
                                        <div class="ibox-tools">
                                            <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>sms/sms/get_sms_list"><i class='fa fa-user'></i> SMS List</a>
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=" panel-body ibox-content col-md-12">
                                        <div class="form-group col-md-8">
                                            <label>SMS Title:</label>
                                            <input id="leave" onchange="userid_keyup()" type="text" name="sms_title" placeholder="Type a sms title" class="form-control" required="required">
                                            <!-- <span id="unique_leave_msg" style="color: red;"></span> -->
                                        </div>
                                         <div class="form-group col-md-8">
                                            <label>SMS Category:</label>

                                             <select name="sms_category" class="form-control" required="required">
                                                <option value="" selected>Select Category</option>
                                                <option value="1" > Student Attendance</option>
                                                <option value="2"> Student General</option>
                                                <option value="3"> Student Result</option>
                                                <option value="4"> Teacher General</option>

                                            </select>
                                            <!-- input id="leave" onchange="userid_keyup()" type="text" name="sms_category" placeholder="Type a sms category!" class="form-control" required="required"> -->
                                            <!-- <span id="unique_leave_msg" style="color: red;"></span> -->
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="form-group col-md-8">
                                            <label>SMS Details:</label><br><br>
                                           <!--  <textarea rows="4" name="notes" placeholder="Enter your notes" class="form-control" > -->
                                            <div class="form-group">
                                                    <textarea name="smsBody"> </textarea>
                                                </div>
                                        </div>
                                        
                                         <div class="clearfix"></div>
                                        <div class="form-group col-md-8">
                                            <label>Status:</label>
                                            <select name="status" class="form-control" required="required">
                                                <option value="">Select status</option>
                                                <option value="1" selected="selected">Active</option>
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
        var leave = $("#leave").val();
    //alert(leave);
        $.getJSON("<?php echo base_url();?>employee/employee/json_unique_leave_check?1=1&leave="+leave, function(data) {
            if(data.exist==1){
                document.getElementById('unique_leave_msg').innerHTML = "This Leave name is already existed!";
                document.getElementById('leave').value = "";
            }else{
                document.getElementById('unique_leave_msg').innerHTML = "";
            }
        });
    }
</script>
<script>
            CKEDITOR.replace( 'smsBody' );
        </script>




