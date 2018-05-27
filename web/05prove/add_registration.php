<!DOCTYPE html>
<?php
  require '../db-credentials.php';

  $name = $_POST["name"];
  $email = $_POST['email'];
  $usr = $_POST['usrname'];
  $ps = $_POST['pswd'];

  $qry_usr = $db -> prepare('SELECT (:usr = username) as username_used FROM users;');
  $qry_usr -> execute([':usr' => $usr]);
  $results_usr = $qry_usr -> fetchAll(PDO::FETCH_ASSOC);

  $qry_email = $db -> prepare('SELECT (:email = users.email) AS email_used FROM users');
  $qry_email -> execute([':email' => $email]);
  $results_email = $qry_email -> fetchAll(PDO::FETCH_ASSOC);
  

//  $qry = $db -> prepare('SELECT id, book, chapter, verse FROM Scriptures WHERE book=:book');
//  $qry -> execute([':book' => $book, ]);
//  $results = $qry -> fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
  <script src="login.js"></script>
</head>
<body>
<?php
  if ($result_usr[0]['username_used'] != TRUE && $results_email[0]['email_used']) {
    echo 'what!!';
  }
?>
</body>
</html>

