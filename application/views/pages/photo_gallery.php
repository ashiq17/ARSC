<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('common/header');?>
	
</head>
<body>

  <?php $this->load->view('common/top-nav');?>
  <?php  
$this->load->model('Home_Model');
$get_gallery_slider_image = $this->Home_Model->find_gallery_slider_image();
$get_gallery_all_image = $this->Home_Model->find_gallery_all_image();
$get_gallery1_image = $this->Home_Model->find_gallery1_image();
$get_gallery2_image = $this->Home_Model->find_gallery2_image();
?>
<!-- END HEADER headertop NAV -->

	<!-- Top News Section
	============================================================ -->
	<section class="photo-gallery">
      	<div class="container">
	        <div class="row">
	          	<div class="col-md-8 col-md-offset-2">
		            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
		              <!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
					         <?php 
                            	$i = 0;
                            	$active = 'active';
                            	foreach ($get_gallery_slider_image as $key => $value){ 
                            	$i++;	
                            ?>
	                            <div class="item <?php if($i==1){echo $active;} ?>">
	                            	<img class="img-responsive cd-manage" style="width:850px; height:540px" src='<?php echo base_url(); ?>images/photo-gallery/<?php echo $value['ph_image']; ?>' alt='mrmonju ' title='mr monju'  class="img-thumbnail" />
		                                <h6><a href="#"></a></h6>
	                            </div>    
                            <?php } ?>
					  	</div>

		              <!-- Controls -->
		                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			                <span class="sr-only">Previous</span>
			            </a>
			            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			                <span class="sr-only">Next</span>
			            </a>
		            </div>
	          	</div>
	        </div>
      	</div>
    </section>
		  

	<section class="photo-gallery">
        <div class="container">

	        <div role="tabpanel">
	          <!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">সব ছবি</a></li>
					<li role="presentation"><a href="#catetory-1" aria-controls="catetory-1" role="tab" data-toggle="tab">গ্যালারি ১</a></li>
					<li role="presentation"><a href="#catetory-2" aria-controls="catetory-2" role="tab" data-toggle="tab">গ্যালারি ২</a></li>
				</ul>
		        <div class="tab-content">
		            <div role="tabpanel" class="tab-pane active" id="all">
			            <div class="row">
			                	<?php foreach ($get_gallery_all_image as $key => $value): ?>
			                <div class="col-md-4 tab-img">
			                	<img class="img-responsive cd-manage" style="width:750px; height:240px" src='<?php echo base_url(); ?>images/photo-gallery/<?php echo $value['ph_image']; ?>' alt='mrmonju ' title='mrmonju'  class="img-thumbnail" />
			                  	<div class="title"> </div>
			                </div>
			                  	<?php endforeach ?>
			            </div>
		            </div>

		            <div role="tabpanel" class="tab-pane" id="catetory-1">
		              	<div class="row">
			                	<?php foreach ($get_gallery1_image as $key => $value): ?>
			                <div class="col-md-4 tab-img">
			                	<img class="img-responsive cd-manage"  style="width:750px; height:240px" src='<?php echo base_url(); ?>images/photo-gallery/<?php echo $value['ph_image']; ?>' alt='mrmonju ' title='mrmonju'  class="img-thumbnail" />
			                  	<div class="title"></div>
			                </div>
			                  	<?php endforeach ?>
			            </div>
		            </div>
		            <div role="tabpanel" class="tab-pane" id="catetory-2">
		              	<div class="row">
			                	<?php foreach ($get_gallery2_image as $key => $value): ?>
			                <div class="col-md-4 tab-img">
			                	<img class="img-responsive cd-manage" style="width:750px; height:240px" src='<?php echo base_url(); ?>images/photo-gallery/<?php echo $value['ph_image']; ?>' alt='mrmonju ' title='mrmonju'  class="img-thumbnail" />
			                  	<div class="title"></div>
			                </div>
			                  	<?php endforeach ?>
			            </div>
		            </div>
	            </div>
            </div>
        </div>
    </section>

	<!-- WHO BENEFITS
	============================================================ -->
	<section id="section-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
				</div><!-- col-sm-8 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</section>

	<!-- OPT IN SECTION
	============================================================ -->
	<section id="optin">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					
				</div><!-- col-sm-8 -->

				<div class="col-sm-4">
					
				</div><!-- col-sm-4 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</section>

	
	

	<!-- COURSE FEATURES
	============================================================ -->
	<section id="course-features">
		
	</section><!-- course-features -->

	<!-- PROJECT FEATURES
	============================================================ -->
	<section id="project-features">
		
	</section> <!-- project-features -->

	<!-- VIDEO FEARTURES
	============================================================ -->
	<section id="featurette">
		
	</section> <!-- featurette -->

	<!-- INSTRUTOR
	============================================================ -->
	<section id="instructor">
		
	</section><!-- instructor -->

	<!-- TESTIMONIALS
	============================================================ -->
	<section id="kudos">
		
	</section><!-- kudos -->

<?php $this->load->view('common/footer');?>

</body>
</html>