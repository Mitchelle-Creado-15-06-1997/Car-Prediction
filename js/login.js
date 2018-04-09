$(document).ready(function(){
 $('#login').click(function(){
  var username = $('#username').val();
  var password = $('#password').val();
  if($.trim(username).length > 0 && $.trim(password).length > 0)
  {
   $.ajax({
    url:"login.php",
    method:"POST",
    data:{username:username, password:password},
    cache:false,
    beforeSend:function(){
     $('#login').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {
      $("body").load("AfterLogin.php").hide().fadeIn(1500);
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      //$("#box").effect("shake", options, 800);
      $('#login').val("Login");
      $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
       
     }
    }
   });
  }
  else
  {
 $('#error').html("<span class='text-danger'>Entry Missing ! Please Enter A Valid Entry</span>");
  }
 });
});
//second button
$(document).ready(function(){
 $('#loginAdmin').click(function(){
  var username = $('#username').val();
  var password = $('#password').val();
  if($.trim(username).length > 0 && $.trim(password).length > 0)
  {
   $.ajax({
    url:"login.php",
    method:"POST",
    data:{username:username, password:password},
    cache:false,
    beforeSend:function(){
     $('#login').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {
      $("body").load("AfterLogin.php").hide().fadeIn(1500);
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      //$("#box").effect("shake", options, 800);
      $('#loginAdmin').val("LoginAdmin");
      $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
       
     }
    }
   });
  }
  else
  {
 $('#error').html("<span class='text-danger'>Entry Missing ! Please Enter A Valid Entry</span>");
  }
 });
});
//third button
$(document).ready(function(){
 $('#loginReviewer').click(function(){
  var username = $('#username').val();
  var password = $('#password').val();
  if($.trim(username).length > 0 && $.trim(password).length > 0)
  {
   $.ajax({
    url:"login.php",
    method:"POST",
    data:{username:username, password:password},
    cache:false,
    beforeSend:function(){
     $('#login').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {
      $("body").load("AfterLogin.php").hide().fadeIn(1500);
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      //$("#box").effect("shake", options, 800);
      $('#loginReviewer').val("LoginReviewer");
      $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
       
     }
    }
   });
  }
  else
  {
 $('#error').html("<span class='text-danger'>Entry Missing ! Please Enter A Valid Entry</span>");
  }
 });
});