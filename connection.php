<?php 

$server = "localhost";
$un = "root";
$pw = "";
$db = "final";

$conn = new mysqli($server, $un, $pw, $db);

if($conn -> connect_error){
	die ("connection failed" .$conn->error);
} 



function sanitizeString($var){
	$var = stripcslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	 
	return $var;
}
 
 function sanitizeMySQL($conn, $var)  {     
$var = $conn->real_escape_string($var);
    $var = sanitizeString($var);    
return $var;  }
 


?>