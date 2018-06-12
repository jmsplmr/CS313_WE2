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
    echo $results[0];
    $name = $results[0]['fullname'];
    $_SESSION['name'] = $name;

    $email = $results[0]['email'];
    $_SESSION['email'] = $email;
  }
