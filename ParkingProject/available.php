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
		
		$place = $_GET['place'];
		$available_slot = $_GET['available_slot'];
		
		#$sql1 = 'INSERT INTO available(place,available_slot,time) VALUES (' .$place. ', ' .$available_slot. ',now())';
		if ($place==='1')
		{	
			$sql1 = 'UPDATE `available` SET `place`=' .$place. ',`available_slot`='. $available_slot. ',`time`=now() WHERE place=1';
			$res1 = mysqli_query($conn,$sql1);
		}
		if ($place==='2')
		{
			$sql2 = 'UPDATE `available` SET `place`=' .$place. ',`available_slot`='. $available_slot. ',`time`=now() WHERE place=2';
			$res1 = mysqli_query($conn,$sql2);
		}
?>	
