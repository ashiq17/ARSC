<?php $this->load->view('common/header');?>
<style type="text/css">
	
/********** single news ***************/

.group-post>header>h1>a {
    text-decoration: none;
    color: #333;
}

.group-post>header>h1>a:hover {
    text-decoration: none;
    color: #bb1919;
}

.group-post:hover {
    box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.6);
    -o-transition: .5s;
    -ms-transition: .5s;
    -moz-transition: .5s;
    -webkit-transition: .5s;
    /* ...and now for the proper property */
    transition: .5s;
}

.gp-news {
    margin-top: 10px;
}

.gp-news img {
    width: 100%;
    max-height: 150px;
}

.gp-news p {
    padding-top: 5px;
    border-top: 1px solid #ddd;
    color: #333;
}

.group-post, .post, .widget, #comments {
    position: relative;
    border: solid 1px #ddd;
    background: white;
    margin: 0 0 10px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

.post header, .group-post header,
.post .post-excerpt, .group-post .post-excerpt,
.post .post-body, .group-post .post-body,
#comments .comments-wrap {
    padding: 20px;
}

.post header h1, .group-post header h1,
.post header h3, .group-post header h3 {
    margin: 0 0 15px;
    padding: 0 0 15px;
    border-bottom: solid 1px #ddd;
}

.group-post header h1{
    font-size: 22px;
    margin-right: 75px;
    text-align: justify;
}

.post-image {
    height: auto;
}

.post-image img {
    width: 100%;
}

.post-details {
    font-size: 12px;
    width: 100%;
    height: 30px;
}

.post-details i.fa {
    padding-left: 10px;
}

.post-details i.fa:first-child {
    padding: 0;
}

/* === COMMENTS ====*/

.post-comments-badge {
    height: 30px;
    width: 50px;
    position: absolute;
    top: 1px;
    right: 5px;
    border: none;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    /*background: #bb1919;*/
    background: #666666;
    text-align: center;
    display: table;
}

.post-comments-badge a {
    display: table-cell;
    vertical-align: middle;
    color: white;
    font-size: 10px;
    line-height: 10px;
}

.post-comments-badge i.fa {
    display: block;
    font-size: 15px;
    padding: 0;
    /*margin-bottom: 4px;*/
}

.post-comments-badge:hover {
    background-color: #8bc653;
}

#comments h3 {
    text-align: center;
        font-weight: 700;

}

#comments h4 {
    font-size: 1.3em;
}

#comments ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

#comments ol li {
    background: rgba(0,0,0,0.02);
    padding: 10px 20px;
    margin: 10px 0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    border: solid 1px rgba(0,0,0,0.03);
}
.post header h1, .group-post header h1 {
    /* font-size: 22px; */
    margin-right: 75px;
    /* text-align: justify; */
}

body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
   font-size: 16px;
    line-height: 1.42857;
    color: rgb(51, 51, 51);
    background-color: rgb(255, 255, 255);
}


#comments ol li ol.children {
    padding: 0;
    list-style: none;
    font-size: 0.96em;
}
#comments {
    position: relative;
    border: solid 1px #ddd;
    background: white;
    margin: 0 0 10px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

#leave-comment {
    margin: 40px 0 0;
    list-style: none;
    border-top: solid 1px #eee;
}

#label {
	 font-weight: bold;
    display: inline-block;
    /* max-width: 100%; */
    /* margin-bottom: 5px; */
    font-weight: 700;
}
input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], textarea {
    color: #666;
    border: 1px solid #ccc;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    display: block;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    padding: 6px 12px;
    opacity: 0.8;
}
a:hover, a:focus {
    color: green;
    /* text-decoration: underline; */
}
.comment-body{
	margin-left: 20px;
	color:green;
	border:1px solid #ddd;
}


/*facebook share mahbub start */



.social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */
     
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/
 
 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
a.share-button {
    color: #fff;
}

.share-button {
    font-size: 30px;
    background: #bb1919;
    -webkit-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    color: #222;
}

.share-button, .share-toggle-button {
    position: absolute;
    display: inline-block;
    left: 50%;
    top: 50%;
    border-radius: 50%;
    width: 30px;
    height: 20px;
    line-height: 80px;
    margin-left: -40px;
    margin-top: -40px;
    background: #bb1919;
    text-align: center;
    color: #fff;
    border: none;
    outline: none;
}
/*facebook share mahbub end */
</style>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"> -->
</head>
<body>

 <?php $this->load->view('common/top-nav');?>
  
 <!-- single news share on facebook edited by ratul -->
  
 <!-- Load Facebook SDK for JavaScript -->
<!-- <div id="fb-root"></div> -->
 <script>
 	// (function(d, s, id) {
  //  var js, fjs = d.getElementsByTagName(s)[0];
  //  if (d.getElementById(id)) return;
  //  js = d.createElement(s); js.id = id;
  //  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
  //  fjs.parentNode.insertBefore(js, fjs);
 	// }(document, 'script', 'facebook-jssdk'));
 </script>

 <?php foreach($blog_single_data as $key=>$value) {}?>
 
 <!-- single news share on facebook edited by ratul -->
 
<!-- END HEADER headertop NAV -->

	<!-- Top News Section
	============================================================ -->
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="single-blog">
					
						<?php 
							$engtext = array(1,2,3,4,5,6,7,8,9,0);
							$bangtext = array('১','২','৩','৪','৫','৬','৭','৮','৯','০'
							);
						?>

						<?php
							// echo '<pre>',print_r($blog_single_data),'</pre>'; 
							$comentsCount = 0;
							$blogid = 0;
							$ImageLink = "";
							foreach($blog_single_data as $key=>$value) {
								$BlogID = $value->BlogID;
								$comentsCount = $value->CommentCount;
								// $ImageLink = $value->ImageLink;
								// $FileType = $value->FileType;
								?>
									<div class="post">
										<header>
											<h1 style="text-align: center;"> <strong><?php echo $value->BlogTitle; ?></strong></h1>
											
											<div class="post-details">
												<div class="col-md-12" style="height: 30px; ">
													<div class="col-md-4">
													<i class="fa fa-clock-o"></i>

													<span style="color:green; font-size: 13px;" > <?php 
														$get_blog_date = $value->created;
														$blog_date = new DateTime($get_blog_date);
														$new_blog_date = $blog_date->format("j F Y, l, H:i");

														$engDATE = array(1,2,3,4,5,6,7,8,9,0,'January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
														$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
														বুধবার','বৃহস্পতিবার','শুক্রবার' 
														);
														$convertedDATE = str_replace($engDATE, $bangDATE, $new_blog_date);
														echo $convertedDATE . "মি.";
													?>
												</span>
												</div>
												<div class="col-md-3">
													
													<span style="margin-left:1px; font-size: 17px; color:red; float:left;" ><i class="fa fa-user"></i> <strong>মজিবুর রহমান  মনজু</strong></span>	
												</div>
												<div class="col-md-3">
													<div class="text-center center-block">
														

											                <a href="https://www.facebook.com/sharer/sharer.php?u=http://nsrohingya.com/single_blog/<?php echo $value->BlogID; ?>/<?php echo $value->BlogSlug; ?>&amp;src=sdkpreparse"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
												            <a href="https://twitter.com/share?
															  url=http://nsrohingya.com/single_blog/<?php echo $value->BlogID; ?>/<?php echo $value->BlogSlug; ?>&
															  via=twitterdev&
															  related=twitterapi%2Ctwitter&
															  hashtags=example%2Cdemo&
															  text=<?php echo $value->BlogTitle; ?>"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
												            <a href="https://plus.google.com/share?url=http://nsrohingya.com/single_blog/<?php echo $value->BlogID; ?>/<?php echo $value->BlogSlug;?>"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
												            <a href="http://pinterest.com/pin/create/button/?url=http://nsrohingya.com/single_blog/<?php echo $value->BlogID; ?>/<?php echo $value->BlogSlug;?>&description=<?php echo $value->BlogTitle; ?>"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
												            
											        </div>
												</div>
												<div class="col-md-2 post-comments-badge">
													<a href="#"><i class="fa fa-comments"></i> <?php echo str_replace($engtext, $bangtext, $comentsCount);?></a>
												</div><!-- post-comment-badge -->
											
											</div>
										</div>
											<!-- post-details -->

										</header>
									</div>
										<div class="dez-post-media dez-img-effect zoom-slow"> <a href="#">
			                            	<!-- <img src="<?php echo base_url(); ?><?php echo $value->image; ?>" alt=""> -->
			                            	<img class="center-block" style="width:850px; height:240px;"  class="img-responsive"  alt="No Image Found" src="<?php echo base_url('/assets/images/blogImages/').$value->image;?>"/>
			                            	</a> 
			                            </div>

									<article class="post">	
										<div class="post-body">
											<?php echo $value->BlogBody; ?>
										</div><!-- post body -->
									</article>
								<?php
							}
						?>

						<div id="comments">
							<div class="comments-wrap">
							<h3><?php echo str_replace($engtext, $bangtext, $comentsCount); ?> Comments</h3>

								<!-- These comments will have an image and more valuermations when we use WordPress  -->

								<ol class="comments-list">

								<?php
									foreach($get_blog_comments_data as $key=>$commentsInfo) {
										?>
										<li class="comment">
											
											<h4>
												
												<?php echo character_limiter($commentsInfo->AuthorName, 50); ?>
												
												 <small >&bull; <?php 
													$commentdate = $commentsInfo->CommentDateTime;
													$commentdate = new DateTime($commentdate);
													$newcommentdate = $commentdate->format("j F Y, l, H:i");

													$engDATE = array(1,2,3,4,5,6,7,8,9,0,'January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
													$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
													বুধবার','বৃহস্পতিবার','শুক্রবার' 
													);
													$convertedDATE = str_replace($engDATE, $bangDATE, $newcommentdate);
													echo $convertedDATE . "মি.";
												?></small>
											
											</h4>

											 <div class="comment-body">
												<p ><?php echo $commentsInfo->Comment;?></p>
											</div>
											<div class="comment-body-reply">
												<button type="button">Reply</button>
														<div class="comment-body">
															<p ><?php echo $commentsInfo->Comment;?></p>
														</div>
												<div class="comment-body-reply">
													<form class="form_class" id="notesmodal" action="<?php echo base_url();?>home/blog_comment_reply_submit" role="form" method="post" enctype="multipart/form-data">
											 		<input type="hidden" name="BlogID" value="<?php echo $BlogID; ?>">
											 		<input type="hidden" name="CommentID" value="<?php echo $commentsInfo->CommentID; ?>" >
											
														<p class="comment-form-author">
														<label for="author">নাম *</label>
															<input type="text" id="author" name="author" pattern="[a-zA-Z\s]+" title="Please type your name not number or url" required="required">
														</p>
														<p class="comment-form-eamil">
															<label for="email">ইমেইল *</label>
															<input type="email" id="email" name="email" required="required">
														</p>
														<p class="comment-form-url">
															<label for="url">ওয়েবসাইট </label>
															<input type="url" id="url" name="url">
														</p>
														<p class="comment-form-comment">
															<label for="comment">মন্তব্য *</label>
															<textarea id="comment" name="comment_reply" cols="25" rows="4" required="required"></textarea>
														</p>
														<p class="form-submit">
															<input class="sd-button" type="submit" name="submit" value="মন্তব্য জমা দিন">
														</p>
													</form>
												</div>
											</div> 
										</li><!-- comment -->
										<?php
									}
								?>

								</ol><!-- comment-list -->
								<div id="leave-comment">
									<h3>Comments করুন</h3>
									<form class="form_class" id="notesmodal" action="<?php echo base_url();?>home/blog_comment_submit" role="form" method="post" enctype="multipart/form-data">
										 <input type="hidden" name="BlogID" value="<?php echo $BlogID; ?>">
										<p>আপনার ইমেইল প্রদর্শিত হবে না। <span class="required">( * )</span> চিহ্নিত ঘরগুলো অবশ্যই পূরণ করতে হবে। </p>
										<p class="comment-form-author">
											<label for="author">নাম *</label>
											<!-- <input type="text" id="author" name="author" pattern="[a-zA-Z0-9\s]+" title="Please type your name not url" required="required"> -->
											<input type="text" id="author" name="author" pattern="[a-zA-Z\s]+" title="Please type your name not number or url" required="required">
										</p>
										<p class="comment-form-eamil">
											<label for="email">ইমেইল *</label>
											<input type="email" id="email" name="email" required="required">
										</p>
										<p class="comment-form-url">
											<label for="url">ওয়েবসাইট </label>
											<input type="url" id="url" name="url">
										</p>
										<p class="comment-form-comment">
											<label for="comment">মন্তব্য *</label>
											<textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea>
										</p>
										<p class="form-submit">
											<input class="sd-button" type="submit" name="submit" value="মন্তব্য জমা দিন">
										</p>
									</form>
								</div><!-- leave-comment -->
							</div><!-- comments wrap -->
						</div><!-- comment -->
					</div>
				</div><!-- col-sm-8 -->
				
				<!-- sidebar area start -->
				<?php 
				// $this->load->view('widgets/sidebar/sidebar');
				?>
				<!-- sidebar area End -->

			</div> <!-- row -->
		</div> <!-- container -->
	</section>



<?php $this->load->view('common/footer');?>



</body>
</html>
<style type="text/css">
	.comment-title {
	  font-weight: bold;
	  font-size: 20px;
	}
</style>