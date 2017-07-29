<?php
include("connection.php");
if(isset($_POST['phone_no'])&&isset($_POST['c_name'])&&isset($_POST['c_address'])&&isset($_POST['phone_no']))
{
   $phone = $_POST['phone_no'];
   $cname = $_POST['c_name'];
   $address = $_POST['c_address'];
   $phone = $_POST['phone_no'];

   $sql = "INSERT INTO customer(phone_no,c_name,c_address,phone_no) values('$phone','$cname','$address','$phone')";
   $conn->query($sql);
}