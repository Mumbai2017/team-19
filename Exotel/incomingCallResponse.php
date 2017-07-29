<?php
//content type must be set to text/plain
header('Content-Type: text/plain');
//exotel sends a HEAD request to verify the headers
if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
	exit();
}	
//Fetching the GET params



$contact=$_GET["digits"];

$contact=str_replace('"', '', $contact);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sanisa_team19";


$From = $_GET["From"];



//Create connection

// Create connection
$conn = new mysqli('localhost','root','root123','sanisa_team19');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$search="SELECT phone_no FROM customer ";
$result=$conn->query($search);

if($row=$result->fetch_assoc()){
	if($row['phone_no']==$contact){

if($result->num_rows>0){

	 {

		header("HTTP/1.1 200 OK");
    	echo "Registered for the Exotel session successfully";
		} 
		else {
		header("HTTP/1.1 501 NOTOK");
    	echo "Some error occured while registering"; 
		}
	}
}
}



$conn->close();
?>