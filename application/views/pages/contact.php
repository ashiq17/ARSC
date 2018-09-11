<?php $this->load->view('common/header');?>
<style type="text/css">
	.display-4 {
    font-family: 'Rubik', sans-serif;
    font-size: 1rem;
    width: 50px;
}
.btn-primary, .btn-primary:active {
    background-color: #149dcc;
    border-color: #149dcc;
    color: #ffffff;
}
.btn_custom {
    width: 150px !important;
}
.btn {
    font-weight: 500;
   
    transition: all 0.3s ease-in-out;
    padding: 1rem 3rem;
    border-radius: 3px;
    
}
.padding-1{
	padding-left: 50px;
}
.contact-box-border{
	border :solid #ddd 1px;
}
.contact-box-border-right{
	border-left :solid #ddd 1px;
}
</style>
<section class="container padding-0">
	<div class="col-md-12 padding-0">
		<div class="panel contact-box-border ">
			<h1 class="design" style="text-align: center"><strong>Contact </strong></h1>
			<div class="panel-body">
				<div class="col-md-12 contact-box contact-box-border">
						<div class="col-md-6">
							<div class="col-md-12">
								<div class="col-md-2 padding-1">
									<span  style="color: green;margin-top:12px;" class="glyphicon glyphicon-earphone"></span>
								</div>
								<div class="col-md-10">
									<h4><span class=""> Mobile : </span><strong> +88 01711-070777</strong></span></h4>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-2 padding-1">
									<span  style="color: green;margin-top:12px;" class="glyphicon glyphicon glyphicon-phone-alt"></span>
								</div>
								<div class="col-md-10">
									<h4><span class=""> Phone : </span><strong> +88 022-12515545</strong></h4>
								</div>
							</div>
						</div>

						<div class="col-md-6 contact-box-border-right">
							<div class="col-md-12">
								<div class="col-md-2 padding-1">
									<span  style="color: green;margin-top:12px;" class="glyphicon glyphicon-envelope"></span>
								</div>
								<div class="col-md-10">
									<h4><span class="font-size:10px;"> Mail : </span><strong> mrmonju2020@gmail.com</strong></span></h4>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-2 padding-1">
									<span  style="color: green;margin-top:12px;" class="glyphicon glyphicon-cloud"></span>
								</div>
								<div class="col-md-10">
									<h4><span class=""> Website : </span><strong>mrmonju.com</strong></h4>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>	
		<div class="panel panel-default">
		<div class="clearfix"></div>
			<div class="panel-body" >
				<form role="form"  action="<?php echo base_url();?>home/add_contact_message" method="post" enctype="multipart/form-data" class="clearfix">
					<div class="row">

						<div class="col-sm-6">
						<div class="col-sm-12">
							<h4 class="design"><strong>Send A Message</strong></h4>
							<div class="form-group">
								<label for="contact-name" class="sr-only">Name</label>
								<input type="text" class="form-control input-lg" name="contact-name" id="contact-name" required="required" placeholder="Your name">
							</div>
							<div class="form-group">
								<label for="contact-number" class="sr-only">Number</label>
								<input type="text" class="form-control input-lg" name="contact-number" id="contact-number" required="required" placeholder="Your contact number">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="contact-email" class="sr-only">Email</label>
								<input type="text" class="form-control input-lg" name="contact-email" id="contact-email" placeholder="Your email">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="contact-website" class="sr-only">Website</label>
								<input type="text" class="form-control input-lg"  name="contact-website" id="contact-website" placeholder="Your Website">
							</div>
						</div>
					</div>
					
						<div class="col-sm-12">
							<div class="form-group">
								<label for="contact-words" class="sr-only">Message</label>
								<textarea class="form-control input-lg" id="contact-words" name="contact-words" placeholder="Your Message" rows="3"></textarea>
							</div>
						</div>
					
					</div>
					<div class="col-md-12">
						<input type="submit" name="Submit" class="btn btn_custom btn-primary " value="Send">
					</div>
					
				</form>
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('common/footer');?>