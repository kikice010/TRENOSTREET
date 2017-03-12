<!DOCTYPE HTML>
<!--
        Concept by gettemplates.co
        Twitter: http://twitter.com/gettemplateco
        URL: http://gettemplates.co
-->
<?php
require("/php/helper/helper.php");
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
            <?php CommonStructure::NavigationGet(); ?>

            <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 text-left">
                            <div class="display-t">
                                <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                    <h1 class="mb30">¿Listo para rendir al máximo?</h1>
                                    <p>
                                        <a href="#fh5co-project"  class="btn btn-primary">Comineza</a>
                                        <!--	 <em class="or">or</em> <a href="https://vimeo.com/channels/staffpicks/93951774" class="link-watch popup-vimeo">Vea el Video</a>-->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="fh5co-project">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-8 col-md-offset-2 text-left fh5co-heading  animate-box">
                            <span>Want Some Cool Stuff</span>
                            <h2>Recent Products</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="#"><img src="images/work-1.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                                <div class="fh5co-copy">
                                    <h3>Clipboard Office</h3>
                                    <p>Web Design</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="#"><img src="images/work-2.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                                <div class="fh5co-copy">
                                    <h3>Smart Layers</h3>
                                    <p>Brand &amp; Identity</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="#"><img src="images/work-3.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                                <div class="fh5co-copy">
                                    <h3>Notepad Mockup</h3>
                                    <p>Illustration</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>



            <div id="fh5co-services" class="fh5co-bg-section border-bottom">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-8 col-md-offset-2 text-left animate-box" data-animate-effect="fadeInUp">
                            <div class="fh5co-heading">
                                <span>We're expert</span>
                                <h2>What We Do</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 ">
                            <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                                <span class="icon">
                                    <i class="icon-eye"></i>
                                </span>
                                <h3>Retina Ready</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 ">
                            <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                                <span class="icon">
                                    <i class="icon-command"></i>
                                </span>
                                <h3>Fully Responsive</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn more</a></p>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 ">
                            <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                                <span class="icon">
                                    <i class="icon-power"></i>
                                </span>
                                <h3>Web Starter</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn more</a></p>
                            </div>
                        </div>

                        <div class="clearfix visible-md-block"></div>

                        <div class="col-md-4 col-sm-6 ">
                            <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                                <span class="icon">
                                    <i class="icon-eye"></i>
                                </span>
                                <h3>Retina Ready</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn more</a></p>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 ">
                            <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                                <span class="icon">
                                    <i class="icon-command"></i>
                                </span>
                                <h3>Fully Responsive</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 ">
                            <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                                <span class="icon">
                                    <i class="icon-power"></i>
                                </span>
                                <h3>Web Starter</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href="#">Learn more</a></p>
                            </div>
                        </div>

                        <div class="clearfix visible-md-block"></div>

                    </div>
                </div>
            </div>


            <div id="fh5co-testimonial" class="fh5co-bg-section">
                <div class="container">
                    <div class="row animate-box row-pb-md">
                        <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                            <span>You deserved happiness</span>
                            <h2>Happy Clients</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 animate-box">
                            <div class="testimonial">
                                <blockquote>
                                    <p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                                    <p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Mike Adam</cite></p>
                                </blockquote>
                            </div>

                            <div class="testimonial fh5co-selected">
                                <blockquote>
                                    <p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                                    <p class="author"><img src="images/person2.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Eric Miller</cite></p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-md-6 animate-box">
                            <div class="testimonial fh5co-selected">
                                <blockquote>
                                    <p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                                    <p class="author"><img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Eric Miller</cite></p>
                                </blockquote>
                            </div>

                            <div class="testimonial">
                                <blockquote>
                                    <p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                                    <p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Mike Adam</cite></p>
                                </blockquote>
                            </div>

                        </div>



                    </div>
                </div>
            </div>


            <div id="fh5co-counter">
                <div class="container">

                    <div class="row animate-box" data-animate-effect="fadeInUp">
                        <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                            <span>Enjoy it</span>
                            <h2>Fun Facts</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="ti-download"></i>
                                </span>
                                <span class="counter"><span class="js-counter" data-from="0" data-to="15" data-speed="1500" data-refresh-interval="50">1</span>M+</span>
                                <span class="counter-label">Downloads</span>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="ti-face-smile"></i>
                                </span>
                                <span class="counter"><span class="js-counter" data-from="0" data-to="120" data-speed="1500" data-refresh-interval="50">1</span>+</span>
                                <span class="counter-label">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="ti-briefcase"></i>
                                </span>
                                <span class="counter"><span class=" js-counter" data-from="0" data-to="90" data-speed="1500" data-refresh-interval="50">1</span>+</span>
                                <span class="counter-label">Projects Done</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="ti-time"></i>
                                </span>
                                <span class="counter"><span class="js-counter" data-from="0" data-to="12" data-speed="1500" data-refresh-interval="50">1</span>K+</span>
                                <span class="counter-label">Hours Spent</span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="fh5co-blog" class="fh5co-bg-section">
                <div class="container">
                    <div class="row animate-box row-pb-md" data-animate-effect="fadeInUp">
                        <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                            <span>Thoughts &amp; Ideas</span>
                            <h2>Our Blog</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="fh5co-post">
                                <span class="fh5co-date">Sep. 12th</span>
                                <h3><a href="#">Web Design for the Future</a></h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                                <p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="fh5co-post">
                                <span class="fh5co-date">Sep. 23rd</span>
                                <h3><a href="#">Web Design for the Future</a></h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                                <p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="fh5co-post">
                                <span class="fh5co-date">Sep. 24th</span>
                                <h3><a href="#">Web Design for the Future</a></h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                                <p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-started">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <span>Let's work together</span>
                            <h2>Try this template for free</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                            <p><button type="submit" class="btn btn-primary">Get In Touch</button></p>
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



        <div class="modal fade optionModal" id="loginModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <label class="col-xs-12 label label-warning labelError" id="logInError"></label>
                        <input class="col-xs-12 form-control" id="emailField" type="text" name="emailField" placeholder="Email address">
                        <input class="col-xs-12 form-control" id="passwordField" type="password" name="passwordField" placeholder="Password">
                        <span class="col-xs-6"><input type="checkbox" name="rememberMeField">Remember me</span>
                        <span class="col-xs-6"><a href="#">Forgot your password?</a></span>
                        <button id="logInUpBtnEmail" class="btn btn-primary" onclick="logIn()">Log in</button>
                    </div>
                    <div class="modal-footer">
                        <div id="modalFooterContainer" style="width:100%;display:inline-block">
                            <span class="col-xs-6" style="text-align:left;padding:0">Not a member yet?</span>
                            <span class="col-xs-6 btnGroup">
                                <button type="button" id="signUpLogInModalButton" class="btn btn-primary" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal">Sign up</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal SignUp-->
        <div class="modal fade optionModal" id="signUpModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign up</h4>
                    </div>
                    <div class="modal-body">
                        <label class="col-xs-12 label label-warning labelError" id="signUpError"></label>
                        <input class="col-xs-12 form-control" id="emailSignUpField" type="text" name="emailSignUpField" placeholder="Email address" required>
                        <input class="col-xs-12 form-control" id="passwordSignUpField" type="password" name="passwordSignUpField" placeholder="Password" required>
                        <button id="signUpEmailSignUpModalBtn" class="	btn btn-primary" onclick="signUp()">Sign up</button>
                    </div>
                    <div class="modal-footer">
                        <div id="modalFooterContainer" style="width:100%;display:inline-block">
                            <span class="col-xs-6" style="text-align:left;padding:0">Already a member?</span>
                            <span class="col-xs-6 btnGroup">
                                <button type="button" id="logInSignUpModalBtn" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Log in</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
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