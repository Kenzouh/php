<?php

    //! Input this in URL tab: http://localhost/php/index27_insert2.php
    //? Input this in URL tab to see and edit databases: http://localhost/phpmyadmin/

    include("index27_database.php");

    $username = "Olaf";
    $password = "mountainman"; 

    // Method 2: Inserting the variables' values.

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$password')";

    try{
        mysqli_query($conn, $sql);
        echo"User [$username] is now registered.";
    }

    catch(mysqli_sql_exception){
        echo"Could not register user.";
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inserting Into a MySQL Database 2</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Inserting Data Into MySQL Tables in PHP."/>
    <meta name="keywords" content="PHP, MySQL, Database, Insert 2, Table"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

</body>
</html>