<?php
  echo '<div class="topnav">
          <a ';
  if (basename($_SERVER['PHP_SELF']) == "home.php")
    echo 'class="active"';
  echo 'href="home.php">Home</a>
          <a '; 
  if (basename($_SERVER['PHP_SELF']) == "about-us.php")
    echo 'class="active"';
  echo 'href="about-us.php">About us</a>
         <a ';
  if (basename($_SERVER['PHP_SELF']) == "login.php")
    echo 'class="active"';
  echo 'href="login.php" >Login</a>';
  echo '<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>';
?>