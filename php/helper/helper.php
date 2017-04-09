<?php

include_once '/../constants.php';

class CommonStructure {

    public static function NavigationGet() {

        echo '<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 text-left">
						<div id="fh5co-logo"><a href="main.php"><img class="" src="images/logo_w.png" height="50"/></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="main.php">Home</a></li>
							<li class="has-dropdown">
								<a href="courses.php">Cursos</a>
								<ul class="dropdown">
									<li><a href="#">Por distrito</a></li>
									<li><a href="#">Por categoria</a></li>
								</ul>
							</li>';
        if (isset($_SESSION['user_session'])) {
            echo '<li><a href="profile.php">Perfil</a></li>';
        };
        echo '<li><a href="contact">Contactos</a></li>';

        if (isset($_SESSION['user_session'])) {
            echo '<li>' . $_SESSION['username'] . '</li>';
            echo '<li><button type="button" data-toggle="modal" onclick="logout();" class="btn btn-primary">Salir</button></li>';
        } else {

            echo '<li><button type="button" data-toggle="modal" data-target="#loginModal"  class="btn btn-primary">Acceder</button></li>';
        }
        echo '
						</ul>
					</div>
				</div>
			</div>
		</nav>';
    }

    public static function CopyrightGet() {

        echo'<div class="col-md-12 text-center">
			<p>
				<small class="block">' . TextConstants::COPYRIGHT . '</small>
		<!--		<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com/" target="_blank">Unsplash</a></small> -->
			</p>
			<p>
				<ul class="fh5co-social-icons">
					<li><a href="' . SocialConstants::TWITTER_URL . '"><i class="icon-twitter"></i></a></li>
					<li><a href="' . SocialConstants::FACEBOOK_URL . '"><i class="icon-facebook"></i></a></li>
					<li><a href="' . SocialConstants::INSTAGRAM_URL . '"><i class="icon-instagram"></i></a></li>
				<!--	<li><a href="#"><i class="icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li> -->
				</ul>
			</p>
		</div>';
    }

    public static function FooterGet() {

        echo '<footer id="fh5co-footer" role="contentinfo">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-4 fh5co-widget ">
                            <h3><div id="fh5co-logo"><a href="main"><img class="" src="images/logo_w.png" height="50"/></a></div></h3>
                            <p>TrenoStreet llega a peru desde Milan Italia para crear una 
comunidad de entrenadores independientes, gimnasios privados y publicos. Descubre una nueva manera de entrenar con TrenoStreet. Que varía entre disciplinas y has mas completo tu entrenamiento, 
eligiendo distintas categorias por un solo precio mensual descubre el dejar la rutina y experimenta nuevas emociones.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
                            <ul class="fh5co-footer-links">
                           <!--     <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Meetups</a></li> -->
                            </ul>
                        </div>


                        <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
                            <ul class="fh5co-footer-links">
                             <!--   <li><a href="#">Shop</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Handbook</a></li>
                                <li><a href="#">Held Desk</a></li> -->
                            </ul>
                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
                            <ul class="fh5co-footer-links">
                               <!-- <li><a href="#">Find Designers</a></li>
                                <li><a href="#">Find Developers</a></li>
                                <li><a href="#">Teams</a></li>
                                <li><a href="#">Advertise</a></li>
                                <li><a href="#">API</a></li>-->
                            </ul>
                        </div>
                    </div>';

        echo $copyright = '<div class="row copyright">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block">&copy; 2017 TrenoStreet. All Rights Reserved.</small>
                                <!--<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>-->
                            </p>
                            <p>
                            <ul class="fh5co-social-icons">
                                <li><a target="_blank" href="' . SocialConstants::FACEBOOK_URL . '"><i class="icon-facebook"></i></a></li>
                                <li><a target="_blank" href="' . SocialConstants::TWITTER_URL . '"><i class="icon-twitter"></i></a></li>
                                <li><a target="_blank" href="' . SocialConstants::INSTAGRAM_URL . '"><i class="icon-instagram"></i></a></li>
                            </ul>
                            </p>
                        </div>
                    </div>';

        echo $close = '</div></footer>';
    }

    public static function FooterWhiteGet() {

        echo '	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget ">
					<h3>Concept.</h3>
					<p>TrenoStreet llega a peru desde Milan Italia para crear una 
comunidad de entrenadores independientes, gimnasios privados y publicos. Descubre una nueva manera de entrenar con TrenoStreet. Que varía entre disciplinas y has mas completo tu entrenamiento, 
eligiendo distintas categorias por un solo precio mensual descubre el dejar la rutina y experimenta nuevas emociones.</p>
					<p><a href="#">Learn More</a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<!--<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>-->
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<!--<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>-->
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<!--<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>-->
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 TrenoStreet. All Rights Reserved.</small>
						<!--<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>-->
					</p>
					<p>
						<ul class="fh5co-social-icons">
                                                    <li><a target="_blank" href="' . SocialConstants::FACEBOOK_URL . '"><i class="icon-facebook"></i></a></li>
                                                    <li><a target="_blank" href="' . SocialConstants::TWITTER_URL . '"><i class="icon-twitter"></i></a></li>
                                                    <li><a target="_blank" href="' . SocialConstants::INSTAGRAM_URL . '"><i class="icon-instagram"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>';
    }

    public static function ScriptGet() {

        echo '<!-- jQuery -->
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
        <script src="js/profile.js"></script>';
    }

    public static function LoginModalGet() {
        if (isset($_SESSION['error'])) {
            $err = $_SESSION['error'];
        }

        echo '<div class="modal fade optionModal" id="loginModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Acceder a tu cuenta</h4>
                    </div>
                    <div class="modal-body">
                        <form action="./php/controller/accountCon.php" method="post">
                            <input class="form-control" name="action" type="hidden" value="1">';
        if (isset($err)) {
            echo '<label class="col-xs-12 label label-warning labelError" id="logInError">' . $err . '</label>';
        }
        echo '<input class="col-xs-12 form-control" id="emailField" type="text" name="emailField" placeholder="Email o usuario">
                            <input class="col-xs-12 form-control" id="passwordField" type="password" name="passwordField" placeholder="Password">
                           <!--  <span class="col-xs-6"><input type="checkbox" name="rememberMeField">Recuerdame</span> -->
                         <!--    <span class="col-xs-6"><a href="#">Te olvidaste tu contraseña?</a></span> -->
                            <input id="logInUpBtnEmail" type="submit" class="btn btn-p
    rimary" value="Acceder">
                            </div>
                            <div class="modal-footer">
                                <div id="modalFooterContainer" style="width:100%;display:inline-block">
                                    <span class="col-xs-6" style="text-align:left;padding:0">Todavia no te haz registrado?</span>
                                    <span class="col-xs-6 btnGroup">
                                        <button type="button" id="signUpLogInModalButton" class="btn btn-primary" onclick="location.href = \'./register.php\';" data-dismiss="modal">Registrate</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </span>
                                </div>
                            </div>
                    </div>
                </div>
          </div>';
    }

    public static function HeaderGet() {



        echo '<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>';
        echo TextConstants::TRENOSTREET;
        echo '</title>
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
        <![endif]-->';
    }

    public static function GoTopGet() {

        echo '<div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>';
    }

}

?>
