<?php
 $conn = new mysqli('localhost','root','','team_19');
 session_start();

$phone = $_SESSION['phone'];
// print_r($phone);
$quantity = $_POST['quantity'];
$pid = $_POST['p_id'];
// $sql1 = "Select c_id from customer where phone_no = '$phone'";
// $cid = $conn->query($sql1);
// while ($row = $cid->fetch_assoc()) {
//     echo $row['c_id'];

// $cid1 = mysqli_fetch_assoc($cid);
// echo $cid;
// $sql2 = "Select * from product where p_id = '$pid'";
// $run = $conn->query($sql2);
// $run1 = (int)$run['p_cost'];
// $total = $quantity * $run; 
echo 'Order Placed';
$sql = "Insert into orders(c_id, p_id, quantity, status) values ('1', '$pid', '$quantity', 0)";
$conn->query($sql);
// }
?>
