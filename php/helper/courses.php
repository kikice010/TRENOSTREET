<?php

session_start();

class COURSES {

    private $db;

    function __construct() {
        $this->conn = new DB();
    }

    public function createNewCourse($course_name, $course_category, $course_city, $course_address, $course_description, $course_yearly, $course_montly, $course_weekly, $course_hourly) {

                try {
  
              $stmt = $this->conn->db->prepare("INSERT INTO courses (`id_city`, `id_trainer`, `description`, `price_monthly`, `price_weekly`, `price_yearly`, `price_hour`, `name`, `address`)"
                     . " VALUES (:course_city,:trainer,:course_description,:course_monthly,:course_weekly,:course_yearly,:course_hourly,:course_name,:course_address);");
              $stmt->bindparam(":course_name", $course_name);

              $stmt->bindparam(":trainer", $_SESSION['user_session']);
              $stmt->bindparam(":course_city", $course_city);
              $stmt->bindparam(":course_address", $course_address);
              $stmt->bindparam(":course_description", $course_description);
              $stmt->bindparam(":course_yearly", $course_yearly);
              $stmt->bindparam(":course_monthly", $course_montly);
              $stmt->bindparam(":course_weekly", $course_weekly);
              $stmt->bindparam(":course_hourly", $course_hourly);

           if ($stmt->execute()) {
               $stmt2 = $this->conn->db->prepare("SELECT id FROM courses AS c WHERE id_city=:course_city AND id_trainer=:trainer AND description=:course_description AND price_monthly=:course_monthly AND " .
                       "price_weekly=:course_weekly AND price_yearly=:course_yearly AND  price_hour=:course_hourly AND name=:course_name AND address=:course_address ORDER BY c.id DESC LIMIT 1;");
               $stmt2->bindparam(":course_name", $course_name);
                $stmt2->bindparam(":trainer", $_SESSION['user_session']);
                 $stmt2->bindparam(":course_city", $course_city);
                $stmt2->bindparam(":course_address", $course_address);
                 $stmt2->bindparam(":course_description", $course_description);
                 $stmt2->bindparam(":course_yearly", $course_yearly);
                 $stmt2->bindparam(":course_monthly", $course_montly);
                 $stmt2->bindparam(":course_weekly", $course_weekly);
                $stmt2->bindparam(":course_hourly", $course_hourly);
               if ($stmt2->execute()) {
                   $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                     $course_id = $row[0]["id"];
                     $stmt3 = $this->conn->db->prepare("INSERT INTO has_category (`id_course`, `id_category`)"
                             . " VALUES (:course_id,:course_category);");
                     $stmt3->bindparam(":course_id", $course_id);
                     $stmt3->bindparam(":course_category", $course_category);
                     return $stmt3->execute();
                 } else {
                    return false;
               }
             } else {
                return false;
             }
          } catch (PDOException $e) {
              echo $e->getMessage();
          }
      }
    
    
     public function userCoursesGet() {
         try {
        $stmt = $this->conn->db->prepare("SELECT c.id,c.id_city,c.description,c.price_monthly,c.price_weekly,c.price_yearly,c.price_hour,c.name,c.address,hc.id_category FROM courses AS c JOIN has_category AS hc ON c.id = hc.id_course WHERE c.id_trainer=:id");
         $stmt->bindParam(':id', $_SESSION['user_session'], PDO::PARAM_INT);
        $stmt->execute();
         return $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
             echo $e->getMessage();
         }
     }

}

?>