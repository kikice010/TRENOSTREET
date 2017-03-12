<!DOCTYPE HTML>
<!--
	Concept by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<?php

require "/php/helper.php";
 ?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo TextConstants::TRENOSTREET; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo TextConstants::DESCRIPTION; ?>" />
	<meta name="keywords" content="<?php echo TextConstants::KEYWORDS; ?>" />
	<meta name="author" content="<?php echo TextConstants::AUTHOR; ?>" />

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
	<link rel="stylesheet" href="css/main.css">

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

		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/yoga-tree.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Bikram Yoga</h1>
							<p>According to the 66-year-old Indian-born yoga guru, the precise sequence of 26 postures and two breathing exercises ...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>




	<div id="fh5co-project">
		<div class="container">


		<div class="row">
			<table class="col-md-3 col-sm-4">
                        <tbody>
                        <tr class="course-level">
                            <td>Level: </td>
                            <td>
                                <a href="./courses.php?orderBy=Level">Advanced</a>
                            </td>
                        </tr>
                        <tr class="course-category">
                            <td>Category: </td>
                            <td>
                                <a href="./category.php?name=Yoga">Yoga</a>
                            </td>
                        </tr>
                        <tr class="course-schedule">
                            <td>Schedule: </td>
                            <td class="course-schedule-text">Mon 08:00-09:00 <br> Wed 08:00-09:00</td>
                        </tr>
                        <tr class="course-instructors">
                            <td>Instructors: </td>
                            <td>
                                <ul class="list-unstyled"><li><a href="./instructor.php?name=Jonathan Villanueva">Jonathan Villanueva</a></li><li><a href="./instructor.php?name=Renzo Cabrejos">Renzo Cabrejos</a></li></ul>
                            </td>
                        </tr>
                    </tbody></table>
                  <div class="panel-group col-md-6 col-sm-2" id="enroll-accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" style="background-color:#fff">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#enrollForm" aria-expanded="false" aria-controls="enrollForm">
                                      Sign up for <span class="course-name">Bikram Yoga</span> course
                                    </a>
                                  </h4>
                            </div>
                            <div id="enrollForm" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <form id="enroll-form" class="form-inline" role="form">
                                        <div class="form-group">
                                            <input class="form-control" id="enroll-name" placeholder="Name" autocomplete="off" required=""> <br>
                                            <input type="email" class="form-control" id="enroll-email" autocomplete="off" required="" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="4" type="text" class="form-control" id="enroll-additional-info" autocomplete="off" placeholder="Any additional info"></textarea>
                                        </div><br>
                                        <div>
                                        <button type="submit" class="btn btn-default">Submit</button> 
                                        <span id="enroll-message"> </span>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

		</div>
		<div class="row row-pb-md">
		<div class="course-description fh5co-heading  animate-box">
                    <h4>Description</h4>
                    <div class="course-description-text">Bikram Yoga is a system of yoga that Bikram Choudhury synthesized from traditional hatha yoga techniques and popularized beginning in the early 1970s. All Bikram Yoga classes run for 90 minutes and consist of the same series of 26 postures, including two breathing exercises. Bikram Yoga is ideally practiced in a room heated to 40 °C (104 °F) with a humidity of 40%. All official Bikram classes are taught by Bikram-certified teachers, who have completed nine weeks of training endorsed by Choudhury. Bikram-certified teachers are taught a standardized dialogue to run the class, but are encouraged to develop their teaching skills the longer they teach. This results in varying deliveries and distinct teaching styles.</div>
                </div>
        </div>
			<div class="row row-pb-md">
				<div class="col-md-8 text-left fh5co-heading  animate-box">
					<h3>Other courses held by Jonathan</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-1.jpg" alt="Spinning" class="img-responsive" height="454">
						<div class="fh5co-copy">
							<h3>Spinning</h3>
							<p>Cardio</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-2.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Running Club</h3>
							<p>Cardio</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-3.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Samba</h3>
							<p>Dance</p>
						</div>
					</a>
				</div>


			</div>
		</div>

	</div>


<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget ">
					<h3><div id="fh5co-logo"><a href="main"><img class="" src="images/logo_w.png" height="30"/></a></div></h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a href="#">Learn More</a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<?php CommonStructure::CopyrightGet(); ?>
			</div>

		</div>
	</footer>
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
