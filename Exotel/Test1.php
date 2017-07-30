<?php
include('db.php');
echo "tt";
//content type must be set to text/plain
header('Content-Type: text/plain');
//exotel sends a HEAD request to verify the headers
if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
	exit();
}
//Fetching the GET params
$SmsSid = $_GET["CallSid"];
$From = $_GET["From"];


$search="SELECT c_id FROM customer where phone_no='$From'";
$result=$conn->query($search);
if($result->num_rows>0){
	{
		$sql ="insert into orders(s_id,p_id,c_id) values(1,1,1)";
		if ($conn->query($sql) === TRUE) {
		header("HTTP/1.1 200 OK");
    	echo "Registered for the Exotel session successfully";
		} 
		else {
		header("HTTP/1.1 501 NOTOK");
    	echo "Some error occured while registering"; 
		}
	}
}




?>