<?php
  $book    = htmlspecialchars($_POST['book']);
  $chapter = htmlspecialchars($_POST['chapter']);
  $verse   = htmlspecialchars($_POST['verse']);
  $content = htmlspecialchars($_POST['content']);
  $topics = $_POST['topics'];

  require '../db-credentials.php';

  $qry_insert_scripture = $db -> prepare('INSERT INTO scriptures(book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content);');
  $qry_insert_scripture -> execute([':book' => $book,
                                    ':chapter' => $chapter,
                                    ':verse' => $verse,
                                    ':content'=> $content]);

  $scripture_id = $db->lastInsertId('scriptures_id_seq');

  foreach ($topics as $key => $topic_id) {
    $qry_insert_topic
        = $db -> prepare('INSERT INTO scriptures_to_topics(scripture_id, topics_id) VALUES (:scripture_id, :topic_id);');
    $qry_insert_topic -> execute([':scripture_id' => $scripture_id,
                                  ':topic_id'     => $topic_id]);
  }

  header('location: scripture.php');
