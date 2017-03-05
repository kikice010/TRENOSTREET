<?php
include_once("constants.php");

class CommonStructure{

	public static	function NavigationGet(){

	echo '<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 text-left">
						<div id="fh5co-logo"><a href="main"><img class="" src="images/logo_w.png" height="50"/></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="main">Home</a></li>
							<li class="has-dropdown">
								<a href="courses">Cursos</a>
								<ul class="dropdown">
									<li><a href="#">Por distrito</a></li>
									<li><a href="#">Por categoria</a></li>
								</ul>
							</li>
							<li><a href="products">Perfil</a></li>
							<li><a href="contact">Contactos</a></li>
							<li><button type="button" data-toggle="modal" data-target="#loginModal"  class="btn btn-primary">Acceder</button></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>';
	}

public static	function CopyrightGet(){

	echo'<div class="col-md-12 text-center">
			<p>
				<small class="block">'.TextConstants::COPYRIGHT.'</small>
		<!--		<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com/" target="_blank">Unsplash</a></small> -->
			</p>
			<p>
				<ul class="fh5co-social-icons">
					<li><a href="'. SocialConstants::TWITTER_URL .'"><i class="icon-twitter"></i></a></li>
					<li><a href="'.SocialConstants::FACEBOOK_URL .'"><i class="icon-facebook"></i></a></li>
					<li><a href="'. SocialConstants::INSTAGRAM_URL .'"><i class="icon-instagram"></i></a></li>
				<!--	<li><a href="#"><i class="icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li> -->
				</ul>
			</p>
		</div>';
	}
}







 ?>
