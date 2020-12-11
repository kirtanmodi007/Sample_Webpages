<?php error_reporting(0);
include_once("../HomePage/Menu.php");
$conn = mysqli_connect("localhost","root","","formvalidation");

?>

<?php

echo "We are about to insert the data";
$UserName = $_POST['UserName'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

  $sql = "INSERT INTO username(UserName,password,password_confirm) VALUES('$UserName', '$password', '$password_confirm') ";  
  if ($conn -> query($sql) === TRUE) 
  {  
  	echo "record created successfully";
  } 
  else  
  {  
  	echo "Error: ".$sql.  
  	"<br>".$conn -> error;  
  }  
  $conn -> close();  

/*

   	$query1 = "INSERT INTO username(UserName,password,password_confirm,) VALUES('".$UserName."','".$password."','".$password_confirm."')";

   	echo "This one is usr entered"; 
  	echo '<pre>',print_r($query1),'</pre>';

    $qww=mysqli_query($conn,$query1);
 
    //echo '<pre>',print_r($qww),'</pre>';

      if($qww>0)
        {
      		echo "your record is saved";
      	}

      else
        {
        	echo mysqli_connect_error();
        }

*/   
 ?>   



<!-- This is the PHP code with Mysql query to sort the table by ascending or descending order
     Here we have created seprated buttons for Ascending and descending,So whenever we click on the either
     of the button the isset function will be checked and the sorting will be done -->


     <!DOCTYPE html>
     <html>
     <head>
     	<title></title>



     	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
     	<script src="CaptchaandUserName.js" type="text/javascript" charset="utf-8" async defer></script>

     	<!-- Navigation bar's External File -->
     	<link rel="stylesheet" type="text/css" href="../HomePage/HomePage.css">
     	<link rel="stylesheet" type="text/css" href="TableStyle.css">
     	<style>
     	body
     	{
     		background-image:url('background1.jpg');
     	}	
     </style>
 </head>
 <body>
 	<h1>Welcome: <?php echo $login_Session; ?></h1>
 	<h1><a href="logout.php">Logout</a></h1>


 	<!--<script type="text/javascript" src="/path/to/jquery-latest.js"></script> -->
 	<!--<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>-->
 	<!--<script type="text/javascript" src="/path/to/jquery.tablesorter.js"></script>-->
 	<!--<script src="http://tablesorter.com/addons/pager/jquery.tablesorter.js" type="text/javascript" charset="utf-8" async defer></script>-->
 	<!--<script src="http://tablesorter.com/addons/pager/jquery.tablesorter.pager.js" type="text/javascript" charset="utf-8" async defer></script>-->

<!--<script type="text/javascript" src="http://tablesorter.com/addons/pager/jquery.tablesorter.pager.js"></script>
<script src="SOrting.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="latest.js" type="text/javascript" charset="utf-8" async defer></script>-->



<?php echo "123";
//here we are gonna grab all the data which we have stored into MySQL workbench back into our php page

//$conn = mysqli_connect("localhost","root","kirtan007","formvalidation");

//$query = "SELECT * from username";
//$query = "SELECT * FROM username";


//$query1 = mysqli_query($conn,$query); 

//$count= mysqli_num_rows($query1);
?>

<form action="BasicInformation.php" method="POST">
	<!--<input type="submit" name="DESC" value="Descending">
		<input type="submit" name="ASC" value="Ascending">-->



		<?php
		/*So as we need to sort the tables based on column filed name. we have to pass the field name in url.
		we sort table values both ascending and descending. So we need to also pass order types in url. By default, table values displays in ascending. We can fixed order types and also field name.*/

//This are the by default value for the table,So bydefault the table will be in ascending order of UserId

		if($_GET['field']!= '')
		{
			$field=$_GET['field'];
		}
		else
		{
			$field='UserName';	
		}



		$sort='ASC';

		if(isset($_GET['sorting']))
		{
			if($_GET['sorting']=='ASC')
			{
				$sort='DESC';
			}
			else
			{
				$sort='ASC';
			}
		}

/*if(isset($_GET['UserId']))
{
	echo $query2 = "DELETE FROM username WHERE UserId=".$_GET['UserId'];
	$result=mysqli_query($conn,$query2);
}*/


//$conn = mysqli_connect("localhost","root","kirtan007","formvalidation"); 





$query = "SELECT * FROM username ORDER BY $field $sort";
echo $query;
$result = mysqli_query($conn,$query);


?>
<div class="container">
	
	<div class="table-responsive">
		<table class="table">
			<thread>
				<tr>
					<th><a href="BasicInformation.php?sorting=<?php echo $sort; ?>&field=UserName"><p style="color:white;">UserName</p></a></th>
					<!--<th><a href="BasicInformation.php?sorting=".$sort."&field=UserName">UserName</a></th>-->
			<!--<th>UserId</th>
			"<th> <a href='BasicInformation.php'>FirstName</a></th>";
			//echo    "<th><input type="submit" name="DESC" value="FirstName"></th>";
			//echo "<th><a href='BasicInformation.php'>FirstName</a></th>";
			
			<th>FirstName</th>
			<th>LastName</th>
			<th>UserName</th>-->
			<th>password</th>
			<th>password_confirm</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
	</thread>


<!-- Here we will write the PHP code with MySQL query to sort the table ascendingly and descedingly
	So, Firstly we will connect the file with MySQL database -->
	<?php



	$count= mysqli_num_rows($result);
	echo $count;
	$j=0;
	while($j<$count)
	{
		$row=mysqli_fetch_assoc($result);	
		echo "<tr>";
		echo "<td>".$row[UserName]."</td>";
		echo "<td>".$row[password]."</td>";
		echo "<td>".$row[password_confirm]."</td>";
		echo "<td><a href='BasicInformation.php?UserName=".$row[UserName]."'</a>Delete</td>";
		echo "<td><a href='GmailSignUpForm.php?UserName=".$row[UserName]."' onclick='myfunction();'</a>Update</td>";
		echo "</tr>";

		$j++;
	}
	?>

</table>
</div>
</div>
</form>
</body>
</html>