<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disc Golf | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="login.css"/>
  <script src="login.js"></script>
  <script src='cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>

<body>
<div class="login-page">
  <div class="form">
    <form class="register-form" action="register.php">
      <input type="text" name="name" id="name" placeholder="name">
      <input type="text" name="usrname" id="usrname" placeholder="username" required/>
      <input type="password" name="pswd" id="pswd" placeholder="password" required/>
      <input type="text" name="email" id="email" placeholder="email address" required/>
      <input type="submit" value="Create">
      <p class="message">Already registered?
        <a href="#">Sign In</a>
      </p>
    </form>
    <form class="login-form" action="authenticate.php" method="post">
      <input type="text" name="username" placeholder="username" id="username">
      <input type="password" name="pswd" placeholder="password" id="pswd">
      <input type="submit" value="Login">
      <p class="message">Not registered?
        <a href="#">Create an account</a>
      </p>
    </form>
  </div>
</div>
</body>

</html>
