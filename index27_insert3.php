<?php

    //! Input this in URL tab: http://localhost/php/index27_insert3.php
    //? Input this in URL tab to see and edit databases: http://localhost/phpmyadmin/

    include("index27_database.php");

    // Method 3: With Password Hashing.

    $user = "Nolan";
    $password = "nobleman";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
           VALUES('$user', '$hash')";

    try{
        mysqli_query($conn, $sql);
        echo"[{$user}] is now registered.";
    }

    catch(mysqli_sql_exception){
        echo"[{$user}] is already taken.<br/>   ";
        echo"Could not register user.<br/>";
    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inserting Into a MySQL Database 3</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Inserting Data Into MySQL Tables in PHP."/>
    <meta name="keywords" content="PHP, MySQL, Database, Insert 3, Table"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

</body>
</html>