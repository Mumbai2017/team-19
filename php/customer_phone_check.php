<?php
session_start();
  

// include("connection.php");
 $conn = new mysqli('localhost','root','','sanisa_team19');

if(isset($_POST['phone_no']))
{
	$phone = $_POST['phone_no'];
	$_SESSION['phone']=$phone;
	 
	$sql = "SELECT * FROM customer WHERE phone_no='$phone'";
	$result = $conn->query($sql);	
	if($result->num_rows > 0)
    header('location: ../order.php');
else
	header('location: ../details.php');
}

?>