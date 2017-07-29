<?php
if(isset($_POST['phone_no']))
{
$phone = $_POST['phone_no'];
$sql = "SELECT * FROM customer where phone_no='$phone' limit 1";
$result = $conn->query($sql);
if($result->num_rows >0)
{

header('location:sendAnSms.php');
}
else 
{
	echo "You have not placed an order";
}
}

?>