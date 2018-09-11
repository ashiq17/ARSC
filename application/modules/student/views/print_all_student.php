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
                
                    <h6 style="font-size: 13px; margin-top: 0px;">Student Information <strong></strong></h6>
                 
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
                        <th style="width: 18%; text-align: center"><span style="margin-left:10px; ">Member's Name</span></th> 
                        <th style="width: 14%; text-align: center"><span style="margin-left:10px; ">Father's Name</span></th>
                        <th style="width: 6%;  text-align: center"><span style="margin-left:10px; ">Date Of Birth </span></th> 
                        <th style="width: 4%;  text-align: center"><span style="margin-left:10px; ">Religion</span></th>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Gender</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Mobile No</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Email ID</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Address</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Class </span></th>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Section</span></th>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Group</span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Roll</span></th>
                        
                    </tr>
                    </thead> 
                    <tbody class="theight">

                        
                     <?php 
                      $sl=0;
                     foreach ($print_student_all_find as $key => $info):
                    
                      $sl++;
                      ?>
                       
                    <tr>
                    <td style="width: 2%;  text-align:center"><strong style="margin-left:10px;"> <?php echo $sl ;?></strong></td>
                    <td style="width: 18%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_Name'] ?></strong></td>
                    <td style="width: 14%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_parent'] ?></strong></td>
                    <td style="width: 6%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_birthday'] ?></strong></td>
                    <td style="width: 4%; text-align:center"><strong style="margin-left:10px;"><?php if ($info['Std_religion']==1) {echo 'Muslim';} elseif ($info['Std_religion']==2) { echo 'Hindus';
                              }?></strong></td>
                    <td style="width: 4%; text-align:center"><strong style="margin-left:10px;"><?php if ($info['Std_gender']==1) {echo 'Male';} elseif ($info['Std_gender']==2) { echo 'Female';
                              }?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_parent_mobile'] ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_email'] ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_address'] ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Class_Name'] ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Section_Name'] ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Group_Name'] ?></strong></td>
                    <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $info['Std_roll'] ?></strong></td>
                     
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
