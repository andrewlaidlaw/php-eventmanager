<?php
	
function connect() {
	$con = mysqli_connect($_ENV['database-hostname'],
		$_ENV['database-user'],$_ENV['database-password'],$_ENV['database-name']);
	if (!$con) {
		// Error message if connection fails
		die('Could not connect: ' . mysqli_connect_error());
	}

	return $con;
}

// Disconnect from Database
function disconnect($con) {
	mysqli_close($con);
	}
	
// Remove html code from input	
function cleanup($string) {
	$con = connect();
	return htmlentities(mysql_fix_string($string));
	disconnect($con);
}
	
// Remove potentially malicious code from user input
function mysql_fix_string($string) {
	if (get_magic_quotes_gpc()) {
		$string = stripslashes($string);
	}
	return mysqli_real_escape_string($string);
}