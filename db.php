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

/*
$query = "INSERT INTO Registrations (firstName, lastName, houseNum, postcode, introMem) 
Values ('Horatio', 'James', 44, 'M12 3PY', '')";

if($conn->query($query) === TRUE) {
    echo "NEW RECORD SUCESSFULL <br>";
}
else {
    echo "Error: ". $query . "<br>" . $conn->error;
}
    */


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

?>