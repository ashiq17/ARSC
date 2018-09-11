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
    </style>    <style type="text/css" media="screen">
        #print-footer {
            display: none;
        }

    table #table1 {
    width:60%; 
    /*margin-left:30%; */
    margin-right:10%;
    text-align: center;
    border: 1px solid #ddd;
    /*border-top: 1px solid black;*/
    margin: auto;


  }
  table #table2 {
    width:80%; 
    margin-right:10%;
    text-align: center;
    border: 1px solid #000;
   
    margin: auto;


  }

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

        table{
               border-collapse: separate !important;
        }

       /* table td{
          border:1px solid #000;
        }*/
    </style>
</head>
<body id="print-container-body">
<div style="display: none;">
    <button id="btnExport">Export to excel</button>
</div>
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="" style="">
                <div class="" style="width:100%;">
                      <?php $info=$print_exam_report_single_find; ?>
                <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 2px;">
                    <tr>
                        <td style="width: 28%;text-align: right;"><img style="height: 65px; width: 100px; margin: 5px 0 0 5px;" src="<?php  echo base_url(); ?>assets/images/logo.png">
                        </td>
                        <td style="width: 44%; text-align: right;">
                            <div class="company-head" style=" min-height: 82px; margin-top: 0px;">                
                                <p><h3>Cyberdyne Technology Ltd
                                </h3></p>
                                <p>Address: House # 1/B, Road # NS-1 (Main Road)</p>
                                <p>Block-A, Banasree, Dhaka-1219</p>
                                <p>+88028399701-702</p>
                                <p>info.armagroup@gmail.com</p>
                                <p>http://armagroup.com.bd</p>
                                <p>Print date: <?php echo date("d/m/Y"); ?></p>                
                            </div>
                         </td>
                         <td style="width: 28%;text-align:  left;"><img style=" height:80px; width: 90px;  margin-top: 18px;margin-left: 5px;" src="<?php echo base_url('images/student/').$info['0']['Image']?>"?> </td>
                    </tr>
                </table>
               
                 <div class="ibox-title" style="height:10px;">
                    <h6 style="font-size: 15px; "><strong style="border-bottom:  2px solid #bbb; margin-bottom:10px;">1st Term Exam 2018</strong></h6>
                </div>
                </div>
         
 

             <table  class="table " id="table2"  style="width:75%; border: 1px solid #ddd; margin: auto; margin-top: 5px;">
                    
                    <tr >
                       <td style="width: 10%; text-align: left">Stu. ID</td>
                       <td style="width: 1%; text-align: left">:</td>
                       <td style="width: 15%; text-align: left">  <?php if(!empty($info['0']['Marks_stu_UNQ_ID'])) {
                        echo $info['0']['Marks_stu_UNQ_ID'];} ?> </td> 
                       <td style="width: 15%; text-align: left">Reg. No</td>
                       <td style="width: 1%; text-align: left">:</td>
                       <td style="width: 16%; text-align: left"><?php if (!empty($info['0']['Marks_stu_UNQ_ID'])) {
                        echo $info['0']['Marks_stu_UNQ_ID'];} ?> </td>
                       <td style="width: 9%; text-align: left">Class </td>
                       <td style="width: 1%; text-align: left">: </td>
                       <td style="width: 11%; text-align: left"> <?php  if (!empty($info['0']['Class_Name'])) {
                        echo $info['0']['Class_Name'];} ?> </td>
                       <td style="width: 10%; text-align: left"> C. Roll</td>
                       <td style="width: 1%; text-align: left">:</td>
                       <td style="width: 10%; text-align: left"><?php if (!empty( $info['0']['Std_roll'])) {
                        echo $info['0']['Std_roll']; } ?> </td>
                        
                    </tr>
                    <tr >
                       <td style="width: 10%; text-align: left">Medium</td>
                       <td style="width: 1%; text-align: left">:</td>
                       <td style="width: 15%; text-align: left"><?php if ($info['0']['Std_medium_ID']==1) {echo 'Bangla';} elseif ($info['0']['Std_medium_ID']==2) { echo 'English';
                              }?> </td> 
                       <td style="width: 15%; text-align: left">Shift</td>
                       <td style="width: 1%; text-align: left">:</td>
                       <td style="width: 16%; text-align: left"><?php if ($info['0']['Std_shift_ID']==1) {echo 'Day';} elseif ($info['0']['Std_shift_ID']==2) { echo 'Morning';
                              }?></td>
                       <td style="width: 9%; text-align: left">Section </td>
                       <td style="width: 1%; text-align: left">: </td>
                       <td style="width: 11%; text-align: left"><?php  if (!empty($info['0']['Section_Name'])) {
                        echo $info['0']['Section_Name'];} ?>  </td>
                       <td style="width: 10%; text-align: left"> Group</td>
                       <td style="width: 1%; text-align: left">:</td>
                       <td style="width: 10%; text-align: left"><?php if (!empty($info['0']['Group_Name'])) {
                        echo $info['0']['Group_Name']; } ?> </td>
                        
                    </tr> 

                </table>

                <table  class="table " id="table2"  style="width:75%; border: 1px solid #ddd; margin: auto; margin-top: 5px;">
               

                    <tr >
                       <td style="width: 22%; text-align: left"> Student's Name</td>
                       <td style="width: 1%; text-align: left">:</td>
                       <td style="width: 56%; text-align: left"> <?php if (!empty($info['0']['Std_Name'])) {
                        echo $info['0']['Std_Name'];
                       } ?></td> 
                      
                        <td style="width: 10%; text-align: left">Position</td>
                         <td style="width: 1%; text-align: left">:</td>
                         <td style="width: 10%; text-align: left">10 </td> 
                      
                    </tr>
                </table>

                       
            <div class="col-md-12">


            <table  class="col-md-8" style="margin-top: 5px; border-color: #ddd;" border="1">
                    
                    <tr  >
                       <td style="width: 2%; text-align: center">SL</td>
                       <td style="width: 22%; text-align: center">Name of Subject </td>
                       <td style="width: 10%; text-align: center"> M.C.Q</td>
                       <td style="width: 10%; text-align: center"> C.Q </td>
                       <td style="width: 14%; text-align: center"> Total Marks</td>
                       <td style="width: 14%; text-align: center">Letter Grade</td>
                       <td style="width: 14%; text-align: center"> Grade Point</td>
                       <!-- <td style="width: 14%; text-align: center"> GPA</td> -->
                        
                    </tr> 


                     <?php 
                      $sl=0;
                      $totalGPA = 0;
                     foreach ($print_exam_report_single_find as $key => $info):
                   //  $subject_grade=$info['Marks_stu_sub_total_marks'];

                   //  if ($subject_grade>=80  && $subject_grade <=100 ) {
                   //   echo "A+";
                   //  }
                   //   if ($subject_grade>=70  && $subject_grade <=79 ) {
                   //   echo "A";
                   //  } if ($subject_grade>=60  && $subject_grade <=69 ) {
                   //   echo "A -";
                   //  } if ($subject_grade>=50  && $subject_grade <=59 ) {
                   //   echo "B";
                   //  } if ($subject_grade>=40  && $subject_grade <=49 ) {
                   //   echo "C";
                   //  } if ($subject_grade>=33  && $subject_grade <=39 ) {
                   //   echo "D";
                   //  } if ($subject_grade>=0  && $subject_grade <=32 ) {
                   //   echo "F";
                   // } 
                   // if ($subject_grade<0  OR $subject_grade >101 ) {
                   //   echo "Invalid";
                   // }
                    // echo "<pre>";
                    // print_r($subject_grade);
                    // echo "</pre>";
                    // die();
                      $sl++;
                      ?>
                     <tr >
                       <td style="width: 2%; text-align: center"><?php echo $sl ;?></td>
                       <td style="width: 22%; text-align: center"><?php if (!empty($info['Subject_Name'])) {
                      echo $info['Subject_Name']; } ?></td>
                       <td style="width: 10%; text-align: center"> <?php if (!empty( $info['Marks_stu_sub_mcq_marks'])) {
                        echo  $info['Marks_stu_sub_mcq_marks'];}?></td> 
                        <td style="width: 10%; text-align: center"> <?php if (!empty( $info['Marks_stu_sub_cq_marks'])) {
                        echo  $info['Marks_stu_sub_cq_marks'];}?></td> 

                        <td style="width: 14%; text-align: center"> <?php if (!empty( $info['Marks_stu_sub_total_marks'])) {
                        echo  $info['Marks_stu_sub_total_marks'];}?></td>
                       <td style="width: 14%; text-align: center"><?php  $subject_grade=$info['Marks_stu_sub_total_marks'];

                          if ($subject_grade>=80  && $subject_grade <=100 ) {
                           echo "A+";
                          }
                           if ($subject_grade>=70  && $subject_grade <=79 ) {
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
                         }if ($subject_grade<0 || $subject_grade >101 ) {
                           echo "Invalid";
                         }?> </td> 

                         <td style="width: 14%; text-align: center"><?php  $subject_point=$info['Marks_stu_sub_total_marks'];

                          if ($subject_point>=80  && $subject_point <=100 ) {
                                $subject_gp = 5.00;
                                  echo $subject_gp;
                          }
                           if ($subject_point>=70  && $subject_point <=79 ) {
                              $subject_gp = 4.00;
                                  echo $subject_gp;
                          } if ($subject_point>=60  && $subject_point <=69 ) {
                           $subject_gp = 3.50;
                                  echo $subject_gp;
                          } if ($subject_point>=50  && $subject_point <=59 ) {
                           $subject_gp = 3.00;
                                  echo $subject_gp;
                          } if ($subject_point>=40  && $subject_point <=49 ) {
                           $subject_gp = 2.00;
                                  echo $subject_gp;
                          } if ($subject_point>=33  && $subject_point <=39 ) {
                           $subject_gp = 1.00;
                                  echo $subject_gp;
                          } if ($subject_point>=0  && $subject_point <=32 ) {
                           $subject_gp = 0.00;
                                  echo $subject_gp;
                         } 
                         if ($subject_point<0 || $subject_point >101 ) {
                           echo "Invalid";
                         }?> </td>  
                    </tr>
                  <?php 
                        $totalGPA = $totalGPA + $subject_gp;
                        $totalGPAPrint = $totalGPA/$sl ;

                        // $totalGPAPrint = 25;
                       $totalGPAPrintok= round($totalGPAPrint, 2);

                      endforeach 
                  ?>
                   
            </table> 
              <table  class="col-md-2" style="border-color: #ddd;" border="1"> 
                    <tr>
                       <td style="width: 14%; text-align: center"> GPA</td>
                    </tr> 
                  <tr>  
                       <td rowspan="<?php echo $sl; ?>" style=" text-align: center"><?php  echo round($totalGPAPrint, 2) ; ?></td>
                  </tr>
              </table>
            <!-- <table  class="table " id="table2"  style="width:75%; border: 1px solid #ddd; margin: auto; margin-top: 5px;">
                    
                    <tr >
                       <td style="width: 5%; text-align: center"></td>
                       <td style="width: 30%; text-align: left">Additional Subject</td>
                       <td style="width: 10%; text-align: center"> </td>
                       <td style="width: 10%; text-align: center"> </td>
                       <td style="width: 10%; text-align: center"></td>
                       <td style="width: 10%; text-align: center"></td>
                       <td style="width: 10%; text-align: center"> </td>
                       <td style="width: 10%; text-align: center"> </td>
                        
                    </tr> 
                     <tr >
                       <td rowspan="2" style="width: 5%; text-align: center">8</td>
                       <td rowspan="2" style="width: 30%; text-align: left"> Computer</td>
                       <td rowspan="2" style="width: 10%; text-align: center"> 25</td>
                       <td rowspan="2" style="width: 10%; text-align: center"> 55</td>
                       <td rowspan="2" style="width: 10%; text-align: center"> 80</td>
                       <td rowspan="2" style="width: 10%; text-align: center"> A+</td>
                       <td rowspan="2" style="width: 10%; text-align: center"> 5.00</td>
                       <td  style="width: 15%; text-align: center"> GPA Above 2</td>
                        
                    </tr> 
                      <tr >
                       <td  style="width: 15%; text-align: center">3.00</td>
                    </tr> 
            </table> 
 -->
           
          
           

            <table class="table table-striped table-hover dataTables-example" style="margin-top:70px;">
                <thead class="signature">
                    <tr>
                        <td style="width: 25%;"></td>
                        <td style="width: 25%;"><strong>APPROVED BY</strong></td>
                        <td style="width: 25%; text-align: right;"><strong>PRINCIPAL SIGNATURE </strong></td>
                        <td style="width: 25%;"></td>
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