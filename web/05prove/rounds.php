<?php
  session_start();

  require_once 'auth_guard.php';
?>
<!DOCTYPE html>
<?php
  session_start();
  include 'auth.php';
  include 'get_rounds.php';
  include 'get_course.php';
  include 'get_game_types.php';
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
  $courses    = get_courses();
  $game_types = get_game_types();

  echo "<div><h1>My Rounds</h1></div>";
  echo "<div><h2>Add round:</h2>";
  echo "<form action='add_round.php' method='post'>
          <div><label for='name'>Date:</label>
              <input type='date' name='date' id='name' required>
          </div>
          <div><label for='course'>Course:</label>
            <select name='course' required>";
    foreach ($courses as $row) {
      $id   = $row['id'];
      $name = $row['name'];
      $city = $row['city'];
      $st   = $row['state'];

      echo "<option value='$id'>$name, $city, $st</option>";
    }
    echo "  </select>
          </div>";
    echo "<div>
            <label for='game_type'>Game format:</label>";
    foreach ($game_types as $row){
      $id = $row['id'];
      $name = $row['name'];

      echo "<input type='radio' id='type$id' name='game_type' value='$id'>";
      echo "<label for='type$id'>$name</label>";
    }
    echo "</div>";
    echo "<div>
            <label for='score'>Score:</label>
            <input type='number' required name='score' id='score' placeholder='100'>
          </div>";
    echo "<input type='submit'></form>";
    echo "</div>";
    echo "<h1>Your rounds of disc golf.</h1><div>";
  $rounds = get_rounds();

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
      echo '</table></div>';
    } else {
      echo '<h2>Currently you have no recorded rounds. You should add some.</h2>';
    }
    echo '<a href="rounds.php">Add a round of disc golf.</a>';


?>
</body>
</html>

