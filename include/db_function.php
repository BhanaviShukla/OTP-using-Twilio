<?php 
require_once 'include/db_connection.php';
	function getNames(){
		global $connection;
		$query = "SELECT id,first_name,last_name from Contact ORDER BY first_name";

		$res = mysqli_query($connection, $query);
		$array_contacts = array();
		if($res){
			while($contact = mysqli_fetch_array($res,MYSQLI_ASSOC)){
				$array_contacts[] = $contact;
			}
		}
	
		if($array_contacts)
			return $array_contacts;
		else return false;

	}

	function getInfoById($id){
		global $connection;
		$query = "SELECT * from Contact where id = '{$id}'";

		$res = mysqli_query($connection, $query);
		$contact = false;
		if($res){
			while($contact = mysqli_fetch_assoc($res)){
				$response= array();
				if($contact){
					$response["fname"] = $contact["first_name"];
					$response["lname"] = $contact["last_name"];
					$response["pnumb"] = $contact["phone_number"];
					//echo json_encode($response);
					if($response)
						return $response;
					else{
						return false;
					}
				}
				else{
					return false;
				}
			}
		}
		else{
			return false;
		} 
	}

	function saveOtp($to, $otp){
		global $connection;
		$query = "INSERT into OTP(";
		$query .= "number,otp) ";
		$query .= "VALUES('{$to}', '{$otp}')";
		$result = mysqli_query($connection, $query);

		if($result)
			return "Otp Sent";
		else
			return false;
	}

	function getOtpHistory(){
		global $connection;
		$query = "SELECT Contact.*, OTP.* FROM Contact, OTP WHERE Contact.phone_number = OTP.number ORDER BY OTP.timestamp desc";

		$res = mysqli_query($connection, $query);
		$array_contacts = array();
		if($res){
			while($contact = mysqli_fetch_array($res,MYSQLI_ASSOC)){
				$array_contacts[] = $contact;
			}
		}
	
		if($array_contacts)
			return $array_contacts;
		else return false;

	}
	
?>