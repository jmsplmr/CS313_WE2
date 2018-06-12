<?php
  session_start();

  if ($_SESSION["auth"]) {
    require_once "../dbConnect.php";

    $db = get_db();

    $user_id = $_SESSION["user"];

    $qry = $db->prepare("SELECT fullname, email FROM users WHERE id=:id;");
    $qry->bindValue(":id", $user_id, PDO::PARAM_INT);
    $qry->execute();
    $results = $qry->fetch(PDO::FETCH_ASSOC);
    echo $results;
    $name = $results[0]['fullname'];
    $_SESSION['name'] = $name;
    echo $name;

    $email = $results[$user_id]['email'];
    $_SESSION['email'] = $email;
    echo $email;
  }
