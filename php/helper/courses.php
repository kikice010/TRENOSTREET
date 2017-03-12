<?php

require "../conx/conx.php";
$connection = new DB();

class Courses {

    private $db;

    function __construct() {
        $this->db = $connection;
    }

    public function createNewCourse() {
        
    }

    public function removeCourse() {
        
    }

    public function disableCourse($id_course) {
        
    }

    public function userCoursesGet($user_id) {


        $stmt = $this->db->prepare("SELECT * FROM `courses` WHERE id=:id");
        $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
        $stm->execute();
        return $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function allCoursesListGet($filter, $orderBy, $orderDir) {

        $stmt = $this->db->prepare("SELECT * FROM `courses` WHERE id=:id");
        $stmt->bindParam(':id', $id_course, PDO::PARAM_INT);
        $stm->execute();

        return $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function singleCourseGet($id) {

        $id_course = $id;
        $stmt = $connection->prepare("SELECT * FROM `courses` WHERE id=:id");
        $stmt->bindParam(':id', $id_course, PDO::PARAM_INT);
        $stm->execute();
        return $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    }

}

?>
