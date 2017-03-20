<?php

include_once("../constants.php");
include_once '../af/commonAF.php';

$commonClass = new CommonAF();
$error;
switch ($_POST['action']) {

    case CommonActionType::CITY_LIST:

        echo $commonClass->CityListGET($country);

        break;
    case CommonActionType::COUNTRY_LIST:

        echo $commonClass->CountryListGET();
        break;

    case CommonActionType::USER_TYPE:

        echo $commonClass->UserTypeGET();
        break;

    default:
        echo "Unknown value for 'action'";
}
?>
