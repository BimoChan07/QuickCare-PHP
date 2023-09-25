<?php
include('../includes/dbconn.php');
$pid = $_GET['id'];

$q = mysqli_query($mysqli, "DELETE FROM products WHERE productid='$pid'");

header('location:manageProd.php?page=notification');
