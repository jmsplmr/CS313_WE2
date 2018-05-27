<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disc Golf | Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="login.css"/>
  <script src="login.js"></script>
</head>
<body>
<div class="login-page">
  <div class="form">

    <form class="register-form" action="add_registration.php" method="post">
      <input type="text" name="name" id="name" placeholder="name">
      <input type="email" name="email" id="email" placeholder="email address" required/>
      <input type="text" name="usrname" id="usrname" placeholder="username" required/>
      <input type="password" name="pswd" id="pswd" placeholder="password" required/>
      <input type="hidden" name="registered" id="registered" value="registered"/>
      <input type="submit" value="Create">
      <p class="message">Already registered?
        <a href="#">Sign In</a>
      </p>
    </form>
  </div>
</div>
</body>
</html>
