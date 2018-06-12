<?php

  /**
   * @return array
   */
  function get_courses ()
  : array {
    require_once '../dbConnect.php';

    session_start();

    $db = get_db();

    $qry_courses = $db -> prepare("SELECT id, name, city, state FROM courses;");
    $qry_courses -> execute();
    $courses = $qry_courses -> fetchAll(PDO::FETCH_ASSOC);

    return $courses;
  }
