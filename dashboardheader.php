 
<?php
include ('connection.php');
session_start();

$username = $_SESSION['username'];
 
$query = "SELECT firstname FROM customer  ,account where customer.email =  account.email AND account.username = '$username'";
$result = mysqli_query($conn,$query);
 $firstname= $result->fetch_assoc()['firstname'];
 $_SESSION['firstname'] = $firstname;
  


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
 <link rel = "stylesheet" href = "../css/mainstyle.css">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src = "../js/main.js"></script>
 

 <link rel = "stylesheet" href = "../css/dashboard.css">

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
<li><a href = "#booking" class = "fontnavbar">Booking</a></li>
 

<li><a href = "#order" class = "fontnavbar">Order</a></li>

<li><a href = "#profile" class = "fontnavbar">Profile</a></li>

 
</ul>


<div id = "navbar-buttons" class = "navbar-right customerinfo"  >
<button type = "button" class = "btn btn-lg btn-block  " id = "login" name = "login"  
    ><span class = "glyphicon glyphicon-user" ></span>  <?php echo "$firstname"  ?>


   


     </button>




</div>
 
 <div id = "navbar-buttons" class = "navbar-right customerinfo">
 <form action = "logout.php" method = "post">
 <button type = "submit" class = "btn btn-lg btn-block " id = "singup" name = "signup"  ><span class = "glyphicon glyphicon-log-out"></span> <span class = "adjustable"> Logout</span></button>

 </form>
 </div>
 
</div>




</div>

</div>
</div>

<!-- this is the end of the navigation bar -->

<!-- this part is for the modal of the website ,it will not be shown unless the user clicks the login in or sign up button-->


 

<!-- this part is for the modal of the website ,it will not be shown unless the user clicks the login button-->
