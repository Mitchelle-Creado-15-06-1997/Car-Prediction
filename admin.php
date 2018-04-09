<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Automobile Sales Prediction</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body >
    <?php
require('header.php');
    ?>

    <!-- Navigation -->
   




<!-- delete
 -->  



   <!-- Page Header -->
    
    <!-- Main Content -->
   <div class="container">
    <div class="section-title text-center center">
      <h2> Upload Car</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>

        </li>
      </ul>
      <div class="clearfix"></div>
    </div></div>
    
 <div class="col-md-12 ">
 <div align="center">
    <center>  <form name="sentMessage" id="contactForm" novalidate method="post" action="admin.php">
        
          
            <div class="form-group">
              <input type="text" id="name" class="form-control" style="width:350px;" placeholder="Name"  name="name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          
            <div class="form-group">
              <input type="text" id="code" class="form-control" style="width:350px;" placeholder="code" name="code" required="required">
              <p class="help-block text-danger"></p>
            </div>
         
    
        <div class="form-group">
          <input name="price" id="message" style="width:350px;" class="form-control" rows="1" placeholder="price" required>
          <p class="help-block text-danger"></p>
        </div>
    
    
        <div class="form-group">
          <input name="sale" id="message" class="form-control" style="width:350px;" class="form-control" rows="1" placeholder="sale" required>
          <p class="help-block text-danger"></p>
        </div>
  
    
        <div class="form-group">
          <input name="average" id="message" style="width:350px;" class="form-control" rows="1" placeholder="average" required>
          <p class="help-block text-danger"></p>
        
    
        <div class="form-group">
          <input name="yearlaunch" id="message" style="width:350px;" class="form-control" rows="1" placeholder="year of launch" required>
          <p class="help-block text-danger"></p>
        </div>
    <div class="form-group">
          <input name="pin" id="message" style="width:350px;" class="form-control" rows="1" placeholder="pin" required>
          <p class="help-block text-danger"></p>
        </div>
  
    
    <center>
    <div align="center">
                                    upload: <input type="file" name="file" id="file" size="80">
       <!--  name:<input type="text" name="image"> -->
        <!--  <button class="btn btn-primary" type="submit" style=" font-size: 20px; text-align: center; padding-right: 30px;" id="submit" name="button">send</button> -->
                                </center>
                <div style="margin-top:10px; text-align: center;" class="form-group">
                                    <!-- Button -->

                                    <div class="col-lg-12 controls">
                                    
                                     <BUTTON class="btn btn-inverse" type="submit" style=" font-size: 20px; text-align: center; padding-right: 30px;" id="submit" name="submit"> Upload</BUTTON><br><br>

                                      
                                    </div>
                                </div>
    
  <input name="code1" id="id" style="width:350px;" class="form-control" rows="1" placeholder="code" required>
          <p class="help-block text-danger"></p></div> 
            <div class="form-group">
          <input name="pin1" id="message" style="width:350px;" class="form-control" rows="1" placeholder="pin" required>
          <p class="help-block text-danger"></p>
        </div>
 <BUTTON class="btn btn-inverse" type="submit" style=" font-size: 20px; text-align: center; padding-right: 30px;" id="delete" name="delete"> delete</BUTTON> <br><br>
                               
                            </form>  </center>   

    </div>
                
        </div> 

                        </div>                     
                    </div>
                    <div class="col-md-12"><div align="center">
<div class="form-group">
          

 </div></div>
        </center></div>
       
               
           


    <hr>
<?php

//require('config.php');
if (isset($_POST['delete']))
{
  include('config.php');
  
    $pin1 = $_POST['pin1'];
    $pinValid= "abcde";

 $code = $_POST['code1'];
  if($pin1 == $pinValid)
 {
  $query1 = "DELETE FROM car where code=$code";
  $data1 = mysqli_query($con , $query1) or die (mysqli_error($con));
  if($data1)
  {
    echo "<script type='text/javascript'>alert('your car has been deleted')</script>";
  }
}
else
{
  echo "<script type='text/javascript'>alert('your entered a wrong pin')</script>";
}

}

if (isset($_POST['submit']))
{include('config.php');
 //$dat = $_POST['file'];
 // $dest= "./uploads";
 // move_uploaded_file($dat);
  $name = $_POST['name'];
  $code = $_POST['code'];
  $price = $_POST['price'];
  $sale = $_POST['sale'];
  $average = $_POST['average'];
  $yearlaunch = $_POST['yearlaunch'];
    $pin = $_POST['pin'];
    $pinValid= "abcd";
  //$fname = $_FILES["file"];
 $dat = "uploads/".$_POST["file"];
  move_uploaded_file($dat);

  
 if($pin == $pinValid)
 {
  $query = "INSERT INTO car (name,code,image,price,sale,average,yearlaunch) VALUES ('$name','$code','$dat','$price','$sale','$average','$yearlaunch')";
  $data = mysqli_query($con , $query) or die (mysqli_error($con));


  
  
  // if (queryl==true) {
  //   echo "insert data";
  //   # code...
  // }
}

  if($data)
  {
    echo "<script type='text/javascript'>alert('your car has been uploaded')</script>";
  }



else
{
  echo "<script type='text/javascript'>alert('your entered a wrong pin')</script>";
}
}

?>



  <?php
  require('config.php');

$query = "SELECT name,email,message from comment";
$response = mysqli_query($con,$query);

$query1 = "SELECT id,name,code,image,price,sale,average,yearlaunch,path from car order by YEAR(yearlaunch) DESC ,Month(yearlaunch) DESC,date(yearlaunch) DESC LIMIT 1";
$response1 = mysqli_query($con,$query1);
if ($response1) {
   while($row=mysqli_fetch_array($response1))
  {
$path = $row['image'];
     $name = $row['name'];
     $code = $row['code'];

  // echo'<a href="'.$row['image'].'">';
  //                  echo '<button>FIND OUT THE BEST</button>';
  //                  echo"<h3><BR>Name:&nbsp".$row['name']."</h3>";
  //                  //echo"<h3>Code:&nbsp".$row['code']."</h3>";
  //                echo"</a>";
                }
  // echo "<table>
  // <tr><td><u>  name</u> </td>
  // <td> <u> spec</u> </td>
  // <td><u> age</u> </td>
  // </tr>";

  while($row=mysqli_fetch_array($response))
  {


                 
                   echo "<center>";
                    echo"<h3 style='color:white'><BR>Name:&nbsp".$row['name']."</h3>";
                    echo"<h3 style='color:white'>Email:&nbsp".$row['email']."</h3>";
                    
                    echo"<h3 style='color:white'>Message:&nbsp".$row['message']."</h3>";
                  echo"</a><hr><hr>";
                  echo"</center>";
                }

              }
                  
                 

          ?>



    <!-- Footer -->
    <?php
require('Footer.php');
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
