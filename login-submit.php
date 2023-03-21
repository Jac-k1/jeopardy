<?php
session_start();

if (isset($_POST['user'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];
    $login = false;
}

$users = [
    'admin' => 'password',
    'jack' => '123',
   ];

/*
if (isset($_POST['newuser'])) {
    array_push($users, array($_POST['newuser'] => $_POST['newpassword']));
    $login = true;
}
*/


foreach ($users as $key => $value) {
    if ($key === $username && $value === $password) {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['score1'] = 0;
        $_SESSION['score2'] = 0;
        $login = true;
    }
}

if ($login == true) {
    header("Location: ./index.php");
}
else {
    echo "There was a error with your Username or Password. Please try again.";
}





/*
if (isset($_POST['user']) && !isset($_SESSION['user'])) {
    if ($users[$_POST['user']] == $_POST['password']) {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];

        header("location: ./index.php");
    } else {
        echo "wrong";
    }
}

if (!isset($_SESSION['user'])) {
    echo "wrong";
}
*/



/*
if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['password'])) {
        echo "Invalid Username or Password";
    } else {
        $users[$_POST['user']] == $_POST['password'];
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];

        header("location: ./index.php");
    
    } 
}
*/
?>
