<?php 
include '../config/dbconnection.php';
$bookid=$_GET['id'];
$sqlbook="DELETE FROM booking WHERE id=$bookid";
mysqli_query($connection,$sqlbook);
header('Location:../admin.php?page=booked&delete=success');
 ?>
