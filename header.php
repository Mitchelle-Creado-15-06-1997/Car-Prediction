<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HEADER</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<style type="text/css">
	
</style>
<style type="text/css">
 
</style>


</head> 
<body ><div style="color: white"></div><center></center></div>

 <div class="parent2">
 
  <a href="login.php"><div class="test2"><i class="fa fa-sign-in fa-2x"></i></div></a>
  <a href="compare.php"><div class="test3"><i class="fa fa-code fa-2x"></i></div></a>
  <a href="contact.php"><div class="test4"><i class="fa fa-envelope-o fa-2x"></i></div></a>
  <a href="in.php"> <div class="test1"><i class="fa fa-home fa-2x"></i></div></a>
  <a href="#"><div class="test5"><i class="fa fa-bell"></i></div></a>
  <div class="mask2"><i class="fa fa-home fa-3x"></i></div>
  
</div>

<style type="text/css">
	body {

  background: -webkit-linear-gradient(90deg, 	#6495ED 10%, #9400D3 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, 	#6495ED 10%, #9400D3 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, 	#6495ED 10%, #9400D3 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, 	#6495ED 10%, #9400D3 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, 	#6495ED 10%, #9400D3 90%); /* W3C */
        
}

.parent2 {
  top:15px;
  left:15px;
  position:fixed;
 display:block;
  width:100px;
  height:100px;
  background-color:transparent;
  border-radius:50%;
  z-index:20;
  -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
}
.test1 {
  width:60%;
  height:60%;
  background-color:dimGray;
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
    top:25%;
  left:25%;
  z-index:19;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
    position:absolute;
}
.test2 {
  width:60%;
  height:60%;
  background-color:dimGray;
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
    top:25%;
  left:25%;
  z-index:19;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550) .2s;
}
.test3 {
  width:60%;
  height:60%;
  background-color:dimGray;
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
    top:25%;
  left:25%;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550) .4s;  
}
  .test4 {
  width:60%;
  height:60%;
  /*background-color:#8A2BE2;*/
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
  top:25%;
  left:25%;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550) .6s;  
}

.test5 {
  width:60%;
  height:60%;
  /*background-color:#8A2BE2;*/
  border-radius:50%;
  position:absolute;
  color:white;
  text-align:center;
  line-height:70px;
  top:25%;
  left:25%;
  transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550) .8s;  
}
.mask2 {
  top:15px;
  left:15px;
  width:100px;
  height:100px;
  background:darkSlateGray;
  border-radius:50%;
  position:absolute;
  z-index:21;
  color:white;
  text-align:center;
  line-height:120px;
  cursor:pointer;
  position:fixed;
}

</style>
 <script type="text/javascript">
 	$(document).ready(function() {

  var active1 = false;
  var active2 = false;
  var active3 = false;
  var active4 = false;

    $('.parent2').on('mousedown touchstart', function() {
    
    if (!active1) $(this).find('.test1').css({'background-color': 'gray', 'transform': 'translate(0px,125px)'});
    else $(this).find('.test1').css({'background-color': 'dimGray', 'transform': 'none'}); 
     if (!active2) $(this).find('.test2').css({'background-color': 'gray', 'transform': 'translate(60px,105px)'});
    else $(this).find('.test2').css({'background-color': 'darkGray', 'transform': 'none'});
      if (!active3) $(this).find('.test3').css({'background-color': 'gray', 'transform': 'translate(105px,60px)'});
    else $(this).find('.test3').css({'background-color': 'silver', 'transform': 'none'});
      if (!active4) $(this).find('.test4').css({'background-color': 'gray', 'transform': 'translate(125px,0px)'});
    else $(this).find('.test4').css({'background-color': 'silver', 'transform': 'none'});
    active1 = !active1;
    active2 = !active2;
    active3 = !active3;
    active4 = !active4;
      
    });
});
 </script>
</body>
</html>                                                        