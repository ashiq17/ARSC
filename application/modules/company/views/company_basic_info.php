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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper wrapper-content">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title" style="background:#243948">
                                        <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i> Company Info</h5> 
                                        <div class="ibox-tools">
                                            <a class="btn btn-primary unreadable" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>company/company/edit_company_basic_info" ><i class='fa fa-user'></i> Edit Company </a>
                                        </div>
                                        <div class="ibox-tools">
                                            <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>company/company/company_view"><i class='fa fa-user'></i> View Company </a>     
                                       </div>
                                    </div>
                                    <?php
                                       if($this->session->has_userdata('message')){
                                    ?>          
                                              <div class="alert alert-success text-center successMessage">
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
                                    <div class="ibox-content col-md-12" style="padding:15px 0;">
                                    	<div class="panel with-nav-tabs panel-default">
                                    <div class="panel-heading">
                                            <ul class="nav nav-tabs tab-menu">
                                                <li class="active"><a href="#tab1default" data-toggle="tab">Company Basic Info</a></li>
                                                <!-- <li><a href="#tab2default" data-toggle="tab">System User Info</a></li>
                                                <li><a href="#tab3default" data-toggle="tab">Assign W/H</a></li>
                                                <li><a href="#tab4default" data-toggle="tab">Set Salary</a></li>
                                                <li><a href="#tab11default" data-toggle="tab">Bank A/C</a></li>
                                                <li><a href="#tab5default" data-toggle="tab">Academic Info</a></li> -->
                                            </ul>
                                    </div>
                                    <div class="panel-body">
                                    <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                        <form class="well form-horizontal" action="<?php echo base_url();?>company/company/company_info_add" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"> <span class="required">*</span> Company Id No.</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input onchange="userid_keyup()" name="company_info_id" id="comapny_id" class="form-control"  type="text" required>
                                                    </div>
                                                    <span id="unique_employeeid_msg" style="color: red;"></span>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"> <span class="required">*</span>Company Name</label>  
                                                    <div class="col-md-6 inputGroupContainer">  
                                                        <input  name="company_name"  class="form-control"  type="text" required>
                                                    </div>
                                                </div>
                                            
                                                
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"><span required>*</span>Website Address</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input name="website_address" class="form-control"  type="text" required >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"><span required>*</span>Email Address</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <input name="email_address" class="form-control"  type="email" required  >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"> <span class="required">*</span>Mobile Number </label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        
                                                            <input name="mobile_no" class="form-control" type="text" id="phone" required>
                                                    </div>
                                                </div>
                                                <div class="form-group data_1">
                                                    <label style="text-align:left" class="col-md-2 control-label"> <span class="required">*</span>Establishment Date</label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date1" type="text" name="establishment_date" class="start_date form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label">Address  </label>  
                                                    <div class="col-md-6 inputGroupContainer">
                                                        <textarea name="address" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"><span class="required">*</span>Logo Upload </label>  
                                                    <div class="col-md-3 inputGroupContainer">
                                                        <input type="file" name="company_logo" id="imgInp" class="form-control" style="padding-top:5px;">
                                                        <br>
                                                        <img class="img-responsive" id="blah" alt="logo Preview Here" />  
                                                    </div>
                                                    <!-- <div class="col-md-3 inputGroupContainer">
                                                        <img class="img-responsive" height="150" id="blah" src="#" alt="Image Preview Here" />  
                                                        <label style="text-align:left" class="col-md-4 control-label"> <span class="required">*</span>Status</label>  
                                                        <div class="col-md-8 selectContainer" style="padding:0px;">
                                                            <select name="status" class="form-control selectpicker">
                                                                <option value="1" selected="selected">Active</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="form-group">
                                                    <label style="text-align:left" class="col-md-2 control-label"></label>
                                                    <div class="col-md-6"><br>
                                                    <!-- <a class="btn btn-success" href="<?php //echo base_url();?>employee/employee/export_save">Export & Save</a> -->
                                                    <input type="reset" name="reset" class="btn btn-info" value="Reset">
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    
                                 
                                  <!--   mahbub end here -->

                                   
                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                    	 </div>
                                    	</div> 
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div> 
               
            </section>  

        </div>        
    </div>
</h4>

<?php $this->load->view('dashboard/common/footer_js');?>
</body>
</html>

<script type="text/javascript">
    function validateForm() {
        var x = document.forms["myForm"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            alert("Not a valid e-mail address");
            return false;
        }
    }

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
    });

    $("#date2").on('change keydown paste input', function(){
        var ONE_DAY = 1000 * 60 * 60 * 24;
        $('#date1').datepicker();
        $('#date2').datepicker();

        var diff = $('#date2').datepicker("getDate") - $('#date1').datepicker("getDate");
        var leave_duration = diff / ONE_DAY + 1 ;
        $('#leave_duration').val(leave_duration);
    });


    function userid_keyup(){
    var employee_id = $("#employee_id").val();
    // alert(employee_id);
        $.getJSON("<?php echo base_url();?>employee/employee/json_unique_employeeid_check?1=1&employee_id="+employee_id, function(data) {
            if(data.exist==1){
                document.getElementById('unique_employeeid_msg').innerHTML = "This Id Card Number is already existed!";
                document.getElementById('employee_id').value = "";
            }else{
                document.getElementById('unique_employeeid_msg').innerHTML = "<span style='color:green;'>Available</span>";
            }
        });

    }

    function userid_keyupp(){
    var username = $("#username").val();
    // alert(username);
        $.getJSON("<?php echo base_url();?>employee/employee/json_unique_username_check?1=1&username="+username, function(dataa) {
            if(dataa.existt==1){
                document.getElementById('unique_username_msg').innerHTML = "This Username is already existed!";
                document.getElementById('username').value = "";
            }else{
                document.getElementById('unique_username_msg').innerHTML = "<span style='color:green;'>Available</span>";
            }
        });

    }




jQuery().ready(function() {

    var v = jQuery("#basicform").validate({
        rules: {
            username: {
                required: true,
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 15,
            },
            passconf: {
                required: true,
                equalTo: "#password",
            },
            hint: {
                required: true,
            },
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            address: {
                required: true,
            },
            email_address: {
                required: true,
            },
            full_address: {
                required: true,
            },

        },
        errorElement: "span",
        errorClass: "help-inline-error",
    });

});


$( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );


function addRow(tableID) {

            var table = document.getElementById(tableID);

            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var colCount = table.rows[0].cells.length;

            for(var i=0; i<colCount; i++) {

                var newcell = row.insertCell(i);

                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    case "select-one":
                            newcell.childNodes[0].selectedIndex = 0;
                            break;
                }
            }
        }

        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }


            }
            }catch(e) {
                alert(e);
            }
        }

        $(document).ready(function(){
            setTimeout(function() {
                  $('.successMessage').fadeOut('slow');
                  }, 5000);


            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
            $("#imgInp").change(function(){
                readURL(this);
            });
        });



        $(document).ready(function(){

            var count = 2;  
            $('table').on('click', '.btnAdd', function(){  
                // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd></input></td></tr>";
                var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=exam_name[] style='width:100%' id=exam_name></input></td><td><input type=text name=institue_name[] style='width:100%' id=institue_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd style='width:100%'></input></td></tr>";
                $(this).closest('table').append(tr);
                $(this).attr('value', '-');
                $(this).toggleClass('btnDelete').toggleClass('btnAdd');
            }).on('click', '.btnDelete', function(){
                // alert($(this).closest('tr').index());
                // alert($(this).closest('tr'));
                // alert('Are you sure want to delete?');
                confirm('Are you sure want to delete?');
                $(this).closest('tr').remove();
            });

        });



</script>

<script type="text/javascript">
    function employyeInfo(employeeid, tabid){
        for (var i = 0; i <= 10; i++) {
            if(i == tabid) {
                $("#emp_basic_info"+tabid).show(500);
            } else { 
                $("#emp_basic_info"+i).hide();
            }
        };

        var id = employeeid;
        // alert(id);
        var data = 'one=' + id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>employee/get_employee_data",
            data: data,
            dataType: 'json',
            success: function (data) {
                if (data) {
                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        $(".department").text(data[i].department);
                        $(".designation").text(data[i].designation);
                        $(".name").text(data[i].full_name);
                    } // for

                } // if
            } // success
        }); // ajax 
    }
</script>




