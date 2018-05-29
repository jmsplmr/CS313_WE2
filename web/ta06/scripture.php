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
  <form action="insert.php" method="post">
  <input type="text" name="book" id="book" placeholder='Book' autofocus >
  <input type="text" name="chapter" id="chapter" placeholder='Chapter'>
  <input type="text" name="verse" id="verse" placeholder='Verse'>
  <input type="textarea" name="content" id="content" placeholder='Content' rows='3'>
  <?php
    require ('../db-credentials');

    $qry = $db -> prepare('SELECT topics.id, topics.name FROM topics;');
  $qry -> execute();
  $results = $qry -> fetchAll(PDO::FETCH_ASSOC);

  foreach ($results as $row) {
    echo ('<input type="checkbox" name="topics" id="' . row['id'] . '">' . row['name']);
  }
  ?>
  <input type="checkbox" name="topic" id="">

  </form>
</body>
</html>