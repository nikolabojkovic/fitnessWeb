<!DOCTYPE html>
<html lang="en">
	<head>
		<title>INDEX</title>
		<meta charset="utf-8">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'css/reset.css',1)); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'bootstrap-3.1.1-dist/css/bootstrap.min.css',1)); ?>" rel="stylesheet">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'font-awesome-4.3.0/css/font-awesome.min.css',1)); ?>" rel="stylesheet">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'css/header.css',1)); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'css/main.css',1)); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'img/fiveicon.png',1)); ?>"  rel="icon" type="image/png" >
		<link rel="stylesheet" href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'css/mobile.css',1)); ?>" />
		<script src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'js/jquery-1.11.1.min.js',1)); ?>"></script>	
		<script src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'js/glm-ajax.js',1)); ?>"></script>	
		<script src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'js/main.js',1)); ?>"></script>
		<script src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'bootstrap-3.1.1-dist/js/bootstrap.min.js',1)); ?>"></script>		
	</head>
	<body>
		<article>
			<header>					
					<!-- <ul>
						<a href="#"><li>FEATURES</li></a>
						<a href="#"><li>BLOG</li></a>
						<a href="#"><li>SUPPORT</li></a>
						<a href="#"><li>CONTACT</li></a>
					</ul> 
					<a class="navbar-brand" href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']),1)); ?>">
						<img id="logo" alt="Fitness Logo" src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'img/header/logo.png',1)); ?>" />
					</a> -->
	  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<a class="navbar-brand" href="#">FITNESS - HEALTHY LIFE</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
              <input type="text" placeholder="Email" class="my-txb-email">
              <input type="password" placeholder="Password" class="my-txb-email">
            <button type="submit" class="my-button-submit">Sign in</button>
          </form>
            <ul class="nav navbar-nav">			
              <li class="active"><a href="#">FEATURES</a></li>
              <li><a href="#">BLOG</a></li>
              <li><a href="#">CONTACT</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SUPPORT <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
			</header>