<!DOCTYPE html>
<html lang="en">
	<head>
		<title>INDEX</title>
		<meta charset="utf-8">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'css/reset.css',1)); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'bootstrap-3.1.1-dist/css/bootstrap.min.css',1)); ?>" rel="stylesheet">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'css/header.css',1)); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'css/main.css',1)); ?>" rel="stylesheet" type="text/css">
		<script src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'js/jquery-1.11.1.min.js',1)); ?>"></script>	
		<script src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'js/glm-ajax.js',1)); ?>"></script>	
		<script src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'bootstrap-3.1.1-dist/js/bootstrap.min.js',1)); ?>"></script>		
	</head>
	<body>
		<article>
			<header>
				<a href="<?php echo(substr(dirname($_SERVER['REQUEST_URI']),1)); ?>">
						<img id="logo" alt="Fitness Logo" src="<?php echo(substr(dirname($_SERVER['REQUEST_URI']).'img/header/logo.png',1)); ?>" />
				</a>
				<nav>					
					<ul>
						<li><a href="#">FEATURES</a></li>
						<li><a href="#">BLOG</a></li>
						<li><a href="#">SUPPORT</a></li>
						<li><a href="#">CONTACT</a></li>
					</ul>
				</nav>
			</header>