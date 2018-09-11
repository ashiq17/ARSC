<style type="text/css">
	
	.single_border{
		border-bottom:2px solid #000;
	}
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
				<div class="post-info">
					<h3 style="text-align:center">
					   <a  href="<?php echo base_url(); ?>home/single_blog/<?php echo $value['BlogID']; ?>"><?php echo $value['BlogTitle']; ?></a> 
					</h3>
					 <h6 style="text-align:center"><span ><?php echo $value['created']; ?></span></h6>
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


