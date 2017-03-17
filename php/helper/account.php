<?php

class USER {

    private $db;

    function __construct() {
        $this->conn = new DB();
    }

    public function register($firstname, $lastname, $userType, $description, $email, $age, $city,  $username, $password, $address, $phone_num) {
        try {
            $new_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->conn->db->prepare("INSERT INTO user(name,surname,type,description,email,age,id_city,username,password,address,phone_num) VALUES (:name,:surname,:type,:description,:email,:age,:id_city,:username,:password,:address,:phone_num)");
            $stmt->bindparam(":name", $firstname);
            $stmt->bindparam(":surname", $lastname);
            $stmt->bindparam(":type", $userType);
            $stmt->bindparam(":description", $description);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":age", $age);
            $stmt->bindparam(":id_city", $city);
            $stmt->bindparam(":username", $username);
            $stmt->bindparam(":password", $new_password);
            $stmt->bindparam(":address", $address);
            $stmt->bindparam(":phone_num", $phone_num);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function login($uname, $umail, $upass) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail LIMIT 1");
            $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                if (password_verify($upass, $userRow['user_pass'])) {
                    $_SESSION['user_session'] = $userRow['user_id'];
                    return true;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function is_loggedin() {
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

}

?>