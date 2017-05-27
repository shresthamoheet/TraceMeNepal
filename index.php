<?php
include 'admin/config/dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>TraceMeNepal</title>

    <link rel="stylesheet" href="asssets/css/style.css">
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
     
    <link href="assets/css/style.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <script src="assets/js/custom.js"></script>


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>


    </head>
<body>  
<!-- only visible part -->
	<?php include 'pageparts/header.php'; ?>	
	<?php 
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
		// echo $page;
		include 'pages/'.$page.'.php';
	}
	else{
		include 'pages/home.php';
		}
	?>
    <?php include 'pageparts/footer.php'; ?>
</body>
</html>
