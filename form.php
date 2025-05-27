<?php

$servername = "localhost";
$username = "root";
$password = "root@lsc";
$dbname = "lscregdb";


if(isset($_POST['Submit'])){
    //Fill variables from form
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $houseNum = $_POST['houseNum'];
    $postcode = inputTest($_POST['postcode']);
    $inMem = $_POST['inMem'];


    //Fill insert query
    $query = "INSERT INTO Registrations (firstName, lastName, houseNum, postcode, introMem) 
    Values (?, ?, ?, ?, ?)";

   $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check Conn
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssiss", $fName, $lName, $houseNum, $postcode, $inMem);

    if($stmt->execute()) {
    /*echo "NEW RECORD SUCESSFULL <br>";*/
    }
    else {
        echo "Error: ". $query . "<br>" . $conn->error;

        $conn->close();

    }

}
/*
else{
    echo "ITS NOT WORKING!";
}
    */

function inputTest($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<html lang="en">
    <head>
        <Title>Thank You</Title>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mycss/style.css" type="text/css" />
    </head>
    <body>
        <fieldset style="padding-top: 10%;">
            <img src="logo-inv.png" alt="LSC LOGO">
            <h1>Thank you for signing in</h1>
            <h1>We hope you enjoy your time in the club!<br>Please see the barstaff to get a drink</h1>
        </fieldset>
    </body>
</html>