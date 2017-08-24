<?php
include('connection.php');
session_start();
$phone = sanitizeMySQL($conn,$_POST['phone']);
$username = $_SESSION['username'];
$query = "UPDATE customer,account SET customer.phone = $phone WHERE account.email = customer.email AND account.username = '$username'";

$result = mysqli_query($conn,$query);

if($result)
	{
		echo "alter phone number successfully";
     header('location:userdashboard.php');
	}
	else {
		echo "you are not able to alter the phone";
		header('location:userdashboard.php');
	}

?>
 
 
