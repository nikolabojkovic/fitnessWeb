<?php require_once (__DIR__.'/header.php');?>
<section id="contact-caption">
	<h1>CONTACT</h1>
	<img src="<?php echo __ROOT_PATH__.'/img/contact/contact.png';?>" alt="Contact Image..." class="contact-image" />
</section>
<section id="contact-content">
	<div class="layout" style="width: 68%;">
		<div class="contact-form">
			<h1>SIMPLE CONTACT FORM</h1>
			<form action="" method="" id="contact-form">
					<input type="text" name="subscribe" id="txbSubscribe"
							placeholder="Enter your Name" class="my-txb-email" />
					<input type="text" name="subscribe" id="txbSubscribe"
							placeholder="Enter your Email" class="my-txb-email" />
					<textarea placeholder="Enter your Message" class="my-txb-email" style="height: 150px;" ></textarea>
					<button class="my-button-submit">Submit</button>
				</form>
		</div>
	</div>
	<div class="div-separator"></div>
	<div class="layout" style="float: right; margin: 10px 0px;">
		<div class="project-caption"><i class="fa fa-map-marker fa-2x icon-color"></i><span class="project-caption-text">GOOGLE MAP</span></div>
		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.0933682567847!2d-80.30389330000004!3d25.833468500000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ba3f4f86eded%3A0x18504504c26b39de!2s1500+Miami+Springs+Ave%2C+Miami%2C+FL+33166%2C+USA!5e0!3m2!1sen!2srs!4v1425593926233" width="290" height="175" frameborder="0" style="border:0"></iframe>
		</div>
		<br />
		<div class="pre-footer">
			<h4>CONTACT DETAILS</h4>
			<p>12 Madison Ave, 7nd Floor New York, NY, 10016.  TEL: 200-200-2000<br /><br />
			For inquiries please contact 
			
			 <span class="label-blue"><a href="#">info@company.con</a></span>
			</p>
			<div style="margin-left: 20px;">
					<a href="#"><i class="fa fa-facebook-official fa-2x icon-color-facebook "></i></a>
					<a href="#"><i class="fa fa-linkedin-square fa-2x icon-color-linkedin "></i></a>
					<a href="#"><i class="fa fa-pinterest-square fa-2x icon-color-pinterest "></i></a>
					<a href="#"><i class="fa fa-twitter-square fa-2x icon-color-tweeter "></i></a>
			</div>
		</div>
	</div>
</section>
<?php require_once ('/footer.php');?>