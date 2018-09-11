
<?php 
    $this->load->model('Home_Model');
    $get_notification = $this->Home_Model->get_notification_to_all();
     // echo "<pre>"; print_r($get_notification); echo "</pre>";die();
 ?>
		
	<div id="notice" class="container">
	            <div class="tg-tickerbox">
						<span>সদ্য প্রাপ্ত নোটিশ:</span>
						<div id="tg-ticker" class="tg-ticker owl-carousel">
						<?php 
                            $i = 1;
                            foreach ($get_notification as $key => $value){   
                        ?>	
						<marquee onmouseover="this.stop();" onmouseout="this.start();">
							<div class="item">
								<div class="tg-description">
									<p><?php echo $value['notice_body_details']; ?></p>
								</div>
							</div>
						</marquee>
						<?php $i++;  ?>
						 <?php } ?>
				
						</div>
					</div>
					</div>