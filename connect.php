<?php

$email ="";
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$conn = new mysqli("nnmeqdrilkem9ked.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306",
	 "uvekkor8ppw3s39i", "oy2hci2sbtwbhs3a", "mk9b4mpsfztl7h0x");
	$cmd = "INSERT into email value ('$email');";
	if(mysqli_query($conn, $cmd)){
		echo "Successful";
	}else{
		"try again"; 
	}
}
?> 
