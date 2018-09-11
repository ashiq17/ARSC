 <?php $this->load->view('dashboard/common/header');?>
    <link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/dashboard/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <style type="text/css">
        .sd-button {
            background-color: #333;
            border: 1px solid #016938;
            border-radius: 3px;
            color: #fff;
            font-size: 14px;
        }
        .wrapper-content {
            padding: 0px 0px 0px;
        }
        .panel-body {
        padding: 2px 15px 10px 15px;
        }
        .sd-button:hover {
            background-color: #fff;
            color: #333;
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
                <div class="row">
                    <div class="col-lg-12">
                            <div class="wrapper wrapper-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ibox float-e-margins">
                                            <div id="" class="panel blank-panel">
                                                <div class="ibox-title" >
                                                    <h5 style="color:red"> <strong>All  Category</strong> <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>category/category/add_category">Add New Category</a>

                                                   </h5> 
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link">
                                                            <i class="fa fa-chevron-up"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content" style="padding: 0px;">
                                                    <div class="panel-body">
                                                        <div class="panel-options" style="padding-bottom: 10px;">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a id="allPosts" data-toggle="tab" href="#tab-1">  <strong>All  Category</strong> </a></li>
                                                                <li class=""><a id="published" data-toggle="tab" href="#tab-2"><strong>Published</strong></a></li>
                                                                <li class=""><a id="unpublished" data-toggle="tab" href="#tab-3"><strong>UnPublished</strong></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div id="tab-1" class="tab-pane active">
                                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="color:red" >SL</th>
                                                                            <th style="color:red;text-align:center; width: 30%;" > Category Name</th>
                                                                            <th style="color:red" >Create Date</th>
                                                                            <th style="color:red" >Modified Date</th>
                                                                            <th style="color:red" >Category Status</th>
                                                                            <th style="color:red" >Edit</th>
                                                                            <th style="color:red" >Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_category_find as $key=>$value) {
                                                                             
                                                                                ?>
                                                                                <tr class="gradeC">
                                                                                <td ><?php echo $sl; ?></td>
                                                                    <td  style="text-align:center;    width: 30%;"><?php echo $value['CategoryName']; ?></td>
                                                                    <td><?php echo $value['created']; ?></td>
                                                                    <td ><?php echo $value['modified']; ?></td>
                                                                     <td class="text-center"> <?php if($value['CategoryStatus']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    Published</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    UnPublished</spane>';} ?>

                                                                </td>                
                                                                <td  style="text-align: center;"><a href="<?php echo base_url();?>category/category/edit_category/<?php echo $value['CategoryID']; ?>">Edit</a></td>
                                                                <td style="text-align: center;"><a data-toggle="modal" data-categoryid="<?php echo $value['CategoryID']; ?>" data-title="<?php echo $value['CategoryName']; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }
                                                                      ?>     
                                                                    </tbody>
                                                                    <tfoot>
                                                                         <tr>
                                                                            <th style="color:red" >SL</th>
                                                                            <th style="color:red;text-align:center; width: 30%;" > Category Name</th>
                                                                            <th style="color:red" >Create Date</th>
                                                                            <th style="color:red" >Modified Date</th>
                                                                            <th style="color:red" >Category Status</th>
                                                                            <th style="color:red" >Edit</th>
                                                                            <th style="color:red" >Delete</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>

                                                            <div id="tab-2" class="tab-pane ">
                                                                <table class="table table-striped table-bordered table-hover" id="editable1" >
                                                                    <thead>
                                                                       <tr>
                                                                            <th style="color:red" >SL</th>
                                                                            <th style="color:red;text-align:center; width: 30%;" > Category Name</th>
                                                                            <th style="color:red" >Create Date</th>
                                                                            <th style="color:red" >Modified Date</th>
                                                                            <th style="color:red" >Category Status</th>
                                                                            <th style="color:red" >Edit</th>
                                                                            <th style="color:red" >Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach ($all_published_category_find as $value) {

                                                                                ?>
                                                                                <tr class="gradeC">
                                                                                <td ><?php echo $sl; ?></td>
                                                                    <td  style="text-align:center;    width: 30%;"><?php echo $value['CategoryName']; ?></td>
                                                                    <td><?php echo $value['created']; ?></td>
                                                                    <td ><?php echo $value['modified']; ?></td>
                                                                     <td class="text-center"> <?php if($value['CategoryStatus']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    Published</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    UnPublished</spane>';} ?>

                                                                </td>                
                                                                <td  style="text-align: center;"><a href="<?php echo base_url();?>category/category/edit_category/<?php echo $value['CategoryID']; ?>">Edit</a></td>
                                                                <td style="text-align: center;"><a data-toggle="modal" data-categoryid="<?php echo $value['CategoryID']; ?>" data-title="<?php echo $value['CategoryName']; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }
                                                                      ?>     
                                                                    </tbody>
                                                                    <tfoot>
                                                                          <tr>
                                                                            <th style="color:red" >SL</th>
                                                                            <th style="color:red;text-align:center; width: 30%;" > Category Name</th>
                                                                            <th style="color:red" >Create Date</th>
                                                                            <th style="color:red" >Modified Date</th>
                                                                            <th style="color:red" >Category Status</th>
                                                                            <th style="color:red" >Edit</th>
                                                                            <th style="color:red" >Delete</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>

                                                            <div id="tab-3" class="tab-pane">
                                                                <table class="table table-striped table-bordered table-hover" id="editable2" >
                                                                     <thead>
                                                                        <tr>
                                                                            <th style="color:red" >SL</th>
                                                                            <th style="color:red;text-align:center; width: 30%;" > Category Name</th>
                                                                            <th style="color:red" >Create Date</th>
                                                                            <th style="color:red" >Modified Date</th>
                                                                            <th style="color:red" >Category Status</th>
                                                                            <th style="color:red" >Edit</th>
                                                                            <th style="color:red" >Delete</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($all_unpublished_category_find as $key=>$value) {
                                                                          
                                                                                ?>
                                                                                <tr class="gradeC">
                                                                                <td ><?php echo $sl; ?></td>
                                                                    <td  style="text-align:center;    width: 30%;"><?php echo $value['CategoryName']; ?></td>
                                                                    <td><?php echo $value['created']; ?></td>
                                                                    <td ><?php echo $value['modified']; ?></td>
                                                                     <td class="text-center"> <?php if($value['CategoryStatus']==1){echo '<span style = "color:green;"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                    Published</spane>';}else{echo '<span style = "color:red;"><i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                                    UnPublished</spane>';} ?>

                                                                </td>                
                                                                <td  style="text-align: center;"><a href="<?php echo base_url();?>category/category/edit_category/<?php echo $value['CategoryID']; ?>">Edit</a></td>
                                                                <td style="text-align: center;"><a data-toggle="modal" data-categoryid="<?php echo $value['CategoryID']; ?>" data-title="<?php echo $value['CategoryName']; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td>
                                                                    </tr>
                                                                      <?php
                                                                        $sl++; }
                                                                      ?>     
                                                                    </tbody>
                                                                    <tfoot>
                                                                          <tr>
                                                                            <th style="color:red" >SL</th>
                                                                            <th style="color:red;text-align:center; width: 30%;" > Category Name</th>
                                                                            <th style="color:red" >Create Date</th>
                                                                            <th style="color:red" >Modified Date</th>
                                                                            <th style="color:red" >Category Status</th>
                                                                            <th style="color:red" >Edit</th>
                                                                            <th style="color:red" >Delete</th>
                                                                        </tr>
                                                                    </tfoot>
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
                    </div>
                </div> 
            </section>               
        </div>        
    </div>

    <!-- Mainly scripts -->


    <?php $this->load->view('dashboard/common/footer_js');?>
    <script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <script>
        $(document).ready(function() {
            var oTable = $('#editable').dataTable();         
            var oTable = $('#editable1').dataTable();         
            var oTable = $('#editable2').dataTable();

        });
    </script>

    <!-- Flot -->
 <!-- mahbub  start delete all Blog -->
   
     <!-- mahbub  end delete all Blog -->

 <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-deleteModal", function () {
            var CategoryID = $(this).attr('data-categoryid');
             // alert(CategoryID);
            var CategoryName = $(this).attr('data-title');
               // alert(CategoryName);
            $("#CategoryName").html(CategoryName);
            $("#deleteCategoryID").val(CategoryID);
                   
        });
    </script>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                     Delete This Category!</h4>
                    
                </div><!-- modal header -->

                <form action="<?php echo base_url();?>category/category/category_delete" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="deleteCategoryID" name="deleteCategoryID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="CategoryName"></span>
                                     "<?php //echo $value['CategoryName']; ?>?
                                 </h3>
                                </div>
                            </div> 
                        </div>
                    </div><!-- modal body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                        <input type="submit" name="submit" class="btn btn-danger" id="submitimgdata" value="Yes" />
                    </div><!-- modal footer -->

                </form>
            </div><!-- modal content -->
        </div><!-- modal dialog -->
    </div><!-- modal -->

</body>
</html>
