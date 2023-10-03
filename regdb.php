<?php
include 'includes/dbconnect.php';
$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($cpassword != $password) {
  echo "<script>alert('Passwords do not match');
    window.location.href='signup.php';</script>";
} else {
  $sql = "INSERT INTO users(fullname,age,email,phone,username,password)
    VALUES ('$fname','$age','$email','$phone','$username','$password')";

  // $sql1 = "INSERT INTO users(username,password) VALUES ('$username','$password')";
  if ($mysqli->query($sql) > 0) {

    echo "<script>alert('User Registered Successfully');
    window.location.href='./login.php'</script>";
  } else {
    echo "<script>alert('Error while registering');
    </script>";
  }
}