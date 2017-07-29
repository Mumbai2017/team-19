<?php
$conn = new mysqli('localhost','root','','sanisa_team19');
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);
$i = 0;

if($result->num_rows >0)
{
    while($row = $result->fetch_assoc())
    {
    	echo '<table>';
    	echo '<br>';
    	echo "Info of customer ".$row['c_id']." is";
echo '<table>';
echo '<b>'."Name: ".'</b>'.$row['c_name'];
echo '<br>';
echo '<b>'."Contact: ".'</b>'.$row['phone_no'];
echo '<br>';
echo '<b>'."Address: ".'</b>'.$row['c_address'];
echo '<br>';
echo '</table>';

}
}


