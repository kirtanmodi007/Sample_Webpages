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
		$u_name = $_GET['u_name'];
		$u_email = $_GET['u_email'];
		$car_num = $_GET['car_num'];
		$ariv_time = $_GET['ariv_time'];
		$dep_time = $_GET['dep_time'];
		$book_time = $_GET['book_time'];
		
		
		$sql1 = 'INSERT INTO parking(User_name,Email,Car_Number,Arrival_Time,Departure_Time,Book_Time) VALUES (' .$u_name. ', ' .$u_email. ', ' .$car_num. ', now(), now(), ' .$book_time. ')';
		$res1 = mysqli_query($conn,$sql1);
?>	
