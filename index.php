<?php
session_start();
?>
<html>
    <h1>Hello <?php echo $_SESSION['user']?> Welcome to Jeopardy!</h1>
</html>

<?php
include("./jeopardy.html");

echo "Team One: " . $_SESSION['score1'];
echo "<br>";
echo "Team Two: " . $_SESSION['score2'];
?>