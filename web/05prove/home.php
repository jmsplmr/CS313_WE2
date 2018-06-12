<!DOCTYPE html>
<?php
  session_start();
  if ($_SESSION["auth"]) {
    require "../db-credentials.php";

    $user_id = $_SESSION["user"];

    $qry = $db->prepare("SELECT fullname, email FROM users WHERE id=:id;");
    $qry->bindValue("id", $user_id, PDO::PARAM_INT);
    $qry->execute();
    $results = $qry->fetch(PDO::FETCH_LAZY);
    echo $results;

    $name = $results[0]['fullname'];
    $_SESSION['name'] = $name;
    echo $name;

    $email = $results[0]['email'];
    $_SESSION['email'] = $email;
    echo $email;
  }
?>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disc Golf | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
  <script src="login.js"></script>
</head>
<body>
<?php
  include 'nav.php';
  if (isset($_SESSION['name'])) {
    echo "<h1>Name:" . $_SESSION['name'] . " </h1>";
  }
  if (isset($_SESSION['user'])) {
    echo "<h1>User" . $_SESSION['user'] . "</h1>";
  }
  if (isset($_SESSION['auth'])) {
    echo "<h1>auth:" . $_SESSION['auth'] . " </h1>";
  }
?>
</body>
</html>
