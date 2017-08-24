<?php
include('connection.php');
// password 104494945
$tmp_username = $_POST['username'];
$tmp_password = $_POST['password'];
       $hash = '$2y$10$BPvBaxqnMXeFu31pA6dwu.yc7LVk1mQxHC3lb5l/gx17M4M8GmAxC';
 

if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
	$tmp_username =  sanitizeMySQL($conn, $tmp_username);
	$tmp_password = sanitizeMySQL($conn, $tmp_password);
   $query = "SELECT password FROM admin WHERE username = '$tmp_username'";
   $result = mysqli_query($conn,$query);
if (!$result) die($conn->error);
	elseif ($result->num_rows)
	{
		$row = $result->fetch_array(MYSQLI_NUM); 
		 
		 
		  if($tmp_password == '104494945')
		  	echo "successful";
		  
		  	session_start();
		  		$_SESSION['username'] = $tmp_username;
		  		 
		  	header('Location:admindashboard.php');
		  }
		  else {
		  	echo "wrong password";
		  
		  }
		}
		else {
			echo "the username does not exist";
			
		}

 



?>
 
 