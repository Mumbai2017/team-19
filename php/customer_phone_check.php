<?php
include("connection.php");
if(isset($_POST['phone_no'])
{
	$phone = $_POST['phone_no'];
	$sql = "SELECT * FROM customer WHERE phone_no='$phone'";
	$result = $conn->query($sql);
	session_start();
	$_SESSION['phone'] = $phone; 
	if($result->num_rows >0)
{
    header('location:orders_confirm.php');
}
	
}
else
{
	header('location:customer_details.php');
}

?>