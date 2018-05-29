<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scripture</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <form name='scripture' id='scripture' action="input.php" method="post"><br>
  <input type="text" name="book" id="book" placeholder='Book' autofocus ><br>
  <input type="text" name="chapter" id="chapter" placeholder='Chapter'><br>
  <input type="text" name="verse" id="verse" placeholder='Verse'><br>
  <textarea name="content" id="content" form='scripture' cols="30" rows="10" placeholder="Content"></textarea><br>
  <?php
    require ('../db-credentials.php');

    $qry = $db -> prepare('SELECT topics.id, topics.name FROM topics;');
  $qry -> execute();
  $results = $qry -> fetchAll(PDO::FETCH_ASSOC);

  foreach ($results as $row) {
    echo ('<input type="checkbox" name="topics" id="' . $row['id'] . '">' . $row['name']. '<br>');
  }
  ?>
  <input type="submit" value="Submit">
  </form>
</body>
</html>
