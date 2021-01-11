<?php

require_once 'functions.php';

$id = $_REQUEST['name'];

$con=connect();

$query = "SELECT * FROM attendees WHERE id=" . $id;
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

disconnect($con);

echo "
<html>
<head>
<title>Launch Event</title>
<meta name='viewport' content='width=device-width, user-scalable=no'>
<link rel='stylesheet' type='text/css' href='style.css' />
</head>
<body>
<a href='index.php'>&lt; back</a>
<form name='hosting' method='get' action='attend.php'>

<div id='details'>
" . $row['fname'] . " " . $row['lname'] . "<br />
";

$type = $row['type'];

if ($type == 1)
	{
	echo "IBMer";
	}
if ($type == 2)
	{
	echo "<span id='executive'>IBM Executive</span>";
	}
if ($type == 3)
	{
	echo "<span id='bp'>Business Partner</span>";
	}
if ($type == 4)
	{
	echo "<span id='customer'>Customer</span>";
	}

echo "<br />
";

echo $row['jobrole'];

if ($type > 1)
	{
	echo "<br />
	at " . $row['company'];
	}

if ($type == 1)
	{
	echo "<br />
	Hosting:<br />
	<input form='hosting' type='text' name='hosting'>
	";
	}

if ($row['attend'] == 1)
	{
	echo "<br />
	<span id='warning'>ALREADY ATTENDING</span>
	";
	}
	
echo "<br />
<button name='id' type='submit' formaction='attend.php' formmethod='get' value='" . $id . "'>Confirm attendance</button>

</div>
</form>

</body>
</html>
";

?>