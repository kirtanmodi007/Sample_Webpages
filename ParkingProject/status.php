<?php
		
		//require 'phpmailer/PHPMailerAutoload.php';
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "student";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$slot = $_GET['slot'];
		$status = $_GET['i'];
		
		$sql1 = 'INSERT INTO status(slot,status,time) VALUES (' .$slot. ', ' .$status. ',now())';
		$res1 = mysqli_query($conn,$sql1);
?>	
