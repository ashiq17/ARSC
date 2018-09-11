<!DOCTYPE html>
<html>
<head>
  <?php error_reporting(0);
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  error_reporting(E_ALL);
  ini_set("error_reporting", E_ALL);
  error_reporting(E_ALL & ~E_NOTICE);
   ?>
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
     $exam_search_info=$print_exam_report_all_find;

      $exam_class=$exam_search_info['0']['Class_Name'];
      $exam_Std_medium_ID=$exam_search_info['0']['Std_medium_ID'];
      $exam_Std_shift_ID=$exam_search_info['0']['Std_shift_ID'];
      if ($exam_Std_medium_ID==1) {
                $exam_Std_mediumName = 'Bangla';
            } else {
                $exam_Std_mediumName = 'English';
            }
            if ($exam_Std_shift_ID==1) {
                $exam_Std_shiftName = 'Day';
            } else {
                $exam_Std_shiftName = 'Morning';
            }


      $exam_sectionName=$exam_search_info['0']['Section_Name'];
      $exam_groupName=$exam_search_info['0']['Group_Name'];
      // $exam_medium=$exam_search_info['0']['Class_Name'];


      $exam_name=isset($exam_name_info['0']['Exam_term_Name_Result'])?$exam_name_info['0']['Exam_term_Name_Result']:"";
     
      // echo "<pre>"; print_r($exam_search_info); die();

    ?>
    
      <?php 
        if(empty($info)){
            $this->session->set_userdata('error_msg','No Data Found!');
            redirect(base_url().'exam/exam/exam_report');
           }
     ?> 



<div style="display: none;">
    <button id="btnExport">Export to excel</button>
</div>
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <?php 
    $header_data = $this->Exam_marks_Model->get_header_data();
    // echo "<pre>";
    // print_r($header_data);
    // echo "</pre>";
    // die();

 ?> 
        <div class="col-lg-12">
        <div class=" float-e-margins">
            <div class="" style="margin-top: 1px;">
                <div style="width:50%; margin-left: 20px;margin-top: 1px; ">
                    <img style="height: 70px!Important; width: 7  5px; margin-top: 10px;"  src='<?php echo base_url(); ?>assets/images/headerImages/<?php echo $header_data['0']['Image'] ?>' alt="School Logo">
                </div>
                <div class="company-head" style="">
                 
                     <h2 class=""><strong><?php if(!empty($header_data[0]['HeaderTitle'])){
                        echo $header_data[0]['HeaderTitle'];} ?></strong></h2>
                    <span><p class=""><?php if(!empty($header_data[0]['Address1'])){
                        echo $header_data[0]['Address1'];} ?></p></span>
                   <!--  <span><p class="backside_bottom"><?php if(!empty($header_data[0]['Address2'])){
                        echo $header_data[0]['Address2'];} ?></p></span> -->
                     <span> <p class="backside_bottom">
                     Contact No:<?php if(!empty($header_data[0]['MobileNo'])){
                        echo $header_data[0]['MobileNo'];} ?>  </p></span>
                     <span> <p class="backside_bottom">
                     Email: <?php if(!empty($header_data[0]['Email'])){
                        echo $header_data[0]['Email'];} ?> </p></span>
                    <span> <p class="backside_bottom">
                       Website: <?php if(!empty($header_data[0]['Website'])){
                        echo $header_data[0]['Website'];} ?></p>
                        
                </div>
                                                    <div class="ibox-title" style="height:55px; padding: 0px">
                       <h6 style="font-size: 17px; margin-top: 0px; margin-bottom: 2px;">  <strong> <?php  if(!empty($exam_name)){echo $exam_name;}?></strong></h6>
                       <h6 style="font-size: 17px; margin-top: 0px;"> <strong>Class: <?php echo $exam_class ;?></strong></h6>
                        </div>  
                      <div class="text-center" >


                         <?php if (empty($shift)): ?>
                         <span style="margin-left: 10px;"> <strong>Shift</strong> <span  style="margin-left: 10px;">:</span><strong> All</strong> </span> 
                      <?php else: ?>
                          <span style="margin-left: 10px;"> Shift <span  style="margin-left: 10px;">:</span><strong> <?php echo $exam_Std_shiftName ;?></strong> </span> 
                      <?php endif ?>
                       <!--  <span style=""><strong> Shift</strong> <span  style="margin-left: 10px;">:</span>
                        <strong> <?php echo $exam_Std_shiftName ;?></strong> 
                      </span> -->

                      <?php if (empty($section)): ?>
                         <span style="margin-left: 10px;"> <strong>Section</strong> <span  style="margin-left: 10px;">:</span><strong> All</strong> </span> 
                      <?php else: ?>
                          <span style="margin-left: 10px;"> Section <span  style="margin-left: 10px;">:</span><strong> <?php echo $exam_sectionName ;?></strong> </span> 
                      <?php endif ?>

                      <?php if (empty($group)): ?>
                         <span style="margin-left: 10px;"> <strong>Group</strong> <span  style="margin-left: 10px;">:</span><strong> All</strong> </span> 
                      <?php else: ?>
                          <span style="margin-left: 10px;"> Group <span  style="margin-left: 10px;">:</span><strong> <?php echo $exam_groupName ;?></strong> </span> 
                      <?php endif ?>
<!-- 
                        <span style="margin-left: 10px;"> Group <span  style="margin-left: 10px;">:</span><strong> <?php echo $exam_groupName ;?></strong> </span> -->
                      </div>
            <div class="ibox-content">
            <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 5px;">
            </table>
            <table id="tblExport" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 5px;">
              
                 <thead class="theight">
                   
                </thead>
                <thead class="theight">
                   
                    <tr>
                         <th style="width: 2%;  text-align: center"><span style="margin-left:10px; ">#SL</span></th> 
                        <th style="width: 10%; text-align: left"><span style="margin-left:10px; ">Student's Name</span></th> 
                     
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Student ID</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Class Roll</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Bangla</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Mathematics</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">English</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">B & G Science</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Science </span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Religion</span></th> 
                        <th style="width: 6%;  text-align: center"><span style="margin-left:10px; ">Moktab</span></th> 
                        <th style="width: 6%;  text-align: center"><span style="margin-left:10px; ">Practical</span></th> 
                       
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Total Marks</span></th> 
                       <!--  <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">G.P.A</span></th>  -->
                    </tr>
                    </thead> 
                    <tbody class="theight">

                     <?php 
                     // echo "<pre>";
                     // print_r($Exam_term_ID);
                     // echo "<br>";
                     // print_r($subject_value);
                     // echo "<br>";
                     // echo "<pre>";
                      $sl=0;
                      // $total_marks = 0;
                     foreach ($print_exam_report_all_find as $key => $value):
                     //     echo "<pre>";
                     // print_r($value);
                     // echo "</pre>";
                     //  die();
                      $sl++;

                      $std_unique_id = $value['STD_UNQ_ID'];

                      $str = "SELECT * FROM tbl_stu_marks_summary WHERE Marks_Sum_Student_ID='$std_unique_id' AND Marks_Sum_Exam_code_ID='$Exam_term_ID'";
                      $marks_result=$this->db->query($str)->result_array();
                       // echo "<pre>"; print_r($marks_result);echo "</pre>";die();
                      ?>
                       
                    <tr>
                    <td style="width: 2%;  text-align:center"><strong style="margin-left:10px;"><?php echo $sl; ?></strong></td>
                    <td style="width: 10%; text-align:left"><strong style="margin-left:10px;"><?php if (!empty($value['Std_Name'])) {
                     echo $value['Std_Name'];} ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($value['STD_UNQ_ID'])) {
                     echo $value['STD_UNQ_ID'];} ?></strong></td> 
                   <td style="width: 4%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($value['Std_roll'])) {echo $value['Std_roll'];} ?></strong></td> 
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($marks_result[0]['Marks_Sum_Bangla'])) { echo  $marks_result[0]['Marks_Sum_Bangla'];
                    } ?></strong></td> 
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($marks_result[0]['Marks_Sum_Mathematics'])) { echo  $marks_result[0]['Marks_Sum_Mathematics'];
                    } ?></strong></td> 

                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($marks_result[0]['Marks_Sum_English'])) { echo  $marks_result[0]['Marks_Sum_English'];
                    } ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($marks_result[0]['Marks_Sum_B_G_Science'])) { echo  $marks_result[0]['Marks_Sum_B_G_Science'];
                    } ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($marks_result[0]['Marks_Sum_Science'])) { echo  $marks_result[0]['Marks_Sum_Science'];
                    } ?></strong></td> 
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($marks_result[0]['Marks_Sum_Religion'])) { echo  $marks_result[0]['Marks_Sum_Religion'];
                    } ?></strong></td>

                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($marks_result[0]['Marks_Sum_Moktab'])) { echo  $marks_result[0]['Marks_Sum_Moktab'];
                    } ?></strong></td>
                     <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php if (!empty($marks_result[0]['Marks_Sum_Practical'])) { echo  $marks_result[0]['Marks_Sum_Practical'];
                    } ?></strong></td> 

                  <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                      <?php  

                        if (!empty($marks_result[0]['Marks_Sum_Bangla'])) { 
                        $bangla  =  $marks_result[0]['Marks_Sum_Bangla']; }; 

                        if (!empty($marks_result[0]['Marks_Sum_Mathematics'])) { 
                        $mathematics  =  $marks_result[0]['Marks_Sum_Mathematics']; };

                        if (!empty($marks_result[0]['Marks_Sum_English'])) { 
                        $english  =$marks_result[0]['Marks_Sum_English']; };

                        if (!empty($marks_result[0]['Marks_Sum_B_G_Science'])) { 
                        $bgscience  =$marks_result[0]['Marks_Sum_B_G_Science']; };


                        if (!empty($marks_result[0]['Marks_Sum_Science'])) { 
                        $science  =$marks_result[0]['Marks_Sum_Science']; };

                        if (!empty($marks_result[0]['Marks_Sum_Religion'])) { 
                        $religion  =$marks_result[0]['Marks_Sum_Religion']; }; 

                        if (!empty($marks_result[0]['Marks_Sum_Moktab'])) { 
                        $moktab  =$marks_result[0]['Marks_Sum_Moktab']; };
                        
                        if (!empty($marks_result[0]['Marks_Sum_Practical'])) { 
                        $practical  =$marks_result[0]['Marks_Sum_Practical']; };


                        // $bangla_1st   = $marks_result['0']['Marks_Sum_Bangla'];
                        // $mathematics  = $marks_result['0']['Marks_Sum_Mathematics'];
                        // $english      = $marks_result['0']['Marks_Sum_English'];
                        // $religion     = $marks_result['0']['Marks_Sum_Religion'];
                        // $computer     = $marks_result['0']['Marks_Sum_Computer'];
                        // $gknowledge   = $marks_result['0']['Marks_Sum_GKnowledge'];
                        // $moktab       = $marks_result['0']['Marks_Sum_Moktab'];
                        // $drawing      = $marks_result['0']['Marks_Sum_Drawing'];
                        // $practical    = $marks_result['0']['Marks_Sum_Practical']; 
                         

                        $TOTAL_MARKS  =$bangla+$english+$mathematics+$bgscience+$science+$religion+$moktab+$practical;
                        
                        if (!empty($TOTAL_MARKS)) { echo $TOTAL_MARKS; } 
                        
                        ?>
                       
                    </strong></td>
                  
                    </tr> 
                    <?php 
                    endforeach 
                    ?>
                       
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
