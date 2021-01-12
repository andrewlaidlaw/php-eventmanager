<?php

require_once 'functions.php';

$con=connect();

$query = "DROP TABLE attendees";
$result = mysqli_query($con, $query);
echo "Table <b>attendees</b> dropped.<br />";

$query = "CREATE TABLE attendees (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, fname VARCHAR(30), lname VARCHAR(30), type VARCHAR(30), company VARCHAR(30), jobrole VARCHAR(50), attend BOOLEAN)";
$result = mysqli_query($con, $query);
echo "Table <b>attendees</b> created.<br />";

$file = fopen('attendees.csv','r');
while (!feof($file))
	{
	$line = fgets($file);
	echo $line;
	$linearray = explode(",",$line);
	$query = "INSERT INTO attendees (fname,lname,type,company,jobrole) VALUES ('" . $linearray[3] . "', '" . $linearray[4] . "', '" . $linearray[0] . "', '" . $linearray[2] . "', '" . $linearray[5] . "')";
	$result = mysqli_query($con, $query);
	echo " - Inserted";
	echo "<br />";
	}

disconnect($con);

?>