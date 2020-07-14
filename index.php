<?php
$email ="";
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$conn = new mysqli("nnmeqdrilkem9ked.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "uvekkor8ppw3s39i","oy2hci2sbtwbhs3a","mk9b4mpsfztl7h0x");
	$cmd = "INSERT into registration('$email');";
	if(mysqli_query($conn, $cmd)){
		echo "Successful";
	}else{
		"Not Save"; 
	}
}
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- WEBSITE DESCRIPTION -->
	<meta name="description" content="PETE: MUSIC TEMPLATE">
	<meta name="keyword" content="HTML, CSS, BOOTSTRAP, JAVACRIPT">
	<meta name="author" centent="Rex[02]">
	<!-- OPTIMIZIED VIEWPORT FOR MOBILE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale =1.0">
	<title>Helect</title>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@300&display=swap" rel="stylesheet">
	<!-- FAVICON -->
	<link rel="icon" type="image/png" href="images/favicon.png" sizes="32X32">

	<!-- GLOBAL CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- ADD YOUR CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<body>
	<form method="post">
		<input type="email" name="email" placeholder="Enter Your Email">
		<input type="submit" name="submit">
	</form>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/wow.js"></script>
	<script>
	   new WOW().init();
    </script>
</body>
</html>