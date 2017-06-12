<?php
require_once 'include/db_function.php';
 
// json response array
$response = array("error" => FALSE);

// get the user by email and password
$user = getNames();

if ($user) {
    // user is found
    $response["error"] = FALSE;
    $response["contact"] = $user; 
    echo json_encode($response);

} else {
    // user is not found with the credentials
    $response["error"] = TRUE;
    $response["error_msg"] = "Something went wrong! Please try again!";
    echo json_encode($response);
}
?>