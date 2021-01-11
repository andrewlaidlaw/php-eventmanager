<?php

require_once 'functions.php';

echo "Hostname: " . $_ENV['database-hostname'] . "<br/>";
echo "Username: " . $_ENV['database-user'] ."<br />";
echo "Password: " . $_ENV['database-password'] ."<br />";

$con = mysqli_connect("mariadb-eventmanager", "userPGR", "Wok4FDdRA6xBoiGW", "attendees");
	if (!$con) {
		// Error message if connection fails
		die('Could not connect: ' . mysqli_connect_error());
	}

$con=connect();
disconnect($con);

echo "";

phpinfo();

