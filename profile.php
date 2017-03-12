<!DOCTYPE HTML>
<!--
  Concept by gettemplates.co
  Twitter: http://twitter.com/gettemplateco
  URL: http://gettemplates.co
-->
<?php
require "./php/helper/helper.php";
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

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/index.css">

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
        <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" >
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
        <div class="container">
            <br>
            <h1>Profile</h1>
            <hr>
            <div>
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#profile" role="tab" data-toggle="tab">Personal Information</a></li>
                    <li role="presentation"><a href="#courses" role="tab" data-toggle="tab">My courses</a></li>
                    <li role="presentation"><a href="#subscriptions" role="tab" data-toggle="tab">My subscriptions</a></li>
                </ul>
                  <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <br>
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-3">
                                <div class="text-center">
                                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                                </div>
                            </div>

                            <!-- edit form column -->
                            <div class="col-md-9 personal-info">
                                <div class="row">
                                    <label class="col-lg-3">First name:</label>
                                    <div class="col-lg-8">
                                        <label id="user_firstname">Milica</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3">Last name:</label>
                                    <div class="col-lg-8">
                                       <label id="user_lastname">Jovanovic</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3">User type:</label>
                                    <div class="col-lg-8">
                                        <label id="user_type">Trainer</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3">Description:</label>
                                    <div class="col-lg-8">
                                       <label id="user_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3">Email:</label>
                                    <div class="col-lg-8">
                                        <label id="user_email">kikice010@gmail.com</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3">Age:</label>
                                    <div class="col-lg-8">
                                        <label id="user_age">25</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3">City:</label>
                                    <div class="col-lg-8">
                                        <label id="user_city">Cusco</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3">Username:</label>
                                    <div class="col-md-8">
                                        <label id="user_username">kikice10</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-8">
                                        <input type="button" class="btn btn-primary" onclick="location.href='./edit_profile.php';" value="Edit Profile">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="courses">
                        <br>
                        <div class="row form">
                            <div class="col-md-2 pull-right">
                                <input type="button" class="btn btn-primary" value="Add new course" onclick="location.href='./add_course.php';">     
                            </div>           
                        </div>
                        <br>

                        <!-- edit form column -->
                        <div class="col-md-8 personal-info courseIdItem">
                            <div class="row">
                                <label class="col-lg-3 control-label">Course:</label>
                                <div class="col-lg-8">
                                    <label id="course_name" class="control-label itemLabel">Bikrams Yoga</label>
                                    <input class="form-control itemInput" type="text" value="milica">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 control-label">Category:</label>
                                <div class="col-lg-8">
                                    <label id="course_name" class="control-label itemLabel">Yoga</label>
                                    <select class="form-control itemInput" id="sel1">
                                        <option>Yoga</option>
                                        <option>Spinning</option>
                                        <option>Lifting</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 control-label">Address:</label>
                                <div class="col-lg-8">
                                   <label id="course_address" class="control-label itemLabel">Via San Vittore 34</label>
                                   <input class="form-control itemInput" type="text" value="milica">
                               </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3">City:</label>
                                <div class="col-lg-8">
                                    <label id="course_city" class="itemLabel">Milano</label>
                                    <select class="form-control itemInput" id="sel1">
                                        <option>Lima</option>
                                        <option>Cusco</option>
                                        <option>Arequipa</option>
                                        <option>Trujillo</option>
                                   </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3">Description:</label>
                                <div class="col-lg-8">
                                   <label id="course_address" class="itemLabel">Bikram Yoga is a system of yoga that Bikram Choudhury synthesized from traditional hatha yoga techniques and popularized beginning in the early 1970s. All Bikram Yoga classes run for 90 minutes and consist of the same series of 26 postures, including two breathing exercises. Bikram Yoga is ideally practiced in a room heated to 40 °C (104 °F) with a humidity of 40%. All official Bikram classes are taught by Bikram-certified teachers, who have completed nine weeks of training endorsed by Choudhury. Bikram-certified teachers are taught a standardized dialogue to run the class, but are encouraged to develop their teaching skills the longer they teach. This results in varying deliveries and distinct teaching styles.</label>
                                   <textarea class="form-control itemInput" rows="5" id="comment"></textarea>
                               </div>
                           </div>
                        </div>
                        <div class="col-md-4 courseIdItem">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Subscription</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Yearly</td>
                                        <td><span class="itemLabel">1000</span><input class=" itemInput" type="text" value="1000"></td>
                                    </tr>
                                    <tr>
                                        <td>Monthly</td>
                                        <td><span class="itemLabel">100</span><input class="itemInput" type="text" value="100"></td>
                                    </tr>
                                    <tr>
                                        <td>Weekly</td>
                                        <td><span class="itemLabel">15</span><input class="itemInput" type="text" value="15"></td>
                                    </tr>
                                    <tr>
                                        <td>Hourly</td>
                                        <td><span class="itemLabel">5</span><input class="itemInput" type="text" value="5"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="button" class="btn btn-primary modify-course" id="courseId" value="Modify course">
                            <input type="button" class="btn btn-primary save-course" id="courseId" value="Save course">
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="subscriptions">
                        <br>
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Course</th>
                                            <th>Subscription</th>
                                            <th>Start date</th>
                                            <th>End date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bikrams Yoga</td>
                                            <td>Monthly</td>
                                            <td>12/3/2017</td>
                                            <td>12/4/2017</td>
                                        </tr>
                                        <tr>
                                            <td>Crossfit</td>
                                            <td>Yearly</td>
                                            <td>12/3/2017</td>
                                            <td>12/3/2018</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-4 fh5co-widget ">
                    <h3><div id="fh5co-logo"><a href="main"><img class="" src="images/logo_w.png" height="50"/></a></div></h3>
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
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                        <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
                    </p>
                    <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>


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

    <script src="js/profile.js"></script>

</body>
</html>

<script>

    $( document ).ready(function() {
        $('.itemInput').hide();
        $('.save-course').hide();
    });

</script>