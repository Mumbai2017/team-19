<?php
//content type must be set to text/plain
header('Content-Type: text/plain');
//exotel sends a HEAD request to verify the headers
if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
	exit();
}	
//Fetching the GET params
$SmsSid = $_GET["CallSid"];
$From = $_GET["From"];
$flav=$_GET["digits"];

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
$search="SELECT phone_no,c_id FROM customer";
$result=mysqli_execute($conn,$search) or die(mysql_error());
$rows=mysqli_num_rows($result)
if($rows>0){
	if($phone==$From){
	$sql = "INSERT INTO `orders` (`c_id`, `p_id` ) VALUES ("$cid","$flav")";
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