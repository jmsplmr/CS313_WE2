<?php
  /**
   * Created by PhpStorm.
   * User: James
   * Date: 12-Jun-18
   * Time: 10:43 AM
   */

  session_start();

  if (!S_SESSION['auth']) {
    header('location: login.php');
    die();
  }
