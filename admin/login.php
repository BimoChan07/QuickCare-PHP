<?php
include './includes/dbconnect.php';

extract($_POST);

if (isset($login)) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = mysqli_query($mysqli, "SELECT * FROM admin WHERE user='$username' AND pass='$password'");
    $row = mysqli_num_rows($query);
    if ($row) {
        session_start();
        $_SESSION['username'] = $username;
        echo "<script>window.location.href='./index.php';</script>";
    } else {
        echo "<script>alert('Please check your username or password');window.location.href='./login.php';</script>";
    }
}