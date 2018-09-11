<!DOCTYPE html>
<html>
<head>
    <title>Student Exam Report</title>
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

    <?php 

      $info=$print_exam_report_all_find;
      $exam_name_info=$find_exam_name;
      $exam_name=$exam_name_info['0']['Exam_term_Name'];
    //    echo "<pre>";
    // print_r($exam_name_info);
    // echo "</pre>";
    // die();
    ?>
    
      <?php 
        if(empty($info)){
            $this->session->set_userdata('error_msg','No Data Found!');
            redirect(base_url().'home/ExamResult_all_index');
           }
     ?> 



<div style="display: none;">
    <button id="btnExport">Export to excel</button>
</div>
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <?php 
    $header_data = $this->Home_Model->get_header_data();
    // echo "<pre>";
    // print_r($print_exam_report_all_find);
    // echo "</pre>";
    // die();

 ?> 
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="" style="margin-top: 0px;">
                <div style="width:50%;">
                    <img style="height: 60px!Important; width: 120px;"  src='<?php echo base_url(); ?>assets/images/headerImages/<?php echo $header_data['0']['Image'] ?>' alt="School Logo">
                </div>
                <div class="company-head" style="">
                 
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
                        <h6 style="font-size: 13px; margin-top: 0px;">  <strong> <?php echo $exam_name ;?></strong></h6>
                        </div>
            <div class="ibox-content">
            <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 5px;">
            </table>
            <table id="tblExport" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 5px;">
              
                 <thead class="theight">
                   
                </thead>
                <thead class="theight">
                   
                    <tr>
                        <th style="width: 2%;  text-align: center"><span style="margin-left:10px; ">SL</span></th> 
                        <th style="width: 10%; text-align: center"><span style="margin-left:10px; ">Student's Name</span></th> 
                     
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Student ID</span></th> 
                       <!--  <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Gender</span></th>  -->
                       <!-- for -->
                       <?php 

                       foreach ($class_wise_subject as $key => $value): 
                       ?>
                           
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; "><?php echo $value['Subject_Name'] ?></span></th> 
                       <?php endforeach ?>
                    </tr>
                    </thead> 
                    <tbody class="theight">

                     <?php 
                    
                      $sl=0;
                     foreach ($print_exam_report_all_find as $key => $value):
                      
                      $sl++;

                      $std_unique_id = $value['STD_UNQ_ID'];
                      // $Exam_term_ID = $Exam_term_ID;


                      $str = "SELECT * 
                       FROM tbl_stu_marks_input 
                       WHERE Marks_stu_UNQ_ID='$std_unique_id'
                      AND Marks_stu_exam_code_ID='$Exam_term_ID'
                      ";
                      $marks_result=$this->db->query($str)->result_array();
                 
                      ?>
                       
                    <tr>
                    <td style="width: 2%;  text-align:center"><strong style="margin-left:10px;"><?php echo $sl; ?></strong></td>
                    <td style="width: 10%; text-align:center"><strong style="margin-left:10px;"><?php echo $value['Std_Name']; ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $value['STD_UNQ_ID']; ?></strong></td>


                    <?php 
                      foreach ($marks_result as $key => $marks_value) {
                        foreach ($class_wise_subject as $key => $subject_value) {
                        

                          if($subject_value['Subject_ID']==$marks_value['Marks_stu_sub_code_ID']){
                     ?>

                            <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $marks_value['Marks_stu_sub_total_marks']; ?></strong></td>
                  
                     <?php
                        } 
                      }
                      }
                      ?>
                    </tr> 
                    <?php endforeach ?>
                       
                </tbody>            
           
            </table>

               <table class="table table-striped table-hover dataTables-example" style="margin-top:70px;">
                <thead class="signature">
                    <tr>
                        <th style="width: 25%;"></th>
                        <th style="width: 25%;"><strong>APPROVED BY</strong></th>
                        <th style="width: 25%; text-align: right;"><strong>PRINCIPAL SIGNATURE </strong></th>
                        <th style="width: 25%;"></th>
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
