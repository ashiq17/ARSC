<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <link rel="icon" href="http://cyberdynetechnologyltd.com/arma_aims/images/logo/Fevicon.png" type="image/x-icon"/>
    <!-- <link rel="stylesheet" type="text/css" href="http://cyberdynetechnologyltd.com/arma_aims/assets/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="http://cyberdynetechnologyltd.com/arma_aims/assets/css/style.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="http://cyberdynetechnologyltd.com/arma_aims/assets/css/custom.css"> -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> 
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom_print.css"> 
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_print.css"> 
    <style type="text/css" media="print">
        @page {
            size: auto;   /* auto is the initial value */
            margin: 15mm 5mm 5mm 10mm;   /* this affects the margin in the printer settings */
        }
    </style>    <style type="text/css" media="screen">
        #print-footer {
            display: none;
        }
    </style>

    <style type="text/css" media="print">        
        
        #print-footer {
            display: none;
            position: fixed;
            bottom: 0;
            left:0;
        }
        #hide-print {
            display: none;
        }
        body {
            margin-bottom:10mm;
        }
    </style>
</head>
<body id="print-container-body">
<div style="display: none;">
    <button id="btnExport">Export to excel</button>
</div>
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

    <?php 
    $header_data = $this->Student_Model->get_header_data();
    // echo "<pre>";
    // print_r($header_data);
    // echo "</pre>";
    // die();

 ?>         <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="" style="margin-top: 30px;">
                <div style="width:50%;">
                    <img style="height: 60px!Important; width: 120px;"  src='<?php echo base_url(); ?>assets/images/headerImages/<?php echo $header_data['0']['Image'] ?>' alt="School Logo">
                </div>
                <div class="company-head" style="">
                 
                     <h5 class="text_title"><strong><?php if(!empty($header_data[0]['HeaderTitle'])){
                        echo $header_data[0]['HeaderTitle'];} ?></strong></h5>
                    <span><p class="backside_bottom"><?php if(!empty($header_data[0]['Address1'])){
                        echo $header_data[0]['Address1'];} ?></p></span>
                     <span> <p class="backside_bottom">
                     Contact No:<?php if(!empty($header_data[0]['mobile_no'])){
                        echo $header_data[0]['mobile_no'];} ?>  </p></span>
                     <span> <p class="backside_bottom">
                     Email: <?php if(!empty($header_data[0]['Email'])){
                        echo $header_data[0]['Email'];} ?> </p></span>
                    <span> <p class="backside_bottom">
                       Website: <?php if(!empty($header_data[0]['Website'])){
                        echo $header_data[0]['Website'];} ?></p>

                         <p>Print date:<?php echo date('d-m-Y') ?></p> 
                </div>
                        <div class="ibox-title" style="height:25px;">
                
                    <h6 style="font-size: 13px; margin-top: 0px;">Student Information <strong></strong></h6>
                 
            </div>
            <div class="ibox-content">
            <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 5px;">
            </table>
             <?php $info=$print_student_single_find; ?>
            <table id="tblExport" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 5px;">
                <thead class="theight">
                    <tr>
                        <th style="width: 25%; padding-left:50px; "><span style="margin-left:50px;">Student's Name</span></th>
                        <th style="width: 25%; text-align: left"><strong style="color: red; margin-left:50px;"> <?php echo $info['0']['Std_Name'] ?></strong></th>
                        <th  colspan="2"  rowspan="5" style="width:50%;"><img style="width: 130px; height: 80px; margin-left: 50px;" src="<?php echo base_url('images/student/').$info['0']['Image']?>"?> </th>
                        
                    </tr>
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Father's Name:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Std_parent'] ?></strong></th>
                     
                    </tr> 
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Address:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Std_address'] ?></strong></th>
                       
                    </tr> 
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Gender:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php if ($info['0']['Std_gender']==1) {echo 'Male';} elseif ($info['0']['Std_gender']==2) { echo 'Female';
                              }?> </strong></th>
                    </tr> 
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Date Of Birth:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Std_birthday'] ?></strong></th>
                    </tr> 
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px; ">Religion:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php if ($info['0']['Std_religion']==1) {echo 'Muslim';} elseif ($info['0']['Std_religion']==2) { echo 'Hindus';
                              }?> </strong></th>

                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Class Name:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Class_Name'] ?></strong></th>
                    </tr>
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Mobile No:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Std_parent_mobile'] ?></strong></th>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Class Roll:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Std_roll'] ?></strong></th>
                    </tr>
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Email ID:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Std_email'] ?></strong></th>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Section Name:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Section_Name'] ?></strong></th>
                    </tr>
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Academic Year:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Year_Name'] ?></strong></th>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Group Name:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Group_Name'] ?></strong></th>
                    </tr>
                    <tr>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Registration Date:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="margin-left:50px;"> <?php echo $info['0']['Std_registration_date'] ?></strong></th>
                        <th style="width: 25%; text-align: left"><span style="margin-left:50px;">Status:</span></th>
                        <th style="width: 25%; text-align: left"><strong style="color: red;margin-left:50px;"> <?php if($info['0']['Std_status']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    Active </spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                        Inactive</spane>';} ?> 
                                    </strong></th>
                    </tr>
                </thead>                      
           
            </table>
            
            <div id="hide-print">
                <table class="table table-striped table-hover dataTables-example">
                    <thead>
                        <tr>
                            <td style="font-size:8px;"><strong>&copy; 2018 Cyberdyne Technology Ltd. | Contact: 01715-515755 | www.cyberdynetechnologyltd.com</strong></td>
                        </tr>
                    </thead>
                </table>
            </div>


            </div>
        </div>
    </div>
  </div>

</div>
<script src="http://cyberdynetechnologyltd.com/arma_aims/assets/js/jquery-2.1.1.js"></script>
<script src="http://cyberdynetechnologyltd.com/arma_aims/assets/js/jquery.btechco.excelexport.js"></script>
<script src="http://cyberdynetechnologyltd.com/arma_aims/assets/js/jquery.base64.js"></script>
<script>
    var isCtrl = false;$(document).keyup(function (e) {
    if(e.which == 17) isCtrl=false;
    }).keydown(function (e) {
        if(e.which == 17) isCtrl=true;
        if(e.which == 69 && isCtrl == true) {
            $("#tblExport").btechco_excelexport({
                containerid: "tblExport"
               , datatype: $datatype.Table
            });
        return false;
     }
    });
</script>

</body>
</html>