<?php
require_once 'include/db_function.php';
//called by getInfo.js
// json response array
$response = array("error" => FALSE);

if (isset($_POST['id'])) {
    //echo "Post set";
    // get the contact details using the id sent by the calling method
    $id = $_POST['id'];
    $user = getInfoById($id);

    if ($user) {
        // user is found
        $response["error"] = FALSE;
        $response["contact"]["fname"] = $user["fname"]; 
        $response["contact"]["lname"] = $user["lname"]; 
        $response["contact"]["pnumb"] = $user["pnumb"]; 

        echo json_encode($response);

    } else {
        // user is not found with the credentials
        $response["error"] = TRUE;
        $response["error_msg"] = "Something went wrong! The id which was sent did not correspond to any stored user. Please try again!";
        echo json_encode($response);
    }
}
else{
    $response["error"] = TRUE;
    $response["error_msg"] = "Something went wrong! Please try again!";
    echo json_encode($response);
}
?>