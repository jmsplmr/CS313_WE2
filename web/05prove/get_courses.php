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
        = 'SELECT name, street_address AS address, city, state, rating FROM courses INNER JOIN course_rating rating2 on courses
.id = rating2.course_id INNER JOIN users u on rating2.user_id = :id;';

    $qry_courses = $db -> prepare($stmt);
    $qry_courses -> bindValue(":id", $user, PDO::PARAM_STR);
    $qry_courses -> execute();
    $courses = $qry_courses -> fetchAll(PDO::FETCH_ASSOC);
    return $courses;
  }


