<?php
 $conn = new mysqli('localhost','root','','team_19');
if(isset($_POST['c_id'])&&isset($_POST['phone_no']))
{
	$contact = $_POST['c_id'];
	
}