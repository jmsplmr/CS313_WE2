<!DOCTYPE html>
<?php
  require '../db-credentials.php';

  $user = $_POST['username'];
  $pswd = $_POST['pswd'];

  $qry = $db -> prepare('SELECT users.username FROM users WHERE username=user AND pswdhash = crypt(:pswd, pswdhash);');
  $qry -> execute([':user' => $user, ':pswd' => $pswd]);
  $results = $qry_email -> fetchAll(PDO::FETCH_ASSOC);

//  if ($results[0]['username'] == $user) {
//    $_SESSION['logged_in'] = TRUE;
//  }
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
      if (!$results[0]) {
        echo '<p class="message">Username or password incorrect.</p>';
        echo '</br>';
      } else {
        echo '<p class="message">Success: ' . $_SESSION['logged_in'] . '</p>';
        echo '</br>';
      }
    ?>
  </div>
</div>

</body>
</html>

