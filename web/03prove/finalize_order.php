<?php
  session_start();

  $_SESSION['name'] = htmlspecialchars($_POST['name']);
  $_SESSION['add1'] = htmlspecialchars($_POST['add1']);
  $_SESSION['add2'] = htmlspecialchars($_POST['add2']);
  $_SESSION['add3'] = htmlspecialchars($_POST['add3']);
  $_SESSION['city'] = htmlspecialchars($_POST['city']);
  $_SESSION['state'] = htmlspecialchars($_POST['state']);
  $_SESSION['zip'] = htmlspecialchars($_POST['zip']);

  foreach ($_SESSION['quantity'] as $key => $value)
    if($value > 0)
      $_SESSION['order'][$key]=$value;

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
  header('Location: thankyou.php');
