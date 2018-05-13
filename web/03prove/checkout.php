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
<div class="container">
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
  Shipping Address:<br>
  <label for="name">Name:</label>
  <input type="text" name="name" maxlength="50"><br/>
  <label for="add1">Address Line 1:</label>
  <input type="text" name="add1"><br/>
  <label for="add2">Address Line 2:</label>
  <input type="text" name="add2"><br/>
  <label for="add3">Address Line 3:</label>
  <input type="text" name="add3"><br/>
  <label for="city">City:</label>
  <input type="text" name="city">
  <label for="state">State:</label>
  <input type="text" name="state">
  <label for="zip">Zipcode:</label>
  <input type="number" name="zip" maxlength="5"><br/>
  <input type="submit" />
</form>
</div>
</body>
</html>
