<html>

<head>
    <link rel="stylesheet" href="./style.css">
    <title>Sign-up!</title>
</head>


<body>
    <div>
        <form action="./login-submit.php" method="post">
            <h1>Sign Up</h1>
            <input type="text" name="newuser" maxlength="16" size="15" placeholder="Username" required></input>
            <br>
            <br>
            <input type="text" name="newpassword" maxlength="16" size="15" placeholder="Password" required></input>
            <br>
            <br>
            <input type="submit" name="submit" value="Sign Up"></input>
            <br>
            <br>
            Already got an account? <a href="">Login</a>
        </form>
    </div>
</body>


</html>