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
            <section id="main-content">
            <form action="<?php echo base_url();?>video/video/video_info_add" method="post" enctype="multipart/form-data">
                <div class="row">
                                <?php
                                       if($this->session->has_userdata('message')){
                                    ?>          
                                              <div class="alert alert-success text-center successMessage">
                                                <strong><?php echo $this->session->message;?></strong>
                                              </div>
                                             
                                    <?php          
                                              $this->session->unset_userdata('message');
                                              
                                          }elseif($this->session->has_userdata('error_msg')){
                                    ?> 

                                            <div class="alert alert-danger text-center successMessage">
                                              <strong><?php echo $this->session->error_msg;?></strong> 
                                            </div>
                                    <?php 
                                            $this->session->unset_userdata('error_msg');
                                          }
                                    ?>
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <div class="wrapper wrapper-content">
                                <div class="row">
                                    <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5 style="color:red"><u>ADD NEW VIDEO </u></h5> 
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                             <h5 style="color:green">VIDEO TITLE :</h5> 
                                                <div class="form-group">
                                                    <input type="text" id="VideoTitle" name="VideoTitle" placeholder="Video Title" class="form-control" required="required">
                                                </div>
                                                <div class="form-group">
                                                <h5  style="color:green">VIDEO SLUG :</h5> 
                                                    <input type="text" id="VideoSlug" name="VideoSlug" placeholder="Slug (Please do not use any special character in slug)" class="form-control" required="required">
                                                </div> 
                                                <div class="form-group">
                                                <h5  style="color:green">VIDEO URL :</h5> 
                                                    <input type="text" id="VideoUrl" name="VideoUrl" placeholder=" Please input a url" class="form-control" required="required">
                                                </div>
                                                <div class="form-group">
                                                <h5  style="color:green"> STATUS :</h5> 
                                                    <select name="VideoStatus" class="form-control" required="required">
                                                        <option value="">Select Status</option>
                                                        <option value="1" selected>Active</option>
                                                        <option value="0" >No</option>
                                                    </select>
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
                                                <h5  style="color:green">Gallary Slider Video</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>
                                             <div class="form-group"> 
                                                    <select name="VideoGallarySilderStatus" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0" selected>No</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5  style="color:green">Gallary 1 Video</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>
                                             <div class="form-group"> 
                                                <select name="VideoGallery1Status" class="form-control" >
                                                    <option value="">Select Status</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5  style="color:green">Gallary 2 Video</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>
                                             <div class="form-group"> 
                                                <select name="VideoGallery2Status" class="form-control" >
                                                    <option value="">Select Status</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5 style="color:green">Published To Video Slider for Home page</h5>
                                                <div class="ibox-tools">
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>                                                   
                                                </div>
                                            </div>
                                            <div class="ibox-content" style="height:70px;">
                                                <div class="pull-left text-right">
                                                 <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit">
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
                                            <form action="<?php echo base_url();?>news/news/image_upload" method="post" enctype="multipart/form-data">
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
                                            <input type="hidden" id="hdnid" value="">
                                            <ul id="node-id">
                                                
                                            </ul>
                                        </div>

                                        <div id="imageDetails">
                                            <input type="hidden" id="modalMediaID">
                                            <div class="form-group" style="padding: 5px;">
                                                <label>Image URL</label>
                                                <input type="text" id="imageurl" value="" class="form-control">
                                            </div>
                                            <div class="form-group" style="padding: 5px;">
                                                <label>Image Title</label>
                                                <input type="text" id="imagetitle" class="form-control">
                                            </div>
                                            <div class="form-group" style="padding: 5px;">
                                                <label>Image Alt Text</label>
                                                <input type="text" id="imagealttext" class="form-control">
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
        var uploadurl = '<?php echo base_url();?>news/news/image_upload';
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
                var newsSlug1  = newsSlug.replace(/[&\/\\#,+()$~%.'":*?<>{}!@^_=`।=`;|]/g, '');
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


        $.getJSON("<?php echo base_url();?>news/news/get_media_data?1=1&lastMediaID="+0, function(data) {
            //console.log(data);
            //alert(data.mediaInfo[data.total]['MediaID']);
            sl = 1;
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

        function loadimages() {
            $.getJSON("<?php echo base_url();?>news/news/get_media_data?1=1&lastMediaID="+lastMediaID, function(data) {
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