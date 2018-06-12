<!DOCTYPE html>
<?php
  require '../db-credentials.php';

  $name  = $_POST["name"];
  $email = $_POST['email'];
  $usr   = $_POST['usrname'];
  $ps    = $_POST['pswd'];

  $qry_usr = $db -> prepare('SELECT (:usr = username) as username_used FROM users;');
  $qry_usr -> execute([':usr' => $usr]);
  $results_usr = $qry_usr -> fetchAll(PDO::FETCH_ASSOC);

  $qry_email = $db -> prepare('SELECT (:email = users.email) AS email_used FROM users');
  $qry_email -> execute([':email' => $email]);
  $results_email = $qry_email -> fetchAll(PDO::FETCH_ASSOC);

  if (!$results_usr[0]['username_used'] && !$results_email[0]['email_used']) {
    $stmt = $db -> prepare("INSERT INTO users (fullname, username, email, pswdhash) VALUES (:name, :usr, :email, crypt(:pswd, gen_salt('bf')));");
    $stmt -> execute(['name' => $name, ':email' => $email, 'usr' => $usr, ':pswd' => $ps]);

    header('Location: login.php');
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
      if ($results_usr[0]['username_used']) {
        echo '<p class="message">Cannot register username.</p>';
        echo '</br>';
      }
      if($results_email[0]['email_used']) {
        echo '<p class="message">Cannot register email address.</p>';
        echo '</br>';
      }
    ?>
  </div>
</div>

</body>
</html>

