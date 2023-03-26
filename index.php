<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1>
        Hello <?php echo $_SESSION['user'] ?> Welcome to Jeopardy!
    </h1>
</body>

</html>

<?php

include("./jeopardy.html"); ?>
<html>
    <div>
    <body>
        <div class="left">
        <h3>Team One: <?php echo $_SESSION['score1'] ?><h3>
</div>
<div class="right">
        <h3>Team Two: <?php echo $_SESSION['score2'] ?><h3>
</div>
    </body>
</div>
</html>