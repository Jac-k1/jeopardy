<?php
session_start();

$users = [
 'admin' => 'password',
 'jack' => '123',
];


if (isset($_POST['user']) && !isset($_SESSION['users'])) {
    echo "hello " . $_POST['user']; 
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
