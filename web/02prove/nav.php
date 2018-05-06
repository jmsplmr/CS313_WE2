<nav>
    <?php $uri = $_SERVER['REQUEST_URI']; ?>
    <a href="home.php" <?php if ($uri == "/02prove/home.php") { echo "class='active'";} ?>>Home</a>
    <a href="about.php" <?php if ($uri == "/02prove/about.php") { echo "class='active'";} ?>>About</a>
    <a href="assignments.php" <?php if ($uri == "/02prove/assignments.php") { echo "class='active'";} ?>>Assignments</a>
    <a href="contact.php" <?php if ($uri == "/02prove/contact.php") { echo "class='active'";} ?>>Contact</a>
</nav>