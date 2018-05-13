<?php
  session_start();
  if (!isset($_SESSION['quantity'])) {
    $_SESSION['quantity'] = [
        'MY1' => 0,
        'MY2' => 0,
        'LA1' => 0,
        'LA2' => 0,
        'AR1' => 0,
        'AR2' => 0,
        'OB1' => 0,
        'OB2' => 0,
        'VA1' => 0,
        'VA2' => 0,
        'SU1' => 0,
        'SU2' => 0,
    ];
  }
?>
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
<div id='top-bar'>
  <p id='page-heading'>Incredible Service, Best Prices, Fastest Shipping</p>
  <a href='view-cart.php'><img src='img/Shopping-Cart-icon.png' alt='shopping cart icon' title='View cart'
                               id='cart-icon'></a>
</div>
<div class='container'>
  <div>
    <figure>
      <img src='img/MY1.JPG' alt='Myth Black and White'>
      <figcaption>Infinite Discs | P-Blend | Available: 5 | Price: $9.99 | 175g | BLACK & WHITE</figcaption>
    </figure>
    <form action='add.php' method='POST'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='MY1'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/MY2.JPG' alt='Myth Black and Rainbow '>
      <figcaption>Infinite Discs | P-Blend | Available: 6 | Price: $9.99 | 175g | BLACK & RAINBOW</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='MY2'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/LA1.JPG' alt='White - Tribal Lace'>
      <figcaption>Vibram | X-Link Medium | Available: 2 | Price: $17.88 | 167g | WHITE TRIBAL</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='LA1'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/LA2.JPG' alt='Pink Lace'>
      <figcaption>Vibram | X-Link Medium | Available: 1 | Price: $15.88 | 175g | PINK</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='LA2'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/AR1.JPG' alt='Pink Arch'>
      <figcaption>Vibram | X-Link Medium | Available: 1 | Price: $15.88 | 175g | PINK</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='AR1'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/AR2.JPG' alt='Orange Arch'>
      <figcaption>Vibram | X-Link Firm | Available: 1 | Price: $15.88 | 170g | ORANGE</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='AR2'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/OB1.JPG' alt='Green Obex'>
      <figcaption>Vibram | X-Link Medium | Available: 1 | Price: $15.88 | 178g | GREEN</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='OB1'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/OB2.JPG' alt='Orange Obex'>
      <figcaption>Vibram | X-Link Medium | Available: 1 | Price: $15.88 | 160g | ORANGE</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='OB2'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/VA1.JPG' alt='White and Blue Vamp'>
      <figcaption>Vibram | X-Link Medium Glow | Available: 1 | Price: $18.99 | 175g | WHITE & BLUE</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='VA1'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/VA2.JPG' alt='Blue Valley'>
      <figcaption>Vibram | X-Link Medium | Available: 1 | Price: $15.88 | 172g | BLUE</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='VA2'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/SU1.JPG' alt='White Summit'>
      <figcaption>Vibram | X-Link Medium | Available: 1 | Price: $15.88 | 172g | WHITE</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='SU1'>
    </form>
  </div>
  <div>
    <figure>
      <img src='img/SU2.JPG' alt='White Tribal Sole'>
      <figcaption>Vibram | X-Link Medium | Available: 2 | Price: $17.99 | 171g | WHITE TRIBAL</figcaption>
    </figure>
    <form action='add.php' method='post'>
      <input class='button' type='submit' title='Add to cart' value='Add To Cart'>
      <input type='hidden' name='item' value='SU2'>
    </form>
  </div>
</div>
</body>
</html>
