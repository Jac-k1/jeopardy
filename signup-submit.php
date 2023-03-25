<?php

if (isset($_POST['signup'])) {
    //Trim form input of unwanted space
    $username = trim($_POST['user']);
    $password = trim($_POST['password']);

    if (registerUser($username, $password)) {
        $_SESSION['user'] = $_POST['user'];
        header('Location: ./login.php');
    } else {
        echo "User not registered!";
    }
}

function registerUser($username, $password)
{
    $filename = "./user.csv";
    $handle = fopen($filename, 'w');
    $data = array($username, $password);
    $delimeter = ",";

    if (fputcsv($handle, $data, $delimeter)) {
        return true;
    } else
        return false;
    fclose($handle);
}

?>