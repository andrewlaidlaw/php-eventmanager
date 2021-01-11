<?php

require_once 'functions.php';

$id = $_REQUEST['id'];

$con=connect();

$query = "UPDATE attendees SET attend=1 WHERE id=" . $id;
$result = mysqli_query($con, $query);

disconnect($con);

include 'index.php';

?>