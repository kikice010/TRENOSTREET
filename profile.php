<!DOCTYPE HTML>
<!--
  Concept by gettemplates.co
  Twitter: http://twitter.com/gettemplateco
  URL: http://gettemplates.co
-->
<?php
require "./php/helper/helper.php";
session_start();
if (!isset($_SESSION['user_session'])) {
    header("Location:main.php");
    exit();
}
?>
<html>
    <head>
        <?php CommonStructure::HeaderGet(); ?>
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
                                            <input type="button" class="btn btn-primary" onclick="location.href = './editprofile.php';" value="Edit Profile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="courses">
                            <br>
                            <div class="row form">
                                <div class="col-md-2 pull-right">
                                    <input type="button" class="btn btn-primary" value="Add new course" onclick="location.href = './add_course.php';">     
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
        <?php
        CommonStructure::FooterGet();
        CommonStructure::GoTopGet();
        CommonStructure::ScriptGet();
        ?>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.itemInput').hide();
                $('.save-course').hide();

                var user_courses = {action: 1};
                $.ajax({
                    type: "GET",
                    url: "./php/controller/courseCon.php",
                    data: user_courses,
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            });
        </script>        
    </body>
</html>
