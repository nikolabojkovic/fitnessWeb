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
			<h3>Welcome to the world of fitness.</h3><h3> This text can be modified.</h3>
		  </div>
		</div>
		<div class="item">
		  <img src="img/slider/slider2.png" alt="..." class="slider">
		  <div class="carousel-caption">
			<h1>Fitness World</h1>
			<h3>Welcome to the world of fitness.</h3><h3> This text can be modified.</h3>
		  </div>
		</div>
		  <div class="item">
		  <img src="img/slider/slider3.png" alt="..." class="slider">
		  <div class="carousel-caption">
			<h1>Fitness World</h1>
			<h3>Welcome to the world of fitness.</h3><h3> This text can be modified.</h3>
		  </div>
		</div>
		  <div class="item">
		  <img src="img/slider/slider4.png" alt="..." class="slider">
		  <div class="carousel-caption">
		   <h1>Fitness World</h1>
			<h3>Welcome to the world of fitness.</h3><h3> This text can be modified.</h3>
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
	<div class="project-caption"><i class="fa fa-th-large icon-color"></i><span class="project-caption-text">LAST PROJECT</span></div>
</section>
<section>
	<div class="project-item"></div>
	<div class="div-separator"></div>
	<div class="project-item"></div>
	<div class="div-separator"></div>
	<div class="project-item"></div>
</section>
<section>
	<div class="project-caption"><i class="fa fa-rss icon-color"></i><span class="project-caption-text">LAST POST FROM BLOG</span></div>
	<div class="div-separator"></div>
	<div class="project-caption"><i class="fa fa-twitter icon-color"></i><span class="project-caption-text">LAST TWEETS</span></div>
	<div class="div-separator"></div>
	<div class="project-caption"><i class="fa fa-at icon-color"></i><span class="project-caption-text">SUBSCRIBE</span></div>
</section>
<section>
	<div class="pre-footer"></div>
	<div class="div-separator"></div>
	<div class="pre-footer"></div>
	<div class="div-separator"></div>
	<div class="pre-footer"></div>
</section>
<?php require_once (dirname($_SERVER['REQUEST_URI']).'views/footer.php');?>