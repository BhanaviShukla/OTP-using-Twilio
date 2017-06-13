<?php
    require_once 'include/db_function.php';
    require('twilio-php-master/Twilio/autoload.php');
    //called by getInfo.js
    //Twilio config variables
    $account_sid = "YOUR ACCOUNT SID";
    $auth_token = "YOUR ACCOUNT TOKEN";
    $twilio_phone_number = "YOUR REGISTERED TWILIO NUMBER";

    //if post variables are set (number and otp)
    if (isset($_POST['number']) && isset($_POST['otp'])) {
    $to = "+91".$_POST['number'];
    $otp = $_POST['otp'];
    echo $otp;
    $msg = "Hi. Your OTP is: ".$otp;

    //send message via the Twilio sdk
    $client = new Twilio\Rest\Client($account_sid, $auth_token);
    $message = $client->messages->create(
        $to,
        array(
        "from" => $twilio_phone_number,
        "body" => $msg));    
    }
    print $message->sid;
    $response = array("error" => FALSE);

    // save the otp history in the database
    $user = saveOtp($_POST['number'], $otp);

    if ($user) {
        //if the otp is saved succesfully
        $response["error"] = FALSE;
        $response["msg"] = $user; 
        echo json_encode($response);

    } else {
        //otp isn't saved successfully
        $response["error"] = TRUE;
        $response["error_msg"] = "Something went wrong! Please try again!";
        echo json_encode($response);
    }
?>