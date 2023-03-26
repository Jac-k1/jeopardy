<?php
    session_start();
    if(isset($_POST['team1'])){
        $_SESSION['score1'] = $_SESSION['score1'] + 100;
        header("location:index.php");
    }
    if(isset($_POST['team2'])){
        $_SESSION['score2'] = $_SESSION['score2'] + 100;
        header("location:index.php");
    }

    $answer = "testing test test";
    echo("Question :".$_SESSION['Question']."<br>");
    if(isset($_POST['showAnswer'])){
        echo("What is ".$answer);
    }

?>

<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
    <form method="post" action="">
        <input type="submit" name="showAnswer" value="Show Answer">
    </form>
    <form method="post" action="">
        <input type="submit" name="team1" value="Team 1 +100">
        <input type="submit" name="team2" value="Team 2 +100">
    </form>
</body>
</html>