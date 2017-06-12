<?php
	/**
	*Database config variables
	*/
	define("DB_HOST","localhost");
	define("DB_USER","id1931932_bhanvi");
	define("DB_PASSWORD","Keep17Good02");
	define("DB_DATABASE","id1931932_testkisan");
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	if(mysqli_connect_errno()){
		die("Database connnection failed " . "(" .
			mysqli_connect_error() . " - " . mysqli_connect_errno() . ")"
				);
	}
?>