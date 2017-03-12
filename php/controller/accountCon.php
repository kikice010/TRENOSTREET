<?php

include_once("../constants.php");
include_once '../helper/account.php';

$userClass = new USER();

switch ($_GET['action']) {


    case AccountActionType::LOGIN:

        $userClass->login($uname, $umail, $upass);
        break;
    case AccountActionType::LOGOUT:

        $userClass->logout();
        break;

    case AccountActionType::SIGNUP_FIRST:

        break;

    case AccountActionType::SIGNUP_SECOND:
        $userClass->register($fname, $lname, $uname, $umail, $upass);
        break;
    default:

        echo "Unknown value for 'action'";
}
?>