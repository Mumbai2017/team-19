<?php
session_start();
  

include("php/connection.php");

if(isset($_POST['phone_no']))
{
	$phone = $_POST['phone_no'];
	$_SESSION["phone"]=$phone;
	 
	$sql = "SELECT * FROM customer WHERE phone_no='$phone'";
	$result = $conn->query($sql);	
	if($result->num_rows > 0)
    header('location: orders_confirm.php');
else
	header('location: customer_details.php');
}

?>