<?php

$servername = "localhost";
$username = "root";
$password = "root@lsc";
$dbname = "lscregdb";
$records = [];
$count = 0;


    $conn = mysqli_connect($servername, $username, $password, $dbname);


    $query = "SELECT * FROM Registrations ORDER BY dateTime ASC LIMIT 5";
    
    $result = $conn->query( $query );
    while( $row = mysqli_fetch_array( $result ) )
    {
        $records[$count] = $row['firstName']." ".$row['lastName']." ".$row['postcode']." ".$row['dateTime'];
        $count ++;
    }


    $conn->close();

       

/*
else{
    echo "ITS NOT WORKING!";
}
    */

?>


<html lang="en">
    <head>
        <Title>RECENTS</Title>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mycss/style.css" type="text/css" />
    </head>
    <body>
        <fieldset style="padding-top: 25%;">
            <h1><?= htmlspecialchars($records[0]) ?></h1>
            <h1><?= htmlspecialchars($records[1]) ?></h1>
            <h1><?= htmlspecialchars($records[2]) ?></h1>
            <h1><?= htmlspecialchars($records[3]) ?></h1>
            <h1><?= htmlspecialchars($records[4]) ?></h1>
        </fieldset>
    </body>

</html>