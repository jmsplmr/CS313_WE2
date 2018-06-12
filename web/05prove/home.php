<!DOCTYPE html>
<?php
  session_start();
  include 'auth.php';
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
    $name = $_SESSION['name'];
    echo $name;
    echo "<h1>Name:" . $name . " </h1>";
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
