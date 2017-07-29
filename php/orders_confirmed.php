<?php
include ('connection.php');
$phone = $_SESSION['phone_no'];
$quantity = $_POST['quantity'];
$pid = $_POST['p_id'];
$sql1 = "Select c_id from customers where phone_no = '$phone'";
$cid = $conn->query($sql1);
$sql2 = "Select p_cost from product where p_id = '$pid'";
$run = $conn->query($sql2);
$total = $quantity * $run; 
$sql = "Insert into orders(c_id, p_id, quantity, o_total, status) values ('$cid', '$pid', '$quantity', '$total', 0)";