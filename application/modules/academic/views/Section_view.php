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
                    <a data-toggle="modal"  class="btn btn-info" href="#newSectionModal">&nbsp;Create New</a>
                </div> 
            </div>
            <nav aria-label="breadcrumb" style="background-color: #1969ca; color: #fff;">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Admin Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Section</li>
              </ol>
            </nav>

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
                                                    <thead class="theight" style="">
                                                        <tr>
                                                            <th style="width: 10%; text-align: center;">SL</th>
                                                         <!--    <th style="width: 40%; text-align: center;">Class Name</th> -->
                                                         <th style="width: 40%; text-align: center;">Section Name</th> 
                                                            <th style="width: 10%; text-align: center;">Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody class="theight">
                                                    	<?php
                                                    		$sl = 1;
                                                    		foreach($Section_Data as $key=>$allInfo) {
                                                    			?>
                                                    				<tr>
                                                                        <td style="text-align: center;"><?php echo $sl; ?></td>
                                                                       <!--  <td style="text-align: center;"><?php echo $allInfo->C_Name; ?></td> -->
                                                                      <td style="text-align: center;"><?php echo $allInfo->Section_Name; ?></td> 
                                                                        <td style="text-align: center;">
                                                    <a  data-toggle="modal" data-editid="<?php echo $allInfo->Section_ID; ?>" 
                                                                                data-divisionid="<?php echo $allInfo->Section_class_ID; ?>" 
                                                                                data-name="<?php echo $allInfo->Section_Name; ?>" 
                                                                                data-activestatus="<?php echo $allInfo->Section_Status; ?>"  
                                                                                class="open-districtEdit" href="#districtEdit">
                                                                                       <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                                </button>
                                                                            </a>

                                                <a href="<?= base_url() ?>academic/academic/section_delete/<?= $allInfo->Section_ID ?>" onClick="return confirm('Are you sure want to delete?')">
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
		
			<!-- <?php $this->load->view('dashboard/common/footer');?> -->
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



	<div class="modal" id="newSectionModal" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content animated fadeIn">
                <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                    <h3><strong>New Section Entry Form</strong></h3>
                </div>
            	<form class="form-horizontal form_class" id="form_id" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>academic/academic/new_section_entry">
                   <div class="ibox-content" style="padding-top: 10px;">
                    <!--<p>Sign in today for more expirience.</p>-->
                        
                        <div class="row">
                            <div class="col-lg-12">

                                 	<input type="hidden" name="BranchID" > 

                   <!--            <div class="col-lg-12" style="">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Class Name :</strong></h5>
                                    </div>
                                    <div class="col-lg-8" >
                                       <select class="form-control select2" name="Class_ID" id="divisionID" required="required">
                                            <option value=""></option>
                                            <?php
                                                foreach($Class_Data as $key=>$secInfo) {
                                                    ?>
                                                        <option value="<?php echo $secInfo->Class_ID; ?>"><?php echo $secInfo->Class_Name; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div> 
 -->
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Section Name :</strong></h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="stname" id="stname"  placeholder="Please input Name" class="form-control" required> 
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

    <!--************** District entry modal end ***************-->

    <!--************** District edit modal start ***************-->

    <script type="text/javascript">
        $(document).on("click", ".open-districtEdit", function () {
        
            

            var id = $(this).data('editid');
            var divisionid = $(this).data('divisionid');
            var name = $(this).data('name');
            var activestatus = $(this).data('activestatus');
            //alert(vehicletypename);
            $('#edit_divisionID option[value=' + divisionid + ']').attr('selected', true);

            $(".ibox-content #editID").val( id ); 
            $(".ibox-content #stnameEdit").val( name ); 

            $("#edit_divisionID").select2();
            $("#edit_divisionID" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );
             
            if(activestatus == 1) {
            	$(".ibox-content #publishedEdit").attr( "checked", true );
            } else {
            	$(".ibox-content #unpublishedEdit").attr( "checked", true );
            }
                   
        });
    </script>

	<div class="modal" id="districtEdit" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content animated fadeIn">
                <div class="ibox-title" style="text-align: center; border-bottom: 2px solid #222c43;">
                    <h3><strong>District Update Form</strong></h3>
                </div>
            	<form class="form-horizontal form_class" id="form_id" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>academic/academic/update_section_entry">
                   <div class="ibox-content" style="padding-top: 10px;">
                    <!--<p>Sign in today for more expirience.</p>-->
                        
                        <div class="row">
                            <div class="col-lg-12">

                            	<input type="hidden" name="editID" id="editID" value="">  

                       <!--          <div class="col-lg-12" style="">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Class Name :</strong></h5>
                                    </div>
                                    <div class="col-lg-8" >
                                       <select class="form-control select2" name="Class_ID" id="edit_divisionID" required="required">
                                            <option value=""></option>
                                            <?php
                                                foreach($Class_Data as $key=>$secInfo) {
                                                    ?>
                                                        <option value="<?php echo $secInfo->Class_ID; ?>"><?php echo $secInfo->Class_Name; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>   -->                            

                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="col-lg-3" style="text-align: right;">
                                        <h5><strong>Section Name  :</strong></h5>
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

    <!--************** District edit modal End ***************-->

	<script>
		$( ".select2" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );

		$( "#demonstrations" ).select2( { placeholder: "Select2 version", minimumResultsForSearch: -1 } ).on( "change", function() {
			document.location = $( this ).find( ":selected" ).val();
		} );
	</script>


       <script type="text/javascript">
        $(document).on("click", ".open-districtEdit", function () {
        
            

            var id = $(this).data('editid');
            var divisionid = $(this).data('divisionid');
            var name = $(this).data('name');
            var activestatus = $(this).data('activestatus');
            //alert(vehicletypename);
            $('#edit_divisionID option[value=' + divisionid + ']').attr('selected', true);

            $(".ibox-content #editID").val( id ); 
            $(".ibox-content #stnameEdit").val( name ); 

            $("#edit_divisionID").select2();
            $("#edit_divisionID" ).select2( { placeholder: "Select an option", maximumSelectionSize: 6 } );
             
            if(activestatus == 1) {
                $(".ibox-content #publishedEdit").attr( "checked", true );
            } else {
                $(".ibox-content #unpublishedEdit").attr( "checked", true );
            }
                   
        });
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
