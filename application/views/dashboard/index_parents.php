    
    <?php $this->load->view('dashboard/common/header');?>

</head>

<?php 
    // $this->load->model('notice/notice/Notice_Model');

    $this->load->model('Dashboard');

    // $get_superadmin = $this->Dashboard->findSuperAdmin();
    $user_id = $this->session->userdata('UserID');
    $user = $this->Dashboard->user($user_id);

    // $get_notice = $this->Dashboard->find_notice();
    
    // $department = $user[0]['department'];
    // $designation = $user[0]['designation'];
    // foreach ($get_notice as $key => $notice) {
    //     if ($notice['notice_view_type']==1) {
    //         // continue;
    //         $get_notice = $this->Dashboard->find_noticee($department,$designation);
    //     }elseif($notice['notice_view_type']==2){
    //         // $depart_or_desig = $notice['depart_or_desig'];
    //         $get_notice = $this->Dashboard->find_noticee($department,$designation);
    //     }elseif($notice['notice_view_type']==3){
    //         // $depart_or_desig = $notice['depart_or_desig'];
    //         $get_notice = $this->Dashboard->find_noticee($department,$designation);
    //     }
    // }


 ?>

<body>
    <div id="wrapper">
        <?php $this->load->view('dashboard/common/left_nav');?>

        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav');?>
            </div>

           <section id="main-content">
                   
                <div class="row">
                    <div class="col-lg-12" style="padding-top: 20px!important;">

                   <!-- start widget -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12" >
                            <div class="analysis-box m-b-0 bg-purple">
                                <h3 class="text-white box-title">Total Students <span class="pull-right"><i class="fa fa-caret-up"></i> 345</span></h3>
                            
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="analysis-box m-b-0 bg-danger">
                                <h3 class="text-white box-title">New Students <span class="pull-right"><i class="fa fa-caret-up"></i> 643</span></h3>
                            
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="analysis-box m-b-0 bg-blue">
                                <h3 class="text-white box-title">Total Course <span class="pull-right"><i class="fa fa-caret-up"></i>765</span></h3>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="analysis-box m-b-0 bg-success">
                                <h3 class="text-white box-title">Visitors <span class="pull-right"><i class="fa fa-caret-up"></i> 323</span></h3>
                               
                            </div>
                        </div>
                    </div>
                    <!-- end widget -->

                    </div>
                </div> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h2 align="center" style="font-size: 24px; font-weight: 400;">
                                school Management software
                            </h2>
                          
                           
                        </div>
                    </div>
                </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="wrapper wrapper-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="container">
                                                    <div class="row">
                                                            <div class="receipt-main col-md-3 col-md-offset-1">
                                                                <div class="row">
                                                                    <div class="receipt-header receipt-header-mid">
                                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                                            <div class="receipt-right">
                                                                                <h4>Parents Panel Notification</h4>
                                                                                <div class="col-md-12" style="padding:0px">
                                                                                    <span class="col-md-6" style="padding:0px; font-size:10px;">Notice No: czm/G/201/103</span>
                                                                                    <span class="col-md-6 text-right" style="padding:0px; font-size:10px;">Date:3/11/2018 </span>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <h1 class="text-center" style="font-weight:bold"><span style="border-bottom:4px solid;">Notice</span></h1>
                                                                                </div>
                                                                                <br>
                                                                                <h5>Lorem ipsum</h5>  
                                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                             <div class="receipt-main col-md-3">
                                                                <div class="row">
                                                                    <div class="receipt-header receipt-header-mid">
                                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                                            <div class="receipt-right">
                                                                                <h4>Parents Panel Notification</h4>
                                                                                <div class="col-md-12" style="padding:0px">
                                                                                    <span class="col-md-6" style="padding:0px; font-size:10px;">Notice No: czm/G/201/103</span>
                                                                                    <span class="col-md-6 text-right" style="padding:0px; font-size:10px;">Date:3/11/2018 </span>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <h1 class="text-center" style="font-weight:bold"><span style="border-bottom:4px solid;">Notice</span></h1>
                                                                                </div>
                                                                                <br>
                                                                                <h5>Lorem ipsum</h5>  
                                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                             <div class="receipt-main col-md-3">
                                                                <div class="row">
                                                                    <div class="receipt-header receipt-header-mid">
                                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                                            <div class="receipt-right">
                                                                                <h4>Parents Panel Notification</h4>
                                                                                <div class="col-md-12" style="padding:0px">
                                                                                    <span class="col-md-6" style="padding:0px; font-size:10px;">Notice No: czm/G/201/103</span>
                                                                                    <span class="col-md-6 text-right" style="padding:0px; font-size:10px;">Date:3/11/2018 </span>
                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <h1 class="text-center" style="font-weight:bold"><span style="border-bottom:4px solid;">Notice</span></h1>
                                                                                </div>
                                                                                <br>
                                                                                <h5>Lorem ipsum</h5>  
                                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
