<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disc Golf | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
  <script src="main.js"></script>
</head>

<body>
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name" required/>
      <input type="password" placeholder="password" required/>
      <input type="text" placeholder="email address" required/>
      <button>create</button>
      <p class="message">Already registered?
        <a href="#">Sign In</a>
      </p>
    </form>
    <form class="login-form" action="authenticate.php" method="post">
      <input type="text" name="username" placeholder="username" id="username">
      <input type="password" name="pswd_insecure" placeholder="password" id="pswd">
      <input type="submit" value="Login">
      <p class="message">Not registered?<a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</body>

</html>
