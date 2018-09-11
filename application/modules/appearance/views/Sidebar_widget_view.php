    
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
                   
                <div class="row">
                    <div class="col-lg-12">
                        
                            <div class="wrapper wrapper-content">
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div id="" class="panel blank-panel">

                                                <div class="ibox-title" >
                                                    <h5>Sidebar Widgets <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>appearance/widgets/new_sidebar_widget">Add New</a></h5> 
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link">
                                                            <i class="fa fa-chevron-up"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="ibox-content" style="padding: 0px;">
                                                   

                                                    <div class="panel-body">
                                                        <table class="table table-striped table-bordered table-hover dataTables-example" style="margin-bottom: 5px; width: 100%;">
                                                            <thead class="theight">
                                                                <tr>
                                                                    <th style="width: 10%; text-align: left">SL#</th>
                                                                    <th style="width: 60%; text-align: left">Widget Title</th>
                                                                    <th style="width: 10%; text-align: center">Edit</th>
                                                                    <th style="width: 20%; text-align: center">Published Status</th>
                                                                </tr>
                                                            </thead>
                                                              
                                                            <tbody>
                                                                
                                                                    <?php 
                                                                    $sl = 1;
                                                                        foreach($sidebar_widget as $key=>$widgetInfo) {
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?php echo $sl; ?></td>
                                                                                    <td><?php echo $widgetInfo->WidgetTitle; ?></td>
                                                                                    <?php 
                                                                                        if($widgetInfo->IsEditable == 0) {
                                                                                            ?>
                                                                                                <td style="text-align: center;">Edit</a></td>
                                                                                            <?php
                                                                                        } else {
                                                                                            ?>
                                                                                                <td style="text-align: center;"><a href="<?php echo base_url();?>appearance/widgets/edit_sidebar_widget/<?php echo $widgetInfo->ID; ?>">Edit</a></td>
                                                                                            <?php
                                                                                        }
                                                                                    ?>
                                                                                    
                                                                                    <td style="text-align: center;"><?php if($widgetInfo->PublishStatus == 1) { echo "Published";} else{ echo "UnPublished"; }?></td>
                                                                                </tr>
                                                                            <?php
                                                                        $sl++;}
                                                                    ?>                                                                   
                                                                
                                                            </tbody>
                                                        </table>
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
        </div>        
    </div>

    <!-- Mainly scripts -->


    <?php $this->load->view('dashboard/common/footer_js');?>

    <!-- Flot -->
    

</body>
</html>
