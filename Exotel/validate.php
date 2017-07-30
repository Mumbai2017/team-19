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

$servername = "localhost";
$username = "root";
$password = "1239819940192";
$dbname = "team_19";

//Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT phone_no FROM customer";
$result=$conn->query($sql);

if($row=$result->fetch_assoc()){

	if($row['phone_no']==$From){
			
					header("HTTP/1.1 200 OK");
    				echo "Thanks for coming back";
}
else
{

	header("HTTP/1.1 501 NOTOK");
	//die(mysql_error());
	exit;
    echo "Some error occured in system"; 
}
}
$conn->close();
?>
