<nav>
    <?php $uri = $_SERVER['REQUEST_URI']; ?>
    <a href="home.php" <?php if ($uri == "/02prove/home.php") { echo "class='active'";} else {echo "class='not-active'";} ?>>Home</a>
    <a href="about.php" <?php if ($uri == "/02prove/about.php") { echo "class='active'";} else {echo "class='not-active'";} ?>>About</a>
    <a href="assignments.php" <?php if ($uri == "/02prove/assignments.php") { echo "class='active'";} else {echo "class='not-active'";} ?>>Assignments</a>
</nav>