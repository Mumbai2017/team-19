<?php

session_start();

$ADMIN_EMAIL = "admin";

$ADMIN_PASSWORD = "admin";

// require 'functions.php';
 $conn = new mysqli('localhost','root','','sanisa_team19');

$email = $_POST['username'];
$password = $_POST['pwd'];

$usertab1 = "select * from sakhi where s_username = '$email' and s_password = '$password'";
$usertab = $conn->query($usertab1);

//print_r($usertab);

//echo $usertab;

// foreach ($usertab as $key => $value) {
//     echo $value['Name'];
// setcookie('name', $value['Name'], time()+(86400*10), '/');

// }
if($email==$ADMIN_EMAIL and $password==$ADMIN_PASSWORD){
    // setcookie('userid', $row['user_id'], time()+(86400+10), '/');
    setcookie('name', 'admin', time()+(86400*10), '/');
    setcookie('username', $email, time()+(86400*10), '/');
        header('location: #');   
}

elseif ($usertab!=null){
    
        header('location: ../pages/index.php');
        foreach ($usertab as $key => $row) {
            // print_r($row['user_id']);
            setcookie('username', $row['s_username'], time()+(86400*10), '/');
            setcookie('name', $row['s_name'], time()+(86400*10), '/');
            
    }
}
else {
    header('location: ../login.php');
    $_SESSION['Error'] = "Incorrect Username/Password";
}

?>