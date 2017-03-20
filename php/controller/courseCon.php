<?php

include_once("../constants.php");
include_once '../helper/courses.php';


$coursesClass = new CoursesAF();
$error;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    switch ($_POST['action']) {

        case CourseRequestType::COURSE_SAVE:


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