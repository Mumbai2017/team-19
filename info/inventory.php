<!DOCTYPE html>
<html>
<head>
	<title>inventory info</title>
	<link rel="stylesheet" type="text/css" href="trans.css">
</head>







<?php 

$conn = new mysqli('localhost','root','','sanisa_team19');
$result = mysqli_query($conn, "select * from sakhi_inventory");
// $row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      //  echo '<input type="checkbox" name="pet[]" value="'.$row['Id'].'">
        echo	'<table>
        	<tr>
        		<td> '.$row['s_id'].' </td> 
        		<td> '.$row['p_id'].' </td> 
        		<td> '.$row['s_quantity'].' </td> 
        		<td> '.$row['last_update'].' </td> 
        	  <tr> 
        	  </table>  <br>';
        
    }
} 

mysqli_close($conn);

?>