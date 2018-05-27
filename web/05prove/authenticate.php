<!DOCTYPE html>
<?php
  require '../db-credentials.php';

  $user = $_POST['username'];
  $pswd = $_POST['pswd'];

  $qry = $db -> prepare('SELECT users.username FROM users WHERE username=:user AND pswdhash = crypt(:pswd, pswdhash);');
  $qry -> execute([':user' => $user, ':pswd' => $pswd]);
  $results = $qry -> fetchAll(PDO::FETCH_ASSOC);
  
  if ($results) {
    $_SESSION['logged_in'] = TRUE;
    header('Location: home.php');
  }
?>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="login.css"/>
  <script src="login.js"></script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <?php
      echo '<p class="message">Username or password incorrect.</p>';
      echo '</br>';
    ?>
  </div>
</div>

</body>
</html>

