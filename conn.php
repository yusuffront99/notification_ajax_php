<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","notify_php");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>
