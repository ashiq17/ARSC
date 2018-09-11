<?php $this->load->view('dashboard/common/header');?>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/ckeditor/ckeditor.js"></script>
    <link href="<?php echo base_url();?>assets/dashboard/css/upload.css" rel="stylesheet">
    <style type="text/css">
        .modal-dialog, .modal-content {
            width: 98%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        .wrapper-content {
            padding: 0px 0px 0px;
        }
        .panel-body {
        padding: 2px 15px 10px 15px;
        }
        .modal-body {
            position: relative;
            width: 100%;
            height: 80%;
        }
        .modal-footer {
            position: relative;
            width: 100%;
            height: 20%;
        }
           .ibox {
        clear: both;
        margin-bottom: 1px;
        margin-top: 0;
        padding: 0;
    }
        
    </style>
</head>
<body>
    <div id="wrapper">
        <?php $this->load->view('dashboard/common/left_nav');?>
        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav');?>
            </div>
            <section id="main-content">
            <form action="<?php echo base_url();?>about/about/add_about_info" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <div class="wrapper wrapper-content">
                                <div class="row">
                                 <?php
                        if ($this->session->has_userdata('message')) {
                            ?>
                            <div class="alert alert-success text-center hideMessage">
                                <strong><?php echo $this->session->message; ?></strong>
                            </div>
                            <?php
                            $this->session->unset_userdata('message');

                        } elseif ($this->session->has_userdata('error_msg')) {
                            ?>
                            <div class="alert alert-danger text-center hideMessage">
                                <strong><?php echo $this->session->error_msg; ?></strong>
                            </div>
                            <?php
                            $this->session->unset_userdata('error_msg');
                        }
                        // echo "<pre>";
                        // print_r($notice_title);
                        // echo "</pre>";
                        ?>
                                    <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5 style="color:white">Add New About Me <span class=" text-right">
                                                <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>about/about/all_about">All About ME</a></span>
                                                 <span class=" text-right">
                                                <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>about/about/index_bangla">Add New বাংলা</a></span> 
                                                 <span class=" text-right">
                                                <!-- <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>about/about/all_about_bangla">All  About বাংলা</a></span> -->
                                                </h5> 
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="form-group">
                                                     <h5 style="color:green"> About Name </h5>
                                                    <input type="text" id="aboutName" name="aboutName" placeholder="about Name" class="form-control" required="required">
                                                </div>
                                                <div class="form-group">
                                                     <h5 style="color:green"> About Designation </h5>
                                                    <input type="text" id="aboutDesignation" name="aboutDesignation" placeholder="about Designation" class="form-control" required="required">
                                                </div>
                                               
                                                <div class="form-group">
                                                     <h5 style="color:green">  About  BODY </h5>
                                                    <textarea name="aboutBody"></textarea>
                                                </div>
                                                <div class="form-group">
                                                     <h5 style="color:green">  About Mission</h5>
                                                    <textarea name="aboutMission"></textarea>
                                                </div>
                                                <div class="form-group">
                                                     <h5 style="color:green">  About Vission </h5>
                                                    <textarea name="aboutVission"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4" style="padding-left: 0px; padding-right: 0px;">
                            <div class="wrapper wrapper-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox">
                                            <div class="ibox-title">
                                            </div>
                                            <div class="ibox-content">
                                                    <h5 style="color:green">Featured Image</h5>
                                                  <input type="file" style="margin-top:2px;" name="image" id="imgInp" class="form-control" style="padding-top:5px;">
                                                            
                                                <img class="img-responsive" style="width:190px;height:120px;" id="blah" alt=""/> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5 style="color:white">Save Only</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="pull-left" >
                                                    <input class="btn btn-info" style="height: 30px; width:150px;"  type="submit" name="submit" value="Save">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox ">
                                            <div class="ibox-title">
                                                <h5  style="color:white">  Save & Published </h5>
                                            </div>
                                            <div class="ibox-content" >
                                                <div class="pull-left">
                                                    <input class="btn btn-info" style="height: 30px; width:150px;" type="submit" name="submit" value="Published">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>
            </section>               
        </div>        
    </div>

    <!-- Mainly scripts -->

    <?php $this->load->view('dashboard/common/footer_js');?>

    <script src="<?php echo base_url();?>assets/dashboard/js/plugins/pace/pace.min.js"></script>
    <!-- DROPZONE -->
    <script src="<?php echo base_url();?>assets/dashboard/js/upload.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
        <script>
            CKEDITOR.replace( 'aboutBody' );
        </script>
        <script>
            CKEDITOR.replace( 'aboutMission' );
        </script>
        <script>
            CKEDITOR.replace( 'aboutVission' );
        </script>

        <script type="text/javascript">

            $(document).ready(function() {
                $("#newsTitle").on('change keydown paste input', function(){
                    var newsTitle = $('#newsTitle').val();
                    var newsSlug1  = newsTitle.replace(/[&\/\\#,+()$~%.'":*?<>{}]অ/g, '');
                    var newsSlug  = newsSlug1.replace(/ /g, "-");
                    $('#newsSlug').val(newsSlug);
                });
            });

            $("#newsSlug").on('change keydown paste input', function(){
                //var getid = $(".menu_slug").attr('id');
                var newsSlug = $('#newsSlug').val();
                var newsSlug1  = newsSlug.replace(/[&\/\\#,+()$~%.'":*?<>{}!@^_=`।=`;|]/g, '');
                var newsSlug2  = newsSlug1.replace(/অ/g, "");
                var newsSlugreplace  = newsSlug2.replace(/ /g, "-");
                $('#newsSlug').val(newsSlugreplace);

                //alert(menu_slug);
                
            });
        </script>
    <script type="text/javascript">
       
         $(document).ready(function(){
            setTimeout(function() {
                  $('.successMessage').fadeOut('slow');
                  }, 5000);
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
            $("#imgInp").change(function(){
                readURL(this);
            });
        });
    </script>
</body>
</html>