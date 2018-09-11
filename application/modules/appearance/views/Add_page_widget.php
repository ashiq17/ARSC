    
    <?php $this->load->view('dashboard/common/header');?>
    <link href="<?php echo base_url();?>assets/dashboard/css/select2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/select2-bootstrap.css" rel="stylesheet">
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

            <form action="<?php echo base_url();?>appearance/widgets/addnew_page_widget" method="post" enctype="multipart/form-data">
                   
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-8">
                        
                            <div class="wrapper wrapper-content">
                                
                                <div class="row">
                                    <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>ADD NEW Page Widget </h5> 
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="form-group">
                                                    <input type="text" id="widgetTitle" name="widgetTitle" placeholder="Widget Title" class="form-control" required="required">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" id="widgetSlug" name="widgetSlug" placeholder="Slug (Please do not use any special character in slug)" class="form-control" required="required">
                                                </div>

                                                <div class="form-group">
                                                    <div>
                                                        <label><h3>Select a Widget Type: </h3></label>
                                                        <label> <input type="radio" name="menuType" onclick="widget_type(this.value);" class="" value="1" required="required"> Menu </label>
                                                        <label> <input type="radio" name="menuType" onclick="widget_type(this.value);" class="" value="2" required="required"> Custom </label>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="menuWidgetlist" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label><h3>Select a Menu Type: </h3></label>
                                                            <label> <input type="radio" name="newsType" class="newsType" value="1" required=""> Video </label>
                                                            <label> <input type="radio" name="newsType" class="newsType" value="2" required=""> Content </label>
                                                        </div>
                                                        <label class="col-md-2 control-label" style="">Select a Menu</label>
                                                        <div class="col-md-10">
                                                            <select id="newsMenu" name="newsMenu" class="form-control select2" >
                                                                <option value=""></option>
                                                                <?php
                                                                    foreach($news_menus as $key=>$menusInfo) {
                                                                            $prefixDesign = "----";
                                                                            $prefix = "";
                                                                            $ptnGrpLength = strlen($menusInfo->PtnGroupCode);
                                                                            for($i = 1; $i <= $ptnGrpLength; $i++) {
                                                                                $prefix = $prefix . $prefixDesign;
                                                                            }
                                                                        ?>
                                                                            <option value="<?php echo $menusInfo->HeadID; ?>"><?php echo $prefix . $menusInfo->HeadName; ?></option>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="customWidgetBody" style="display: none;">
                                                    <textarea name="widgetBody"></textarea>
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
                                                    <label> <input type="radio" name="publishStatus" class="i-checks" value="1"> Published </label>
                                                </div>
                                                <div>
                                                    <label> <input type="radio" name="publishStatus" class="i-checks" value="0"> Unpublished </label>
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
    <script src="<?php echo base_url();?>assets/dashboard/js/select2.js"></script>

    <!-- DROPZONE -->
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

        /*$('.widget_type').click(function() {
            //$('#menu').show();
            var widgetType = $(this.val)
            alert("hello");
            
        });*/

        function widget_type(type) {
            //alert(type);
            if(type == 1) {
                $('#menuWidgetlist').show();
                $('#customWidgetBody').hide();
                $('.newsType').attr('required', 'required');
            } else if(type == 2) {
                $('.newsType').removeAttr('required');
                $('#customWidgetBody').show();
                $('#menuWidgetlist').hide();
            }
        }
    </script>
    <script>
        $( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );

        $( "#demonstrations" ).select2( { placeholder: "Select2 version", minimumResultsForSearch: -1 } ).on( "change", function() {
            document.location = $( this ).find( ":selected" ).val();
        } );
    </script>
 

</body>
</html>