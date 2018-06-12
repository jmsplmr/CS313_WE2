<?php
  /**
   * Created by PhpStorm.
   * User: James
   * Date: 12-Jun-18
   * Time: 11:26 AM
   */

  require_once '../dbConnect.php';

  $db = get_db();

  echo $_POST['date'];
  echo $_POST['course'];
  echo $_POST['format'];
  echo $_POST['score'];

  //$insert = $db->prepare();
