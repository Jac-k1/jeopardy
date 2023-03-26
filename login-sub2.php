<?php
session_start(); // Start session

if (isset($_POST['login'])) {

    $username = trim($_POST['user']);
    $password = trim($_POST['password']);

    if (loginUser($username, $password)) {
        $_SESSION['user'] = $_POST['user'];
        header("Location: ./index.php");
    } else {
        echo "Details Incorrect!";
    }

}

function loginUser($username, $password)
{

    $db = "./user.csv";
    $handle = fopen($db, 'r');

    while (!feof($handle)) {
        $data[] = fgetcsv($handle, 1000, ",");
    }

    $db_username = $data[0][0];
    $db_password = $data[0][1];

    if ($username == $db_username) {
        if ($password == $db_password) {
            $username = $db_username;
            $_SESSION['username'] = $username;
            return true;
        } else
            return false;
    } else
        return false;

    fclose($handle);
}


?>