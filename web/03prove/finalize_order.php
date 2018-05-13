<?php
  session_start();
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
