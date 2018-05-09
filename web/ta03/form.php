<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>

<body>

  User:
  <?php echo $_POST["name"]; ?>
  <br> Email Address is:
  <a href="mailto:<?php echo $_POST["email"];?>">
    <?php echo $_POST["email"];?>
  </a>
  <br> Major:
  <?php echo $_POST["major"]; ?>
  <br> Comments:
  <p>
    <?php echo $_POST["comments"]; ?>
  </p>
  <br> Visited Continents:
  <br>
  <?php 
    foreach ($_POST["continents"] as $visted)
        echo("    $visted<br>");
  ?>
</body>

</html>