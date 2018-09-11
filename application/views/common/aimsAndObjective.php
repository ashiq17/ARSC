<?php $this->load->view('common/header');?>

	<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="tg-breadcrumb">
							<li><a href="javascript:void(0);">আমাদের কথা</a></li>
							<li class="tg-active">লক্ষ্য ও উদ্দেশ্য</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->

<?php $this->load->view('common/SidebarLeft');?>
<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-center">
	<div class="panel">
		<div class="panel-body">
			<article class="tg-themepost tg-course">
				<div class="tg-themetabs tg-coursestabs">
						<div class="tab-content tg-themetabcontent">
							 <?php foreach ($about_info as $key => $value) { ?>
							<div role="tabpanel" class="tab-pane active" id="description">
								<h2>লক্ষ্য ও উদ্দেশ্য</h2>	
								<!-- <img src='<?php echo base_url(); ?>images/aboutImages/<?php echo $value['Image']; ?>' alt="Teacher image"> -->
									<p><?php echo $value['AboutMission']; ?></p>
									<p><?php echo $value['AboutVission']; ?></p>
								
							</div>
							<?php break;} ?>
						</div>
					</div>
			</article>
		</div>
	</div>
</div>
<?php $this->load->view('common/SidebarRight');?>
<?php $this->load->view('common/footer');?>