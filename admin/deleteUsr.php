<?php
include('../includes/dbconn.php');
$uid = $_GET['id'];

$q = mysqli_query($mysqli, "DELETE FROM users where id='$uid'");

header('location:manageUsr.php?page=manage_users');
