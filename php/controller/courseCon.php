<?php

include_once("../constants.php");
include_once '../helper/courses.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    switch ($_POST['action']) {

        case CourseRequestType::SINGLE_COURSE_GET:




            break;
        default:

            echo "Unknown value for 'action'";
    }

} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {


    switch ($_GET['action']) {

        case CourseRequestType::SINGLE_COURSE_GET:




            break;

        case CourseRequestType::MULTIPLE_COURSES_GET:



            break;

        default:

            echo "Unknown value for 'action'";
    }
}
?>