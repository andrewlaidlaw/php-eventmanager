<?php

require_once 'functions.php';

$id = $_REQUEST['id'];

$con=connect();

$query = "UPDATE attendees SET attend=1 WHERE id=" . $id;
$result = mysql_query($query, $con);

disconnect($con);

include 'index.php';

?>