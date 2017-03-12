<?php

include_once("../constants.php");
include_once '../helper/account.php';


switch ($_GET['action']) {

    case AccountActionType::LOGIN:

        break;
    case AccountActionType::LOGOUT:


        break;

    case AccountActionType::SIGNUP_FIRST:

        break;

    case AccountActionType::SIGNUP_SECOND:

        break;
    default:

        echo "Unknown value for 'action'";
}