<!DOCTYPE html>
<html>
<head>
	<title>Alert From KINGDOM Website</title>
	<link rel="icon" href="<?php echo base_url();?>images/logo/Fevicon.png" type="image/x-icon" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>	
</head>
<body>
<style type="text/css">
	#top_message{display: none; margin: auto; text-align: center; width:320px; background-color: #000; padding: 20px; font-size: 20px; color: #fff;margin-top: 15%;}
	.sub-text {
	    color: yellow;
	}
	.sub-text {
	    font-size: 22px;
	    font-weight: bold;
	    animation: blinker 1.5s linear infinite;
	    -webkit-animation: blinker 1.5s linear infinite;
	}
	@keyframes blinker {  
	  50% {
	    color:red;
	  }
	}
</style>

<div id="top_message">
	<?php if(!empty($backUrl)){?>
		<div style="text-align:center;margin:auto;">
		<img  src="<?php echo base_url(); ?>images/cartoon-Image/alert1.png">
		</div>
		<span class="sub-text"></i> <?php echo $alert;?> </span>
	<?php }else{ ?>	
		<span><?php echo $alert;?> </span>
	<?php } ?>
	<a href="<?php echo base_url();?>" id="slide_up" ><?php if(!empty($backUrl)){echo $backUrl;}else{echo '<span style="color:red !important">Back</span>';} ?></a>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#top_message').slideDown(1000);
		
		$('#slide_up').click(function() {
			$('#top_message').slideUp(1000);
		});
	});
</script>

</body>
</html>