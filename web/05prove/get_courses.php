<?php

  /**
   * @return array
   */
  function get_courses_ratings ()
  : array {
    require_once '../dbConnect.php';
    session_start();
    $db = get_db();

    $user = $_SESSION['user'];

    $stmt
        = 'SELECT courses.id, name, street_address AS address, city, state, rating FROM courses INNER JOIN course_rating rating2 on 
courses
.id = rating2.course_id WHERE rating2.user_id = :id;';

    $qry_courses = $db -> prepare($stmt);
    $qry_courses -> bindValue(":id", $user, PDO::PARAM_STR);
    $qry_courses -> execute();
    $courses = $qry_courses -> fetchAll(PDO::FETCH_ASSOC);
    return $courses;
  }

  /**
   * @param $course
   *
   * @return array
   */
  function get_course_detail ($course)
  : array {
    require_once '../dbConnect.php';
    session_start();

    $db = get_db();

    $stmt = 'SELECT name, street_address, city, state, zip, phone, contact FROM courses WHERE id = :id;';

    $qry_details = $db -> prepare($stmt);
    $qry_details -> bindParam(":id", $course, PDO::PARAM_INT);
    $qry_details -> execute();
    $details = $qry_details -> fetch();

    return $details;
  }

  ;


