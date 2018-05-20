<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' type='text/css' href='main.css'>
  <title>Disk Golfing Disks | Shop</title>
</head>
<body>
<h1>Your Order confirmation:</h1>
<h2>Shipping Information</h2>
<?php
  session_start();

  echo $_SESSION['name']."<br>";
  echo $_SESSION['add1']."<br>";
  if ($_SESSION['add2'] !== "")
    echo $_SESSION['add2']."<br>";
  if ($_SESSION['add3'] !== "")
    echo $_SESSION['add3']."<br>";
  echo $_SESSION['city'].", ".$_SESSION['state'].' '.$_SESSION['zip'];
?>
<h2>Order Information</h2>
<table>
  <tr>
    <td>Item</td>
    <td>Quantity</td>
  </tr>
<?php
  foreach ($_SESSION['order'] as $item => $quantity)
    echo '<tr><td>'.$item.'</td><td>'.$quantity.'</td></tr>';
?>
</table>
<h1>Thank you for shopping with us!</h1>
<a href="http://<?php echo $_SERVER['HTTP_HOST']?>">Return to main page</a>
</body>
</html>
