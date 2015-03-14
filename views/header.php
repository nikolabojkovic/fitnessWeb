<?php session_start(); ?>
<?php require_once dirname(__FILE__) ."/../models/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>INDEX</title>
		<meta charset="utf-8">
		<link href="<?php echo(__ROOT_PATH__.'/css/reset.css'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo(__ROOT_PATH__.'/bootstrap-3.1.1-dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo(__ROOT_PATH__.'/font-awesome-4.3.0/css/font-awesome.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo(__ROOT_PATH__.'/css/header.css'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo(__ROOT_PATH__.'/css/main.css'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo(__ROOT_PATH__.'/img/fiveicon.png'); ?>"  rel="icon" type="image/png" >
		<link rel="stylesheet" href="<?php echo(__ROOT_PATH__.'/css/mobile.css'); ?>" />
		<script src="<?php echo(__ROOT_PATH__.'/js/jquery-1.11.1.min.js'); ?>"></script>	
		<script src="<?php echo(__ROOT_PATH__.'/js/glm-ajax.js'); ?>"></script>	
		<script src="<?php echo(__ROOT_PATH__.'/js/main.js'); ?>"></script>
		<script src="<?php echo(__ROOT_PATH__.'/bootstrap-3.1.1-dist/js/bootstrap.min.js'); ?>"></script>		
	</head>
	<body>
		<article>
		<?php if(strpos($_SERVER['PHP_SELF'],'404.php') != 18) {?>
			<header>					
					<!-- <ul>
						<a href="#"><li>FEATURES</li></a>
						<a href="#"><li>BLOG</li></a>
						<a href="#"><li>SUPPORT</li></a>
						<a href="#"><li>CONTACT</li></a>
					</ul> 
					<a class="navbar-brand" href="<?php echo(__ROOT_PATH__); ?>">
						<img id="logo" alt="Fitness Logo" src="<?php echo(__ROOT_PATH__.'/img/header/logo.png'); ?>" />
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
              <li class="active"><a href="<?php echo(__ROOT_PATH__); ?>">HOME</a></li>
              <li><a href="<?php echo(__ROOT_PATH__.'views/contact.php'); ?>">CONTACT</a></li>
              <li><a href="<?php echo(__ROOT_PATH__.'views/blogLanding.php'); ?>">BLOG</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SUPPORT <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo __ROOT_PATH__.'views/404.php'; ?>">404 Not faund</a></li>
                  <li><a href="<?php echo __ROOT_PATH__.'views/aboutAs.php'; ?>">About As</a></li>
                  <li><a href="<?php echo __ROOT_PATH__.'views/faq.php'; ?>">FAQ</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="<?php echo __ROOT_PATH__.'views/ourTeam.php'; ?>">Our Team</a></li>
                  <li><a href="<?php echo __ROOT_PATH__.'views/portfolio.php'; ?>">Our Portfolio</a></li>
				  <li><a href="<?php echo __ROOT_PATH__.'views/services.php'; ?>">Services</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
			</header>
<?php } ?>