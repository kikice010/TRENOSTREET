<?php
require "/php/conx.php";

class Courses{

$connection = new DB();


private static function getCourseListStructure($id){

$id_course = $id;

echo '<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
    <a href="course.php?id='. $id_course .'"><img src="images/work-1.jpg" alt="Spinning" class="img-responsive" height="454">
      <div class="fh5co-copy">
        <h3>Spinning</h3>
        <p>Cardio</p>
      </div>
    </a>
  </div>';


}


private static function getUserCourses($userId){





}


private static function getCoursesList($filter, $orderBy, $orderDir){





}



private static function getCourse($id){






}




}




?>
