<?php
session_start();

 // require "functions.php";
 $conn = new mysqli('localhost','root','','sanisa_team19');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$address = $_POST['add'];

$row = "Insert into sakhi(s_name, s_username, s_password, s_address) values ('$name', '$email', '$password', '$add')";
$row1=$conn->query($row);
$sel = "select * from sakhi where s_username = '$email' and s_password = '$password'";
$sel1 = $conn->query($sel);
foreach ($sel1 as $key => $row) {
setcookie('username', $row['s_username'], time()+(86400+10), '/');
setcookie('name', $row['s_name'], time()+(86400+10), '/');
// setcookie('emailid', $row['Email_id'], time()+(86400+10), '/');
// setcookie('first', true, time()+(86400+10), '/');
	
}

header('location: ../pages/index.html');

?>