<?php  include_once("../HomePage/Menu.php"); ?>

<?php 

/*Here we include the login Script, Means we have to full fill the conditions written in this php file
  and it will include all text/code/markup written it in that file

  Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website*/ 
//include('login.php');
//With the help of include() we can have same header,footer for all pages

/*Here we are checking wether the session is already set/created or not,if it's already been cretead then
 re-direct to the loation*/ 
if(isset($_SESSION['login_user']))
{
  //Always Give Path Like this if your re-directing file is in another folder
  //header("location:../SIgnUp page/BasicInformation.php");
    header("location:../LogIn page/BasicInformation.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <!-- External js file to show active nav in navbar -->
  <script src="../HomePage/ActiveNav.js" type="text/javascript" charset="utf-8" async defer></script>
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <!--External css File for Styling NavBar -->
  <link rel="stylesheet" type="text/css" href="../HomePage/HomePage.css">

  

  <link rel="stylesheet" type="text/css" href="newform.css">
  <link rel="stylesheet" type="text/css" href="newformfordesktop.css">
  <link rel="stylesheet" type="text/css" href="newformfordesktopbetween800to1200.css">

</head>
<body>

<?php
echo "This is php";
 ?>
<div class="container">

<!--<div class="row">-->
<!--<div class="col-sm-12">-->
 
<fieldset class="col-md-6">
<!--<div class="row">
 
<div class="col-md-6">-->
<h1>Login</h1>  
<!--</div>

</div>-->
<form role="form" action="" method="POST">
<!--label>username</label-->
<div class="form-group">

<div class="row">

<div class="col-md-6">
<input type="text" class="form-control" name="UserName" placeholder="username">
</div>
  
</div>

</div>
<span><?php echo $UserNameError; ?></span>

<div class="form-group">

<div class="row">

<div class="col-md-6">
<input type="password" class="form-control" name="password" placeholder="*******" >
</div>  

</div>

</div>
<span><?php echo $passwordError; ?></span><br>

<!--<div class="form-group">
<button type="submit" class="btn btn-info form-control" name="login" >login</button>
</div>-->
<div class="form-group">
<div class="row">

<div class="col-md-6">
<input type="submit" class="btn btn-primary form-control" name="submit" value="Sign In"><br>
</div>
  
</div>
</div>
<span><?php echo $error; ?></span><br><br>

<p>Not Registered? <a href="http://localhost/example/SignUp page/GmailSignUpForm.php">Create an acoount</a></p>
</fieldset>
</form>
<!--</div>-->
</div>

</div>
</body>
</html>