<?php
$conn = new mysqli('localhost','root','kirtan007','parking');
if ($conn->connect_error)
{
	die("connect_error:" . $conn->connect_error);
}

$result = $conn->query("SELECT firstName from parkinguser");
if ($result->num_rows>0) 
{
	while ($row = $result->fetch_assoc()) 
	{
		echo $row['firstName'] . '<br>';
	}
}


?>