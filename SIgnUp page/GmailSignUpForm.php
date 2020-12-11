<!-- Making a Replica of GMAIL SIGN UP FORM -->
<?php error_reporting(0);

 include_once("../HomePage/Menu.php");

/*
    This one is from previos file which I working correctly, I am trying to do differently for DMSD project. So, the after comment code may not work properly

//$conn = mysqli_connect("localhost","root","kirtan007","formvalidation");
*/

//This connection I am trying for DMSD Project for TIJN Application

 $conn = mysqli_connect("localhost","root","","formvalidation");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Making Gmail SignUp Form </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!--<script type="text/javascript" src="/test/wp-content/themes/child/script/jquery.jcarousel.min.js"></script>-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js" type="text/javascript" charset="utf-8" async defer></script>


 

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

   <!--External Script File -->
  <script src="GmailSignUpForm.js" type="text/javascript" charset="utf-8" async defer></script>

  

  <!-- External CSS File -->
  <link rel="stylesheet" type="text/css" href="GmailSignUpForm.css">

  <!-- External CSS File -->
  <link rel="stylesheet" type="text/css" href="GmailSignUpFormForDesktop.css">


  <!-- Navigation bar's External File -->
  <link rel="stylesheet" type="text/css" href="../HomePage/HomePage.css">

  <!-- Captcha script -->
  <script src="CaptchaandUserName.js" type="text/javascript" charset="utf-8" async defer></script>
 <script type="text/javascript">
                 function Captcha()
                 {
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code;
                  }
                  function ValidCaptcha()
                  {
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      
                      if (string1 == string2)
                      {

                        return true;
                      }
                      else
                      {  
                      
                        document.getElementById("captchaError").style.color="red";    
                        document.getElementById("captchaError").innerHTML="The Captcha You have enterted is wrong";

                        event.preventDefault();

                      }
                  }
                  function removeSpaces(string)
                  {
                    return string.split(' ').join('');
                  }

function checkname()
{
    var name=document.getElementById("UserName").value;

    if(name)
    {
        $.ajax({
        type:'POST',
        url:'xyz.php',
        data:
        {
            UserName:name,
        },

        success: function (response)
        {
            $("#blabla").html(response);

            if(response=="OK")
            {
              $('#regis').prop("disabled",false);
              return true;
            }

            else
            {
              //event.preventDefault();
              $('#regis').prop("disabled",true);
              
              //return false;
            }
        }
})    
}

else
{
    $( '#name_status' ).html("");
           return false;
}
} 


function checkUserName()
{
   var y=document.getElementById("password").value;

    var str = document.getElementById("UserName").value;
    var n = y.search(str);
 

    

  if(n>=0)
  {
    document.getElementById("passwordError").style.color="red";
    document.getElementById("passwordError").innerHTML="Please don't use password and username same";
  }

  else
  {
    document.getElementById("passwordError").innerHTML="";
  }
  //var y = x.search(x);
}

/*function myfunction()
{
  alert("I am here");
  document.getElementById("UserName").readOnly = true;
}*/
             </script>



</head>

 <body onload="Captcha()">
<!--<body>-->
<?php


//OLD QUERY which I working
//$query7 = "SELECT UserName,password FROM username WHERE UserId=".$_GET["UserId"];
$query7 = "SELECT UserName,password FROM username WHERE UserName=".$_GET["UserName"];


//Trying to implement new query for our TIJN account


/*list($year, $month, $day) = explode("-", $Birthday);

echo "year = ".$year."<br>";
echo "month = ".$month."<br>";
echo "day = ".$day."<br>";*/
$result=mysqli_query($conn,$query7);

$row = mysqli_fetch_assoc($result);
/*if(isset($_POST['UserId']))
{
  $UserId = $_POST['UserId'];

  $query3 = "UPDATE username SET FirstName='".$FirstName."',LastName='".$LastName."',UserName='".$UserName."',password='".$password."',password_confirm='".$password_confirm."',month='".$month."',date='".$date."',year='".$year."',Gender='".$Gender."' WHERE $UserId=".$_POST['UserId']."";
}
  */
  
    
  

?>

<!--<nav class="navbar navbar-default">
<div class="container-fluid">
<a href="https://www.google.co.in/" title="google">
<img src="google.jpg" height="72" width="112" alt="GoogleLogo">
</a>
 <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span>Log in</span></a></li>
 </ul>
</div>
</nav>-->


<div class="container-fluid position">
<form id="MainForm" role="form" method="POST" action="BasicInformation.php" class = "bs-example bs-example-form"accept-charset="utf-8">

<!--<div class="fieldset1">-->


	

<!--<div class="tabStyle">-->
<fieldset class="col-md-6 formstyle">
<h1 class="GoogleTitle">Create your TIJN Account</h1>

 <!--<ul class="nav nav-pills nav-justified">
    <li class="active"><a href="#">Signup</a></li>
    <li><a href="#">Login</a></li>
  </ul>-->

  <h2 style="text-align: center">Sign up for free</h2>


  <!--<ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>-->


<!--</div>-->

<!--<div class="legend">
	<legend> SignUp </legend>
</div>-->




  
  <!--<div class = "input-group">-->
  <label><strong style="font-size: 20px;">Choose your username</strong></label>
<br>  
<div class="form-group row">
<div class="col-md-12">
         <input type = "text" class="form-control" <?php if($row['UserName'] != null && $row['UserName'] !="" ) { echo "disabled=\"disabled\""; } ;?> name="UserName" value="<?php echo $row['UserName'];?>" id="UserName" placeholder="username"><br>
         <!--<span class="input-group-addon mywidth1">@gmail.com</span>-->
         <!--<span class = "input-group-addon mywidth1">@gmail.com</span>-->
         
         <span id="blabla"></span>
      </div>
      </div>
      <!--</div>-->

  
    <label><strong style="font-size: 20px;">Create a password:</strong></label>

    <div class="form-group row">
    <div class="col-md-12">

    <p><input type="password" name="password" id="password" value="<?php echo $row['password'];?>" class="form-control" onchange="checkUserName()" placeholder="*******"> </p>
    <span id="passwordError"></span>
  </div>
      
    </div>
    
<label><strong style="font-size: 20px;">Confirm your password:</strong></label>
  <div class="form-group row">
  <div class="col-md-12">
    
    <p><input type="password" name="password_confirm" value="<?php echo $row['password_confirm'];?>" id="password_confirm" class="form-control" placeholder="*******"> </p>
  </div>
    
  </div>  

  


        
      

<!--<div class="form-group">
      <label class="radio-inline" style="font-size: 20px;"><input type="radio" name="Gender" value="Female" class="form-control"/>Female</label>
</div> -->

      <!--<img src="CAPTCHA.jpg" width="150px" height="100px" 
id="captchaimg" ><br>
<label for="message">Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>

<br/>How much is: <input type="text" id="a"/ disabled>
<br/>Answer:<input type="text" id="b"/>-->





<div class="form-group">
  <!--<button type="submit" name="submit" class="btn btn-primary form-control" style="font-size: 20px;">Get Started </button>-->

  <input type="submit" class="btn btn-primary form-control" id="regis" name="submit" value="submit" onsubmit="return checkname();">
</div>

</fieldset>



</div>

	
 

</form>



</body>



</html>





