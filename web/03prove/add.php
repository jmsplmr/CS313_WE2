<?php
  session_start();
  $itemId = $_POST['item'];
  addOne($itemId);
  header('Location: ' . $_SERVER['HTTP_REFERER']);

  function addOne ($id) {
    $_SESSION['quantity'][$id]++;
  }
