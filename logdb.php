<?php
include './includes/dbconn.php';

extract($_POST);

if (isset($login)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $query = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    $query = mysqli_query($mysqli, "SELECT username, password FROM users WHERE username ='$username' AND password = '$password'");
    $row = mysqli_num_rows($query);

    if ($row) {
        foreach ($results as $result) {
        $_SESSION['damsid']=$result->id;
        $_SESSION['damsemailid']=$result->email;
        session_start();
        $_SESSION['username'] = $username;
        echo "<script>alert('Login Successful');window.location.href='./index.php';</script>";
    } else {
        echo "<script>alert('Please check your username or password');window.location.href='./login.php';</script>";
    }
}
}
