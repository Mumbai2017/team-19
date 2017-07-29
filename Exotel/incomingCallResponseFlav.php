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
$flav=$_GET["digits"];

$flav=str_replace('"', '', $flav);
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

		$cid=$row['c_id'];
	$sql = "INSERT INTO `orders` ( `c_id`,`p_id` ) VALUES ('$cid','$flav')";
		if ($conn->query($sql) === TRUE) {
		header("HTTP/1.1 200 OK");
    	echo "Registered for the Exotel session successfully";
		} 
		else {
		header("HTTP/1.1 501 NOTOK");
    	echo "Some error occured while registering"; 
		}
	
}



$conn->close();
?>