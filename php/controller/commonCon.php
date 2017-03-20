<?php

include_once("../constants.php");
include_once '../af/commonAF.php';

$commonClass = new CommonAF();
$error;
switch ($_POST['action']) {

    case CommonActionType::CITY_LIST:
        $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_NUMBER_INT);
        echo $commonClass->CityListGET($country);

        break;
    case CommonActionType::COUNTRY_LIST:

        echo $commonClass->CountryListGET();
        break;

    case CommonActionType::USER_TYPE:

        echo $commonClass->UserTypeGET();
        break;

    CASE CommonActionType::COURSE_TYPE_LIST:

        
        echo $commonClass->CourseTypeGET();
        break;

    default:
        echo "Unknown value for 'action'";
}
?>
