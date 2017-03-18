<?php

require_once "/../conx/conx.php";
include_once '/../helper/account.php';
session_start();

class AccountAF {

    private $db;

    function __construct() {
        $this->conn = new DB();
        $this->user = new USER();
    }

    public function register($firstname, $lastname, $userType, $description, $email, $age, $city, $username, $password, $address, $phone_num) {

        try {
            $stmt = $this->conn->db->prepare("SELECT username,email FROM user WHERE username=:username OR email=:email");
            $stmt->execute(array(':username' => $username, ':email' => $email));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['username'] == $username) {
                $error[] = "sorry username already taken !";
            } else if ($row['email'] == $email) {
                $error[] = "sorry email id already taken !";
            } else {
                if ($this->user->register($firstname, $lastname, $userType, $description, $email, $age, $city, $username, $password, $address, $phone_num)) {
                    $this->user->redirect('main.php');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        return json_encode($error);
    }

    public function login($username, $email, $password) {
        try {
            $stmt = $this->conn->db->prepare("SELECT * FROM user WHERE username=:username OR email=:email LIMIT 1");
            $stmt->execute(array(':username' => $username, ':email' => $email));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                if (password_verify($password, $userRow['password'])) {
                    $_SESSION['user_session'] = $userRow['id'];
                    $_SESSION['username'] = $userRow['username'];
                    $this->user->redirect('../../main.php');
                } else {

                    $this->user->redirect('../../main.php');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function logout() {
        try {
            if ($this->user->logout()) {
                return true;
            }else{
                
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>