<?php

require_once "/../conx/conx.php";
include_once '/../helper/account.php';
//session_start();

class CoursesAF {

    private $conn;
    private $courses;
    private $user;

    function __construct() {
        $this->conn = new DB();
        $this->user = new USER();
        $this->courses = new COURSES();
    }

    public function createNewCourse($course_name, $course_category, $course_city, $course_address, $course_description, $course_yearly, $course_montly, $course_weekly, $course_hourly) {

        try {

            if ($this->courses->createNewCourse($course_name, $course_category, $course_city, $course_address, $course_description, $course_yearly, $course_montly, $course_weekly, $course_hourly)) {
                $this->user->redirect('../../main.php');
            } else {


                $error = "ERROR";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return json_encode($error);
    }

    public function userCoursesGet() {
        try {

            return json_encode($this->courses->userCoursesGet());
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return json_encode($error);

    }
//
//    public function allCoursesListGet($filter, $orderBy, $orderDir) {
//
//        $stmt = $this->db->prepare("SELECT * FROM `courses` WHERE id=:id");
//        $stmt->bindParam(':id', $id_course, PDO::PARAM_INT);
//        $stm->execute();
//
//        return $rows = $stmt->fetch(PDO::FETCH_ASSOC);
//    }
//
//    public function singleCourseGet($id) {
//
//        $id_course = $id;
//        $stmt = $connection->prepare("SELECT * FROM `courses` WHERE id=:id");
//        $stmt->bindParam(':id', $id_course, PDO::PARAM_INT);
//        $stm->execute();
//        return $rows = $stmt->fetch(PDO::FETCH_ASSOC);
//    }
}

?>
