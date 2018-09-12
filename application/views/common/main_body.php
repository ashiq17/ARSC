<?php $this->load->view('common/DailyAlert'); ?>
<?php
$this->load->model('Home_Model');
$get_gallery_slider_image = $this->Home_Model->find_gallery_slider_image();
$get_notification = $this->Home_Model->get_notification_to_all();
$get_top_student = $this->Home_Model->get_top_student();
$header_data = $this->Home_Model->get_header_data();


// echo "<pre>";
//   print_r($get_top_student);
//  echo "</pre>";
// die();
?>

<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tg-homebannervtwo">
                <div id="tg-homeslider" class="tg-homeslider owl-carousel tg-btnround tg-haslayout">
                    <?php
                    $i = 0;
                    $active = 'active';
                    foreach ($get_gallery_slider_image as $key => $value) {
                        $i++;
                        ?>
                        <div class="item">
                            <figure>
                                <img src='<?php echo base_url(); ?>images/photo-gallery/<?php echo $value['ph_image']; ?>' alt="image description">
                            </figure>
                        </div>
                    <?php } ?>
                </div>
                <div class="tg-noticeboardarea">
                    <div class="tg-widget tg-widgetadmissionform">
                        <div class="tg-widgetcontent">
                            <h3>২০১৭ সালের পরীক্ষার ফলাফল</h3>
                            <div class="tg-description">
                                <p>২০১৭ সালের পরীক্ষার ফলাফল জানতে নীচের বাটনে ক্লিক করুন</p>
                            </div>
                            <a class="tg-btn tg-btnicon" href="javascript:void(0);">
                                <i class="fa fa-file-pdf-o"></i>
                                <span>পিডিএফ ডাউনলোড করুন</span>
                            </a>
                        </div>
                    </div>
                    <div class="tg-widget tg-widgetadmissionform">
                        <div class="tg-widgetcontent">
                            <h3>ভর্তি ফরম</h3>
                            <div class="tg-description">
                                <p>ভর্তি ফরম সংগ্রহ করতে নিচের বাটনে ক্লিক করুন </p>
                            </div>
                            <a class="tg-btn tg-btnicon" href="javascript:void(0);">
                                <i class="fa fa-file-pdf-o"></i>
                                <span>পিডিএফ ডাউনলোড করুন</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--************************************
                Home Slider End
*************************************-->
<!--************************************
                Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                    <div id="tg-content" class="tg-content">
                        <section class="tg-sectionspace tg-haslayout">
                            <div class="tg-shortcode tg-welcomeandgreeting">
                                <div class="tg-shortcodetextbox">
                                    <h2>আব্দুর রাজ্জাক স্কুল অ্যান্ড কলেজ</h2>
                                    <br>
                                    <div class="tg-description">
                                        <p>শিক্ষাই জাতির মেরুদন্ড। কোনো জাতিকে সুশিক্ষিত ক'রে গড়ে তোলার জন্য প্রয়োজন যুগোপযোগী পাঠ্যক্রম, উপযুক্ত পরিবেশ, সুনিবিড় তত্ত্বাবধান এবং সুপরিকল্পিত শিক্ষা পদ্ধতি। এই লক্ষ্যকে সামনে রেখেই আব্দুর রাজ্জাক স্কুল অ্যান্ড কলেজ প্রতিষ্ঠিত হয়েছে। ২০১৮ সালের ডিসেম্বরে আব্দুর রাজ্জাক স্কুল অ্যান্ড কলেজ-এর বয়স ১০ বছর পূর্ণ হবে। ইতোমধ্যে প্রতিষ্ঠানটি যথেষ্ট সুনাম অর্জন করেছে। জে এস সি এবং এস এস সি-তেও চমৎকার ফলাফল করছে। আগামীতে এইচ এস সি-তেও প্রশংসনীয় ফলাফল আশা করছি।</p>
                                        <br>
                                        <h3>আব্দুর রাজ্জাক স্কুল অ্যান্ড কলেজের প্রতিষ্ঠা</h3>
                                        <br>
                                        <p>শিক্ষার্থীদের মধ্যে সুশিক্ষা অর্থাৎ Balanced Education বা  Total Education প্রদান করার লক্ষ্যে জনাব আব্দুর রাজ্জাক, আরমা গ্রুপের প্রতিষ্ঠাতা ও চেয়ারম্যান এই স্কুলটি প্রতিষ্ঠা করেন। জনাব আব্দুর রাজ্জাক ইতোমধ্যেই একজন বিশিষ্ট শিক্ষানুরাগী ও সমাজসেবক হিসেবে যথেষ্ট সুনাম অর্জন করেছেন। তিনি প্রতি বছর গরীব ও মেধাবী ছাত্র- ছাত্রীদেরকে বৃত্তি প্রদান এবং বিভিন্ন সামাজিক উন্নয়নমূলক কর্মকা-ে প্রচুর অর্থ দান করে থাকেন।</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="tg-sectionspace tg-haslayout">
                            <div class="tg-shortcode tg-welcomeandgreeting">
                                <figure><img style="padding-left: 20px;" src="<?php echo base_url(); ?>assets/website/images/img/abdurrazzaque.png" alt="abdurrazzaque" >
                                    <h5 style="text-align: center;">আব্দুর রাজ্জাক </h5>
                                    <h5 style="text-align: center;">প্রতিষ্ঠাতা ও সভাপতি</h5>
                                </figure>                                
                                <div class="tg-shortcodetextbox">
                                    <h3>প্রতিষ্ঠাতার সম্পর্কে কিছু কথা</h3>
                                    <br>
                                    <div class="tg-description">
                                        <p>আলোকিত মানুষ গড়ার নেপথ্যের কুশলী কারিগর। দেশপ্রেম, মুক্তচিন্তা, সেবামূলক ও কল্যাণকর কর্মকান্ডের বৃত্তে আলোকরশ্মি উজ্জ্বল ব্যক্তিত্ব তিনি। অগ্রসর ও শিক্ষিত সমাজ গঠনে সমাজমনস্ক নান্দনিক ব্যক্তি হিসেবে যাঁকে অভিহিত করা যেতে পারে অনায়াসে।
                                            সাধকের তকমা লাগানো লালনের কুষ্টিয়ার মানুষ তিনি। দৌলতপুর উপজেলার ফিলিপনগর গ্রামে সম্ভ্রান্ত মুসলিম পরিবারে জন্মগ্রহণ করেছেন। কুষ্টিয়ার মাটি নানাসময়ে জন্ম দিয়েছে অনেক সাধক-পুরুষের। আব্দুর রাজ্জাক এ-সময়কালে শিক্ষার আলো জ্বালানো প্রত্যয়ী সাধক-পুরুষ। যাঁর জীবনব্রত মানুষের কল্যাণসাধন।
                                            আব্দুর রাজ্জাক সরকারি কর্মকর্তা-বাবার সন্তান। পিতা আব্দুল মোত্তালিব থানা কৃষি কর্মকর্তা ছিলেন। তিনি ইচ্ছে করলে মেধা-শ্রমে-সাধনায় সরকারি কর্মকর্তা হওয়ার পথটি সহজেই মুঠোবন্দি করতে পারতেন, তিনি তা করেন নি। মানুষের সেবা করার জন্য, শিক্ষিত সমাজ গড়ে তোলার জন্য, অসচ্ছল মানুষের পাশে সহযোগিতার হাত বাড়ানোর জন্য ব্যবসাকেই তিনি শ্রেয় মনে করেছেন এবং পেশাগত জীবনে ব্যবসাকেই গ্রহণ করেছেন, ললাটে পরে নিতে পেরেছেন সাফল্যতিলক।
                                        </p>                                              
                                    </div>
                                    <div id="demo" class="collapse">
                                        <p>
                                        মানুষের কর্মটিই আসল-কর্মের ভেতরই পূর্ণতা-কর্মের ভেতরই বেঁচে থাকা-কর্মের ভেতরই দেশপ্রেম-এ সত্যটি ধারণ করেই তিনি ব্যক্তি মানুষ-সকল মানুষের হয়ে-ওঠার লক্ষে কাজ করেন, যা অভিহিত হতে পারে মানবসাধন হিসেবে। এই মানবসাধনই তাঁর জীবনের ব্রত। আর এ লক্ষেই তিনি প্রতিষ্ঠা করেছেন ‘আরমা ওয়েলফেয়ার সোসাইটি।’ প্রাতিষ্ঠানিকভাবে এ প্রতিষ্ঠানটির যাত্রা শুরু হয়েছিল ২০০৩ সাল থেকে। এ প্রতিষ্ঠানটির মাধ্যমেই পরিচালিত হচ্ছে সেবা ও শিক্ষামূলক বিভিন্ন প্রতিষ্ঠান ও নানামুখী সেবামূলক কর্মকান্ড।
                                        শিক্ষানুরাগী আব্দুর রাজ্জাক নিজের আবাসস্থল ঢাকার বনশ্রীতে ২০০৮ সালে প্রতিষ্ঠা করেছেন ‘আব্দুর রাজ্জাক স্কুল অ্যান্ড কলেজ।’ কোমলমতি সোনামণিদের কথা চিন্তা করে প্রতিষ্ঠানটি গড়ে উঠলেও এর কার্যক্রম পর্যায়ক্রমে যেমন বিস্তৃতি ঘটেছে, তেমনি এটি এখন কিশোর  তরুণ শিক্ষার্থীদেরও প্রিয় প্রতিষ্ঠান। কারণ স্কুলের সঙ্গে এটির নতুন মাত্রা সংযোজিত হয়েছে কলেজ। আধুনিক ও সময়োপযোগী শিক্ষাপ্রতিষ্ঠান হিসেবে এটি এখন সুপরিচিত। মেধাবী ও দক্ষ শিক্ষকেরা যেখানে আন্তরিকভাবে পাঠ্য বিষয় ছাড়াও শিল্প-সাহিত্য-সংস্কৃতিমনা করে গড়ে তোলেন শিক্ষার্থীদের।
                                        বনশ্রী ছাড়াও কুষ্টিয়া, রাজশাহী ও দিনাজপুরসহ দেশের বিভিন্ন স্থানে তিনি শিক্ষা ও স্বাস্থ্যসেবা প্রতিষ্ঠান গড়ে তুলেছেন। তিনি আরমা ওয়েলফেয়ার সোসাইটির মাধ্যমে শিক্ষার্থীদের মধ্যে প্রত্যয় ও দৃঢ়তার আলো জ্বালানোর লক্ষে কুষ্টিয়ার দৌলতপুর, ভেড়ামারা ও মিরপুর উপজেলা এবং পাবনার ঈশ্বরদী উপজেলাসহ দেশের বিভিন্ন জেলায় সম্পূর্ণ ব্যক্তিদ্যোগে অসচ্ছল মেধাবী শিক্ষার্থীদের নিয়মিত বৃত্তি প্রদান ও অর্থনৈতিক সহযোগিতা করেন। প্রতি বছর এ সোসাইটির মাধ্যমে অসচ্ছল মেধাবী শিক্ষার্থীদের প্রতিযোগিতামূলক পরীক্ষার মাধ্যমে প্রায় ৪০০ জন মেধাবী শিক্ষার্থীকে ‘আব্দুর রাজ্জাক মেধা বৃত্তি’ প্রদান করা হয়। এছাড়া তাঁর নিজ জেলার দৌলতপুর উপজেলায় প্রতিষ্ঠিত হয়েছে আব্দুর রাজ্জাক মৎস্য প্রযুক্তি ইনস্টিটিউট।
                                        স্বাস্থ্যসেবা প্রদানের ক্ষেত্রেও আরমা ওয়েলফেয়ার সোসাইটি বিশেষ অবদান রাখছে। দিনাজপুরের অরবিন্দ শিশু হাসপাতালে মা ও শিশুর স্বাস্থ্যসেবা প্রদানের জন্যে প্রতিষ্ঠিত হয়েছে ‘আব্দুর রাজ্জাক জেনারেল ওয়ার্ড’ ও বহির্বিভাগ।
                                        অসহায় ও অসচ্ছল পরিবারগুলোর সঙ্গে তাঁর সম্পর্ক যেন অবিচ্ছেদ্য। তাঁর নিজ এলাকার অসচ্ছল অসহায় মানুষদের পাশে সামর্থ্যরে সবটুকু দিয়ে, তাঁদেরকে করে নিয়েছে পরম এক আপনজন। তিনি প্রতি বছরেই গরিব মেয়ের বিবাহ দেয়ার ব্যবস্থা করেন, যার সম্পূর্ণ ব্যয়ভার তাঁর। কর্মসংস্থান তৈরির ক্ষেত্রেও তাঁর ভূমিকা উল্লেখযোগ্য। ধর্মীয় প্রতিষ্ঠান মসজিদ নির্মাণসহ পরিচালনার ক্ষেত্রেও তাঁর সক্রিয় অংশগ্রহণ রয়েছে।
                                        আব্দুর রাজ্জাক তাঁর বিভিন্ন কর্মের ভেতর দিয়ে মানুষের জীবন ও কল্যাণসারথী হিসেবেই নিজেকে প্রতিষ্ঠা করতে পেরেছেন- এখানেই তিনি অনন্য এক ব্যক্তিত্ব।
                                        </p>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo">বিস্তারিত পড়ুন</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <div class="tg-widget tg-widgetdownload">
                            <div class="tg-widgettitle">
                                <h3>প্রয়োজনীয় ফাইল</h3>
                            </div>
                            <div class="tg-widgetcontent tt">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-paperclip"></i>
                                            <span>প্রসপেক্টাস</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-map-signs"></i>
                                            <span>ভর্তির নীতিমালা</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-list-ul"></i>
                                            <span>মেধা তালিকা-২০১৭</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-calendar-check-o "></i>
                                            <span>পরীক্ষার সময়সূচী</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-bookmark-o"></i>
                                            <span>পরীক্ষার নীতিমালা</span>
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-bookmark-o"></i>
                                            <span>Examination Guide 2017</span>
                                        </a>
                                    </li><li>
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-bookmark-o"></i>
                                            <span>Examination Guide 2017</span>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="tg-widget tg-widgetcampuses">
                            <div class="tg-widgettitle">
                                <h3>সর্বশেষ ঘটনাবলী</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <div id="tg-campusslider" class="tg-campusslider owl-carousel tg-campuses">
                                    <div class="item">
                                        <article class="tg-themepost tg-themepostleftimg">
                                            <figure class="tg-featuredimg">
                                                <a href="javascript:void(0);">
                                                    <img width="100%" src="<?php echo base_url(); ?>assets/website/images/events/img-01.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-themepostcontent">
                                                <ul class="tg-matadata">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-calendar"></i>
                                                            <span>মঙ্গলবার, এপ্রিল ১৮, ২০১৭</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tg-themeposttitle">
                                                    <h3><a href="javascript:void(0);">স্কুলের কার্যকলাপ ও ঘটনাবলী</a></h3>
                                                    <p>স্কুলের কার্যকলাপ ও ঘটনাবলীসূমহ </p>
                                                </div>
                                                <button class="btn btn-success btn-sm">বিস্তারিত জানতে</button>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="tg-themepost tg-themepostleftimg">
                                            <figure class="tg-featuredimg">
                                                <a href="javascript:void(0);">
                                                    <img width="100%" src="<?php echo base_url(); ?>assets/website/images/events/img-01.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-themepostcontent">
                                                <ul class="tg-matadata">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-calendar"></i>
                                                            <span>মঙ্গলবার, এপ্রিল ১৮, ২০১৭</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tg-themeposttitle">
                                                    <h3><a href="javascript:void(0);">স্কুলের কার্যকলাপ ও ঘটনাবলী</a></h3>
                                                    <p>স্কুলের কার্যকলাপ ও ঘটনাবলীসূমহ </p>
                                                </div>
                                                <button class="btn btn-success btn-sm">বিস্তারিত জানতে</button>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="tg-themepost tg-themepostleftimg">
                                            <figure class="tg-featuredimg">
                                                <a href="javascript:void(0);">
                                                    <img width="100%" src="<?php echo base_url(); ?>assets/website/images/events/img-01.jpg" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-themepostcontent">
                                                <ul class="tg-matadata">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-calendar"></i>
                                                            <span>মঙ্গলবার, এপ্রিল ১৮, ২০১৭</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tg-themeposttitle">
                                                    <h3><a href="javascript:void(0);">স্কুলের কার্যকলাপ ও ঘটনাবলী</a></h3>
                                                    <p>স্কুলের কার্যকলাপ ও ঘটনাবলীসূমহ </p>
                                                </div>
                                                <button class="btn btn-success btn-sm">বিস্তারিত জানতে</button>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <section class="tg-sectionspace tg-haslayout">
                    <div class="row2">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=tg-glanceatuoeandk">
                                <div class="tg-borderheading">
                                    <h2>এক নজরে স্কুল</h2>
                                </div>
                                <!-- <ul class="tg-gallery">
                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-00.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-00.jpg" alt="image description">
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-01.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-01.jpg" alt="image description">
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-02.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-02.jpg" alt="image description">
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-03.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-03.jpg" alt="image description">
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-04.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-04.jpg" alt="image description">
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" alt="image description">
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" alt="image description">
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" alt="image description">
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" alt="image description">
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <a class="tg-btnview" href="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                            <img src="<?php echo base_url(); ?>assets/website/images/glance/img-05.jpg" alt="image description">
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                                <!-- <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                    <div class="tg-widget tg-widgetquicklinks">
                                        <div class="tg-borderheading">
                                            <h2>Quick Links</h2>
                                        </div>
                                        <div class="tg-widgetcontent">
                                            <ul>
                                                <li><a href="javascript:void(0);">Downloads Function Form</a></li>
                                                <li><a href="javascript:void(0);">Admissions Guidline For New Students</a></li>
                                                <li><a href="javascript:void(0);">UOE&amp;K Online Library</a></li>
                                                <li><a href="javascript:void(0);">Multimedia and Entertainment</a></li>
                                                <li><a href="javascript:void(0);">Annual Holiday Trip to Dubai 2017</a></li>
                                                <li><a href="javascript:void(0);">Student Advisory June 27,2017</a></li>
                                                <li><a href="javascript:void(0);">Parents Meeting 2017</a></li>
                                                <li><a href="javascript:void(0);">Overseas &amp; E-Learning</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            </section>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <!-- <section style="background-color: #ffffff!Important;" class="tg-sectionspace tg-haslayout">
            
            
                                    <div class="tg-affiliationscertifications">
                                        <div class="tg-borderheading"><h2>সেরা শিক্ষার্থীরা-২০১৮</h2>
                                        </div>
                                        <div id="tg-affiliationscertificationsslider" class="tg-affiliationscertificationsslider owl-carousel
                                             tg-signupbox">
            
                                <?php
                                $i = 0;
                                $active = 'active';
                                foreach ($get_top_student as $key => $value) {
                                    $i++;
                                    ?>
                
                                                    <div style="background-color: #f2f2f2!Important;"  class="item">
                                                        <figure>
                                                            <a href="javascript:void(0);">
                                                                <img style="height: 120px!Important; width: 120px!Important; padding: 10px;" src='<?php echo base_url(); ?>images/student/<?php echo $value['Image']; ?>' alt="image description">
                                                            </a>
                                                            <p><?php echo $value['Std_Name']; ?></p>
                                                            <p><?php echo $value['Class_Name']; ?></p>
                                                        </figure>
                                                    </div>
                
                                <?php } ?>
            
                                        </div>
                                    </div>
                                </section> -->
                            </div>
                        </div>
                    </div>
            </div>
            </main>
            <!--************************************
                            Main End
            *************************************-->