<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "coffee_db";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>