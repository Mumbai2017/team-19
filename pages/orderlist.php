<?php

$conn = new mysqli('localhost','root','','sanisa_team19');
$sql = "SELECT * FROM orders where status=1";
$result = $conn->query($sql);
$i = 0;
if($result->num_rows >0)
{
    while($row = $result->fetch_assoc())
    {
echo $row['c_id'];
echo '<br>';
echo $row['quantity'];
echo '<br>';
echo $row['del_date'];
echo '<br>';
}

}
?>