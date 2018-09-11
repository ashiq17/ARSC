    
    <?php $this->load->view('dashboard/common/header');?>

     <!-- Data Tables -->
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
                                                    <h5>News Posts <a class="sd-button" style="padding: 0 10px 0 10px;" href="<?php echo base_url();?>news/news/add_news">Add New</a></h5> 
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
                                                                <li class="active"><a id="allPosts" data-toggle="tab" href="#tab-1">All Posts</a></li>
                                                                <li class=""><a id="published" data-toggle="tab" href="#tab-2">Published</a></li>
                                                                <li class=""><a id="unpublished" data-toggle="tab" href="#tab-3">UnPublished</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="tab-content">

                                                            <div id="tab-1" class="tab-pane active">

                                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Title</th>
                                                                            <th>Author</th>
                                                                            <th>Categories</th>
                                                                            <th>Date</th>
                                                                            <th>Total View</th>
                                                                            <th>Edit</th>
                                                                            <th>Delete</th>
                                                                            <th>View</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($news_data as $key=>$Newsinfo) {
                                                                                $newsId = $Newsinfo->NewsID;
                                                                                ?>
                                                                                    <tr class="gradeC">
                                                                                        <td><?php echo $sl; ?></td>
                                                                                        <td><?php echo $Newsinfo->NewsTitle; ?></td>
                                                                                        <td><?php echo $Newsinfo->FullName; ?></td>
                                                                                        <td><?php 
                                                                                                foreach($news_link_data as $key=>$catInfo) {
                                                                                                    if($newsId == $catInfo->NewsID) {
                                                                                                        echo $catInfo->HeadName . ", ";
                                                                                                    }
                                                                                                }
                                                                                         ?></td>
                                                                                        <td><?php echo $Newsinfo->NewsUpdateDate; ?></td>
                                                                                        <td ><?php echo $Newsinfo->ViewCount; ?></td>
                                                                                        <td style="text-align: center;"><a href="<?php echo base_url();?>news/news/news_edit/<?php echo $newsId; ?>">Edit</a></td>
                                                                                        <td style="text-align: center;"><a data-toggle="modal" data-newsid="<?php echo $newsId; ?>" data-title="<?php echo $Newsinfo->NewsTitle; ?>" class="open-deleteModal" href="#deleteModal" >Delete</a></td>
                                                                                        <td style="text-align: center;"><a target="_blank" href="<?php echo base_url();?>single_news/<?php echo $Newsinfo->NewsID; ?>/<?php echo $Newsinfo->NewsSlug; ?>">View</a></td>
                                                                                    </tr>
                                                                                <?php
                                                                            $sl++; }
                                                                        ?>     
                                                                    </tbody>

                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Title</th>
                                                                            <th>Author</th>
                                                                            <th>Categories</th>
                                                                            <th>Date</th>
                                                                            <th>Total View</th>
                                                                            <th>Edit</th>
                                                                            <th>Delete</th>
                                                                            <th>View</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                                
                                                            </div>                                

                                                            <div id="tab-2" class="tab-pane">                                                                
                                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Title</th>
                                                                            <th>Author</th>
                                                                            <th>Categories</th>
                                                                            <th>Date</th>
                                                                            <th>Total View</th>
                                                                            <th>Edit</th>
                                                                            <th>Delete</th>
                                                                            <th>View</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($news_data as $key=>$pubinfo) {
                                                                                if($pubinfo->PublishStatus == 1) {
                                                                                $newsId = $pubinfo->NewsID;
                                                                                ?>
                                                                                    <tr class="gradeC">
                                                                                        <td><?php echo $sl; ?></td>
                                                                                        <td><?php echo $pubinfo->NewsTitle; ?></td>
                                                                                        <td><?php echo $pubinfo->FullName; ?></td>
                                                                                        <td><?php 
                                                                                                foreach($news_link_data as $key=>$catInfo) {
                                                                                                    if($newsId == $catInfo->NewsID) {
                                                                                                        echo $catInfo->HeadName . ", ";
                                                                                                    }
                                                                                                }
                                                                                         ?></td>
                                                                                        <td><?php echo $pubinfo->NewsUpdateDate; ?></td>
                                                                                        <td ><?php echo $pubinfo->ViewCount; ?></td>
                                                                                        <td style="text-align: center;"><a href="<?php echo base_url();?>news/news/news_edit/<?php echo $newsId; ?>">Edit</a></td>
                                                                                        <td style="text-align: center;"><a href="<?php echo base_url();?>news/news/news_delete/<?php echo $newsId; ?>">Delete</a></td>
                                                                                        <td style="text-align: center;"><a target="_blank" href="<?php echo base_url();?>single_news/<?php echo $pubinfo->NewsID; ?>/<?php echo $pubinfo->NewsSlug; ?>">View</a></td>
                                                                                    </tr>
                                                                                <?php
                                                                            $sl++; }}
                                                                        ?>     
                                                                    </tbody>

                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Title</th>
                                                                            <th>Author</th>
                                                                            <th>Categories</th>
                                                                            <th>Date</th>
                                                                            <th>Total View</th>
                                                                            <th>Edit</th>
                                                                            <th>Delete</th>
                                                                            <th>View</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>

                                                            <div id="tab-3" class="tab-pane">                                                                
                                                                 <table class="table table-striped table-bordered table-hover" id="editable" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Title</th>
                                                                            <th>Author</th>
                                                                            <th>Categories</th>
                                                                            <th>Date</th>
                                                                            <th>Total View</th>
                                                                            <th>Edit</th>
                                                                            <th>Delete</th>
                                                                            <th>View</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        $sl = 1;
                                                                            foreach($news_data as $key=>$unpubinfo) {
                                                                                if($unpubinfo->PublishStatus == 0) {
                                                                                $newsId = $unpubinfo->NewsID;
                                                                                ?>
                                                                                    <tr class="gradeC">
                                                                                        <td><?php echo $sl; ?></td>
                                                                                        <td><?php echo $unpubinfo->NewsTitle; ?></td>
                                                                                        <td><?php echo $unpubinfo->FullName; ?></td>
                                                                                        <td><?php 
                                                                                                foreach($news_link_data as $key=>$catInfo) {
                                                                                                    if($newsId == $catInfo->NewsID) {
                                                                                                        echo $catInfo->HeadName . ", ";
                                                                                                    }
                                                                                                }
                                                                                         ?></td>
                                                                                        <td><?php echo $unpubinfo->NewsUpdateDate; ?></td>
                                                                                        <td ><?php echo $unpubinfo->ViewCount; ?></td>
                                                                                        <td style="text-align: center;"><a href="<?php echo base_url();?>news/news/news_edit/<?php echo $newsId; ?>">Edit</a></td>
                                                                                        <td style="text-align: center;"><a href="<?php echo base_url();?>news/news/news_delete/<?php echo $newsId; ?>">Delete</a></td>
                                                                                        <td style="text-align: center;"><a target="_blank" href="<?php echo base_url();?>single_news/<?php echo $unpubinfo->NewsID; ?>/<?php echo $unpubinfo->NewsSlug; ?>">View</a></td>
                                                                                    </tr>
                                                                                <?php
                                                                            $sl++; }}
                                                                        ?>     
                                                                    </tbody>

                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>SL</th>
                                                                            <th>Title</th>
                                                                            <th>Author</th>
                                                                            <th>Categories</th>
                                                                            <th>Date</th>
                                                                            <th>Total View</th>
                                                                            <th>Edit</th>
                                                                            <th>Delete</th>
                                                                            <th>View</th>
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
            /*$('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "<?php echo base_url();?>assets/dashboard/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });*/

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            /*oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );*/


        });

        /*function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }*/
    </script>

    <!-- Flot -->

    <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-deleteModal", function () {
            var newsId = $(this).attr('data-newsid');
            var newsTitle = $(this).attr('data-title');
            //alert(newsTitle);
            $("#newsName").html(newsTitle);
            $("#deleteNewsID").val(newsId);
                   
        });
    </script>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"></i> Delete News Post</h4>
                    
                </div><!-- modal header -->

                <form action="<?php echo base_url();?>news/news/news_delete" method="post" enctype="multipart/form-data">

                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="deleteNewsID" name="deleteNewsID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">

                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="newsName"></span> " News</h3>
                                </div>
                            </div>                            

                        </div>
                    </div><!-- modal body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" class="btn btn-primary" id="submitimgdata" value="Submit" />
                    </div><!-- modal footer -->

                </form>
            </div><!-- modal content -->
        </div><!-- modal dialog -->
    </div><!-- modal -->
    

</body>
</html>
