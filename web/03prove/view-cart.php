<?php session_start(); ?>
  <!DOCTYPE html>
  <html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' href='main.css'>
    <title>Your Shopping Cart</title>
  </head>
  <body>
  <div id='top-bar'>
    <p id='page-heading'>Your Shopping Cart</p>
    <a href='view-cart.php'><img src='img/Shopping-Cart-icon.png' alt='shopping cart icon' title='View cart'
                                 id='cart-icon'></a>
  </div>
  <a href='shoppingcart.php' title='Continue browsing'>Continue Browsing</a><br>
  <a href='checkout.php' title='Checkout'>Checkout</a>
  <h1>Take a look at what's in your shopping cart:</h1>
<?php
  echo '<ul>';
  foreach ($_SESSION['quantity'] as $item => $quantity) {
    if ($quantity > 0) {
      echo '<li class="item">' .
           $item .
           ': ' .
           $quantity .
           "<form action='remove.php' method='post'>
              <input class='button' type='submit' title='Remove Item' value='Remove item from cart'>
              <input type='hidden' name='item' value=". $item .'>
            </form >
            </li > ';
    }
  }
  echo '</ul > ';
?>
</body>
</html>
