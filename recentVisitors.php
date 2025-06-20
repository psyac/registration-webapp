<?php

$servername = "localhost";
$username = "root";
$password = "root@lsc";
$dbname = "lscregdb";
$records = [[]];
$count = 0;


    $conn = mysqli_connect($servername, $username, $password, $dbname);


    $query = "SELECT * FROM Registrations ORDER BY dateTime DESC LIMIT 5";
    
    $result = $conn->query( $query );
    while( $row = mysqli_fetch_array( $result ) )
    {
        $records[$count][0] = $row['firstName']." ".$row['lastName'];
        $records[$count][1] = $row['postcode'];
        $records[$count][2] = $row['dateTime'];
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
        <fieldset style="padding-top: 18%;">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Postcode</th>
                    <th>Date/Time</th>
                </tr>
                <tr>
                    <td><?= htmlspecialchars($records[0][0]) ?></td>
                    <td><?= htmlspecialchars($records[0][1]) ?></td>
                    <td><?= htmlspecialchars($records[0][2]) ?></td>
                </tr>
                <tr>
                    <td><?= htmlspecialchars($records[1][0]) ?></td>
                    <td><?= htmlspecialchars($records[1][1]) ?></td>
                    <td><?= htmlspecialchars($records[1][2]) ?></td>
                </tr>
                <tr>
                    <td><?= htmlspecialchars($records[2][0]) ?></td>
                    <td><?= htmlspecialchars($records[2][1]) ?></td>
                    <td><?= htmlspecialchars($records[2][2]) ?></td>
                </tr>
                <tr>
                    <td><?= htmlspecialchars($records[3][0]) ?></td>
                    <td><?= htmlspecialchars($records[3][1]) ?></td>
                    <td><?= htmlspecialchars($records[3][2]) ?></td>
                </tr>
                <tr>
                    <td><?= htmlspecialchars($records[4][0]) ?></td>
                    <td><?= htmlspecialchars($records[4][1]) ?></td>
                    <td><?= htmlspecialchars($records[4][2]) ?></td>
                </tr>
            </table>

        </fieldset>
    </body>

</html>