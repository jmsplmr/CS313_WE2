<nav>
    <?php $uri = $_SERVER['REQUEST_URI']; ?>
    <a href="home.php" <?php if ($uri == "/05prove/home.php") { echo "class='active'";} else {echo "class='not-active'";} ?>>Home</a>
    <a href="courses.php" <?php if ($uri == "/05prove/courses.php") { echo "class='active'";} else {echo "class='not-active'";}
    ?>>Courses</a>
    <a href="record_rounds.php" <?php if ($uri == "/05prove/record_rounds.php") { echo "class='active'";} else {echo "class='not-active'";} ?>>Games</a>
</nav>
