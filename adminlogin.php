<?php
include('includes/adminheader.php');


?>
 
<div class = "row">
<div class = "container-fluid">
<div class = "jumbotron">
<h1>Admin Login</h1>
<form class = "form-group" method = "post" action = "admin.php">

<label for = "username">Username</label><input type = "text" id = "username" name = "username"  class = "form-control" />
<label for = "password">Password</label><input type = "password" id = "password" name = "password"  class = "form-control" />
<input type = "submit" class = "form-control btn btn-primary" value = "LOGIN" />


</form>
</div>

</div>
</div>

 


 <?php
include('includes/adminfooter.php');


?>
 