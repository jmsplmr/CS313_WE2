<!DOCTYPE html>
<?php
  session_start();
  include 'auth.php';
  include 'status.php';
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
    echo "<h1>Welcome " . $name . " </h1>";
  }
  if (isset($_SESSION['user_rounds[]'])) {
    $rounds = $_SESSION['user_rounds[]'];

    echo '<table class="rounds" id="rounds">';
      echo '<tr>
              <th>Date</th>
              <th>Course</th>
              <th>Type</th>
              <th>Score</th>
            </tr>';
      foreach ($rounds as $row){
        $score = $row['score'];
        $date = $row['date'];
        $format = $row['format'];
        $course = $row['course'];

        echo "<tr>
                <td>$date</td>
                <td>$course</td>
                <td>$format</td>
                <td>$score</td>
              </tr>";
      }
    echo '</table>';
  }

?>
</body>
</html>
