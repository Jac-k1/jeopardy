<?php 
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="./style.css"></link>
    <title>Jeopardy Login</title>
</head>


<body>
    <div>
        <form action="./login-submit.php" method="post">
            <h1>Login</h1>
            <input type="text" name="user" maxlength="16" size="15" placeholder="Username" required></input>
            <br>
            <br>
            <input type="password" name="password" maxlength="16" size="15" placeholder="Password" required></input>
            <br>
            <br>
            <input type="submit" name="submit" value="Login"></input>
            <br>
            <br>
            Don't have an account? <a href="">Sign up</a>
        </form>
    </div>
</body>



</html>