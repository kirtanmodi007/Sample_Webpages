<?php

$conn = mysqli_connect("localhost","root","","formvalidation");

//$query = "SELECT * FROM formvalidation.username";
//mysqli_query("$conn","query");

if(isset($_POST['UserName']))
{
	$UserName=$_POST['UserName'];

	$query = "SELECT UserName FROM username where UserName='$UserName'";

	$query1=mysqli_query($conn,$query);

	if(mysqli_num_rows($query1)>0)
	{
	echo "User Name Already Exist";
	}
	else
	{
	echo "OK";
	}
exit();
}


?>