<?php
  require '../db-credentials.php';

  $id = $_GET['id'];
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
<?php
  $qry = $db -> prepare('SELECT id, book, chapter, verse FROM Scriptures WHERE id=:id');
  $qry -> execute([':id' => $id]);
  $results = $qry -> fetchAll(PDO::FETCH_ASSOC);

  foreach ($results as $row) {
    echo '<a href="scripture-details.php?id='.$row['id'].'" methods="">' . $row['book'] . ' ' . $row['chapter'] . ':' .
         $row['verse'] . '</a>';
    echo '</br>';
    echo $row['content'];
    echo '</br>';
  }
?>

</body>
</html>
