<!DOCTYPE html>
<html>
<head>
	<title>CTL_CMS Login</title>
	<script type="text/javascript" src="<?php echo base_url();?>assets/login/js/jquery.js"></script>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/normalize.css" />
	<link rel="icon" href="<?php echo base_url();?>assets/login/Fevicon.png" type="image/x-icon" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/component.css" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {
			background-color: black; /*#1a0000*/
			color: silver;
		}
		#cube-container {
			margin: 80px;
			-webkit-perspective: 800px;
			-webkit-perspective-origin: 50% 110px;
		}
		#cube {
			position: relative;
			margin: auto;
			height: 400px;
			width: 400px;
			-webkit-transform-style: preserve-3d;
			

			/*-webkit-animation: anim2 5s;*/
			/*-webkit-transform-style: preserve-3d;
			-webkit-transform: rotateX(0deg);*/
			/*animation-play-state: paused;*/
			/*-webkit-animation: anim2 ease-in-out 15s infinite;*/
		}
		.login-animate {		
			-webkit-transform: rotateX(0deg);	
			-webkit-animation-fill-mode: forwards;
			-webkit-animation-name: login-animate;
			-webkit-animation-duration: 3s;			
			
		}
		.login-home {	
			-webkit-transform: rotateX(0deg);
			-webkit-animation-fill-mode: forwards;
			-webkit-animation-name: login-home;
			-webkit-animation-duration: 3s;	
		}
		.register-animate {		
			-webkit-transform: rotateX(0deg);	
			-webkit-animation-fill-mode: forwards;
			-webkit-animation-name: register-animate;
			-webkit-animation-duration: 3s;			
			
		}
		.register-home {	
			-webkit-transform: rotateX(0deg);
			-webkit-animation-fill-mode: forwards;
			-webkit-animation-name: register-home;
			-webkit-animation-duration: 3s;	
		}
		.forgotPass-animate {		
			-webkit-transform: rotateX(0deg);	
			-webkit-animation-fill-mode: forwards;
			-webkit-animation-name: forgotPass-animate;
			-webkit-animation-duration: 3s;			
			
		}
		.forgotPass-home {	
			-webkit-transform: rotateX(0deg);
			-webkit-animation-fill-mode: forwards;
			-webkit-animation-name: forgotPass-home;
			-webkit-animation-duration: 3s;	
		}
		@-webkit-keyframes login-home {
			100% {-webkit-transform: rotateY(360deg);}		
		}
		@-webkit-keyframes login-animate {
			100% {-webkit-transform: rotateY(270deg);}
			/*-webkit-transform: rotateX45deg);*/
			/*from {-webkit-transform: rotateY(0deg);}
			50% {-webkit-transform: rotateY(360deg);}
			to {-webkit-transform: rotateY(0deg);}*/
		
		}
		@-webkit-keyframes register-home {
			100% {-webkit-transform: rotateY(360deg);}		
		}
		@-webkit-keyframes register-animate {
			100% {-webkit-transform: rotateY(180deg);}		
		}
		@-webkit-keyframes forgotPass-home {
			100% {-webkit-transform: rotateY(360deg);}		
		}
		@-webkit-keyframes forgotPass-animate {
			100% {-webkit-transform: rotateY(90deg);}		
		}
		.face {
			position: absolute;
			height: 360px;
			width: 360px;
			padding: 20px;
			background-color: rgba(50, 50, 50, 0.5);
		}
		.fcce1 {
			background: url(<?php echo base_url();?>assets/login/image.png);
			height: 320px;
			width: 320px;
			padding: 20px;
			/*background-color: rgba(50, 50, 50, 0.5);*/
		}
		#f1 {
			-webkit-transform: rotateX(90deg) translateZ(200px);
		} #f2 {
			-webkit-transform: translateZ(200px);
		}
		#f3 {
			-webkit-transform: rotateY(90deg) translateZ(200px);
		}
		#f4 {
			-webkit-transform: rotateY(180deg) translateZ(200px);
		}
		#f5 {
			-webkit-transform: rotateY(-90deg) translateZ(200px);
		}
		#f6 {
			-webkit-transform: rotateX(-90deg) translateZ(200px) rotate(180deg);
		}
		#top_message{display: none; margin: auto; text-align: center; width:700px; background-color: #000; padding: 20px; font-size: 20px; color: #fff;}

	</style>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">
</head>
<body>
	
	<div class="container demo-1">
		<div class="content">
			<div id="large-header" class="large-header">
				<canvas id="demo-canvas"></canvas>
				<div class="main-title">
					<?php if(isset($err_msg)){?>
						<div id="top_message"><?php echo $err_msg;?> <a href="<?php echo base_url();?>admin/login" id="slide_up" >Back to <?php echo "login Home";?></a></div>		
					<?php } ?>
					<div id="cube-container">
						<div id="cube" class="">
							<div class="face" id="f1"><div class="fcce1"></div></div>
							<div class="face" id="f2">
								<div class="fcce1">
									<div class="login">
										<h1 >Select an option</h1>
									    <form >
									        <button type="button" id="login" class="login-button">Login</button>
									        <button type="button" id="register" class="login-button">Register</button>
									        <button type="button" id="forgotPass" class="login-button">Forgot Password</button>
									        <button type="button" onclick="window.location.href='<?php echo base_url();?>'" class="login-button">Website</button>
									    </form>
									    <div>
											<img src="<?php echo base_url();?>assets/login/logo.png" class="login-logo">
										</div>
										<div class="cyberdyne-text">
											<p>&copy; 2015 - <?php echo date("Y");?> <a href="http://cyberdynetechnologyltd.com" target="__blank">Cyberdyne Technology Ltd.</a></p>
										</div>
									</div>
									
								</div>
							</div>
							<div class="face" id="f3">
								<div class="fcce1">
									
									<div class="login">
									<button type="button" id="login-home" class="login-button1">Home</button>
										<h1>Login</h1>										
									    <form action="<?php echo base_url();?>admin/login/login_Check"  method="post">
									    	<input type="text" name="email" placeholder="Email" required="required" />
									        <input type="password" name="password" placeholder="Password" required="required" />
									        <button type="submit" class="login-button">Let me Login</button>
									        
									    </form>
									    <div class="cyberdyne-text">
											<p>&copy; 2015 - <?php echo date("Y");?> <a href="http://cyberdynetechnologyltd.com" target="__blank">Cyberdyne Technology Ltd.</a></p>
										</div>
									</div>

								</div>
							</div>
							<div class="face" id="f4">
								<div class="fcce1">
									
									<div class="login">
										<button type="button" id="register-home" class="login-button1">Home</button>
										<h1>Register</h1>
									    <form method="post">
									    	<input type="text" name="naem" placeholder="Full Name" required="required" />
									        <input type="text" name="u" placeholder="Email" required="required" />
									        <input type="password" name="p" placeholder="Password" required="required" />
									        <button type="submit" class="login-button">Register</button>
									    </form>
									    <div class="cyberdyne-text">
											<p>&copy; 2015 - <?php echo date("Y");?> <a href="http://cyberdynetechnologyltd.com" target="__blank">Cyberdyne Technology Ltd.</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="face" id="f5">
								<div class="fcce1">
									
									<div class="login">
									<button type="button" id="forgot-password" class="login-button1">Home</button>
										<h1>Forgot Password</h1>
									    <form method="post">
									        <input type="text" name="u" placeholder="Email" required="required" />
									        <button type="submit" class="login-button">Submit</button>
									    </form>
									    <div class="cyberdyne-text">
											<p>&copy; 2015 - <?php echo date("Y");?> <a href="http://cyberdynetechnologyltd.com" target="__blank">Cyberdyne Technology Ltd.</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="face" id="f6"><div class="fcce1"></div></div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div><!-- /container -->
	

	
</body>

<script src="<?php echo base_url();?>assets/login/js/TweenLite.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/EasePack.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/rAF.js"></script>
<script src="<?php echo base_url();?>assets/login/js/demo-1.js"></script>
<script src="<?php echo base_url();?>assets/login/js/login.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#top_message').slideDown(2000);
		
		<?php $mess = 2;
		if(isset($err_msg)){ $mess = 1;} else {$mess = 2;} ?>
		var mess = "<?php echo $mess; ?>"; 
		if(mess == 1 ) {
			$("#cube").removeClass();
			$("#cube").addClass("login-animate");
		}
		
		$('#slide_up').click(function() {
			$('#top_message').slideUp(2000);
		});
	});
</script>

</html>