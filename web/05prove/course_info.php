<?php
  /**
   * Created by PhpStorm.
   * User: James
   * Date: 12-Jun-18
   * Time: 1:13 PM
   */

  $course_id = $_GET['id'];

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
<!DOCTYPE html>
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
<div>
  <form method="post" action="add_course.php">
    <label for="name">Name: </label>
    <input type="text" name="Name" id="name" placeholder="Disc Golf Course" required>
    <label for="phone">Phone #: </label>
    <input type="text" name="phone" id="phone" placeholder="555-444-3333">
    <label for="contact">Contact: </label>
    <input type="text" name="contact" id="contact" placeholder="Responsible Party">
    <label for="address">Address: </label>
    <input type="text" name="address" id="address" placeholder="# D Street Abr." required>
    <label for="city">City: </label>
    <input type="text" name="city" id="city" placeholder="Anywhere" required>
    <label for="state">State: </label>
    <input type="text" name="state" id="state" placeholder="ST" required>
    <label for="zip">Zip: </label>
    <input type="text" name="zip" id="zip" placeholder="55555" required>
    <input type="submit">
  </form>
</div>
<?php
  include 'nav.php';
  $details = get_course_detail($course_id);
  $name = $details['name'];
  $street_address = $details['street_address'];
  $city = $details['city'];
  $state = $details['state'];
  $zip = $details['zip'];
  $phone = $details['phone'];
  $contact = $details['contact'];

  echo "<h1>$name</h1>";
  echo "<h2>$phone</h2>";
  echo "<h2>$contact</h2>";
  echo "<h3>$street_address, $city $state, $zip </h3>";
?>

</body>
</html>
