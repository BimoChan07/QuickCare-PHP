<?php
include('../includes/dbconn.php');
$uid = $_GET['id'];

$q = mysqli_query($mysqli, "DELETE FROM orders where id='$uid'");

header('location:manageorder.php?page=manage_orders');
