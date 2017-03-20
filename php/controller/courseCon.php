<?php

include_once("../constants.php");
include_once '../helper/courses.php';
include_once '../af/coursesAF.php';


$coursesClass = new CoursesAF();
$error;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    switch ($_POST['action']) {

        case CourseRequestType::COURSE_SAVE:

            $course_name = $_POST['course_name'];
            $course_category = $_POST['course_category'];
            $course_city = $_POST['course_city'];
            $course_address = $_POST['course_address'];
            $course_description = $_POST['course_description'];
            $course_yearly = $_POST['course_yearly'];
            $course_montly = $_POST['course_montly'];
            $course_weekly = $_POST['course_weekly'];
            $course_hourly = $_POST['course_hourly'];

            echo $coursesClass->createNewCourse($course_name, $course_category, $course_city, $course_address, $course_description, $course_yearly, $course_montly, $course_weekly, $course_hourly);

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