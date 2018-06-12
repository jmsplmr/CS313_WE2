<?php
  session_start();

  if (!isset(S_SESSION['auth'])) {
    header('location: login.php');
    die();
  }
?>

<!DOCTYPE html>
<?php
  session_start();
  include 'auth.php';
  include 'get_rounds.php';
?>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disc Golf | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="login.css"/>
  <script src="login.js"></script>
</head>
<body>
<?php
  include 'nav.php';
    echo "<form>
            
          </form>";

    echo "<h1>Your rounds of disc golf.</h1>";
  if (isset($_SESSION['user_rounds[]'])) {
    $rounds = $_SESSION['user_rounds[]'];
    if (sizeof($rounds) > 0) {
      echo '<table class="rounds" id="rounds">';
      echo '<tr>
              <th>Date</th>
              <th>Course</th>
              <th>Type</th>
              <th>Score</th>
            </tr>';
      foreach ($rounds as $row) {
        $score  = $row['score'];
        $date   = $row['date'];
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
    else {
      echo '<h2>Currently you have no recorded rounds. You should add some.</h2>';
    }
    echo '<a href="rounds.php">Add a round of disc golf.</a>';
  }

?>
</body>
</html>

