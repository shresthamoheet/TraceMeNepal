<?php session_start();
require 'config/dbconnection.php';
// connect to the dbconnection.php
if(isset($_POST['username']))
{
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
	header('Location:index.php?msg=invalid');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Travel Admin Panel
	</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 style="color:green">TRAVEL ADMINSTRATION FORM</h1>
			<?php if (isset($_GET['msg']) && $_GET['msg']=='invalid'): ?>
			<div class="alert alert-danger">
			  	invalid username or password
			</div>
			 <?php endif; ?>
			 <?php if (isset($_GET['logout']) && $_GET['logout']=='success'): ?>
			<div class="alert alert-success">
			  	Logout Successful!
			</div>
			 <?php endif; ?>
			<form action="" method="POST">
  				<div class="form-group">
    				<label>User Name</label>
    				<input type="text" class="form-control" placeholder="Email" name="username" required>
  				</div>
  				<div class="form-group">
    				<label>Password</label>
    				<input type="password" class="form-control" placeholder="Password" name="password" required>
  				</div>
 		 		<input type="Submit" class="btn btn-default" value="Login">
			</form>
		</div>
	</div>
</div>

</body>
</html>