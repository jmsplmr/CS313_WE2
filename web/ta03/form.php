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
  <?php
    $majors = array(
      "CS" => "Computer Science",
      "WD" => "Web Design and Development",
      "CIT" => "Computer Information Technology",
      "CE" => "Computer Engineering",
      "BIO" => "Biology",
      "O" => "other", 
    );
    $continents = array(
      "NA" => "North America",
      "SA" => "South America",
      "EU" => "Europe",
      "AS" => "Asia",
      "AU" => "Australia",
      "AF" => "Africa",
      "AN" => "Antarctica",
    );
  ?>
  User:
  <?php echo $_POST["name"]; ?>
  <br/> Email Address is:
  <a href="mailto:<?php echo $_POST["email"];?>">
    <?php echo $_POST["email"];?>
  </a>
  <br/> Major:
  <?php echo(" ".$majors[$_POST['major']]."<br/>"); ?>
  <br/> Comments:
  <p>
    <?php echo $_POST["comments"]; ?>
  </p>
  <br/> Visited Continents:
  <br/>
  <?php 
    foreach ($_POST["continents"] as $visted)
        echo("    ".$continents["$visted"]."<br/>");
  ?>
</body>

</html>