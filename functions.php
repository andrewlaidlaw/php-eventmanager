<?php
	
function connect() {
	$con = mysql_connect($_ENV['db_hostname'],$_ENV['db_username'],$_ENV['db_password']);
	if (!$con) {
		// Error message if connection fails
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("attendees", $con);
	return $con;
}

// Disconnect from Database
function disconnect($con) {
	mysql_close($con);
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
	return mysql_real_escape_string($string);
}