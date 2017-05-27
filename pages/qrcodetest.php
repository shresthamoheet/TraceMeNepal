<?php 
	// include BarcodeQR class 
include "BarcodeQR.php"; 

// set BarcodeQR object 
$qr = new BarcodeQR();

//dynamic information from the traveler

	$name=$_POST['name'];
	$nationality=$_POST['nationality'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$photoname=$_FILES['photo']['name'];
	$photosize=$_FILES['photo']['size'];
	$phototype=$_FILES['photo']['type'];

	$passportnum=$_POST['passportnum'];
	$contactname=$_POST['contactname'];
	// $passportnum=$_POST['passportnum'];
	$contactnum=$_POST['contactnum'];
	if ($photosize<3072&&$phototype=='image/jpg'||$phototype=='image/jpeg'||$phototype=='image/png') {
		$uniquename=sha1(time());
		
		$explodevalues=explode('.', $photoname) ;
		// echo $explodevalues[1];
		$finalname=$uniquename.'.'.$explodevalues[1];
		if (move_uploaded_file($_FILES['photo']['tmp_name'],"img/".$finalname)) {
			$qr->contact($name, $nationality, $email, $password, $passportnum, $contactname, $contactnum);

//creating unique names for qrcode
			
$bruniquename=sha1(time());
$brfinalname=$bruniquename.'.'.'png';

// display new QR code image 
$qr->draw(150, "qrimg/".$brfinalname);

$sql="INSERT INTO register(name,nationality,email,password,file,qrcode,contactname,contactnum,passportnum) VALUES('$name','$nationality','$email','$password','$finalname','$brfinalname','$contactname', '$contactnum', '$passportnum')";
	mysqli_query($connection,$sql);
		}
	}



 ?>
 