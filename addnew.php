<?php
//insert.php
if(isset($_POST["firstName"]))
{
	include('conn.php');
	$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
 
	mysqli_query($conn,"insert into `user` (firstName, lastName) values ('$firstName', '$lastName')");
}
?>