<?php
include('../includes/dbconnect.php');
$uid = $_GET['id'];

$q = mysqli_query($mysqli, "DELETE FROM specialization where ID='$uid'");

header('location:manageorder.php?page=manage_orders');
