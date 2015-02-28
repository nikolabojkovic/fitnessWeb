<?php require_once (dirname($_SERVER['REQUEST_URI']).'views/header.php');?>
<section>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">	  
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
		<div class="item active">
		  <img src="img/slider/slider1.png" alt="..." class="slider">
		  <div class="carousel-caption">
			<h1>Fitness World</h1>
			<h3>Welcome to the world of fitness. This text can be modified.</h3>
		  </div>
		</div>
		<div class="item">
		  <img src="img/slider/slider1.png" alt="..." class="slider">
		  <div class="carousel-caption">
			<h1>Fitness World</h1>
			<h3>Welcome to the world of fitness. This text can be modified.</h3>
		  </div>
		</div>
		  <div class="item">
		  <img src="img/slider/slider1.png" alt="..." class="slider">
		  <div class="carousel-caption">
			<h1>Fitness World</h1>
			<h3>Welcome to the world of fitness. This text can be modified.</h3>
		  </div>
		</div>
		  <div class="item">
		  <img src="img/slider/slider1.png" alt="..." class="slider">
		  <div class="carousel-caption">
		   <h1>Fitness World</h1>
			<h3>Welcome to the world of fitness. This text can be modified.</h3>
		  </div>
		</div>
	  </div>
	</div>	
			  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	  </ol>
</section>	
<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title"
 data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
 <br/>
<?php require_once (dirname($_SERVER['REQUEST_URI']).'views/footer.php');?>