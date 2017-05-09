<?php
	$servername = "localhost";
	$username = "root";
	$password = "BIOtavojose1989123";
	$database = "BancoDeSangre";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
           
?>
