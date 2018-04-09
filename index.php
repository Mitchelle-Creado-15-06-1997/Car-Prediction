<!DOCTYPE HTML>
<!--
	Visualize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Visualize by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body style="color: white">
<?php
require('header.php');


?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="avatar">

		<?php
require('config.php');
$query = "SELECT id,name,code,image,price,sale,average,yearlaunch,path from car order by average DESC";
$response = mysqli_query($con,$query);

$query1 = "SELECT id,name,code,image,price,sale,average,yearlaunch,path from car  LIMIT 1";
$response1 = mysqli_query($con,$query1);
if ($response1) {
	 while($row=mysqli_fetch_array($response1))
  {
$path = $row['image'];
     $name = $row['name'];
     $code = $row['code'];


							echo'<img class="rounded-circle " src =" '.$row['image'].' " width="200px" height="200px"/>';
}}
?>

							</span>
						<h1>MARS<br>Predicting the future </h1>
						<ul class="icons">
							<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
							<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
					</header>

				<!-- Main -->
					<section id="main">
						
<!-- <center><a href="compare.php"><button>Compare Newly Added</button></a></center>
<br><br><br> -->
						
							<center><section class="thumbnails" style="width: 2000px; height:40000px ;padding-left: 180px">
								<div>
									<?php

$query = "SELECT id,name,code,image,price,sale,average,yearlaunch,path from car LIMIT 10  ";
$response = mysqli_query($con,$query);

// $query1 = "SELECT id,name,code,image,price,sale,average,yearlaunch,path from car order by YEAR(yearlaunch) DESC ,Month(yearlaunch) DESC,date(yearlaunch) DESC LIMIT 1";
$query1 = "SELECT id,name,code,image,price,sale,average,yearlaunch,path from car LIMIT 10";
$response1 = mysqli_query($con,$query1);
if ($response1) {
	 while($row=mysqli_fetch_array($response1))
  {
$path = $row['image'];
     $name = $row['name'];
     $code = $row['code'];

	// echo'<a href="'.$row['image'].'">';
	// 									echo '<button>FIND OUT THE BEST</button>';
	// 									echo"<h3><BR>Name:&nbsp".$row['name']."</h3>";
	// 									//echo"<h3>Code:&nbsp".$row['code']."</h3>";
	// 								echo"</a>";
								}
  // echo "<table>
  // <tr><td><u>  name</u> </td>
  // <td> <u> spec</u> </td>
  // <td><u> age</u> </td>
  // </tr>";

  while($row=mysqli_fetch_array($response))
  {
$path = $row['image'];
     $name = $row['name'];

									echo'<a href="'.$row['image'].'">';
										echo '<img class="rounded-circle " src =" '.$row['image'].' " width="200px" height="400px"/>';
										echo"<h3 style='color:white'><BR>Name:&nbsp".$row['name']."</h3>";
										echo"<h3 style='color:white'>Price:&nbsp".$row['price']."</h3>";

										echo"<h6 style='color:white'>&nbspCode:&nbsp".$row['code']."&nbsp&nbsp&nbsp&nbsp&nbspSale:&nbsp".$row['sale']."&nbsp&nbsp&nbsp&nbsp&nbspAverage:&nbsp".$row['average']."&nbsp&nbsp&nbsp&nbsp&nbspyearlaunch:&nbsp".$row['yearlaunch']."</h6>";
										

									echo"</a>";
								}
							}
									
									$query =  "SELECT * from car";
$queryl = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($queryl))
 {
  $path = $row['image'];
 // header('content-Disposition; attachment; filename = '.$path.'');
 // header('content-type;application/octest-stress');
 // header('content-length=' .filesize($path));
 // readfile($path);
  # code...
}

					?>
								</div>
							</section></center>

					</section>
					
				<section class="thumbnails">	


</section>

				<!-- Footer -->


					<?php
require('Footer.php');
					?>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>