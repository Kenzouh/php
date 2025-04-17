<?php

    //! Input this in URL tab: http://localhost/php/index28_query.php
    //? Input this in URL tab to see and edit databases: http://localhost/phpmyadmin/

    include("index28_database.php");

    // Retrieving data from MySQL DB.
    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        // While there are rows, display each user info.
        while($row = mysqli_fetch_assoc($result)){

                         // Columns
            echo "<b>ID: </b>" . $row["id"] . "<br/>";
            echo "<b>Username: </b>" . $row["user"] . "<br/>";
            echo "<b>Registration Date: </b>" . $row["reg_date"] . "<br/><br/>";
        }
    }

    else{
        echo"No user found.";
    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Querying MySQL Database 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Querying Data Into MySQL in PHP 2."/>
    <meta name="keywords" content="PHP, MySQL, Database, Query"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

</body>
</html>