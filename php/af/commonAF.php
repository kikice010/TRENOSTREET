<?php

require_once "/../conx/conx.php";
include_once '/../helper/account.php';
session_start();

class CommonAF {

    private $db;

    function __construct() {
        $this->conn = new DB();
        $this->user = new USER();
    }

    public function CityListGET($country) {

        try {
            $stmt = $this->conn->db->prepare("SELECT id, name FROM city WHERE id_country=:country");
            $stmt->execute(array(':country' => $country));
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        return json_encode($row);
    }

    public function CountryListGET() {

        try {
            $stmt = $this->conn->db->prepare("SELECT id, name FROM country");
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        return json_encode($row);
    }

    public function UserTypeGET() {

        try {
            $stmt = $this->conn->db->prepare("SELECT * FROM user_type");
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return json_encode($row);
    }

    public function CourseTypeGET() {

        try {
            $stmt = $this->conn->db->prepare("SELECT id, name FROM course_categories");
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        return json_encode($row);
    }

}

?>