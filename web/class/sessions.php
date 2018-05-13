<?php
  session_start()
?>
<?php
  $key_sessionCount = "session-count";

  if (isset($_SESSION[$key_sessionCount])) {
    $_SESSION[$key_sessionCount]++;
  } else {
    $_SESSION[$key_sessionCount] = 0;
  }
  header("Refresh:0");
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
  <div>
    <h1>Page Visited: <?php echo $_SESSION[$key_sessionCount]; ?></h1>
  </div>
</body>
</html>