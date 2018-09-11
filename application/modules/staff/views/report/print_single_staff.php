<!DOCTYPE html>
<html>
<head>
    <title>Staff Information</title>
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

    table#table1 {
    width:50%; 
    /*margin-left:30%; */
    margin-right:10%;
    text-align: center;
    border: 1px solid #ddd;
    /*border-top: 1px solid black;*/
    margin: auto;


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
                <div class="" style="width:100%;">
                     <?php $info=$print_staff_single_find; ?>
                <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 2px;">
                    <tr>
                        <th style="width: 30%;text-align: right;"><img style="height: 60px; width: 110px; margin: 5px 0 0 5px;" src="<?php  echo base_url(); ?>assets/images/logo.png">
                        </th>
                        <th style="width: 40%; text-align: right;">
                            <div class="company-head" style=" min-height: 82px; margin-top: 0px;">                
                                 <h3><strong>Cyberdyne Technology Ltd</strong></h3>
                                <p>Village: <span>Dakkhin Goan ,</span> Union : <span>Sonmania</span></p>
                                <p>Upazila: <span>Kapasia ,</span> District : <span>Gazipur</span></p>
                                <p>Email:abc@gmail.com</p>
                                <p>http://abc.com.bd</p>
                   
                                <p>Print date: <?php echo date("d/m/Y"); ?></p>                
                            </div>
                         </th>
                         <th style="width: 30%;text-align:  left;"><img style="width: 90px; height:95px; margin-top: 15px;" src="<?php echo base_url('images/Staff/').$info['0']['Image']?>"?> </th>
                    </tr>
                </table>
                 <table class="table table-striped" style="margin-bottom: 5px;">
                    
                        <tr >
                            <th style="width: 25%;text-align: right"><span style="margin-left:2px;"> Staff's ID # </span></th>
                            <th style="width: 15%;text-align: left"><strong style="color: red; padding-left:10px">   <?php echo $info['0']['Staff_UniqueID'] ?></strong></th>
                           
                            <th style="width: 23%;text-align: right"><span style="margin-left:20px;"> Registration's Date:</span></th>
                            <th style="width: 25%;text-align: left"> <span style="margin-left:10px;"> <?php echo $info['0']['Created'] ?></span></th>
                           
                        </tr>
                  </table>
                 <div class="ibox-title" style="height:10px;">
                    <h6 style="font-size: 15px; "><strong style="border-bottom:  2px solid #bbb; margin-bottom:10px;">Staff Information</strong></h6>
                </div>
            </table>
                     
                       
            <div class="">
            <table  class="table" id="table1" class="" style="width:50%; border: 1px solid #ddd; margin: auto;">
                    
                    <tr >
                        <th style="width: 40%;text-align: left"><span style="margin-left:10px;">1. Staff's Name :</span></th>
                        <th style="width: 60%; text-align: left"><span style="color: red; margin-left:8px;"> <?php echo $info['0']['Staff_Name'] ?></span></th>
                        
                    </tr>
                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 2. Father's Name:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['Staff_FathersName'] ?></span></th>
                     
                    </tr>

                     <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 3. Designation Name:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['DesignationName'] ?></span></th>
                    </tr> 
                    
                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;">4.Blood Group:</span></th>
                          <th style="width: 60%; text-align: left"><span style="margin-left:8px;">
                            <?php if ($info['0']['Staff_BloodGroup']==1) {echo 'A+';} 
                            if ($info['0']['Staff_BloodGroup']==2) { echo 'A -';}
                            if ($info['0']['Staff_BloodGroup']==3) { echo 'B +';}
                            if ($info['0']['Staff_BloodGroup']==4) { echo 'B -';}
                            if ($info['0']['Staff_BloodGroup']==5) { echo 'AB +';}
                            if ($info['0']['Staff_BloodGroup']==6) { echo 'AB -';}
                            if ($info['0']['Staff_BloodGroup']==7) { echo 'O +';}
                            if ($info['0']['Staff_BloodGroup']==8) { echo 'O +';}
                            ?>
                           </span>
                       </th>
                    </tr>

                     <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 5. Medium Name:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php if ($info['0']['Staff_medium']==1) {echo 'Bangla';} elseif ($info['0']['Staff_medium']==2) { echo 'English';
                              }?> </span></th>
                    </tr>
                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 6. Shift Name:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php if ($info['0']['Staff_shift']==1) {echo 'Day';} elseif ($info['0']['Staff_shift']==2) { echo 'Morning';
                              }?> </span></th>
                    </tr>

                   
                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 7. Address:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['Staff_address'] ?></span></th>
                       
                    </tr> 

                   <!--  <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 10. Date Of Birth:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['Std_birthday'] ?></span></th>
                    </tr>  -->
                     <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 8. Religion:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php if ($info['0']['Staff_religion']==1) {echo 'Muslim';} elseif ($info['0']['Staff_religion']==2) { echo 'Hindus';
                              }?> </span></th>
                    </tr>

                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 9. Gender:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php if ($info['0']['Staff_gender']==1) {echo 'Male';} elseif ($info['0']['Staff_gender']==2) { echo 'Female';
                              }?> </span></th>
                    </tr>
                   
                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;">10. Mobile No:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['Staff_mobile'] ?></span></th>
                    </tr> 
                   
                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;">11. Email ID:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['Staff_email'] ?></span></th>
                    </tr>
                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 13. Index No.:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['Staff_IndexNo'] ?></span></th>
                    </tr> 

                   <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 14. National ID:</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['Staff_NationalID'] ?></span></th>
                    </tr>
                    
                    <tr>
                        <th style="width: 40%; text-align: left"><span style="margin-left:10px;"> 15. Joining Date :</span></th>
                        <th style="width: 60%; text-align: left"><span style="margin-left:8px;"> <?php echo $info['0']['Staff_joining_date'] ?></span></th>
                    </tr> 
            </table>

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
                           <td style="font-size:8px;">&copy; 2018 <a target="blank" href="http://www.abcltd.com">ABC Ltd. | Contact: 01715-515755 </a></td>
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