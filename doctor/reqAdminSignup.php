<?php
include '../includes/dbconnect.php';

if (isset($_POST['login'])) {
    $target_path = "uploads/license/";
    $target_path = $target_path . basename(
        $_FILES['license']['name']
    );

    if (move_uploaded_file($_FILES['license']['tmp_name'], $target_path)) {
        '<script>console.log("File uploaded successfully!");</script>';
    } else {
        '<script>console.log("Sorry, file not uploaded, please try again!");</script>';
    }
    extract($_POST);
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $license = $_FILES["license"]["name"];
    $username = $_POST['username'];
    $sid = $_POST['specializationid'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    // Insert the doctor's information into the pending_doctors table
    if ($cpassword != $password) {
        echo "<script>alert('Passwords do not match');
      window.location.href='signup.php';</script>";
    } else {
        $sql = "INSERT INTO pending_doctors (fullname,phone,email,license,specialization,username,password)VALUES('$fname','$phone','$email','$license','$sid','$username','$password')";

        if ($mysqli->query($sql) === TRUE) {
            echo "<script>alert('Registration request sent to admin for approval.');window.location.href='../index.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
}

?>