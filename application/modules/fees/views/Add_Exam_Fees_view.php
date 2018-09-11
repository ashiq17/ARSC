<?php $this->load->view('dashboard/common/header'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/dashboard/js/ckeditor/ckeditor.js"></script>

<link href="<?php echo base_url(); ?>assets/dashboard/css/upload.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/dashboard/css/upload1.css" rel="stylesheet">
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
        <?php $this->load->view('dashboard/common/left_nav'); ?>
        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav'); ?>
            </div>
            <section id="main-content">
                <div class="row-fluid">
                    <div class="">
                         <div class="wrapper-content">
                         <div class="ibox float-e-margins">
                            <div class="ibox-title" style="background:#1979ca; color:">
                                <h5 style="color:#ffffff;"><i class="fa fa-plus"></i> Fees Generate</h5> 
                                <div class="ibox-tools">
                                    <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url(); ?>fees/fees/add_exam_fees_list"><i class='fa fa-eye'></i> Fees List</a>

                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <?php
                            if ($this->session->has_userdata('message')) {
                                ?>          
                                <div class="alert alert-success text-center successMessage">
                                    <strong><?php echo $this->session->message; ?></strong>
                                </div>

                                <?php
                                $this->session->unset_userdata('message');
                            } elseif ($this->session->has_userdata('error_msg')) {
                                ?> 

                                <div class="alert alert-danger text-center successMessage">
                                    <strong><?php echo $this->session->error_msg; ?></strong> 
                                </div>
                                <?php
                                $this->session->unset_userdata('error_msg');
                            }
                            ?>
                            <div class="ibox-content col-md-12" style="padding:2px 0;">
                                <div class="panel with-nav-tabs panel-default">

                                    <div class="panel-body">
                                        <div class="tab-content">

                                            <!-- <div class="tab-pane fade " id="tab1default">                   -->
                                            <div class="tab-pane fade in active" id="tab10default">

                                                <form id="basicform" class=" form-horizontal" action="<?php echo base_url(); ?>fees/fees/exam_fees_add" method="post" enctype="multipart/form-data">
                                                    <h4 align="center" style="margin-top: 
                                                        0px!important;">Fees Generate</h4>
                                                    <fieldset style="width:900px; height:px; text-align:right;margin:auto;">

                                                        <div class="form-group panel" style="padding: 0px 0px;">


                                                            <div class="row" style="padding-top: 5px;">
                                                                <div class="col-md-6">
                                                                    <label style="text-align:right;" class="col-md-4 control-label"> Medium<span class="required" ; style="color:red;">*</span></label>  
                                                                    <div class="col-md-8 selectContainer">
                                                                        <select name="Invoice_Medium_ID" class="form-control"  required="required">
                                                                            <option value="1" selected>Bangla</option>
                                                                            <option value="2">English</option>
                                                                        </select>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-6">
                                                                    <label style="text-align:right;" class="col-md-4 control-label"> Shift<span class="required" ; style="color:red;">*</span></label>  
                                                                    <div class="col-md-8 selectContainer">
                                                                        <select name="Invoice_Shift_ID" class="form-control"  required="required">
                                                                            <option value="1" selected>Day</option>
                                                                            <option value="2">Morning</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row" style="padding-top: 5px;">
                                                                <div class="col-md-6">
                                                                    <label style="text-align:right;" class="col-md-4 control-label"> Class<span class="required" ; style="color:red;">*</span></label>  
                                                                    <div class="col-md-8 selectContainer">
                                                                        <select name="Invoice_Class_ID" class="form-control selectpicker select2" onchange="employyeInfo(this.value, 10)" required="required">
                                                                            <option value=""></option>
                                                                            <option value="">Select an option</option>
                                                                            <?php foreach ($Class_Data as $key => $value): ?>
                                                                                <option value="<?php echo $value['Class_ID'] ?>"><?php echo $value['Class_Name']; ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label style="text-align:right;" class="col-md-4 control-label"> Section<span class=""></span></label>  
                                                                    <div class="col-md-8 selectContainer">
                                                                        <select name="Invoice_Section_ID" class="form-control selectpicker select2" onchange="employyeInfo(this.value, 10)">
                                                                            <option value=""></option>
                                                                            <option value="">Select an option</option>
                                                                            <?php foreach ($Section_Data as $key => $value): ?>
                                                                                <option value="<?php echo $value['Section_ID'] ?>"><?php echo $value['Section_Name']; ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="row" style="padding-top: 5px;">
                                                                <div class="col-md-6">
                                                                    <label style="text-align:right;" class="col-md-4 control-label"> Invoice Number <span class="" ; style="color:red;">*</span></label>  
                                                                    <div class="col-md-8 selectContainer">
                                                                        <input type="text" class="form-control" name="Invoice_Number">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label style="text-align:right;" class="col-md-4 control-label"> Invoice Type <span class="required" ; style="color:red;">*</span></label>  
                                                                    <div class="col-md-8 selectContainer">
                                                                        <select name="Invoice_Type_ID" class="form-control selectpicker select2" onchange="employyeInfo(this.value, 10)">
                                                                            <option value=""></option>
                                                                            <option value="">Select an option</option>
                                                                            <?php foreach ($Invoice_type_Data as $key => $value): ?>
                                                                                <option value="<?php echo $value['Invoice_type_ID'] ?>"><?php echo $value['Invoice_type_Name']; ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> 

                                                            <div class="row" style="padding-top: 5px;">
                                                                <div class="col-md-6">
                                                                    <label style="text-align:right;" class="col-md-4 control-label"> Invoice Month <span class=""></span></label>  
                                                                    <div class="col-md-8 selectContainer">
                                                                        <select name="Invoice_Month" class="form-control selectpicker select2">
                                                                            <option value=""></option>
                                                                            <option value="">Select an option</option>
                                                                            <option value="1">January</option>
                                                                            <option value="2">February</option>
                                                                            <option value="3">March</option>
                                                                            <option value="4">April</option>
                                                                            <option value="5">May</option>
                                                                            <option value="6">June</option>
                                                                            <option value="7">July</option>
                                                                            <option value="8">August</option>
                                                                            <option value="9">September</option>
                                                                            <option value="10">Octobor</option>
                                                                            <option value="11">November</option>
                                                                            <option value="12">December</option>
                                                                        </select> 
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label style="text-align:right;" class="col-md-4 control-label"> Invoice Date<span class="required" ; style="color:red;">*</span></label>  
                                                                    <div class="col-md-8 selectContainer">
                                                                        <div class="input-group  date">
                                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="data_1"  type="text" name="Invoice_Date" class="data_1 form-control ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group panel" style="padding: 0px 0px;">

                                                            <div class="ibox-title_1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 3px;">
                                                                <h5 style="text-align: center; font-size: 15px; padding-top:0px; color:green;">Add More Fees Category</h5>
                                                            </div>
                                                            <div class="ibox-content_1" style="overflow:scroll; height: 200px;">
                                                                <div class="table-responsive">
                                                                    <div id="addButton">
                                                                        <input style="background-color: #0a838b; border-radius: 2px; padding-right: 15px; border: none; color: white;" type="button" value="Add row" class="plusbtn" />
                                                                        <!-- <input style="background-color: red; color: white;" type="button" value="Remove" class="minusbtn" /> -->
                                                                    </div>

                                                                    <table id="table_row_delete" class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="text-align:center; width: 3%;">SL#</th>
                                                                                <th style="text-align:center; width: 20%;">Category Name</th>

                                                                                <th style="text-align:center; width: 12%;">Amount(BDT)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="acctheight" id="fixedTbody">
                                                                            <tr>
                                                                                <td style="">1</td>
                                                                        <input type="hidden" name="purposeHead[]" id="purposeHead" />                                                    
                                                                        <td>
                                                                            <select id="accHead" name="fees_cat_id[]" class="form-control selectpicker select2">
                                                                                <option></option>
                                                                                <option>Select an option</option>
                                                                                <?php foreach ($Fee_categoryData as $key => $value): ?>
                                                                                    <option value="<?php echo $value['Add_fee_ID'] ?>"><?php echo $value['Add_fee_Name']; ?></option>
                                                                                <?php endforeach ?>
                                                                            </select>  
                                                                        </td>


                                                                        <td>
                                                                            <input class="form-control" id="amount" name="amount[]" style="width: 100%" type="text" value="" >
                                                                            <input type="hidden" value="0" id="amount_old">
                                                                        </td>
                                                                        </tr>
                                                                        </tbody>
                                                                        <tbody class="test acctheight">
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>  

                                                            <div class="ibox1-content" style="padding: 0px 0px;">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6"></div>
                                                                        <div class="col-md-6">
                                                                            <label class="col-md-8" style="" id="balanceLabel" for="">Total Amount =</label>
                                                                            <div class="col-md-4" style="padding: 0px 0px 2px 0px;">
                                                                                <input type="number" value="0" name="total_amount" id="total_amount" class="form-control" readonly="readonly" style="text-align: left;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                      
                                                            </div>

                                                        </div>
                                                        </div>


                                                        <div class="form-group" style="padding: 5px 0px; ">
                                                            <div class="col-md-4">
                                                            </div>
                                                            <div class="col-md-6" style="text-align:left">
                                                                <input type="reset" name="reset" class="btn btn-info btn-sm" value="Reset">
                                                                <input type="submit" name="submit" class="btn btn-primary btn-sm" style="width: 200px;" value="Save">
                                                            </div>
                                                        </div>

                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of tab10 -->
                            </div><!--end tab-content  -->
                        </div> <!--end of panel-body -->
                    </div>
                </div> <!-- end of ibox-content col-md-12 -->
        </div>
    </div>
</div>
</div><!-- end of row -->  
</section>  
</div>   <!-- end of page wrapper -->      
</div><!-- end of  wrapper -->
</h4>

<?php $this->load->view('dashboard/common/footer_js'); ?>
</body>
</html>


<script type="text/javascript">

    $(document).ready(function () {
        $('#amount').bind('input', function () {
            var inputvalue = parseFloat($(this).val()); // get the current value of the input field.
            //alert(inputvalue);
            currValue = parseFloat($('#total_amount').val());
            oldValue = parseFloat($('#amount_old').val());

            if (isNaN(inputvalue)) {
                inputvalue = 0;
            }
            if (isNaN(currValue)) {
                currValue = 0;
            }
            if (isNaN(oldValue)) {
                oldValue = 0;
            }

            newvalue = currValue - oldValue;
            setValue = newvalue + inputvalue;
            $('#total_amount').val((setValue).toFixed(2));
            $('#amount_old').val((inputvalue).toFixed(2));
        });
    });



    function remove_smstr(remove_tr_id) {
        $("#smstr_" + remove_tr_id).remove();
    }

    $(document).ready(function () {

        var sl = 2;
        $('.plusbtn').click(function () {
            $(".test").append('<tr id="tr_' + sl + '"><td>' + sl + '<span style="padding-left: 0%; cursor: pointer;" onclick="remove_tr(' + sl + ')" class="glyphicon glyphicon-remove" aria-hidden="true"></span></td><input type="hidden" name="purposeHead[]" id="purposeHead' + sl + '" /></td><td><select id="accHead" name="fees_cat_id[]" class="form-control selectpicker select2"><option value="" title="">Select an option</option><?php foreach ($Fee_categoryData as $key => $value): ?><option value="<?php echo $value['Add_fee_ID'] ?>"><?php echo $value['Add_fee_Name']; ?></option><?php endforeach ?></select></td><td><input id="amount' + sl + '" class="form-control" name="amount[]" style="width: 100%" type="text" value="" required><input type="hidden" value="0" id="amount_old' + sl + '"></td></tr>');


            $('#amount' + sl).bind('input', function () {
                var inputvalue = parseFloat($(this).val()); // get the current value of the input field.
                var inputIdName = $(this).attr('id');
                var newsl = inputIdName.replace("amount", "");
                //alert(inputvalue);                    

                currValue = parseFloat($('#total_amount').val());
                oldValue = parseFloat($('#amount_old' + newsl).val());

                if (isNaN(inputvalue)) {
                    inputvalue = 0;
                }
                if (isNaN(currValue)) {
                    currValue = 0;
                }
                if (isNaN(oldValue)) {
                    oldValue = 0;
                }
                //alert(newsl);
                newvalue = currValue - oldValue;
                setValue = newvalue + inputvalue;
                $('#total_amount').val((setValue).toFixed(2));
                $('#amount_old' + newsl).val((inputvalue).toFixed(2));
                //$('#amount_old'+newsl).val(inputvalue);
            });
            sl++;
        });
    });
    function remove_tr(remove_tr_id) {
        var value = parseFloat($('#amount' + remove_tr_id).val());
        var old_total_amount = $('#total_amount').val();
        if (isNaN(value)) {
            value = 0;
        }
        if (isNaN(old_total_amount)) {
            old_total_amount = 0;
        }
        setValue = old_total_amount - value;
        $('#total_amount').val((setValue).toFixed(2));
        $("#tr_" + remove_tr_id).remove();
        //rowCount-1;
        //alert(remove_tr_id);
    }
</script>


<script type="text/javascript">



    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[0].cells.length;

        for (var i = 0; i < colCount; i++) {

            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch (newcell.childNodes[0].type) {
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

            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (null != chkbox && true == chkbox.checked) {
                    if (rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }


            }
        } catch (e) {
            alert(e);
        }
    }

    $(document).ready(function () {
        setTimeout(function () {
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

        $("#imgInp").change(function () {
            readURL(this);
        });
    });



    $(document).ready(function () {

        var count = 2;
        $('table').on('click', '.btnAdd', function () {
            // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd></input></td></tr>";
            var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) + "' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=exam_name[] style='width:100%' id=exam_name></input></td><td><input type=text name=institute_name[] style='width:100%' id=institute_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=board[] style='width:100%' id=board></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd style='width:100%'></input></td></tr>";
            $(this).closest('table').append(tr);
            $(this).attr('value', '-');
            $(this).toggleClass('btnDelete').toggleClass('btnAdd');
        }).on('click', '.btnDelete', function () {
            // alert($(this).closest('tr').index());
            // alert($(this).closest('tr'));
            // alert('Are you sure want to delete?');
            confirm('Are you sure want to delete?');
            $(this).closest('tr').remove();

        });

    });


    $(document).ready(function () {

        var count = 2;
        $('table').on('click', '.btnAdd2', function () {
            // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd2></input></td></tr>";
            var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) + "' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=company_name[] style='width:100%' id=company_name></input></td><td><input type=text name=designation[] style='width:100%' id=designation></input></td><td><input type=text name=from[] style='width:100%' id=from></input></td><td><input type=text name=to[] style='width:100%' id=to></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd2 style='width:100%'></input></td></tr>";
            $(this).closest('table').append(tr);
            $(this).attr('value', '-');
            $(this).toggleClass('btnDelete').toggleClass('btnAdd2');
        }).on('click', '.btnDelete', function () {
            // alert($(this).closest('tr').index());
            // alert($(this).closest('tr'));
            // alert('Are you sure want to delete?');
            confirm('Are you sure want to delete?');
            $(this).closest('tr').remove();

        });




    });

    $(".select2").select2({placeholder: "Select an option", maximumSelectionSize: 6});

    $(document).ready(function () {

        var count = 2;
        $('table').on('click', '.btnAdd3', function () {
            // var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) +"' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text id=exam_name></input></td><td><input type=text id=total></input></td><td><input type=button value=+ class=btnAdd3></input></td></tr>";
            var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) + "' readonly=readonly style='border:none;text-align:center;width:100%'/></td><td><input type=text name=title_qualification[] style='width:100%' id=title_qualification></input></td><td><input type=text name=institute_name[] style='width:100%' id=institute_name></input></td><td><input type=text name=result[] style='width:100%' id=resultt></input></td><td><input type=text name=passing_year[] style='width:100%' id=passing_year></input></td><td><input type=text name=note[] style='width:100%' id=note></input></td><td><input type=button value=+ class=btnAdd3 style='width:100%'></input></td></tr>";
            $(this).closest('table').append(tr);
            $(this).attr('value', '-');
            $(this).toggleClass('btnDelete').toggleClass('btnAdd3');
        }).on('click', '.btnDelete', function () {
            confirm('Are you sure want to delete?');
            $(this).closest('tr').remove();

        });

    });

    $(document).ready(function () {

        var count = 2;
        $('table').on('click', '.btnAdd6', function () {

            var tr = "<tr><td><input type=text id=sl value='" + count + "' name='" + (count++) + "' readonly=readonly style='border:none;text-align:center;width:100%'/></td>"
                    + "<td><select name='fees_cat_id[]' class='form-control selectpicker select2'>"
                    + "<option>Select an option</option>"
                    + "<?php foreach ($Fee_categoryData as $key => $value) { ?>"
                        + "<option value='<?php echo $value['Add_fee_ID'] ?>'><?php echo $value['Add_fee_Name']; ?></option>"
                        + "<?php } ?>"
                    + "</select></td>"
                    + "<td><div class='col-md-6 col-md-offset-4  inputGroupContainer'><input  name='fees_amount[]' class='form-control'  type='text' required id='amount" + count + "'><input type='hidden' value='0' id='amount_old" + count + "'></div></td><td><input type='button' value='+' class='btnAdd6' style='width:100%'></input></td></tr>";


            $(this).closest('table').append(tr);
            $(this).attr('value', '-').attr('onclick', 'remove_tr(' + count + ')');
            $(this).toggleClass('btnDelete').toggleClass('btnAdd6');

            $('#amount' + count).bind('input', function () {
                var inputvalue = parseFloat($(this).val()); // get the current value of the input field.
                var inputIdName = $(this).attr('id');
                var newsl = inputIdName.replace("amount", "");
                //alert(inputvalue);                    

                currValue = parseFloat($('#total_amount').val());
                oldValue = parseFloat($('#amount_old' + newsl).val());

                if (isNaN(inputvalue)) {
                    inputvalue = 0;
                }
                if (isNaN(currValue)) {
                    currValue = 0;
                }
                if (isNaN(oldValue)) {
                    oldValue = 0;
                }
                //alert(newsl);
                newvalue = currValue - oldValue;
                setValue = newvalue + inputvalue;
                $('#total_amount').val((setValue).toFixed(2));
                $('#amount_old' + newsl).val((inputvalue).toFixed(2));
                //$('#amount_old'+newsl).val(inputvalue);
            });
            count++;
        }).on('click', '.btnDelete', function () {
            confirm('Are you sure want to delete?');

            $(this).closest('tr').remove();


        });

    });


    function remove_tr(remove_tr_id) {
        var value = parseFloat($('#amount' + remove_tr_id).val());
        var old_total_amount = $('#total_amount').val();
        if (isNaN(value)) {
            value = 0;
        }
        if (isNaN(old_total_amount)) {
            old_total_amount = 0;
        }
        setValue = old_total_amount - value;
        $('#total_amount').val((setValue).toFixed(2));
        $("#tr_" + remove_tr_id).remove();
        //rowCount-1;
        //alert(remove_tr_id);
    }


</script>




<script type="text/javascript">


    $(document).ready(function () {
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

    $("#date2").on('change keydown paste input', function () {
        var ONE_DAY = 1000 * 60 * 60 * 24;
        $('#date1').datepicker();
        $('#date2').datepicker();

        var diff = $('#date2').datepicker("getDate") - $('#date1').datepicker("getDate");
        var leave_duration = diff / ONE_DAY + 1;
        $('#leave_duration').val(leave_duration);
    });




    function gradeDetails(payGradeID) {
        // alert(gradeID);
        var payGradeID = payGradeID;
        var data = 'one=' + payGradeID;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>employee/get_grade_details",
            data: data,
            dataType: 'json',
            success: function (data) {
                if (data) {
                    // alert(data[0].payGrade_gross);
                    for (var i = 0; i < data.length; i++) { //for each user in the json response
                        // $(".output-id").val(data[i].id);
                        // $("#payGrade_name").text(data[i].payGrade_name);
                        $(".payGrade_gross").val(data[i].payGrade_gross);
                        $(".payGrade_basic").val(data[i].payGrade_basic);
                        $(".payGrade_houseRent").val(data[i].payGrade_houseRent);
                        $(".payGrade_mobile").val(data[i].payGrade_mobile);
                        $(".payGrade_conveyance").val(data[i].payGrade_conveyance);
                        $(".payGrade_recreationBenefits").val(data[i].payGrade_recreationBenefits);
                        $(".payGrade_pfAmountCompanyCont").val(data[i].payGrade_pfAmountCompanyCont);
                        // $(".name").text(data[i].full_name);
                    } // for

                } // if
            } // success
        }); // ajax 
    }
</script>




