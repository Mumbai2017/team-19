<?php
//content type must be set to text/plain
header('Content-Type: text/plain');
//exotel sends a HEAD request to verify the headers
if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
	exit();
}	
session_start();
$contact=$_SESSION['phone_no'];
//Fetching the GET params
$SmsSid = $_GET["CallSid"];
$From = $_GET["From"];
$quan=$_GET["digits"];

$quan=str_replace('"', '', $quan);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sanisa_team19";
//Create connection

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$search="SELECT c_id FROM customer where phone_no=$contact";
$result=$conn->query($search);
if($result->num_rows>0){
	{

		$cid=$row['c_id'];
		$sql = "UPDATE TABLE `orders` SET `quantity`=$quan WHERE `c_id`=$cid";
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



$conn->close();
?>