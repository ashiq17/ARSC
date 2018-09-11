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
                <!-- <form action="<?php echo base_url();?>employee/employee/apply_leave_entry" method="post" enctype="multipart/form-data"> -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper wrapper-content">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title" style="background:#1969ca">
                                    <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i> Add Notice</h5> 
                                    <div class="ibox-tools">
                                        <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>notice/notice/notice_list"><i class='fa fa-user'></i> Notice List</a>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                if($this->session->has_userdata('message')){
                                    ?>          
                                    <div class="alert alert-success text-center hideMessage">
                                        <strong><?php echo $this->session->message;?></strong>
                                    </div>

                                    <?php          
                                    $this->session->unset_userdata('message');

                                }elseif($this->session->has_userdata('error_msg')){
                                    ?> 

                                    <div class="alert alert-danger text-center hideMessage">
                                        <strong><?php echo $this->session->error_msg;?></strong> 
                                    </div>
                                    <?php 
                                    $this->session->unset_userdata('error_msg');
                                }


                                // echo "<pre>";
                                // print_r($notice_title);
                                // echo "</pre>";
                                ?>

                                <div class="ibox-content col-md-12" style="padding:15px 0;">

                                    <div class="clearfix"></div>

                                    <form class="well form-horizontal" action="<?php echo base_url();?>notice/notice/notice_info_add" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <legend>Add Notice</legend>
                                             <div class="form-group data_1">
                                                <!-- <input type='hidden' name='employee_id' value="<?php echo $employee_details[0]['employeeID'] ?>"> -->
                                                <!-- <input type='hidden' name='superior_id' value="<?php echo $employee_details[0]['supervisor'] ?>"> -->
                                                <label style="text-align:left" class="col-md-2 control-label"> <span class="required">*</span>Notice Date:</label>  
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="notice_date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group data_1">
                                                <label style="text-align:left" class="col-md-2 control-label"> <span class="required">*</span>Expired Date:</label>  
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="expired_date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
	                                        <div class="form-group">
	                                            <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Notice Viewer:</label> 
	                                            <div class="col-md-6 selectContainer">
	                                                <select id="status" name="notice_view_type" class="form-control selectpicker select2">
	                                                    <option class="hidee" value="1">All</option>
	                                                    <option id="department" value="2">Class Wise</option>
	                                                    <option id="designation" value="3">Teacher Wise</option>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div  style="display:none" id="department_wise" class="form-group"> 
	                                        	<label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Class Wise View:</label>
	                                            <div class="col-md-6 selectContainer">
	                                                <select name="department_list[]" multiple="multiple" class="form-control selectpicker select2">
	                                                    <option value=""></option>
	                                                    <?php foreach ($department_finding as $key => $value): ?>
	                                                        <option value="<?php echo $value['Class_ID'] ?>"><?php echo $value['Class_Name'] ?>
	                                                    <?php endforeach ?>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div  style="display:none" id="designation_wise" class="form-group"> 
	                                        	<label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Teacher Wise View:</label>
	                                            <div class="col-md-6 selectContainer">
	                                                <select name="designation_list[]" multiple="multiple" class="form-control selectpicker select2">
	                                                    <option value=""></option>
	                                                    <?php foreach ($designation_finding as $key => $value): ?>
	                                                        <option value="<?php echo $value['Teacher_ID'] ?>"><?php echo $value['Teacher_Name'] ?>
	                                                    <?php endforeach ?>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Notice Title:</label> 
	                                            <div class="col-md-6 selectContainer">
	                                                <select name="notice_title" class="form-control selectpicker select2" onchange="noticeTitle(this.value)">
	                                                    <option></option>
                                                        <?php foreach ($notice_title as $key => $value): ?>
	                                                       <option value="<?php echo $value['note_id']; ?>"><?php echo $value['note_title']; ?></option>
                                                        <?php endforeach ?>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label style="text-align:left" class="col-md-2 control-label"></span>Notice Entry:</label>
	                                            <div class="col-md-6 inputGroupContainer">
	                                                <textarea rows='8' name="notice_body_details" placeholder="Enter your notice" class="form-control notice_details"></textarea>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Status:</label> 
	                                            <div class="col-md-6 selectContainer">
		                                            <select name="status" class="form-control" required="required">
		                                                <option value="">Select status</option>
		                                                <option value="1" selected="selected">Active</option>
		                                                <option value="0">Inactive</option>
		                                            </select>
	                                        	</div>
	                                        </div>
	                                        <div class="form-group">
	                                            <label style="text-align:left" class="col-md-2 control-label"></label>
	                                            <div class="col-md-6"><br>
	                                                <input type="reset" name="reset" class="btn btn-info" value="Reset">
	                                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
	                                            </div>
	                                        </div>

                                        </fieldset>
                                    </form>   
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div> 
        </section>  

    </div>        
</div>

<!-- Mainly scripts -->

<?php $this->load->view('dashboard/common/footer_js');?>



</body>
</html>
<script type="text/javascript">

    $(document).ready(function(){
        $('.data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
        $('.data_1 .input-group.date').datepicker('setDate', new Date());
        // $('.data_1 .input-group.date').datepicker();
        $('.data_1 .input-group.date').datepicker();
    });

    $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );

    $("#status").on('change', function(){
        var status = $("#status").val();
        //alert(status);
        if(status == 2) {
            $('#department_wise').show(500);
            $('#designation_wise').hide(500);
            $('#forward_to').attr('required', 'required');
        }else if(status == 3){
        	$('#designation_wise').show(500);
        	 $('#department_wise').hide(500);
        	$('#forward_to').attr('required', 'required');
        } else {
            $('#department_wise').hide(500);
            $('#designation_wise').hide(500);
            $('#forward_to').removeAttr('required');
        }
    });

    function noticeTitle(noteId){

        var id = noteId;
        // alert(id);
        var data = 'one=' + id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>notice/get_notice_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                if (data) {
                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        $(".note_id").text(data[i].note_id);
                        $(".notice_details").text(data[i].noteBody);
                        // $(".name").text(data[i].full_name);
                    } // for
                    
                } // if
            } // success
        }); // ajax 
    }


    setTimeout(function() {
       $('.hideMessage').fadeOut('slow');
    }, 3000); // <-- time in milliseconds


    // CKEDITOR.replace( 'noteBody' );

</script>




