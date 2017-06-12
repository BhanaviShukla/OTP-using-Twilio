<?php
    require_once 'include/db_function.php';
    require('twilio-php-master/Twilio/autoload.php');


    $account_sid = "YOUR ACCOUNT SID";
    $auth_token = "YOUR ACCOUNT TOKEN";
    $twilio_phone_number = "YOUR REGISTERED TWILIO NUMBER";

    if (isset($_POST['number']) && isset($_POST['otp'])) {
    $to = "+91".$_POST['number'];
    $otp = $_POST['otp'];
    echo $otp;
    $msg = "Hi. Your OTP is: ".$otp;
    $client = new Twilio\Rest\Client($account_sid, $auth_token);
    $message = $client->messages->create(
        $to,
        array(
        "from" => $twilio_phone_number,
        "body" => $msg));    
    }
    print $message->sid;
    $response = array("error" => FALSE);

    // get the user by email and password
    $user = saveOtp($_POST['number'], $otp);

    if ($user) {
        // user is found
        $response["error"] = FALSE;
        $response["msg"] = $user; 
        echo json_encode($response);

    } else {
        // user is not found with the credentials
        $response["error"] = TRUE;
        $response["error_msg"] = "Something went wrong! Please try again!";
        echo json_encode($response);
    }
?>