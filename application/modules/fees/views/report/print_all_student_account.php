<!DOCTYPE html>
<html>
<head>
    <title>Student Attendance Report</title>
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
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="" style="">
                    <div style="width:50%;">
                    <img style="height: 60px; width: 120px; margin: 5px 0 0 5px;" src="<?php  echo base_url(); ?>assets/images/logo.png">
                </div>
                <div class="company-head">
                 <h2><strong>Cyberdyne Technology Ltd</strong></h2>
                    <p>Village: <span>Dakkhin Goan ,</span> Union : <span>Sonmania</span></p>
                    <p>Upazila: <span>Kapasia ,</span> District : <span>Gazipur</span></p>
                    <p>Email:cyberdynetechnologyltd@gmail.com</p>
                    <p>http://armagroup.com.bd</p>
                    <p>Print date: 28/01/2018</p>   
                                
                </div>
                        <div class="ibox-title" style="height:25px;">
                
                    <h6 style="font-size: 13px; margin-top: 0px;">Student Fees Report <strong></strong></h6>
                 
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
                        <th style="width: 14%; text-align: center"><span style="margin-left:10px; ">Student Name</span></th>
                        <th style="width: 14%; text-align: center"><span style="margin-left:10px; ">Student ID</span></th>
                         <th style="width: 18%; text-align: center"><span style="margin-left:10px; ">Class-(Section)-Roll</span></th> 
               <!--           <th style="width: 18%; text-align: center"><span style="margin-left:10px; ">Section</span></th> 
                         <th style="width: 18%; text-align: center"><span style="margin-left:10px; ">Roll</span></th> -->
                         <th style="width: 18%; text-align: center"><span style="margin-left:10px; ">Fees Type</span></th>
                         <th style="width: 18%; text-align: center"><span style="margin-left:10px; ">Month</span></th>
                         <th style="width: 18%; text-align: center"><span style="margin-left:10px; ">Amount</span></th>
                         <th style="width: 18%; text-align: center"><span style="margin-left:10px; ">Status</span></th>
   
                        
                    </tr>
                    </thead> 
                    <tbody class="theight">

                        
                     <?php 
                      $sl=0;
                     foreach ($print_student_attendance_all_find as $key => $info):
                    
                      $sl++;
                      ?>
                       
                    <tr>
                    <td style="width: 2%;  text-align:center"><strong style="margin-left:10px;"> <?php echo $sl ;?></strong></td>
                <td style="width: 14%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_Name'] ?></strong></td>
                <td style="width: 14%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['St_Student_ID'] ?></strong></td>
                <td style="width: 18%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Class_Name'] ?>-(<?php echo $info['Section_Name'] ?>)-<?php echo $info['Std_roll'] ?></strong></td>
     <!--            <td style="width: 18%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Section_Name'] ?></strong></td>
                <td style="width: 18%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_roll'] ?></strong></td> -->
                <td style="width: 18%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Add_fee_Name'] ?></strong></td>
          
             <td style="width: 4%; text-align:center"><strong style="margin-left:10px;"><?php 
              if ($info['St_Invoice_Moth']==1) {echo 'January';}
              elseif ($info['St_Invoice_Moth']==2) { echo 'February';}
              elseif ($info['St_Invoice_Moth']==3) { echo 'March';}
              elseif ($info['St_Invoice_Moth']==4) { echo 'April';}
              elseif ($info['St_Invoice_Moth']==5) { echo 'May';}
              elseif ($info['St_Invoice_Moth']==6) { echo 'June';}
              elseif ($info['St_Invoice_Moth']==7) { echo 'July';}
              elseif ($info['St_Invoice_Moth']==8) { echo 'August';}
              elseif ($info['St_Invoice_Moth']==9) { echo 'September';}
              elseif ($info['St_Invoice_Moth']==10) { echo 'Octobor';}
              elseif ($info['St_Invoice_Moth']==11) { echo 'November';}
              elseif ($info['St_Invoice_Moth']==12) { echo 'December';}

              ?>
                                  
                </strong>
                </td>
<td style="width: 18%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['account_trn_payment_amount'] ?></strong></td>

       <td style="width: 4%; text-align:center"><strong style="margin-left:10px;"><?php 
              if ($info['St_Invoice_Status']==1) {echo 'Paid';}
              elseif ($info['St_Invoice_Status']==2) { echo 'Due';}


              ?>
                                  
                </strong>
                </td>
              
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
