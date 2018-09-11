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
            <form action="<?php echo base_url();?>profession/profession/profession_update" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
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
                    						// print_r($edit_profession_find['0']['images']);
                    						// echo "</pre>";
                    						// die();
                        ?>
                                            <div class="ibox-title" style="background:#243948">
                                                <h5 style="color:#D7E1ED"><i class=""></i> Edit Profession</h5> 
                                                <div class="ibox-tools">
                                                    <a class="btn btn-primary" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>profession/profession/all_profession"><i class='fa fa-user'></i>  Profession List</a>
                                                    <a class="collapse-link">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>
                                             <fieldset>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <div class="inputGroupContainer">
                                                            <label style="text-align:right ; margin-top:15px; color:red" class="col-md-3 control-label"> <span class="required">*</span>Profession Name :</label>
                                                        </div>
                                                          
                                                    <div class="col-md-6 inputGroupContainer" style="margin-top:15px;">

                                                        <input value="<?php echo $edit_profession_find[0]['ProfessionID'] ?>" name="ProfessionID" type="hidden">
                                                      <input value="<?php if (!empty($edit_profession_find[0]['ProfessionName'])) {
                                                 echo $edit_profession_find[0]['ProfessionName'] ;}?>" name="profession_name"  class="form-control"  type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix" style="margin-top:15px;"></div>
                                                 
                                                   <div class="col-md-12">
                                                        <br>
                                                        <div class="inputGroupContainer">
                                                            <label style="text-align:right ; margin-top:15px; color:red" class="col-md-3 control-label"> <span class="required">*</span>Status :</label>
                                                        </div>
                                                        <div class="col-md-6 selectContainer">
                                                        <select name="profession_status" class="form-control" required="required">
                                                            <option value="">Select Status</option>
                                                            <option value="1" <?php if ($edit_profession_find['0']['ProfessionStatus']==1) {echo 
                                                            'selected';} ?>>Active</option>
                                                            <option value="0" <?php if ($edit_profession_find['0']['ProfessionStatus'] ==0) { echo 'selected';
                                                            }?>>Inactive</option>
                                                        </select>
                                                       </div>
                                                    </div>
                                                    
                                                    <div class="clearfix"></div>
                                                        <div class="col-md-12">
                                                            <label style="text-align:right" class="col-md-3 control-label"></label>
                                                            <div class="col-md-6"><br>
                                                            <input type="reset" name="reset" class="btn btn-info" value="Reset">
                                                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            </fieldset>     
                                                        
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
            CKEDITOR.replace( 'CategoryBody' );
        </script>

        <script type="text/javascript">

            $(document).ready(function() {
                $("#profession_name").on('change keydown paste input', function(){
                    var profession_name = $('#profession_name').val();
                    var CategorySlug1  = profession_name.replace(/[&\/\\#,+()$~%.'":*?<>{}]অ/g, '');
                    var CategorySlug  = CategorySlug1.replace(/ /g, "-");
                    $('#CategorySlug').val(CategorySlug);
                });
            });

            $("#CategorySlug").on('change keydown paste input', function(){
                //var getid = $(".menu_slug").attr('id');
                var CategorySlug = $('#CategorySlug').val();
                var CategorySlug1  = CategorySlug.replace(/[&\/\\#,+()$~%.'":*?<>{}!@^_=`।=`;|]/g, '');
                var CategorySlug2  = CategorySlug1.replace(/অ/g, "");
                var CategorySlugreplace  = CategorySlug2.replace(/ /g, "-");
                $('#CategorySlug').val(CategorySlugreplace);

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