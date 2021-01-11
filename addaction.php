<?php

require_once 'functions.php';

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$jobrole = $_REQUEST['jobrole'];
$company = $_REQUEST['company'];
$type = $_REQUEST['type'];

$con=connect();

$query = "INSERT INTO attendees (fname, lname, jobrole, company, type, attend) VALUES ('" . $fname . "', '" . $lname . "', '" . $jobrole . "', '" . $company . "', '" . $type . "', 1)";
$result = mysqli_query($con, $query);

disconnect($con);

include 'index.php';

?>