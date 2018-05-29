<?php
  $book       = htmlspecialchars($_POST['book']);
  $chapter    = htmlspecialchars($_POST['chapter']);
  $verse      = htmlspecialchars($_POST['verse']);
  $content    = htmlspecialchars($_POST['content']);
  $topics_ids = $_POST['topics'];
  echo $book;
  echo '<br>';
  echo $chapter;
  echo '<br>';
  echo $verse;
  echo '<br>';
  echo $content;
  echo '<br>';
  echo $topics_ids;
  echo '<br>';
  foreach ($_POST['topics'] as $key => $value) {
    echo $key . ':' . $value . '<br>';
  }
  echo $_POST['topics'];
