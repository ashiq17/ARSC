
    
    <?php $this->load->view('dashboard/common/header');?>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dashboard/js/ckeditor/ckeditor.js"></script>
</head>

<body>
    <div id="wrapper">
        <?php $this->load->view('dashboard/common/left_nav');?>

        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav');?>
            </div>

            


            <section id="main-content">

            <form action="<?php echo base_url();?>appearance/widgets/update_sidebar_widget" method="post" enctype="multipart/form-data">
                   
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-8">
                        
                            <div class="wrapper wrapper-content">

                            <?php
                            	$ID = "";
                            	$WidgetTitle = "";
                            	$WidgetSlug = "";
                            	$WidgetBody = "";
                            	$PublishStatus = "";
                            	foreach($sidebar_widget_data as $key=>$info) {
                            		$ID = $info->ID;
                            		$WidgetTitle = $info->WidgetTitle;
                            		$WidgetSlug = $info->WidgetSlug;
                            		$WidgetBody = $info->WidgetBody;
                            		$PublishStatus = $info->PublishStatus;
                            	}
                            ?>
                                
                                <div class="row">
                                    <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Edit Sidebar Widget </h5> 
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                            	<input type="hidden" name="sidebarId" value="<?php echo $ID; ?>">
                                                <div class="form-group">
                                                    <input type="text" id="widgetTitle" name="widgetTitle" value="<?php echo $WidgetTitle; ?>" placeholder="Widget Title" class="form-control" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="widgetSlug" name="widgetSlug" value="<?php echo $WidgetSlug; ?>" placeholder="Slug (Please do not use any special character in slug)" class="form-control" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="widgetBody"><?php echo $WidgetBody; ?></textarea>
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
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Publish Status</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>

                                            <div class="ibox-content">
                                                <div>
                                                    <label> <input type="radio" name="publishStatus" class="i-checks" value="1" <?php if ($PublishStatus == 1) {echo ' checked="checked" ';} ?>> Published </label>
                                                </div>
                                                <div>
                                                    <label> <input type="radio" name="publishStatus" class="i-checks" value="0" <?php if ($PublishStatus == 0) {echo ' checked="checked" ';} ?>> Unpublished </label>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Save Changes</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>

                                            <div class="ibox-content" style="height: 70px;">
                                                <div class="pull-right text-right">
                                                    <input class="btn btn-primary" type="submit" value="Save Changes">
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
        CKEDITOR.replace( 'widgetBody' );
    </script>

    <script type="text/javascript">

        $("#widgetSlug").on('change keydown paste input', function(){
            //var getid = $(".menu_slug").attr('id');
            var widgetSlug = $('#widgetSlug').val();
            var widgetSlug1  = widgetSlug.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
            var widgetSlug2  = widgetSlug1.replace(/অ/g, "");
            var widgetSlugreplace  = widgetSlug2.replace(/ /g, "-");
            $('#widgetSlug').val(widgetSlugreplace);

            //alert(menu_slug);

            
        });
    </script>
 

</body>
</html>