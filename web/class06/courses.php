<!DOCTYPE html>
<?php
  require_once('../dbConnect.php');
  $db = get_db();

  if(!isset($db)) {
    die('DB Connection was not set');
  }

  $qry = 'SELECT id, name, number FROM course;';
  $stmt = $db -> prepare($qry);

  $stmt -> execute();
  $courses = $stmt -> fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Courses | Class 06</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <h1>Courses</h1>
  <?php
    foreach ($courses as $course) {
      $name = $course['name'];
      $number = $course['number'];

      echo '<li>$number - $name</li>';
    }
  ?>
</body>
</html>