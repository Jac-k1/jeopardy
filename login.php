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
        <form action="./login-sub2.php" method="post">
            <h1>Login</h1>
            <input type="text" name="user" maxlength="16" size="15" placeholder="Username" required></input>
            <br>
            <br>
            <input type="password" name="password" maxlength="16" size="15" placeholder="Password" required></input>
            <br>
            <br>
            <input type="submit" name="login" value="Login"></input>
            <br>
            <br>
            Don't have an account? <a href="./signup.php">Sign up</a>
        </form>
    </div>
</body>



</html>