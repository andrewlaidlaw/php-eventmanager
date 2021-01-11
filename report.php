<?php

require_once 'functions.php';

$con=connect();

$query1 = "SELECT id FROM attendees WHERE type=4 AND attend=1";
$result1 = mysql_query($query1, $con);
$customers = mysql_num_rows($result1);

$query2 = "SELECT id FROM attendees WHERE type=3 AND attend=1";
$result2 = mysql_query($query2, $con);
$bps = mysql_num_rows($result2);

$query3 = "SELECT id FROM attendees WHERE type=2 AND attend=1";
$result3 = mysql_query($query3, $con);
$executives = mysql_num_rows($result3);

$query4 = "SELECT id FROM attendees WHERE type=1 AND attend=1";
$result4 = mysql_query($query4, $con);
$ibmers = mysql_num_rows($result4);

disconnect($con);

$subtotal = $customers + $bps + $executives;
$total = $subtotal + $ibmers;

echo "
<html>
<head>
<title>Launch Event</title>
<meta name='viewport' content='width=device-width, user-scalable=no'>
<link rel='stylesheet' type='text/css' href='style.css' />
</head>
<body>
<a href='index.php'>&lt; back</a>
<table>
<tr><td>Customers:</td><td>" . $customers . "</td></tr>
<tr><td>Business Partners:</td><td>" . $bps . "</td></tr>
<tr><td>Executives:</td><td>" . $executives . "</td></tr>
<tr><td><b>Subtotal</b>:</td><td>" . $subtotal . "</td></tr>
<tr><td>IBMers:</td><td>" . $ibmers . "</td></tr>
<tr><td><b>Total</b>:</td><td>" . $total . "</td></tr>
</table>

</body>
</html>
";

?>