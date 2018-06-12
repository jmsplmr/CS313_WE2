<?php
  session_start();

  $user = $_SESSION['user'];

  require_once '../dbConnect.php';
  $db = get_db();

  $qry
      = $db -> prepare("SELECT name, street_address, city, state, rating FROM users u INNER JOIN course_rating r ON r.user_id = u.id INNER 
JOIN courses c ON c.id = r.course_id WHERE u.id = :id;");
  $qry -> bindValue(":id", $user, PDO::PARAM_INT);
  $qry -> execute();
  $courses = $qry -> fetchAll(PDO::FETCH_ASSOC);

  $_SESSION['course_ratings[]'] = $courses;

  $qry_rounds = $db->prepare("SELECT score, g.name AS format, c2.name AS course, r.date FROM rounds r INNER JOIN courses c2 on r.course_id = c2.id 
INNER JOIN game_format g on r.format_id = g.id WHERE user_id=:id ORDER BY r.date;");
  $qry_rounds -> bindValue(":id", $user, PDO::PARAM_INT);
  $qry_rounds->execute();
  $rounds = $qry_rounds->fetchAll(PDO::FETCH_ASSOC);

  $_SESSION['user_rounds[]'] = $rounds;
