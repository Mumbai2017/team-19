 <?php include("connection.php");
    $session_start();
    require_once "vendor/autoload.php";
    use Twilio\Rest\Client;
    
    // Step 2: set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = "ACd12521e5548b329c3f217a8f8bee623e";
    $AuthToken = "b3afc50016084187ce3d2865a6958a6f";
    // Step 3: instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);
    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
    
    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    $phone=$_SESSION['phone_no'];
    
        $sms = $client->account->messages->create(
            // the number we are sending to - Any phone number
            $phone,
            array(
                // Step 6: Change the 'From' number below to be a valid Twilio number 
                // that you've purchased
                'from' => "+7348384804", 
                $sql="SELECT status FROM orders";
                $result=$conn->query($sql);
                if($result->num_rows>0){
                if($result==1){
                    'body' => "Hey your order has been placed";
                }
                if($result==2){
                    'body' => "Hey your order has been dispatched";
                }
                if($result==3){
                    'body' => "Hey your order has been delivered";
                }
                
            }
            )
        );
        // Display a confirmation message on the screen
        echo "Sent message";
    
?>