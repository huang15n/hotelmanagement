<?php
 

include('includes/adminheader.php');
session_start();
 echo '<div class = "row">
<div class = "container"><h4>Welcome, Dear '.$_SESSION['username']."</h4></div>
</div>";

?>
 


 
<div class = "row">
<div class = "container">
<h2>Change Service Description</h2>

<?php 
$sql1 = "SELECT * FROM floor";
 $result1 = mysqli_query($conn,$sql1);



$rows = $result1 -> num_rows;

if($rows == 0){
	echo "<h3>Connection Row</h3>";
}
else {
	echo '<form method = "post" action = "modification.php"><table class = "table table-responsive"><tr><th>Floor Number</th><th>Price</th>
	<th>Description</th><th>Facility</th> <th>Modify Description</th><th>Modify Facility</th></tr>';
for($i = 0 ; $i < $rows; $i++){
   $result1 -> data_seek($i);
   $row = $result1 -> fetch_assoc();

   echo "<tr><td>".$row['floor_number']."</td><td>".$row['price']."</td><td>".$row['description']."</td><td>".$row['facility'].'</td><td><button type = "submit" class = "btn  btn-warning" name = "mds" value = "'.$row['floor_number'].'">Modify Description</button><input type = "text" name = "des"></td>'.'<td><button type = "submit" class = "btn  btn-warning" name = "mf" value = "'.$row['floor_number'].'">Modify Facility</button><input type = "text" name = "fac"> </td>'.'</tr>';
}


echo "</table></form>";

}
?>



</div>

</div>




 <?php 


include('includes/adminfooter.php');

 ?>