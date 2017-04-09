<!DOCTYPE HTML>
<!--
  Concept by gettemplates.co
  Twitter: http://twitter.com/gettemplateco
  URL: http://gettemplates.co
-->
<?php
require "./php/helper/helper.php";
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
            <header id="fh5co-header" class="fh5co-cover fh5co-small-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" >
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
                    <h1>Edit Profile</h1>
                    <hr>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-3 hidden-section">
                            <div class="text-center">
                                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                                <h6>Upload a different photo...</h6>

                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">
                            <div class="alert alert-info alert-dismissable">
                                <a class="panel-close close" data-dismiss="alert">×</a> 
                                <i class="fa fa-coffee"></i>
                                This is an <strong>.alert</strong>. Use this to show important messages to the user.
                            </div>
                            <h3>Personal info</h3>

                            <form class="form-horizontal" method="post" action="./php/controller/accountCon.php" role="form">
                                <input class="form-control" name="action" type="hidden" value="2">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="firstname" type="text" value="Milica">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Last name:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="lastname" type="text" value="Jovanovic">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">User type:</label>
                                    <div class="col-lg-8">
                                        <select class="form-control"  name="userType" id="userType">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Description:</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" name="email" value="kikice010@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Age:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="age" type="number" value="25">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone number:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="phone_num" type="tel" value="55555555">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" name="address" value="Via San Vittore 34">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">City:</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="city" id="user_city">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Username:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="username" type="text" value="milica">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="password" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" type="password" value="11111122333">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-primary" value="Register">
                                        <input type="button" class="btn btn-primary" value="Save Changes">
                                        <span></span>
                                        <input type="reset" class="btn btn-default" value="Cancel">
                                    </div>
                                </div>
                            </form>
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
        CommonStructure::ScriptGet();
        ?>

    </body>
</html>

<script>
    $(document).ready(function () {

        var city_params = {action: 0, country: 1};
        $.ajax({
            type: "POST",
            url: "./php/controller/commonCon.php",
            data: city_params,
            dataType: "json",
            success: function (response) {
                var city_select = $("#user_city");

                for (i in response) {
                    var option = ' <option  value="' + response[i].id + '">' + response[i].name + '</option>';
                    city_select.append(option);
                }
            },
            error: function (response) {
                console.log(response);
            }
        });

        var user_type_params = {action: 2};
        $.ajax({
            type: "POST",
            url: "./php/controller/commonCon.php",
            data: user_type_params,
            dataType: "json",
            success: function (response) {
                var user_type_select = $("#userType");

                for (i in response) {
                    var option = ' <option  value="' + response[i].id + '">' + response[i].name + '</option>';
                    user_type_select.append(option);
                }
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
</script>