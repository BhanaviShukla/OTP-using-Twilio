<?php
require_once 'include/db_function.php';
//calling js- ajax.js 
// json response array
$response = array("error" => FALSE);

// get the otp history
$user = getOtpHistory();

if ($user) {
    // history is found, join successful
    $response["error"] = FALSE;
    $response["contact"] = $user; 
    echo json_encode($response);

} else {
    //join returned a false, implies no otp was sent, or something went wrong
    $response["error"] = TRUE;
    $response["error_msg"] = "Either there is no OTP history or something went wrong! Please try again!";
    echo json_encode($response);
}
?>