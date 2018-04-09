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

				<div class="limiter">

		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

			<div class="wrap-login100">

				<form class="login100-form validate-form" method="POST" action="contact.php">


					<span class="login100-form-title p-b-34 p-t-27">
						Contact Form
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="name" placeholder="name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter message">
						<input class="input100" type="text" name="message" placeholder="message">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					

					

					<div class="container-login100-form-btn">
						 <center> <input id="button" type="submit" name="submit" value="submit"></center>
						
					</div>
					
						
					

					
				</form>
			</div>
		</div>
	</div>
	

			</div>
		</div>
	</div>
	<?php



if (isset($_POST['submit']))
{
  
  include('config.php');
  $name = $_POST['name'];
  $email = $_POST['email'];
 // $stars= $_POST['stars'];
  $message = $_POST['message'];
 
  $query = "INSERT INTO comment (name,email,message) VALUES ('$name','$email','$message')";
  $data = mysqli_query($con , $query) or die (mysqli_error($con));
  if($data)
  {
    echo "<script type='text/javascript'>alert('Thank you for the review')</script>";
}
}

?>




	<div id="dropDownSelect1"></div>

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