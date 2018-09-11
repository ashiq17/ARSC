    
    <?php $this->load->view('dashboard/common/header');?>

        


</head>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Crash Type', '2014'],
        
          ['Late',      500],
          ['Absent', 692],
          ['Present',     2400],
     
          
        ]);

        var options = {
          pieSliceText: 'Present',
          slices: {  0: {color: '#1969ca', offset: 0.2},   
                        1: {color: '#ff7676'},
                        2: {color: '#4caf50'},
                        3: {color: '#1969ca'},
                                  
              }, 

           // backgroundColor: '#f9f9fb',
           chartArea: {left:0, top:15, width:'100%', height:'90%'},
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }

    </script>
    <style type="text/css">
        #piechart{
            padding: 20px!important;
        }
        .creative{
            font-size: 16px;
            text-align: left;
            padding-top: 12px;
             font-weight: bolder;


        }

    </style>

<?php 

    $this->load->model('Dashboard');
    $user_id = $this->session->userdata('UserID');
    $user = $this->Dashboard->user($user_id);

 ?>

<body>
    <div id="wrapper">
        <?php $this->load->view('dashboard/common/left_nav');?>

        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav');?>
            </div>
            <section id="main-content">

                    <div class="row" >
            <div class="col-lg-12" style="margin-top: 5px; padding-left: 0px; background-color: #ffffff8a;">
                <div class=" col-md-2 col-12 text-center text-md-left" >
                    <h4 class="creative">New Notice :</h4>
                </div>
                <div class=" col-md-10 col-12">
                    <marquee onmouseover="this.stop();" onmouseout="this.start();">
                        <ul class="list-unstyled marquee-list mt-2">
                            <li class="text-info">Teachers' resignation dates
Autumn term – 31 October</li>
                            
                        </ul>
                    </marquee>
                </div>

            </div>

            </div>

                <div class="row">
                    <div class="col-lg-12" style="padding-top: 15px!important;">



                    <div class="col-md-3" style="width: 25%!important; padding-left: 0px!important;">
                        <a href="<?php echo base_url("student/student/student_list"); ?>" target="_blank">
                        <div class="iconic-w-horizontal w_bg_teal light-text">
                            <div href="#" class="ico-block">
                            <span><i class="fa fa-user-plus"></i></span>
                            </div>
                            <div class="w-meta-info">
                                <span class="w-meta-value number-animate"  data-animation-duration="1500"><?= $total_student; ?></span>
                                <span class="w-meta-title">Total Students </span>
                            </div>
                        </div>
                    </a>
                    </div>


                    <div class="col-md-3" style="width: 25%!important;">
                         <a href="<?php echo base_url("teacher/teacher/teacher_list"); ?>" target="_blank">
                        <div class="iconic-w-horizontal w_bg_cyan light-text">
                            <div href="#" class="ico-block">
                            <span><i class="fa fa-user-plus"></i></span>
                            </div>
                            <div class="w-meta-info">
                                <span class="w-meta-value number-animate"  data-animation-duration="1500"><?= $total_teacher; ?></span>
                                <span class="w-meta-title">Total Teacher </span>
                            </div>
                        </div>
                    </a>
                    </div>


                    <div class="col-md-3" style="width: 25%!important;">
                        <a href="<?php echo base_url("guardian/guardian_list"); ?>" target="_blank">
                        <div class="iconic-w-horizontal w_bg_blue light-text">
                            <div href="#" class="ico-block">
                            <span><i class="fa fa-user-plus"></i></span>
                            </div>
                            <div class="w-meta-info">
    <span class="w-meta-value number-animate"  data-animation-duration="1500"><?= $total_parents; ?></span>
                                <span class="w-meta-title">Total Parents</span>
                            </div>
                        </div>
                    </a>
                    </div>



                    <div class="col-md-3" style="width: 25%!important; padding-right: 0px!important;">
                        <a href="#">
                        <div class="iconic-w-horizontal w_bg_purple light-text">
                            <div href="#" class="ico-block">
                            <span><i class="fa fa-user-plus"></i></span>
                            </div>
                            <div class="w-meta-info">
    <span class="w-meta-value number-animate"  data-animation-duration="1500"><?= $total_user; ?></span>
                                <span class="w-meta-title">Total Users</span>
                            </div>
                        </div>
                    </a>
                    </div>



                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                                     <center>
                    <img class="img-responsive img-circle" alt="No Image Found" style="width:70px; height:70px; padding: 0px; margin-right: 10px;" src="<?php echo base_url('assets/images/users/').$user[0]['image'] ?>">
                   
                     </center>
                            <h2 align="center" style="font-size: 26px;color: #2c3e50; font-weight: 600;">
                                <?= $title; ?>
                            </h2>


                        </div>
                    </div>
                </div>


                <div class="row">

                              <div class="col-md-6" style="padding-right: 0px!important;">
                        <div class="box-widget widget-module" style="height: 275px;">
                            <div class="widget-head clearfix">
                                <h4> <i style="color: #ffffff;" class="fa fa-certificate"></i> Attendance information</h4>
                            </div>
                        
                           
                            <div class="widget-container">
                                <div class=" widget-block1">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                            <!-- <h3 class="media-heading" style="padding:75px; ">Welcome To Superadmin</h3> -->
                                            <div id="piechart"></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                        </div>

                    </div>


             
                    <div class="col-md-6">
                        <div class="box-widget widget-module" style="height: 275px;">
                            <div class="widget-head clearfix">
                               
                                <h4> <i style="color: #ffffff;" class="fa fa-delicious"> </i> Quick Link</h4>
                            </div>
                            <div class="widget-container">
                                <div class=" widget-block">

                                    <div class="row">
                                         <a href="<?php echo base_url("notice/notice/add_notice"); ?>" target="_blank">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="topCenter" data-type="success">Notice Board</button>
                                        </div>
                                    </a>
                                     <a href="#" >
                                        <div class="col-md-6">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="topRight" data-type="information">Mail & SMS</button>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="row">
                                         <a href="<?php echo base_url("fees/fees/fees_collection_report"); ?>" target="_blank">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="centerLeft" data-type="alert">Student Account Report</button>
                                        </div>
                                    </a>
                                     <a href="<?php echo base_url("users_role/users/user_list"); ?>" target="_blank">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="center" data-type="information">Exam Schedule</button>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="row">
                                         <a href="<?php echo base_url("student/student/student_attendance"); ?>" target="_blank">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="centerRight" data-type="alert">Student Attendance</button>
                                        </div>
                                    </a>
                                     <a href="<?php echo base_url("users_role/users/user_list"); ?>" target="_blank">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="bottomLeft" data-type="success">Time & Table</button>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="row">
                                         <a href="<?php echo base_url("student/student/student_attendance_report"); ?>" target="_blank">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="bottomCenter" data-type="warning">Student Attendance Report</button>
                                        </div>
                                    </a>
                                     <a href="<?php echo base_url("users_role/users/add_user"); ?>" target="_blank">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="bottomRight" data-type="error">Add New User</button>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
              
                </div>

                <div class="row">
                    <div class="col-md-6" style="padding-right: 0px!important;">
                        <div class="box-widget widget-module" style="height: 300px;">
                            <div class="widget-head clearfix">
                               
                                <h4><i style="color: #1979CA;" class="fa fa-calendar"></i> Today's Task</h4>
                                <div class="my-msg dash-item">
                                      
                                        <div class="inner-item">
                                            <div class="timetable-item">
                                                <div class="col-xs-3 clear-padding">
                                                    <p><span class="time">10 AM</span></p>
                                                </div>
                                                <div class="col-xs-9">
                                                    <p  style="color: #ff7676; font-size: 17px;">Teacher Meeting</p>
                                                    <p class="sent-by"><i class="fa fa-map-marker"></i> ROOM NO - 601</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="timetable-item">
                                                <div class="col-xs-3 clear-padding">
                                                    <p><span class="time">11 AM</span></p>
                                                </div>
                                                <div class="col-xs-9">
                                                    <p style="color: #ff7676; font-size: 17px;">Campus Tour</p>
                                                    <p class="sent-by"><i class="fa fa-map-marker"></i> CAMPUS</p>
                                                    
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="timetable-item">
                                                <div class="col-xs-3 clear-padding">
                                                    <p><span class="time">12 PM</span></p>
                                                </div>
                                                <div class="col-xs-9">
                                                    <p style="color: #ff7676; font-size: 17px;">Parent Meeting</p>
                                                    <p class="sent-by"><i class="fa fa-map-marker"></i> ROOM NO - 601</p>
                                                    
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                      
                                            
                                        </div>
                                    </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="box-widget widget-module" style="height: 300px;">
                            <div class="widget-head clearfix">
                             
                                <h4><i style="color: #1979CA;" class="fa fa-star"></i> Fees Collection & Expenses</h4>

                            </div>

             <div class="widget-container">
                                <div class=" widget-block">
                                     <div class="widget-container">
                                <div class=" widget-block">

                                    <div class="row" style="padding: 5px 0px;">
                                        <div class="col-md-6">
                                            <h3 style="font-size: 26px; color: #3f3f3f;"> Fees Collection</h3>
                                        </div>
                                        <div class="col-md-4">
                                             <h3 style="font-size: 22px; color: #3f3f3f;"> = <span style="color: red; font-size: 24px;"><?php echo $total_fees; ?>&#2547;</span> </h3>
                                        </div>
                                    </div>

                                     <div class="row" style="padding: 30px 0px;">
                                        <div class="col-md-6">
                                            <h3 style="font-size: 26px; color: #3f3f3f;"> Expenses</h3>
                                        </div>
                                        <div class="col-md-4">
                                             <h3 style=" color: #3f3f3f;"> =<span style="color: red; font-size: 24px;"> <?php echo $total_expense; ?>&#2547;</span></h3>
                                        </div>
                                    </div>
                                
                                  
                                
                                </div>
                            </div>
                                </div>
                            </div>
                        

                        </div>

                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6" style="padding-right: 0px!important;">
                        <div class="box-widget widget-module" style="height: 300px;">
                            <div class="widget-head clearfix">
                          
                                <h4><i style="color: #1979CA;" class="fa fa-star"> </i> Website Controller</h4>
       
                            </div>

      <div class="widget-container">
                                <div class=" widget-block">

                                    <div class="row">
                                         <a href="<?php echo base_url("notice/notice/add_notice"); ?>" target="_blank">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="topCenter" data-type="success">Online Admission</button>
                                        </div>
                                    </a>
                                
                                    </div>
                                    <div class="row">
                                         <a href="<?php echo base_url("fees/fees/fees_collection_report"); ?>" target="_blank">
                                      <div class="col-md-8 col-md-offset-2">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="centerLeft" data-type="alert">Add Events</button>
                                        </div>
                                    </a>
                                   
                                    </div>
                                    <div class="row">
                                         <a href="<?php echo base_url("student/student/student_attendance"); ?>" target="_blank">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="centerRight" data-type="alert">Media Center</button>
                                        </div>
                                    </a>
                              
                                    </div>
                                    <div class="row">
                                         <a href="<?php echo base_url("student/student/student_attendance_report"); ?>" target="_blank">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button class="btn btn-primary1 btn-block ex-noty" data-layout="bottomCenter" data-type="warning">Upload Directory</button>
                                        </div>
                                    </a>
                                 
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="box-widget widget-module" style="height: 300px;">
                            <div class="widget-head clearfix">

                                <h4> <i style="color: #1979CA;" class="fa fa-user-plus"></i> New User</h4>
                            </div>


                             <div class="w-user-list">
                                        <div class="w-user-list-item">
                                            <div class="w-user-thumbnail">
                                                <a href="#">
                                                     <img class="img-responsive img-circle" alt="No Image Found"  src="<?php echo base_url('assets/images/users/').$user[0]['image'] ?>">
                                                </a>
                                            </div>
                                            <div class="w-user-info">
                                                <ul>
                                                    <li>Name:<span><a href="#">RAKIBUL HASAN OVI<span class="label label-default"></span></a></span>
                                                    </li>
                                                    <li>Date: <span>18th June 2018</span>
                                                    </li>
                                                    <li>Type: <span>Student</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        
                                        </div>
                                        <div class="w-user-list-item">
                                            <div class="w-user-thumbnail">
                                                <a href="#">
                                                    <img class="img-responsive img-circle" alt="No Image Found"  src="<?php echo base_url('assets/images/users/').$user[0]['image'] ?>">
                                                </a>
                                            </div>
                                            <div class="w-user-info">
                                                <ul>
                                                    <li>Name:<span><a href="#">Alamgir Kabir <span class="label label-default"></span></a></span>
                                                    </li>
                                                    <li>Date: <span>18th June 2018</span>
                                                    </li>
                                                    <li>Type: <span>Teacher</span>
                                                    </li>
                                                </ul>
                                            </div>
                                         
                                        </div>
                                        <div class="w-user-list-item">
                                            <div class="w-user-thumbnail">
                                                <a href="#">
                                                     <img class="img-responsive img-circle" alt="No Image Found"  src="<?php echo base_url('assets/images/users/').$user[0]['image'] ?>">
                                                </a>
                                            </div>
                                            <div class="w-user-info">
                                                <ul>
                                                    <li>Name:<span><a href="#">Mahbubur Rahman<span class="label label-success"></span></a></span>
                                                    </li>
                                                    <li>Date: <span>18th June 2018</span>
                                                    </li>
                                                    <li>Type: <span>Student</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        
                                        </div>
                                    </div>

                        </div>

                    </div>

                </div>


            </section>           
        </div>        
    </div>

    <!-- Mainly scripts -->


    <?php $this->load->view('dashboard/common/footer_js');?>

    <!-- Flot -->
    

</body>
</html>
<style type="text/css">
    
    .text-danger strong {
                color: #9f181c;
            }
            .receipt-main {
                background: #ffffff none repeat scroll 0 0;
                border-bottom: 12px solid #333333;
                /*border-top: 12px solid #9f181c;*/
                border-top: 12px solid #cccccc;
                margin-top: 0px;
                margin-bottom: 15px;
                margin-right: 15px;
                padding: 40px 30px !important;
                position: relative;
                box-shadow: 0 1px 21px #acacac;
                color: #333333;
                font-family: open sans;
            }
            .receipt-main p {
                color: #333333;
                font-family: open sans;
                line-height: 1.42857;
            }
            .receipt-footer h1 {
                font-size: 15px;
                font-weight: 400 !important;
                margin: 0 !important;
            }
            .receipt-main::after {
                background: #414143 none repeat scroll 0 0;
                content: "";
                height: 5px;
                left: 0;
                position: absolute;
                right: 0;
                top: -13px;
            }
            .receipt-main thead {
                background: #414143 none repeat scroll 0 0;
            }
            .receipt-main thead th {
                color:#fff;
            }
            .receipt-right h5 {
                font-size: 16px;
                font-weight: bold;
                margin: 0 0 7px 0;
            }
            .receipt-right p {
                font-size: 12px;
                margin: 0px;
            }
            .receipt-right p i {
                text-align: center;
                width: 18px;
            }
            .receipt-main td {
                padding: 9px 20px !important;
            }
            .receipt-main th {
                padding: 13px 20px !important;
            }
            .receipt-main td {
                font-size: 13px;
                font-weight: initial !important;
            }
            .receipt-main td p:last-child {
                margin: 0;
                padding: 0;
            }   
            .receipt-main td h2 {
                font-size: 20px;
                font-weight: 900;
                margin: 0;
                text-transform: uppercase;
            }
            .receipt-header-mid .receipt-left h1 {
                font-weight: 100;
                /*margin: 34px 0 0;*/
                text-align: center;
                text-transform: uppercase;

            }
            .receipt-header-mid {
                /*margin: 24px 0;*/
                margin:auto;
                overflow: hidden;
            }
            
            #container {
                background-color: #dcdcdc;
            }

            @media screen and (min-width: 992px) {
                .col-md-3 {
                 width: 23%;
                }
            }
</style>
