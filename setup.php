<?php

require_once 'functions.php';

$con=connect();

$file = fopen('attendees.csv','r');
while (!feof($file))
	{
	$line = fgets($file);
	echo $line;
	echo "<br />";
	$linearray = explode(",",$line);
	$query = "INSERT INTO attendees (fname,lname,type,company,jobrole) VALUES ('" . $linearray[3] . "', '" . $linearray[4] . "', '" . $linearray[0] . "', '" . $linearray[2] . "', '" . $linearray[5] . "')";
	$result = mysql_query($query, $con);
	}

disconnect($con);

?>