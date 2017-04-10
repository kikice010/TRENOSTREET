<?php

require_once "/../conx/conx.php";
include_once "/../helper/account.php";
session_start();

class AccountAF {

    private $conn;
    private $user;

    function __construct() {
        $this->conn = new DB();
        $this->user = new USER();
    }

    public function register($firstname, $lastname, $userType, $description, $email,$sex, $age, $city, $username, $password, $address, $phone_num) {

        try {
            $stmt = $this->conn->db->prepare("SELECT username,email FROM user WHERE username=:username OR email=:email");
            $stmt->execute(array(':username' => $username, ':email' => $email));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['username'] == $username) {
                $_SESSION['error'] = "El username ya esta usado por otro usuario!";
            } else if ($row['email'] == $email) {
                $_SESSION['error'] = "El email ya esta usado por otro usuario!";
            } else {
                if ($this->user->register($firstname, $lastname, $userType, $description, $email,$sex, $age, $city, $username, $password, $address, $phone_num)) {
                    $this->user->redirect('../../main.php');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        return $_SESSION['error'];
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
                    $error = "Por favor llene los datos correctamente!";

                    $this->user->redirect('../../main.php');
                }
            } else {

                $_SESSION['error'] = "Por favor llene los datos correctamente!";
                $this->user->redirect('../../main.php');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function logout() {
        try {
            if ($this->user->logout()) {
                return true;
            } else {

                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function profileGet() {
        return $this->user->profileGet();
    }

}
?>
