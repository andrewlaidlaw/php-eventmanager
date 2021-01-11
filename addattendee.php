<?php

echo "
<html>
<head>
<title>Launch Event</title>
<meta name='viewport' content='width=device-width, user-scalable=no'>
<link rel='stylesheet' type='text/css' href='style.css' />
</head>
<body>
<a href='index.php'>&lt; back</a>
<form name='add' method='get' action='addaction.php'>
<table>
<tr><td>First Name:</td><td><input type='text' name='fname'></td></tr>
<tr><td>Last Name:</td><td><input type='text' name='lname'></td></tr>
<tr><td>Job Title:</td><td><input type='text' name='jobrole'></td></tr>
<tr><td>Company:</td><td><input type='text' name='company'></td></tr>
<tr><td colspan='2'>Attendee Type:<br />
<input type='radio' name='type' value='4'>Customer<br />
<input type='radio' name='type' value='3'>Business Partner<br />
<input type='radio' name='type' value='2'>IBM Executive<br />
<input type='radio' name='type' value='1'>IBMer<br />
</td></tr>
</table>
<input type='submit' value='Add attendee'>
</form>
</body>
</html>
";

?>