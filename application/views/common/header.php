<!doctype html>

<html class="no-js" lang="zxx"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>আব্দুর রাজ্জাক স্কুল অ্যান্ড কলেজ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/website/apple-touch-icon.png">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/icomoon.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/owl.theme.default.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/transitions.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/color.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/responsive.css">
        <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/website/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <style>
            .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
                /*    color: #fff;*/
                background-color: #563D7C;
                /*border-color: #122b40;*/
            }
            .tg-addressinfo li i {
                font-size: 12px;
                line-height: 20px;
                padding: 1px;
            }
            .tg-topbar {
                width: 100%;
                float: left;
                min-height: 15px;
                background: #037329;
                padding: 0 0 0 0px;
            }
            .tg-addressinfo {
                color: #ffffff;
                float: left;
                padding: 0px;
                font-size: 12px;
                line-height: 10px;
                list-style: none;
            }
            .tg-navigation ul li a {
                color: #000;
                display: block;
                padding: 0 23px;
                position: relative;
                line-height: inherit;
                border: #F79837;
            }
            li {
                line-height: 28px;
                list-style: none inside none;
            }
            .tg-navigation > ul > li:last-child > .sub-menu {
                right: -142px !important;
                left: auto;
            }
            .row {
                margin-right: -41px;
                margin-left: -41px;
            }
            .tg-shortcodetextbox h2 {
                margin: 0px 0 10px;
                font-size: 27px;
                line-height: 15px;
                padding-top: 13px;
            }
            #notice{
                margin-left: 4px;
            }
            .tg-themepostleftthumb .tg-featuredimg a img, .tg-themepostleftthumb .tg-featuredimg img, .tg-themepostleftimg .tg-featuredimg a img, .tg-themepostleftimg .tg-featuredimg img {
                height: 255px !important;
            }
            .btn-primary.focus, .btn-primary:focus {
                color: #fff;
                background-color: #037329 !important;
                border-color: #122b40;
            }
            .appbt {
                margin-top: 8px !important;
                background-color: #037329;
                color: #ffe484;
                font-weight: bold;
                border-color: #efd288 !important;
            }
            .appbt:hover {
                color: #ffffff !important;

            }
            .btn-success:hover {
                background-color: #037329;
            }
            .tg-widgetcompanyinfo .tg-infolist {

                padding: 0 0 20px;
                font-weight: bold;
            }
            .sign {
                margin: 0 0 0px;
                font-size: 16px;
                line-height: 25px;
            }
            .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
                z-index: 2;
                color: #f2f2f2;
                background-color: #037329 !important;
                border-color: #ffffff !important;
            }
            .list-group-item:hover {
                background-color: #037329 !important;
                color: #ffffff !important;
            }
        </style>
    </head>

    <?php
    $header_data = $this->Home_Model->get_header_data();
    // echo "<pre>";
    // print_r($header_data);
    // echo "</pre>";
    // die();
    ?>
    <body class="tg-home tg-homeone">
        <div id="tg-wrapper" class="tg-wrapper">
            <!--************************************
            Header Start
            *************************************-->
            <header id="tg-header" class="tg-header tg-haslayout">
                <div class="tg-topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="tg-addressinfo">
                                    <li>
                                        <i class="icon-map-marker"></i>
                                        <address> <?php echo $header_data['0']['Address1'] ?> </address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span><?php echo $header_data['0']['MobileNo']; ?></span>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span><?php echo $header_data['0']['TelephoneNo'] ?></span>
                                    </li>
                                </ul>
                                <!--                                <div class="tg-themedropdown tg-languagesdropdown">
                                                                     <a href="javascript:void(0);" id="tg-languages" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <button class="btn btn-primary appbt">APPLY ONLINE</button> 
                                                                    <a style="color: #ffe484;" target="_blank" href="<?php echo base_url('login'); ?>"><button class="btn btn-primary appbt">অ্যাডমিন</button></a>
                                                                    </a>
                                                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="tg-logoandnoticeboard" style="background-color:#f3f3f3; padding: 0px;">
                    <strong class="tg-logo"><a href="<?php echo base_url(); ?>">
                            <img style="height: 75px!Important; width: 80px; alignment-adjust: right"  src='<?php echo base_url(); ?>assets/images/headerImages/<?php echo $header_data['0']['Image'] ?>' alt="School Logo">
                        </a></strong>
                    <div class="tg-noticeboard hidden-xs">
                        <div class="tg-textbox">
                            <!--<h3 align="center" style="text-transform: uppercase; color: #037329;font-size: 50px; font-weight: bold;">ABDUR RAZZAQUE SCHOOL & COLLEGE</h3>-->
                            <h2 style="text-transform: uppercase; color: #037329">
                                <?php echo $header_data['0']['HeaderTitle'] ?>

                            </h2>


                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="tg-navigationarea">
                                <nav id="tg-nav" class="tg-nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                        <ul>
                                            <li class="current-menu-item">
                                                <a href="<?php echo base_url(); ?>">হোম</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">আমাদের কথা</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo base_url() ?>home/PrincipalStatment">অধ্যক্ষর বাণী</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/aimsAndObjective">লক্ষ্য ও উদ্দেশ্য</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/keyFetures">আমাদের বৈশিষ্ট্য</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/TeachersAndStaffs">শিক্ষক ও কর্মচারীবৃন্দ</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/bodCollege">পরিচালনা পর্ষদ</a></li>
                                                    <!-- <li><a href="<?php echo base_url() ?>home/PrincipalStatment">সভাপতি পরিচিতি</a></li> -->
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">একাডেমিক তথ্য</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo base_url() ?>home/AcademicClaender">শিক্ষাবর্ষ সূচি</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/ClassSchedule">শ্রেণির সময়সূচী</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/ExamSchedule">পরীক্ষার সময়সূচী</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/evaluation">গুনবিচার এবং মূল্যায়ন ব্যবস্থা</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/SchoolDressInfo">স্কুলের পোষাক</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/subjects">বিষয়াবলী</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/Fees">সকল ফী সূমহ</a></li>
                                                </ul>
                                            </li>


                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">ভর্তি তথ্য</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo base_url() ?>home/AdmissionProcedure">ভর্তি প্রক্রিয়া</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/HowToApply">আবেদনের নিয়মাবলী</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">সুবিধাসমূহ এবং সেবা</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo base_url() ?>home/IctLab">আইসিটি ল্যাব</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/Library">গ্রন্থাগার</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/PlayingFacelite">সাংস্কৃতিক কর্মকান্ড ও খেলাধুলা</a></li>
                                                    <!-- <li><a href="<?php echo base_url() ?>home/SchoolTransport">School Transport</a></li> -->
                                                    <!-- <li><a href="<?php echo base_url() ?>home/ScienceLab">বিজ্ঞানাগার</a></li> -->
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">সংবাদ ও ঘটনাবলী</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo base_url() ?>home/Achievement">আমাদের সাফল্য</a></li>

                                                    <li><a href="<?php echo base_url() ?>home/NoticeAndAnnouncement">বিজ্ঞপ্তি এবং ঘোষণা</a></li>
                                                    <li><a href="<?php echo base_url() ?>home/UpcomingEvent">আসন্ন ঘটনাবলী</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">পরীক্ষার ফলাফল</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo base_url() ?>home/ExamResult_index">একক ফলাফল</a></li>
                                                    <!-- <li><a href="<?php echo base_url() ?>home/ExamResult_all_index">All Result</a></li> -->

                                                </ul>
                                            </li>


                                            <li><a href="<?php echo base_url() ?>home/ContactUs">যোগাযোগ </a></li>
                                            <li><a href="<?php echo base_url('login'); ?>" target="_blank" >অ্যাডমিন</a></li>

                                            <!--                                            <li class="menu-item-has-children">
                                                                                            <a href="javascript:void(0);">লগইন</a>
                                                                                            <ul class="sub-menu">
                                                                                                <li><a target="_blank" href="<?php echo base_url('login'); ?>">শিক্ষার্থী লগইন</a></li>
                                                                                                <li><a target="_blank" href="<?php echo base_url('login'); ?>">শিক্ষক লগইন</a></li>
                                                                                                <li><a target="_blank" href="<?php echo base_url('login'); ?>">অভিভাবক লগইন</a></li>
                                                                                            </ul>
                                                                                        </li>-->
                                        </ul>
                                    </div>
                                </nav>
                                <div class="tg-searchbox">
                                    <a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
                                    <form class="tg-formtheme tg-formsearch">
                                        <fieldset><input type="search" name="search" class="form-control" placeholder="অনুসন্ধান করুন"></fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--************************************
                            Header End
            *************************************-->

