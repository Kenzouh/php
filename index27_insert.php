<?php
    //! Input this in URL tab: http://localhost/php/index27_insert.php
    //? Input this in URL tab to see and edit databases: http://localhost/phpmyadmin/

    include("index27_database.php");

    // Method 1: Inserting strings themselves.
    
                    // name  columns
    $sql = "INSERT INTO users (user, password)
            VALUES ('Johanna', 'ferrari922')";

    try{
             // connection, SQL query
        mysqli_query($conn, $sql);// Submits the query
        echo"User [Johanna] is now registered.";
    }
    catch(mysqli_sql_exception){
        echo"Could not register user.";
    }

    // Closing the connection
              // $conn is underlined because VS Code doesn't recognize it because it belongs 
              // to a different file, but this will still work.
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inserting Into a MySQL Database</title>

    <meta charset="UTF-8"/>
    <meta name="description" content="Inserting Data Into MySQL Tables in PHP."/>
    <meta name="keywords" content="PHP, MySQL, Database, Insert, Table"/>
    <meta name="author" content="Kenzo"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--meta http-equiv="refresh" content="60"/-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="icon" type="image/jpg" href="img/favicon.jpg"/>
</head>
<body>

</body>
</html>