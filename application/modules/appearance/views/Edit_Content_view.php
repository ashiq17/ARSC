    
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
        
    </style>
</head>

<body>
    <div id="wrapper">
        <?php $this->load->view('dashboard/common/left_nav');?>

        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav');?>
            </div>

            <?php
                $newsID = "";
                $NewsTitle = "";
                $NewsSlug = "";
                $NewsBody = "";
                $NewsHeadLine = 0;
                $NewsOfTheDay = 0;
                $TopEighteenNews = 0;
                $OnlineVote = 0;
                $NewsPostedByID = 0;
                $ImageLink = "";
                $fileType = "";
                $mediaID = 0;
                $NewsReporter = "";
                $FBautoPost = 0;
                $PublishStatus = 0;
                $MetaID = 0;
                $PublishStatus = "";
                $MetaTitle = "";
                $MetaDescripton = "";
                $MetaKeywoords = "";
                $ImageTitle = "";
                $ImageAltText = "";
                foreach($news_update_data as $key=>$newsInfo) {
                    $newsID             = $newsInfo->NewsID;
                    $NewsTitle          = $newsInfo->NewsTitle;
                    $NewsSlug           = $newsInfo->NewsSlug;
                    $NewsBody           = $newsInfo->NewsBody;
                    $NewsHeadLine       = $newsInfo->NewsHeadLine;
                    $NewsOfTheDay       = $newsInfo->NewsOfTheDay;
                    $TopEighteenNews    = $newsInfo->TopEighteenNews;
                    $OnlineVote         = $newsInfo->OnlineVote;
                    $NewsPostedByID     = $newsInfo->NewsPostedByID;
                    $ImageLink          = $newsInfo->FileName;
                    $fileType          = $newsInfo->FileType;
                    $mediaID            = $newsInfo->ImageLink;
                    $NewsReporter       = $newsInfo->NewsReporter;
                    $FBautoPost      = $newsInfo->FBautoPost;
                    $PublishStatus      = $newsInfo->PublishStatus;
                    $MetaID      = $newsInfo->MetaID;
                    $MetaTitle      = $newsInfo->MetaTitle;
                    $MetaDescripton      = $newsInfo->MetaDescripton;
                    $MetaKeywoords      = $newsInfo->MetaKeywoords;
                    $ImageTitle      = $newsInfo->ImageTitle;
                    $ImageAltText      = $newsInfo->ImageAltText;
                }
            ?>


            <section id="main-content">

            <form action="<?php echo base_url();?>appearance/contents/news_update" method="post" enctype="multipart/form-data">


                <input type="hidden" name="mediaID" id="mediaID" value="<?php echo $mediaID; ?>">
                <input type="hidden" name="mediaImgTitle" id="mediaImgTitle" value="<?php echo $ImageTitle; ?>">
                <input type="hidden" name="mediaImgAltText" id="mediaImgAltText" value="<?php echo $ImageAltText; ?>">
                <input type="hidden" name="newsID" id="newsID" value="<?php echo $newsID; ?>">
                   
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-8">
                        
                            <div class="wrapper wrapper-content">
                                
                                <div class="row">
                                    <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5><i class="fa fa-edit"></i> Edit Content </h5> 
                                                <h5 class="col-md-10 text-right">
                                                    <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>appearance/contents/content_manage"><i class="fa fa-list"></i> Content List</a> 
                                                </h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="form-group">
                                                    <input type="text" id="newsTitle" name="newsTitle" value="<?php echo $NewsTitle; ?>" placeholder="News Title" class="form-control" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="newsSlug" name="newsSlug" value="<?php echo $NewsSlug; ?>"  placeholder="Slug (Please do not use any special character in slug)" class="form-control" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="newsBody"><?php echo $NewsBody; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>

                                <div class="row">
                                    <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Only For SEO  </h5> 
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="form-group">
                                                    <input type="text" id="metaDescription" name="metaDescription" placeholder="Meta Description" value="<?php echo $MetaDescripton; ?>" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="metaKeywords" name="metaKeywords" placeholder="Meta Keywords" value="<?php echo $MetaKeywoords; ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4" style="padding-left: 0px; padding-right: 0px;">
                            <div class="wrapper wrapper-content">>
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
                                                <h5>Menu Categories</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>

                                            <div class="ibox-content add-post-category">
                                                <div>
                                                    <ul>
                                                        <?php 
                                                            foreach($news_categories as $key=>$categories) {
                                                                ?>
                                                                <li><label> <input type="checkbox" name="menu_categories[]" class="i-checks" value="<?php echo $categories->HeadID; ?>" <?php foreach($newslink_update_data as $key=>$menuInfo){if($categories->HeadID == $menuInfo->MenuCategoryID){echo ' checked="checked" ';}}?>> <?php echo $categories->HeadName; ?> </label></li>
                                                                <?php
                                                            }
                                                        ?>
                                                        
                                                        <!-- <li>
                                                            <ul>
                                                                <li><label style="padding-left: 20px;"><input type="checkbox" class="i-checks"> Child Category 1 </label></li>
                                                                <li><label style="padding-left: 20px;"><input type="checkbox" class="i-checks"> Child Category 1 </label></li>
                                                                <li>
                                                                    <ul>
                                                                        <li><label style="padding-left: 40px;"><input type="checkbox" class="i-checks"> Grand Child Category 1 </label></li>
                                                                        <li><label style="padding-left: 40px;"><input type="checkbox" class="i-checks"> Grand Child Category 1 </label></li>
                                                                        <li><label style="padding-left: 40px;"><input type="checkbox" class="i-checks"> Grand Child Category 1 </label></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li> -->
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                            <div class="ibox-content" style="height: 5px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Page Categories</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>

                                            <div class="ibox-content add-post-category">
                                                <div>
                                                    <ul>
                                                        <?php 
                                                            foreach($page_categories as $key=>$page_category) {
                                                                // echo "<pre>";
                                                                // print_r($page_category);
                                                                ?>

                                                                    <li><label> <input type="checkbox" name="newsPageCategory[]" class="i-checks" value="<?php echo $page_category->ID;?>"


                                                                         <?php foreach($newslink_update_data as $key=>$menuInfo){if($page_category->ID == $menuInfo->PageCategoryID){echo ' checked="checked" ';}}?>>


                                                                    <label><?php echo $page_category->PageCategoryName; ?> </label>
                                                                    </li>
                                                                  
                                                                <?php
                                                            }
                                                        ?>
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                            <div class="ibox-content" style="height: 5px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Featured Image</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>

                                            <div class="ibox-content">
                                                <div>
                                                    <label for="">
                                                        <?php
                                                            if($ImageLink != '' && $fileType != 'mp4') {
                                                                ?>
                                                                     <img src="<?php echo base_url().'assets/uploads/150x150/'. $ImageLink;?>" id="featuredImgView" class='thumbnail' >
                                                                <?php
                                                            } elseif($ImageLink != '' && $fileType == 'mp4') {
                                                                ?>
                                                                     <img src="<?php echo base_url().'assets/uploads/150x150/video.png';?>" id="featuredImgView" class='thumbnail' >
                                                                <?php
                                                            }
                                                        ?>
                                                    </label>
                                                </div>
                                                <div>
                                                    <a data-toggle="modal" class="open-featuredImageModal" href="#featuredImageModal" ><?php if($ImageLink != '') { echo 'Change Featured Image.';} else { echo 'Set Featured Image';}?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>Update Changes</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>

                                            <div class="ibox-content" style="height: 70px;">
                                                <div class="pull-right text-right">
                                                    <input class="btn btn-primary" type="submit" value="Update Changes">
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

    <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-featuredImageModal", function () {
            $('#fitabid2').tab('show');
                   
        });
    </script>


    <div class="modal fade" id="featuredImageModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"></i> Featured Image</h4>
                    
                </div><!-- modal header -->

                <div class="modal-body">
                    <div id="media-upload" class="panel blank-panel">

                        <div class="panel-heading">
                            <div class="panel-options">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a id="fitabid1" data-toggle="tab" href="#tab-1">Upload Image</a></li>
                                    <li class=""><a id="fitabid2" data-toggle="tab" href="#tab-2">Media Library</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div id="imgupload">
                                        <div id="imgnormalupload">
                                            <h3>Select files from your computer</h3>
                                            <form action="<?php echo base_url();?>appearance/contents/image_upload" method="post" enctype="multipart/form-data">
                                                <input type="file" name="files[]" id="standard-upload-files" multiple>
                                                <input type="submit" value="Upload files" id="standard-upload" style="margin-top: 25px;">
                                            </form>
                                        </div>
                                        <div id="imgddarea">
                                            <h3>Or Drag and Drop files below</h3>
                                            <div class="upload-console-drop" id="drop-zone">
                                                <p>Just drag and drop files here</p>
                                            </div>

                                            <div class="bar">
                                                <div class="bar-fill" id="bar-fill">
                                                    <div class="bar-fill-text" id="bar-fill-text"></div>
                                                </div>
                                            </div>

                                            <!-- class="hidden" -->
                                            <div id="uploads-finished" class="hidden">
                                                <h3>Processed files</h3>                                                    
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>                                

                                <div id="tab-2" class="tab-pane">
                                    <div id="imgselect">
                                        <div id="media-file">
                                            <input type="hidden" id="hdnid" value="1">
                                            <ul id="node-id">
                                                
                                            </ul>
                                        </div>

                                        <div id="imageDetails">
                                            <input type="hidden" id="modalMediaID">
                                            <div class="form-group" style="padding: 5px;">
                                                <label>Image URL</label>
                                                <input type="text" id="imageurl" value="<?php echo base_url().'assets/uploads/150x150/'. $ImageLink; ?>" class="form-control">
                                            </div>
                                            <div class="form-group" style="padding: 5px;">
                                                <label>Image Title</label>
                                                <input type="text" id="imagetitle" value="<?php echo $ImageTitle;?>" class="form-control">
                                            </div>
                                            <div class="form-group" style="padding: 5px;">
                                                <label>Image Alt Text</label>
                                                <input type="text" id="imagealttext" value="<?php echo $ImageAltText;?>" class="form-control">
                                            </div> 
                                        </div>   
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- modal body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" id="submitimgdata" value="Submit" />
                </div><!-- modal footer -->
            </div><!-- modal content -->
        </div><!-- modal dialog -->
    </div><!-- modal -->

    <script type="text/javascript">
         $(document).ready(function () {
            $('#submitimgdata').click(function() {
                $("#featuredImageModal").modal('hide');
                var mediaiD = $('#modalMediaID').val();
                var imageurl = $('#imageurl').val();
                var imagetitle = $('#imagetitle').val();
                var imagealttext = $('#imagealttext').val();

                if(imageurl.includes(".mp4")) {
                    imageurl = "<?php echo base_url();?>assets/uploads/150x150/video.png";
                }
                //alert(imageurl);
                //$('#featuredImgView').val();
                $('#featuredImgView').attr('src', imageurl);
                $('#mediaID').val(mediaiD);
                $('#mediaImgTitle').val(imagetitle);
                $('#mediaImgAltText').val(imagealttext);

            });
        });
    </script>

    <script src="<?php echo base_url();?>assets/dashboard/js/plugins/pace/pace.min.js"></script>

    <script type="text/javascript">
        var uploadurl = '<?php echo base_url();?>appearance/contents/image_upload';
        //alert(uploadurl);
    </script>

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
            CKEDITOR.replace( 'newsBody' );
        </script>

        <script type="text/javascript">

            /*$(document).ready(function() {
                $("#newsTitle").on('change keydown paste input', function(){
                    var newsTitle = $('#newsTitle').val();
                    var newsSlug1  = newsTitle.replace(/[&\/\\#,+()$~%.'":*?<>{}]অ/g, '');
                    var newsSlug  = newsSlug1.replace(/ /g, "-");
                    $('#newsSlug').val(newsSlug);
                });
            });*/

            $("#newsSlug").on('change keydown paste input', function(){
                //var getid = $(".menu_slug").attr('id');
                var newsSlug = $('#newsSlug').val();
                var newsSlug1  = newsSlug.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
                var newsSlug2  = newsSlug1.replace(/অ/g, "");
                var newsSlugreplace  = newsSlug2.replace(/ /g, "-");
                $('#newsSlug').val(newsSlugreplace);

                //alert(menu_slug);

                
            });
        </script>

                


        <script type="text/javascript">
        var folder = '<?php echo base_url();?>assets/uploads/150x150/';
        var sl;
        var lastMediaID;
        var ImageLink = "<?php echo base_url().'assets/uploads/150x150/'. $ImageLink;?>";
        if(ImageLink.includes(".mp4")) {
            ImageLink = "<?php echo base_url();?>assets/uploads/150x150/video.png";
        }
        var ImageTitle = "<?php echo $ImageTitle;?>";
        var ImageAltText = "<?php echo $ImageAltText;?>";
        var mediaID = "<?php echo $mediaID;?>";


        $.getJSON("<?php echo base_url();?>appearance/contents/get_media_data?1=1&lastMediaID="+0, function(data) {
            //console.log(data);
            //alert(data.mediaInfo[data.total]['MediaID']);
            sl = 2;
            lastMediaID = data.mediaInfo[data.total]['MediaID'];
            if(data.total > 0){

                for (i = 1; i <= data.total; i++) {  
                    //alert(data.BarCodeList[i]['BarCode']);
                    var imgsrc = '';
                    if(data.mediaInfo[i]['FileType'] == 'mp4') {
                        imgsrc = 'video.png';
                    } else {
                        imgsrc = data.mediaInfo[i]['FileName'];
                    }
                    $("#node-id").prepend("<li><input type='checkbox' id='imageInputID"+sl+"' value='"+ folder +  data.mediaInfo[i]['FileName'] +"' data-mediaid='"+ data.mediaInfo[i]['MediaID'] +"' data-fileTitle='"+ data.mediaInfo[i]['FileTitle'] +"' data-alttext='"+ data.mediaInfo[i]['FileAltText'] +"' onclick='imageHandler(this.id, "+sl+")'/><label for='imageInputID"+sl+"'><img src='"+ folder + imgsrc +"' id='imageID"+sl+"'  class='thumbnail' ></label></li>");
                    //////////////////
                sl++;}
            }
            if(ImageLink != "") {
                $("#node-id").closest('ul').prepend("<li><input type='checkbox' id='imageInputID1' checked='checked' value='"+ ImageLink +"' data-mediaid='"+ mediaID +"' data-fileTitle='"+ ImageTitle +"' data-alttext='"+ ImageAltText +"' onclick='imageHandler(this.id, "+1+")'/><label for='imageInputID"+1+"'><img src='"+ ImageLink +"' style='border: 5px solid #18a689;' id='imageID"+1+"'  class='thumbnail' ></label></li>");
            }
        });

        function loadimages() {
            $.getJSON("<?php echo base_url();?>appearance/contents/get_media_data?1=1&lastMediaID="+lastMediaID, function(data) {
                //console.log(data);
                //alert(data.mediaInfo[1]['MediaID']);
                //sl = sl;
                lastMediaID = data.mediaInfo[data.total]['MediaID'];
                if(data.total > 0){

                    for (i = 1; i <= data.total; i++) {  
                        //alert(data.BarCodeList[i]['BarCode']);
                        var imgsrc = '';
                        if(data.mediaInfo[i]['FileType'] == 'mp4') {
                            imgsrc = 'video.png';
                        } else {
                            imgsrc = data.mediaInfo[i]['FileName'];
                        }
                        $("#node-id").prepend("<li><input type='checkbox' id='imageInputID"+sl+"' value='"+ folder +  data.mediaInfo[i]['FileName'] +"' data-mediaid='"+ data.mediaInfo[i]['MediaID'] +"' data-fileTitle='"+ data.mediaInfo[i]['FileTitle'] +"' data-alttext='"+ data.mediaInfo[i]['FileAltText'] +"' onclick='imageHandler(this.id, "+sl+")'/><label for='imageInputID"+sl+"'><img src='"+ folder + imgsrc +"' id='imageID"+sl+"'  class='thumbnail' ></label></li>");
                        //////////////////
                    sl++;}
                }
            });

        }

        /*function loadimages() {
            var sl = 1;
            $("#node-id").html("");
            $.ajax({
                url : folder,
                success: function (data) {

                    $(data).find("a").attr("href", function (i, val) {
                        if( val.match(/\.(jpe?g|png|gif)$/) ) { 
                            $("#node-id").prepend( "<li><input type='checkbox' id='imageInputID"+sl+"' value='"+ folder + val +"' onclick='imageHandler(this.id, "+sl+")'/><label for='imageInputID"+sl+"'><img src='"+ folder + val +"' id='imageID"+sl+"'  class='thumbnail' ></label></li>" );
                        sl++;}
                    });
                }
            });
        }*/
    </script>

    <script type="text/javascript">
        function imageHandler(id, sli) {
            var hdnid = $('#hdnid').val();
            var currid = $('#'+id).val();
            var mediaid = $('#'+id).attr('data-mediaid');
            var fileTitle = $('#'+id).attr('data-fileTitle');
            var fileAltText = $('#'+id).attr('data-alttext');
            if(typeof(fileTitle) === "undefined") {
                fileTitle = "";
            }
            
            if(typeof(fileAltText) === "undefined") {
                fileAltText = "";
            }

            if(typeof(mediaid) === "undefined") {
                mediaid = "";
            }
            //$('#myCheckbox').attr('checked', true);
            //alert(fileTitle);
            if(hdnid !== '') {
                //alert(sl);
                $('#imageInputID'+hdnid).prop('checked', false);
                $('#imageID'+hdnid).css({"border": "none"});
                $('#hdnid').val(sli);
                $('#'+id).prop('checked', true);
                $('#imageID'+sli).css({"border-color": "#18a689", "border-width":"5px", "border-style":"solid"});
                $('#imageurl').val(currid);
                $('#modalMediaID').val(mediaid);
                $('#imagetitle').val(fileTitle);
                $('#imagealttext').val(fileAltText);
            } else {
                $('#hdnid').val(sli);
                $('#'+id).prop('checked', true);
                $('#imageID'+sli).css({"border-color": "#18a689", "border-width":"5px", "border-style":"solid"});
                $('#imageurl').val(currid);
                $('#modalMediaID').val(mediaid);
                $('#imagetitle').val(fileTitle);
                $('#imagealttext').val(fileAltText);

                /*var i = document.getElementById('imageID'+sli);
                //var x = new Date(currid.lastModified);
                //alert(i);
                //console.log(x);

                $.get(i.src,function(data,status,xhr){
                    // in the callback - after the ajax request completes...
                    var filetime = xhr.getResponseHeader('Size');
                    i.title = 'image created: ' + filetime; // don't care about formating now
                    console.log(i.title);
                });*/
            }
        }
    </script>

    <!-- Flot -->



    

</body>
</html>