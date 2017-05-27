<?php 
session_start();
require 'config/dbconnection.php';
// connect to the dbconnection.php
$username=$_POST['username'];
$password=$_POST['password'];
$loginsql="SELECT * FROM login WHERE username='$username' AND password='$password'";
$loginquery=mysqli_query($connection, $loginsql);
// to send data in database 
$result=mysqli_num_rows($loginquery);
// result to show no of rows
if ($result>0){
	$_SESSION['username']=$username;
	// dynamically calling the variable value from other pages
	header('Location:admin.php?page=dashboard');
	//header is used for http location redirect
}
else{
	header('Location:index.php');
}
?>