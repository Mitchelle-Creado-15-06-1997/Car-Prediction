<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<?php
		include('header.php');
	?>
	
	<div class="limiter">

		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

			<div class="wrap-login100">

				<form class="login100-form validate-form" method="POST" action="login.php">


					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					

					<div class="container-login100-form-btn">
						 <center> <input id="button" type="submit" name="submit" value="submit" style="padding: 20px;"></center>
						
					</div>
					
						
					

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $email=$_POST['email'];
$pass=$_POST['pass'];

                   if(isset($_POST['submit'])) 
                    { 
                      SignIn($con);
                    }
                    mysqli_close($con);
                    }

    function SignIn($con)
    { 
       
      //starting the session for user profile page
       if(!empty($_POST['email']) && !empty($_POST['pass']))
        //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
        { 

             $email2="marsEmployee@gmail.com";
          $pass2="marsE";
          if( $_POST['email']==$email2 &&  $_POST['pass']=$pass2)
           { 

           //	header("Location: employee.php");
           	echo "<script type='text/javascript'>window.location.href = 'employee.php';</script>";
       // exit();
           
                            echo "<script type='text/javascript'>alert('SUCCESSFULLY LOGIN TO EMPLOYEE PAGE...')</script>";

             //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
            
             } 
             $email="marsAdmin@gmail.com";
          $pass="marsA";
          if( $_POST['email']==$email &&  $_POST['pass']=$pass)
           { 

           //	header("Location: employee.php");
           	echo "<script type='text/javascript'>window.location.href = 'Admin.php';</script>";
       // exit();
           
                            echo "<script type='text/javascript'>alert('SUCCESSFULLY LOGIN TO EMPLOYEE PAGE...')</script>";

             //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
            
             } 
             $email3="marsManager@gmail.com";
          $pass3="marsM";
          if( $_POST['email']==$email3 &&  $_POST['pass']=$pass3)
           { 

           //	header("Location: employee.php");
           	echo "<script type='text/javascript'>window.location.href = 'manager.php';</script>";
       // exit();
           
                            echo "<script type='text/javascript'>alert('SUCCESSFULLY LOGIN TO EMPLOYEE PAGE...')</script>";
                           // alert('SUCCESSFULLY LOGIN TO EMPLOYEE PAGE...');
                            echo "SUCCESSFULLY LOGIN TO EMPLOYEE PAGE";

             //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
            
             } 
             else
             {

             	echo "<script type='text/javascript'>window.location.href = 'in.php';</script>";
       // exit();
                            echo "Invalid Username or Password";

              // header('Location: index.php');
             }
             
                 }
                  }

    // $con = new mysqli("localhost","root","MARSrover4$","doctor");

    // if(isset($_POST['submit'])){
    //     $email = $_POST['email'];
    //     $pass = $_POST['pass'];

    //     $sql = "SELECT email,pass FROM doctor WHERE email=$email AND pass=$pass";

    //     $result = $con->query($sql);

    //     if($result->num_rows === 0 || empty($_POST['email']) || empty($_POST['pass'])){
    //       echo "<script type='text/javascript'>alert('Invalid email or password')</script>";
    //      // echo "Invalid email or password";
    //     }

    //     else{
    //       header("location: doctor.html");
    //     }
    // }

                     ?>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<?php
include("footer.php");
?>

</body>
</html>