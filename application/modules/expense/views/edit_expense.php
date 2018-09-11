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
                        <div class="ibox-title" style="background:#1979CA">
                           <h5 style="color:#D7E1ED"><i class="fa fa-user-plus"></i>Expense Update Info</h5>
                           <div class="ibox-tools">
                              <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>Expense/Expense/expense_list"><i class='fa fa-user'></i> Expense List</a>
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
                                    <li class="active"><a href="#tab1default" data-toggle="tab">Expense Update Info</a></li>



                                 </ul>
                              </div>
                              <div class="panel-body">
                                 <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                       <div class="panel-body  well" id="emp_basic_info1" style="display:none;">
                                       </div>
                                       <form class="well form-horizontal" action="<?php echo base_url();?>Expense/Expense/expense_update" method="post" enctype="multipart/form-data">
                                          <fieldset   style="width:900px; height:px; text-align:center;margin:auto;" >
                                             <h2 style="text-align: center;color:#000;"> <u>Expense Information Edit </u></h2>
                                             <div class="col-md-12" style="text-align: left;">
                                                <div class="col-md-8">



                                                   <div class="form-group col-md-12" style="margin-top:5px;">
                                                      <div class="col-md-4">
                                                         <label style="text-align:left" class="control-label"> <span class="required"></span>Expense Category</label>
                                                      </div>
                                                      <div class="col-md-8 selectContainer" style="margin-top:5px;">
                                                         <select name="Expense_cat_ID" style="text-align:left" class="form-control selectpicker select2">
                                                            <?php foreach ($expense_cat_Data as $key => $value):
                                                            ?>
                                                            <option value="<?php echo $value['expense_cat_ID'] ?>" <?php if($edit_expense_finding['0']['Expense_cat_ID']==$value['expense_cat_ID']) { echo "selected";}?>><?php echo $value['expense_cat_Name'] ?></option>

                                                         <?php endforeach ?>
                                                      </select>
                                                   </div> 
                                                </div>

                                                <div class="form-group col-md-12">
                                                   <div class="col-md-4">
                                                      <label style="text-align:left" class=" control-label"><span ></span>Amount</label> 
                                                   </div>
                                                   <div class="col-md-8 inputGroupContainer">
                                                       <input value="<?php echo $edit_expense_finding[0]['Expense_ID'] ?>" name="Expense_ID" type="hidden">
                                                      <input value="<?php if (!empty($edit_expense_finding[0]['Expense_Amount'])) {
                                                         echo $edit_expense_finding[0]['Expense_Amount'] ;}?>" 
                                                         name="Expense_Amount"  class="form-control" type="text">
                                                      </div>
                                                   </div>   





                                                           <div class="form-group col-md-12 data_1 ">
                                    <div class="col-md-4">
                                       <label style="text-align:left" class="control-label"> <span class="required"></span>Date</label>
                                    </div>
                                    <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                       <div class="input-group date">
                                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                          <input id="date1" value="<?php if (!empty($edit_expense_finding[0]['Expense_Date'])) {
                                          echo $edit_expense_finding[0]['Expense_Date'] ;}?>" name="Expense_Date" class="start_date form-control"  type="text" >
                                       </div>
                                    </div>
                                 </div>

                                                      <div class="form-group col-md-12">
                                                         <div class="col-md-4">
                                                            <label style="text-align:left" class="control-label">Notes</label> 
                                                         </div>
                                                         <div class="col-md-8 inputGroupContainer" style="margin-top:5px;">
                                                            <textarea name="Expense_notes" class="form-control">
                                                               <?php if (!empty($edit_expense_finding[0]['Expense_notes'])) {
                                                                  echo $edit_expense_finding[0]['Expense_notes'] ;}?>
                                                               </textarea>
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