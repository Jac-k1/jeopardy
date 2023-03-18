<?php
session_start();

$username = $_POST['user'];
$password = $_POST['password'];
$login = false;

$users = [
 'admin' => 'password',
 'jack' => '123',
];

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
