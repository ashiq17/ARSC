<!DOCTYPE html>
<html>
    <head>
        <title>Student Exam Report</title>
        <link rel="icon" href="http://cyberdynetechnologyltd.com/arma_aims/images/logo/Fevicon.png" type="image/x-icon"/>
        <!-- <link rel="stylesheet" type="text/css" href="http://cyberdynetechnologyltd.com/arma_aims/assets/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="http://cyberdynetechnologyltd.com/arma_aims/assets/css/style.css"> -->

        <!-- <link rel="stylesheet" type="text/css" href="http://cyberdynetechnologyltd.com/arma_aims/assets/css/custom.css"> -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom_print.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_print.css"> 
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
        $info = $print_exam_report_all_find;
        $exam_name_info = $find_exam_name;
        $exam_search_info = $print_exam_report_all_find;

        $exam_class = $exam_search_info['0']['Class_Name'];
        $exam_Std_medium_ID = $exam_search_info['0']['Std_medium_ID'];
        $exam_Std_shift_ID = $exam_search_info['0']['Std_shift_ID'];
        if ($exam_Std_medium_ID == 1) {
            $exam_Std_mediumName = 'Bangla';
        } else {
            $exam_Std_mediumName = 'English';
        }
        if ($exam_Std_shift_ID == 1) {
            $exam_Std_shiftName = 'Day';
        } else {
            $exam_Std_shiftName = 'Morning';
        }


        $exam_sectionName = $exam_search_info['0']['Section_Name'];
        $exam_groupName = $exam_search_info['0']['Group_Name'];
        // $exam_medium=$exam_search_info['0']['Class_Name'];
        $exam_name = $exam_name_info['0']['Exam_term_Name_Result'];

        // echo "<pre>"; print_r($exam_search_info); die();
        ?>

        <?php
        if (empty($info)) {
            $this->session->set_userdata('error_msg', 'No Data Found!');
            redirect(base_url() . 'exam/exam/exam_report');
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

                                <h2 class=""><strong><?php if (!empty($header_data[0]['HeaderTitle'])) {
                    echo $header_data[0]['HeaderTitle'];
                }
?></strong></h2>
                                <span><p class=""><?php if (!empty($header_data[0]['Address1'])) {
                    echo $header_data[0]['Address1'];
                }
?></p></span>
                               <!--  <span><p class="backside_bottom"><?php if (!empty($header_data[0]['Address2'])) {
                                            echo $header_data[0]['Address2'];
                                        }
?></p></span> -->
                                <span> <p class="backside_bottom">
                                        Contact No:<?php if (!empty($header_data[0]['MobileNo'])) {
                                            echo $header_data[0]['MobileNo'];
                                        }
?>  </p></span>
                                <span> <p class="backside_bottom">
                                        Email: <?php if (!empty($header_data[0]['Email'])) {
                                            echo $header_data[0]['Email'];
                                        }
?> </p></span>
                                <span> <p class="backside_bottom">
                                        Website: <?php if (!empty($header_data[0]['Website'])) {
                                            echo $header_data[0]['Website'];
                                        }
?></p>

                            </div>
                            <div class="ibox-title" style="height:55px; padding: 0px">
                                <h6 style="font-size: 13px; margin-top: 0px; ">  <strong> <?php echo $exam_name; ?></strong></h6>
                                <h6 style="font-size: 12px; margin-top: 0px;"> Class: <strong> <?php echo $exam_class; ?></strong></h6>
                            </div>  
                            <div class="ibox-title" >

                                <p style="height:0px; margin-left: 200px;">

   <!--  <span style="margin-left: 50px;"> Medium <span  style="margin-left: 10px;">:</span><strong> <?php echo $exam_Std_mediumName; ?></strong> </span> -->
                                    <span style="margin-left: 150px;"> Shift <span  style="margin-left: 10px;">:</span><strong> <?php echo $exam_Std_shiftName; ?></strong> </span>

                                    <span style="margin-left: 10px;"> Section <span  style="margin-left: 10px;">:</span><strong> <?php echo $exam_sectionName; ?></strong> </span> 
                                    <span style="margin-left: 10px;"> Group <span  style="margin-left: 10px;">:</span><strong> <?php echo $exam_groupName; ?></strong> </span>



                                </p>
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
                                            <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Bangla</span></th> 
                                            <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Mathematics</span></th> 
                                            <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">English</span></th> 
                                            <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Religion</span></th> 
                                            <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">Computer</span></th> 
                                            <th style="width: 7%;  text-align: center"><span style="margin-left:10px; ">G. Know </span></th> 
                                            <th style="width: 6%;  text-align: center"><span style="margin-left:10px; ">Moktab</span></th> 
                                            <th style="width: 6%;  text-align: center"><span style="margin-left:10px; ">Drawing</span></th> 
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
                                        $sl = 0;
                                        // $total_marks = 0;
                                        foreach ($print_exam_report_all_find as $key => $value):

                                            $sl++;

                                            $std_unique_id = $value['STD_UNQ_ID'];
                                            // $std_unique_id = $value['STD_UNQ_ID'];


                                            $str = "SELECT * FROM tbl_stu_marks_input WHERE Marks_stu_UNQ_ID='$std_unique_id' AND Marks_stu_exam_code_ID='$Exam_term_ID'";
                                            $marks_result = $this->db->query($str)->result_array();

                                            $str = "SELECT SUM(Marks_stu_sub_total_marks) AS TOTAL_MARKS FROM tbl_stu_marks_input WHERE Marks_stu_UNQ_ID='$std_unique_id' AND Marks_stu_exam_code_ID='$Exam_term_ID' GROUP BY Marks_stu_UNQ_ID";
                                            $TOTAL_MARKS = $this->db->query($str)->result_array();

                                            /* $str = "SELECT * FROM tbl_stu_marks_input WHERE Marks_stu_UNQ_ID='$std_unique_id' AND Marks_stu_exam_code_ID='$Exam_term_ID'";
                                              $marks_result=$this->db->query($str)->result_array();

                                              $str = "SELECT SUM(Marks_stu_sub_total_marks) AS TOTAL_MARKS FROM tbl_stu_marks_input WHERE Marks_stu_UNQ_ID='$std_unique_id' AND Marks_stu_exam_code_ID='$Exam_term_ID' GROUP BY Marks_stu_UNQ_ID";
                                              $TOTAL_MARKS =$this->db->query($str)->result_array(); $str = "SELECT * FROM tbl_stu_marks_input WHERE Marks_stu_UNQ_ID='$std_unique_id' AND Marks_stu_exam_code_ID='$Exam_term_ID'";
                                              $marks_result=$this->db->query($str)->result_array();

                                              $str = "SELECT SUM(Marks_stu_sub_total_marks) AS TOTAL_MARKS FROM tbl_stu_marks_input WHERE Marks_stu_UNQ_ID='$std_unique_id' AND Marks_stu_exam_code_ID='$Exam_term_ID' GROUP BY Marks_stu_UNQ_ID";
                                              $TOTAL_MARKS =$this->db->query($str)->result_array(); */

                                            // echo "<pre>";
                                            // print_r($TOTAL_MARKS);
                                            // echo "<br>";
                                            // echo "<pre>";
                                            ?>

                                            <tr>
                                                <td style="width: 2%;  text-align:center"><strong style="margin-left:10px;"><?php echo $sl; ?></strong></td>
                                                <td style="width: 10%; text-align:left"><strong style="margin-left:10px;"><?php echo $value['Std_Name']; ?></strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;"><?php echo $value['STD_UNQ_ID']; ?></strong></td>


                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                                                        <?php
                                                        foreach ($marks_result as $key => $marks_value) {
                                                            if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'bangla') {
                                                                echo $marks_value['Marks_stu_sub_total_marks'];
                                                            }
                                                        }
                                                        ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                                                        <?php
                                                        foreach ($marks_result as $key => $marks_value) {
                                                            if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'mathematics') {
                                                                echo $marks_value['Marks_stu_sub_total_marks'];
                                                            }
                                                        }
                                                        ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                                                        <?php
                                                        foreach ($marks_result as $key => $marks_value) {
                                                            if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'english') {
                                                                echo $marks_value['Marks_stu_sub_total_marks'];
                                                            }
                                                        }
                                                        ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                                                        <?php
                                                        foreach ($marks_result as $key => $marks_value) {
                                                            if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'Religion') {
                                                                echo $marks_value['Marks_stu_sub_total_marks'];
                                                            }
                                                        }
                                                        ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                                                        <?php
                                                        foreach ($marks_result as $key => $marks_value) {
                                                            if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'Computer') {
                                                                echo $marks_value['Marks_stu_sub_total_marks'];
                                                            }
                                                        }
                                                        ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                                                        <?php
                                                        foreach ($marks_result as $key => $marks_value) {
                                                            if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'G. Know ') {
                                                                echo $marks_value['Marks_stu_sub_total_marks'];
                                                            }
                                                        }
                                                        ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                                                        <?php
                                                        foreach ($marks_result as $key => $marks_value) {
                                                            if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'Moktab') {
                                                                echo $marks_value['Marks_stu_sub_total_marks'];
                                                            }
                                                        }
                                                        ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
                                                        <?php
                                                        foreach ($marks_result as $key => $marks_value) {
                                                            if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'Drawing') {
                                                                echo $marks_value['Marks_stu_sub_total_marks'];
                                                            }
                                                        }
                                                        ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">
    <?php
    foreach ($marks_result as $key => $marks_value) {
        if (trim(strtolower($marks_value['Marks_stu_sub_name'])) == 'Practical') {
            echo $marks_value['Marks_stu_sub_total_marks'];
        }
    }
    ?>
                                                    </strong></td>
                                                <td style="width: 7%; text-align:center"><strong style="margin-left:10px;">

                                            <?php
                                            if (!empty($TOTAL_MARKS[0]['TOTAL_MARKS'])) {
                                                echo $TOTAL_MARKS[0]['TOTAL_MARKS'];
                                            }
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
