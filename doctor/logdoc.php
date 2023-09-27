<?php
session_start();
error_reporting(0);
include('./includes/dbconn.php');

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT id,username FROM doctor WHERE username=:username and password=:password";
  $query = $dbh->prepare($sql);
  $query->bindParam(':username', $username, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  if ($query->rowCount() > 0) {
    foreach ($results as $result) {
      $_SESSION['damsid'] = $result->id;
      $_SESSION['damsemailid'] = $result->username;

    }
    $_SESSION['login'] = $_POST['username'];
    echo "<script type='text/javascript'> window.location ='dashboard.php'; </script>";
  } else {
    echo "<script>alert('Invalid Details');window.location ='login.php';</script>";
  }
}