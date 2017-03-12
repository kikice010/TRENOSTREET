<?php

require "../conx/conx.php";
$connection = new DB();

class Courses {

    private static function createNewCourse() {
        
    }

    private static function removeCourse() {
        
    }

    private static function disableCourse($id_course) {
        
    }

    private static function userCoursesGet($user_id) {


        $stmt = $connection->prepare("SELECT * FROM `courses` WHERE id=:id");
        $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
        $stm->execute();
    }

    private static function allCoursesListGet($filter, $orderBy, $orderDir) {

        $stmt = $connection->prepare("SELECT * FROM `courses` WHERE id=:id");
        $stmt->bindParam(':id', $id_course, PDO::PARAM_INT);
        $stm->execute();
    }

    private static function singleCourseGet($id) {

        $id_course = $id;
        $stmt = $connection->prepare("SELECT * FROM `courses` WHERE id=:id");
        $stmt->bindParam(':id', $id_course, PDO::PARAM_INT);
        $stm->execute();
    }

}

?>
