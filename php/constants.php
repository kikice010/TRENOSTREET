<?php

class TextConstants {

    const COPYRIGHT = "&copy; 2017 TrenoStreet. All Rights Reserved.";
    const TRENOSTREET = "TrenoStreet";
    const DESCRIPTION = "Ahora puedes entrenar con los mejores entrenadores de tu ciudad!";
    const AUTHOR = "TrenoStreet Team";
    const KEYWORDS = "";

}

class SocialConstants {

    const FACEBOOK_URL = "https://www.facebook.com/trenostreet";
    const INSTAGRAM_URL = "";
    const TWITTER_URL = "";

}

class CourseRequestType {

    const SINGLE_COURSE_GET = 0;
    const MULTIPLE_COURSES_GET = 1;
    const COURSE_SAVE=2;

}

class AccountActionType {

    const LOGOUT = 0;
    const LOGIN = 1;
    const SIGNUP_FIRST = 2;
    const SIGNUP_SECOND = 3;
    const PROFILE_GET = 4;
    const PROFILE_UPDATE = 5;

}

class CommonActionType {

    const CITY_LIST = 0;
    const COUNTRY_LIST = 1;
    const USER_TYPE = 2;
    const COURSE_TYPE_LIST =3;

}

?>
