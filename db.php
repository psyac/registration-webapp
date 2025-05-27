<?php 

$servername = "localhost";
$username = "root";
$password = "root@lsc";
$dbname = "lscregdb";
$query = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn) {
   // die("Connection Failed: " . mysqli_connect_error());
   
}

$query = "SELECT * FROM Registrations";
$result = mysqli_query($conn, $query);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "ID: ". $row["regID"] ."Name: " . $row["firstName"] . $row["lastName"] . "<br>";
    }
}
else
{
    echo "zero results";
}
$conn->close();

function inputTest($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>