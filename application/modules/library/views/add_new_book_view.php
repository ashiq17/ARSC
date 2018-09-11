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
   .form-group{
   margin-bottom: 2px !important;
   }
   .well {
   /* min-height: 20px; */
   padding: 5px;
   }
   .panel-heading {
   padding: 5px 15px;
   }
   .wrapper-content {
   /*padding: 20px 10px 40px;*/
   padding: 0px 0px 0px;
   }
   .form-horizontal .control-label {
   padding-top: 5px; 
   margin-bottom: 0;
   text-align: right;
   }
   .ibox-title{
   height: 40px;
   }
   .panel {
   margin-bottom: 2px; 
   }
   .panel-body {
   padding: 1px; 
   }
   .bold{
   color:black;
   }
   .table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td {
   /*padding: 5px; */
   }
   .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
   padding: 1px; 
   }
   body {overflow-x: visible;}
   .row-fluid{
   white-space: nowrap;
   }
   .row-fluid .col-lg-3{
   display: inline-block;
   }
   .scheduler-border {
   width:inherit; /* Or auto */
   padding:0 10px; /* To give a bit of padding on the left and right */
   border-bottom:none;
   /*margin:1px;*/
   }
   /*fieldset { min-width: 100%; }*/
</style>
</head>
<body>
   <div id="wrapper ">
      <?php $this->load->view('dashboard/common/left_nav');?>
      <div id="page-wrapper" class="my-bg dashbard-1">
         <div class="row border-bottom">
            <?php $this->load->view('dashboard/common/top_nav');?>
         </div>
         <section id="main-content">
            <div class="row-fluid">
               <div class="col-md-12">
                  <div class="wrapper wrapper-content">
                     <div class="ibox float-e-margins">
                        <div class="ibox-title" style="background:#1979CA;">
                           <h5 style="color:#D7E1ED"><i class="fa fa-book"></i>New Book Entry Form</h5>
                           <div class="ibox-tools">
                              <a class="btn btn-success" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>library/library/library_list"><i class='fa fa-book'></i> Books List</a>
                              <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                              </a>
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
                        <div class="ibox-content col-md-12" style="padding:2px 0;">
                           <div class="panel with-nav-tabs panel-default">
                              <div class="panel-heading">
                                 <ul class="nav nav-tabs tab-menu">
                                    <li class="active">
                                       <a  href="#tab1default" data-toggle="tab">Add Book</a>
                                    </li>
                                   

                                    
                                 </ul>
                              </div>
                              <div class="panel-body">
                                 <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                       <div class="panel-body  well" id="emp_basic_info1" style="display:none;">
                                          
                                       </div>

                                       <form class="well form-horizontal" action="<?php echo base_url();?>library/library/book_add" method="post" enctype="multipart/form-data">
                                          <fieldset   style="width:900px; height:px; text-align:left;margin:auto;" >
                                             <!--  <div   style="width:900px;border:1px solid red; height:400px; text-align:center;margin:auto;" > -->
                                          <!--        <h2 style="text-align: center;color:#000;"> <u>Guardian Basic Information </u></h2> -->
                                             <div class="col-md-12" style="margin-top: 10!important;">
                                                <div class="col-md-8">
                                           
                                                   <div class="form-group  col-md-12 data_1">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class=" control-label"> <span class=""></span>Book Name</label> 
                                                      </div>
                                                      <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                         <input name="Lib_Book_Name" class="form-control" type="text" required>
                                                      </div>
                                                   </div>
                                                   <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class="control-label"><span ></span>Category</label> 
                                                      </div>
                                                      <div class="col-md-8 inputGroupContainer">

                                                          <select name="Lib_Book_cat_ID" style="text-align:left"  class="form-control selectpicker select2" ">
                                                                <option value="" ></option>
                                                                <?php foreach ($book_cat_Data as $key => $value): ?>
                                                                    <option value="<?php echo $value['Book_cat_ID']; ?>"><?php echo $value['Book_cat_Name'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                
                                                      </div>
                                                   </div>
                                                   <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class="control-label"><span ></span>Author Name</label> 
                                                      </div>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <input name="Lib_author_Name" style="margin-top:5px;" class="form-control" type="mobile">
                                                      </div>
                                                   </div>


                                                   <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class=" control-label"><span ></span>Quantity</label> 
                                                      </div>
                                                      <div class="col-md-8 inputGroupContainer">
                                                         <input name="Lib_Quantity" style="margin-top:5px;" class="form-control"  type="text">
                                                      </div>
                                                   </div>
                                  
                                                   <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class=" control-label"><span class="required" color:red;></span>Book Details </label>
                                                      </div>
                                                      <div class="col-md-8 inputGroupContainer"  style="margin-top:5px;">
                                                         <textarea name="Lib_Book_details" class="form-control"></textarea>
                                                      </div>
                                                   </div>
                                            
                                        
                                                   <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class=" control-label"><span class=""></span>Book Picture </label>
                                                      </div>
                                                      <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                         <input type="file" style="margin-top:2px;" name="image" id="imgInp" class="form-control" style="padding-top:0px;">
                                                         <br>
                                                         <img class="img-responsive" style="width:90px;height:90px;" id="blah" alt=""/>  
                                                      </div>
                                                   </div>
                                                   <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class=" control-label"> <span class=""></span>Status</label> 
                                                      </div>
                                                      <div class="col-md-8  inputGroupContainer selectContainer" style="margin-top:2px;">
                                                         <select name="Guardian_status" class="form-control selectpicker">
                                                            <option value="1" selected="selected">Available</option>
                                                            <option value="0">Unavailable</option>
                                                         </select>
                                                      </div>
                                                   </div>

                                                   <div class="form-group col-md-12">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class="col-md-2 control-label"></label>
                                                      </div>
                                                      <div class="col-md-8"><br>
                                                         <input type="reset" name="reset" class="btn btn-info btn-sm" value="Reset">
                                                         <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit">
                                                      </div>
                                                   </div>

                                                </div>
                                            
                                         
                                                
                                             </div>
                                          </fieldset>
                                          <!-- filedset -->
                                       </form>

                                    </div>
                                    <!-- end of tab1 -->
                               <div class="tab-pane fade" id="tab2default">
                                 
                                       <form id="basicform" class="well form-horizontal" action="<?php echo base_url();?>guardian/guardian/guardian_user_info_add" method="post" enctype="multipart/form-data">
                                          <fieldset style="width:600px; text-align:left;margin:auto;">
                                             <div class="form-group">
                                                <div class="col-md-4">
                                                   <label style="text-align:left" class=" control-label"> <span class="required">*</span>ID Card No.</label>  
                                                </div>
                                                <div class="col-md-6 selectContainer">
                                                   <select name="Guardian_UNQ_ID" class="form-control selectpicker select2" onchange="guardianInfo(this.value, 2)" required="required">
                                                      <option value="" title=""></option>
                                                      <?php foreach ($all_guardian_find as $key => $value): ?>
                                                      <option value="<?php echo $value['Guardian_UNQ_ID'] ?>"><?php echo $value['Guardian_UNQ_ID']; ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-4">
                                                   <label style="text-align:left" class="control-label"> <span class="required"></span>*Username</label>
                                                </div>
                                                <div class="col-md-6 inputGroupContainer" style="margin-top:5px;">
                                                      <input id="new_username" onchange="userid_keyup()" type="text" name="username" placeholder="Type your username!" class="form-control" required="required">     
                                                   <input name="user_form" type="hidden" value='2'>
                                                </div>
                                                <span id="unique_username_msg" style="color: red;"></span>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-4">
                                                   <label style="text-align:left" class="control-label"> <span class="required">*</span>Email</label>
                                                </div>
                                                <div class="col-md-6 inputGroupContainer">
                                                     <input  name="email" id="email" onchange="email_keyup()" class="form-control" type="text" required>
                                                </div>
                                                 <span id="unique_email_msg" style="color: red;"></span>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-4">
                                                   <label style="text-align:left" class="control-label"> <span class="required">*</span>Password</label>
                                                </div>
                                                <div class="col-md-6 inputGroupContainer">
                                                   <input id="password" name="password"  class="form-control"  type="password" required>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-4">
                                                   <label style="text-align:left" class="control-label"> <span class="required">*</span>Confirm Password</label> 
                                                </div>
                                                <div class="col-md-6 inputGroupContainer">
                                                   <input id="passconf"  name="passconf"  class="form-control"  type="password" required>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-4">
                                                   <label style="text-align:left" class="control-label"> <span class="required">*</span>Role</label>
                                                </div>
                                                <div class="col-md-6 selectContainer">
                                                   <select name="role" class="form-control  selectpicker  " readonly style="text-align:left">
                                                      <option value="4" selected="selected">Guardian</option>
                                                   </select>

                                                     <!--  <option value=""></option>
                                                      <?php //foreach ($role_finding as $key => $role): ?>
                                                      <option value="<?php //echo $role['id'] ?>"><?php //echo $role['role_name']; ?></option>
                                                      <?php //endforeach ?> -->
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-4">
                                                   <label style="text-align:left" class="control-label"> <span class="required">*</span>Status</label> 
                                                </div>
                                                <div class="col-md-6 selectContainer" style="margin-top:5px;">
                                                   <select name="status" class="form-control selectpicker">
                                                      <option value="">Select status</option>
                                                      <option value="1" selected="selected">Active</option>
                                                      <option value="0">Inactive</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="col-md-4">
                                                   <label style="text-align:left" class="col-md-2 control-label"></label>  
                                                </div>
                                                <div class="col-md-6"><br>
                                                   <input type="reset" name="reset" class="btn btn-info btn-sm" value="Reset">
                                                   <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit">
                                                </div>
                                             </div>
                                          </fieldset>
                                       </form>
                                    </div>
                                    <!-- end of tab2 -->
                               
                                 </div>
                                 <!--end tab-content  -->
                              </div>
                              <!--end of panel-body -->
                           </div>
                        </div>
                        <!-- end of ibox-content col-md-12 -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- end of row -->  
         </section>
      </div>
      <!-- end of page wrapper -->      
   </div>
   <!-- end of  wrapper -->
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
       document.getElementById('unique_employeeid_msg').innerHTML = "This ID Card Number is already existed!";
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
   var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=exam_name[] style='width:100%' id=exam_name></input></td><td><input type=text name=institute_name[] style='width:100%' id=institute_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=board[] style='width:100%' id=board></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd style='width:100%'></input></td></tr>";
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
   
   
   $(document).ready(function(){
   
   var count = 2;  
   $('table').on('click', '.btnAdd2', function(){  
   // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd2></input></td></tr>";
   var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=company_name[] style='width:100%' id=company_name></input></td><td><input type=text name=designation[] style='width:100%' id=designation></input></td><td><input type=text name=from[] style='width:100%' id=from></input></td><td><input type=text name=to[] style='width:100%' id=to></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd2 style='width:100%'></input></td></tr>";
   $(this).closest('table').append(tr);
   $(this).attr('value', '-');
   $(this).toggleClass('btnDelete').toggleClass('btnAdd2');
   }).on('click', '.btnDelete', function(){
   // alert($(this).closest('tr').index());
   // alert($(this).closest('tr'));
   // alert('Are you sure want to delete?');
   confirm('Are you sure want to delete?');
   $(this).closest('tr').remove();
   
   });
   
   });
   
   $(document).ready(function(){
   
   var count = 2;  
   $('table').on('click', '.btnAdd3', function(){  
   // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd3></input></td></tr>";
   var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=title_qualification[] style='width:100%' id=title_qualification></input></td><td><input type=text name=institute_name[] style='width:100%' id=institute_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd3 style='width:100%'></input></td></tr>";
   $(this).closest('table').append(tr);
   $(this).attr('value', '-');
   $(this).toggleClass('btnDelete').toggleClass('btnAdd3');
   }).on('click', '.btnDelete', function(){
   // alert($(this).closest('tr').index());
   // alert($(this).closest('tr'));
   // alert('Are you sure want to delete?');
   confirm('Are you sure want to delete?');
   $(this).closest('tr').remove();
   
   });
   
   });
   
   $(document).ready(function(){
   
   var count = 2;  
   $('table').on('click', '.btnAdd6', function(){  
   // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd3></input></td></tr>";
   var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><select name='attachment_name[]' class='form-control selectpicker'><option value='1' selected='selected'>SSC</option><option value='2'>HSC</option><option value='3'>Honrs</option><option value='4'>Masters</option></select></td><td><div class='col-md-6 inputGroupContainer'><input  name='attachment_file[]' class='form-control'  type='file' required></div></td><td><input type=button value=+ class=btnAdd6 style='width:100%'></input></td></tr>";
   $(this).closest('table').append(tr);
   $(this).attr('value', '-');
   $(this).toggleClass('btnDelete').toggleClass('btnAdd6');
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
       for (var i = 0; i <= 11; i++) {
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

<script type="text/javascript">
   function guardianInfo(guardianid, tabid){
       for (var i = 0; i <= 11; i++) {
           if(i == tabid) {
               $("#guardian_basic_info"+tabid).show(500);
           } else {
               $("#guardian_basic_info"+i).hide();
           }
       };
   
       var id = guardianid;
    // alert(id);
   var data = 'one=' + id;
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>guardian/get_guardian_data",
   data: data,
   dataType: 'json',
   success: function (data) {
       if (data) {
   for (var i = 0; i < data.length; i++) { //for each user in the json response
    // alert(data[i].Guardian_email);
   $(".name").text(data[i].Guardian_Name);
    // alert(name);
   $(".email").text(data[i].Guardian_email);
   } // for
   
   } // if
   } // success
   }); // ajax 
   }


   function guardian_uniqueid_keyup(){
       var guardian_uniqueid = $("#guardian_uniqueid").val();
   // alert(guardian_uniqueid);
   $.getJSON("<?php echo base_url();?>guardian/guardian/json_guardian_uniqueid_check?1=1&guardian_uniqueid="+guardian_uniqueid, function(data) {
   if(data.exist==1){
       document.getElementById('guardian_uniqueid_msg').innerHTML = "This guardian ID is already existed!";
       document.getElementById('guardian_uniqueid').value = "";
   }else{
       document.getElementById('guardian_uniqueid_msg').innerHTML = "<span style='color:green;'>Available</span>";
   }
   });
   }

   function userid_keyup(){
        var username = $("#new_username").val();
    // alert(username);
        $.getJSON("<?php echo base_url();?>guardian/guardian/json_unique_username_check?1=1&username="+username, function(data) {
            // alert(data.exist);
            if(data.exist==1){
                document.getElementById('unique_username_msg').innerHTML = "This Username is already existed!";
                document.getElementById('new_username').value = "";
            }else{
                document.getElementById('unique_username_msg').innerHTML = "<span style='color:green;'>Available</span>";
            }
        });
    }

   function email_keyup(){
       var email = $("#email").val();
   // alert(email);
   $.getJSON("<?php echo base_url();?>guardian/guardian/json_unique_email_check?1=1&email="+email, function(data) {
   if(data.exist==1){
       document.getElementById('unique_email_msg').innerHTML = "This Email ID is already existed!";
       document.getElementById('email').value = "";
   }else{
       document.getElementById('unique_email_msg').innerHTML = "<span style='color:green;'>Available</span>";
   }
   });
   
   }
   
</script>
