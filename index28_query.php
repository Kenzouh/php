<?php

    //! Input this in URL tab: http://localhost/php/index28_query.php
    //? Input this in URL tab to see and edit databases: http://localhost/phpmyadmin/

    include("index28_database.php");

    // Retrieving data from MySQL DB.

    // W/o "WHERE" clause, your query will return more than 1 row.
    $sql = "SELECT * FROM users WHERE user = 'Nolan'";

    // result = object
    $result = mysqli_query($conn, $sql);

    // Will return how many rows are within the result.
    if(mysqli_num_rows($result) > 0){

        // Fetches the next available row. assoc for associative, then pass the $result
        $row = mysqli_fetch_assoc($result);

           // columns 
        echo $row["id"] . "<br/>";
        echo $row["user"] . "<br/>";
        echo $row["reg_date"] . "<br/>";
    
    }

    else{
        echo"No user found with the name 'Nolan'";
    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Querying MySQL Database</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Querying Data Into MySQL in PHP."/>
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