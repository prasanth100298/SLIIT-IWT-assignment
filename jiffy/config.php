<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "vehicle_reservation";
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	$db = mysqli_select_db($conn,'vehicle_reservation');
	
	// Check connection failure
	if($conn->connect_error){
		
		die("Connection failed: " . $conn->connect_error);
	}
	
?>