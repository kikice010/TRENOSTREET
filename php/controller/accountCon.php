<?php

include_once("../constants.php");
include_once '../af/accountAF.php';

$userClass = new AccountAF();
$error;
switch ($_POST['action']) {
    case AccountActionType::LOGIN:
        $username = $_POST['emailField'];
        $password = $_POST['passwordField'];
        $email = $_POST['emailField'];
        echo $userClass->login($username, $email, $password);
        break;
    case AccountActionType::LOGOUT:

        echo json_encode($userClass->logout());
        break;

    case AccountActionType::SIGNUP_FIRST:

//filter_input(INPUT_POST, 'variable', FILTER_SANITIZE_SPECIAL_CHARS);

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $userType = $_POST['userType'];
        $description = $_POST['description'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone_num = $_POST['phone_num'];

        echo $userClass->register($firstname, $lastname, $userType, $description, $email, $age, $city, $username, $password, $address, $phone_num);

        break;

    default:

        echo "Unknown value for 'action'";
}
?>