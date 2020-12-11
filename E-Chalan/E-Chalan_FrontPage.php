
<?php
echo "Testing"
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
  <link href="css/sb-admin.css" rel="stylesheet">
  <style>
    body {
    /*background-image: url("bg1.jpeg");*/
    background: linear-gradient(0deg, #ff6a00 0%, #ee0979 100%);
    background-repeat: no-repeat;
    background-size:2000px;
}
div.logo {
  margin-left: 20px;
  margin-top: 20px;

}

.container{
  opacity: 1;
  }
  </style>

</head>

<body class="bg-dark">
 <!--nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Aimbys Solution</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <!a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav-->
<!--br-->
<div class="logo" class="col-xs-4 col-xs-offset-1">
  <!--img src="about-img.jpg"  style=" width: 40px;height: 40px"class="img-responsive" alt="Responsive image"--><span style="color:white;font-size: 20px;margin-left: 10px; ">E-Chalan Ahmedabad</span>
</div>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Enter Your Vehicle Number</div>
      <div class="card-body">
        <form method="POST" action="login.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="email" value="<?php error_reporting(0); echo $_POST['email'];?>" type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" style="margin-bottom: 15px" required>
            <span class="form-check-label">
                <!-- PHP script to validate user -->
                <?php 
                    error_reporting(0);
                    include('connection.php');
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $password = md5($password);

            if(isset($_POST['submit']))
              {
      
                    $sql = "SELECT * FROM reg_data WHERE Email = '$email' AND Password = '$password' ";
                    $result = mysqli_query($connect,$sql);
                    $count = mysqli_num_rows($result);
                if($count == 1)
                  {
                    session_start();  // session starts
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['name'] = $row['Firstname']; //intiaising a session variable when email and password verified
                    $_SESSION['role'] = $row['Role_id']; //session variable for role type
                    $_SESSION['email'] = $row['Email'];
                    $role_type = $row['Role_id'];
                  //  echo $role_type;
                      if($role_type == 1)
                        {
                          header('location:Admin/dashboard.php');
                        }
                      if($role_type == 2)
                        {
                          header('location:employee/employeedashboard.php');
                        }
                     if($role_type == 3)
                        {
                          header('location:User/userdashboard.php');
                        }
                  }
                  else  echo "<h6 style='color:red;margin-left:-18px;'>&nbsp &nbsp Username or Password is wrong</h6>"; 
              }  
//end of script   ?>
            </span>
          </div>
          
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>

          

       </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>