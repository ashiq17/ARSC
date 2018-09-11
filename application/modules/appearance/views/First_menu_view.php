<!DOCTYPE html>
<html>

<head>

    
    <?php $this->load->view('dashboard/common/header');?>

</head>

<body>
    <div id="wrapper">
        <?php $this->load->view('dashboard/common/left_nav');?>

        <div id="page-wrapper" class="my-bg dashbard-1">
            <div class="row border-bottom">
                <?php $this->load->view('dashboard/common/top_nav');?>
            </div>

            


            <section id="main-content">

            <form action="<?php echo base_url();?>news/news/news_upload" method="post" enctype="multipart/form-data">
                   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper wrapper-content">
                            
                            <div class="row">
                                <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5>Coming Soon </h5> 
                                            <div class="ibox-tools">
                                                <a class="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
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





    

</body>
</html>