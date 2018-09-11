<!DOCTYPE html>
<html>
<head>
    <title>Teacher Information</title>
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
    $header_data = $this->Teacher_Model->get_header_data();
    // echo "<pre>";
    // print_r($header_data);
    // echo "</pre>";
    // die();

 ?> 
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="" style="">
                    <div style="width:50%;">
                    <img style="height: 60px; width: 120px; margin: 5px 0 0 5px;" src="<?php  echo base_url(); ?>assets/images/logo.png">
                </div>
                <div class="company-head">
               
                     <h5 class="text_title"><strong><?php if(!empty($header_data[0]['HeaderTitle'])){
                        echo $header_data[0]['HeaderTitle'];} ?></strong></h5>
                    <span><p class="backside_bottom"><?php if(!empty($header_data[0]['Address1'])){
                        echo $header_data[0]['Address1'];} ?></p></span> 
                        <span><p class="backside_bottom"><?php if(!empty($header_data[0]['Address2'])){
                        echo $header_data[0]['Address2'];} ?></p></span>
                     <span> <p class="backside_bottom">
                     Contact No:<?php if(!empty($header_data[0]['MobileNo'])){
                        echo $header_data[0]['MobileNo'];} ?>  </p></span>
                     <span> <p class="backside_bottom">
                     Email: <?php if(!empty($header_data[0]['Email'])){
                        echo $header_data[0]['Email'];} ?> </p></span>
                    <span> <p class="backside_bottom">
                       Website: <?php if(!empty($header_data[0]['Website'])){
                        echo $header_data[0]['Website'];} ?></p>

                         <p>Print date:<?php echo date('d-m-Y') ?></p> 
                                
                </div>
                        <div class="ibox-title" style="height:25px;">
                
                    <h6 style="font-size: 13px; margin-top: 0px;">Teacher Information <strong></strong></h6>
                 
            </div>
            <div class="ibox-content">
            <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 5px;">
            </table>
            <table id="tblExport" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 5px;">
              
                 <thead class="theight">
                   
                </thead>
                <thead class="theight">
                   
                    <tr>
                        <th style="width: 2%;  text-align: center"><span style="margin-left:0px; ">#SL</span></th> 
                        <th style="width: 14%; text-align: center"><span style="margin-left:0px; ">Teacher's Name</span></th> 
                        <th style="width: 10%; text-align: center"><span style="margin-left:0px; ">Father's Name</span></th>
                        <th style="width: 6%; text-align: center"><span style="margin-left:0px; ">Teacher's ID</span></th>
                        <th style="width: 6%;  text-align: center"><span style="margin-left:0px; ">Mobile No</span></th> 
                        <th style="width: 6%;  text-align: center"><span style="margin-left:0px; ">Designation </span></th> 
                        <th style="width: 4%;  text-align: center"><span style="margin-left:0px; ">Shift</span></th>
                        <th style="width: 4%;  text-align: center"><span style="margin-left:0px; ">Medium</span></th>
                        <th style="width: 6%;  text-align: center"><span style="margin-left:0px; ">Joining Date  </span></th>
                        <th style="width: 4%;  text-align: center"><span style="margin-left:0px; ">Religion</span></th>
                        <th style="width: 4%;  text-align: center"><span style="margin-left:0px; ">Gender</span></th> 
                        <th style="width: 4%;  text-align: center"><span style="margin-left:0px; ">Marital Status</span></th>
                        <th style="width: 4%;  text-align: center"><span style="margin-left:0px; ">Blood Group </span></th>
                        <th style="width: 4%;  text-align: center"><span style="margin-left:0px; ">National ID</span></th>
                        <th style="width: 6%;  text-align: center"><span style="margin-left:0px; ">Date Of  Birth </span></th>
                        <th style="width: 6%;  text-align: center"><span style="margin-left:0px; ">Email ID</span></th> 
                        <th style="width: 10%;  text-align: center"><span style="margin-left:0px;">Address</span></th> 
                        
                    </tr>
                    </thead> 
                    <tbody class="theight">

                        
                     <?php 
                      $sl=0;
                     foreach ($print_teacher_all_find as $key => $info):
                    
                      $sl++;
                      ?>
                       
                    <tr>
                    <td style="width: 2%;  text-align:center"><strong style="margin-left:0px;"> <?php echo $sl ;?></strong></td>
                    <td style="width: 14%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_Name'] ?></strong></td>
                    <td style="width: 10%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_FathersName'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_UniqueID'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_mobile'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['DesignationName'] ?></strong></td>
                    <td style="width: 4%; text-align:center"><strong style="margin-left:0px;"><?php if ($info['Teacher_shift']==1) {echo 'Day';} elseif ($info['Teacher_shift']==2) { echo 'Morning';
                              }?></strong></td>
                    <td style="width: 4%; text-align:center"><strong style="margin-left:0px;"><?php if ($info['Teacher_medium']==1) {echo 'Bangla';} elseif ($info['Teacher_medium']==2) { echo 'Englsih';
                              }?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_joining_date'] ?></strong></td>
                         
                    <td style="width: 4%; text-align:center"><strong style="margin-left:0px;"><?php if ($info['Teacher_religion']==1) {echo 'Muslim';} elseif ($info['Teacher_religion']==2) { echo 'Hindus';
                              }?></strong></td>
                    <td style="width: 4%; text-align:center"><strong style="margin-left:0px;"><?php if ($info['Teacher_gender']==1) {echo 'Male';} elseif ($info['Teacher_gender']==2) { echo 'Female';
                              }?></strong></td>
                     <td style="width: 4%; text-align:center"><strong style="margin-left:0px;"><?php if ($info['Teacher_marital_status']==1) {echo 'Married';} elseif ($info['Teacher_marital_status']==2) { echo 'Unmarried';
                              }?></strong></td>
                     <td style="width: 4%; text-align:center"><strong style="margin-left:0px;"><?php 
                     if ($info['Teacher_BloodGroup']==1) {echo ' A +';} 
                     if ($info['Teacher_BloodGroup']==2) { echo 'A -';}
                     if ($info['Teacher_BloodGroup']==3) { echo 'B +';}
                     if ($info['Teacher_BloodGroup']==4) { echo 'B -';}
                     if ($info['Teacher_BloodGroup']==5) { echo 'AB +';}
                     if ($info['Teacher_BloodGroup']==6) { echo 'AB -';}
                     if ($info['Teacher_BloodGroup']==7) { echo 'O +';}
                     if ($info['Teacher_BloodGroup']==8) { echo 'O -';}
                     ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_NationalID'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_DateOfBirth'] ?></strong></td>
                   
                    <td style="width: 6%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_email'] ?></strong></td>
                    <td style="width: 10%; text-align:center"><strong style="margin-left:0px;"><?php echo $info['Teacher_address'] ?></strong></td>
                    </tr> 
                       <?php endforeach ?>
                </tbody>            
           
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
