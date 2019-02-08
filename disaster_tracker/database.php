<?php

$server   = "localhost";
$database = "craftedb_disaster_tracker";
$username = "craftedb_apollo";
$password = "A[{heT@sS5<";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

?>
