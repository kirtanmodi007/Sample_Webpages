<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";
?>

<html>


<head>
<style>
	table {
    border-collapse: collapse;
    width: 100%;
	}

	th, td {
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even){background-color: #e5f2e5}
	tr:nth-child(odd){background-color: #dddddd	}	
</style>

<head>
  <title>Smart parking</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  
  
</head>
  

<style>
	table
	{
	border-style:solid;
	border-width:2px;
	border-color:brown;
	}
</style>

</head>


<body>

	<br /><br />
	<div class="col-sm-6 text-center">
	<h2 align="center">Parking History</h2>
	<br />
	<div id="chart"></div>
	</div>
	
	<?php
		$con = new mysqli("localhost", "root", "", "student");
		
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		 
		$result = mysqli_query($con,"SELECT slot,status,time FROM status ORDER BY time DESC");
		$result1 = mysqli_query($con,"SELECT * FROM status WHERE slot=1 ORDER BY time DESC LIMIT 1");
		$result2 = mysqli_query($con,"SELECT * FROM status WHERE slot=2 ORDER BY time DESC LIMIT 1");
		
		echo "<br>";
		
		echo "<table border='1'>
		<tr>
		<th>Slot</th>
		<th>Status</th>
		<th>Time</th>
		</tr>";
		 
		while($row = mysqli_fetch_assoc($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['slot'] . "</td>";
		  echo "<td>" . $row['status'] . "</td>";
		  echo "<td>" . $row['time'] . "</td>";
		  echo "</tr>";
		  }
		 
		echo "</table>";
		
		while($row1 = mysqli_fetch_assoc($result1))
		  {
		   echo $row1['slot'] . ', ' . $row1['status'] . ', ' . $row1['time'];
		  }
		  echo "<br>";
		  while($row2 = mysqli_fetch_assoc($result2))
		  {
		   echo $row2['slot'] . ', ' . $row2['status'] . ', ' . $row2['time'];
		  }
		
	?>
</body>
</html>

<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'time',
 ykeys:['temperature_data'],
 labels:['Temperature'],
 hideHover:'auto',
 stacked:true
});

</script>