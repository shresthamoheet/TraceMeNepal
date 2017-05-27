<?php session_start();
require 'config/dbconnection.php';
if (!isset($_SESSION['username'])){
	header('Location:index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
	<!-- heading of the website -->
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<!-- link to the cascading style sheet -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>  	

</head>
<body>  
<!-- only visible part -->
	<?php include 'pageparts/header.php'; ?>	
	<div class="container">
		<?php 
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
		// echo $page;
		include 'pages/'.$page.'.php';
	}
	else{
		include 'pages/dashboard.php';
		}
	?>
	</div>
    <?php include 'pageparts/footer.php'; ?>
</body>
</html>
