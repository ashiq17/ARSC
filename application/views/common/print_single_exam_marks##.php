<!DOCTYPE html>
<html>
<head>
    <title>Student Exam Result Information</title>
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
    </style> 
       <style type="text/css" media="screen">
        #print-footer {
            display: none;}
    table #table1 {
    width:60%; 
    /*margin-left:30%; */
    margin-right:10%;
    text-align: center;
    border: 1px solid #ddd;
    /*border-top: 1px solid black;*/
    margin: auto;}
    table #table2 {
    width:80%; 
    margin-right:10%;
    text-align: center;
    border: 1px solid #000;
    margin: auto;}
    #print-footer {
      display: none;
      position: fixed;
      bottom: 0;
      left:0;}
    #hide-print {
      display: none;
      }
      body {
         margin-bottom:10mm;
      }
      table{
         border-collapse: separate !important;
        }
    </style>
</head>


<body id="print-container-body">
   <?php $info=$print_exam_report_single_find; ?>
    <?php 
        if(empty($info)){
            $this->session->set_userdata('error_msg','No Data Found!');
            redirect(base_url().'home/ExamResult');
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
    // print_r($header_data);
    // echo "</pre>";
    // die();

 ?> 
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="" style="">
                <div class="" style="width:100%;">
                     
                <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 2px;">
                    <tr>
                        <th style="width: 28%;text-align: right;">
                           <img style=" height:80px; width: 90px;  margin-top: 18px;margin-left: 5px;" src="<?php echo base_url(); ?>assets/images/headerImages/<?php echo $header_data['0']['Image'] ?>" >

                        </th>
                        <th style="width: 44%; text-align: right;">
                           <div class="company-head" style=" min-height: 82px; margin-top: 0px;">   
                 
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
                         </th>
                         <th style="width: 28%;text-align:  left;">
                           <img style=" height:80px; width: 90px;  margin-top: 18px;margin-left: 5px;" src="<?php echo base_url(); ?>images/student/<?php echo $info['0']['Image'] ?>" >
                        </th>
                    </tr>
                </table>
               
                 <div class="ibox-title" style="height:10px;">
                    <h6 style="font-size: 15px; "><strong style="border-bottom:  2px solid #bbb; margin-bottom:10px;">

                      <?php if(!empty($info['0']['Exam_term_Name']))  echo $info['0']['Exam_term_Name']; ?> 

                          
                        </strong></h6>
                </div>
                </div>

             <table  class="table " id="table2"  style="width:75%; border: 1px solid #ddd; margin: auto; margin-top: 5px;">
                    
                    <tr >
                       <th style="width: 10%; text-align: left">Stu. ID</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 15%; text-align: left">  <?php if(!empty($info['0']['Marks_stu_UNQ_ID'])) {
                        echo $info['0']['Marks_stu_UNQ_ID'];} ?> </th> 
                       <th style="width: 15%; text-align: left">Reg. No</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 16%; text-align: left"><?php if (!empty($info['0']['Marks_stu_UNQ_ID'])) {
                        echo $info['0']['Marks_stu_UNQ_ID'];} ?> </th>
                       <th style="width: 9%; text-align: left">Class </th>
                       <th style="width: 1%; text-align: left">: </th>
                       <th style="width: 11%; text-align: left"> <?php  if (!empty($info['0']['Class_Name'])) {
                        echo $info['0']['Class_Name'];} ?> </th>
                       <th style="width: 10%; text-align: left"> C. Roll</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 10%; text-align: left"><?php if (!empty( $info['0']['Std_roll'])) {
                        echo $info['0']['Std_roll']; } ?> </th>
                        
                    </tr>
                    <tr >
                       <th style="width: 10%; text-align: left">Medium</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 15%; text-align: left"><?php if (!empty($info['0']['Std_medium_ID']) && $info['0']['Std_medium_ID']==1) {echo 'Bangla';}
                        elseif (!empty($info['0']['Std_medium_ID']) && $info['0']['Std_medium_ID']==2) {echo 'English';}
                              ?> </th> 
                       
                       <th style="width: 15%; text-align: left">Shift</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 15%; text-align: left"><?php if (!empty($info['0']['Std_shift_ID']) && $info['0']['Std_shift_ID']==1) {echo 'Day';}
                        elseif (!empty($info['0']['Std_shift_ID']) && $info['0']['Std_shift_ID']==2) {echo 'Morning';}
                              ?> </th> 
                       <th style="width: 9%; text-align: left">Section </th>
                       <th style="width: 1%; text-align: left">: </th>
                       <th style="width: 11%; text-align: left"><?php  if (!empty($info['0']['Section_Name'])) {
                        echo $info['0']['Section_Name'];} ?>  </th>
                       <th style="width: 10%; text-align: left"> Group</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 10%; text-align: left"><?php if (!empty($info['0']['Group_Name'])) {
                        echo $info['0']['Group_Name']; } ?> </th>
                    </tr> 
                </table>

                <table  class="table " id="table2"  style="width:75%; border: 1px solid #ddd; margin: auto; margin-top: 5px;">

                    <tr >
                       <th style="width: 22%; text-align: left"> Student's Name</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 56%; text-align: left"> <?php if (!empty($info['0']['Std_Name'])) {
                        echo $info['0']['Std_Name'];
                       } ?></th>
                        <!-- <th style="width: 10%; text-align: left">Position</th>
                         <th style="width: 1%; text-align: left">:</th>
                         <th style="width: 10%; text-align: left">10 </th>  -->
                    </tr>
                </table>
            <div class="">
              <?php 
                    $i=0;
                    $totalGP = 0.00;
                    $totalMarks = 0.00;
                   foreach ($print_exam_report_single_find as $key => $info):
                    $i++;
                    ?>

                        <?php  if(!empty( $info['Marks_stu_sub_total_marks'])){
                      
                            $subject_point=$info['Marks_stu_sub_total_marks'];
                            $subject_marks=$info['Marks_stu_sub_total_marks'];
                              // $subject_point=$info['Marks_stu_sub_total_marks'];
                            }

                        if ($subject_point>=80  && $subject_point <=100 ) {
                              $subject_gp = "5.0";
                        }
                         if ($subject_point>=70  && $subject_point <=79 ) {
                            $subject_gp = "4.0";
                                
                        } if ($subject_point>=60  && $subject_point <=69 ) {
                         $subject_gp = "3.50";
                                
                        } if ($subject_point>=50  && $subject_point <=59 ) {
                         $subject_gp = "3.0";
                                
                        } if ($subject_point>=40  && $subject_point <=49 ) {
                         $subject_gp = "2.0";
                                
                        } if ($subject_point>=33  && $subject_point <=39 ) {
                         $subject_gp = "1.0";
                                
                        } if ($subject_point>=0  && $subject_point <=32 ) {
                         $subject_gp = "0.0";
                                
                       } 
                       if ($subject_point<0 || $subject_point >101 ) {
                        $subject_gp = Invalid;
                       }?>
                  
                <?php 
                      // echo  $subject_gp;
                      $totalGP = $totalGP + $subject_gp;
                      // echo  $totalGP;
                      $totalMarks = $totalMarks + $subject_marks;
                    endforeach 
                ?>
              <?php 
                $totalGPAPrint=$totalGP/$i;
                $totalGPAPrintok= round($totalGPAPrint, 2);
                // echo $totalGPAPrint;
                // echo $totalGPAPrintok;
                $totalMarksAvg=$totalMarks/$i;
                $totalMarksAvgPrintok= round($totalMarksAvg, 2);
               ?>

            <table class="" style="width:75%; margin: auto; margin-top: 5px; border-color: #ddd;" border="1">
                    <tr >
                       <th style="width: 2%; text-align: center">SL</th>
                       <th style="width: 22%; text-align: center">Name of Subject </th>
                       <th style="width: 10%; text-align: center"> M.C.Q</th>
                       <th style="width: 10%; text-align: center"> C.Q </th>
                       <th style="width: 14%; text-align: center"> Total Marks</th>
                       <th style="width: 14%; text-align: center">Letter Grade</th>
                       <th style="width: 14%; text-align: center"> Grade Point</th>
                       <th style="width: 14%; text-align: center"> GPA</th>
                    </tr> 

                     <?php 
                      $sl=0;
                     foreach ($print_exam_report_single_find as $key => $info):
                      $sl++;
                      ?>
                     <tr >
                        <th style="width: 2%; text-align: center"><?php echo $sl ;?></th>
                        <th style="width: 22%; text-align: center"><?php if (!empty($info['Subject_Name'])) {
                      echo $info['Subject_Name']; } ?></th>
                        <th style="width: 10%; text-align: center"> <?php if (!empty( $info['Marks_stu_sub_mcq_marks'])) {
                        echo  $info['Marks_stu_sub_mcq_marks'];}?></th> 
                        <th style="width: 10%; text-align: center"> <?php if (!empty( $info['Marks_stu_sub_cq_marks'])) {
                        echo  $info['Marks_stu_sub_cq_marks'];}?></th> 
                        <th style="width: 14%; text-align: center"> <?php if (!empty( $info['Marks_stu_sub_total_marks'])) {
                        echo  $info['Marks_stu_sub_total_marks'];}?></th>
                        <th style="width: 14%; text-align: center"><?php if(!empty( $info['Marks_stu_sub_total_marks'])){
                            $subject_grade=$info['Marks_stu_sub_total_marks'];
                            }
                          if ($subject_grade>=80  && $subject_grade <=100 ) {
                              echo "A+";
                          } if ($subject_grade>=70  && $subject_grade <=79 ) {
                              echo "A";
                          } if ($subject_grade>=60  && $subject_grade <=69 ) {
                              echo "A -";
                          } if ($subject_grade>=50  && $subject_grade <=59 ) {
                              echo "B";
                          } if ($subject_grade>=40  && $subject_grade <=49 ) {
                              echo "C";
                          } if ($subject_grade>=33  && $subject_grade <=39 ) {
                              echo "D";
                          } if ($subject_grade>=0  && $subject_grade <=32 ) {
                              echo "F";
                          } if ($subject_grade<0 || $subject_grade >101 ) {
                              echo "Invalid";
                          }?> </th> 

                         <th style="width: 14%; text-align: center">
                          <?php  if(!empty( $info['Marks_stu_sub_total_marks'])){
                              $subject_point=$info['Marks_stu_sub_total_marks'];
                            }
                          if ($subject_point>=80  && $subject_point <=100 ) {
                            $subject_gp = "5.0";
                            echo $subject_gp;
                          } if ($subject_point>=70  && $subject_point <=79 ) {
                            $subject_gp = "4.0";
                            echo $subject_gp;
                          } if ($subject_point>=60  && $subject_point <=69 ) {
                            $subject_gp = 3.50;
                            echo $subject_gp;
                          } if ($subject_point>=50  && $subject_point <=59 ) {
                            $subject_gp = "3.0";
                            echo $subject_gp;
                          } if ($subject_point>=40  && $subject_point <=49 ) {
                            $subject_gp = "2.0";
                            echo $subject_gp;
                          } if ($subject_point>=33  && $subject_point <=39 ) {
                            $subject_gp = "1.0";
                            echo $subject_gp;
                          } if ($subject_point>=0  && $subject_point <=32 ) {
                            $subject_gp = "0.0";
                            echo $subject_gp;
                          } if ($subject_point<0 || $subject_point >101 ) {
                            $subject_gp =Invalid;
                            echo $subject_gp;
                          }?> </th> 

                         <?php if($sl==1){ ?>
                        <th rowspan="<?php echo $i; ?>" style="width: 14%; text-align: center"><?php echo $totalGPAPrintok; ?></th>
                       <?php } ?>
                    </tr>
                  <?php endforeach ?>
            </table> 

            <table  class="table " id="table2"  style="width:75%; border: 1px solid #ddd; margin: auto; margin-top: 5px;">
                    
                    <?php $Grade=$totalGPAPrintok;
                    // echo $Grade;
                          if ($Grade>=5.00  && $Grade <=5.50 ) {
                            $finalGrade = "A+";
                          } if ($Grade>=4.00  && $Grade <=4.99 ) {
                            $finalGrade ="A" ;
                          } if ($Grade>=3.50  && $Grade <=3.99 ) {
                            $finalGrade ="A-";
                          } if ($Grade>=3.00  && $Grade <=3.49 ) {
                            $finalGrade =" B" ;
                          } if ($Grade>=2.00  && $Grade <=2.99 ) {
                            $finalGrade =" C" ;
                          } if ($Grade>=1.00  && $Grade <=1.99 ) {
                            $finalGrade = "D" ;
                          } if ($Grade>=0  && $Grade <=0.99 ) {
                            $finalGrade = "F" ;
                          } if ($Grade<0 || $Grade >5.00 ) {
                            $finalGrade ="Invalid";
                          }?>

                    <tr >
                       <th style="width: 15%; text-align: left">Obtained Marks</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 12%; text-align: left"><?php echo  $totalMarks; ?></th> 
                       
                       <th style="width: 12%; text-align: left">Avg. Marks</th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 13%; text-align: left"> <?php echo $totalMarksAvgPrintok ; ?>%</th> 
                       <th style="width: 10%; text-align: left">Grade </th>
                       <th style="width: 1%; text-align: left">: </th>
                       <th style="width: 13%; text-align: left"><?php  echo $finalGrade ?> </th>
                       <th style="width: 15%; text-align: left"> Merit Position </th>
                       <th style="width: 1%; text-align: left">:</th>
                       <th style="width: 13%; text-align: left">1st</th>
                    </tr> 
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
                            <th style="font-size:8px;"><strong>&copy; 2018 Cyberdyne Technology Ltd. | Contact: 01715-515755 | www.cyberdynetechnologyltd.com</strong></th>
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