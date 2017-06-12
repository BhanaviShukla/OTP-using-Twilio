<?php
require_once 'include/db_function.php';
 
// json response array
$response = array("error" => FALSE);

if (isset($_POST['id'])) {
    //echo "Post set";
    // get the user by email and password
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
        $response["error_msg"] = "Something went wrong 1! Please try again!";
        echo json_encode($response);
    }
}
else{
    $response["error"] = TRUE;
    $response["error_msg"] = "Something went wrong 2! Please try again!";
    echo json_encode($response);
}
?>