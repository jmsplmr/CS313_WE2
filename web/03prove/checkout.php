<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' type='text/css' href='main.css'>
  <title>Checkout | Disc Golf Discs</title>
</head>
<body>
<div id='top-bar'>
  <p id='page-heading'>Checkout</p>
  <a href='view-cart.php'><img src='img/Shopping-Cart-icon.png' alt='shopping cart icon' title='View cart' id='cart-icon'></a>
</div>
<h1>Review your order before purchasing:</h1>
<?php
  echo '<ul>';
  foreach ($_SESSION['quantity'] as $item => $quantity) {
    if ($quantity > 0) {
      echo '<li class="item">' .
           $item .
           ': ' .
           $quantity.
           '</li > ';
    }
  }
  echo '</ul > ';
?>
<form action='finalize_order.php' method='POST'>
  <input class='button' type='submit' title='Finalize Order' value='Finalize Order'>
</form>
</body>
</html>
