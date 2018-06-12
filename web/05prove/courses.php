<!DOCTYPE html>
<?php
  /**
   * Created by PhpStorm.
   * User: James
   * Date: 12-Jun-18
   * Time: 12:27 PM
   */

  session_start();
  include 'auth.php';
  include 'get_courses.php';

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
  if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    echo "<h1>Welcome " . $name . "!</h1>";
  }
?>
<div>
  <h2>Add a Course</h2>
  <form method="post" action="add_course.php">
    <label for="name">Name: </label>
    <input type="text" name="Name" id="name" placeholder="Disc Golf Course" required><br>
    <label for="phone">Phone #: </label>
    <input type="text" name="phone" id="phone" placeholder="555-444-3333"><br>
    <label for="contact">Contact: </label>
    <input type="text" name="contact" id="contact" placeholder="Responsible Party"><br>
    <label for="address">Address: </label>
    <input type="text" name="address" id="address" placeholder="# D Street Abr." required><br>
    <label for="city">City: </label>
    <input type="text" name="city" id="city" placeholder="Anywhere" required><br>
    <label for="state">State: </label>
    <input type="text" name="state" id="state" placeholder="ST" required><br>
    <label for="zip">Zip: </label>
    <input type="text" name="zip" id="zip" placeholder="55555" required><br>
    <input type="submit">
  </form>
</div>
<?php
  $course_rating = get_courses_ratings();

  if (sizeof($course_rating) > 0) {
    echo '<table class="rounds" id="rounds">';
    echo '<tr>
              <th>Name</th>
              <th>Address</th>
              <th>Rating</th>
            </tr>';
    foreach ($course_rating as $row) {
      $id = $row['id'];
      $name    = $row['name'];
      $address = $row['address'];
      $city    = $row['city'];
      $state   = $row['state'];
      $rating  = $row['rating'];

      echo "<tr>
                <td><a href='course_info.php?id=$id'>$name</a></td>
                <td>$address, $city, $state</td>
                <td>$rating</td>
              </tr>";
    }
    echo '</table>';
  }


?>
</body>
</html>
