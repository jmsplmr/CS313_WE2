<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>03 Teach : Team Activity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>

<body>
  <form action="form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br/>
    <label for="email">Email:</label>
    <input type="text" name="email">
    <br/>
    Major:<br/>
    <?php
      $majors = array(
        "CS" => "Computer Science",
        "WD" => "Web Design and Development",
        "CIT" => "Computer Information Technology",
        "CE" => "Computer Engineering",
      )
      foreach ($majors as $key => $value) {
        echo "<input type="radio" name="major" value="$key"/>$value<br/>"
      }
    ?>
    <label for="comments">Comments:</label>
    <textarea name="comments" rows="5" columns="40"></textarea>
    <label for="continents">Continents:</label>
    <select name="continents[]" size="7" multiple>
      <option value="North America">North America</option>
      <option value="South America">South America</option>
      <option value="Europe">Europe</option>
      <option value="Asia">Asia</option>
      <option value="Australia">Australia</option>
      <option value="Africa">Africa</option>
      <option value="Antarctica">Antarctica</option>
    </select>
    <br>
    <input type="submit">
  </form>
</body>

</html>