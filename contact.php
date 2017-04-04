<!DOCTYPE HTML>
<!--
	Concept by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<?php
require "/php/helper/helper.php";
session_start();
 ?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Concept &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
<?php 	CommonStructure::NavigationGet(); ?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Contact Us</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3>Contactos</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Jorge Muelle 345</li>
							<li class="phone"><a href="tel://1234567920">+51 4752352</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@trenostreet.com</a></li>
							<li class="url"><a href="http://www.trenostreet.com">www.trenostreet.com</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Estar en contacto</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">Primer nombre</label>
								<input type="text" id="fname" class="form-control" placeholder="Primer nombre">
							</div>
							<div class="col-md-6">
								<label for="lname">Apellido</label>
								<input type="text" id="lname" class="form-control" placeholder="Apellido">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Correo electronico</label>
								<input type="text" id="email" class="form-control" placeholder="Correo electronico">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Objeto</label>
								<input type="text" id="subject" class="form-control" placeholder="Objeto">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Mensaje</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Pregunta lo que quieras estamos aqui para ayudarte."></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" class="btn btn-lg btn-primary">
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>


      <?php 
      if(!isset($_SESSION['user_session'])){
          
               echo  '<div id="fh5co-started">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <span>Comenzemos juntos!</span>
                            <h2>¿Y tú, empezaste tu treno?</h2>
                            <p>Comienza ahora! encontraras muchos cursos en tu zona!</p>
                            <p><button type="submit" class="btn btn-primary">Registrate!</button></p>
                        </div>
                    </div>
                </div>
            </div>';  
          
      }

      CommonStructure::FooterWhiteGet();
      
      
      ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
