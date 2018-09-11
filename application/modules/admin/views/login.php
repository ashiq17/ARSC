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
		body, html {
			 /*background: #6891a2;*/
			background: url(<?php echo base_url();?>assets/dashboard/img/back.jpg);
			background-repeat: no-repeat;
    		background-size: cover;
    		 /*background: #00ffd026;*/

		}

	

		.card-container.card {
		    max-width: 350px;
		    padding: 40px 40px;
		}

		.btn {
		    font-weight: 700;
		    height: 36px;
		    -moz-user-select: none;
		    -webkit-user-select: none;
		    user-select: none;
		    cursor: default;
		}

		/*
		 * Card component
		 */
		.card {
		    background-color: #F7F7F7;
		    /*background: url(<?php echo base_url();?>assets/dashboard/img/back.jpg);*/
		    /* just in case there no content*/
		    padding: 20px 25px 30px;
		    margin: 0 auto 25px;
		    /*margin-top: 70px;*/
		    /* shadows and rounded borders */
		    -moz-border-radius: 2px;
		    -webkit-border-radius: 2px;
		    border-radius: 2px;
		    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}

		.profile-img-card {
		    /*width: 96px;*/
		    height: 96px;
		    margin: 0 auto 10px;
		    display: block;
		   /* -moz-border-radius: 50%;
		    -webkit-border-radius: 50%;
		    border-radius: 50%;*/
		}

		/*
		 * Form styles
		 */
		.profile-name-card {
		    font-size: 16px;
		    font-weight: bold;
		    text-align: center;
		    margin: 10px 0 0;
		    min-height: 1em;
		}

		.reauth-email {
		    display: block;
		    color: #404040;
		    line-height: 2;
		    margin-bottom: 10px;
		    font-size: 14px;
		    text-align: center;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		    -moz-box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    box-sizing: border-box;
		}

		.form-signin #inputEmail,
		.form-signin #inputPassword {
		    direction: ltr;
		    height: 44px;
		    font-size: 16px;
		}

		.form-signin input[type=email],
		.form-signin input[type=password],
		.form-signin input[type=text],
		.form-signin button {
		    width: 100%;
		    display: block;
		    margin-bottom: 10px;
		    z-index: 1;
		    position: relative;
		    -moz-box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    box-sizing: border-box;
		}

		.form-signin .form-control:focus {
		    border-color: rgb(104, 145, 162);
		    outline: 0;
		    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		}

		.btn.btn-signin {
		    /*background-color: #4d90fe; */
		    background-color: rgb(104, 145, 162);
		    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
		    padding: 0px;
		    font-weight: 700;
		    font-size: 14px;
		    height: 36px;
		    -moz-border-radius: 3px;
		    -webkit-border-radius: 3px;
		    border-radius: 3px;
		    border: none;
		    -o-transition: all 0.218s;
		    -moz-transition: all 0.218s;
		    -webkit-transition: all 0.218s;
		    transition: all 0.218s;
		}

		.btn.btn-signin:hover,
		.btn.btn-signin:active,
		.btn.btn-signin:focus {
		    background-color: rgb(12, 97, 33);
		     color:#fff !important;
		}

		.forgot-password {
		    color: rgb(104, 145, 162);
		}

		.forgot-password:hover,
		.forgot-password:active,
		.forgot-password:focus{
		    color: rgb(12, 97, 33);
		}
		input {
    		background: rgba(0, 0, 0, 0.05) !important;
    		color:#000 !important;
    		width: 100%!important;
		}
		#top_message{display: none; margin: auto; text-align: center; width:700px;
		 /*background-color: #000; */
		 background: url(<?php echo base_url();?>assets/dashboard/img/back.jpg);
		 padding: 20px; font-size: 20px; 
		 color: #fff;}

	</style>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">
</head>
<body>
	
	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
 <div class="login-branding">
        <!-- <a href="index.html"><img src="<?=base_url()?>asset/images/logo-large.png" alt="logo"></a> -->
        <marquee scrollamount="3">
        <img  src="<?=base_url()?>assets/dashboard/img/logo-large.png" alt="logo">
        <img style="" src="<?=base_url()?>assets/dashboard/img/logo-large1.png" alt="logo">
         
        
         </marquee>
    </div>
    <div class="container" style="background: #00ffd017;">

           <?php if(isset($err_msg)){?>
				<!-- <div id="top_message"><?php echo $err_msg;?> <a href="<?php echo base_url();?>admin/login" id="slide_up" >Back to <?php echo "login Home";?></a></div> -->
				<div id="top_message"><?php echo $err_msg;?> <a href="<?php echo base_url();?>admin/login" id="slide_up" ><span style="color:green">Click to clear Meassage</span></a></div>		
			<?php } ?>
        <div class="card card-container">
        	<p style="color:green;text-align: center;"> Welcome To </p>
        	<p style="color:#941747;text-align: center;">"School Management "</p>
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url(); ?>assets/images/users/mrmonju.jpg">
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="<?php echo base_url();?>admin/login/login_Check"  method="post"> 
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address/Username" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" style="width:5% !important"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    <div class="cyberdyne-text">
		<p>&copy; 2015 - <?php echo date("Y");?> <a href="http://cyberdynetechnologyltd.com" target="__blank"> Cyberdyne Technology Ltd.</a></p>
	</div>


	
</body>

<script src="<?php echo base_url();?>assets/login/js/TweenLite.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/EasePack.min.js"></script>
<script src="<?php echo base_url();?>assets/login/js/rAF.js"></script>
<script src="<?php echo base_url();?>assets/login/js/demo-1.js"></script>
<script src="<?php echo base_url();?>assets/login/js/login.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#top_message').slideDown(1000);
		
		<?php $mess = 2;
		if(isset($err_msg)){ $mess = 1;} else {$mess = 2;} ?>
		var mess = "<?php echo $mess; ?>"; 
		if(mess == 1 ) {
			$("#cube").removeClass();
			$("#cube").addClass("login-animate");
		}
		
		$('#slide_up').click(function() {
			$('#top_message').slideUp(1000);
		});
	});

	$( document ).ready(function() {
	    // DOM ready

	    // Test data
	    /*
	     * To test the script you should discomment the function
	     * testLocalStorageData and refresh the page. The function
	     * will load some test data and the loadProfile
	     * will do the changes in the UI
	     */
	    // testLocalStorageData();
	    // Load profile if it exits
	    loadProfile();
	});

	/**
	 * Function that gets the data of the profile in case
	 * thar it has already saved in localstorage. Only the
	 * UI will be update in case that all data is available
	 *
	 * A not existing key in localstorage return null
	 *
	 */
	function getLocalProfile(callback){
	    var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
	    var profileName        = localStorage.getItem("PROFILE_NAME");
	    var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

	    if(profileName !== null
	            && profileReAuthEmail !== null
	            && profileImgSrc !== null) {
	        callback(profileImgSrc, profileName, profileReAuthEmail);
	    }
	}

	/**
	 * Main function that load the profile if exists
	 * in localstorage
	 */
	function loadProfile() {
	    if(!supportsHTML5Storage()) { return false; }
	    // we have to provide to the callback the basic
	    // information to set the profile
	    getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
	        //changes in the UI
	        $("#profile-img").attr("src",profileImgSrc);
	        $("#profile-name").html(profileName);
	        $("#reauth-email").html(profileReAuthEmail);
	        $("#inputEmail").hide();
	        $("#remember").hide();
	    });
	}

	/**
	 * function that checks if the browser supports HTML5
	 * local storage
	 *
	 * @returns {boolean}
	 */
	function supportsHTML5Storage() {
	    try {
	        return 'localStorage' in window && window['localStorage'] !== null;
	    } catch (e) {
	        return false;
	    }
	}

	/**
	 * Test data. This data will be safe by the web app
	 * in the first successful login of a auth user.
	 * To Test the scripts, delete the localstorage data
	 * and comment this call.
	 *
	 * @returns {boolean}
	 */
	function testLocalStorageData() {
	    if(!supportsHTML5Storage()) { return false; }
	    localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
	    localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
	    localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
	}
</script>

</html>