<?php

class USER {

    private $db;

    function __construct() {
        $this->conn = new DB();
    }

    public function register($firstname, $lastname, $userType, $description, $email,$sex, $age, $city, $username, $password, $address, $phone_num) {
        try {
            $new_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->conn->db->prepare("INSERT INTO user(name,surname,type,description,email,age,id_city,username,password,address,phone_num,sex) VALUES (:name,:surname,:type,:description,:email,:age,:id_city,:username,:password,:address,:phone_num,:sex)");
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
            $stmt->bindparam(":sex", $sex);
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

    public function profileGet() {
        try {
            $stmt = $this->conn->db->prepare("SELECT * FROM user WHERE id=:id LIMIT 1");
            $stmt->bindparam(':id' , $_SESSION["user_session"]);
            $stmt->execute();
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            return $userRow;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
     public function profileUpdate($firstname, $lastname, $description, $age, $city, $address, $phone_num) {
        try {
            $stmt = $this->conn->db->prepare("UPDATE user SET name=:name,surname=:surname,description=:description,age=:age,id_city=:city,address=:address,phone_num=:phone_num WHERE id=:id LIMIT 1");
            $stmt->bindparam(":name", $firstname);
            $stmt->bindparam(":surname", $lastname);
            $stmt->bindparam(":description", $description);
            $stmt->bindparam(":age", $age);
            $stmt->bindparam(":city", $city);
            $stmt->bindparam(":address", $address);
            $stmt->bindparam(":phone_num", $phone_num);
            $stmt->bindparam(':id' , $_SESSION["user_session"]);
            return($stmt->execute());
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>