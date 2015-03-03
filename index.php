<?php require_once (dirname($_SERVER['REQUEST_URI']).'views/header.php');?>
<section id="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">	 
		<!-- Controls -->
		<a class="left control leftControl" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon controlSize glyphicon-chevron-left"></span>
		</a>
		
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
		<div class="item active">
		  <img src="img/slider/slider5.png" alt="..." class="slider">
		  <div class="carousel-caption">
			<h1>Fitness World</h1>
			<h3>Welcome to the world of fitness.<br /> This text can be modified.</h3>
		  </div>
		</div>
		<div class="item">
		  <img src="img/slider/slider2.png" alt="..." class="slider">
		  <div class="carousel-caption">
			<h1>Fitness World</h1>
			<h3>Welcome to the world of fitness..<br /> This text can be modified.</h3>
		  </div>
		</div>
		  <div class="item">
		  <img src="img/slider/slider3.png" alt="..." class="slider">
		  <div class="carousel-caption">
			<h1>Fitness World</h1>
			<h3>Welcome to the world of fitness..<br /> This text can be modified.</h3>
		  </div>
		</div>
		  <div class="item">
		  <img src="img/slider/slider4.png" alt="..." class="slider">
		  <div class="carousel-caption">
		   <h1>Fitness World</h1>
			<h3>Welcome to the world of fitness.<br /> This text can be modified.</h3>
		  </div>
		</div>
	  </div>
	  <a class="right control rightControl" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon controlSize glyphicon-chevron-right"></span>
		</a>
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	  </ol>
	</div>	
</section>	
<section>
	<div class="project-caption"><i class="fa fa-th-large fa-2x icon-color"></i><span class="project-caption-text">LAST PROJECT</span></div>
</section>
<section>
	<div class="project-item">
		<div class="item-hover"><span class="glyphicon glyphicon-zoom-in item-hide"></span></div>
		<img src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'img/project-item/project-item2.png',1)); ?>" alt="..." />
		<hr />
		<div class="project-title">
			<h4>Workout Healthy</h4>
			<p>traning, food , rest</p>
		</div>
	</div>
	<div class="div-separator"></div>
	<div class="project-item">
		<div class="item-hover"><span class="glyphicon glyphicon-zoom-in item-hide"></span></div>
		<img src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'img/project-item/project-item3.png',1)); ?>" alt="..." />
		<hr />
		<div class="project-title">
			<h4>Workout Healthy</h4>
			<p>traning, food , rest</p>
		</div>
	</div>
	<div class="div-separator"></div>
	<div class="project-item">
		<div class="item-hover"><span class="glyphicon glyphicon-zoom-in item-hide"></span></div>
		<img src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'img/project-item/project-item4.png',1)); ?>" alt="..." />
		<hr />
		<div class="project-title">
			<h4>Workout Healthy</h4>
			<p>traning, food , rest</p>
		</div>
	</div>
</section>
<section>
	<div class="project-caption"><i class="fa fa-rss fa-2x icon-color"></i><span class="project-caption-text">LAST POST FROM BLOG</span></div>
	<div class="div-separator"></div>
	<div class="project-caption"><i class="fa fa-twitter fa-2x icon-color"></i><span class="project-caption-text">LAST TWEETS</span></div>
	<div class="div-separator"></div>
	<div class="project-caption"><i class="fa fa-at fa-2x icon-color"></i><span class="project-caption-text">SUBSCRIBE</span></div>
</section>
<section>
	<div class="pre-footer">
		<h4>Unlimitade Gaid To The Perfect Body</h4>
		<p>Whether your goal is to lose body fat or build muscle,
		you will find nothing is set in stone and some of
		these suggestions overlap.<br / >
		<a href="#">Read more >></a></p>
		<br />
	</div>
	<div class="div-separator"></div>
	<div class="pre-footer">
		<p><label>about 24 hours ago</label> Envato Co-founder 
		Cyan gives Minted Mag some tips for 
		growing Freelance Business! Check it out <span class="label-blue">enva.to/PNGCEx</span></p>
		<hr />
		<p><label>about a day ago</label> Need some advice on starting a small business?
		Check out this interview 
		with Envato CEO @Collis <span class="label-blue">enva.to/QCV0fQ</span>
		</p>
	</div>
	<div class="div-separator"></div>
	<div class="pre-footer">
		<h5>Subscribe to our e-mail newsletter to 
			receive updates.
		</h5>
		<p><input type="text" name="subscribe" id="txbSubscribe"
				placeholder="Enter your Email" class="my-txb-email" />
			<button class="my-button-submit">Submit</button></p>
		<br />
		<br />
		<br />	
		<br />
	</div>
</section>
<?php require_once (dirname($_SERVER['REQUEST_URI']).'views/footer.php');?>