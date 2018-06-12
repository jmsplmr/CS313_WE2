<?php

  function get_game_types ()
  : array {
    require_once '../dbConnect.php';
    session_start();

    $db = get_db();

    $qry_game_types = $db -> prepare("SELECT id, name FROM game_format;");
    $qry_game_types -> execute();
    $game_types = $qry_game_types -> fetchAll(PDO::FETCH_ASSOC);

    return $game_types;
  }

