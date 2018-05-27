<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Disc Golf | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <h1>Login</h1>
  <form action="authenticate.php" method="post">
    <label for="username"></label>
    <input type="text" name="username" id="username"><br>
    <label for="pswd_insecure">Password</label>
    <input type="password" name="pswd_insecure" id="pswd">
    <input type="submit" value="Submit">
  </form>
</body>
</html>
