<?php
 $conn = new mysqli('localhost','root','','team_19');

// if(isset($_POST['phone_no'])&&isset($_POST['c_name'])&&isset($_POST['c_address'])&&isset($_POST['landmark']))
{
   $phone = $_POST['phone_no'];
   $cname = $_POST['c_name'];
   $address = $_POST['c_address'];
   $landmark = $_POST['landmark'];
   echo $phone, $cname;
   $sql = "Insert into customer(phone_no,c_name,c_address,landmark) values('$phone','$cname','$address','$landmark')";
   $conn->query($sql);
   header('location: ../order.php');
}
?>