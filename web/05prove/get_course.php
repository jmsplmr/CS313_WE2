<?php

  require_once '../dbConnect.php';

  session_start();

  $db = get_db();

  $qry_courses = $db->prepare("SELECT id, name, city, state FROM courses;");
  $qry_courses ->execute();
  $courses = $qry_courses->fetchAll(PDO::FETCH_ASSOC);

  $_SESSION['courses[]'] = $courses;
