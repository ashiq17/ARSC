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
    margin-bottom: 2px;
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
            <form action="<?php echo base_url();?>about/about/about_update" method="post" enctype="multipart/form-data">
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
				    //   echo "<pre>";
						// print_r($edit_about_find['0']['images']);
						// echo "</pre>";
						// die();
                        ?>
                                <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                             <h5 style="color:red">Edit About Me  <span class=" text-right"><a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>about/about/all_about">Back</a>
                                                <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>about/about/index">Back To Main</a></span>
                                             </h5>  
                                            <div class="ibox-tools">
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="form-group">
                                                <h5 style="color:red">  About Name </h5>

                                                 <input value="<?php echo $edit_about_find[0]['AboutID'] ?>" name="AboutID" type="hidden">
                                                  <input value="<?php if (!empty($edit_about_find[0]['AboutName'])) {
                                             echo $edit_about_find[0]['AboutName'] ;}?>" name="aboutName"  class="form-control"  type="text" required>
                                            </div>
                                            <div class="form-group">
                                                <h5 style="color:red">  About Designation </h5>
                                                  <input value="<?php if (!empty($edit_about_find[0]['AboutDesignation'])) {
                                             echo $edit_about_find[0]['AboutDesignation'] ;}?>" name="aboutDesignation"  class="form-control"  type="text" required>
                                        	</div>
                                       
                                            <div class="form-group">
                                                <h5 style="color:red">  About BODY </h5>
                                                <textarea name="aboutBody"><?php if (!empty($edit_about_find[0]['AboutBody'])) {
                                             echo $edit_about_find[0]['AboutBody'] ;}?>
                                             </textarea>
                                            </div> 
                                            <div class="form-group">
                                                <h5 style="color:red">  About Mission </h5>
                                                <textarea name="aboutMission"><?php if (!empty($edit_about_find[0]['AboutMission'])) {
                                             echo $edit_about_find[0]['AboutMission'] ;}?>
                                             </textarea>
                                            </div> 
                                            <div class="form-group">
                                                <h5 style="color:red">  About Vission </h5>
                                                <textarea name="aboutVission"><?php if (!empty($edit_about_find[0]['AboutVission'])) {
                                             echo $edit_about_find[0]['AboutVission'] ;}?>
                                             </textarea>
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
                                                <h5 style="color:red">Featured Image</h5>
                                            </div>
                                            <div class="ibox-content">
                                            		<input type="hidden"  id="old"  name="old_image"  value="<?php echo $edit_about_find['0']['Image']; ?>">
                                                     <br>
                                                        <img class="img-responsive" style="width:190px;height:120px;" alt="No Image Found" src="<?php echo base_url('/assets/images/aboutImages/').$edit_about_find['0']['Image']?>"/>

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
                                                <h5 style="color:red"> Only Update </h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>

                                            <div class="ibox-content">
                                                <div class="pull-left" >
                                                    <input class="btn btn-primary" style="height: 30px; width:150px;" name="submit" type="submit" value="Update">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox ">
                                            <div class="ibox-title">
                                                <h5 style="color:red"> Update  & Published</h5>
                                            </div>
                                            <div class="ibox-content" >
                                                <div class="pull-left">
                                                    <input class="btn btn-primary" style="height: 30px; width:150px;" name="published" type="submit" value="Published">
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
                $("#BlogTitle").on('change keydown paste input', function(){
                    var BlogTitle = $('#BlogTitle').val();
                    var BlogSlug1  = BlogTitle.replace(/[&\/\\#,+()$~%.'":*?<>{}]অ/g, '');
                    var BlogSlug  = BlogSlug1.replace(/ /g, "-");
                    $('#BlogSlug').val(BlogSlug);
                });
            });

            $("#BlogSlug").on('change keydown paste input', function(){
                //var getid = $(".menu_slug").attr('id');
                var BlogSlug = $('#BlogSlug').val();
                var BlogSlug1  = BlogSlug.replace(/[&\/\\#,+()$~%.'":*?<>{}!@^_=`।=`;|]/g, '');
                var BlogSlug2  = BlogSlug1.replace(/অ/g, "");
                var BlogSlugreplace  = BlogSlug2.replace(/ /g, "-");
                $('#BlogSlug').val(BlogSlugreplace);

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