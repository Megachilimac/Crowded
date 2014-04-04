<?php

// Prevent caching.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');

// The JSON standard MIME header.
header('Content-type: application/json');

// This ID parameter is sent by our javascript client.
$markdata = $_REQUEST['markdata'];

$con=mysqli_connect("localhost","test","","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO featuredata (geojson) VALUES('$markdata')");
mysqli_close($con);

//$conn = mysql_connect('localhost', 'root', '');
//$db   = mysql_select_db('crowded');
//if(mysql_query("INSERT INTO featuredata VALUES('$id')"))
//	echo "Successfully Inserted";
//else
//	echo "Insert failed.";

// Here's some data that we want to send via JSON.
// We'll include the $id parameter so that we
// can show that it has been passed in correctly.
// You can send whatever data you like.
// $data = array("Hello", $id);

// Send the data.
// echo json_encode($data);

?>