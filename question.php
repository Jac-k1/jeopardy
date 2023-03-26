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
    if(isset($_POST['incorrect'])){
        header("location:index.php");
    }

    echo("<br><br><h1>Question: ".$_SESSION['Question']."</h1><br>");

    $answer = "testing test test";
    if(isset($_POST['showAnswer'])){
        echo("<h2>What is ".$answer."</h2><br>");
    }

?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="questionCSS.css">
</head>
<body>
<div id = buttons>
    <form method="post" action="" onclick="this.style.display='none'">
        <input type="submit" name="showAnswer" value="Show Answer">
    </form>
    <form method="post" action="">
        <input type="submit" name="team1" value="Team 1 +100">
        <input type="submit" name="team2" value="Team 2 +100">
        <input type="submit" name="incorrect" value="Incorrect Answer">
    </form>
</body>
</html>