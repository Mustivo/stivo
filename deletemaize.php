<?php
include "connection.php";
$pid = $_GET['pid'];
$delete = "DELETE FROM XYZ WHERE p_id='$pid'";
mysqli_query($con,$delete);
header('location:selectmaize.php')
?>