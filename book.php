<?php
 
include('connection.php');

session_start();
$username = $_SESSION['username'];
 
 $checkin = $_SESSION['checkin']  ;
 $checkout = $_SESSION['checkout'] ;
 $adults = $_SESSION['adults'];
$children = $_SESSION['children'] ;
 $roomid = $_POST['book'];
 $query = "INSERT INTO reservation (username, roomid, checkin, checkout, children, adults ) VALUES (  '$username', '$roomid', '$checkin', '$checkout', '$children', '$adults')";

$result = mysqli_query($conn,$query);

if($result){
	header('location:userdashboard.php#booking');

}

?>
 

 