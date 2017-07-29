
<?php include('connection.php');
$phone=$_SESSION['phone_no'];
$sqls="SELECT c_id FROM customers where phone_no=$phone";
$results=$conn->query($sqls);
$row=$results->fetch_assoc();
if($row->num_rows>0){
        $cid=$row['c_id'];
        $sql="SELECT status FROM orders where c_id=$cid";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
 if($row['status']==1) $flag=1;
 if($row['status']==2) $flag=2;
 if($row['status']==3) $flag=3;
 if($flag==1){  
        $post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gatewa
            'From'   => '02239971731',
            'To'    => $phone,
            'Body' => "Hey your order has been placed");
}
if($flag==2){
                    $post_data = array('From'   => '02239971731',
                    'To'    => $phone,
                    'Body' => "Hey your order has been dispatched");
             }   
if($flag==3){
                    $post_data = array('From'   => '02239971731',
                    'To'    => $phone,
                    'Body' => "Hey your order has been delivered");
             }      

 
$exotel_sid = "ves592"; // Your Exotel SID
$exotel_token = "ea0468dcadbebbf42e31addc90c3caa981a357a3"; // Your exotel token
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);
?>