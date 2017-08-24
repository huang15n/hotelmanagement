<?php
 include ('connection.php');
session_start();
if(isset($_SESSION['firstname']) && isset($_SESSION['username'])){
  $firstname = $_SESSION['firstname'];
  $username = $_SESSION['username'];

  
}

?> 

<!DOCTYPE html>

<html>
<head>
<meta charset= "utf-8">
<meta name = "viewport" content = "width=device-width,intial-scale = 1">
 
<meta name = "keyword" content = "Windsor ,Edward Hotel, Deals, Discount, Vacation, Detroit, Cheap">
<meta name = "description" content = "this is the final project for made-up Edward hotel in Windsor ,Ontario.">

<link rel = "stylesheet" href = "../css/index.css">
 <link rel = "stylesheet" href = "bootstrap-social.css">
 <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- these are the external links for calling the bootstrap libraries ,including jquery-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel = "stylesheet" href = "../css/mainstyle.css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src = "../js/main.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</script>
 

</head>



<body id = "top">




 
<!-- this is the bannder -->
<!-- this is the navigation bar -->
<div class ="row" id = "navigationbar">

<div class = "navbar navbar-default  " style = "margin:0px">
<div class = "container-fluid">
<div class = "navbar-header"> 
<a class = "navbar-brand" href = "index.php" style = "font-size:300%">
Edward Hotel
</a>
 
<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target="#hotelnav">
<span class = "icon-bar"></span>
<span class = "icon-bar"></span>
<span class = "icon-bar"></span>
</button>
</div>
<div class = "collapse navbar-collapse" id = "hotelnav">
<ul class = "nav navbar-nav">
<li><a href = "rooms.php" class = "fontnavbar">Rooms</a></li>
 

<li><a href = "restuarant.php" class = "fontnavbar">Restuarant</a></li>

<li><a href = "explore.php" class = "fontnavbar">Explore</a></li>

<li><a href = "us.php" class = "fontnavbar">About</a></li>
</ul>

<?php 


if(!isset($_SESSION['username'])){

echo '<div id = "navbar-buttons" class = "navbar-right customerinfo"  >
<button type = "button" class = "btn btn-lg btn-block  " id = "login" name = "login" data-toggle = "modal" data-target = "#loginmodal"   
    ><span class = "glyphicon glyphicon-log-in" ></span><span class = "adjustable"> LOGIN</span></button>




</div>
 
 <div id = "navbar-buttons" class = "navbar-right customerinfo">
 <button type = "button" class = "btn btn-lg btn-block " id = "singup" name = "signup" data-toggle = "modal" data-target = "#singupmodal"><span class = "glyphicon glyphicon-registration-mark"></span> <span class = "adjustable"> SIGNUP</span></button>
 </div>
 
</div>';
}
else {
  echo '<div id = "navbar-buttons" class = "navbar-right"  ><a href = "userdashboard.php" >
<button type = "button" class = "btn btn-lg btn-block  " id = "login" name = "login"  
    ><span class = "glyphicon glyphicon-user" ></span>Welcome !'.$firstname.'</button></a></div>';


echo '
 <div id = "navbar-buttons" class = "navbar-right"  >
  <form action = "logout.php" method = "post">
 <button type = "submit" class = "btn btn-lg btn-block "   name = "logout"  ><span class = "glyphicon glyphicon-log-out"></span> <span class = "adjustable"> Logout</span></button>
</form>

 </div> ';
}

?>


</div>

</div>
</div>

<!-- this is the end of the navigation bar -->

<!-- this part is for the modal of the website ,it will not be shown unless the user clicks the login in or sign up button-->



<!-- this part is for the modal of the website ,it will not be shown unless the user clicks the sign up button-->
<div id="singupmodal" class="modal modal-lg fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"  >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SIGNUP</h4>
      </div>
      <form action = "signup.php" method = "post">
      <div class="modal-body" >
        
        
        
         <label for = "first_name"> First Name:</label><input type = "text" class = "form-control" id = "firstname" name = "firstname" maxlength = "10" required/>
        <label for = "last_name"> Last Name:</label><input type = "text" class = "form-control" id = "lastname" name = "lastname" maxlength = "10"  required/>
            <label for = "email"> Email:</label><input type = "email" class = "form-control" id = "email" name = "email" required  />
             <label for = "phone"> phone:</label><input type = "text" class = "form-control" id = "phone" name = "phone" maxlength = "10" minlength = "10" required/>
        <label for = "username"> Username:</label><input type = "text" class = "form-control" id = "username" name = "username" required/>

        <label for = "password"> Password:</label><input type = "password" class = "form-control" id = "password" name = "password" required/>
         <label for = "password"> Confirm Passwrd:</label><input type = "password" class = "form-control" id = "password" name = "confirmpassword" required/>



      
 

         

       
      </div>
        
      <div class="modal-footer">

        <input type="submit" class="btn btn-primary" id = "signupsubmit" value = "Register"> 
         <button type="button" class="btn btn-secondary cancel_modal" data-dismiss = "modal">Cancel</button>
          </form>
      </div>
    </div>

  </div>
</div>


<!-- this part is for the modal of the website ,it will not be shown unless the user clicks the sign up button-->



<!-- this part is for the modal of the website ,it will not be shown unless the user clicks the login button-->

<div id="loginmodal" class="modal modal-lg fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"  >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body" >
         
        
        <form action = "login.php" method = "post">
         
        <label for = "username"> Username:</label><input type = "text" class = "form-control" id = "username" name = "username" required/>
        <label for = "password"> Password:</label><input type = "password" class = "form-control" id = "password" name = "password" required/>
         



        
 

         
 
      </div>
      <div class="modal-footer">
      
        <input type="submit" class="btn btn-primary" id = "loginsubmit" value = "Login ">
         <button type="button" class="btn btn-secondary cancel_modal" data-dismiss = "modal">Cancel</button>
          </form>
      </div>
    </div>

  </div>
</div>

<!-- this part is for the modal of the website ,it will not be shown unless the user clicks the login button-->
