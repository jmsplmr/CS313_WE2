<?php
  $book       = htmlspecialchars($_POST['book']);
  $chapter    = htmlspecialchars($_POST['chapter']);
  $verse      = htmlspecialchars($_POST['verse']);
  $content    = htmlspecialchars($_POST['content']);

  if (!empty($_POST['topics'])){
    foreach ($_POST['topics'] as $topic){
      print_r($topic);
    }
  }
