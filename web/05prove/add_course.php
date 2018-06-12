<?php
  /**
   * Created by PhpStorm.
   * User: James
   * Date: 12-Jun-18
   * Time: 1:50 PM
   */
  require_once '../dbConnect.php';

  session_start();

  $db = get_db();

  $user = $_SESSION['user'];

  $name    = htmlspecialchars($_POST['name']);
  $phone   = htmlspecialchars($_POST['phone']);
  $contact = htmlspecialchars($_POST['contact']);
  $address = htmlspecialchars($_POST['address']);
  $city    = htmlspecialchars($_POST['city']);
  $state   = htmlspecialchars($_POST['state']);
  $zip     = htmlspecialchars($_POST['zip']);
  $rating  = ($_POST['rating']);

  $stmt
      = 'INSERT INTO courses (name, street_address, city, state, zip, phone, contact) VALUES (:name, :address, :city, :state, :zip, :phone, :contact);';

  $insert = $db -> prepare($stmt);

  $insert -> bindParam(":name", $name, PDO::PARAM_STR);
  $insert -> bindParam(":address", $address, PDO::PARAM_STR);
  $insert -> bindParam(":city", $city, PDO::PARAM_STR);
  $insert -> bindParam(":state", $state, PDO::PARAM_STR);
  $insert -> bindParam(":zip", $zip, PDO::PARAM_STR);
  $insert -> bindParam(":phone", $phone, PDO::PARAM_STR);
  $insert -> bindParam(":contact", $contact, PDO::PARAM_STR);

  $insert -> execute();

  $course_id = $db -> lastInsertId(['course_id_seq']);

  $stmt_rating = 'INSERT INTO course_rating(user_id,course_id,rating) VALUES (:user, :course, :rating);';

  $create_rating = $db -> prepare($stmt_rating);
  $create_rating -> bindParam(":user", $user, PDO::PARAM_INT);
  $create_rating -> bindParam(":course", $course_id, PDO::PARAM_INT);
  $create_rating -> bindParam(":rating", $rating, PDO::PARAM_INT);
  $create_rating -> execute();

  header('location: courses.php');
  die();
