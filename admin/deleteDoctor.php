<?php
include('../includes/dbconnect.php');
$pid = $_GET['id'];

$q = mysqli_query($mysqli, "DELETE FROM doctor WHERE id='$pid'");

header('location:manageDoctor.php?page=notification');