<style type="text/css">
	
	.single_border{
		border-bottom:2px solid #000;
	}
	
	.single_border{
		border-bottom:2px solid #000;
		border-left:1px solid #ddd;
		border-right:1px solid #ddd;
	}
	.blog_title{
		border-bottom:1px solid #ddd;
	}
	.blog_time{
		border-bottom:1px solid #ddd;
	}.blog_body{
		border-bottom:1px solid #ddd;
	}
	a:hover, a:focus {
     color: green; 
    text-decoration: none;
</style><?php $this->load->view('common/header');
// $categoryWiseData = $this->Home_Model->all_author_published_poem_finding();

?>

 <section class="container" style="padding:0px;">
	<div class="col-md-8" style="padding:0px;">
		<div class="content-grid">					 
		 	<?php foreach ($categoryWiseData as $key => $value): ?>
		 		<br>
			<div class="content-grid-info single_border" >
				
		        <img class="img-responsive" style="width:850px; height:240px" alt="No Image Found" src="<?php echo base_url('/assets/images/blogImages/').$value['image'];?>"/>
				<div class="blog_title">
					<h3 style="text-align:center">
					   <a  href="<?php echo base_url(); ?>home/single_blog/<?php echo $value['BlogID']; ?>"><?php echo $value['BlogTitle']; ?></a> 
					</h3>

					<h5 style="text-align:center ; color:red">
					 	<span >
								 <?php 
									$get_blog_date = $value['created'];
									$blog_date = new DateTime($get_blog_date);
									$new_blog_date = $blog_date->format("j F Y, l, H:i");

									$engDATE = array(1,2,3,4,5,6,7,8,9,0,'January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
									$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
									বুধবার','বৃহস্পতিবার','শুক্রবার' 
									);
									$convertedDATE = str_replace($engDATE, $bangDATE, $new_blog_date);
									echo $convertedDATE . "মি.";
								?>
								
							</span></h5>
					<p style="padding:7px;"> 
                        <?php  
                    	$string=$value['BlogBody'];
                    	$string = strip_tags($string);
							if (strlen($string) > 600) {
							    $stringCut = substr($string, 0, 600);
							    // make sure it ends in a word so assassinate doesn't become ass...
							    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a style="color:red" href='.base_url().'home/single_blog/'.$value['BlogID'].'>Read More</a>'; 
							}
							echo $string;
						?>
                    </p> 
				</div>
			</div>
		 	<?php endforeach ?>
		</div>
	</div>
	<?php $this->load->view('common/right-sitebar');?>

	
 </section> 
<?php $this->load->view('common/footer');?>


