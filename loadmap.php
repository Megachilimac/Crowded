<?php  

require("dbinfo.php"); 

$mysqli = new mysqli("localhost", $username, $password, $database);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


// Select all the rows in the markers table

$query = "SELECT geojson FROM featuredata";
$arr = array();
/* Select queries return a resultset */
if ($result = $mysqli->query($query)) {

while ($row = mysqli_fetch_object($result)) {
$arr[] = $row;
}
echo '{"members":'.json_encode($arr).'}';
//echo json_encode($row['geojson'], JSON_NUMERIC_CHECK);

    $result->close();
}
$mysqli->close();


?>