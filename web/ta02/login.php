<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <?php
    require("header.php");
    echo "<div><button type=\"button\" name=\"admin\"class=\"btn btn-large btn-block btn-default\">Log in as Administrator</button></div>";
    echo "<div><button type=\"button\" name=\"tester\"class=\"btn btn-large btn-block btn-default\">Log in as Tester</button></div>";

    session_start();
    if (isset($_POST['admin'])) { 
      $_session['admin'] = $_POST['admin'];
    }
    if (isset($_POST['tester'])) { 
      $_session['tester'] = $_POST['tester'];
    }
  
  ?>
</body>
</html>