<?php

$servername = "localhost";
$username = "root";
$password = "root@lsc";
$database = "lscregdb";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

echo "HELLO WORLD";

//Check Connection
if ("$conn->connect_error") {
    die("Connection failed: " . $conn->connect_error);
}
 echo "Connected Successfully";


$conn->close()
?>