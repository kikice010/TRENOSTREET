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

            <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 text-left">
                            <div class="display-t">
                                <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                    <h1 class="mb30">Our catalogue of courses</h1>
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
                            <span>We offer variaty of outdoor courses</span>
                            <h2>List of courses</h2>
                            <p>Through our platform you will be able to search for the course that matches your lifestyle and skill level</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="course.php"><img src="images/work-1.jpg" alt="Spinning" class="img-responsive" height="454">
                                <div class="fh5co-copy">
                                    <h3>Spinning</h3>
                                    <p>Cardio</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="course.php"><img src="images/work-2.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                                <div class="fh5co-copy">
                                    <h3>Running Club</h3>
                                    <p>Cardio</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="course.php"><img src="images/work-3.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                                <div class="fh5co-copy">
                                    <h3>Samba</h3>
                                    <p>Dance</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="course.php"><img src="images/work-4.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                                <div class="fh5co-copy">
                                    <h3>Zumba</h3>
                                    <p>Dance</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="course.php"><img src="images/work-5.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                                <div class="fh5co-copy">
                                    <h3>Scott Pilates</h3>
                                    <p>Pilates</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="course.php"><img src="images/work-6.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                                <div class="fh5co-copy">
                                    <h3>Bikram Yoga</h3>
                                    <p>Yoga</p>
                                </div>
                            </a>
                        </div>



                        <div class="col-md-12 text-center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>

            </div>

            <?php CommonStructure::FooterGet(); ?>

        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>
        <?php
        if (!isset($_SESSION['user_session'])) {
            CommonStructure::LoginModalGet();
        }
        ?>
        <?php
        CommonStructure::ScriptGet();
        ?>

    </body>
</html>
