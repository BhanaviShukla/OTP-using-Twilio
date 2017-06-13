<?php 
require_once 'include/db_connection.php';
//db_connection contains database config information

// function to fetch names of the contacts stored in the database
//input- none
//output- id, first name and last name of the stored contacts ordered by first name
//calling method- list.php
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
//function to fetch detials of the select
//input- user id
//output- name (first and last) and the phone number stored in the database.
//calling method- details.php
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
//function to save the generated OTP into the database.
//input- number of the stored contact, the generated otp
//output- success message or a false value to be processed by the calling function
//calling method - send.php
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
//function to fetch the otp history from the database after performing an equijoin on the two tables
//input- none
//output- rows containing id, name(first and last), otp sent to the number, timestap, ordered by timestamp in descending order
//calling method - history.php
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