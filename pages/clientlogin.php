<?php 
require '../admin/config/dbconnection.php';
// connect to the dbconnection.php
$username=$_POST['username'];
$password=$_POST['password'];
$loginsql="SELECT * FROM register WHERE password='$password' AND email='$username'";
// echo $loginsql;
// die();
$loginquery=mysqli_query($connection, $loginsql);
// to send data in database 
$result=mysqli_num_rows($loginquery);
// result to show no of rows
if ($result>0){
	header('Location:../index.php?page=success');

}
else{
	header('Location:../index.php?page=login&msz=login_failed');
	if ($_GET['msz']) {
		echo "Invalid username and password";
	}
}
?>
