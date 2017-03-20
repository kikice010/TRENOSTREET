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
                <h1>New course</h1>
                <hr>
                <div class="row">
                    <!-- edit form column -->
                    <div class="col-xs-12 personal-info">
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> 
                            <i class="fa fa-coffee"></i>
                            This is an <strong>.alert</strong>. Use this to show important messages to the user.
                        </div>
                        <h3>Course info</h3>

                        <form class="form-horizontal" method="post" action="./php/controller/courseCon.php" role="form">
                            <input name="action" value="2" type="hidden">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Course name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="course_name" type="text" value="Bikrams Yoga">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Course category:</label>
                                <div class="col-lg-8">
                                    <select class="form-control itemInput" name="course_category" id="course_category">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">City:</label>
                                <div class="col-lg-8">
                                    <select class="form-control" name="course_city" id="course_city">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Address:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="course_address" value="Via San Vittore 34">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Description:</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="5" name="course_description" id="comment"></textarea>
                                </div>
                            </div>
                            <hr>
                            <h3>Prices</h3>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Yearly:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="course_yearly"  type="number" value="1000">
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Monthly:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="course_montly" type="number" value="100">
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Weekly:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="course_weekly" type="number" value="15">
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Hourly:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" name="course_hourly" type="number" value="5">
                                </div>
                            </div>        
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary" value="Add course">
                                </div>
                            </div>
                        </form>
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
  
        var course_categories_params = {action: 3};
        $.ajax({
            type: "POST",
            url: "./php/controller/commonCon.php",
            data: course_categories_params,
            dataType: "json",
            success: function(response){
                 var course_categories_select = $("#course_category");
                
                for(i in response){
                    var option = ' <option  value="'+response[i].id+'">'+response[i].name+'</option>';
                    course_categories_select.append(option);
                }
            },
            error: function(response){
                console.log(response);
            }
        });
        
         var city_params = {action: 0,country:1};
        $.ajax({
            type: "POST",
            url: "./php/controller/commonCon.php",
            data: city_params,
            dataType: "json",
            success: function(response){
                var city_select = $("#course_city");
                
                for(i in response){
                    var option = ' <option  value="'+response[i].id+'">'+response[i].name+'</option>';
                    city_select.append(option);
                }
            },
            error: function(response){
                console.log(response);
            }
        });
    });
</script>