<?php
  /**
   * Created by PhpStorm.
   * User: James
   * Date: 12-Jun-18
   * Time: 1:50 PM
   */
  require_once '../dbConnect.php';

  $db = get_db();

  $name    = $_POST['name'];
  $phone   = $_POST['phone'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $city    = $_POST['city'];
  $state   = $_POST['state'];
  $zip     = $_POST['zip'];

  $stmt = 'INSERT INTO courses (name, street_address, city, state, zip, phone, contact) VALUES (:name, :address, :city, :state, :zip, :phone, :contact);';

  $insert = $db->prepare($stmt);

  $insert->bindParam(":name", $name, PDO::PARAM_STR);
  $insert->bindParam(":address", $address, PDO::PARAM_STR);
  $insert->bindParam(":city", $city, PDO::PARAM_STR);
  $insert->bindParam(":state", $state, PDO::PARAM_STR);
  $insert->bindParam(":zip", $zip, PDO::PARAM_STR);
  $insert->bindParam(":phone", $phone, PDO::PARAM_STR);
  $insert->bindParam(":contact", $contact, PDO::PARAM_STR);

  $insert->execute();

  header('location: courses.php');
  die();
