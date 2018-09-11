<!DOCTYPE html>
<html>
<head>
	<title>Alert From POS</title>
	<link rel="icon" href="<?php echo base_url();?>images/logo/Fevicon.png" type="image/x-icon" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>	
</head>
<body>
<style type="text/css">
	#top_message{display: none; margin: auto; text-align: center; width:320px; background-color: #000; padding: 20px; font-size: 20px; color: #fff;margin-top: 15%;}
</style>

<div id="top_message"><?php echo $alert;?> <a style="color:red" href="<?php echo base_url();?><?php echo $backUrl;?>" id="slide_up" >Back to <?php echo $voucherName;?></a></div>

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