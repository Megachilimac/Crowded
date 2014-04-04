<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');

// The JSON standard MIME header.
header('Content-type: application/json');

$con=mysqli_connect("localhost","test","","test");
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"INSERT INTO featuredata (geojson) VALUES('abc123')");
mysqli_close($con);


?>