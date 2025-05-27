<?php

$servername = "localhost";
$username = "root";
$password = "root@lsc";
$dbname = "lscregdb";

echo "WHY DELILAH <br>";

if(isset($_POST['Submit'])){
    //Fill variables from form
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $houseNum = $_POST['houseNum'];
    $postcode = $_POST['postcode'];
    $inMem = $_POST['inMem'];

    echo "is this working". $fName ." ? <br>";


    //Fill insert query
    $query = "INSERT INTO Registrations (firstName, lastName, houseNum, postcode, introMem) 
    Values (?, ?, ?, ?, ?)";

   $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check Conn
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    /*
    if($conn->query($query) === TRUE) {
    echo "NEW RECORD SUCESSFULL <br>";
    }
    */
    //($fName, $lName, $houseNum, $postcode, $inMem)

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssiss", $fName, $lName, $houseNum, $postcode, $inMem);

    if($stmt->execute()) {
    echo "NEW RECORD SUCESSFULL <br>";
    }
    else {
        echo "Error: ". $query . "<br>" . $conn->error;

        $conn->close();

    }

}
else{
    echo "ITS NOT WORKING!";
}

?>