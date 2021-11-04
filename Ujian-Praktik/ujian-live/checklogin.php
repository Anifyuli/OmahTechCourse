<?php
session_start();
include 'connect.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin") {
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password ")
    }
}

?>