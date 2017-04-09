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
        <?php CommonStructure::HeaderGet(); ?>

    </head>
    <body>

        <div class="fh5co-loader"></div>

        <div id="page">
            <?php CommonStructure::NavigationGet(); ?>

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
            if (!isset($_SESSION['user_session'])) {

                echo '<div id="fh5co-started">
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
