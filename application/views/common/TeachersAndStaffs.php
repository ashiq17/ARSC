		<?php $this->load->view('common/header');?>
		<!--************************************
				Home Slider Start
		*************************************-->

		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="tg-breadcrumb">
							<br>
							<br>
							<li><a href="javascript:void(0);"> আমাদের কথা</a></li>
							<li class="tg-active">শিক্ষক ও কর্মচারীবৃন্দ</li>
							<br>
							<br>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
	<?php 

    $this->load->model('Home_Model');
    $get_teacher_image = $this->Home_Model->find_teachers_profile();

   
    // echo "<pre>";
    //  print_r($get_teacher_image);
    //  echo "</pre>";
    // die();
  
 	?>
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-left">
							<div id="tg-content" class="tg-content">
								<div class="tg-detailpage tg-coursedetailpage">
									<article class="tg-themepost tg-course">									
										<div class="tg-themecollapsecontent">
											<?php 
											$i = 0;
											foreach ($get_teacher_image as $key => $value){ 
												$i++;   
												?>
												<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
													<div class="tg-faculty">
														<figure><a href="javascript:void(0);">
															<!-- <img src='<?php echo base_url(); ?>images/teacher/<?php echo $value['Image']; ?>' alt="Teacher image"> -->
														</a></figure>
														<div class="tg-facultyname">
															<h3><a><?php echo $value['Teacher_Name']; ?></a></h3>
														</div>
														<span class="tg-facultydesignation"><?php echo $value['DesignationName']; ?></span>
														<a style="width: 100%; margin-top: 10px;" class="btn btn-success" href="<?php echo base_url(); ?>home/TeachersMoreInfo/<?php echo $value['Teacher_ID']; ?>">More information
														</a>
													</div>
												</div>
											<?php } ?>
										</div>

										<nav class="tg-pagination">
											<ul>
												<li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li class="tg-active"><a href="#">5</a></li>
												<li>...</li>
												<li><a href="#">10</a></li>
												<li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
											</ul>
										</nav>							
									</article>									
								</div>
							</div>
						</div>
						<div style="padding: 0px!important;" class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-right">
						<?php $this->load->view('common/SidebarLeft');?>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php $this->load->view('common/footer');?>