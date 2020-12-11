
<?php

session_start();

$NumberValue = $_GET['Number'];

echo "Your registration is: ".$NumberValue.".";



?>

<!DOCTYPE html>
<html>
<head>
	<title>Your E-Chalan</title>

<link href="TableStyle.css" rel="stylesheet">
</head>
<body>

<?php
$conn = new mysqli('localhost','root','kirtanmodi007','numberplate');
if ($conn->connect_error)
{
	die("connect_error:" . $conn->connect_error);
}

$result = $conn->query("SELECT * from numberplate WHERE number = '$NumberValue'");
if ($result->num_rows>0) 
{
	$row = mysqli_fetch_assoc($result);
		echo "Data Exists";
		echo "<table border='1'>
		<tr>
		<th>Number</th>
		<th>Time</th>
		<th>Name</th>
		<th>Fine</th>
		<th>Email</th>
		<th> Your Photo </th>
		
		</tr>";
	 
	
		echo "<tr>";
		echo "<td>" .$NumberValue. "</td>";
		echo "<td>"  .$row["time"].  "</td>";
		echo "<td>"  .$row["Name"].  "</td>";
		echo "<td>"  .$row["Fine"].  "</td>";
		echo "<td>"  .$row["email"].  "</td>";
		#echo "<td>"<img src='$abc.jpg' height='150px' width='300px'>"</td>";

		echo "</tr>";
		echo "</table>";

		$file = 'iin19.png';
        echo '<img src="'.$file.'"/>';
}

else
{
	echo "No such Number exists";
}


?>

</body>
</html>





<p><a href="set_page.php">Back to set_reg.php</a>