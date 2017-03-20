<?php

include_once("../constants.php");
include_once '../af/accountAF.php';

$userClass = new AccountAF();
$error;
switch ($_POST['action']) {
    case AccountActionType::LOGIN:
        $username = filter_input(INPUT_POST, 'emailField', FILTER_SANITIZE_EMAIL);
        $password = $_POST['passwordField'];
        $email = filter_input(INPUT_POST, 'emailField', FILTER_SANITIZE_EMAIL);
        echo $userClass->login($username, $email, $password);
        break;
    case AccountActionType::LOGOUT:

        echo json_encode($userClass->logout());
        break;

    case AccountActionType::SIGNUP_FIRST:

        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $userType = filter_input(INPUT_POST, 'userType', FILTER_SANITIZE_NUMBER_INT);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_NUMBER_INT);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
        $phone_num = $_POST['phone_num'];

        echo $userClass->register($firstname, $lastname, $userType, $description, $email, $age, $city, $username, $password, $address, $phone_num);

        break;

    default:

        echo "Unknown value for 'action'";
}
?>