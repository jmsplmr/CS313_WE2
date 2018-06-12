<?php
  /**
   * Created by PhpStorm.
   * User: James
   * Date: 12-Jun-18
   * Time: 11:26 AM
   */

  session_start();
  require_once '../dbConnect.php';

  $db = get_db();

  $date = $_POST['date'];
  $course = $_POST['course'];
  $format = $_POST['format'];
  $score = $_POST['score'];
  $user = $_SESSION['user'];

  $stmt = 'INSERT INTO rounds(course_id, user_id, format_id, score, date) VALUES (:course, :user, :format, :score, :date);';

  $insert = $db->prepare($stmt);
  $insert->bindValue(":course", $course, PDO::PARAM_INT);
  $insert->bindValue(":user", $user, PDO::PARAM_INT);
  $insert->bindValue(":format", $format, PDO::PARAM_INT);
  $insert->bindValue(":score", $score, PDO::PARAM_INT);
  $insert->bindValue(":date", $date, PDO::PARAM_INT);
  $insert->execute();

  header('location: rounds.php');
  die();

