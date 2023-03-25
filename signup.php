<html>

<head>
    <link rel="stylesheet" href="./style.css">
    <title>Sign-up!</title>
</head>


<body>
    <div>
        <form action="./signup-submit.php" method="post">
            <h1>Sign Up</h1>
            <input type="text" name="user" maxlength="16" size="15" placeholder="Username" required></input>
            <br>
            <br>
            <input type="password" name="password" maxlength="16" size="15" placeholder="Password" required></input>
            <br>
            <br>
            <input type="submit" name="signup" value="Sign Up"></input>
            <br>
            <br>
            Already got an account? <a href="./login.php">Login</a>
        </form>
    </div>
</body>


</html>