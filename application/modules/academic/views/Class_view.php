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



            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-xs-6 col-sm-4">

                    <a data-toggle="modal"  class="btn btn-info" href="#newClassModal">&nbsp;Create New</a>
                </div>

            </div>

<nav aria-label="breadcrumb" style="background-color: #1969ca; color: #fff;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Admin Panel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Class</li>
  </ol>
</nav>

           <!-- OPT IN SECTION
			============================================================ -->
			

			<!-- WHO BENEFITS
			============================================================ -->
			<section id="">
                                
                <div class="row">
                    <div class="col-lg-12">



                        <div class="ibox float-e-margins">
                            <div id="" class="panel blank-panel">

                                

                                <div class="ibox-content" style="padding: 0px;">
                                   

                                    <div class="panel-body">

                                     

                                        <div class="tab-content">

                                            <div id="tab-1" class="tab-pane active">

                                                <table class="table table-striped table-bordered table-hover" id="editable" >
                                                     <thead style=" background: #000000;">
                                                        <tr>
                                                            <th style="width: 10%; text-align: center;">SL</th>
                                                            <th style="width: 60%; text-align: center;">Class Name</th>
                                                            <th style="width: 30%; text-align: center;">Update</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody class="theight">
                                                    	<?php
                                                    		$sl = 1;
                                                    		foreach($Class_Data as $key=>$allInfo) {
                                                    			?>
                                                    				<tr>
                                                                        <td style="text-align: center;"><?php echo $sl; ?></td>
                                                                        <td style="text-align: center;"><?php echo $allInfo->Class_Name; ?></td>
                                                                        <td style="text-align: center;">
                                                                            <a  
                                                                                data-toggle="modal"
                                                                                data-editid="<?php echo $allInfo->Class_ID; ?>" 
                                                                                data-name="<?php echo $allInfo->Class_Name; ?>" 
                                                                                data-activestatus="<?php echo $allInfo->Class_Status; ?>"  
                                                                                class="open-divisionEdit" href="#divisionEdit">
                                                                                 <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                                </button>
                                                                            </a>



                <a href="<?= base_url() ?>academic/academic/class_delete/<?= $allInfo->Class_ID ?>" onClick="return confirm('Are you sure want to delete?')">
  <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>   
                                                                    </button>
</a>
                                                                        </td>
                                                                    </tr>
                                                    			<?php
                                                    		$sl++;}
                                                    	?>
                                                    	
                                                    </tbody>
                                                </table>
                                                
                                            </div>                                

                                         

                                                </table>
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

	<div class="modal" id="newClassModal" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content animated fadeIn">
                <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                    <h3><strong>New Class Entry Form</strong></h3>
                </div>
            	<form class="form-horizontal form_class" id="form_id" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>academic/academic/new_class_entry">
                   <div class="ibox-content" style="padding-top: 10px;">
                    <!--<p>Sign in today for more expirience.</p>-->
                        
                        <div class="row">
                            <div class="col-lg-12">

                            	<!-- <input type="hidden" name="BranchID" value="<?php echo $AccBranchID;?>"> -->

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Class Name :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="Class_Name" id="stname"  placeholder="Please input Name" class="form-control" required> 
                                    </div>
                                </div>

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Publish Status :</strong></h5>
                                    </div>
                                    <div class="col-lg-8" style="text-align: left;">
                                    <label>
                                        <input  type="radio" name="pubstatus" value="1" checked="checked" required> Yes </label>
                                    <label style="padding-left: 15px;">
                                        <input type="radio" name="pubstatus" value="0" required> No </label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                         <div class="modal-footer" style="margin-top: 20px;">
                            <button style="" type="submit" class="btn btn-primary" >Save</button>
                            <button style="" type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        </div> 
                    </div>                        
                  
            	</form>
            </div>
        </div>
    </div>


     <script>
        //javaScriptForTransactablevar non_ptnID;   var non_GroupID;
        $(document).on("click", ".open-deleteModal", function () {
            var Class_ID = $(this).attr('data-professionid');
             alert(Class_ID);
            var Class_Name = $(this).attr('data-title');
               alert(Class_Name);
            $("#Class_Name").html(Class_Name);
            $("#delete_Class_ID").val(Class_ID);
                   
        });
    </script>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModallabel"><i style='color:#F4A700' class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                     Delete This Class</h4>
                    
                </div><!-- modal header -->

                <form action="<?php echo base_url();?>academic/academic/class_delete" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="media-upload" class="panel blank-panel">
                            <input type="hidden" id="delete_Class_ID" name="delete_Class_ID" value="">

                            <div class="panel-heading">
                                <div class="panel-options">
                                    <h3>Are your sure to delete " <span style="font-size: 12px;" id="Std_Name"></span>
                                     "<?php //echo $value['ProfessionName']; ?>?
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

   

    <script type="text/javascript">
        $(document).on("click", ".open-divisionEdit", function () {
        
            

            var id = $(this).data('editid');
            var name = $(this).data('name');
            var activestatus = $(this).data('activestatus');
            //alert(vehicletypename);

            $(".ibox-content #editID").val( id ); 
            $(".ibox-content #stnameEdit").val( name ); 

             
            if(activestatus == 1) {
            	$(".ibox-content #publishedEdit").attr( "checked", true );
            } else {
            	$(".ibox-content #unpublishedEdit").attr( "checked", true );
            }
                   
        });
    </script>

	<div class="modal" id="divisionEdit" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content animated fadeIn">
                <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                    <h3><strong>Class Update Form</strong></h3>
                </div>
            	<form class="form-horizontal form_class" id="form_id" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>academic/academic/update_class_entry">
                   <div class="ibox-content" style="padding-top: 10px;">
                    <!--<p>Sign in today for more expirience.</p>-->
                        
                        <div class="row">
                            <div class="col-lg-12">

                            	<input type="hidden" name="editID" id="editID" value="">                                

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Class Name  :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="stnameEdit" id="stnameEdit"  placeholder="Please input Name" class="form-control" required> 
                                    </div>
                                </div>

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Publish Status :</strong></h5>
                                    </div>
                                    <div class="col-lg-8" style="text-align: left;">
                                    <label>
                                        <input  type="radio" name="pubstatusEdit" id="publishedEdit" value="1" required> Yes </label>
                                    <label style="padding-left: 15px;">
                                        <input type="radio" name="pubstatusEdit" id="unpublishedEdit" value="0" required> No </label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                         <div class="modal-footer" style="margin-top: 20px;">
                            <button style="" type="submit" class="btn btn-primary" >Save</button>
                            <button style="" type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        </div> 
                    </div>                        
                  
            	</form>
            </div>
        </div>
    </div>

    <!--************** Division edit modal End ***************-->

	<script>
		$( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );

		$( "#demonstrations" ).select2( { placeholder: "Select2 version", minimumResultsForSearch: -1 } ).on( "change", function() {
			document.location = $( this ).find( ":selected" ).val();
		} );
	</script>

	<script>
		$(document).ready(function(){
			$('.data_1 .input-group.date').datepicker({
				todayBtn: "linked",
				keyboardNavigation: false,
				forceParse: false,
				calendarWeeks: true,
				autoclose: true
			});
		$('.data_1 .input-group.date').datepicker('setDate', new Date());
		});
	</script>
	<script>
        $(document).ready(function() {
            
            var oTable = $('#editable').dataTable();         
            var oTable = $('#editable1').dataTable();         
            var oTable = $('#editable2').dataTable();         

        });
    </script>

</body>
</html>
