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
                                    <h1 class="mb30">Perfil</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <br/>
                    <div>
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active"><a href="#profile" role="tab" data-toggle="tab">Datos personales</a></li>
                            <li role="presentation"><a href="#courses" role="tab" data-toggle="tab">Cursos</a></li>
                            <li role="presentation"><a href="#subscriptions" role="tab" data-toggle="tab">Inscripciones</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="profile">
                                <br>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="courses">
                                <br>
                                <div class="row form">
                                    <div class="col-md-2 pull-right">
                                        <input type="button" class="btn btn-primary" value="Crear curso" onclick="location.href = './addcourse.php';">     
                                    </div>           
                                </div>
                                <br>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="subscriptions">
                                <br>
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
                var user_profile = {action: 4};
                var user_courses = {action: 1};
                var course_categories_params = {action: 3};
                var city_params = {action: 0, country: 1};
                var type_params = {action: 2};
                var course_categories;
                var user_courses;
                var cities;
                $.when(
                        $.ajax({
                            type: "GET",
                            url: "./php/controller/courseCon.php",
                            data: user_courses,
                            dataType: "json",
                            error: function (response) {
                                console.log(response);
                            }
                        }),
                        $.ajax({
                            type: "POST",
                            url: "./php/controller/commonCon.php",
                            data: course_categories_params,
                            dataType: "json",
                            error: function (response) {
                                console.log(response);
                            }
                        }),
                        $.ajax({
                            type: "POST",
                            url: "./php/controller/commonCon.php",
                            data: city_params,
                            dataType: "json",
                            error: function (response) {
                                console.log(response);
                            }
                        }),
                        $.ajax({
                            type: "POST",
                            url: "./php/controller/accountCon.php",
                            data: user_profile,
                            dataType: "json",
                            error: function (response) {
                                console.log(response);
                            }
                        }),
                        $.ajax({
                            type: "POST",
                            url: "./php/controller/commonCon.php",
                            data: type_params,
                            dataType: "json",
                            error: function (response) {
                                console.log(response);
                            }
                        }))
                        .then(function (res1, res2, res3, res4, res5) {
                            user_courses = res1[0];
                            course_categories = res2[0];
                            cities = res3[0];
                            profile = res4[0];
                            types = res5[0];
                            user_courses.forEach(function (course) {
                                AddCourseEntity(course, course_categories, cities);
                            });
                            SetUserProfile(profile, types, cities);

                            $('.itemInput').hide();
                            $('.save-course').hide();

                            $(".modify-course").off("click").on("click", function () {
                                $('.save-course').show();
                                $('.modify-course').hide();
                                var id = $(this)[0].id;
                                var ret = id.split("_");
                                var courseId = ret[1];
                                var courseItem = $("." + courseId + "Item");
                                courseItem.find('.itemLabel').hide();
                                courseItem.find('.itemInput').show().focus();
                            });
                            $(".save-course").off("click").on("click", function () {
                                $('.modify-course').show();
                                $('.save-course').hide();
                                var id = $(this)[0].id;
                                var ret = id.split("_");
                                var courseId = ret[1];
                                var courseItem = $("." + courseId + "Item");
                                courseItem.find('.itemInput').hide();
                                courseItem.find('.itemLabel').show().focus();
                                //ajax call to save data
                            });
                        }

                        );
                var AddCourseEntity = function (course, categories, cities) {
                    var category = getCategory(course.id_category, categories);
                    var city = getCity(course.id_city, cities);
                    var courseEntity = '<div class="row"><div class="col-md-8 personal-info ' + course.id + 'Item"><div class="row"><label class="col-lg-3 control-label">Curso:</label><div class="col-lg-8">' +
                            '<label id="course_name' + course.id + '" class="control-label itemLabel">' + course.name + '</label><input class="form-control itemInput" type="text" value="' + course.name + '"></div>' +
                            '</div><div class="row"><label class="col-lg-3 control-label">Categoria:</label><div class="col-lg-8"><label id="category_name_' + course.id + '_' + category.id + '" class="control-label">' + category.name + '</label>' +
                            '</div></div><div class="row"><label class="col-lg-3 control-label">Direccion:</label><div class="col-lg-8"><label class="control-label itemLabel">' +
                            course.address + '</label><input class="form-control itemInput" type="text" value="' + course.address + '"></div></div><div class="row"><label class="col-lg-3">Ciudad:</label><div class="col-lg-8">' +
                            '<label class="itemLabel">' + city.name + '</label><select class="form-control itemInput" id="city_sel_' + course.id + '"></select></div></div><div class="row"><label class="col-lg-3">Descripción:</label>' +
                            '<div class="col-lg-8"><label class="itemLabel">' + course.description + '</label><textarea class="form-control itemInput" rows="5" id="description_' + course.id + '">' + course.description + '</textarea></div></div></div>' +
                            '<div class="col-md-4 '+course.id+'Item"><table class="table table-condensed"><thead><tr><th>Inscripciones</th><th>Precio</th></tr></thead><tbody><tr><td>Anual</td>' +
                            '<td><span class="itemLabel">' + course.price_yearly + '</span><input class="itemInput" type="text" value="' + course.price_yearly + '"></td></tr><tr><td>Mensual</td>' +
                            '<td><span class="itemLabel">' + course.price_monthly + '</span><input class="itemInput" type="text" value="' + course.price_monthly + '"></td></tr><tr><td>Semanal</td>' +
                            '<td><span class="itemLabel">' + course.price_weekly + '</span><input class="itemInput" type="text" value="' + course.price_weekly + '"></td></tr><tr><td>Horario</td>' +
                            '<td><span class="itemLabel">' + course.price_hour + '</span><input class="itemInput" type="text" value="' + course.price_hour + '"></td></tr></tbody></table>' +
                            '<input type="button" class="btn btn-primary modify-course" id="modify_' + course.id + '" value="Edita el curso">' +
                            '<input type="button" class="btn btn-primary save-course" id="save_' + course.id + '" value="Guardad los cambios"></div></div><hr/>';

                    $("#courses").append(courseEntity);
                    var city_select = $("#city_sel_" + course.id);

                    for (var i = 0; i < cities.length; i++) {
                        var option = ' <option  value="' + cities[i].id + '">' + cities[i].name + '</option>';
                        city_select.append(option);
                    }


                }

                var getCategory = function (id, categories) {
                    for (var i = 0; i < categories.length; i++) {
                        if (id == categories[i].id)
                            return categories[i];
                    }

                    return "ERROR";

                }

                var getCity = function (id, cities) {
                    for (var i = 0; i < cities.length; i++) {
                        if (id == cities[i].id)
                            return cities[i];
                    }
                    return "ERROR";

                }

                var getUserType = function (id, types) {
                    for (var i = 0; i < types.length; i++) {
                        if (id == types[i].id)
                            return types[i];
                    }
                    return "ERROR";

                }

                var SetUserProfile = function (profile, types, cities) {
                    var type = getUserType(profile.type, types);
                    var city = getCity(profile.id_city, cities);
                    var profileEntity = '<div class="row"><div class="col-md-3"><div class="text-center"><img src="//placehold.it/100" class="avatar img-circle" alt="avatar"></div></div>' +
                            '<div class="col-md-9 personal-info"><div class="row"><label class="col-lg-3">Nombre:</label><div class="col-lg-8"><label id="user_firstname">' + profile.name + '</label>' +
                            '</div></div><div class="row"><label class="col-lg-3">Apellido:</label><div class="col-lg-8"><label id="user_lastname">' + profile.surname + '</label></div></div>' +
                            '<div class="row"><label class="col-lg-3">Tipo de usuario:</label><div class="col-lg-8"><label id="user_type">' + type.name + '</label></div></div><div class="row"><label class="col-lg-3">Descripción:</label>' +
                            '<div class="col-lg-8"><label id="user_description">' + profile.description + '</label></div></div><div class="row"><label class="col-lg-3">Email:</label><div class="col-lg-8">' +
                            '<label id="user_email">' + profile.email + '</label></div></div><div class="row"><label class="col-lg-3">Edad:</label><div class="col-lg-8"><label id="user_age">' + profile.age + '</label></div>' +
                            '</div><div class="row"><label class="col-lg-3">Ciudad:</label><div class="col-lg-8"><label id="user_city">' + city.name + '</label></div></div><div class="row"><label class="col-md-3">Nombre de usuario:</label>' +
                            '<div class="col-md-8"><label id="user_username">' + profile.username + '</label></div></div><div class="row"><label class="col-md-3"></label><div class="col-md-8">' +
                            '<input type="button" class="btn btn-primary" onclick="location.href=\'./editprofile.php\'" value="Edit Profile"></div></div></div></div>';

                    $("#profile").append(profileEntity);


                }

            });
        </script>        
    </body>
</html>
