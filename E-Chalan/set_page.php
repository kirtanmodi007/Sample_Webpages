<?php

session_start();

$_SESSION['Number'] = $Number;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="sb-admin.css" rel="stylesheet">


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <style>
    body 
    {
    background-image: url("Tholo.jpg");
    /*background: linear-gradient(0deg, #ff6a00 0%, #ee0979 100%);*/
    background-repeat: no-repeat;
    background-size:1500px;
    opacity: 1;
	}
	div.logo
	{
  	margin-left: 20px;
  	margin-top: 20px;
  	}

	.container
	{
  	opacity: 1;
  	}
  </style>

</head>

<body class="bg-dark">

<div class="logo" class="col-xs-4 col-xs-offset-1">
<img src="TrafficLogo.png"  style=" width: 100px;height: 100px"class="img-responsive" alt="Responsive image">
  <span style="color:white;font-size: 50px;margin-left: 10px; ">E-Chalan</span>
</div>
  <div class="container">
   <h1 style="color:white"> Welcome to Ahmedabad Traffic Police, Challan payment system</h1>
    <h3 style="color:lightgray"> Protection and safety of the citizens of Ahmedabad having population about more than 60 lakh is the prime responsibility of Ahmedabad City Police Force.</h3>
    <div class="card card-login mx-auto mt-5">

      <div class="card-header">Please inter your Vehicle Number</div>
      <div class="card-body">
        <form method="GET" action="get_reg.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Vehicle Number</label>
            <input class="form-control" name="Number" value="" aria-describedby="emailHelp" placeholder="GJJ013994" required>
          </div>
          
          
          
          <button type="submit" name="submit" class="btn btn-primary btn-block">Lets Check</button>
        

       </form>
       
      </div>
    </div>
  </div>
  
</body>

</html>




<!--<form method="get" action="get_reg.php">
    <input type="text" name="Number" value="">
    <input type="submit">
</form>-->