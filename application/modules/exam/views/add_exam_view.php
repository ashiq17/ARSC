<?php $this->load->view('dashboard/common/header');?>
   <!-- Data Tables -->
    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <style type="text/css">
        .modal-dialog {
            width: 50%;
            margin: 30px auto;
        }
        .theight tr td{
            line-height: 1.42857 !important;
            font-size: 11px;
            padding: 1.5px !important;
            vertical-align: middle!important;
        }

        .theight tr th{
            line-height: 1.42857 !important;
            font-size: 13px;
            padding: 1.5px !important;            
        }
    </style>
   </head>
 <!--header-->
 
 
<body>
    <div id="wrapper">
        <?php $this->load->view('dashboard/common/left_nav');?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                 <?php $this->load->view('dashboard/common/top_nav');?>
                <!--Top Navigation-->
            </div>
       

            <section id="">
                                
                <div class="row" style="padding-top: 10px!important;">
                    <div class="col-lg-12">
                       <div class="ibox float-e-margins">
                            <div id="" class="panel blank-panel">
                                <div class="ibox-content" style="padding: 0px;">
                                    <div class="panel-body">
                                        <div class="error-wrap">
    <div class="error-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-code">
                         404
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="error-message">
                        <h4>Add Exam This Page is Under Construction</h4>
                        <h3>We are sorry the page you are trying to reach dose not exist :(</h3>
                             
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="error-body">
                        <div class="error-instruction">
                            <span class="left-border"></span>
                            <a class="go-home" href="index.html">
                            <i class=" icon-home"></i>
                            </a>
                            <span class="indicator"></span>
                          
                              
                               <h5>Visiting our full website <a href="http://cyberdynetechnologyltd.com/">Cyberdyne Technology LTD</a>
                               </h5>
                               
                        </div>
                    </div>
                </div>
            </div>
        <!--     <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="error-searchbox">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>                    
                </div>    
                
            </section>
        <div class="row">
        
        </div>

        </div>
    </div>
    <!---footer js-->
    <?php $this->load->view('dashboard/common/footer_js');?>
    <script src="<?php echo base_url();?>assets/js/auto-suggest.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>


    <script type="text/javascript">
        var baseurl = "<?php echo base_url(); ?>";

    </script>

    <!--************** Division entry modal start ***************-->




</body>
</html>
