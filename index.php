<?php
$email ="";
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$conn = new mysqli("localhost", "root","","mydata");
	$cmd = "INSERT into registration value('$email');";
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
	<title></title>
</head>
<body>
	<form method="post">
		<input type="email" name="email" placeholder="Enter Your Email">
		<input type="submit" name="submit">
	</form>
</body>
</html>