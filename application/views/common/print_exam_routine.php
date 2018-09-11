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
<div style="display: none;">
    <button id="btnExport">Export to excel</button>
</div>
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <?php 
        $header_data = $this->Home_Model->get_header_data();
        ?> 
        <div class="col-lg-12">
        <div class="ibox float-e-margins" style="margin-top: 20px;">
            <div class="" style="">
                    <div style="width:50%;">
                  <img style="height: 60px!Important; width: 120px;"  src='<?php echo base_url(); ?>assets/images/headerImages/<?php echo $header_data['0']['Image'] ?>' alt="School Logo">
                </div>
                <div class="company-head" >
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
                        <h6 style="font-size: 13px; margin-top: 0px;"> Exam Routine Report <strong></strong></h6>
                        </div>
            <div class="ibox-content">
                <?php $info=$print_exam_routine_all_find ?>
           <table class="table table-striped table-hover dataTables-example topics" style="margin-bottom: 15px;">
              <thead class="theight">
                    <tr>
                        <th style="width:30%;text-align:center;vertical-align: middle;">Class : <strong><?php echo $info['0']['Class_Name']?></strong> 
                        </th>
                        <th style="width:30%;text-align:center;vertical-align: middle;">Medium: 
                          <strong>
                          <?php 
                            if ($info['0']['Exam_routine_Medium_ID']=='1') { echo "Bangla";}
                            elseif($info['0']['Exam_routine_Medium_ID']=='2'){echo "English";}
                            ?></strong> 
                        </th>
                        <th style="width:40%;text-align:center;vertical-align: middle;">Shift:
                            <strong>
                            <?php  
                                if($info['0']['Exam_routine_Shift_ID']=='1'){ echo "Day"; }
                                elseif ( $info['0']['Exam_routine_Shift_ID']=='2') { echo "Morning"; }
                            ?></strong>
                        </th>
                        
                    </tr>
                    <tr>
                        <th style="width:30%;text-align:center;vertical-align: middle;  text-decoration: none;" >GROUP:
                          <strong><?php echo $info['0']['Group_Name']?> </strong> 
                        </th>
                        <th style="width:30%;text-align:center;vertical-align: middle;">Section :<strong><?php echo $info['0']['Section_Name']?></strong> </th> 
                        <th style="width:40%;text-align:center;vertical-align: middle;">Exam Name: <strong>  <?php echo $info['0']['Exam_term_Name']?></strong></th>
                        
                    </tr>
                    
                </thead>
            </table>


            <table id="tblExport" class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 5px;">
                <thead class="theight">
                 
                     <tr>
                        <th style="width: 2%;  text-align: center"><span style="margin-left:10px; ">SL</span></th> 
                        <th style="width: 10%; text-align: center"><span style="margin-left:10px; ">Date</span></th> 
                     
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Day </span></th> 
                    
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Subject Name </th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Subject Code </th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Time </span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Room  </span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Note </span></th> 
                        
                     
                        
                    </tr>
                    </thead> 
                    <tbody class="theight">
                 <?php 
                      $sl=0;
                     foreach ($print_exam_routine_all_find as $key => $value):
                    
                      $sl++;
                      ?>
                       
                    <tr>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; "><?php echo $sl ;?></span></th>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; "><?php echo $value['Exam_routine_Exam_Date']?></span></th>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; "><?php echo $value['Exam_routine_Exam_Day']?></span></th>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; "><?php echo $value['Exam_routine_Subject_Name']?></span></th> 
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; "><?php echo $value['Exam_routine_Subject_Code']?></span></th> 
                        <th style="width: 7%;  text-align: center">
                            <span style="margin-left:10px; "><?php echo $value['Exam_routine_Exam_Start_Time']?></span><span> -- </span>
                            <span style="margin-left:10px; "><?php echo $value['Exam_routine_Exam_End_Time']?></span>
                        </th>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; "><?php echo $value['Exam_routine_Room_Name']?> </span></th>
                        <th style="width: 7%;  text-align: center"><span style="margin-left:10px; "><?php ?> </span></th>
                        
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