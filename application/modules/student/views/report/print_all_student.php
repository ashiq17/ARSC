<!DOCTYPE html>
<html>
<head>
    <title>Student Basic Information</title>
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

    <?php $info=$print_student_all_find;?>
    
      <?php 
        if(empty($info)){
            $this->session->set_userdata('error_msg',' Sorry! No Data Found!');
            redirect(base_url().'student/student/student_attendance_report');
           }
     ?> 

        <?php 
    $header_data = $this->Student_Model->get_header_data();
    // echo "<pre>";
    // print_r($header_data);
    // echo "</pre>";
    // die();

 ?> 
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="" style="margin-top: 10px;">
                <div style="width:50%;">
                    <img style="height: 70px!Important; width: 80px;"  src='<?php echo base_url(); ?>assets/images/headerImages/<?php echo $header_data['0']['Image'] ?>' alt="School Logo">
                </div>
                <div class="company-head" style="">
                 
                     <h2 class="text_title"><strong><?php if(!empty($header_data[0]['HeaderTitle'])){
                        echo $header_data[0]['HeaderTitle'];} ?></strong></h2>
                    <span><p class="backside_bottom"><?php if(!empty($header_data[0]['Address1'])){
                        echo $header_data[0]['Address1'];} ?></p></span> 

                    
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
                
                    <h6 style="font-size: 13px; margin-top: 0px;">Student  Basic Information <strong></strong></h6>
                 
            </div>
            <div class="ibox-content">
            <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 15px;">
              <thead class="theight">
                    <tr>
                        <th style="width:30%;text-align:center;vertical-align: middle;"> <span style="padding-left: 25px; margin-right: 0px"> Class</span>  <span style="margin-right: 5px; margin-left: 5px;"> :</span> <strong><?php echo $info['0']['Class_Name']?></strong> 
                        </th>
                        <th style="width:30%;text-align:center;vertical-align: middle;"> <span style="margin-left: 10px; margin-right: 0px"> Medium   <span style="margin-right: 5px;  margin-left: 5px;"> :</span>  
                          <strong>

                            <?php if (!empty($info['0']['Std_Attendance_medium_ID']) && $info['0']['Std_Attendance_medium_ID']==1) {echo 'BANGLA';}
                        elseif (!empty($info['0']['Std_Attendance_medium_ID']) && $info['0']['Std_Attendance_medium_ID']==2) {echo 'ENGLISH';}
                              ?>
                        </strong> 
                        </th>
                        <th style="width:40%;text-align:center;vertical-align: middle;">Shift <span style="margin-right: 5px;"> :</span> 
                            <strong>
                                <?php if (!empty($info['0']['Std_Attendance_shift_ID']) && $info['0']['Std_Attendance_shift_ID']==1) {echo 'DAY';}
                        elseif (!empty($info['0']['Std_Attendance_shift_ID']) && $info['0']['Std_Attendance_shift_ID']==2) {echo 'MORNING';}
                              ?>
                           </strong>
                        </th>
                        
                    </tr>
                    <tr>
                        <th style="width:30%;text-align:center;vertical-align: middle;  text-decoration: none;"><span style="margin-left: 0px; margin-right: 0px"> Group</span>   <span style="margin-left: 2px; margin-right: 4px;  "> :</span> 
                          <strong>
                             <?php  if (!empty($info['0']['Group_Name'])) {
                            echo $info['0']['Group_Name'];} ?>
                            </strong> 
                        </th>
                        <th style="width:30%;text-align:center;vertical-align: middle;"><span style="padding-left: 20px; margin-right: 0px"> Section</span>   <span style="margin-right: 5px;  margin-left: 8px;"> :</span> <strong>
                           <?php  if (!empty($info['0']['Section_Name'])) {
                            echo $info['0']['Section_Name'];} ?>
                            </strong> </th> 
                        <th style="width:40%;text-align:center;vertical-align: middle;"></th>
                        
                    </tr>
                    
                </thead>
            </table>
            <table id="tblExport" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 5px;">
              
                 <thead class="theight">
                   
                </thead>
                <thead class="theight">
                   
                    <tr>
                        <th style="width: 2%;  text-align: center"><span style="padding-left:1px; ">#SL</span></th> 
                        <th style="width: 20%; text-align: left"><span style="padding-left:1px; ">Student Name</span></th> 
                        <th style="width: 6%; text-align: center"><span style="padding-left:1px; ">Student ID</span></th> 
                        <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Class </span></th>
                        <th style="width: 6%;  text-align: center"><span style="padding-left:1px; "> Class Roll</span></th>
                        <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Section</span></th>
                        <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Shift </span></th>
                        <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Medium </span></th>
                        <!-- <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Group</span></th>  -->
                        <th style="width: 10%; text-align: left"><span style="padding-left:1px; ">Father's Name</span></th>
                       
                        <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Mobile No</span></th> 
                        <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Email ID</span></th> 
                        <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Address</span></th> 
                        
                          <th style="width: 6%;  text-align: center"><span style="padding-left:1px; ">Date Of Birth </span></th> 
                        <th style="width: 4%;  text-align: center"><span style="padding-left:1px; ">Religion</span></th>
                        <th style="width: 4%;  text-align: center"><span style="padding-left:1px; ">Gender</span></th>
                        
                    </tr>
                    </thead> 
                    <tbody class="theight">

                        
                     <?php 
                      $sl=0;
                     foreach ($print_student_all_find as $key => $info):
                    
                      $sl++;
                      ?>
                       
                    <tr>
                    <td style="width: 2%;  text-align:center"><strong style="padding-left:1px;"> <?php echo $sl ;?></strong></td>
                    <td style="width: 20%; text-align:left"><strong style="padding-left:1px;"><?php echo $info['Std_Name'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['STD_UNQ_ID'] ?></strong></td>
                     <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['Class_Name'] ?></strong></td>
                      <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['Std_roll'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['Section_Name'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php if ($info['Std_shift_ID']==1) {echo 'Day';} elseif ($info['Std_shift_ID']==2) { echo 'Morning';
                              }?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php if ($info['Std_medium_ID']==1) {echo 'Bangla';} elseif ($info['Std_medium_ID']==2) { echo 'English';
                              }?></strong></td>
                   <!--  <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['Group_Name'] ?></strong></td> -->
                   
                    <td style="width: 10%; text-align:left"><strong style="padding-left:1px;"><?php echo $info['Std_parent'] ?></strong></td>
                  
                    <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['Std_parent_mobile'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['Std_email'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['Std_address'] ?></strong></td>
                    
                   
                      <td style="width: 6%; text-align:center"><strong style="padding-left:1px;"><?php echo $info['Std_birthday'] ?></strong></td>
                    <td style="width: 4%; text-align:center"><strong style="padding-left:1px;"><?php if ($info['Std_religion']==1) {echo 'Muslim';} elseif ($info['Std_religion']==2) { echo 'Hindus';
                              }?></strong></td>
                    <td style="width: 4%; text-align:center"><strong style="padding-left:1px;"><?php if ($info['Std_gender']==1) {echo 'Son';} elseif ($info['Std_gender']==2) { echo 'Daughter';
                              }?></strong></td>
                     
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
