<!DOCTYPE html>
<html>
<head>
	<title>Delete Pets</title>
	<link rel="stylesheet" type="text/css" href="trans.css">
</head>
<body>



<div>


<?php 
$conn = new mysqli('localhost','root','','sanisa_team19');
$result = mysqli_query($conn, "select * from customer");
// $row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      //  echo '<input type="checkbox" name="pet[]" value="'.$row['Id'].'">
        echo	'<table>
        	<tr>
        		<td> '.$row['c_id'].' </td> 
        		<td> '.$row['c_name'].' </td> 
        		<td> '.$row['phone_no'].' </td> 
        		<td> '.$row['c_address'].' </td>
        	  <tr> 
        	  </table>  <br>';
        
    }
} 

mysqli_close($conn);

?>
