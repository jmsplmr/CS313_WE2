<?php
  session_start();
  $itemId = $_POST['item'];
  remove($itemId);
  header('Location: ' . $_SERVER['HTTP_REFERER']);

  function remove ($id) {
    $_SESSION['quantity'][$id] = 0;
  }
