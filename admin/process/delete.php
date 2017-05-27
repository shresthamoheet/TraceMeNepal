<?php 
include '../config/dbconnection.php'; 
$regid=$_GET['id'];
$sql="DELETE FROM register WHERE id=$regid";
mysqli_query($connection,$sql);
header('Location:../admin.php?page=afterreg&delete=success');

?>
