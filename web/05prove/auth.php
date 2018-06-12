<?php
  if ($_SESSION["auth"]) {
    session_start();
    require_once "../dbConnect.php";

    $db = get_db();

    $user_id = $_SESSION["user"];

    $qry = $db->prepare("SELECT fullname, email FROM users WHERE id=:id;");
    $qry->bindValue(":id", $user_id, PDO::PARAM_INT);
    $qry->execute();
    $results = $qry->fetch();
    
    $name = $results['fullname'];
    $_SESSION['name'] = $name;

    $email = $results['email'];
    $_SESSION['email'] = $email;
  }
