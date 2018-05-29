<?php
  $book =    htmlspecialchars($_POST['book']);
  $chapter = htmlspecialchars($_POST['chapter']);
  $verse =   htmlspecialchars($_POST['verse']);
  $content = htmlspecialchars($_POST['content']);
  $topics_ids = $_POST['topics'];
  echo $book;
  echo $chapter;
  echo $verse;
  echo $content;
  echo $topics_ids;

  echo $_POST['topics'];
