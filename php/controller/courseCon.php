<?php

include_once("../constants.php");
include_once '../helper/courses.php';


switch ($_GET['action']) {

    case CourseRequestType::SINGLE_COURSE_GET:




        break;

    case CourseRequestType::MULTIPLE_COURSES_GET:



        break;

    default:

        echo "Unknown value for 'action'";
}
?>