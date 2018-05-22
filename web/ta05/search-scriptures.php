<?php


  foreach ($db->query('SELECT book, chapter, verse, content FROM Scriptures') as $row) {

    echo '<strong>'.$row['book'].' '.$row['chapter'].':'.$row['verse'].'</strong>';
    echo ' - '.$row['content'].'</br>';
  }
