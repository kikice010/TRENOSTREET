<?php

session_start();

class COURSES {

    private $db;

    function __construct() {
        $this->conn = new DB();
    }

    public function createNewCourse($course_name, $course_category, $course_city, $course_address, $course_description, $course_yearly, $course_montly, $course_weekly, $course_hourly) {

        $stmt = $this->conn->db->prepare("INSERT INTO courses (id_city, id_trainer, description, price_monthly, price_weekly, price_yearly, price_hour, name, address)"
                . " VALUES (:course_city,:trainer,:course_description,:course_montly,:course_weekly,:course_yearly,:course_hourly,:course_name,:course_address);");

        try {
        $this->conn->beginTransaction();
        //  $stmt->bindparam(":course_category", $course_category);
        $stmt->bindparam(":trainer", $_SESSION['user_session']);
        $stmt->bindparam(":course_city", $course_city);

        $stmt->bindparam(":course_description", $course_description);

        $stmt->bindparam(":course_montly", $course_montly);
        $stmt->bindparam(":course_weekly", $course_weekly);
        $stmt->bindparam(":course_yearly", $course_yearly);
        $stmt->bindparam(":course_hourly", $course_hourly);

        $stmt->bindparam(":course_name", $course_name);

        $stmt->bindparam(":course_address", $course_address);

        $stmt->execute();
        
        $this->conn->commit(); 
        
         $this->conn->lastInsertId();
        
        return $stmt;
        } catch (PDOException $e) {
             $this->conn->rollback(); 
            echo $e->getMessage();
        }
    }

}

?>