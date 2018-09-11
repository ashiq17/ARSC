<!--************************************
                Footer Start
*************************************-->

<?php
$footer_data = $this->Home_Model->get_footer_data();
// echo "<pre>";
// print_r($footer_data);
// echo "</pre>";
// die();
?>


<footer id="tg-footer" class="tg-footer tg-haslayout">
    <div class="tg-footermiddlebar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="tg-widget tg-widgetcompanyinfo">


                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-contactus tg-contactusvone">
                                <div class="tg-widgettitle tg-text">
                                    <h3>বিদ্যালয়ের অবস্থান</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <div id="tg-officelocation1" class="tg-officelocation1">
                                            <iframe style="height: 160px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.5948071393786!2d90.43074971492905!3d23.76182449425676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b80a99878525%3A0xd934dd4081742b24!2sAbdur+Razzaque+School+And+College!5e0!3m2!1sen!2sbd!4v1534076621152" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="tg-widget tg-widgetcompanyinfo">
                        <div class="tg-widgettitle tg-text">
                            <h3>শিক্ষা বোর্ডের লিংক সমূহ</h3>
                        </div>
                        <div class="tg-widgetcontent">

                            <ul class="tg-infolist">
                                <li>
                                    <i class="icon-star"></i>
                                    <address><a href="http://www.mopme.gov.bd/">প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়</a></address>
                                </li>
                                <li>
                                    <i class="icon-star"></i>
                                    <span><a href="http://www.educationboardresults.gov.bd/">জুনিয়র স্কুল সার্টিফিকেট</a></span>
                                </li>
                                <li>
                                    <i class="icon-star"></i>
                                    <span><a href="http://www.educationboardresults.gov.bd/">মাধ্যমিক স্কুল সার্টিফিকেট</a></span>
                                </li>
                                <li>

                                    <i class="icon-star"></i>
                                    <span><a href="http://www.educationboardresults.gov.bd/">উচ্চ মাধ্যমিক শিক্ষা বোর্ড বাংলাদেশ</a></span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="tg-widget tg-widgetcompanyinfo">
                        <div class="tg-widgettitle tg-text">
                            <h3>যোগাযোগ করুন</h3>
                        </div>
                        <div class="tg-widgetcontent">

                            <ul class="tg-infolist">
                                <li>
                                    <i class="icon-location"></i>
                                    <address> <?php echo $footer_data['0']['Address1']; ?></address>
                                </li>
                                <li>
                                    <i class="icon-phone-handset"></i>
                                    <span><?php echo $footer_data['0']['MobileNo']; ?></span>
                                </li>
                                <li>
                                    <i class="icon-printer"></i>
                                    <span><?php echo $footer_data['0']['TelephoneNo']; ?></span>
                                </li>
                                <li>
                                    <a href="mailto:query@domain.com">
                                        <i class="icon-envelope"></i>
                                        <span><?php echo $footer_data['0']['Email']; ?></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li class="tg-twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li class="tg-linkedin"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                <li class="tg-googleplus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
                        <!-- 	<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="tg-footerbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <span class="tg-copyright">কপিরাইট  &copy; ২০১৮ <a href="http://ctlesol.com/">সাইবারডাইন টেকনোলজী লিমিটেড</a>, সর্বস্বত্ব সংরক্ষিত</span>
                    <nav class="tg-addnav">
                        <ul>
                            <li><a href="javascript:void(0);">গোপনীয়তা নীতিমালা</a></li>
                            <li><a href="javascript:void(0);">শর্তাবলী</a></li>
                            <li><a href="javascript:void(0);">যোগাযোগ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--************************************
                Footer End
*************************************-->
</div>
<!--************************************
                Wrapper End
*************************************-->
<script src="<?php echo base_url(); ?>assets/website/js/vendor/jquery-library.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/mapclustering/data.json"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="<?php echo base_url(); ?>assets/website/js/mapclustering/markerclusterer.min.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/mapclustering/infobox.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/mapclustering/map.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/isotope.pkgd.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/prettyPhoto.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/countdown.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/collapse.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/gmap3.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/main.js"></script>
</body>
</html>