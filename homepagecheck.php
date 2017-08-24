
<?php
 
include ('includes/header.php');
 
 


?>


 

<!-- this part is for the modal of the website ,it will not be shown unless the user clicks the login button-->

<div class = "row">
<div class = "container">
<div class = "jumbotron">

<?php
 
 
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
$adults = $_GET['adults'];
$children = $_GET['children'];
$roomtype = $_GET['roomtype'];

$_SESSION['checkin'] = $checkin;
$_SESSION['checkout'] = $checkout;
$_SESSION['adults'] = $adults;
$_SESSION['children'] = $children;

 
$query = "SELECT * FROM room,floor  WHERE  floor.roomtype = '$roomtype' AND floor.floor_number = room.floor_number AND room.roomid NOT IN( SELECT roomid FROM reservation WHERE   ( reservation.checkin >=  $checkin  ) OR  (reservation.checkout <= $checkout  ))";
$result = $conn->query($query);
if(!$result){

	echo "wrong query";
}

$rows = $result -> num_rows;
for($i = 0 ; $i < $rows; $i++){
   $result -> data_seek($i);
   $row = $result -> fetch_assoc();
echo '<form method = "post" action = "book.php"><table class = "table table-bordered table-responsive"><tr><th>Room Number</th><th>Room Type</th><th>Description</th>
	<th>Price</th></tr>';
   echo "<tr><td>".$row['roomid']."</td><td>".$row['roomtype']."</td><td>".$row['description']."</td><td>".$row['price'].'</td></tr>';


   echo "</table></form>";

}




?>
</div>
 </div>
 </div>
 

<?php
 
include ('includes/footer.php');
 
 


?>
