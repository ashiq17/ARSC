<!DOCTYPE html>
<html>
<head>
	<title>Alert From CTL_CMS</title>
	<link rel="icon" href="<?php echo base_url();?>images/Fevicon.png" type="image/x-icon" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.0.min.js"></script>	
</head>
<body>
<style type="text/css">
	#top_message{display: none; margin: auto; text-align: center; width:700px; background-color: #000; padding: 20px; font-size: 20px; color: #fff;}
</style>

<div id="top_message"><?php echo $alert;?> <a href="<?php echo base_url();?><?php echo $backUrl;?>" id="slide_up" >Back to <?php echo $voucherName;?></a></div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#top_message').slideDown(2000);
			
			$('#slide_up').click(function() {
				$('#top_message').slideUp(2000);
			});
		});
	</script>

</body>
</html>