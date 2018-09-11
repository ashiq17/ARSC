
  <?php $this->load->view('template_views/common/header');?>
  
  </head>
 <!--header-->
<body>
    <div id="wrapper">
	    <?php $this->load->view('template_views/common/left_nav');?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
			<div class="row border-bottom">
	             <?php $this->load->view('template_views/common/top_nav');?>
				<!--Top Navigation-->
			</div>
            <div class="row  border-bottom white-bg dashboard-header">
                <?php //$this->load->view('template_views/common/shortcut_menu');?>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
							

                        </div>
                </div>
<!--footer place-->
            <?php $this->load->view('template_views/common/footer');?>
            </div>
        </div>

        </div>
    </div>
	<!---footer js-->
	<?php $this->load->view('template_views/common/footer_js');?>
<!--BranchSwitchIng Start-->
	<div class="modal inmodal" id="branch_switch" tabindex="-1" role="dialog"  aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content animated fadeIn">
				<div class="ibox-title">
					<h5>Branch Selection Form</h5>
				</div>
		<form class="form-horizontal" action="<?php echo base_url(); ?>location/division/index" role="form" method="post" enctype="multipart/form-data">
				<div class="ibox-content">
					<!--<p>Sign in today for more expirience.</p>-->
					<div class="form-group"><label class="col-lg-4 control-label">Head Name</label>

						<div class="col-lg-8">
							<select class="form-control " name="admin_select_branch" id="admin_select_branch">
								<option value="0">--Select Branch--</option>
								<?php foreach($branch_list as $key=>$info){?>
									<option value="<?php echo $info->BranchID;?>"><?php echo $info->BranchName;?></option>		
								<?php } ?> 
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<!--<button type="submit" class="btn btn-primary">Submit</button>-->
					<input type="submit" name="branch_selected" class="btn btn-primary" id="submitnote" value="Submit" />
				</div>
			</form>
			</div>
		</div>
	</div>



	<input type="hidden" id="admin_branch" value="<?php echo $this->session->userdata("BranchAccess");?>"/>
	<input type="hidden" id="admin_branch_toggle" value="<?php echo $branch_selected;?>"/>
	<script>
		$( document ).ready(function() {
			var BranchID = $('#admin_branch').val();
			var admin_branch_toggle = $('#admin_branch_toggle').val();
			//alert(admin_branch_toggle);
			//var admin_branch_toggle = 0;
			if(BranchID==1 && admin_branch_toggle==0){
				$('#branch_switch').modal('show');
			}
			//alert( BranchID );
		});
	</script>
<!--BranchSwitchIng End-->
</body>
</html>
